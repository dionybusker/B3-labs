<?php

    require("includes/functions.php");

?>

<?php include("includes/header.php"); ?>
    <body>
        <main id="container">
            <div id="cards-container">
                <h1>Add location</h1>
                <p class="more-info">
                    On this page you can add a location.

                    <form class="location cards border solid" action="includes/create-location.php" method="POST">
                        <label class="bold" for="location_name">Name location</label>
                        <input type="text" name="location_name"> <br>

                        <input type="submit" value="Add location!">
                    </form>
                </p>
            </div>
<?php include("includes/footer.php"); ?>