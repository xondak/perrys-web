<?php
    ob_start();
    session_start();
    $LocName="Login"; // Defines the pages title in title bar
    $location="login"; // $location is checked in nav.php to highlight where the user is in nav bar. Valid options are home, about, service, man, and blog
    $noContent="no-content"; // Checked in upper.php. If no-content is set, it collapses the entire splash making way for text.
    $splashContent=""; // Since this is a no-content page, don't fill this in.
    include '../template-parts/upper.php';
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>
    <div id="new" class="content">
        <div class="container">
            <div class="center">
                <h2>Enter Username and Password</h2> 
                <div class = "container form-signin">
                    
                    <?php
                    $msg = '';
                    
                    if (isset($_POST['login']) && !empty($_POST['username']) 
                        && !empty($_POST['password'])) {
                        
                        if ($_POST['username'] == 'perrysfern' && 
                            $_POST['password'] == 'passwEird!#') {
                            $_SESSION['valid'] = true;
                            $_SESSION['timeout'] = time();
                            $_SESSION['username'] = 'perrysfern';
                            $_SESSION['sessionvar'] = 'auth';
                            
                            $URL="/compose";
                            header ("Location: $URL"); 
                        }else {
                            $msg = 'Wrong username or password';
                        }
                    }
                    ?>
                </div> <!-- /container -->
                <form class = "form-signin" role = "form" 
                action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
                ?>" method = "post">
                <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
                <div class="item">
                <input type = "text" class = "form-control" 
                    name = "username" placeholder = "Username" 
                    required autofocus>
                </div>
                <div class="item">
                <input type = "password" class = "form-control"
                    name = "password" placeholder = "Password" required>
                </div>
                <button class = "btn btn-lg btn-primary btn-block form-button" type = "submit" 
                    name = "login">Login</button>
                </form>
                <p>Click here to clean <a href = "logout.php" tite = "Logout">Session.</a></p>
            </div>
        </div>
    </div>
<?php include '../template-parts/lower.php'; ?>