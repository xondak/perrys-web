<?php
	include 'Parsedown.php';
	$Parsedown = new Parsedown(); // Invokes Parsedown -- Moved from inside the foreach loop
	$dir = 'posts/'; // $dir defines the directory to search for the .md Markdown files

	if ( htmlspecialchars($_GET["id"]) == 0 ) {
		renderFive($dir, $Parsedown);
	}
	else {
		renderSingle($dir, $Parsedown);
	}

	function startPage($title, $loc, $splash, $noc){ // Begins page rendering
		$LocName=$title; // Sets page title
		$location=$loc; // Sets location (for nav bar)
		$splashContent=$splash; // Sets splash content
		$noContent=$noc; // Defines if the page lacks a splash	
		include '../template-parts/upper.php'; // Begins rendering page
	}

	function renderFive($dir, $Parsedown){
		$indir = array_filter(scandir($dir), function($item) { // This removes the . and .. directories from the array
			return $item[0] !== '.';
		});

		$next = htmlspecialchars($_GET["next"]); // Grabs ?next= string from url, increments and decrements into separate variables.
		$goNext = $next + 1;
		$goPrev = $next - 1;
		$grabNext = $next * 3;
		$grabFurther = $grabNext + 3;
		
		$reversed = array_reverse($indir); // Reverses the display order
		if($next == 0){
			$posts = array_slice($reversed, 0, 3); // This grabs the first three entries in the array
		}
		else {
			$posts = array_slice($reversed, $grabNext, 3); // This sets the next page
		}

		

		startPage("New Arrivals", "new", "<h1>New Arrivals</h1>", null); // Passes relevant info to the startPage function.

		print("<article class='container post'>"); // Generates the article wrapper
	

		foreach ($posts as &$value) {
			print("<div class='body'><div class='center new-posts'>"); // Creates individual post wrappers
			$post = $dir . $value; // Appends 'posts/' to each file
			echo is_readable($post) ? $Parsedown->text(file_get_contents($post)) : "<h1>Can't find ".htmlspecialchars($post)."</h1>"; // Imports .md files and pipes it through Parsedown, fails graciously
			echo "<div class='permalink-wrapper'><a href='?id=" . substr($value, 0, -3) . "' alt='Permalink'><div class='permalink'></div></a></div>"; // Strips the .md from permalink and adds it to the end of each page
			print("</div></div>"); // Closes each post's wrapper
		}
		print "<div id='post-nav'>";
		
		if($goPrev == 0){
			echo "<a href='/new-arrivals'>&lt;</a>";
		}
		elseif ($goPrev >= 1){
			echo "<a href='?next=" . $goPrev . "'>&lt;</a>";
		}
		else{
			print "<span class='disabled'>&lt;</span>";
		}
		print "<div class='spacer'></div>";
		if($grabFurther < count($indir)){
			echo "<a href='?next=" . $goNext . "'>&gt;</a>";
		}
		else{
			print "<span class='disabled'>&gt;</span>";
		}
		print "</div>";
		print("</article>"); // Closes main wrapper
	}
	
	function renderSingle($dir, $Parsedown){
		$post = $dir . htmlspecialchars($_GET["id"]) . ".md"; // Appends 'posts/' to each file
		if (is_readable($post) == true) {
			startPage(htmlspecialchars($_GET["id"]), "new", " ", "no-content"); // Passes relevant info to the startPage function.
			
			print("<article class='container post'><div class='center new-posts'>"); // Creates individual post wrappers
			echo $Parsedown->text(file_get_contents($post)); // Imports .md files and pipes it through Parsedown, fails graciously
			print("</div></article>"); // Closes each post's wrapper
		}
		else{
			include("../404/404.php");
		}
	}

	include '../template-parts/lower.php'; // Includes the footer for the page
?>