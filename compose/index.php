<?php session_start();      
        function composer(){
            $LocName="Composer"; // Defines the pages title in title bar
            $location="composer"; // $location is checked in nav.php to highlight where the user is in nav bar. Valid options are home, about, service, man, and blog
            $noContent="no-content"; // Checked in upper.php. If no-content is set, it collapses the entire splash making way for text.
            $splashContent=""; // Since this is a no-content page, don't fill this in.
            include '../template-parts/upper.php';
            echo '<div class="content securestuff"><div id="content" class="editor">'; // Sets up he HTML for the editor
            $postId = htmlspecialchars($_GET["id"]); // Sets the HTML ID as a variable
            $post = "../new-arrivals/posts/" . $postId . ".md"; // Appends the relative path of the file to the post ID

            echo '<h1>Compose your Post</h1>
            <div id="edit-wrap">
                <form action="writeToFile.php" target="previewpane" method="POST">
                    <textarea id="rawPost" name="postContent" rows="150" cols="150">'; // Creates text area and the form surrounding it
            if($postId!=null){ // Checks if there's no post ID
                echo file_get_contents($post); // Writes the content of the post to the text area
            }
            echo '</textarea>';
            // echo '<script src="/compose/epiceditor/js/epiceditor.min.js"></script>
            //         <script>
            //             var opts = {textarea: "rawPost"};
            //             var editor = new EpicEditor().load();
            //         </script>';
            // This adds the epic editor. But it doesn't fit our needs.
            echo 
            '
            <p>
                <input name="submit" type="submit"></input>
                <button name="preview" type="submit">Preview</button>
            </p>
            ';
            if($postId!=null){ // If this is an existing post, enable the delete button.
                echo '<a href="writeToFile.php/?id=' . $postId . '" >Delete This Post</a>';
            }
            echo '</form>';
            echo '<iframe src="" name="previewpane"></iframe>'; // 
            
            echo '</div></div></div>'; // Close out div blocks
            include '../template-parts/lower.php'; // Add a footer
        }

        if ($_SESSION['username'] == 'perrysfern'){
            composer(); // Checks if the user is logs in, then renders the composer
        }
        else{
            include "../new-arrivals/login.php"; // If the user isn't logged in, it pushes you to a login page.
        }
?>