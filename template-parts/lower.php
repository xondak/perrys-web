		
		<?php 
			if ($location == "home") {
				include 'template-parts/footer.php';
			}
			else {
				include '../template-parts/footer.php';
			}
		?>
		<script>
			window.onload=chromeViewportWorkAround("bash",null);
		</script>
		
	</body>
</html>