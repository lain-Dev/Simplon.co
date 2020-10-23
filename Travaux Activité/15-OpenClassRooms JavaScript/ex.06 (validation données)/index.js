let code = document.getElementById('code')
let codeValide = document.getElementById('code-validation')
let verife = document.getElementById('submit-btn')

code.addEventListener('input', function(e) {
    var value = e.target.value;

    if (value.startsWith('CODE-')) {
        verife.removeAttribute("disabled", "");
        codeValide.innerHTML = value + ' : code valide !'
        isValid = true;
    } else {
        verife.setAttribute("disabled", "");
        codeValide.innerHTML = value + 'code invalide !'
        isValid = false;
    }
});


