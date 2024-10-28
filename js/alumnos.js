/**
 * Realiza una peticion para listar las entradas de los alumnos.
*/
function Listar(busqueda) {
    fetch("../listar.php", {
        method: "POST",
        body: busqueda
    }).then(response => response.text()).then(response => {
        resultado.innerHTML = response;
    })
}

/**
 * Función que permite validar el correo electrónico.
*/
function ValidarCorreo(correo){
const parametro = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
return parametro.test(correo);
}

/**
 * Evento onClick en el boton de registrar.
 * Envia los datos del formulario para registrar un alumno y actualiza la lista de nuevo.
*/
registrar.addEventListener("click", () => {

    /* Se comprueba que los datos introducidos son válidos */
    const nombre = document.getElementById('nombre').value.trim();
    const telefono = document.getElementById('telefono').value.trim();
    const correo = document.getElementById('correo').value.trim();

    if(!nombre || !telefono || !correo){
        Swal.fire({
            title: 'Error',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK',
            text: 'Complete todos los campos',
        });
        return;
    }

    if(!ValidarCorreo(correo)){
        Swal.fire({
            title: 'Error',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK',
            text: 'Introduzca un correo válido',
        });
        return;
    }

    fetch("../registrar.php", {
        method: "POST",
        body: new FormData(frm)
    }).then(response => response.text()).then(response => {
        if (response == "ok") {
            Swal.fire({
                icon: 'success',
                title: 'Registrado',
                showConfirmButton: false,
                timer: 1500
            })
            frm.reset();
            Listar();
        }  
    })
});

