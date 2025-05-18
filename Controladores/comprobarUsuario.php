<?php
// ARCHIVO QUE SIRVE PARA SABER SI EL USUARIO ESTÁ EN LA BASE DE DATOS, VALIDÁNDOLO CON EL (CORREO).
// Iniciar la sesión
session_start();
// Comprobar que la conexión a la base de datos es correcta, en caso de que no, saltaría un mensaje de error.
require 'conectarBD.php';
// Seleccionar por método POST los datos necesarios (Nombre y Contraseña)
$usuario = $_POST['usuario'];
$contrasena = $_POST['contra'];
// Intentar encontrar el usuario con un try-catch  
try {
    // Consulta para comprobar que el nombre de usuario cuadra con el correo electrónico.
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE correo = :usuario");
    $stmt->execute(['usuario' => $usuario]);
    $user = $stmt->fetch();
    // Comprobar que la contraseña que se introduce en el login es la misma que la contraseña hasheada en la base de datos.
    if ($user && password_verify($contrasena, $user['contrasena'])) {
        $_SESSION['usuario'] = $user['nombre'];
        // En caso de que sea correcto los 2 campos, redireccionar a la página de inicio con la sesión [Usuario].
        header('Location: ../vistas/inicio.php'); 
        exit();
    } 
    // En caso de que no sea el mismo usuario, guardar un error y redireccionar de nuevo al login mostrando el error.
} catch (PDOException $e) {
    $error = 'Error en BD: ' . $e->getMessage();
    header('Location: ../vistas/login.php?error=' . urlencode($error));
    exit();
}
