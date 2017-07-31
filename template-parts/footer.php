<footer>
	<div class="foot-wrap">
		<div id="foot-right" class="footer-content">
			<img src="/res/logo.svg" alt="" class="footer-branding">
			<div class="social-container"> <!-- Social media -->
				<a href="https://www.facebook.com/perryshome"><div id="fb" class="soc-link"></div></a>
				<a href="http://www.pinterest.com/perryshome"><div id="pin" class="soc-link"></div></a>
				<a href="http://www.instagram.com/perryshome"><div id="insta" class="soc-link"></div></a>
				<a href="https://www.youtube.com/user/perrysfurniture"><div id="yt" class="soc-link"></div></a>
				<!--<a href=""><div id="email" class="soc-link"></div></a>-->
			</div>
			<div class="copyright">Original works &copy;2016 Perry's Home Furnishings &amp; Design. All rights reserved.</div>
			<div class="policies"><a href="/policies">Policies</a> | <a href="/services">Request An Appointment</a></div>
		</div>
		<div id="foot-center" class="footer-content">
			<h2>Contact</h2>
			<a href="tel:2073383610">
				<div class="phone-number contact">(207) 338-3610</div>
			</a>
			<a href="https://goo.gl/maps/mw8VZNRcncJ2">
				<div class="address contact">111 Belmont Ave</div>
				<div class="address contact">Belfast, Maine</div>
			</a>
			<div class="days contact">Open Monday-Friday</div>
			<div class="hours contact">10:00 AM to 5:30 PM</div>
			<div class="days contact">Open Saturdays</div>
			<div class="hours contact">10:00 AM to 5:00 PM</div>
		</div>
		<div id="foot-left" class="footer-content">
		<h2>Navigation</h2>
			<?php include 'nav.php' ?>
		</div>
	</div>
</footer>
<!-- Google Analytics -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-73122506-1', 'auto');
	ga('send', 'pageview');
</script>
<script>
	function chromeViewportWorkAround(blockID,blockID2) {
		// REMOVE THIS FUNCTION AS SOON AS POSSIBLE. THIS IS THE WORST SOLUTION EVER.
		var h = window.screen.height;
		if (navigator.userAgent.match(/Android/i) && navigator.userAgent.match(/Chrome/i)) {
			document.getElementById(blockID).style.height = h + "px";
			if(blockID2 != null){
				// This checks if the second ARG is not null (which is only true of the landing page) and applies the same fix to the lower content
				document.getElementById(blockID2).style.height = h + "px";
			}
		}
	}
</script>
<!-- Facebook Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '584397561771478');
	fbq('track', 'PageView');
</script>
<noscript>
	<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=584397561771478&ev=PageView&noscript=1"/>
</noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->