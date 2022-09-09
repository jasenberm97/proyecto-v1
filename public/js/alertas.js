
let btn_borrar = document.querySelector('.borrar')

console.log(btn_borrar);

btn_borrar.onclick = function() {
    Swal.fire({
        title: '¿Estas seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, bórralo!'
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
            'Eliminado!!',
            'Su archivo ha sido eliminado.',
            'success'
            )
        }
    })
}