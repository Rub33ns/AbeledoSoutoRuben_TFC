const clientId = 'e3546d79dffd4f798fc926137c25feed';
const clientSecret = 'e31fb340d4134d69a2b6061f4e0ac374';

async function mostrarPlaylists(nombreParte) {
    const token = await conseguirToken(clientId, clientSecret);
    const playlists = await buscarPlaylist(nombreParte, token);

    const numeroDePlaylist = 4;
    const playlistYaSeleccionadas = [];

    const playlistsCopia = playlists.slice();

    for (let i = 0; i < numeroDePlaylist && playlistsCopia.length > 0; i++) {
        const indice = Math.floor(Math.random() * playlistsCopia.length);
        const playlistSeleccionada = playlistsCopia.splice(indice, 1)[0];
        playlistYaSeleccionadas.push(playlistSeleccionada);
    }

    const contenedor = document.getElementById('playlistsSpotify');
    contenedor.innerHTML = '';

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

async function buscarPlaylist(query, token) {
    const queryDeportivo = `${query} gym`;
    const response = await fetch(`https://api.spotify.com/v1/search?q=${encodeURIComponent(queryDeportivo)}&type=playlist&limit=50`, {
        headers: {
            'Authorization': `Bearer ${token}`
        }
    });
    const data = await response.json();
    return data.playlists.items;
}


