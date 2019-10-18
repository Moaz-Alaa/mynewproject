<!DOCTYPE html>
<html>

<head>
    <title>PHP 5 Data Types</title>
    <style>
        .xdebug-var-dump {
            display: block;
            font-family: verdana;
            font-size: 20px;
            color: red;
        }

    </style>
</head>

<body>

    <h1>PHP 5 Data Types</h1>
    <span class="xdebug-var-dump">
        <?php
        $x = 1234;
        var_dump($x);

        $x = 10.365;
        var_dump($x);

        $cars = array("Volvo","BMW","Toyota");
        var_dump($cars);

    ?>
    </span>
    <?php
        class Car {
            function Car() {
                $this->model = "VW";
            }
        }
        // create an object
        $herbie = new Car();

        // show object properties
        echo "<hr><h1> Herbie is a $herbie->model </h1>";
    ?>
    <hr>
    <h2>var_dump($herbie):</h2>
    <?php   
        var_dump($herbie);
    ?>

</body>

</html>
