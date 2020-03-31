<?php
    $name = "Naam : " . $_POST["name"];
    $email = "Emailadres : " . $_POST["email"];
    $br = "<br>";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>lab 3 opdracht 2</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="index.php" method="post">
            <fieldset>
                <legend>Gegevens</legend>
                <label for="name">Naam:</label>
                <input id="name" name="name" type="text">
                <label for="email">E-mail:</label>
                <input id="email" name="email" type="email">
                <input type="submit">
            </fieldset>
        </form>

        <?php
            print "<h1>De ingevulde gegevens zijn:</h1>";
            print_r(htmlspecialchars($name) . $br);
            print_r($email);
        ?>
    </body>
</html>