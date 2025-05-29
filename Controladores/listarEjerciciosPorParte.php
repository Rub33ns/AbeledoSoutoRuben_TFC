<?php
require_once 'conectarBD.php';

$idParte = isset($_GET['idParte']) ? (int)$_GET['idParte'] : 0;

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

$ejercicios = $stmt->fetchAll(PDO::FETCH_ASSOC);
header('Content-Type: application/json');
echo json_encode($ejercicios);
