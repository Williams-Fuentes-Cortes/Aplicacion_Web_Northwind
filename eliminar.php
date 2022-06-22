<?php
/*
================================
Este archivo elimina un dato por ID sin
pedir confirmación. El ID viene de la URL
================================
*/
if (!isset($_GET["customerid"])) {
    exit();
}

$customerid = $_GET["customerid"];
include_once "./config/base_de_datos.php";

$sentencia = $conexion->prepare("CALL delete_customer(?);");
$resultado = $sentencia->execute([$customerid]);
if ($resultado === true) {
    header("Location: listarCursor.php");
} else {
    echo "Algo salió mal";
}
