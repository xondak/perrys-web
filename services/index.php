<?php $LocName="Services";
	  $location="service";
	  $noContent="no-content";
	  $splashContent="";
	  include '../template-parts/upper.php';
?>
<div id="content" class="wrapper">
	<div class="container">
		<h1>Services</h1>
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
	<div class="center">
		<h2>Request an Appointment</h2>

		<form name="contactform" method="post" action="send-email-form.php">

			<div class="form">
				<div class="item">
					<label for="first_name">First Name*</label>
					<input  type="text" name="first_name" maxlength="50" size="30">
				</div>
				<div class="item">
					<label for="last_name">Last Name*</label>
					<input  type="text" name="last_name" maxlength="50" size="30">
				</div>
				<div class="item">
					<label for="email">Email Address*</label>
					<input  type="text" name="email" maxlength="80" size="30">
				</div>
				<div class="item">
					<label for="telephone">Telephone Number</label>
					<input  type="text" name="telephone" maxlength="30" size="30">
				</div>
				<div class="item">
					<label for="comments">Design Needs*</label>
					<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
				</div>
				<input class="form-button" type="submit" value="Submit">
			</div>

		</form>
		
	</div>
</div>
<?php include '../template-parts/lower.php'; ?>