//Parte de JS para realizar llamadas a la api y mostrarlo en el html.
//Guardar en una variable la api_key  de RapidApi que voy a utilizar para el proyecto.
const options = {
  method: 'GET',
  headers: {
    'x-rapidapi-key': 'e3ef2a9418msh17ede47ffb9e5c8p1b96bbjsnb6bfadc1b73a',
    'x-rapidapi-host': 'exercisedb.p.rapidapi.com'
  }
};
//Array con los dias de la semana para completar en la petición.
const diasSemana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
//Seleccionar el div de cada carta.
const carta = document.querySelectorAll(".day-card");
//Realizar petición a la api para mostrar los ejercicios por la  categorias que tiene (devuelve JSON con el contenido).
async function obtenerEjerciciosPorCategoria(categoria) {
  const res = await fetch(`https://exercisedb.p.rapidapi.com/exercises/bodyPart/${categoria}`, options);
  const data = await res.json();
  return data;
}
//Traducir las partes de el cuerpo para generar la descripción.
function traducirParte(bodyPart) {
  const partes = {
    'chest': 'pecho',
    'back': 'espalda',
    'shoulders': 'hombros',
    'upper arms': 'brazos superiores',
    'lower arms': 'brazos inferiores',
    'upper legs': 'piernas superiores',
    'lower legs': 'piernas inferiores',
    'waist': 'cintura',
    'cardio': 'cardio',
    'neck': 'cuello'
  };
  return partes[bodyPart] || bodyPart;
}
//Traducir equipo de trabajo para generar la descripción.
function traducirEquipo(equipo) {
  const equipos = {
    'body weight': 'el peso corporal',
    'barbell': 'una barra',
    'dumbbell': 'mancuernas',
    'cable': 'una máquina de cable',
    'machine': 'una máquina',
    'resistance band': 'bandas elásticas',
    'kettlebell': 'pesas rusas',
    'medicine ball': 'una pelota medicinal'
  };
  return equipos[equipo] || equipo;
}
//Generar descripción automatica con los campos anteriores.
function generarDescripcion(ej) {
  return `El ejercicio "${ej.name}" trabaja principalmente el músculo ${ej.target}. Se realiza utilizando ${traducirEquipo(ej.equipment)} y está enfocado en la parte del cuerpo ${traducirParte(ej.bodyPart)}.`;
}
//Crear una funcion async para seleccionar los ejercicios pasandole la categoria a la que pertenecen.
async function generarRutina(categoria) {
  const ejercicios = await obtenerEjerciciosPorCategoria(categoria);
  if (!ejercicios.length) return;
//Crear un conjunto para que no se guarden ejercicios repetidos.
  const ejerciciosUsados = new Set();
//Hacer un bucle para trabajar en cada ejercicio.
  carta.forEach((card, i) => {
    let ejercicio;
    do {
//Seleccionar un ejercicio aleatorio 
      ejercicio = ejercicios[Math.floor(Math.random() * ejercicios.length)];
    } while (ejerciciosUsados.has(ejercicio.id));
//Añadir los usuarios a el conjunto para que no se repitan.
    ejerciciosUsados.add(ejercicio.id);
//Crear una variable para almacenar el contenido que voy a pedir en los innerHTML.
    const dia = diasSemana[i];
    const nombre = ejercicio.name;
    const descripcion = generarDescripcion(ejercicio);
    const serie = `${Math.floor(Math.random() * 6 + 10)}`;
    const reps = `${Math.floor(Math.random() * 3 + 3)}`;
    const tiempo = `${Math.floor(Math.random() * 31 + 30)}s entre series`;

//Obtener los div donde ira el contenido de cada ejercicio para cada día de la semana.
    const parteDelantera = card.querySelector(".parteDelantera");
    const parteTasera = card.querySelector(".parteTrasera");

//Contenido HTML para la parte delantera de la carta (llama a las variables creadas antes).
    parteDelantera.innerHTML = `
        <h2>${dia}</h2>
        <p><strong>Ejercicio:</strong> ${nombre}</p>
        <p><strong>Repeticiones:</strong> ${reps}</p>
        <p><strong>Series:</strong> ${serie} veces</p>
        <p><strong>Tiempo descanso:</strong> ${tiempo}</p>
        <img src="${ejercicio.gifUrl}" alt="Ejercicio ${dia}" />
        <button class="realizado-btn">Mirar Descripción</button>
      `;
//Contenido HTML para la parte trasera de la carta.
    parteTasera.innerHTML = `
        <div class="realizado-text">${descripcion}</div>
        <button class="volver-btn">Volver</button>
      `;
//Obtener los botones de el InnerHTML para crear eventos con ellos.
    const btnVer = parteDelantera.querySelector(".realizado-btn");
    const btnVolver = parteTasera.querySelector(".volver-btn");

//Crear evento para girar la carta y ver la descripción.
    btnVer.addEventListener("click", () => {
      card.classList.add("girar");
    });
//Crear evento para girar la carta y ver el contenido principal de nuevo.
    btnVolver.addEventListener("click", () => {
      card.classList.remove("girar");
    });
  });
}
function guardarCambios() {
  alert("Cambios guardados (simulado). PROXIMAMENTE");
}
//Cargar predeterminado la opción Seleccionar de el html
window.onload = () => generarRutina("Seleccionar");
