<?php $LocName="Services";
	  $location="service";
	  $noContent="no-content";
	  $splashContent="";
	  include '../template-parts/upper.php';
?>
<div class="container">
	<div class="center">
		<h1>SERVICES</h1>
	</div>
	<div id="content" class="wrapper">
		<div class="container">
			<div class="center col-2">
				<h2>Room Planning &amp; Design</h2>
				<p>Tell us about your space and the existing pieces you plan to use and together we’ll find new pieces to work 
				with what you already have or create an entirely new room. Schedule an appointment to meet with one of our designers. 
				They will work closely with you through the entire process or just the portion of it you may need. Bring us your photos, 
				measurements, and the inspirations you have gathered for your dream room.
				</p>
			</div>
			
			<div class="center col-2">
				<h2>Home Staging</h2>
				<p>Our professional stagers/stylists transform properties to appeal to the desired lifestyle of a 
					buyer and to accentuate the significant features of the home so that you can confidently market the listing to meet your goals.
				</p>
			</div>

			<div class="center col-2">
				<h2>White Glove Delivery</h2>
				<p>Our personable and professional delivery team will install your new furnishings and take away what 
				you no longer need. This is a free service in Waldo County, with minimal fees throughout the rest of Maine.
				</p>
			</div>
			<br>
			<br>
		</div>
	</div>
</div>
<div id="appointment" class="content">
	<div class="container">
		<div class="center col-1">
			<script type="text/javascript">
					/*const submitbtn = document.getElementById("formBtn");
					var reqf = {
						fname: null,
						lname: null,
						email: null,
						comment: null
					};
					function validate(){

						console.log(reqf);
						if (reqf["fname"] != null && reqf["lname"] != null && reqf["email"] != null && reqf["comment"] != null)  {
							console.log("Should be enabled now");
							document.getElementById("btn").removeAttribute("disabled");
						}

						else {
							document.getElementById("btn").disabled = true;
						}

					}
					function formValidate(){
						console.log(reqf["fname"]);
						if(reqf["fname"] == null){
							console.log(reqf["fname"]);
							document.getElementById("fname").classList.add("missing");
						}
						if(reqf["lname"] == null){
							console.log(reqf["lname"]);
							document.getElementById("lname").classList.add("missing");
						}
						if(reqf["email"] == null){
							console.log(reqf["email"]);
							document.getElementById("eadd").classList.add("missing");
						}
						if(reqf["comment"] == null){
							console.log(reqf["comment"]);
							document.getElementById("com").classList.add("missing");
						}
					}*/

				</script>
			<h2>Request an Appointment</h2>
				<form name="contactform" method="post" action="send-email-form.php">
					<div class="form">
						<div class="item">
							<label for="first_name">First Name*</label>
							<input id="fname" placeholder="First Name" onchange="reqf.fname = value; validate(); this.classList.remove('missing');" type="text" name="first_name" maxlength="50" size="30">
						
							<label for="last_name">Last Name*</label>
							<input id="lname" placeholder="Last Name" onchange="reqf.lname = value; validate(); this.classList.remove('missing');" type="text" name="last_name" maxlength="50" size="30">
						</div>
						<div class="item">
							<label for="email">Email Address*</label>
							<input id="eadd" placeholder="Email Address" onchange="reqf.email = value; validate(); this.classList.remove('missing');" type="text" name="email" maxlength="80" size="30">
						
							<label for="telephone">Telephone Number</label>
							<input id="tel" placeholder="Telephone Number" type="text" name="telephone" maxlength="30" size="30">
						</div>
						<div class="item">
							<label for="comments">Design Needs*</label>
							<textarea id="com" placeholder="Design needs" onchange="reqf.comment = value; validate(); this.classList.remove('missing');" name="comments" maxlength="1000" cols="25" rows="6"></textarea>
						</div>
						<div onClick="formValidate();">
							<input id="btn" class="form-button" type="submit" value="Submit">
						</div>
					</div>
				</form>
		</div>
	</div>
</div>
<?php include '../template-parts/lower.php'; ?>