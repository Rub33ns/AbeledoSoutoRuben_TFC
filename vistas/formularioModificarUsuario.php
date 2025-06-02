<?php
session_start();
require '../controladores/obtenerDatosUsuarios.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>PlayFit | Modificar Datos de Usuario</title>
    <link rel="stylesheet" href="../estilos/modificarFormulario.css" />
    <link rel="shortcut icon" href="../img/IconoPlayFit.png" type="image/x-icon">
    <script src="../scripts/validarFormularios.js"></script>
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
                    <li><a href="../controladores/cerrarSesion.php">Cerrar sesión</a></li>
                </ul>
            </nav>
        </aside>
        <main class="contenidoPrincipal">
            <div class="formularioModificar">
                <h2>Modifica tus datos de usuario</h2>
                <form action="../controladores/modificarUsuario.php" method="POST">
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" id="nombre" name="nombre" required
                        value="<?php echo $user['nombre']; ?>"><br>

                    <label for="apellido">Apellido:</label><br>
                    <input type="text" id="apellido" name="apellido" required
                        value="<?php echo $user['apellido']; ?>"><br>

                    <label for="correo">Correo Electrónico:</label><br>
                    <input type="email" id="correo" name="correo" required
                        value="<?php echo $user['correo']; ?>"><br>

                    <label for="imagenPerfil">URL de la Imagen de Perfil:</label><br>
                    <input type="text" id="imagenPerfil" name="imagenPerfil"
                        value="<?php echo $user['imagenPerfil']; ?>"><br>

                    <label for="password">Nueva Contraseña:</label><br>
                    <input type="password" id="password" name="password" placeholder="*Dejar campo vacio = No cambiar contraseña"><br>

                    <label for="confirmar">Confirmar Nueva Contraseña:</label><br>
                    <input type="password" id="confirmar" name="confirmar" placeholder="Tiene que ser igual que la contraseña anterior"><br>

                    <input type="checkbox" onclick="verContrasena()"> Mostrar contraseña<br><br>

                    <button type="submit">Guardar Cambios</button>
                </form>
                <p><a href="perfil.php">Volver al perfil</a></p>
            </div>
        </main>
    </div>
</body>

</html>