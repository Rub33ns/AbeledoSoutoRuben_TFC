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
  <link rel="stylesheet" href="../estilos/inicio.css">
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
    <!-- Carrusel para mostrar los ejercicios con una animación -->
    <main class="contenidoPrincipal">
      <div class="carrusel">
                        <div class="imagenes">
                        <img src="../img/sentadillas.png" 
                                alt="Ejercicio de sentadillas ">
                        <img src="../img/flexiones.png" 
                                alt="Ejercicio de  flexiones">
                        <img src="../img/zancadas.png" 
                                alt="Ejercicio de zancadas">
                        <img src="../img/pressDeBanca.png" 
                                alt="Ejercicio de press de banca">
                        <img src="../img/pesoMuerto.png" 
                                alt="Ejercicio de Peso Muerto">
                        <img src="../img/aperturaConMancuernas.png" 
                                alt="Ejercicio de apertura con mancuernas">
                        <img src="../img/fondosEnParalelas.png" 
                                alt="Ejercicio de fondos en paralelas">
                        <img src="../img/flexionesInclinadas.png" 
                                alt="Ejercicio de flexiones inclinadas">
                        </div>
                <!-- Sección para dar la bienvenida y empezar el reto -->
                <section class="bienvenida">
                <h1>Bienvenido a <span style="color: red;">PlayFit</span></h1>
                <p>Juega y entrena realizando ejercicio</p>
                <br>
                <a href="retos.php" class="Empezar_Reto">Empieza tu reto</a>
                </section>
                        <div class="imagenes">
                        <img src="../img/curlConcentrado.png" 
                                alt="Ejercicio de curl concentrado">
                        <img src="../img/remoConMancuernaAUnaMano.png" 
                                alt="Ejercicio de remo con mancuerna a una mano">
                        <img src="../img/remoEnMaquina.png" 
                                alt="Ejercicio de remo en máquina">
                        <img src="../img/flexionesDeTriceps.png" 
                                alt="Ejercicio de flexiones de triceps">
                        <img src="../img/curlDeBiceps.png" 
                                alt="Ejercicio de curl de biceps">
                        <img src="../img/extensionDeTriceps.png" 
                                alt="Ejercicio de extension de triceps">
                        <img src="../img/dominadas.png" 
                                alt="Ejercicio de dominadas">
                        <img src="../img/pesoMuertoConBarra.png" 
                                alt="Ejercicio de peso muerto conBarra">
                        </div>
                </div>
      </div>
    </main>
    <footer class="footer">
    <p>&copy; Ruben Abeledo Souto</p>
  </footer>
  </div>
</body>
</html>
