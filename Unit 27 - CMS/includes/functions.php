<?php
    function confirm_query($result_set) // a function created to help determine if the database had correctly recieved a query.
    {
        if(!$result_set)  // checks to see if the result it set by the confirm_query.
        {
            die("Database query failure". mysql_error()); // produces a prompt that informs the use that the query failed, and displays the erorr value.
        }
    }

    function get_page_by_id($page_id) // a function created to retrieve a page's ID from the database.
    {
        global $connection; // Declaring the $connection variable, used within all other aspects of the script.
        $query="SELECT * FROM pages WHERE id=" . $page_id ." LIMIT 1"; // ensuring that only one ID is pulled from the database per execution.
        $result_set=mysqli_query($connection, $query); // setting the variable equal the result of the query.
        confirm_query($result_set); // reassigning the variable to another value.

        // checks to determined and then fetches any rows from the database and returns them for the use to see.
        if($page = mysqli_fetch_array($result_set)) 
        {
            return $page;
        }
        else // nthing is returned if the no rows are returned.
        {
            return NULL;
        }
    }

    function find_selected_page() // function made to find pages by their ID number.
    { 
        global $sel_page; // Declartion of the variables to store the page ID.
        if(isset($_GET['page'])) // Runs if the script is able to find and use a ID from the database.
        { 
            $sel_page=get_page_by_id($_GET['page']); // Assigns the newly found ID number to the variable.
        } 
        else 
        {
            $sel_page=NULL; // if a page ID number is unfindable, the variable is simply set to NULL.
        }
    }

    function navigation() // used to display and allow the user access to the main content page.
    {
        global $connection; // Uses / declares the main variable of the script.
        $page_set = mysqli_query($connection, "SELECT * FROM pages"); // Selects and uses a page ID from the database.
        if (!$page_set) // checks to determine if the variable has not been set / declared.
        { 
            die("DATABASE Query Failure: ".mysql_error()); // produces a error and prompts the user that the query has failed, and the error behind why it failed.
        }
        echo "<ul>";
        while ($page=mysqli_fetch_array($page_set)) // Used to constantly allow the user access to the content page.
        {
            echo " <li><a href =\"content.php?page=".urldecode($page["id"])."\">".$page["Menu_name"]."</a></li>"; // links the content page to this function. 
        }
        echo "</ul>";

    }
?>