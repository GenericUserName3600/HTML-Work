<?php 
// The following script is used to detect the resoultion in use by the user.
    if (!isset($_GET['r'])) // Checking if the 'r' variable is not defined.
        {
            // If not defined, the script will atempt to define the variable.
            echo "<script language = \"JavaScript\"> 
            <!--
            document.location=\"$PHP_SELF?r=1&width=\"+screen.width+\"&Height=\"+screen.height;
            //-->
            </script>";
        }
        else // If the 'r' variable is already defined, the script then executes this section.
        {
            // This section will use the height and the width from the screen attritubes.
            // and then assign them into a variable that can be printed onto the browser.
            if(isset($_GET['width']) && isset($_GET['Height']))
            {
                $W = $_GET['width']; // Assigning the width to a printable variable.
                $h=$_GET['Height']; // Assigning the heiht to a printable variable.
                echo "$W x $h"; // Combining and then printing the variables to the browser.
            }
            else  // Here to ensure that if any part of the script fails, the user is still prompted.
            {
                echo "Resolution Not detected";
            }
        }
?>

