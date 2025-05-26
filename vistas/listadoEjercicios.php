<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}

require_once '../controladores/conectarBD.php'; 
$stmt = $pdo->query("
    SELECT ejercicios.*, parteCuerpo.nombre
    FROM ejercicios 
    JOIN parteCuerpo ON ejercicios.idParteCuerpo = parteCuerpo.id
    ORDER BY parteCuerpo.nombre
");

$ejercicios = $stmt->fetchAll(PDO::FETCH_ASSOC);

$categorias = [];
foreach ($ejercicios as $ejercicio) {
    $nombreParte = $ejercicio['nombre'];
    $categorias[$nombreParte][] = $ejercicio;
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
        <!-- Nav lateral -->
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

        <!-- Contenido principal -->
        <main class="contenidoPrincipal">
            <div style="text-align: right; margin: 20px;">
                <a href="crearEjercicios.php" class="boton-crear">Crear Ejercicio +</a>
            </div>

            <div class="ejercicios-container">
                <?php foreach ($categorias as $nombreCategoria => $listaEjercicios): ?>
                    <div class="categoria">
                        <h2><?= $nombreCategoria ?></h2>
                        <div class="contenedorDeCartas">
                            <?php foreach ($listaEjercicios as $ejercicio): ?>
                                <div class="carta">
                                    <img src="<?= $ejercicio['imagenEjercicio'] ?>" alt="<?= $ejercicio['nombreEjercicio']?>">
                                    <div class="infoCarta">
                                        <h3><?= $ejercicio['nombreEjercicio']?></h3>
                                        <p><?= $ejercicio['descripcion'] ?></p>
                                        <p>Repeticiones: <?=$ejercicio['repeticones'] ?></p>
                                        <p>Tiempo por repetición: <?= $ejercicio['tiempoRepeticones'] ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>
</body>
</html>
modificame esto 