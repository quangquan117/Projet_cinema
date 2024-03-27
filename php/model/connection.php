<?php
    include_once __DIR__."/config.inc.php";

    //connection to the database
    function connect(){
        try {
            $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function getUser($email){
        $prepare_sql = "SELECT * FROM user WHERE email = :email";
        $pdo = connect();
        $stmt = $pdo->prepare($prepare_sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    function setNewUser($name, $prenom, $email, $password, $ville, $pays){
        $user = getUser($email);
        
        if ($user) {
            echo "User with email already exists";
            return false;
        }
        
        $prepare_sql = "INSERT INTO user (name, prenom, email, password, ville, pays) VALUES (:name, :prenom, :email, :password, :ville, :pays)";
        $pdo = connect();
        $stmt = $pdo->prepare($prepare_sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':ville', $ville);
        $stmt->bindParam(':pays', $pays);
        $stmt->execute();
        return true;
    }