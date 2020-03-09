Result Size: 526 x 605
<html>
    <body>

    <h1>Example one of Inclusion.</h1>   
    <p>Some text.</p>
    <p>Some more text.</p>
    <?php 
        include 'footer.php'; // Includes the PHP File called footer into this webpage.
    ?>

    <h1> Example two of inclusion.</h1>
    <div class="menu">
        <?php 
            include 'menu.php'; // Includes the PHP File called footer into this webpage.
        ?>
    </div>
    <p>Some text.</p>
    <p>Some more text.</p>

    <h1> Example three of inclusion.</h1>
    <?php
        include 'vars.php'; // Includes the PHP File called footer into this webpage.
        echo "I have a $color $car.";
    ?>
    </body>
</html>