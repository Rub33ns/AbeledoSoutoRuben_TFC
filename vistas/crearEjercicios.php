<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
require_once '../Controladores/conectarBD.php';

$stmt = $pdo->query("SELECT id, nombre FROM parteCuerpo");
$partes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>PlayFit | Crear Ejercicio</title>
    <link rel="stylesheet" href="../estilos/crearEjerciciosFormulario.css">
    <link rel="shortcut icon" href="../img/IconoPlayFit.png" type="image/x-icon">
</head>

<body>
    <div class="contenedorGeneral" >
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
        <main class="contenidoPrincipal">
            <div class="formularioCrearEjercicio">
                <h2>Crear nuevo ejercicio</h2>
                <form action="../Controladores/guardarNuevoEjercicio.php" method="POST">
                    <label>Nombre del Ejercicio:</label><br>
                    <input type="text" name="nombreEjercicio" required><br><br>

                    <label>Descripción:</label><br>
                    <textarea name="descripcion" required></textarea><br><br>

                    <label>Repeticiones:</label><br>
                    <input type="number" name="repeticones" required><br><br>

                    <label>Tiempo por Repetición:</label><br>
                    <input type="number" name="tiempoRepeticiones" required><br><br>

                    <label>URL de Imagen:</label><br>
                    <input type="url" name="imagenEjercicio" required><br><br>

                    <label>Parte del Cuerpo:</label><br>
                    <select name="id" required>
                        <?php foreach ($partes as $parte): ?>
                            <option value="<?= $parte['id'] ?>"><?= $parte['nombre'] ?></option>
                        <?php endforeach; ?>
                    </select><br><br>

                    <button type="submit">Guardar Ejercicio</button>
                    <p><a href="listadoEjercicios.php" >Cancelar</a></p>
                </form>
            </div>
        </main>
    </div>
</body>

</html>