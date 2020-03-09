<?php session_start();?>
<?php require_once("includes/functions.php");?>
<?php require_once("includes/connection.php");?>
<form action ="login.php" method="post">
<table>
    <tr>
        <td>Username:</td>
        <td><input type="text" name="username" maxlength="30" value="<?php echo htmlentities($username); ?>"/></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="password" maxlength="30" value="<?php echo htmlentities($password); ?>"/></td>
    </tr>
    <tr>
        <td colspan ="2"><input type="submit" name="submit" value="Submit" /></td>
    </tr>
</table>
</form>    
<?php 
    if(isset($_POST['submit']))
    {
        $errors = array();
        $username = trim(($_POST['username']));
        $password = trim(($_POST['password']));
        $hashed_password = sha1($password);

            $query = "SELECT id, username";
            $query .= "FROM user";
            $query .= "WHERE username = '{$username}' ";
            $query .= "AND hashed_password = '{$hashed_password}' ";
            $query .= "LIMIT 1";

            $result_set = mysqli_query($connection, $query);
            confirm_query($result_set);
            if (mysqli_query($result_set) == 1)
            {
                $found_user = mysqli_fetch_array($result_set);

                $_SESSION['user_id']=$found_user['id'];
                $_SESSION['user_name']=$found_user['username']
                header("location: Staff.php");
                exit;
            }
            else
            {
                $message = "Username or password incorrect. <br /> Please re-enter Username or Passowrd";
            }
    }
    else 
    {
        $username = "";
        $password = "";
    }