<?php
//Conectarse a la Base de datos 
 require_once 'conectarBD.php'; 
 //Iniciar sesión
session_start();
//Coger los datos de el formulario de registro
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $correo = trim($_POST['correo']);
    $password = $_POST['password'];
    $confirmarContra = $_POST['confirmar'];
    $imagenPerfil = $_POST['imagenPerfil'];
    //Comprobar que las contraseñas que se introducen en el formulario son iguales
    if ($password !== $confirmarContra) {
        $_SESSION['error'] = 'Las contraseñas no son iguales';
        //En caso de que no sean iguales volver a mandar al registro para que pueda volver a insertar bien las contraseñas.
        header('Location: ../vistas/registro.php'); 
        exit();
    }
    //Al registrar al el usuario hashear la contraseña para guardarla.
    $contraseña_hasheada = password_hash($password, PASSWORD_DEFAULT);
    //Consulta para comprobar si el usuario que intenta crearse ya esta registrado con el correo (ES LA MANERA QUE TENGO PARA QUE NO SE REPITAN USUARIOS)
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE correo = ?");
    $stmt->execute([$correo]);
    if ($stmt->rowCount() > 0) {
        $_SESSION['error'] = 'El usuario con este correo ya esta registrado inicia sesión';
        header('Location: ../vistas/registro.php');
        exit();
    }
    try {
        //Consulta para insertar los datos que vienen por el registro para guardarlos en la base de datos.
        $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, apellido, correo, contrasena,imagenPerfil) VALUES (?, ?, ?, ?,?)");
        $stmt->execute([$nombre, $apellido, $correo, $contraseña_hasheada, $imagenPerfil]);
        $_SESSION['success'] = 'Usuario creado con exito. Inicia Sesión';
        header('Location: ../vistas/login.php');
        exit();
    } catch (PDOException $e) {
        $_SESSION['error'] = 'Error al registrar el usuario: ' . $e->getMessage();
        header('Location: ../vistas/registro.php');
        exit();
    }
}
?>
