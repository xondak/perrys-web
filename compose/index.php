<?php $LocName="Composer"; // Defines the pages title in title bar
      $location="composer"; // $location is checked in nav.php to highlight where the user is in nav bar. Valid options are home, about, service, man, and blog
      $noContent="no-content"; // Checked in upper.php. If no-content is set, it collapses the entire splash making way for text.
      $splashContent=""; // Since this is a no-content page, don't fill this in.
      include '../template-parts/upper.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/codemirror/codemirror.js"></script>
 <!-- <script src="js/simplemde.js"></script>  -->
<div class="content"> <!--Fill this  -->
    <div id="content">
        <script type="text/javascript">
            // CodeMirror.commands.autocomplete = function(cm) {
            //     CodeMirror.showHint(cm, CodeMirror.hint.html);
            // }
            // window.onload = function() {
            //     editor = CodeMirror(document.getElementById("code"), {
            //         mode: "text/html",
            //         theme: "neonsyntax",
            //         lineWrapping: true,
            //         lineNumbers: true,
            //         styleActiveLine: true,
            //         matchBrackets: true,
            //         extraKeys: {
            //             "Ctrl-Space": "autocomplete"
            //         },
            //         value: "<!doctype html>\n<html>\n  " + document.documentElement.innerHTML + "\n</html>"
            //     });
            // };
            var myTextArea = document.getElementById("code");
            var myCodeMirror = CodeMirror(function(elt) {
                myTextArea.parentNode.replaceChild(elt, myTextArea);
                }, {value: myTextArea.value});
        </script>
        <textarea id="code" rows="100" cols="100"></textarea><br>
        <input type="submit"></input>
    </div>

</div>
<?php include '../template-parts/lower.php'; ?>