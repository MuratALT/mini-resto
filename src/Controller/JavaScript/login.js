
const email = document.getElementById('email');
const password = document.getElementById('password');
const btn = document.getElementById('submit_btn');
const form = document.getElementById('form');

/* btn input fonction */

form.addEventListener('input', function(e) {
    if(email.value !== '' && password.value !== '') {
        btn.disabled = false;
    }
    console.log("sasas")
});