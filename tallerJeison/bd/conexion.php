<?php
try {
    $mbd = new PDO('mysql:host=localhost;dbname=Registro_de_notas', 'root', '');
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>