 <!--Inicar sesión -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>PlayFit Registro</title>
  <link rel="stylesheet" href="../estilos/registro.css">
  <link rel="shortcut icon" href="../img/IconoPlayFit.png" type="image/x-icon">
  <!--Con este scrip lo que realizo es validar los campos de el registro con diferentes patrones -->
  <script src="../scripts/validarRegistro.js"></script>
</head>
<body>
  <div class="cajaGeneral">
    <div class="cajaFormulario">
      <img src="../img/LogoPlayfit.png" alt="PlayFit" class="logo">
      <h2>Crear tu cuenta</h2>
      
      <!-- En caso de que de error al enviar el formulario al registrar mostrar el error en rojo dentro de el formulario-->
      <?php if (isset($_SESSION['error'])): ?>
        <p style="color: red;"><?php echo $_SESSION['error']; ?></p>
        <?php unset($_SESSION['error']); ?>
      <?php endif; ?>
      <form action="../controladores/registrarUsuario.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required placeholder="Como mínimo 2 caracteres.">

        <label for="apellido">Apellidos:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="correo">Correo electrónico:</label>
        <input type="text" id="correo" name="correo" required placeholder="CorreoEjemplo@gmail.com">

        <label for="imagenPerfil">Enlace de foto de perfil:</label>
        <input type="text" name="imagenPerfil" id="imagenPerfil" placeholder="https://...">

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required placeholder="Como mínimo: 1 Mayúscula, 8 caracteres, 1 Carácter especial.">

        <label for="confirmar">Repetir contraseña:</label>
        <input type="password" id="confirmar" name="confirmar" required placeholder="Repite la contraseña anterior.">
        <!--Utilizo un checkbox para mostrar la contraseña en formato texto -->
        <p><input type="checkbox" id="verPassword" onclick="verContrasena()"> Mostrar contraseñas</p>

        <button type="submit">Registrarse</button>
      </form>
      <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
    </div>
  </div>
</body>
</html>
