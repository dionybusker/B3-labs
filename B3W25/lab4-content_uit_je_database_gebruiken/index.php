<?php
    include("includes/dbcon.php");

    $stmt = $conn->prepare("SELECT * FROM onderwerpen WHERE id = :id");
    $stmt->execute([':id' => $_GET['id']]);
    $result = $stmt->fetch();

    // print_r($result);

?>
<!-- prepared statements in PDO -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lab 4 - gegevens uit de database</title>
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

                <h2><?php echo $result['name']; ?></h2>
                <p id="description"><?php echo $result['description']; ?></p>
                <img id="logo" src="img/<?php echo $result['image']; ?>" alt="image">

            </main>
            
            <!-- laad hier via php je footer in (vanuit je includes map)-->
            <?php include("includes/footer.php"); ?>

        </div>
    </body>
</html>