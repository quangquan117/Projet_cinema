<!DOCTYPE html>
<html lang="fr" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="page d'acceuille d'un site de streaming">

    <title>CineHorreur</title>
    
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">

    <?php
    if(isset($_SESSION['user_email'])) {
        echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />';
    }
    ?>

    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="./index.php">Accueil</a></li>
            <li><a href="./nos_film.php">Nos films</a></li>
            <li><a href="./inscription.php">S'inscrire</a></li>
            <li><a href="./login.php">Se connecter</a></li>
            
            <?php
                if(isset($_SESSION['user_email'])) {
                    echo '<li><a href="./index.php"><span class="material-symbols-outlined">logout</span></a></li>';
                }
            
            ?>

            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </ul>
    </nav>
    <header>
        <h1><img class="icon" src="./asset/doom_slayer_symbol.png" alt="Doom slayer icon picture">Film d'horreur, thriler et bien plus en illimité.</h1>
    </header>
