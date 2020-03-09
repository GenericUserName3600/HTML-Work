<?php require_once("includes/functions.php"); ?> <!-- Including the functions page into this page. -->
<?php require_once("includes/connection.php");?> <!-- Including the connections page into this page -->    

<?php 
    $id=$_GET['page'];
    if($page=get_page_by_id($id))
    {
        $query = "DELETE FROM pages WHERE id = ".$id; // deletes the file from the database using the its ID.
        $result= mysqli_query($connection, $query); // checks the result of the deletion.
            if(mysqli_affected_rows($connection) == 1) // checks to see if more than one row within the databas has been affected.
            {
                header ("location: content.php"); // redirects the user to content page. 
                exit; // exits the deletep page file.
            }
            else 
            {
                echo "<P> Deletion Failure". mysql_error()."</p>"; // Prompts the user that the deletion has failed.
                echo "<a href =\content.php\"> Return to main page"; // redirects the user to the content page.
            }
    }
    else  // only executes if the page does not have a id assigned to it. 
    {
        header ("location: content.php");  // Redirects the user to the content page.
        exit; // exits the current page.
    }
?>
<?php 
    mysqli_close($connection); // Closing the connection between the file and the database through the connection variable.
?>
