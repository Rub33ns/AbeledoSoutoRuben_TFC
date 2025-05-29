function cargarEjercicios() {
    const idParte = document.getElementById('parte').value;
    const nombreParte = document.getElementById('parte').selectedOptions[0].text;

    fetch('../controladores/listarEjerciciosPorParte.php?idParte=' + idParte)
        .then(res => res.json())
        .then(data => {
            const contenedor = document.getElementById('ejercicios');
            contenedor.innerHTML = '';
            if (data.length === 0) {
                contenedor.innerHTML = '<p>No hay ejercicios para esta parte del cuerpo.</p>';
                return;
            }
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
            mostrarPlaylists(nombreParte);
        });
}

window.onload = cargarEjercicios;
