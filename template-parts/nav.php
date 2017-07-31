<ul>
	<li <?php if($location==="home"){echo"class='here'";} ?>>
		<a href="/">Home</a>
	</li>
	<li <?php if($location==="about"){echo"class='here'";} ?>>
		<a href="/about">About</a>
	</li>
	<li <?php if($location==="service"){echo"class='here'";} ?>>
		<a href="/services">Services</a>
	</li>
	<li <?php if($location==="man"){echo"class='here'";} ?>>
		<a href="/manufacturers">Manufacturers</a>
	</li>
	<li>
		<a href="/sale/shop/">Sale</a>
	</li>
	<li <?php if($location==="blog"){echo"class='here'";} ?>>
		<a href="/blog-placeholder">Blog</a>
	</li>
</ul>