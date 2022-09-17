/*****************************VALIDACION FORM PERFIL*******************************/
const formRol = document.getElementById('form-rol');
const btnRol = document.getElementById('submit-btn-rol');

let timeoutR = null;
let errorsR = {
    name:true,
    description:true,

}

const perfilRegex = /^[A-Za-z\s]{2,30}$/
const descripcionRegex = /^[A-Za-z\s]{2,50}$/


document.querySelectorAll('.form-boxR').forEach((box) => {
    const boxInput = box.querySelector('input');
    boxInput?.addEventListener('keydown', (event) => {
        
        
        clearTimeout(timeoutR);
        timeoutR = setTimeout(() => {
            //console.log(`Input ${boxInput.name} value: `, boxInput.value);  

            validationR(box, boxInput)
        }, 500);
    });
});

validationR = (box, boxInput) => {

    if (boxInput?.name == 'name') {
        if (!boxInput.value.match(perfilRegex)) {
            showError(true, box, boxInput);
        } else {
            showError(false, box, boxInput);
        }
    }

    if (boxInput?.name == 'description') {
        if (!boxInput.value.match(descripcionRegex)) {
            showError(true, box, boxInput);
        } else {
            showError(false, box, boxInput);
        }
    }

    submitControllerR();

}

showError = (check, box, boxInput) => {
    if (check) {
        box.classList.remove('form-success');
        box.classList.add('form-error');
        errorsR[boxInput.name] = true;
    } else {
        box.classList.remove('form-error');
        box.classList.add('form-success');
        errorsR[boxInput.name] = false;
    }
}

submitControllerR = () => {
    if (errorsR.name || errorsR.description ) {
        console.log('existe error');
        btnRol?.toggleAttribute('disabled', true)
    } else {
        btnRol?.toggleAttribute('disabled', false)
        console.log('no existe error');
    }
}

formRol?.addEventListener('submit', (event) => {
    event.preventDefault();
    const formData = new FormData(event.target);
    console.log([...formData]);
})