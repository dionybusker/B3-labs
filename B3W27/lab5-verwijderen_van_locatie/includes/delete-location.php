<?php

    require("functions.php");

    deleteLocation($_GET['id']);

    header("Location: ../locations.php");