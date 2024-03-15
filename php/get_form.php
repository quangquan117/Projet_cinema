<?php
//     <form action="#" method="post">
//     <label for="name">name</label>
//     <input type="text" name="name" id="name" placeholder="Votre nom">
//     <label for="prenom">prenom</label>
//     <input type="text" name="prenom" id="prenom" placeholder="Votre prenom">
//     <label for="email">email</label>
//     <input type="email" name="email" id="email" placeholder="Votre email">
//     <label for="ville">ville</label>
//     <select name="ville" id="ville">
//         <option value="Paris">Paris</option>
//         <option value="Marseille">Marseille</option>
//         <option value="Lyon">Lyon</option>
//         <option value="Toulouse">Toulouse</option>
//     </select>.
//     <label for="pays">Pays</label>
//     <select name="pays" id="pays">
//         <option value="France">France</option>
//         <option value="Allemagne">Allemagne</option>
//         <option value="Italie">Italie</option>
//         <option value="Espagne">Espagne</option>
//     </select>
//     <input class="valider" type="submit" value="Commencer">
// </form>
    print($_SERVER["REQUEST_METHOD"] . "\n");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $ville = $_POST["ville"];
        $pays = $_POST["pays"];
        
        print("name: $name, prenom: $prenom, email: $email, ville: $ville, pays: $pays");
    }