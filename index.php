<?php
    require_once __DIR__."/php/template/head.php";
?>
    <main>
        <section>
            <h2>Prêt à regarder?
                saisissez votre addresse mail pour vous abonner. <br>Le Tout à 5.99 €</h2>
            <form action="index.php" method="post">
                <input class="email_acceuille" type="email" name="email" id="email" placeholder="Votre email">
                <button class="glow-on-hover" type="submit">Commencer</button>
            </form>
            <section class="take_your_place">
                <p>Tout les mois profitez de toutes les nouveautés cinéma. A partir du mois prochain on vous propose
                    tout les classiques du cinéma d’horreur ou thriller. Où que vous soyez. Tout les films en VO, VOST,
                    VF et plus d’options</p>
            </section>
        </section>
    </main>
    <footer>
        <p>&copy;Movie-Streaming-2023</p>
    </footer>
    <script type="module" src="./js/app.js"></script>
</body>
</html>
