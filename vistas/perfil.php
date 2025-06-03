<?php
session_start();
// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
require '../Controladores/obtenerDatosUsuarios.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PlayFit | Perfil de Usuario</title>
    <link rel="stylesheet" href="../estilos/perfil.css">
     <link rel="shortcut icon" href="../img/IconoPlayFit.png" type="image/x-icon">
</head>
<body>

<div class="contenedorGeneral">
    <aside class="sidebar">
        <img src="../img/LogoPlayfit.png" alt="PlayFit Logo" class="logo">
        <nav>
            <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="retos.php">Reto Semanal</a></li>
                <li><a href="listadoEjercicios.php">Listado de ejercicios</a></li>
                <li><a href="sobreNosotros.php">Sobre nosotros</a></li>
                <li><a href="perfil.php">Perfil de Usuario</a></li>
                <li><a href="../Controladores/cerrarSesion.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </aside>

    <main class="contenidoPrincipal">
        <h2>Perfil de Usuario</h2>

        <div class="perfilContenedor">
            <img src="<?php echo htmlspecialchars($user['imagenPerfil']); ?>" alt="Foto de perfil">
            <div class="datosUsuario">
                <p><strong>Nombre:</strong> <?php echo htmlspecialchars($user['nombre']); ?></p>
                <p><strong>Apellido:</strong> <?php echo htmlspecialchars($user['apellido']); ?></p>
                <p><strong>Correo:</strong> <?php echo htmlspecialchars($user['correo']); ?></p>
            </div>
        </div>

        <div class="accionesPerfil">
            <form action="formularioModificarUsuario.php" method="GET">
                <button type="submit">Modificar mis datos</button>
            </form>

            <form action="../Controladores/eliminarUsuario.php" method="POST" 
                    onsubmit="return confirm('¿Estás seguro de que quieres eliminar tu cuenta?');">
                <button type="submit">Eliminar mi cuenta</button>
            </form>
        </div>
    </main>
</div>

</body>
</html>
