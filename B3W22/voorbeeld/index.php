<!-- html:5 genereert volledige html document -->

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>voorbeeld</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="gegevens.php" method="post">
            <label for="gebruikersnaam">Gebruikersnaam</label>
            <input id="gebruikersnaam" name="username" type="text">
            
            <label for="wachtwoord">Wachtwoord</label>
            <input id="wachtwoord" name="password" type="password">

            <input type="submit">
        </form>
    </body>
</html>