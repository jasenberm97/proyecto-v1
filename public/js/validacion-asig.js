const formA = document.getElementById('form-asig');
const btnAsignatura = document.getElementById('submit-btn-asig');

let timeoutA = null;
let errorsA = {
    name_faculty:true,
    name_career:true,
    name_course:true,
    semester:true,
}

document.querySelectorAll('.form-boxA').forEach((box) => {
   
    const boxSelect = box.querySelector('select');

    if (boxSelect?.name) {
        boxSelect.addEventListener('click', function(){
            clearTimeout(timeoutA);
            timeoutA = setTimeout(() => {
                console.log(`Input ${boxSelect.name} value: `, boxSelect.value);  

                validationA(box, boxSelect)
            }, 300);
        })
    }
});

validationA = (box, boxSelect) => {
    if (boxSelect?.name === 'name_faculty') {
        if (boxSelect.value== '') {
            console.log(boxSelect?.value);
            showError(true, box, boxSelect);
        } else {
            showError(false, box, boxSelect);
            console.log(boxSelect?.value);
        }
    }
    if (boxSelect?.name === 'name_career') {
        if (boxSelect.value== '') {
            console.log(boxSelect?.value);
            showError(true, box, boxSelect);
        } else {
            showError(false, box, boxSelect);
            console.log(boxSelect?.value);
        }
    }
    if (boxSelect?.name === 'name_course') {
        if (boxSelect.value== '') {
            console.log(boxSelect?.value);
            showError(true, box, boxSelect);
        } else {
            showError(false, box, boxSelect);
            console.log(boxSelect?.value);
        }
    }
    if (boxSelect?.name === 'semester') {
        if (boxSelect.value== '') {
            console.log(boxSelect?.value);
            showError(true, box, boxSelect);
        } else {
            showError(false, box, boxSelect);
            console.log(boxSelect?.value);
        }
    }

    
    submitControllerA();

}

showError = (check, box, boxInput) => {
    if (check) {
        box.classList.remove('form-success');
        box.classList.add('form-error');
        errorsA[boxInput.name] = true;
    } else {
        box.classList.remove('form-error');
        box.classList.add('form-success');
        errorsA[boxInput.name] = false;
    }
}

submitControllerA = () => {
    if (errorsA.name_faculty || errorsA.name_career || errorsA.name_course || errorsA.semester) {
        console.log('existe error');
        btnAsignatura?.toggleAttribute('disabled', true)
    } else {
        btnAsignatura?.toggleAttribute('disabled', false)
        console.log('no existe error');
    }
}

formA?.addEventListener('submit', (event) => {
    event.preventDefault();
    const formData = new FormData(event.target);
    console.log([...formData]);
})