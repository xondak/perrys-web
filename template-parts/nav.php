<ul>
	<li <?php if($location==="home"){echo"class='here'";} ?>>
		<a href="/demo/">Home</a>
	</li>
	<li <?php if($location==="about"){echo"class='here'";} ?>>
		<a href="/demo/about">About</a>
	</li>
	<li <?php if($location==="service"){echo"class='here'";} ?>>
		<a href="/demo/services">Services</a>
	</li>
	<li <?php if($location==="man"){echo"class='here'";} ?>>
		<a href="/demo/manufacturers">Manufacturers</a>
	</li>
	<li>
		<a href="/sale/shop/">Sale</a>
	</li>
	<li <?php if($location==="blog"){echo"class='here'";} ?>>
		<a href="/demo/blog-placeholder">Blog</a>
	</li>
</ul>