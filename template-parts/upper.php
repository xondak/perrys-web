<!-- This document begins the entire site. -->
<html>
	<head>
		<?php
			if ($location == "home") {
				include 'template-parts/meta.php';
			}
			else {
				include '../template-parts/meta.php';
			}
		?> <!-- Pulls in all the metadata for each page -->
		<title><?php echo($LocName); ?> | Perry's Home Furnishings &amp; Design</title>
		<script> 
			function viewportToPixels(value) { // This function converts viewport height to pixels
				var parts = value.match(/([0-9\.]+)(vh|vw)/)
				var q = Number(parts[1])
				var side = window[['innerHeight', 'innerWidth'][['vh', 'vw'].indexOf(parts[2])]]
				return side * (q/100)
			}

			var noContentPage = document.getElementsByClassName('no-content'); // Checks if page is a 'no-content' page
			
			window.addEventListener('scroll', function(e) {
				var viewportHeight = viewportToPixels("100vh"); // Sets previous function's result to value  
				var nav = document.getElementById('home');
				if(window.scrollY >= viewportHeight && noContentPage.length == 0){ // Determines where the viewport is and checks if the page is no-content
					nav.classList.add("nav-shrunk"); // Adds the class to the nav bar
				}
				else if(window.scrollY <= viewportHeight && noContentPage.length == 0){
					nav.classList.remove("nav-shrunk");
				}
			});

		</script>
	</head>
	<body>
		<header class="site-header">
			<?php
				if ($location == "home") {
					include 'template-parts/site-header.php';
				}
				else {
					include '../template-parts/site-header.php';
				}
			?><!-- Builds page's navigation -->
		</header>
	<?php //if ($location !== "home"): ?>
		<div <?php echo('id="' . $location . '"'); ?> class="wrapper<?php echo(' ' . $noContent); ?>">
			<div id="bash" class="splash">
				<div class="blank"> </div>
				<div id="splash-branding">
					<div class="center">
						<?php echo($splashContent);?>
					</div>
				</div>
				<?php
					if ($scrollDown==true){
						echo "<a id='down' href='#down'></a>";
					}
					else{
						echo "<div class='blank'> </div>";
					}
				?>
			</div>
		</div>
	<?php// endif ?><!-- Echoes variables from pages to build the splash screens of each page -->