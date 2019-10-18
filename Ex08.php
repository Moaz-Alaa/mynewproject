<!DOCTYPE html>
<html>

<head>
    <title>PHP functions</title>
    <style>
        .xdebug-var-dump {
            display: block;
            font-family: verdana;
            font-size: 20px;
        }

    </style>
</head>

<body>

    <h1>PHP 5 functions</h1>



    <?php
        function sum($x=1, $y=2) {
            $z = $x + $y;
            return $z;
        }

        echo "5 + 10 = " . sum(5, 10) . "<br>";
        echo "7 + 13 = " . sum(7, 13) . "<br>";
        echo "Default sum : " . Sum(5);
    ?>





</body>

</html>
