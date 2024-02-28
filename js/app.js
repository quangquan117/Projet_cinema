import { changeTheme } from "./theme.js";

document.addEventListener("DOMContentLoaded", () => {
    console.log("loadContent");
    // TODO: faire une liste d'images de films

    // TODO: faire fonctionner le formulaire d'inscription

    // TODO: faire fonctionner le formulaire de connexion

    // TODO: faire un jour nuit
    //<label class="switch">
    //     <input type="checkbox">
    //     <span class="slider round"></span>
    // </label>
    let switchButton = document.querySelector(".switch input");
    switchButton.addEventListener("click", () => {
        changeTheme(switchButton);
    });
});