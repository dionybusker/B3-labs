<?php

    require("validator.php");

    // connectie met de database maken
    function databaseConn() {
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $dbname = "dynamische_applicatie";
        $conn = null;

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
            return $conn;
        }

        catch(PDOExeption $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // alle karakters ophalen uit de database
    function getAllCharacters() {
        $conn = databaseConn();

        $query = $conn->prepare("SELECT * FROM characters ORDER BY name");
        $query->execute();
        
        return $query->fetchAll();
    }

    // totaal aantal karakters ophalen uit de database
    function countAllCharacters() {
        $conn = databaseConn();

        $query = $conn->prepare("SELECT COUNT(*) FROM characters");
        $query->execute();
        $rowsCount = $query->fetch();
        // $resultCount = $rowsCount[0];

        return $rowsCount[0];
    }

    // specifieke karakter (id) ophalen uit de database
    function getCharacter($id) {
        $conn = databaseConn();

        $query = $conn->prepare("SELECT * FROM characters WHERE id = :id");
        $query->execute([':id' => $_GET['id']]);
        
        return $query->fetch();
    }

    // alle locaties inladen
    function getLocations() {
        $conn = databaseConn();

        $query = $conn->prepare("SELECT * FROM locations");
        $query->execute();

        return $query->fetchAll();
    }

    // aantal locaties optellen
    function countAllLocations() {
        $conn = databaseConn();

        $query = $conn->prepare("SELECT COUNT(*) FROM locations");
        $query->execute();
        $rowsCount = $query->fetch();
        // $resultCount = $rowsCount[0];

        return $rowsCount[0];
    }

    // locatie toevoegen
    function createLocation() {
        $conn = databaseConn();

        $location = sanitizeData($_POST["location_name"]);
        $valid_location = validateLocation($location);

        if ($valid_location == TRUE) {
            $query = $conn->prepare("INSERT INTO locations (name) VALUES (:name)");
            $query->bindParam(":name", $location);
            $query->execute();
        }
    }