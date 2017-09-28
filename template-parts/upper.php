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
		<script> 
			function viewportToPixels(value) { // This function converts viewport height to pixels
				var parts = value.match(/([0-9\.]+)(vh|vw)/)
				var q = Number(parts[1])
				var side = window[['innerHeight', 'innerWidth'][['vh', 'vw'].indexOf(parts[2])]]
				return side * (q/100)
			}

			var noContentPage = document.getElementsByClassName('no-content'); // Checks if page is a 'no-content' page
			
			window.addEventListener('scroll', function(e) {
				var viewportHeight = viewportToPixels("100vh"); // Sets previous function's result to value  
				var nav = document.getElementById('home');
				if(window.scrollY >= viewportHeight && noContentPage.length == 0){ // Determines where the viewport is and checks if the page is no-content
					nav.classList.add("nav-shrunk"); // Adds the class to the nav bar
				}
				else if(window.scrollY <= viewportHeight && noContentPage.length == 0){
					nav.classList.remove("nav-shrunk");
				}
			});

			function removeBanner(collapseMe){ // This function handles the display of the email signup banner and the announcement banner.
				let mcBanner = document.cookie.indexOf('bannerHidden=');
				let announceBanner = document.cookie.indexOf('announceBanner=');
				const element = document.getElementById('mailchimpHeader');
				const mcElement = document.getElementById('mcGoAway');
				const announceElement = document.getElementById('announce-banner');
				if (mcBanner != -1 && announceBanner != -1){
					element.parentNode.removeChild(element); // Completely removes the mailchimpHeader (which contains both banners)
				}
				else if (mcBanner != -1 && announceBanner == -1){
					if (collapseMe === true){
						element.parentNode.removeChild(element); // This collapses the entire banner container
					}
					else{
						mcElement.parentNode.removeChild(mcElement); // This removes the email signup (mcGoAway) and displays ONLY the announcement banner
					}
				}
				else if (mcBanner == -1) {
					if (collapseMe === true){
						element.parentNode.removeChild(element); // Similar logic to above
					}
					else{
						announceElement.parentNode.removeChild(announceElement);
					}
				};
			};
			
			function setCookie(cname, cvalue, exdays, sub) {
				var d = new Date();
				d.setTime(d.getTime() + (exdays*24*60*60*1000));
				var expires = "expires="+ d.toUTCString();
				document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
				if(sub===true){
					document.forms["emailSignUpBanner"].submit();
				};
				removeBanner(true); // This uses the collapseMe parameter of this function to completely remove the mailchimpHeader from DOM after clicking the close button
			};
		</script>
	</head>
	<body>
		<div id="mailchimpHeader" class="js-delete">
			<div id="announce-banner">
				<p><b>Going on now:</b> Buy any mattress and get the matching foundation <em>free!</em></p>
				<p>Offer ends October 9th!</p>
				<input id="closeBTN" class="announce-banner" type='button' value='x' onclick="setCookie('announceBanner', true, 2);"></input>
			</div>
			<div id="mcGoAway">
				<p class="mcGoAway"><em>Join the Perry's Home family: </em></p>
				<form id="emailSignUpBanner" class="mcGoAway" action="https://perryshomefurnishingsanddesign.us12.list-manage.com/subscribe/post" method="POST">
					<input type="hidden" name="u" value="6d640f52eacace4c983132e22">
					<input type="hidden" name="id" value="4bd7d63c08">

					<div id="mergeTable" class="mergeTable">

						<div class="mergeRow dojoDndItem mergeRow-email" id="mergeRow-0">
							<label for="MERGE0">Email Address <span class="req asterisk">*</span></label>
							<div class="field-group">
								<input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="35" value="" placeholder="Email Address">
								
							</div>
							
						</div>
						
					</div>
					<div class="submit_container clear">
						<input type="submit" class="button" name="submit" value="SUBSCRIBE" onclick="setCookie('bannerHidden', true, 220, true);">
					</div>
					<input type="hidden" name="ht" value="0e8c57baf2e9d1043a36fc473331b43a9062a9dd:MTUwNjA5NzIwNi43MTUy">
					<input type="hidden" name="mc_signupsource" value="hosted">
				</form>
				<input id="closeBTN" class="mcGoAway" type='button' value='x' onclick="setCookie('bannerHidden', true, 60);"></input>
			</div>
			<script>
				window.onload = removeBanner(false); // Set this parameter to TRUE when there are no announcements to be made.
			</script>

		</div>
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
	<?php //if ($location !== "home"): ?>
		<div <?php echo('id="' . $location . '"'); ?> class="wrapper<?php echo(' ' . $noContent); ?>">
			<div id="bash" class="splash">
				<div class="blank"> </div>
				<div id="splash-branding">
					<div class="center">
						<?php echo($splashContent);?>
					</div>
				</div>
				<?php
					if ($scrollDown==true){
						echo "<a id='down' href='#down'></a>";
					}
					else{
						echo "<div class='blank'> </div>";
					}
				?>
			</div>
		</div>
	<?php// endif ?><!-- Echoes variables from pages to build the splash screens of each page -->