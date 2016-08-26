<html>
	<head>
		<?php include '../meta.php'; ?>
		<title>Manufacturers Perry's Home Furnishings & Design</title>
		<style type="text/css">
			.splash{
				background-image: none;
				background-color: white;
				color: black;
				justify-content: flex-start;
				margin-top: 34px;
				height: auto;
			}
			
			#splash-branding h1, #splash-branding p{
				color:black;
				text-shadow: none;
			}

			#splash-branding p:first-of-type{
				border-top: solid #000;
			}
			
			#splash-branding img{
				width: auto;
			}

			.center{
				text-align: center;
			}
			.flex-container a{
				text-decoration: none;
			}
			.flex-container{
				flex-direction: row;
				align-items: center;
				display: flex;
				justify-content: space-around;
				margin: 72px 0;
			}
			.column a:last-of-type{
				margin-top: 72px;
			}
			.column{
				display: flex;
				flex-direction: column;
				justify-content: space-around;
				align-items: center;
			}
			@media screen and (max-width:948px){
				.flex-container{
					flex-wrap: wrap;
				}
			}
			
			@media screen and (max-width:600px){
				.flex-container{
					flex-direction: column;
					margin: 0;
				}
				.column a:last-of-type{
					margin-top: 0;
				}
				.item{
					margin: 1rem 0;
				}
			}

		</style>	
	</head>
	<body>
		<header class="site-header">
			<?php include '../site-header.php'; ?>
		</header>
	
		
		
		<div id="content" class="wrapper">
			<div class="splash">
				<div id="splash-branding">
					<h1>Manufacturers</h1>
					<div class="flex-container">
						<div class="column item">
							<a href="http://flexsteel.com">
								<img src="flex.png" alt="Flexsteel" class='item'>
							</a>
							<a href="http://lazboy.com">
								<img src="laz.png" alt="La-z-boy" class='item'>
							</a>
						</div>
						<a href="http://www.magnoliahomefurniture.com/" class='item'>
							<img src="mag.png" alt="Magnolia Home" class='item'>
						</a>
						<div class="column item">
							<a href="http://www.kingkoil.com/catalog/mattress/laura-ashley/c-25/c-86">
								<img src="la.png" alt="Laura Ashley" class='item'>
							</a>
							<a href="http://www.kingkoil.com/catalog/mattress/world-luxury/c-25/c-83">
								<img src="wl.png" alt="World Luxury" class='item'>
							</a>
						</div>
					</div>
					<div class="flex-container">
							<a href="http://shopfourseasonsfurniture.com/">
								<img src="fs.png" alt="Four Seasons Furniture" class='item'>
							</a>
							<a href="http://puretalalaybliss.com/">
								<img src="plb.jpg" alt="Pure Latex Bliss | Pure Talalay Bliss" class='item'>
							</a>
							<a href="https://www.besthf.com/besthf/Furniture/Home">
								<img src="best.jpg" alt="Best Home Furnishings" class='item'>
							</a>
					</div>
				</div>
			</div>
			
			<?php include 'full-list.php'; ?>
			
		</div>
		
		<?php include '../footer.php'; ?>
		
	</body>
</html>