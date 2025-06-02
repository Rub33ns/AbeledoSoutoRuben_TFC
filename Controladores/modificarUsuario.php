<?php
session_start();
require 'conectarBD.php';

// Verificar sesión activa
if (!isset($_SESSION['usuario'])) {
    header('Location: ../vistas/login.php');
    exit();
}
try {
    //Este seria la sesión actual si no se cambia el correo electronico 
    $correoActual = $_SESSION['usuario']; 
    // Recoger datos del formulario
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $nuevoCorreo = trim($_POST['correo']);
    $imagenPerfil = trim($_POST['imagenPerfil']);
    $password = $_POST['password'] ?? '';
    $confirmar = $_POST['confirmar'] ?? '';

    // Consulta para cambiar los datos en caso que no sea la contraseña
    $sql = "UPDATE usuarios SET nombre = ?, apellido = ?, imagenPerfil = ?, correo = ?";
    $params = [$nombre, $apellido, $imagenPerfil, $nuevoCorreo];

    // En caso de que el valor de contraseña tenga contenido cambiar la contraseña anterior por la nueva 
    if ($password !== '') {
        if ($password !== $confirmar) {
            exit("Las contraseñas no coinciden.");
        }
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $sql .= ", contrasena = ?";
        $params[] = $passwordHash;
    }

    // Consulta para cambiar el correo
    $sql .= " WHERE correo = ?";
    $params[] = $correoActual;
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    // En caso de que se cambie el correo establecer la nueva sesion con el correo nuevo 
    $_SESSION['usuario'] = $nuevoCorreo;

    // Redirigir a el perfil de nuevo 
    header('Location: ../vistas/perfil.php');
    exit();

} catch (PDOException $e) {
    exit("Error al modificar los datos: " . $e->getMessage());
}
