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
  <title>PlayFit</title>
  <link rel="stylesheet" href="../estilos/sobreNosotros.css">
  <link rel="shortcut icon" href="../img/IconoPlayFit.png" type="image/x-icon">
</head>

<body>
  <div class="contenedorGeneral">
    <!-- Nav lateral con los enlaces a el resto de vistas -->
    <aside class="sidebar">
      <img src="../img/LogoPlayfit.png" alt="PlayFit Logo" class="logo">
      <nav>
        <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="retos.php">Reto Semanal</a></li>
                <li><a href="listadoEjercicios.php">Listado de ejercicios</a></li>
                <li><a href="sobreNosotros.php">Sobre nosotros</a></li>
                <li><a href="perfil.php">Perfil de Usuario</a></li>
                <li><a href="../controladores/cerrarSesion.php">Cerrar sesión</a></li>
        </ul>
      </nav>
    </aside>

    <!-- Página principal, donde explico basicamente de una manera rusumida que es PlayFit-->
    <main class="contenidoPrincipal">
      <section class="bienvenida">
        <h1>Sobre  <span style="color: red;">PlayFit</span></h1>
      </section>

      <div class="sobreNosotrosDatos">
        <h2>Preguntas Frecuentes</h2>
        <br>
        <h3>¿Que es PlayFit?</h3>
        <p>PlayFit es una aplicaión web que te ayuda a cambiar tus habitos a la hora de hacer deporte.</p>
        <p>Para eso nuestra web te ofrede una serie de retos diarios de ejercicios par cumplir dependiendo de la parte
          de el cuerpo que quieres entrenar.</p>
        <br>
        <h3>¿Cual es la idea de PlayFit?</h3>
        <p>La idea de PlayFit es crear una página web junto apis nos ayude a realizar más deporte con retos diarios. </p>
        <br>
        <h3>¿Cual es el orígen de PlayFit?</h3>
        <p>PLayFit viene de una idea para realizar un TFC creada por el desarrollador y creador de el proyecto Rubén Abeledo Souto. </p>
      </div>

      <div class="sobreNosotrosDatos">
        <h2>Tecnologías Utilizadas</h2>
        <br>
        <h3>Api Externa</h3>
          <ul>
            <li><strong>Nombre:</strong>  ExerciseDB API</li>
            <li><strong> Informacion de la api:</strong> <a href="https://github.com/cyberboyanmol/exercisedb-api">ExerciseDB GitHub</a></li>
            <li><strong>Acceso a través de:</strong> <a href="https://rapidapi.com/hub">RapidApi</a></li>
            <li><strong>Tipo de licencia:</strong> MIT  Copyright (c) 2024 Anmol Gangwar</li>
            <li> <strong>Utilidaz de esta Api:</strong> Principalmente la uso para generar ejercicios aleatorios con su nombre, descripción, imagen/gif.</li>
          </ul>
      </div>
      <div class="sobreNosotrosDatos">
        <h2>Equipo De Trabajo</h2>
        <br>
        <div class="equipoDeTrabajo">
          <img src="../img/EquipoDeTrabajo.PNG" alt="Foto del miembro" class="fotoMiembro">
          <div class="infoEquipo">
            <h3>Rubén Abeledo Souto</h3>
            <p>Desarrollador Web / Creador</p>
            <p>Técnico Superior En Desarrollo De Aplicaciones Web</p>
          </div>
        </div>
      </div>
      
    </main>
  </div>

</body>

</html>