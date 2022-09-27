<?php
include '../bd/conexion.php';

$info = json_decode(file_get_contents("php://input"), true);
try{
    $stmt = $mbd->prepare("INSERT INTO Notas (id_estudiante, nombre, ingreso_nota, consulta_nota, nota, corte, materia, email) VALUES (?,?,?,?,?,?,?,?)");
    $stmt -> bindParam(1, $info['id_estudiante']);
    $stmt -> bindParam(2, $info['nombre']);
    $stmt -> bindParam(3, $info['ingreso_nota']);
    $stmt -> bindParam(4, $info['consulta_nota']);
    $stmt -> bindParam(5, $info['nota']);
    $stmt -> bindParam(6, $info['corte']);
    $stmt -> bindParam(7, $info['materia']);
    $stmt -> bindParam(8, $info['email']);
    $stmt -> execute();

    header('Content-type:application/json;charset=utf-8');
        echo json_encode([
            $info
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