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

    <h1>PHP 5 Strings</h1>

    <?php
        echo strlen("Hello world!"); // outputs 12
    ?>
    <br>
    <?php
       
        echo str_word_count("Hello world!"); // outputs 2

        echo "<br>";
        echo strrev("Hello world!"); // outputs !dlrow olleH

        echo "<br>";
        echo strpos("Hello world!", "wo"); // outputs 6

        echo str_replace("world", "PHP", "<p>Hello world!</p>"); // outputs Hello PHP!
    
    define("WELCOME", "Hello PHP...............");
    echo WELCOME;
    
        
    ?>

</body>

</html>
