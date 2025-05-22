<?php
//Conectarse a la base de datos con el archivo conectarBD
require 'conectarBD.php';  
try {
    //Recoger la sesión de el usuario
    $usuario = $_SESSION['usuario'];
    //Consulta para traer todos los datos de el usuario que tiene la sesión iniciada.
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE correo = :usuario");
    $stmt->execute(['usuario' => $usuario]);
    $user = $stmt->fetch();
    //En caso de error guardarlo,mostrarlo  y matar el proceso 
} catch (PDOException $e) {
    die("Error al encontrar el usuario: " . $e->getMessage());
}
?>
