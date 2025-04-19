<?php

$dsn = "mysql:host=localhost;dbname=PlayFitBD"; 
$username = "root"; 
$password = "";

try {
    $conexion = new PDO($dsn, $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Recibir los datos de la BD
    $file = '../BD/DatosBD.sql'; 
    if (!file_exists($file)) {
        throw new Exception("El archivo $file no existe.");
    }

    $sql = file_get_contents($file);
    if ($sql === false) {
        throw new Exception("Error al leer el archivo $file.");
    }
    $conexion->exec("SET FOREIGN_KEY_CHECKS = 0;");
    $conexion->exec($sql);
    $conexion->exec("SET FOREIGN_KEY_CHECKS = 1;");
    
    echo "Datos principales insertados correctamente.<br>";

    // Insertar Usuarios con contraseña hasheada.
    $usuarios = [
        [
            'nombre' => 'Usuario1TFC',
            'apellido' => 'TFC',
            'correo' => 'Usuario1TFC@gmail.com',
            'contrasena' => 'Usuario1TFCprueba'
        ]
    ];

    $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, apellido, correo, contrasena) 
                                VALUES (:nombre, :apellido, :correo, :contrasena)");

    foreach ($usuarios as $usuario) {
        $hashedPassword = password_hash($usuario['contrasena'], PASSWORD_DEFAULT);
        $stmt->execute([
            ':nombre' => $usuario['nombre'],
            ':apellido' => $usuario['apellido'],
            ':correo' => $usuario['correo'],
            ':contrasena' => $hashedPassword
        ]);
    }

    echo "Usuarios insertados correctamente con contraseñas hasheadas.";

} catch (PDOException $e) {
    echo "Error de conexión o ejecución en la base de datos: " . $e->getMessage();
    exit;
} catch (Exception $e) {
    echo "Error general: " . $e->getMessage();
    exit;
}
?>
