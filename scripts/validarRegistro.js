//Funcion para poder ver la contraseña en el registro.
function verContrasena() {
    const password = document.getElementById("password");
    const confirmar = document.getElementById("confirmar");
    const tipo = password.type === "password" ? "text" : "password";
    password.type = tipo;
    confirmar.type = tipo;
}

//Crear un evento para el formulario.
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    //Crear evento en el caso de darle al boton de enviar.
    form.addEventListener('submit', function (event) {
        //Parar el evento hasta que se comprueban los campos.
        event.preventDefault();
        //Seleccionar los campos de el formulario.
        const nombre = document.getElementById('nombre');
        const correo = document.getElementById('correo');
        const password = document.getElementById('password');
        const confirmar = document.getElementById('confirmar');

        //PARA TODOS LOS PATRONES: (En caso de no cumplir el patrón devolver una alerta y hacer focus en el campo.)
        // Validar nombre.
        if (nombre.value.trim().length <= 2) {
            alert('El nombre debe tener más de 2 caracteres.');
            nombre.focus();
            return;
        }
        // Validar correo
        const patronCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!patronCorreo.test(correo.value.trim())) {
            alert('Ingrese un correo electrónico válido.');
            correo.focus();
            return;
        }
        // Validar la contraseña como mínimo con : 1 mayus, 1 carácter especial y 8 caracteres.
        const patronPassword = /^(?=.*[A-Z])(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]).{8,}$/;
        if (!patronPassword.test(password.value)) {
            alert('La contraseña debe tener al menos una mayúscula un carácter especial y 8 caracteres.');
            password.focus();
            return;
        }
        // Comprobar que la contraseña cuadra con la contraseña anterior
        if (password.value !== confirmar.value) {
            alert('Las contraseñas no coinciden.');
            confirmar.focus();
            return;
        }
        //Enviar el formulario.
        form.submit();
    });
});
