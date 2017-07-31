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
	<?php if ($location !== "home"): ?>
		<div <?php echo('id="' . $location . '"'); ?> class="wrapper<?php echo(' ' . $noContent); ?>">
			<div id="bash" class="splash">
				<div id="splash-branding">
					<div class="center">
						<?php echo($splashContent);?>
					</div>
				</div>
			</div>
		</div>
	<?php endif ?><!-- Echoes variables from pages to build the splash screens of each page -->