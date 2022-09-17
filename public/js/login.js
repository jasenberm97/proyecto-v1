const form = document.getElementById('formulario');
        const btnSutmit = document.getElementById('submit-btn');

        console.log(form);

        let timeout = null;
        let errors = {
            username:true,
            password:true
        }

        const nombreRegex = /^[A-Z][a-z0-9]{7,10}$/

        document.querySelectorAll('.form-box').forEach((box) => {
            const boxInput = box.querySelector('input');


            boxInput?.addEventListener('keydown', (event) => {
                
                
                clearTimeout(timeout);
                timeout = setTimeout(() => {
                    validation(box, boxInput)
                }, 300);
            });
        });

        validation = (box, boxInput) => {
            if (boxInput.name == 'username') {
                //console.log('Validación para el nombre');
                if (!boxInput.value.match(nombreRegex)) {
                    showError(true, box, boxInput);
                } else {
                    showError(false, box, boxInput);
                }
            }

            if (boxInput.name == 'password') {
                //console.log('Validación para el apellido');

                if (!boxInput.value.match(nombreRegex)) {
                    showError(true, box, boxInput);
                } else {
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
            if (errors.username || errors.password) {
                btnSutmit?.toggleAttribute('disabled', true)
            } else {
                btnSutmit?.toggleAttribute('disabled', false)
            }
        }

        form?.addEventListener('submit', (event) => {
            event.preventDefault();
            const formData = new FormData(event.target);
            console.log([...formData]);
        })