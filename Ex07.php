<!DOCTYPE html>
<html>

<head>
    <title>PHP Loops</title>
    <style>
        .xdebug-var-dump {
            display: block;
            font-family: verdana;
            font-size: 20px;
        }

    </style>
</head>

<body>

    <h1>PHP 5 Loops</h1>

    <?php

       // for ($x = 1; $x <= 6; $x++) {
    ?>
        <?php for($x =1; $x <= 6;$x++) :  ?>
        <h<?php echo $x?>>Header
            <?php echo $x?>
        </h<?php echo $x?>>



        <?php endfor; ?>
        <?php
       // } 

        $colors = array("red", "green", "blue", "yellow"); 

        foreach ($colors as $value) {
            echo "$value <br>";
        }

        $ages = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); 
        echo $ages["Ben"];
    
        foreach($ages as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }


  
    ?>

</body>

</html>
