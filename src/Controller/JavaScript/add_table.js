
const name_table = document.getElementById('name_table');
const btn = document.getElementById('submit_btn');
const form = document.getElementById('form');

/* btn input fonction */

form.addEventListener('input', function(e) {
    if(name_table.value !== '') {
        btn.disabled = false;
    }
    if(name_table.value === '') {
        btn.disabled = true;
    }
    console.log("sasas")
});