<?php require_once("includes/functions.php"); ?> <!-- Including the functions page into this page. -->
<?php require_once("includes/connection.php");?> <!-- Including the connections page into this page -->  

<?php
    if (isset($_POST['submit'])) // checking to see if the submit variable was pressed.
    {
        $id = $_GET['page']; // retriving the page id from the database.
        $menu_name = $_POST['Menu_name']; // retriving menu name field from the database.
        $content= $_POST['content']; // retriving the content field from the database.
    $query = "UPDATE page SET Menu_name='{$menu_name}', content='{$content}' WHERE id={$id}"; // assigning the new edited name and content to the file that matches the ID retrived.
    $result = mysqli_query($connection, $query);
    }
?>
<?php 
    find_selected_page(); // Allowing the page to detect the amount of text files already made.
?> 
<?php 
    include("includes/header.php"); // including the header file into the this file.
?>
    <table id = "structure">
        <tr>
            <td id = "navigation">
                <?php
                    navigation(); // Defined and includes the navigation menu within this file.
                ?>
            </td>
            <td id = "page">
                <h2> Edit Page: <?php echo $sel_page['Menu_name'];?> </h2>  // Constructing the menu and the names. 
                <form action= "edit_page.php?page= <?php echo urlencode($sel_page['id']);?>" method = "post"> <!-- Assigning the form to edit the content and menu name of the text file. -->
                    <p>
                        page name:<input type= "text" name = "Menu_name" value = "<?php echo $sel_page['Menu_name']; ?>" id = "Menu_name" /> <!-- Assigning the inputs to new file. -->
                    </p>
                    <p>Content: <br />
                        <textarea name = "content" rows = "20" cols = "80"><?php echo $sel_page['content']; ?> </textarea> <!-- Assigning the inputs to new file. -->
                    </p>
                    <input type = "submit" value = "Edit Page" /> <!-- Declaring the submit button to keep and save the changes -->
                    &nbsp: &nbsp; 
                    <a href="delete_page.php?page=<?php echo $sel_page['id']; ?>"> Delete Page </a> <!-- offers the user a choice to delete the page as opposed to editing it -->
                </form>
                <a href ="content.php">Cancel</a> <!-- Offers the user the ability to cancel the editing. -->
            </td> 
        </tr>
    </table>
<?php 
    include("includes/footer.php"); //Including the footer file into this file. 
?>


                