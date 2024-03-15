document.addEventListener("DOMContentLoaded", () => {
    console.log("loadContent");
    const email = localStorage.getItem('email');
    const input = document.getElementById('email');
    const btn = document.querySelector(".valider");
    btn.addEventListener("click", e => {
        e.preventDefault();
    });
    if (email !== null) {
        console.log('email', email);
        input.value = email;
    }
});