<?php
    $name = filter_input(INPUT_POST, "name");
    $email = filter_input(INPUT_POST, "email");

        if (empty($name)) {
            $nameError = "Vul je naam in.";
        } else {
            // checken of er alleen letters gebruikt worden
            if (!preg_match("/^[a-zA-Z]*$/",$name)) {
                $nameError = "Gebruik alleen letters.";
            }
        }

        if (empty($email)) {
            $emailError = "Vul je e-mail in.";
        } else {
            // checken of het ingevoerde emailadres geldig is
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailError = "Ongeldig e-mailadres.";
            }
        }


    if (empty($nameError) && empty($emailError)) {
        include("success.php");
    } else {
        include("index.php");
    }
