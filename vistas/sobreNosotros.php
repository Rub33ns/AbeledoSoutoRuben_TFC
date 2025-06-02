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
  <title>PlayFit | Sobre nosotros</title>
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

    <!-- Página principal, donde explico basicamente de una manera resumida que es PlayFit-->
    <main class="contenidoPrincipal">
      <section class="bienvenida">
        <h1>Sobre <span style="color: #1A237E;">PlayFit</span></h1>
      </section>

      <div class="sobreNosotrosDatos">
        <h2>Preguntas Frecuentes sobre PlayFit</h2>
        <br>
        <h3>¿Qué es?</h3>
        <p>PlayFit es una aplicación web que ayuda a cambiar tus hábitos a la hora de hacer deporte.</p>
        <p>Para eso, nuestra web te ofrece una serie de ejercicios diarios para cumplir dependiendo de la parte
          del cuerpo que quieras entrenar.</p>
        <br>
        <h3>¿Cuál es la idea?</h3>
        <p>La idea de PlayFit es crear una página web junto a la ayuda de APIs, que fomente la realización de ejercicio físico mediante retos diarios.
        </p>
        <br>
        <h3>¿Hacia quién va dirigido?</h3>
        <p>PlayFit no está enfocado a un público concreto, en un inicio estaba pensado principalmente para ayudar a empresas como
          centros de rehabilitación y gimnasios, pero podría utilizar la web todo el que quisiera.</p>
        <br>
        <h3>¿Cuál es el origen?</h3>
        <p>PlayFit viene de una idea para realizar un TFC creada por el desarrollador y creador del proyecto Rubén
          Abeledo Souto. </p>
      </div>

      <div class="sobreNosotrosDatos">
        <h2>Tecnologías Utilizadas</h2>
        <br>
        <h3>APIs Utilizadas</h3>
       
          <p><strong>Nombre:</strong> ExerciseDB API</p>
          <p><strong> Información de la api:</strong> <a
              href="https://github.com/cyberboyanmol/exercisedb-api">ExerciseDB GitHub</a></p>
          <p><strong>Acceso a través de:</strong> <a href="https://rapidapi.com/hub">RapidApi</a></p>
          <p><strong>Tipo de licencia:</strong> MIT Copyright (c) 2024 Anmol Gangwar</p>
          <p> <strong>Utilidaz de esta Api:</strong> Principalmente la uso para generar ejercicios aleatorios con su
            nombre, descripción, imagen/gif.</p>
        
        <br>
        <hr>
        <br>
       
          <p><strong>Nombre:</strong> Spotify Web API</p>
          <p><strong> Información de la api:</strong> <a
              href="https://developer.spotify.com/documentation/web-api/">Spotify Web API Docs</a></p>
          <p><strong>Acceso a través de:</strong> <a href="https://developer.spotify.com/dashboard/">Spotify Developer
              Dashboard</a></p>
          <p><strong>Tipo de licencia:</strong> Propietaria, bajo los términos de uso de Spotify</p>
          <p> <strong>Utilidad de esta Api:</strong> Esta api la utilizo para generar playlist dependiendo del tipo
            de ejercicio que selecciones.</p>
        
        <br>
        <hr>
        <br>
        <h3>Imágenes Playfit</h3>
       
          <p>Todas las imágenes utilizadas en este proyecto han sido generadas mediante inteligencia artificial.</p>
          <p>De acuerdo con los Términos de uso de OpenAI, tengo pleno derecho a utilizarlas, modificarlas y
            distribuirlas libremente, incluso con fines comerciales.</p>
          <p><strong>Licencia de uso:</strong> OpenAI.</p>
        
        <br>
        <hr>
        <br>
        <h3>Herramientas de desarrollo</h3>
       
          <p>Visual Studio Code</p>
        
        <br>
        <hr>
        <br>
        <h3>Base de Datos</h3>
       
          <p>phpMyAdmin</p>
        
        <br>
        <hr>
        <br>
        <h3>Control de Versiones</h3>
       
          <p><strong>GitHub:</strong> Utilizo este control de versiones para guardar la estructura y contenido de el
            proyecto</p>
        
        <br>
        <hr>
        <br>
        <h3>Despliegue del proyecto</h3>
       
          <p><strong>Docker:</strong>Utilizo docker para desplegar mi proyecto con un Docker-compose.yml y un DockerFile</p>
        
        <br>
        <hr>
        <br>
        <h3>Lenguajes Utilizados</h3>
       
          <p><strong>HTML:</strong>Utilizado para las vistas.</p>
          <p><strong>PHP:</strong>Utilizado para las vistas y controladores.</p>
          <p><strong>JavaScript:</strong>Utilizado para trabajar con los 	formularios y las apis.</p>
          <p><strong>CSS:</strong>Utilizado para las vistas.</p>
        


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