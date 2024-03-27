import { Theme } from "./theme.js";
import { f_button } from "./button.js";

document.addEventListener("DOMContentLoaded", () => {
    console.log("loadContent");

    // TODO: faire une liste d'images de films

    // TODO: Form index
    if (window.location.href == "http://localhost/projet_cinema/index.php") {
        let btn = document.querySelector(".glow-on-hover");
        btn.addEventListener("click", e => {
            e.preventDefault();
            f_button();
        });
    }

    // TODO: faire fonctionner le formulaire d'inscription

    // TODO: faire fonctionner le formulaire de connexion

    // Jour nuit
    let theme = new Theme();
    let switchButton = document.querySelector(".switch input");
    switchButton.addEventListener("click", () => {
        theme.changeTheme(switchButton);
    });
});