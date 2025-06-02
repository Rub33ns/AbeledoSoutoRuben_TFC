<?php
//Iniciar sesión
session_start();
//Utilizar el controlador para conectarme a la base de datos
require 'conectarBD.php';
//En caso de que no este conectado con esa sesión redirigir a el login.
if (!isset($_SESSION['usuario'])) {
    header('Location: ../vistas/login.php');
    exit();
}

try {
    //Utilizar los datos de el formulario.
    $correo = $_SESSION['usuario'];
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $imagenPerfil = trim($_POST['imagenPerfil']);
    //Consulta para cambiar los datos de el usuario
    $stmt = $pdo->prepare("UPDATE usuarios SET nombre = ?, apellido = ?, imagenPerfil = ? WHERE correo = ?");
    $stmt->execute([$nombre, $apellido, $imagenPerfil, $correo]);
    //Redirigir a el usuario de nuevo a el perfil.
    header('Location: ../vistas/perfil.php');
    exit();
} catch (PDOException $e) {
    die("Error al modificar los datos: " . $e->getMessage());
}
