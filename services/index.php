<html>
	<head>
		<?php include '../meta.php'; ?>
		<title>Services by Perry's Home Furnishings & Design</title>
	</head>
	<body>
		<header class="site-header">
			<?php include '../site-header.php'; ?>
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
			</style>
		</header>
	
		
		
		<div id="content" class="wrapper">
			<div class="container">

			<div class="splash">
				<div id="splash-branding">
					<h1>Services</h1>
				</div>
			</div>
					<div class="center">
						<h2>Room Planning & Design</h2>
						<p>Tell us about your space and the existing pieces you plan to use and together we’ll find new pieces to work 
						with what you already have or create an entirely new room. Schedule an appointment to meet with one of our designers. 
						They will work closely with you through the entire process or just the portion of it you may need. Bring us your photos, 
						measurements, and the inspirations you have gathered for your dream room.
						</p>
					</div>
					
					<div class="center">
						<h2>Home Staging</h2>
						<p>Our professional stagers/stylists transform properties to appeal to the desired lifestyle of a 
							buyer and to accentuate the significant features of the home so that you can confidently market the listing to meet your goals.
						</p>
					</div>

					<div class="center">
						<h2>White Glove Delivery</h2>
						<p>Our personable and professional delivery team will install your new furnishings and take away what 
						you no longer need. This is a free service in Waldo County, with minimal fees throughout the rest of Maine.
						</p>
					</div>
				</div>
				
			</div>
			
			<div class="container">
				<style type="text/css">
					input, textarea {
						border: 1px solid #BBB;
						border-radius: 3px;
						font-family: "Questrial", sans-serif;
						height: 30px;
						width: 100%;
						padding: 4px;
					}
					textarea{
						height: 150px;
					}
					label{
						font-family: 'Roboto Slab', serif;
						font-weight: bold;
					}
					td{
						padding: 4px;
					}
				</style>
				<div class="center">
					<h2>Request an Appointment</h2>

					<form name="contactform" method="post" action="send-email-form.php">
 
					<table width="450px" style="margin:0 auto">
						<tr>
							<td valign="top">
								<label for="first_name">First Name *</label>
							</td>
 
						 	<td valign="top">
								<input  type="text" name="first_name" maxlength="50" size="30">
							</td>
						</tr>
						<tr>
							<td valign="top">
								<label for="last_name">Last Name *</label>
							</td>
							<td valign="top">
								<input  type="text" name="last_name" maxlength="50" size="30">
							</td>
						</tr>
						<tr>
							<td valign="top">
								<label for="email">Email Address *</label>
							</td>
							<td valign="top">
								<input  type="text" name="email" maxlength="80" size="30">
							</td>
						</tr>
						<tr>
							<td valign="top">
								<label for="telephone">Telephone Number</label>
							</td>
							<td valign="top">
								<input  type="text" name="telephone" maxlength="30" size="30">
							</td>
						</tr>
						<tr>
							<td valign="top">
								<label for="comments">Design Needs *</label>
							</td>
							<td valign="top">
								<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
							</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center">
								<input type="submit" value="Submit">
							</td>
						</tr>
					</table>
				</form>
					
				</div>
			
			</div>
			
		</div>
		
		<?php include '../footer.php'; ?>
		
	</body>
</html>