<?php
//Utilizar el controlador para conectarse a la base de datos.
require_once 'conectarBD.php';
//Comprobar el número de la parte que viene de el formulario sino lo pasa a 0
$idParte = isset($_GET['idParte']) ? (int)$_GET['idParte'] : 0;
//Consulta para seleccionar todos los ejerciios dependiendo de la parte de el cuerpo de la otra tabla.
$sql = "
    SELECT ejercicios.*, parteCuerpo.nombre AS nombreParte 
    FROM ejercicios 
    JOIN parteCuerpo ON ejercicios.idParteCuerpo = parteCuerpo.id
";
if ($idParte > 0) {
    $sql .= " WHERE parteCuerpo.id = :idParte";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['idParte' => $idParte]);
} else {
    $stmt = $pdo->query($sql);
}
//Con esto lo que hago es crear un JSON con los resultados de los ejercicios.
$ejercicios = $stmt->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: application/json');
echo json_encode($ejercicios);
