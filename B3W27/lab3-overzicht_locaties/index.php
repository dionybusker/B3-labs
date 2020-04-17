<?php

    require("includes/functions.php");

    $result = getAllCharacters();
    $resultCount = countAllCharacters();

?>

<?php include("includes/header.php"); ?>
    <body>
        <main id="container">
            <div id="cards-container">
                <h1>All <?php echo $resultCount; ?> characters</h1>
                <p class="more-info">
                    Click on the character's avatar to see more. <br>
                    Click <a class="bold" href="locations.php">here</a> to see all locations.
                </p>
                <?php foreach ($result as $row) { ?>
                    <div class="cards border solid" style="background-color:<?php echo $row['color']; ?>">
                        <a href="character.php?id=<?php echo $row['id']; ?>">
                            <img class="avatar border solid" src="img/<?php echo $row['avatar']; ?>" alt="<?php echo $row['name']; ?> avatar" title="Bekijk meer over <?php echo $row['name']; ?>!">
                        </a>    
                        <div class="info">
                            <h2><?php echo $row['name']; ?></h2>
                            <p>
                                <i class="fas fa-heart"></i> <?php echo $row['health']; ?> <br>
                                <i class="fas fa-fist-raised"></i> <?php echo $row['attack']; ?> <br>
                                <i class="fas fa-shield-alt"></i> <?php echo $row['defense']; ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
<?php include("includes/footer.php"); ?>