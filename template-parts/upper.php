<html>
	<head>
		<?php include '../template-parts/meta.php'; ?>
		<title><?php echo($LocName); ?> | Perry's Home Furnishings &amp; Design</title>
	</head>
	<body>
		<header class="site-header">
			<?php include '../template-parts/site-header.php'; ?>
		</header>
        <div <?php echo('id="' . $location . '"'); ?> class="wrapper<?php echo(' ' . $noContent); ?>">
        	<div id="bash" class="splash">
		        <div id="splash-branding">
                    <div class="center">
                        <?php echo($splashContent); ?>
                    </div>
    	    	</div>
        	</div>
        </div>