<html>
    <body>
        <?php
            $cars = array("Volvo", "BMW", "Toyota");
            sort($cars);
        ?>
        <?php
            $numbers = array(4, 6, 2, 22, 11);
            sort($numbers);
        ?>
        <?php
            $cars = array("Volvo", "BMW", "Toyota");
            rsort($cars);
        ?>
        <?php
            $numbers = array(4, 6, 2, 22, 11);
            rsort($numbers);
        ?>
        <?php
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            asort($age);
        ?>
        <?php
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            ksort($age);
        ?>
        <?php
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            arsort($age);
        ?>
        <?php
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            krsort($age);
        ?>
    </body>
</html>