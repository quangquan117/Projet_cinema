import { Theme } from "./theme.js";

document.addEventListener("DOMContentLoaded", () => {
    console.log("loadContent");
    const email = localStorage.getItem('email');
    const input = document.getElementById('email');

    if (email !== null) {
        console.log('email', email);
        input.value = email;
    }

    // Jour nuit
    let theme = new Theme();
    let switchButton = document.querySelector(".switch input");
    switchButton.addEventListener("click", () => {
        theme.changeTheme(switchButton);
    });
});