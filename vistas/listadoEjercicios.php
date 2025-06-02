<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
require_once '../controladores/conectarBD.php';

$stmt = $pdo->query("SELECT * FROM parteCuerpo ORDER BY nombre");
$partesCuerpo = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PlayFit | Listado de Ejercicios</title>
    <link rel="stylesheet" href="../estilos/listados.css">
    <script src="../scripts/playlist.js" defer></script>
    <script src="../scripts/buscarEjercicios.js" defer></script> 
    <link rel="shortcut icon" href="../img/IconoPlayFit.png" type="image/x-icon">
</head>
<body>
    <div class="contenedorGeneral">
        <aside class="sidebar">
            <img src="../img/LogoPlayfit.png" class="logo">
            <nav>
                <ul>
                    <li><a href="inicio.php">Inicio</a></li>
                    <li><a href="retos.php">Reto Semanal</a></li>
                    <li><a href="listadoEjercicios.php">Listado de ejercicios</a></li>
                    <li><a href="sobreNosotros.php">Sobre nosotros</a></li>
                    <li><a href="perfil.php">Perfil de Usuario</a></li>
                    <li><a href="../controladores/cerrarSesion.php">Cerrar sesión</a></li>
                </ul>
            </nav>
        </aside>

        <main class="contenidoPrincipal">
            <div class="contenedorCrearEjercicios">
                 <a href="crearEjercicios.php" class="botonCrear">Crear Nuevo Ejercicio</a>
            </div>

            <form style="margin: 20px;">
                <label for="parte">Selecciona una parte del cuerpo:</label>
                <select id="parte" onchange="cargarEjercicios()">
                    <option value="0">Full body</option>
                    <?php foreach ($partesCuerpo as $parte): ?>
                        <option value="<?= $parte['id'] ?>"><?= $parte['nombre'] ?></option>
                    <?php endforeach; ?>
                </select>
            </form>
                <h1>Playlist recomendadas:</h1>
                <div id="playlistsSpotify" class="contenedorDeCartas"></div>
                <div class="separador"></div>
                <h1>Ejercicios sobre la parte seleccionada:</h1>
                <div id="ejercicios" class="contenedorDeCartas"></div>
        </main>
    </div>
</body>
</html>
