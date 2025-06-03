<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>PlayFit | Retos semanales</title>
  <link rel="stylesheet" href="../estilos/retos.css">
  <link rel="shortcut icon" href="../img/IconoPlayFit.png" type="image/x-icon">

</head>
<body>
  <div class="container">
    <!-- Barra lateral -->
    <aside class="sidebar">
      <img src="../img/LogoPlayfit.png" alt="PlayFit Logo" class="logo">
      <nav>
        <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="retos.php">Reto Semanal</a></li>
                <li><a href="listadoEjercicios.php">Listado de ejercicios</a></li>
                <li><a href="sobreNosotros.php">Sobre nosotros</a></li>
                <li><a href="perfil.php">Perfil de Usuario</a></li>
                <li><a href="../Controladores/cerrarSesion.php">Cerrar sesión</a></li>
        </ul>
      </nav>
    </aside>

    <!-- Contenido principal -->
    <main class="contenidoPrincipal">
        
      <h1>Rutina Semanal</h1>
      <div class="selector">
        <label for="categoria">Selecciona una categoría:</label>
        <select id="categoria">
          <option value="Seleccionar">Seleccionar</option>
          <option value="chest">Pecho</option>
          <option value="back">Espalda</option>
          <option value="cardio">Cardio</option>
          <option value="shoulders">Hombros</option>
          <option value="upper arms">Brazos superiores</option>
          <option value="waist">Abdominales</option>
          <option value="upper legs">Piernas superiores</option>
          <option value="lower legs">Piernas inferiores</option>
        </select>
        <button onclick="generarRutina(document.getElementById('categoria').value)">Generar rutina</button>
      </div>
<br>
      <div class="ejercicios">
        <!--Lunes-->
        <div class="dia girarCarta">
          <div class="contenidoCarta">
            <div class="parteDelantera"></div>
            <div class="parteTrasera"></div>
          </div>
        </div>
        <!--Martes-->
        <div class="dia girarCarta">
          <div class="contenidoCarta">
            <div class="parteDelantera"> </div>
            <div class="parteTrasera"></div>
          </div>
        </div>
        <!--Miercoles-->
        <div class="dia girarCarta">
          <div class="contenidoCarta">
            <div class="parteDelantera"></div>
            <div class="parteTrasera"></div>
          </div>
        </div>
        <!--Jueves-->
        <div class="dia girarCarta">
          <div class="contenidoCarta">
            <div class="parteDelantera"></div>
            <div class="parteTrasera"></div>
          </div>
        </div>
         <!--Viernes-->
        <div class="dia girarCarta">
          <div class="contenidoCarta">
            <div class="parteDelantera"></div>
            <div class="parteTrasera"></div>
          </div>
        </div>
         <!--Sabado-->
        <div class="dia girarCarta">
          <div class="contenidoCarta">
            <div class="parteDelantera"></div>
            <div class="parteTrasera"></div>
          </div>
        </div>
         <!--Domingo-->
        <div class="dia girarCarta">
          <div class="contenidoCarta">
            <div class="parteDelantera"></div>
            <div class="parteTrasera"></div>
          </div>
        </div>

      </div>
    </main>
  </div>

  <footer class="footer">
    <p>@Ruben Abeledo Souto</p>
  </footer>

  <script src="../scripts/generarRetos.js"></script>
</body>
</html>
