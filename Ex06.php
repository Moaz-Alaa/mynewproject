<!DOCTYPE html>
<html>

<head>
    <title>PHP 5 Strings</title>
    <style>
        .xdebug-var-dump {
            display: block;
            font-family: verdana;
            font-size: 20px;
        }

    </style>
</head>

<body>

    <h1>PHP Demo Conditional statements</h1>

    <?php
        $t = date("H");
        var_dump($t);

        if ($t < "10") {
            echo "Have a good morning!";
        } elseif ($t < "20") {
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }

        echo "<br>";

        $i = 5;
        switch ($i) {
            case 0:
                echo "i equals 0";
                break;
            case 1:
                echo "i equals 1";
                break;
            case 2:
                echo "i equals 2";
                break;
            default:
                echo "other";
                break;
                
        }
  
    ?>

</body>

</html>
