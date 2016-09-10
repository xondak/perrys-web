<footer>
	<div class="foot-wrap">
		<div id="foot-right" class="footer-content">
			<img src="/res/logo.svg" alt="" class="footer-branding">
			<div class="social-container">
				<a href="https://www.facebook.com/perrysfurniture"><div id="fb" class="soc-link"></div></a>
				<a href="http://www.pinterest.com/perryshome"><div id="pin" class="soc-link"></div></a>
				<a href="http://www.instagram.com/perryshome"><div id="insta" class="soc-link"></div></a>
				<a href="https://www.youtube.com/user/perrysfurniture"><div id="yt" class="soc-link"></div></a>
				<!--<a href=""><div id="email" class="soc-link"></div></a>-->

			</div>
			<div class="copyright">&copy;2016 Perry's Home Furnishings &amp; Design. <a href="/copyright">All rights reserved.</a></div>
			<div class="policies"><a href="/policies">Policies</a> | <a href="/services">Request An Appointment</a> | <a href="/terms">Terms</a></div>
		</div>
	
		<div id="foot-center" class="footer-content">
			<h2>Contact</h2>
			<a href="tel:2073383610">
				<div class="phone-number contact">(207) 338-3610</div>
			</a>
			<a href="" class="icon-map-marker">
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
				document.getElementById(blockID2).style.height = h + "px";
			}
		}
	}
</script>
<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
<script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us12.list-manage.com","uuid":"6d640f52eacace4c983132e22","lid":"4bd7d63c08"}) })</script>