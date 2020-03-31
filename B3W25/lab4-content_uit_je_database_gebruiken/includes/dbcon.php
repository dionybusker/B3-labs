<?php
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $dbname = "databank_php";
        $conn = null;

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        }
        
        catch(PDOExeption $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        
        // $id = 3;
        // $stmt = $conn->prepare("SELECT * FROM onderwerpen WHERE `name` = :inputSubject");
        // $stmt->execute([":inputSubject" => urldecode($_GET['name'])]);
        // $result = $stmt->fetchAll();


        // var_dump($result);
