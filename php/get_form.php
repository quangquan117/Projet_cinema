<?php
    require_once __DIR__ .'/connection.php';
// <form action="#" method="post">
// ...
// </form>
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $ville = $_POST["ville"];
        $pays = $_POST["pays"];

        insertUser($name, $prenom, $email, password_hash($password, PASSWORD_DEFAULT), $ville, $pays);

    }