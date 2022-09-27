<?php
include '../bd/conexion.php';

try {   
    $stmt=$mbd->prepare("SELECT * FROM Notas WHERE id = ?");
    $stmt->bindParam(1, $_GET['id']);
    $stmt-> execute();
    $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $mbd = null;
    header('Content-type:application/json;charset=utf-8');
    echo json_encode($rs);

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>