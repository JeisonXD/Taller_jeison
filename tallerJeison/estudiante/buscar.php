<?php
include '../bd/conexion.php';

try {   
    $stmt= $mbd->prepare("SELECT * FROM Estudiantes WHERE id = ?");
    $stmt->bindParam(1, $_GET['id_estudiante']);
    $stmt-> execute();
    $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    header('Content-type:application/json;charset=utf-8');
    echo json_encode([
        'Estudiante' => $rs]);

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
