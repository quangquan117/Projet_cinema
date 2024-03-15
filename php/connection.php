<?php
    include_once __DIR__ .'/config.inc.php';
    $test = phpVersion();
    print $test;
    function insertUser($name, $prenom, $email, $password, $ville, $pays) {
        // connection to the database
        $connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //insertion of the data into the database
        $sql = "INSERT INTO user (name, prenom, email, password, ville, pays) VALUES (:name, :prenom, :email, :password, :ville, :pays)";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':ville', $ville);
        $stmt->bindParam(':pays', $pays);
        $stmt->execute();
        $connection = null;
    }
