function mostrarPw(idPassword, idIcon){
    let inputPassword = document.getElementById(idPassword);
    let icon = document.getElementById(idIcon);
    if(inputPassword.type == "password"){
        inputPassword.type = "text";
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
        
    }
}