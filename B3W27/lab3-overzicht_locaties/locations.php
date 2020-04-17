<?php

    require("includes/functions.php");

    $result = getLocations();
    $resultCount = countAllLocations();

?>

<?php include("includes/header.php"); ?>
    <body>
        <main id="container">
            <div id="cards-container">
                <h1>All <?php echo $resultCount; ?> locations</h1>
                <p class="more-info">
                    If you want to choose a character, just click <a class="bold" href="index.php">here</a> to go back to the characters list.
                    <ul class="location cards border solid">
                        <span class="bold">These locations are directly from the database:</span>
                        <?php foreach ($result as $locations) { ?>
                                <li><?php echo $locations["name"]; ?></li>
                        <?php } ?>
                    </ul>
                </p>
            </div>
<?php include("includes/footer.php"); ?>