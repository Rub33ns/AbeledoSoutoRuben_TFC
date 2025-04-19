<?php
try {
    $host = 'localhost';
    $db = 'PlayFitBD';
    $user = 'root';
    $pass = ''; 
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    //Crear Tablas de el archivo BD/TablasBD.sql
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Conexión exitosa<br>";
    $file = '../BD/TablaBD.sql'; 
    if (!file_exists($file)) {
        throw new Exception("El archivo $file no existe.");
    }

    $sql = file_get_contents($file);
    if ($sql === false) {
        throw new Exception("Error al leer el archivo $file.");
    }

  
    $pdo->exec($sql);
    echo "Tablas creadas correctamente.";

} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
