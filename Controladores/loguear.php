<?php
// Iniciar una sesión
session_start(); 
// Conectarse a la base de datos utilizando el archivo conectarBD
include('conectarBD.php');
$error = '';  

// Recibir los datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // CAMBIO: usar 'correo' en vez de 'nombre'
    $correo = trim($_POST['correo']);
    $contrasena = trim($_POST['contrasena']);

    // Verificar si los campos de correo y contraseña no vienen vacíos
    if (!empty($correo) && !empty($contrasena)) {
        $sql = "SELECT * FROM usuarios WHERE correo = :correo"; 
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':correo', $correo, PDO::PARAM_STR);
        $stmt->execute();

        // Comprobar que el resultado de la consulta no está vacío. En caso contrario, generar error.
        if ($stmt->rowCount() > 0) {
            $usuario_bd = $stmt->fetch(PDO::FETCH_ASSOC);
            // Comprobar si la contraseña que está guardada en la base de datos es igual que la contraseña que llega por POST
            if (password_verify($contrasena, $usuario_bd['contrasena'])) { 
                // Guardar el correo del usuario como sesión
                $_SESSION['usuario'] = $usuario_bd['correo'];  
                // Si la contraseña y el correo coinciden, mostrar el inicio pero guardando la sesión
                header("Location: ../vistas/inicio.php"); 
                exit();
            } else {
                $error = "Contraseña incorrecta.";
            }
        } else {
            $error = "El usuario no existe.";
        }
    } else {
        $error = "Inserta datos en los campos anteriores.";
    }
}
// En caso de que haya algún error, redirigir al login
if (!empty($error)) {
    header("Location: ../vistas/login.php?error=" . urlencode($error));
    exit();
}
?>
