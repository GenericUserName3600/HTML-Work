<?php
require("constants.php"); // Including and assigning variables from another file. 

    // 1. Creation of the database.
    $connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD); // using the database's accound details to connect to the database.
    if (!$connection)  // checking if the connection variable is set.
    {   
        die("Database connection failed:" .mysql_error()); // defining and displaying a error behind why the system did not connect.
    }
    // 2. Selecting a database to use.
    $db_select=mysqli_select_db($connection, DB_NAME); // using the connection and database's name to assgin the name.
    if (!$db_select) // checking if the db_select variable is correctly assigned.
    {
        die("Database selection failure: ". mysql_error()); // defining and displaying a error behind the selection failure.
    }
?>