<?php
//Intentar realizar la conexión con la base de datos , con los siguientes datos.
try {
    $host = 'db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
    //Crear conexion con la BD
    $dsn = "mysql:host=$host;charset=$charset";
    //Opciones de el PDO
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    //Conectar con la base de datos
    $pdo = new PDO($dsn, $user, $pass, $options);
    //Archivo de donde va a sacar las tablas de la base de datos. Es el SQL
    $file = 'BD/TablaBD.sql'; 
    //En caso de que el archivo no exista generar un nuevo error
    if (!file_exists($file)) {
        throw new Exception("El archivo $file no existe.");
    }
    //En caso de que el archivo exista pero no lo pueda leer generar otro error.
    $sql = file_get_contents($file);
    if ($sql === false) {
        throw new Exception("Error al leer el archivo $file.");
    }
    //Ejecutar SQL
    $pdo->exec($sql);
    //Realizar un catch y en caso de que tenga errores guardarlos en un mensaje.
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
