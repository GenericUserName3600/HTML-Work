            <?php require_once("includes/functions.php"); ?> <!-- Including the functions page into this page. -->
            <?php require_once("includes/connection.php");?> <!-- Including the connections page into this page -->         
            <?php
                find_selected_page(); // Allowing the page to detect the amount of text files already made.
            ?>
            <?php include("includes/header.php");?> <!-- including the header file into the this file -->
            <table id="structure">
                <tr>
                    <td id="navigation">
                        <?php
                            navigation(); // Defined and includes the navigation menu within this file.
                        ?>

                        <br/>
                        <a href="new_page.php">+Add new page</a> <!-- Allows the user to use the new page file to create a text file / page. -->
                        <br/>

                    </td>
                    <td id="page">
                            <?php  
                                if(!is_null($sel_page)) // Checking to see if a page already exists, to then allow the user to edit or delete that page. 
                                {
                                    echo "<h2>".$sel_page['Menu_name']."</h2>"; // Constructing the menu and the names.
                                    echo "<div class=\"page-content\">"; // Assigning names to where the user can type into.
                                    echo $sel_page['content']; // Saving the user entere information into the content table in the database.
                                    echo "</div>"; // Closing after the user has finished.
                                    echo "<a href =\"edit_page.php?page={$sel_page['id']}\"> Edit the page</a>"; // Allows the user to edit the page by being redirected into that file.
                                    echo "&nbsp: &nbsp"; 
                                    echo "<a href=\"delete_page.php?page=".$sel_page['id']."\"> Delete Page</a>"; //Allows the user to edit the page by being redirected into that file.                           
                                } 
                                else 
                                {
                                    echo "<h2> Select a page to edit </h2>"; // Simply displays this message if there isnt a page to edit.
                                }
                            ?>
                    </td>
                </tr>
            </table>
            <?php include("includes/footer.php");?> <!-- Including the footer file into this file -->
                                