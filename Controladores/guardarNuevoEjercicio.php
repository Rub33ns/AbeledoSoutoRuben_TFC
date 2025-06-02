<?php
//Iniciar sesion con el usuario 
session_start();
//Si el usuario no cuadra con la sesíón redirigir a el login
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
//Utilizar el controlador para conectar con la BD.
require_once 'conectarBD.php';
//Pedir los datos por POST.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idParte = $_POST['id'];
    $nombre = $_POST['nombreEjercicio'];
    $descripcion = $_POST['descripcion'];
    $repeticiones = $_POST['repeticones'];
    $tiempo = $_POST['tiempoRepeticiones'];
    $imagen = $_POST['imagenEjercicio'];
//Crear la consulta para insertar el ejercicio nuevo con los datos.
    $stmt = $pdo->prepare("INSERT INTO ejercicios (idParteCuerpo, nombreEjercicio, descripcion, repeticones, tiempoRepeticones, imagenEjercicio) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$idParte, $nombre, $descripcion, $repeticiones, $tiempo, $imagen]);
//Redirigir a el listado de ejercicios de nuevo.
    header('Location: ../vistas/listadoEjercicios.php');
    exit();
    //En caso de que no de error mostrarlo.
} else {
    echo "Error al isertar datos.";
}
