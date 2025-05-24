<?php
// Crear conexión con la BD
$dsn = "mysql:host=db;dbname=PlayFitBD";
$username = "root";
$password = "";
try {
    // Tratar de conectar con la BD usando los campos anteriores.
    $conexion = new PDO($dsn, $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Ruta donde se almacena el documento SQL que contiene los datos predefinidos en la BD
    $file = 'bd/DatosBD.sql';
    // Si no existe el documento, mostrar mensaje de no encontrado.
    if (!file_exists($file)) {
        throw new Exception("El archivo $file no existe.");
    }
    // En caso de que no pueda leerse, mostrar mensaje de error.
    $sql = file_get_contents($file);
    if ($sql === false) {
        throw new Exception("Error al leer el archivo $file.");
    }
    // Verificar si ya hay datos en la BD
    $stmt = $conexion->query("SELECT COUNT(*) FROM usuarios");
    $count = $stmt->fetchColumn();
    if ($count == 0) {
        $conexion->exec("SET FOREIGN_KEY_CHECKS = 0;");
        // Ejecutar el archivo para crear los datos.
        $conexion->exec($sql);
        $conexion->exec("SET FOREIGN_KEY_CHECKS = 1;");
        // Listado de usuarios añadidos de manera externa (sumárselos a los datos predeterminados que ya están en la tabla)
        $usuarios = [
            [
                'nombre' => 'Usuario1TFC',
                'apellido' => 'TFC',
                'correo' => 'Usuario1TFC@gmail.com',
                'contrasena' => 'User123456',
                'imagenPerfil' => 'https://cdn-icons-png.flaticon.com/512/3135/3135768.png'
            ],
            [
                'nombre' => 'Rubén',
                'apellido' => 'Abeledo Souto',
                'correo' => 'abeledosoutoruben@gmail.com',
                'contrasena' => 'admin',
                'imagenPerfil' => 'https://cdn-icons-png.flaticon.com/512/17246/17246509.png'
            ]
        ];
        // Consulta para insertar los datos en la tabla
        $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, apellido, correo, contrasena, imagenPerfil) 
                                    VALUES (:nombre, :apellido, :correo, :contrasena, :imagenPerfil)");
        // Ir rellenando los datos de cada usuario uno por uno (con la contraseña cifrada)
        foreach ($usuarios as $usuario) {
            $hashedPassword = password_hash($usuario['contrasena'], PASSWORD_DEFAULT);
            $stmt->execute([
                ':nombre' => $usuario['nombre'],
                ':apellido' => $usuario['apellido'],
                ':correo' => $usuario['correo'],
                ':contrasena' => $hashedPassword,
                ':imagenPerfil' => $usuario['imagenPerfil']
            ]);
        }
    }
    // En caso de que al intentar insertar los datos ocurra un error, mostrarlo.
} catch (PDOException $e) {
    echo "Error de conexión o ejecución en la base de datos: " . $e->getMessage();
    exit;
} catch (Exception $e) {
    echo "Error general: " . $e->getMessage();
    exit;
}
?>
