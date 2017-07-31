		
		<?php 
			if ($location == "home") {
				include 'template-parts/footer.php';
			}
			else {
				include '../template-parts/footer.php';
			}
		?><!-- Pulls in footer info -->
		<script>
			window.onload=chromeViewportWorkAround("bash",null);
		</script>
		<!-- Workaround for Chrome being shitty with its viewport height. The viewport height changes based on if the address bar on mobile is visible or not, thus
			 changing the size and scale of background images for the splash screens on mobile after scrolling and creating a visible 'hiccup' downwards after scrolling.  -->
		
	</body>
</html>