<?php
    require_once __DIR__ .'/php/head.php';
    require_once __DIR__ .'/php/get_form.php';
?>
    <main>
        <img src="./asset/bannière_horreur.jpg" alt="placehold">
        <form action="./connection.php" method="post">
            <label for="name">nom</label>
            <input type="text" name="nom" id="nom" placeholder="Votre nom">
            <label for="prenom">prenom</label>
            <input type="text" name="prenom" id="prenom" placeholder="Votre prenom">
            <label for="email">email</label>
            <input type="email" name="email" id="email" placeholder="Votre email">
            <label for="password">password</label>
            <input type="password" name="password" id="password" placeholder="Votre password">
            <label for="ville">ville</label>
            <select name="ville" id="ville">
                <option value="Paris">Paris</option>
                <option value="Marseille">Marseille</option>
                <option value="Lyon">Lyon</option>
                <option value="Toulouse">Toulouse</option>
            </select>.
            <label for="pays">Pays</label>
            <select name="pays" id="pays">
                <option value="France">France</option>
                <option value="Allemagne">Allemagne</option>
                <option value="Italie">Italie</option>
                <option value="Espagne">Espagne</option>
            </select>
            <input class="valider" type="submit" value="Commencer">
        </form>
    </main>
    <footer>
        <p>&copy;Movie-Streaming-2023</p>
    </footer>
    <script type="module" src="./js/check_email.js"></script>
</body>
</html>