<?php

    require("includes/functions.php");

    $allCharacters = getAllCharacters();
    $countCharacters = countAllCharacters();

    $sortCharacters = sortCharacter();

    // $sort = $_POST["characters"] != "choose" ? $_POST[""]
    

?>

<?php include("includes/header.php"); ?>
    <body>
        <main id="container">
            <div id="cards-container">
                <h1>All <?php echo $countCharacters; ?> characters</h1>
                <p class="more-info">
                    Click on the character's avatar to see more. <br>

                    <form action="index.php" method="POST">
                        <label for="character-select">Sort all <?php echo $countCharacters; ?> characters: </label>
                        
                        <select name="characters" id="character-select">
                            <option value="name">Name</option>
                            <option value="health">Health</option>
                            <option value="attack">Attack</option>
                            <option value="defense">Defense</option>
                        </select>

                        <select name="asc-desc">
                            <option value="lowToHigh">Lowest to highest</option>
                            <option value="highToLow">Highest to lowest</option>
                        </select>

                        <input type="submit" value="Go!">
                    </form>
                </p>

                <?php foreach ($sortCharacters as $row) { ?>
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