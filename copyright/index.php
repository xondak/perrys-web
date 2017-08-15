<?php $LocName="No Splash"; // Defines the pages title in title bar
      $location="nosplash"; // $location is checked in nav.php to highlight where the user is in nav bar. Valid options are home, about, service, man, and blog
      $noContent="no-content"; // Checked in upper.php. If no-content is set, it collapses the entire splash making way for text.
      $splashContent=""; // Since this is a no-content page, don't fill this in.
      include '../template-parts/upper.php';
?>
<div class="container body"> <!--Fill this  -->

    <div class="center">
        <h1>Copyright</h1>
    </div>

    <div id="content">
        <p>Original content on our site is &copy;2017 Perry's Home Furnishings &amp; Design.</p>
        <p>The majority of this site's coding is original work. We have used open source projects to aid in development.</p>
        <h2>Free and Open Source Software</h2>
        <p>We use <a href="http://parsedown.org/">Parsedown</a> under the <a href="https://opensource.org/licenses/MIT">MIT Open Source License</a>.</p>
        <p>We use <a href="https://wordpress.com/">Wordpress</a> under the <a href="https://opensource.org/licenses/gpl-license">GNU Public License</a>.</p>
    </div>

</div>
<?php include '../template-parts/lower.php'; ?>