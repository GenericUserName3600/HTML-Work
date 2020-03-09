<?php require_once("includes/functions.php"); ?> <!-- Including the functions page into this page. -->
<?php require_once("includes/connection.php");?> <!-- Including the connections page into this page -->   

<?php 
    $menu_name = $_POST['Menu_name']; // Assigning the database's menu name heading to a PHP variable. 
    $content = $_POST['content']; // Assigning the database's content heading to a PHP variable.
?>

<?php
    // In SQL command string values are defined between single qoutes.
    $query="INSERT INTO pages(Menu_name, content)"; // Inserting the user's title and content into the databases collumns.
    $query.= "VALUES ('{$menu_name}','{$content}')"; // Checking that the values can be used.
    if(mysqli_query($connection, $query)) // querying to see if the both the values and connection are there.
    {
        //Success! 
        header("location: content.php"); // relocating the user to the content page after creating the page.
        exit; // exiting back to the main page.
    }
    else
    {
        echo "<p> Subject Creation Failure. </p>"; // failure prompt to the user.
        echo "<p>".mysqli_error()."</p>"; // display the error message to the user.
    }
?>
<?php
    if (isset($connection)) // checking to see if the connection is still open between the database and the file.
    { 
        mysqli_close($connection); //closing the connection between the file and the database.
    }
?>
