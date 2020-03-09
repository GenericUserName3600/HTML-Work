</div>      
        <div id="footer"> Copyright 2007, InTheZone</div>
    </body>            
</html>
<!-- the above text simply closes and ends the file of which it is inserted into. -->
<?php
// 5. close connection
if(isset($connection)) // checks to see if the connection is still active.
{
    mysqli_close($connection); // Closes the connection between the database and the file.
}
?>