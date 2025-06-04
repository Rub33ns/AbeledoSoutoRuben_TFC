//Guardo en una constante la api KEY
const options = {
  method: 'GET',
  headers: {
    'x-rapidapi-key': 'ec2eeaa387msh8ce4358463b2b4fp18b3e4jsnac16255e9331', 
    'x-rapidapi-host': 'exercisedb.p.rapidapi.com'
  }
};

// Array con los días de la semana 
const diasSemana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

// Selección de las cartas del DOM
const cartas = document.querySelectorAll(".dia");

// Con esta funcion genero una descripción personalizada para cada carta
function generarDescripcion(ejercicio) {
  return `El ejercicio "${ejercicio.name}" trabaja principalmente el músculo ${ejercicio.target}. Se realiza utilizando ${ejercicio.equipment} y está enfocado en la parte del cuerpo ${ejercicio.bodyPart}.`;
}

// Función para generar la rutina según categoría
async function generarRutina(categoria) {
  if (!categoria || categoria === "Seleccionar") {
    alert("Por favor, selecciona una categoría válida");
    return;
  }

  try {
    const res = await fetch(`https://exercisedb.p.rapidapi.com/exercises/bodyPart/${categoria}`, options);
    if (!res.ok) throw new Error("Error en la respuesta de la API");
    const data = await res.json();

    if (data.length === 0) {
      alert("No se encontraron ejercicios para esta categoría.");
      return;
    }
    const usados = new Set();
    cartas.forEach((card, i) => {
      let ejercicio;
      do {
        ejercicio = data[Math.floor(Math.random() * data.length)];
      } while (usados.has(ejercicio.id));
      usados.add(ejercicio.id);

      // Variables para mostrar
      const dia = diasSemana[i] || `Día ${i+1}`;
      const nombre = ejercicio.name;
      const descripcion = generarDescripcion(ejercicio);
      const serie = `${Math.floor(Math.random() * 6 + 10)}`; // entre 10 y 15
      const reps = `${Math.floor(Math.random() * 3 + 3)}`;   // entre 3 y 5
      const tiempo = `${Math.floor(Math.random() * 31 + 30)}s entre series`; // 30 a 60 seg

      // Seleccionamos las partes delantera y trasera de la carta
      const parteDelantera = card.querySelector(".parteDelantera");
      const parteTrasera = card.querySelector(".parteTrasera");

      // Inserto contenido en la parte delantera
      parteDelantera.innerHTML = `
        <h2>${dia}</h2>
        <p><strong>Ejercicio:</strong> ${nombre}</p>
        <p><strong>Repeticiones:</strong> ${reps}</p>
        <p><strong>Series:</strong> ${serie} veces</p>
        <p><strong>Tiempo descanso:</strong> ${tiempo}</p>
        <img src="${ejercicio.gifUrl}" alt="Ejercicio ${nombre}" />
        <button class="mirarDescripcion">Mirar Descripción</button>
      `;

      // Inserto contenido en la parte trasera
      parteTrasera.innerHTML = `
        <div class="descripcion">${descripcion}</div>
        <button class="volver">Volver</button>
      `;

      //Eventos para girar cartas
      const btnVer = parteDelantera.querySelector(".mirarDescripcion");
      const btnVolver = parteTrasera.querySelector(".volver");

      btnVer.addEventListener("click", () => {
        card.classList.add("girar");
      });

      btnVolver.addEventListener("click", () => {
        card.classList.remove("girar");
      });
      card.classList.remove("girar");
    });

  } catch (error) {
    console.error(error);
    alert("Error al obtener los ejercicios, intenta de nuevo más tarde.");
  }
}

document.getElementById("generarBtn").addEventListener("click", () => {
  const categoria = document.getElementById("categoriaSelect").value;
  generarRutina(categoria);
});

