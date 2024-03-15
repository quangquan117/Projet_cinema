// <a class="glow-on-hover" href="./nos_film.html">Commencer</a>
export let f_button = () => {
    const btn = document.createElement('a');
    const input = document.querySelector('.email_acceuille');
    // verifier si input est vide
    if (input.value === '') {
        console.log('vide');
        btn.href = './nos_film.php';
    } else {
        console.log('plein');
        localStorage.setItem('email', input.value);
        btn.href = './inscription.php';
    }
    btn.hidden = true;
    btn.click();
    btn.remove();
};