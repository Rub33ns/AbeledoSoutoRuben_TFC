<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

// Incluir el controlador para obtener los datos del usuario
require '../controladores/obtenerDatosUsuarios.php';  // Asegúrate de que la ruta es correcta para el archivo de obtenerUsuario.php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="../estilos/perfil.css">
</head>
<body>

<div class="contenedorGeneral">
    <!-- Nav lateral con los enlaces al resto de vistas -->
    <aside class="sidebar">
        <img src="../img/LogoPlayfit.png" alt="PlayFit Logo" class="logo">
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
    <h2>Perfil de Usuario</h2>
    
    <div class="perfil-contenedor">
        <img src="<?php echo htmlspecialchars($user['imagenPerfil']); ?>" alt="Foto de perfil">
        <div class="datos-usuario">
            <p><strong>Nombre:</strong> <?php echo htmlspecialchars($user['nombre']); ?></p>
            <p><strong>Apellido:</strong> <?php echo htmlspecialchars($user['apellido']); ?></p>
            <p><strong>Correo:</strong> <?php echo htmlspecialchars($user['correo']); ?></p>
        </div>
    </div>
</main>

</div>

</body>
</html>
