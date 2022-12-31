const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const email = document.getElementById('email');
const password = document.getElementById('password');
const date_naissance = document.getElementById('date_naissance');
const btn = document.getElementById('submit_btn');
const form = document.getElementById('form');

/* btn input fonction */

form.addEventListener('input', function(e) {
    if(nom.value !== '' && prenom.value !== '' && email.value !== '' && password.value !== '' && date_naissance.value !== '') {
        btn.disabled = false;
    }
    console.log("sasas")
});