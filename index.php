<?php
//Variables vacias donde voy aguardar los mensajes.
$mensajeBD = '';
$messageClass = '';
$botonLogin = false;
try {
    //Conectar a la base de datos
    $pdo = new PDO('mysql:host=localhost;dbname=PlayFitBD', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar si existen datos en la tabla usuarios en caso de que si tenga datos 
    //Poner el boton a true para mostrar el boton y entrar a el login.
    $stmt = $pdo->query('SELECT COUNT(*) FROM usuarios');
    $count = $stmt->fetchColumn();
    if ($count > 0) {
        $showLoginButton = true;
    }
} catch (PDOException $e) {
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Si llega por POST crearBD llamo a el controlador de crearTablas  y ejecutar el archivo para crearlas.
    if (isset($_POST['crearBD'])) {
        include 'controladores/crearTablas.php';
        //Guardar el mensaje de exito para despues mostrarlo en el index
        $mensajeBD = 'Base de datos y tablas creadas correctamente.';
        $messageClass = 'correcto';
    } elseif (isset($_POST['insertarDatos'])) {
        try {
            //Lo mismo para el controlador de añadir los datos a la tabla .
            //Si no da error mostrar el mesaje de todo correcto.
            $pdo = new PDO('mysql:host=localhost;dbname=PlayFitBD', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            include 'controladores/InsertarDatos.php';
            $mensajeBD = 'Datos insertados correctamente. Pulsa ir a login para comenzar!.';
            $messageClass = 'correcto';
            $stmt = $pdo->query('SELECT COUNT(*) FROM usuarios');
            $count = $stmt->fetchColumn();
            if ($count > 0) {
                $botonLogin = true;
            }
            //En caso de que se intente insertar datos sin crear primero la tabla mostrar mensaje de error.
        } catch (PDOException $e) {
            $mensajeBD = 'La base de datos PlayFitBD no existe. Crea la base de datos primero.';
            $messageClass = 'error';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PlayFit</title>
    <link rel="stylesheet" href="estilos/index.css">
    <link rel="shortcut icon" href="img/IconoPlayFit.png" type="image/x-icon">
</head>
<body>
<div class="contenedor">
    <img src="img/LogoPlayfit.png" alt="PlayFit" class="logo">
    <form method="post">
        <button type="submit" name="crearBD">Crear Base de Datos</button>
    </form>

    <form method="post">
        <button type="submit" name="insertarDatos">Insertar Datos</button>
    </form>
    <div class="mensajeBD <?php echo $messageClass; ?>">
        <?php echo $mensajeBD; ?>
    </div>
    <!-- En caso de que la variable este en true mostrar el botón de ir a el login (Si no este botón no se muestra)-->
    <?php if ($botonLogin): ?>
        <form action="vistas/login.php" method="get">
            <button type="submit">Ir al Login</button>
        </form>
    <?php endif; ?>
</div>

</body>
</html>
