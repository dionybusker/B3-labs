<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lab 2 - Pagina opbouw met includes en require</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <div id="container">
            <!-- laad hier via php je header in (vanuit je includes map) -->
            <div id="header">
                <?php include("includes/header.php"); ?>
            </div>


            <!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
            <main>
                <?php
                    if (isset($_GET["subject"])) {
                        $subject = $_GET["subject"];
                    } else {
                        $subject = "client_server";
                    }

                    include("pages/$subject.php")
                ?>
            </main>
            
            <!-- laad hier via php je footer in (vanuit je includes map)-->
            <?php include("includes/footer.php"); ?>

        </div>
    </body>
</html>