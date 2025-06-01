<?php
//Estos son los datos necesarios para iniciar sesión en la BD
$host = 'db';
$dbname = 'PlayFitBD';
$username = 'root';
$password = '';

try {
    //Intenta realizar la conexión con los datos en caso de que no generaria un error.
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
