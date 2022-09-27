<?php
include '../bd/conexion.php';

try {    
    $stmt=$mbd->prepare("SELECT * FROM Notas");
    $stmt->execute();
    $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    header('Content-type:application/json;charset=utf-8');
    echo json_encode($rs);

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}