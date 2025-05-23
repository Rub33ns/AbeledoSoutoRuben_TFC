<?php
session_start();
require 'conectarBD.php';

if (!isset($_SESSION['usuario'])) {
    header('Location: ../vistas/login.php');
    exit();
}

try {
    $correo = $_SESSION['usuario'];
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $imagenPerfil = trim($_POST['imagenPerfil']);
    $stmt = $pdo->prepare("UPDATE usuarios SET nombre = ?, apellido = ?, imagenPerfil = ? WHERE correo = ?");
    $stmt->execute([$nombre, $apellido, $imagenPerfil, $correo]);

    header('Location: ../vistas/perfil.php');
    exit();
} catch (PDOException $e) {
    die("Error al modificar los datos: " . $e->getMessage());
}
