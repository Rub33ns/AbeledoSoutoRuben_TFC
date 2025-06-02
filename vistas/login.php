<?php
// Mostrar error si lo hay
$error = '';
if (isset($_GET['error'])) {
    $error = $_GET['error']; 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>PlayFit | Login</title>
  <link rel="stylesheet" href="../estilos/login.css">
  <link rel="shortcut icon" href="../img/IconoPlayFit.png" type="image/x-icon">
</head>

<body>
  <div class="cajaLogin">
    <div class="cajaContenido">
      <img src="../img/LogoPlayfitForm.png" alt="Logo de PlayFit" class="logo">
      <h2>Bienvenido a PlayFit</h2>
      <form action="../controladores/loguear.php" method="POST">
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>

        <p><input type="checkbox" id="verContra" onclick="verContrasena()"> Mostrar Contraseña</p>
        <button type="submit">Iniciar sesión</button>
      </form>

      <?php if (!empty($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
      <?php endif; ?>

      <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
    </div>
  </div>

  <script>
    function verContrasena() {
      var vercontra = document.getElementById("contrasena");
      vercontra.type = vercontra.type === "password" ? "text" : "password";
    }
  </script>
</body>
</html>
