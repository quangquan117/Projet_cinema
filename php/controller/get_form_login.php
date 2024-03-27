<?php
    include_once __DIR__."/../model/connection.php";
    // <form action="index.php" method="post">
    //     <label for="email">login ou email</label>
    //     <input type="email" name="email" id="email" placeholder="Votre email">
    //     <label for="password">mot de passe</label>
    //     <input type="password" name="password" id="password" placeholder="Votre mot de passe">
    //     <input class="valider" type="submit" value="Commencer">
    // </form>
    if (isset($_SESSION['user_email'])) {
        header("Location: ./location.php");
        exit;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user = getUser($email);
        
        if ($user && password_verify($password, $user["password"])) {
            setcookie("user_email", $email, time() + 3600, "/");
            header("Location: ./location.php");
            exit;
        } else {
            echo "User not found";
        }
    }
    