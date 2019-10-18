<!DOCTYPE html>
<html>

<head>
    <title>PHP Associative Array</title>
    <style>
        .xdebug-var-dump {
            display: block;
            font-family: verdana;
            font-size: 20px;
        }
    </style>
</head>

<body>

    <h1>PHP 5 Associative Array</h1>

    <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
    ?>

</body>

</html>