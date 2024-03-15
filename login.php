<?php
    require_once './php/head.php';
?>
    <main>
        <section class="take_your_place">
            <p>Tout les mois profitez de toutes les nouveautés cinéma. A partir du mois prochain on vous propose
                tout les classiques du cinéma d’horreur ou thriller. Où que vous soyez. Tout les films en VO, VOST,
                VF et plus d’options</p>
        </section>
        <p>Votre selection pour vous</p>
        <form action="index.php" method="post">
            <label for="email">login ou email</label>
            <input type="email" name="email" id="email" placeholder="Votre email">
            <label for="password">mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Votre mot de passe">
            <input class="valider" type="submit" value="Commencer">
    </main>
    <footer>
        <p>&copy;Movie-Streaming-2023</p>
    </footer>
    <script type="module" src="./js/app.js"></script>
</body>
</html>