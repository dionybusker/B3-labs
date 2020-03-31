<?php
    $servername = "localhost";
    $username = "root";
    $password = "mysql"; // defaultmysql
    $dbname = "databank_php";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }
    catch(PDOExeption $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
        $id = 3;
        $query = $conn->prepare('SELECT * FROM onderwerpen WHERE id=:id');
        $query->execute(['id' => $id]);
        $result = $query->fetch();

        $conn = null;