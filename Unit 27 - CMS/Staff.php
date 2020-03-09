<?php session_start(); ?>
<?php require_once("includes/function.php");?>
<?php
    if(!isset($_SESSION['user_id']))
    {
        header("location: login.php");
        exit;
    }
?>
<?php include("includes/header.php");?>
<html>
    <head>
        <title> InTheZone</title>
        <link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css"/> <!-- Linking to a style sheet -->
    </head>
    <body>
        <div id="header">
            <h1> InTheZone </h1> <!-- Assgining a title into the header area. -->
        </div>    
        <div id="main">
            <table id="structure"> 
                <tr>
                    <td id="navigation">
                        &nbsp;
                    </td>
                    <td id="page">
                        <h2> Staff Menu </h2> <!-- Assgining a title into the header area. -->
                        <p> 
                            Welcome to the staff area
                            <?php echo $_SESSION['user_name']; ?>                      
                        </p>  <!-- Assgining a title into the header area. -->
                        <ul>
                            <li><a href="content.php"> Manage Website Content</a></li> <!-- Alllowing the user to open a file to edit the wesite's content. -->
                            <li><a href="new_user.php"> Add Staff User</a></li> <!-- Allowing the user add or remove staff members from the website. --> 
                            <li><a href="logout.php"> Logout</a></li> <!-- Allowing the user to exit the management system. -->.
                        </ul>  
                    </td>
                </tr>
            </table>
        </div>      
        <div id="footer"> Copyright 2007, InTheZone</div>
    </body>            
</html>
<?php include("includes/footer.php");?>