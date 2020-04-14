<?php

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
        // $stmt = $conn->prepare("SELECT * FROM characters");
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

    // karakters sorteren op naam/levenskracht/aanvalskracht/verdediging
    function orderCharacter() {
        $conn = databaseConn();

        // $query = $conn->prepare("SELECT * FROM characters ORDER BY health");
        // $query->execute();

        // return $query->fetchAll();

        $option = $_POST["option"];
        $order = $_POST["order"];

        if (!empty($option)) {
            if ($order == "lowToHigh") {
                $query = $conn->prepare("SELECT * FROM characters ORDER BY $option ASC");
            } else {
                $query = $conn->prepare("SELECT * FROM characters ORDER BY $option DESC");
            }
        } else {
            $query = $conn->prepare("SELECT * FROM characters ORDER BY name");
        }

        $query->execute();

        return $query->fetchAll();
    }