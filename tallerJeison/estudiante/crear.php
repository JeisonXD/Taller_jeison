<?php
include '../bd/conexion.php';
$info = json_decode(file_get_contents("php://input"), true);
try {
    $stmt = $mbd->prepare("INSERT INTO Estudiantes (Nombre, Ciudad, Telefono) VALUES (?,?,?)");
    $stmt->bindParam(1, $info['nombre']);
    $stmt->bindParam(2, $info['ciudad']);
    $stmt->bindParam(3, $info['telefono']);
    $stmt->execute();
    header('Content-type:application/json;charset=utf-8');
    echo json_encode([
        'Nuevo cliente' => $info
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
