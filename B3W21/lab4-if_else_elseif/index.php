<?php
    define("COLOR", "<script type='text/javascript'> prompt('Wat is je favoriete kleur?'); </script>");
    define("AGE", "<script type='text/javascript'> prompt('Wat is je leeftijd?')</script>");
    define("GARAGE", "<script type='text/javascript'> prompt('Heb je een garage?'); </script>");

    // print implode(GAME);
    // print GAMEPLAY;
    print COLOR;
    print AGE;
    print GARAGE;

    if (AGE < 18) {
        if (GARAGE == false) {
            print "Bij jou staat jouw mountainbike in de kleur " . COLOR . " gewoon voor de deur!";
        } else {
            print "Jij stalt jouw vespa scooter in de kleur " . COLOR . " netjes in je eigen garage.";
        }
    } elseif (AGE >= 18) {
        if (GARAGE == false) {
            print "Jij hebt een Skoda Octavia in de kleur " . COLOR . " op de oprit staan.";
        } else {
            print "Wat goed dat jij die Ferrarie in de kleur " . COLOR . " in je garage opslaat!";
        }
    } else {
        print "error";
    }

?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>B3W1 - lab 4</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <script src="js/script.js"></script>
    </body>
</html>