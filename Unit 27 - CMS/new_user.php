<?php include('includes\connection.php'); ?>
<?php if (!empty($message))
{
    echo "<p class=/"message\">".$message. "</p>";
}
?>
<form action="new_user.php" method="post">
<?php      
    //START FROM PROCESSING
    if (isset($_POST['submit'])) //form submitted
    {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $hashed_password = sha1($password);

        $query = "INSERT INTO users 
            ( username, hashed_password) VALUES ('{$username}', '{$hashed_password}')";
            $result = mysqli_query($connection, $query);
            if ($result)
            {
                $message = "The User was successfully created.";
            }
            else 
            {
                $message = "User Creation Failure";
                $message .="<br />".mysql_error();
            }
    }
    else 
    {
        //Form has not been submitted
        $username = "";
        $password = "";
        $message = "Error checking" ; 
    }
?>
</form>