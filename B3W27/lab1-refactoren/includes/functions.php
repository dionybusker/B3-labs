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

        $stmt = $conn->prepare("SELECT * FROM characters ORDER BY name");
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    // totaal aantal karakters ophalen uit de database
    function countAllCharacters() {
        $conn = databaseConn();

        $count = $conn->prepare("SELECT COUNT(*) FROM characters");
        $count->execute();
        $rowsCount = $count->fetch();
        // $resultCount = $rowsCount[0];

        return $rowsCount[0];
    }

    // specifieke karakter (id) ophalen uit de database
    function getCharacter($id) {
        $conn = databaseConn();

        $stmt = $conn->prepare("SELECT * FROM characters WHERE id = :id");
        $stmt->execute([':id' => $_GET['id']]);
        
        return $stmt->fetch();
    }