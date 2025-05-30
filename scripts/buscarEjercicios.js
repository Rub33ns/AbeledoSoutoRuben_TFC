//Esta funcion vale para traer los ejercicios de la base de datos segun la parte de el cuerpo que quieras mostrar
function cargarEjercicios() {
    //Guardo en una variable  el valor que me trae el select desde el php
    const idParte = document.getElementById('parte').value;
    const nombreParte = document.getElementById('parte').selectedOptions[0].text;
    //Le hago una solicitud en este caso al controlador que me devuelve la parte de el cuerpo para utilizar el JSON
    fetch('../controladores/listarEjerciciosPorParte.php?idParte=' + idParte)
        .then(res => res.json())
        .then(data => {
            //Actualizo el html para que e caso de que encuentre ejercicios me borre los anteriores y despues me los cargue actualizados.
            const contenedor = document.getElementById('ejercicios');
            contenedor.innerHTML = '';
            //En caso de que no tenga ejercicios esa parte mostrar un error.
            if (data.length === 0) {
                contenedor.innerHTML = '<p>No hay ejercicios para esta parte del cuerpo.</p>';
                return;
            }
            //Por cada ejercicio voy a generar una carta con los siguientes datos y las añado al contenedor.
            data.forEach(ej => {
                const card = `
                    <div class="carta">
                        <img src="${ej.imagenEjercicio}" alt="${ej.nombreEjercicio}">
                        <div class="infoCarta">
                            <h3>${ej.nombreEjercicio}</h3>
                            <p>${ej.descripcion}</p>
                            <p>Repeticiones: ${ej.repeticones}</p>
                            <p>Tiempo: ${ej.tiempoRepeticones}</p>
                        </div>
                    </div>
                `;
                contenedor.innerHTML += card;
            });
            //Llamo a un script externo que me carga las playlist de spotify que estan asociadas a la parte de el cuerpo.
            mostrarPlaylists(nombreParte);
        });
}
//Cargo los datos nada mas iniciar la página.
window.onload = cargarEjercicios;
