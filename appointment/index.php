<?php $LocName="Request an Appointment";
	  $location="service";
	  $noContent="no-content";
	  $splashContent="";
	  include '../template-parts/upper.php';
?>
<div id="appointment" class="content">
	<div class="container">
		<div class="center col-1">
			<h2>Request an Appointment</h2>
				<form name="contactform" method="post" action="../services/send-email-form.php">
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