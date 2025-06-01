//Datos para poder utilizar la API de spotify
const clientId = 'e3546d79dffd4f798fc926137c25feed';
const clientSecret = 'e31fb340d4134d69a2b6061f4e0ac374';
//Funcion para conseguir el token necesario para poder solicitar a la api de spotify
async function conseguirToken(clientId, clientSecret) {
    const response = await fetch('https://accounts.spotify.com/api/token', {
        method: 'POST',
        headers: {
            'Authorization': 'Basic ' + btoa(clientId + ':' + clientSecret),
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'grant_type=client_credentials'
    });
    const data = await response.json();
    return data.access_token;
}
//Con esta funcion lo que realizo es buscar en la api aquellas canciones que tengan relación con la palabra que se selecciona.
async function buscarPlaylist(query, token) {
    //Guardo una variable el filtro que utilizo en caso de que no encuentre playlist para esa parte
    const queryDeportivo = `${query} gym`;
    //Hago la peticion a la api para que me coincida con la palabra de filtro y la que se selecciona y le pongo una limitación de 50 busquedas
    const response = await fetch(`https://api.spotify.com/v1/search?q=${encodeURIComponent(queryDeportivo)}&type=playlist&limit=50`, {
        headers: {
            'Authorization': `Bearer ${token}`
        }
    });
    //Espero la respuesta de el JSON
    const data = await response.json();
    //Y devuelvo la lista con las playlist seleccionadas.
    return data.playlists.items;
}
//Creo una funcion para mostrar las playlist en el php se llama desde otro archivo js.
async function mostrarPlaylists(nombreParte) {
    //Llamo a las 2 funciones anteriores para que me genere el token y pueda utilizar la api.
    const token = await conseguirToken(clientId, clientSecret);
    const playlists = await buscarPlaylist(nombreParte, token);
    //Limite de playlist que se van a mostrar pongo 4 para no saturar la página.
    const numeroDePlaylist = 4;
    //Creo un array para ir guardando las playlist que ya salieron para que no se repitan
    const playlistYaSeleccionadas = [];
    //Creo una copia de lista de playlist
    const playlistsCopia = playlists.slice();
    //Con un bucle for lo que hago es seleccionar 4 canciones aleatorias 
    //elimino esas canciones de la copia y las subo a las lista de ya seleccionadas.
    for (let i = 0; i < numeroDePlaylist && playlistsCopia.length > 0; i++) {
        const indice = Math.floor(Math.random() * playlistsCopia.length);
        const playlistSeleccionada = playlistsCopia.splice(indice, 1)[0];
        playlistYaSeleccionadas.push(playlistSeleccionada);
    }
    //Selecciono el contenedor donde voy a mostras las playlist
    const contenedor = document.getElementById('playlistsSpotify');
    //Lo vacio para cuando se generen de nuevo las actualice
    contenedor.innerHTML = '';
    //Por cada playlist que esta en el array genero el html para que se vea en el PHP con los datos.
    playlistYaSeleccionadas.forEach(playlist => {
        contenedor.innerHTML += `
        <div class="carta">
            <a href="${playlist.external_urls.spotify}" target="_blank">
                <img src="${playlist.images[0]?.url || ''}" alt="${playlist.name}">
                <div class="infoCarta">
                    <h3>${playlist.name}</h3>
                    <p>Playlist de entrenamiento</p>
                    <p>Ir a Spotify</p>
                </div>
            </a>
        </div>
    `;
    });
}


