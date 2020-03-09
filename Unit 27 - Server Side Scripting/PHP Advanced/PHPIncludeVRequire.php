<html>
    <body>
    <h1>Example of Inclusion vs Require.</h1>
        <h2> Inclusion </h2>
        <?php
            include 'noFileExists.php'; 
            echo "I have a $color $car.";
            // the code fails to find the referred PHP file, but continues to display the message
            // just without the to defined variables that would complete the sentence.
        ?>

        <h2> Require </h2>
        <?php 
            require 'noFileExists.php';
            echo "I have a $color $car.";
            // The code fials to locate the referred PHP file, and then ends the task,
            // thus refusing to display the message until the variables are located.
        ?>
   </body>
</html>
