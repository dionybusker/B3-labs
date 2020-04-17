<?php

    // require("functions.php");

    // locatie valideren
    function validateLocation($location) {
        $isValid = FALSE;
        if ($location != NULL && $location != "") {
            if (preg_match("/^[a-zA-Z ]*$/", $location)) {
                $isValid = TRUE;
            }
        }
        return $isValid;
    }

    // sanitize data
    function sanitizeData($data) {
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }