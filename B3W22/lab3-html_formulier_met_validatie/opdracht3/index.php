<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>lab 3 opdracht 3</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <form action="results.php" method="post">
            <fieldset>
                <legend>Gegevens</legend>
                <label for="name">Naam</label> <span class="error">* 
                    <?php if(isset($nameError)) { ?>
                        <p><?php print $nameError; ?></p>
                    <?php } ?></span>
                <input id="name" name="name" type="text" value="<?php print htmlspecialchars($name); ?>"><br>
                <label for="email">E-mail</label> <span class="error">* 
                    <?php if(isset($emailError)) { ?>
                        <p><?php print $emailError; ?></p>
                    <?php } ?></span>
                <input id="email" name="email" type="email" value="<?php print htmlspecialchars($email); ?>">
                <input type="submit" name="submit">
            </fieldset>
        </form>

    </body>
</html>