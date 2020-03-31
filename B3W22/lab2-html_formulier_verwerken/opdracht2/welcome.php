<?php
    $name = "Naam : " . $_POST["name"] . "<br>";
    $email = "Emailadres : " . $_POST["email"];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>De ingevulde gegevens zijn:</h1>
        <?php print_r($name); print_r($email); ?>
    </body>
</html>