<?php

    require("includes/functions.php");

    $result = getAllLocations();
    $resultCount = countAllLocations();
    // $specificLocation = getLocation($_GET['id']);

?>

<?php include("includes/header.php"); ?>
    <body>
        <main id="container">
            <div id="cards-container">
                <h1>All <?php echo $resultCount; ?> locations</h1>
                <p class="more-info">
                    If you want to choose a character, just click <a class="bold" href="index.php">here</a> to go back to the characters list.
                    <span class="location cards border solid">
                        <span class="bold">These locations are directly from the database:</span> <br>
                        <?php foreach ($result as $locations) { ?>
                            <a href="includes/delete-location.php?id=<?php echo $locations['id']; ?>" title="Delete <?php echo $locations['id'].". ".$locations['name']; ?>" onClick="javascript: return confirm('Are you sure you want to delete <?php echo $locations['name']; ?>?');"><i class="fas fa-trash-alt"></i></a> <?php echo $locations["name"]; ?><br>
                        <?php } ?> <br>
                        <a href="add-location.php"><i class="fas fa-plus"></i> Add location</a>
                    </span>
                </p>
            </div>
<?php include("includes/footer.php"); ?>