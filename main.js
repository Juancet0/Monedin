    const nombre = document.getElementById(nombre);
    const correo = document.getElementById(pass);
    const form = document.getElementById(form);
    const parrafo = document.getElementById(warning);

    form.addEventListener("submit", e=> {
        e.preventDeault()
        let warning = ""
        let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
        if(nombre.value.lenght > 6){
            warning += 'el nomrbre no es valido<br>'
            entrar = true
        }
        if(!regexEmail.test(email.value)){
            warning += 'el email no es valido<br>'
            entrar = true
        }
        if(pass.value.lenght < 8){
            warning += 'La contraseña no es valida<br>'
            entrar = true
        }

        if(entrar){
            parrafo.innerHTML = warning
        }
    })