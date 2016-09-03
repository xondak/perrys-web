<html>
	<head>
		<?php include '../template-parts/meta.php'; ?>
		<title>About Perry's Home Furnishings & Design</title>
	</head>
	<body>
		<header class="site-header">
			<?php $location = "about";
				  include '../template-parts/site-header.php'; ?>
		</header>
	
		<style>
			.splash{
				background-image: url('header.jpg');
			}
		</style>
		
		<div id="content" class="wrapper">
			<div id="bash" class="splash">
				<div id="splash-branding">
					<div class="center">
					<h1>About Us</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="body">
				<div id="body" class="center">
					<p>Shopping for home furnishings is a very personal experience. Our aim is to guide you through the decision making process so that you can love your home!</p>
					<p>Housed in the original timber framed barn on the family homestead, our showroom covers three floors and over 15,000 square feet. 
					You&#39;re sure to find inspiration here!</p>
					<p>Six generations of the family have lived on the property and an extended &quot;family&quot; of dedicated and talented people 
					continue to cultivate what Doug and Dotty Perry began in 1978. Come and visit Lily the golden retriever &mdash; she&#39;ll greet you at the door with a smile!</p>
					<strong style="margin-bottom:2em;"><p>We are open Monday &mdash; Friday 10:00 AM - 5:30 PM</p><p>Saturday 10:00 AM - 5:00 PM</p>
					<p>Closed Sunday</p></strong>
				</div>
			</div>
		</div>
		
		<?php include '../template-parts/footer.php'; ?>
			<script>
				window.onload=chromeViewportWorkAround("bash",null);
			</script>
	</body>
</html>