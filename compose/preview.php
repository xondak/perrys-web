<?php 
    include '../new-arrivals/Parsedown.php';
	$Parsedown = new Parsedown();
    print("<div class='container post'><div class='center new-posts'>"); // Creates individual post wrappers
	echo $Parsedown->text($_POST['postContent']); // Imports .md files and pipes it through Parsedown, fails graciously
    print("</div></div>");
    ?>