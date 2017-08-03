<?php $LocName="No Splash"; // Defines the pages title in title bar
      $location="nosplash"; // $location is checked in nav.php to highlight where the user is in nav bar. Valid options are home, about, service, man, and blog
      $noContent="no-content"; // Checked in upper.php. If no-content is set, it collapses the entire splash making way for text.
      $splashContent=""; // Since this is a no-content page, don't fill this in.
      include '../template-parts/upper.php';
?>
<div class="container "> <!--Fill this  -->

    <div class="center">
        <h1>NO SPLASH</h1>
    </div>

    <div id="content">
        <p>Stuff here</p>
    </div>

</div>
<?php include '../template-parts/lower.php'; ?>