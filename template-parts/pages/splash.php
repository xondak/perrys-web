<?php $LocName="With Splash"; // Defines the pages title in title bar
	  $location="splash"; // $location is checked in nav.php to highlight where the user is in nav bar. Valid options are home, about, service, man, and blog 
	  $splashContent="<h1>About</h1>"; // Places whatever's in here into the splash
	  include '../template-parts/upper.php'; // Inserts the upper portion of the page
?>
<div class="container">
	<div class="body">
		<div id="body" class="center">

			<p>Your text here!</p>

			<?php // Learn more button
				$href="../history";
				$learnText = "Learn More";
				include "../template-parts/learn-btn.php";
			?>
			
		</div>
	</div>
</div>
<?php include '../template-parts/lower.php'; ?>