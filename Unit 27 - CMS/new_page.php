<?php require_once("includes/functions.php"); ?> <!-- Including the functions page into this page. -->
<?php require_once("includes/connection.php");?> <!-- Including the connections page into this page -->    

<?php 
    find_selected_page();// Allowing the page to detect the amount of text files already made.
?>
<?php include("includes/header.php");?> <!-- including the header file into the this file -->
    <table id = "structure">
        <tr>
            <td id = "navigation">
                <?php 
                    navigation(); // Defined and includes the navigation menu within this file.
                ?> 
            </td>
            <td id = "page">
                <h2> Add Page </h2>
                <form action= "create_page.php" method = "post"> <!-- redirecting the user and opening the create page file -->
                    <p>
                        page name:<input type= "text" name = "Menu_name" value = "" id = "Menu_name" /> <!-- Assiging a name to the new text file -->
                    </p>
                    <p>Content: <br /> <!-- Defining the area and height of the text box the user can type into -->
                        <textarea name = "content" rows = "20" cols = "80"></textarea>
                    </p>
                    <input type = "submit" value = "Add Page" /> <!-- Creates a button where the user can finish creating their new page.
                </form>
                <a href ="content.php"> Cancel</a> <!-- links back to the content page incase the user wishes to cancel the new page creation.-->
            </td>
        </tr>
    </table>
<?php 
    include("includes/footer.php");// Including the footer file into this file 
?>

                
