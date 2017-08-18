<!-- This contains the navigation for both the desktop and mobile sites -->
<?php 
	if($noContent == "no-content"){
		echo "<div id='home' class='header perrys-wrapper nav-shrunk'>";
	}
	else{
		echo "<div id='home' class='header perrys-wrapper'>";
	}
?>
	<nav>
		<?php include 'nav.php' ?>
	</nav>
	<label id="menu-button" for="mb"></label>
	<input type="checkbox" id="mb"></input>
	<div id="nav-menu">
		<?php include 'nav.php' ?>
	</div>
</div>