/*****************************VALIDACION FORM USUARIO*******************************/
const form = document.getElementById('form-user');
const btnSutmit = document.getElementById('submit-btn');

let timeout = null;
let errors = {
    name:true,
    last_name:true,
    second_last_name:true,
    identification:true,
    username:true,
    email:true,
    password:true,
    password_confirmation:true,
}

const emailRegex = /^[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[u][g]+([.][e][d][u]+)*[.][e][c]$/;
const nombreRegex = /^[A-Z][a-z\s]{1,29}$/
const apellidoRegex = /^[A-Z][a-z]{1,9}$/
const apellidoMRegex = /^[A-Za-z]{0,10}$/
const cedulaRegex = /^[0-9]{10}$/
const usuarioRegex = /^[A-Z][a-z]{7,9}$/


document.querySelectorAll('.form-box').forEach((box) => {
    const boxInput = box.querySelector('input');

    boxInput?.addEventListener('keydown', (event) => {
        
        
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            //console.log(`Input ${boxInput.name} value: `, boxInput.value);  

            validation(box, boxInput)
        }, 500);
    });
});

validation = (box, boxInput) => {

    if (boxInput?.name == 'name') {
        console.log('Validación para el nombre');
        /*if (boxInput.value == '') {
            showError(true, box, boxInput);
        } else {
            showError(false, box, boxInput);
        }*/
        if (!boxInput.value.match(nombreRegex)) {
            showError(true, box, boxInput);
        } else {
            showError(false, box, boxInput);
        }
    }

    if (boxInput?.name == 'last_name') {
        //console.log('Validación para el apellido p');

        if (!boxInput.value.match(apellidoRegex)) {
            showError(true, box, boxInput);
        } else {
            showError(false, box, boxInput);
        }
    }

    if (boxInput?.name == 'second_last_name') {
        //console.log('Validación para el apellido m');

        if (!boxInput.value.match(apellidoMRegex)) {
            showError(true, box, boxInput);
        } else {
            showError(false, box, boxInput);
        }
    }

    if (boxInput?.name == 'identification') {
        //console.log('Validación para el cedula');

        if (!boxInput.value.match(cedulaRegex)) {
            showError(true, box, boxInput);
        } else {
            showError(false, box, boxInput);
        }
    }

    if (boxInput?.name == 'username') {
        //console.log('Validación para el usuario');

        if (!boxInput.value.match(usuarioRegex)) {
            showError(true, box, boxInput);
        } else {
            showError(false, box, boxInput);
        }
    }

    if (boxInput?.name == 'email') {
        //console.log('Validación para el correo');
        if (boxInput.value == '') {
            showError(true, box, boxInput);
        } else {
            showError(false, box, boxInput);
        }

        if (!boxInput.value.match(emailRegex)) {
            showError(true, box, boxInput);
        } else {
            showError(false, box, boxInput);
        }
    }

    
    

    if (boxInput?.name == 'password') {
        //console.log('Validación para contraseña');

        if (!boxInput.value.match(usuarioRegex)) {
            showError(true, box, boxInput);
        } else {
            showError(false, box, boxInput);
        }
    }

    if (boxInput?.name == 'password_confirmation') {
        //console.log('Validación para confirmar');
        if (form.password_confirmation.value != form.password.value) {
            //console.log(form.confirmar.value, form.contraseña.value);
            showError(true, box, boxInput);
        } else {
            //console.log(form.confirmar.value, form.contraseña.value);
            showError(false, box, boxInput);
        }
    }

    submitController();

}

showError = (check, box, boxInput) => {
    if (check) {
        box.classList.remove('form-success');
        box.classList.add('form-error');
        errors[boxInput.name] = true;
    } else {
        box.classList.remove('form-error');
        box.classList.add('form-success');
        errors[boxInput.name] = false;
    }
}

submitController = () => {
    if (errors.name || errors.last_name || errors.identification || errors.username || errors.email || errors.password || errors.password_confirmation) {
        console.log('existe error');    
        btnSutmit?.toggleAttribute('disabled', true)
    } else {
        btnSutmit?.toggleAttribute('disabled', false)
        console.log('no existe error');
    }
}

form?.addEventListener('submit', (event) => {
    event.preventDefault();
    const formData = new FormData(event.target);
    console.log([...formData]);
})




