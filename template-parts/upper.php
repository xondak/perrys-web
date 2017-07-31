<html>
	<head>
		<?php
			if ($location == "home") {
				include 'template-parts/meta.php';
			}
			else {
				include '../template-parts/meta.php';
			}
		?>
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
			?>
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
	<?php endif ?>