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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <link rel="stylesheet" href="../estilos/listados.css">
    <link rel="shortcut icon" href="../img/IconoPlayFit.png" type="image/x-icon">
</head>
<body>
     <div class="contenedorGeneral">
        <!-- Nav lateral con los enlaces al resto de vistas -->
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

         <!-- Contenido principal del listado de ejercicios (explico solo el primero, el resto son iguales). -->
        <main class="contenidoPrincipal">
            <!-- Contenedor para todos los ejercicios -->
            <div class="ejercicios-container">
               <!-- Contenedor por categoría -->
                <div class="categoria">
                    <!-- Nombre de la categoría -->
                    <h2>Pierna</h2>
                    <!-- Contenedor de las cartas por categoría -->
                    <div class="contenedorDeCartas">
                        <!-- Contenedor por cada carta -->
                        <div class="carta">
                            <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Squat_d752e42d-02ba-4692-b300-c6e67ad5a4f5_600x600.png?v=1612138811" alt="Sentadillas">
                            <!-- Contenedor para la información de cada carta -->
                            <div class="infoCarta">
                                <h3>Sentadillas</h3>
                                <p>Fortalece cuádriceps, glúteos y femorales</p>
                                <p>Repeticiones: 15</p>
                                <p>Tiempo por repetición: 30s</p>
                            </div>
                        </div>
                        <div class="carta">
                            <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Lunge_600x600.png?v=1612138903" alt="Zancadas">
                            <div class="infoCarta">
                                <h3>Zancadas</h3>
                                <p>Mejora equilibrio y fuerza en piernas</p>
                                <p>Repeticiones: 12</p>
                                <p>Tiempo por repetición: 30s</p>
                            </div>
                        </div>
                        <div class="carta">
                            <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Seated-Calf-Raise_8c8641b2-10f2-4dc8-9adb-8d80fd1a16d0_600x600.png?v=1612137064" alt="Elevaciones de talones">
                            <div class="infoCarta">
                                <h3>Elevaciones de talones</h3>
                                <p>Trabaja los gemelos</p>
                                <p>Repeticiones: 20</p>
                                <p>Tiempo por repetición: 20s</p>
                            </div>
                        </div>
                        <div class="carta">
                            <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Bodyweight-Bulgarian-Split-Squat_600x600.png?v=1655223826" alt="Sentadilla búlgara">
                            <div class="infoCarta">
                                <h3>Sentadilla búlgara</h3>
                                <p>Ejercicio unilateral de fuerza</p>
                                <p>Repeticiones: 10</p>
                                <p>Tiempo por repetición: 30s</p>
                            </div>
                        </div>

                        <div class="carta">
                            <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Dumbbell-Romanian-Deadlift_35135213-e0df-4ef2-b093-22ed8d04dc41_600x600.png?v=1621162896" alt="Peso muerto">
                            <div class="infoCarta">
                                <h3>Peso muerto</h3>
                                <p>Trabaja glúteos, isquios y zona lumbar</p>
                                <p>Repeticiones: 12</p>
                                <p>Tiempo por repetición: 40s</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="categoria">
                    <h2>Pecho</h2>
                    <div class="contenedorDeCartas">
                        <div class="carta">
                            <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Push-Ups_600x600.png?v=1640121436" alt="Flexiones">
                            <div class="infoCarta">
                                <h3>Flexiones</h3>
                                <p>Ejercicio base para el pecho</p>
                                <p>Repeticiones: 15</p>
                                <p>Tiempo por repetición: 30s</p>
                            </div>
                        </div>
                        <div class="carta">
                            <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Barbell-Bench-Press_0316b783-43b2-44f8-8a2b-b177a2cfcbfc_600x600.png?v=1612137800" alt="Press de banca">
                            <div class="infoCarta">
                                <h3>Press de banca</h3>
                                <p>Fortalece pectorales mayores</p>
                                <p>Repeticiones: 10</p>
                                <p>Tiempo por repetición: 40s</p>
                            </div>
                        </div>
                        <div class="carta">
                            <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Incline-Dumbbell-Fly_44d253c3-da60-45b2-b0ba-88a3bb79da09_600x600.png?v=1612137870" alt="Aperturas con mancuernas">
                            <div class="infoCarta">
                                <h3>Aperturas con mancuernas</h3>
                                <p>Mejora amplitud de pecho</p>
                                <p>Repeticiones: 12</p>
                                <p>Tiempo por repetición: 30s</p>
                            </div>
                        </div>

                        <div class="carta">
                            <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Parallel-Dip-Bar_600x600.png?v=1619977962" alt="Fondos en paralelas">
                            <div class="infoCarta">
                                <h3>Fondos en paralelas</h3>
                                <p>Trabaja pecho y tríceps</p>
                                <p>Repeticiones: 10</p>
                                <p>Tiempo por repetición: 30s</p>
                            </div>
                        </div>

                        <div class="carta">
                            <img src="https://cdni.iconscout.com/illustration/premium/thumb/flexiones-inclinadas-9297878-7588948.png" alt="Flexiones inclinadas">
                            <div class="infoCarta">
                                <h3>Flexiones inclinadas</h3>
                                <p>Mayor énfasis en la parte superior del pecho</p>
                                <p>Repeticiones: 15</p>
                                <p>Tiempo por repetición: 30s</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="categoria">
                    <h2>Brazo</h2>
                    <div class="contenedorDeCartas">
                        <div class="carta">
                            <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Alternating-Dumbbell-Curl_ad879dc4-b4fb-4ca7-b2b1-6e1eb5d78252_600x600.png?v=1612137169" alt="Curl de bíceps">
                            <div class="infoCarta">
                                <h3>Curl de bíceps</h3>
                                <p>Aísla y fortalece bíceps</p>
                                <p>Repeticiones: 12</p>
                                <p>Tiempo por repetición: 30s</p>
                            </div>
                        </div>

                        <div class="carta">
                            <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Triceps-Pressdown_e759437b-6200-4b44-b484-14db770024a4_600x600.png?v=1612136845" alt="Extensión de tríceps">
                            <div class="infoCarta">
                                <h3>Extensión de tríceps</h3>
                                <p>Trabaja la parte posterior del brazo</p>
                                <p>Repeticiones: 12</p>
                                <p>Tiempo por repetición: 25s</p>
                            </div>
                        </div>

                        <div class="carta">
                            <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Hammer-Curl_da9fea8b-fc81-4a4f-9af1-aea1b85239d7_600x600.png?v=1612137282" alt="Martillo con mancuernas">
                            <div class="infoCarta">
                                <h3>Martillo con mancuernas</h3>
                                <p>Estimula antebrazos y bíceps</p>
                                <p>Repeticiones: 10</p>
                                <p>Tiempo por repetición: 20s</p>
                            </div>
                        </div>
                       
                        <div class="carta">
                            <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Dumbbell-Concentration-Curl_289b5739-4bdd-40e6-a195-6ecfcc685126_600x600.png?v=1612137334" alt="Curl concentrado">
                            <div class="infoCarta">
                                <h3>Curl concentrado</h3>
                                <p>Aislamiento máximo del bíceps</p>
                                <p>Repeticiones: 8</p>
                                <p>Tiempo por repetición: 30s</p>
                            </div>
                        </div>

                        <div class="carta">
                            <img src="https://cdn.shopify.com/s/files/1/0269/5551/3900/files/Bench-Dips_600x600.png?v=1619977992" alt="Flexiones de tríceps">
                            <div class="infoCarta">
                                <h3>Flexiones de tríceps</h3>
                                <p>Trabaja tríceps en posición invertida</p>
                                <p>Repeticiones: 12</p>
                                <p>Tiempo por repetición: 30s</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
