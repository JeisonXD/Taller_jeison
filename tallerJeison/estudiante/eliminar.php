<?php
include '../bd/conexion.php';

$info = json_decode(file_get_contents("php://input"), true);
try {
    $stmt = $mbd->prepare("DELETE FROM Estudiantes WHERE id = ?");
    $stmt->bindParam(1, $info['id']);
    $stmt->execute();
    header('Content-type:application/json;charset=utf-8');
    echo json_encode([
        'AVISO' => "Estudiante eliminado correctamente"
    ]);
} catch (PDOException $e) {
    header('Content-type:application/json;charset=utf-8');
    echo json_encode([
        'error' => [
            'codigo' => $e->getCode(),
            'mensaje' => $e->getMessage()
        ]
    ]);
}