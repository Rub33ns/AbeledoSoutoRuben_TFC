<?php
session_start();
require '../controladores/obtenerDatosUsuarios.php'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Modificar Datos Usuario</title>
    <link rel="stylesheet" href="../estilos/perfil.css" />
</head>
<body>

<h2>Modificar Datos de Usuario</h2>

<form action="../controladores/modificarUsuario.php" method="POST">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" required value="<?php echo htmlspecialchars($user['nombre']); ?>"><br><br>

    <label for="apellido">Apellido:</label><br>
    <input type="text" id="apellido" name="apellido" required value="<?php echo htmlspecialchars($user['apellido']); ?>"><br><br>

    <label for="imagenPerfil">URL Imagen de Perfil:</label><br>
    <input type="text" id="imagenPerfil" name="imagenPerfil" value="<?php echo htmlspecialchars($user['imagenPerfil']); ?>"><br><br>

    <button type="submit">Guardar Cambios</button>
</form>

<p><a href="perfil.php">Volver al perfil</a></p>

</body>
</html>
