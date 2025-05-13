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
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Squat_d752e42d-02ba-4692-b300-c6e67ad5a4f5_600x600.png?v=1612138811" 
                  alt="Ejercicio de sentadilla con barra apoyada en los hombros, vista lateral">
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Seated-Calf-Raise_8c8641b2-10f2-4dc8-9adb-8d80fd1a16d0_600x600.png?v=1612137064" 
                  alt="Ejercicio de elevación de talones sentado en máquina, enfocado en los músculos de la pantorrilla">
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Dumbbell-Romanian-Deadlift_35135213-e0df-4ef2-b093-22ed8d04dc41_600x600.png?v=1621162896" 
                  alt="Persona realizando peso muerto rumano con mancuernas, centrado en glúteos e isquiotibiales">
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Barbell-Bench-Press_0316b783-43b2-44f8-8a2b-b177a2cfcbfc_600x600.png?v=1612137800" 
                  alt="Persona realizando press de banca con barra, enfocando el trabajo en pectorales, tríceps y hombros frontales">
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Parallel-Dip-Bar_600x600.png?v=1619977962" 
                  alt="Persona haciendo fondos en paralelas, ejercicio de peso corporal que trabaja tríceps, pectorales y hombros">
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Alternating-Dumbbell-Curl_ad879dc4-b4fb-4ca7-b2b1-6e1eb5d78252_600x600.png?v=1612137169" 
                  alt="Persona haciendo curl alterno con mancuernas, ejercicio para trabajar los bíceps alternando los brazos">
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Triceps-Pressdown_e759437b-6200-4b44-b484-14db770024a4_600x600.png?v=1612136845" 
                  alt="Persona realizando el ejercicio de presión de triceps con cuerda en polea alta">
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Bench-Dips_600x600.png?v=1619977992" 
                  alt="Persona realizando triceps pressdown con cuerda en polea alta, ejercicio para trabajar los músculos del tríceps">
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Single-Arm-Dumbbell-Row_600x600.png?v=1612138400" 
                  alt="Persona realizando un remo con mancuernas a un brazo, trabajando la espalda y los músculos del core">
        </div>
        <!-- Sección para dar la bienvenida y empezar el reto -->
        <section class="bienvenida">
          <h1>Bienvenido a <span style="color: red;">PlayFit</span></h1>
          <p>Juega y entrena realizando ejercicio</p>
          <br>
          <a href="retos.php" class="Empezar_Reto">Empieza tu reto</a>
        </section>
        <div class="imagenes">
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Rope-Pulldown_24c7b22e-bf99-4ade-ba6c-c7b2f20ffa9a_600x600.png?v=1612138283" 
                  alt="Persona realizando el ejercicio de pulldown con cuerda en polea alta, enfocado en trabajar la espalda.">
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Bird-Dog_600x600.png?v=1656401941" 
                  alt="Persona realizando el ejercicio Bird Dog para mejorar el equilibrio y estabilidad.">
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Dumbbell-Bent-Over-Row-_Single-Arm_49867db3-f465-4fbc-b359-29cbdda502e2_600x600.png?v=1612138069" 
                  alt="Persona realizando el ejercicio de remo con mancuernas con un brazo, para trabajar la espalda.">
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Incline-Dumbbell-Fly_44d253c3-da60-45b2-b0ba-88a3bb79da09_600x600.png?v=1612137870" 
                  alt="Persona realizando el ejercicio de press inclinado con mancuernas para trabajar los músculos del pecho.">
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Push-Ups_600x600.png?v=1640121436" 
                  alt="Persona realizando flexiones, un ejercicio clásico para trabajar el pecho, hombros y triceps.">
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Bodyweight-Bulgarian-Split-Squat_600x600.png?v=1655223826" 
                  alt="Persona realizando la sentadilla búlgara utilizando el propio peso corporal para trabajar las piernas y glúteos.">
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Lunge_600x600.png?v=1612138903" 
                  alt="Persona realizando el ejercicio de zancadas para trabajar los músculos de las piernas y glúteos.">
          <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Pull-Up_600x600.png?v=1612138466" 
                  alt="Persona realizando dominadas para trabajar los músculos de la espalda y los brazos.">
          </div>
      </div>
    </main>
    <footer class="footer">
    <p>&copy; Ruben Abeledo Souto</p>
  </footer>
  </div>
</body>
</html>
