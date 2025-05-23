<?php
session_start();
require 'conectarBD.php';

if (!isset($_SESSION['usuario'])) {
    header('Location: ../vistas/login.php');
    exit();
}

try {
    $correo = $_SESSION['usuario'];
    $stmt = $pdo->prepare("DELETE FROM usuarios WHERE correo = ?");
    $stmt->execute([$correo]);
    session_unset();
    session_destroy();
    header('Location: ../vistas/login.php');
    exit();
} catch (PDOException $e) {
    die("Error al eliminar el usuario: " . $e->getMessage());
}
