
<html>
    <head>
        
    </head>
    <body>
        <form method="post">
            <?php
                if (isset($_POST["textdisplay"]))
                {
                    file_get_contents("mytxt.txt", $_POST["textdisplay"]);
                    $edittext = $_POST["textdisplay"];
                }
                else 
                {
                    $edittext = file_get_contents("mytxt.txt");
                }
            ?>
            <textarea name="textdisplay">
            <?php
            echo $edittext
            ?>
            </textarea>
            <input type="submit" name="Edit" value="Edit"/>

        </form>
    </body>
</html>