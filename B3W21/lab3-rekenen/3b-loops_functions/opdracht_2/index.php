<?php

    function calculate($num) {
        for ($i = 1; $i <= 10; $i++) {
            $result = $i * $num;
            print $i . " * " . $num . " = " . $result . "<br>";
        }
    }

    calculate(6);

?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>B3W1 - lab 3b loops&functions</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <script src="js/script.js"></script>
    </body>
</html>