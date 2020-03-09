<html>
    <body>
    <?php
        define("GREETING", "Welcome to W3Schools.com!");
        echo GREETING;
    ?>
    <?php
        define("GREETING", "Welcome to W3Schools.com!", true);
        echo greeting;
    ?>
    <?php
        define("GREETING", "Welcome to W3Schools.com!");

        function myTest() {
            echo GREETING;
        }
 
        myTest();
    ?>
    </body>
</html>