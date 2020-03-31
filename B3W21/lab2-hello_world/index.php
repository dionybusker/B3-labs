<?php
    // LAB 2 OPDRACHT 1
        print "<h1>hello world!</h1>";

    // LAB 2 OPDRACHT 2
        define("OPDR2", "<h1>hello world!</h1>");
        print OPDR2;

    // LAB 2 OPDRACHT 3
        $opdr3 = "Learning PHP";
        $opdr3 = "<h1>hello world!</h1>";
        print $opdr3;

    // LAB 2 OPDRACHT 4
        $hello = "hello";
        $world = "world!";
        print "<h1>" . $hello . " " . $world . "</h1>";

    // LAB 2 OPDRACHT 5
        $array = ["hello", " " , "world!"];
        print implode($array);
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>B3W1 - lab 2</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <script src="js/script.js"></script>
    </body>
</html>