<!--#echo var="REDIRECT_STATUS" -->
<?php $LocName="Oops! That's an Error!";
	  $location="404";
	  $splashContent="<h1>404</h1>
					<p>You might have clicked something that didn't lead anywhere or typed an address wrong. <a href='/'>Try clicking here instead.</a></p>";
	  include '../template-parts/upper.php';
	  include '../template-parts/lower.php';
?>