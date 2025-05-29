<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
require_once '../controladores/conectarBD.php';

$stmt = $pdo->query("SELECT id, nombre FROM parteCuerpo");
$partes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Ejercicio</title>
    <link rel="stylesheet" href="../estilos/listados.css">
    <link rel="shortcut icon" href="../img/IconoPlayFit.png" type="image/x-icon">
</head>
<body>
    <div class="contenedorGeneral" style="padding: 40px;">
        <h2>Nuevo Ejercicio</h2>
        <form action="../controladores/guardarNuevoEjercicio.php" method="POST">
            <label>Nombre del Ejercicio:</label><br>
            <input type="text" name="nombreEjercicio" required><br><br>

            <label>Descripción:</label><br>
            <textarea name="descripcion" required></textarea><br><br>

            <label>Repeticiones:</label><br>
            <input type="number" name="repeticones" required><br><br>

            <label>Tiempo por Repetición:</label><br>
            <input type="text" name="tiempoRepeticones" required><br><br>

            <label>URL de Imagen:</label><br>
            <input type="url" name="imagenEjercicio" required><br><br>

            <label>Parte del Cuerpo:</label><br>
            <select name="id" required>
                <?php foreach ($partes as $parte): ?>
                    <option value="<?= $parte['id'] ?>"><?= $parte['nombre'] ?></option>
                <?php endforeach; ?>
            </select><br><br>

            <button type="submit">Guardar Ejercicio</button>
            <a href="listadoEjercicios.php" style="margin-left: 20px;">Cancelar</a>
        </form>
    </div>
</body>
</html>
