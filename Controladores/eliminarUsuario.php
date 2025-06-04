<?php
//Se inicia la sesión.
session_start();
//Utilizo el controlador para conectarme en la BD.
require 'conectarBD.php';
//Si no esta iniciada la sesion con Usuario redirigir a el login (seguridad para no poder entrar sin iniciar sesión).
if (!isset($_SESSION['usuario'])) {
    header('Location: ../vistas/login.php');
    exit();
}
//Intentar coger la sesión de el Usuario
try {
    $correo = $_SESSION['usuario'];
    //Realizar una consulta SQL para eliminar el usuario que cuadre con el correo.
    $stmt = $pdo->prepare("DELETE FROM usuarios WHERE correo = ?");
    $stmt->execute([$correo]);
    //Destruir la sesión y redirigir el usuario a el login.
    session_unset();
    session_destroy();
    header('Location: ../vistas/login.php');
    exit();
    //En caso de que de algún error guardarlo y mostrarlo.
} catch (PDOException $e) {
    die("Error al eliminar el usuario: " . $e->getMessage());
}
