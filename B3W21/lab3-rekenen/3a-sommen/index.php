<?php
    $firstNum = rand(50, 100);
    $secondNum = rand(1, 50);

    $multiply = $firstNum * $secondNum;
    $add = $firstNum + $secondNum;
    $subtract = $firstNum - $secondNum;
    $divide = $firstNum / $secondNum;

    print $firstNum . " * " . $secondNum . " = " . $multiply . "<br>";
    print $firstNum . " + " . $secondNum . " = " . $add . "<br>";
    print $firstNum . " - " . $secondNum . " = " . $subtract . "<br>";
    print $firstNum . " / " . $secondNum . " = " . $divide . "<br>";

?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>B3W1 - lab 3a sommen</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <script src="js/script.js"></script>
    </body>
</html>