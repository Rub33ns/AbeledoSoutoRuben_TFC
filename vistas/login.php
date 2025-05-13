<?php
//En caso de que al enviar los datos de login de algun error guardarlo para despues mostrarlo.
$error = '';
if (isset($_GET['error'])) {
    $error = $_GET['error']; 
}
?>
 
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>PlayFit Login</title>
  <link rel="stylesheet" href="../estilos/login.css">
  <link rel="shortcut icon" href="../img/IconoPlayFit.png" type="image/x-icon">
</head>

<body>
  <div class="cajaLogin">
    <div class="cajaContenido">
      <img src="../img/LogoPlayfit.png" alt="PlayFit" class="logo">
      <h2>Bienvenido a PlayFit</h2>
      <form action="../controladores/loguear.php" method="POST">
      <!-- Campos de el formulario-->
        <label for="nombre">Usuario:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>

        <p><input type="checkbox" id="verContra" onclick="verContrasena()"> Mostrar Contraseña</p>
        <button type="submit">Iniciar sesión</button>
      </form>
      <!--Mostrar el mensaje de error de color rojo-->
      <?php if (!empty($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
      <?php endif; ?>

      <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
    </div>
  </div>
  <!--Script para poder mostrar al contraseña que introduces (cambia el tipo de imput de password a text o de text a password para que no se vea.)-->
  <script>
    function verContrasena() {
      var vercontra = document.getElementById("contrasena");
      vercontra.type = vercontra.type === "password" ? "text" : "password";
    }
  </script>
</body>
</html>
