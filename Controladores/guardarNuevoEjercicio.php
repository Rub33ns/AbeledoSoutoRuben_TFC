<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
require_once 'conectarBD.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idParte = $_POST['id'];
    $nombre = $_POST['nombreEjercicio'];
    $descripcion = $_POST['descripcion'];
    $repeticiones = $_POST['repeticones'];
    $tiempo = $_POST['tiempoRepeticones'];
    $imagen = $_POST['imagenEjercicio'];

    $stmt = $pdo->prepare("INSERT INTO ejercicios (idParteCuerpo, nombreEjercicio, descripcion, repeticones, tiempoRepeticones, imagenEjercicio) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$idParte, $nombre, $descripcion, $repeticiones, $tiempo, $imagen]);

    header('Location: ../vistas/listadoEjercicios.php');
    exit();
} else {
    echo "Error al isertar datos.";
}
