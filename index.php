<html>
	<head>
		<?php $location = "home";
			  include 'template-parts/meta.php'; ?>
		<title>Perry's Home Furnishings & Design</title>
	</head>
	<body>
		<header class="landing-header">
				<div class="tile" id="one">
					<a href="about">
						<img src="img/landing/logo.svg" />
					</a>
				</div>
			<div class="container" id="right-container"><!-- Container Right -->
				<div class="container" id="lower-container"><!-- Lower Container -->
					<a href="new-arrivals">
						<div class="tile" id="three">
							<h1>New Arrivals</h1>
						</div>
					</a>

					<div class="container" id="middle-container"><!-- Middle Container -->
							<a href="/sale/shop">
								<div class="tile" id="four">
									<h1>Floor Samples</h1>
								</div>
							</a>
							<a href="manufacturers">
								<div class="tile" id="five">
									<h1>Manufacturers</h1>
								</div>
							</a>
					</div><!-- /Middle Container -->
				</div>
					<a href="services">
						<div class="tile" id="two">
							<h1>Services</h1>
						</div>
					</a>
					
			</div>
		</header>

		</div>
		<?php include 'template-parts/footer.php'; ?>
		<script>
			window.onload=chromeViewportWorkAround("one","right-container");
		</script>
	</body>
</html>