<?php $LocName="About";
	  $location="about";
	  $splashContent="<h1>About</h1>";
	  include '../template-parts/upper.php';
?>
<div class="container">
	<div class="body">
		<div id="body" class="center">

			<p>Shopping for home furnishings is a very personal experience. Our aim is to guide you through the decision making process so that you can love your home!</p>
			<p>Housed in the original timber framed barn on the family homestead, our showroom covers three floors and over 15,000 square feet. 
			You&#39;re sure to find inspiration here!</p>
			<p>Six generations of the family have lived on the property and an extended &quot;family&quot; of dedicated and talented people 
			continue to cultivate what Doug and Dotty Perry began in 1978. Come and visit Lily the golden retriever &mdash; she&#39;ll greet you at the door with a smile!</p>

			<?php 
				$href="../history";
				$learnText = "Learn more about our history";
				include "../template-parts/learn-btn.php";
			?>
			
		</div>
	</div>
</div>
<?php include '../template-parts/lower.php'; ?>