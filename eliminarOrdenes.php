<?php
/*
================================
Este archivo elimina un dato por ID sin
pedir confirmación. El ID viene de la URL
================================
*/
if (!isset($_GET["orderid"])) {
    exit();
}

$orderid = $_GET["orderid"];
include_once "./config/base_de_datos.php";

$sentencia = $conexion->prepare("DELETE FROM orders WHERE orderid = ?;");
$resultado = $sentencia->execute([$orderid]);
if ($resultado === true) {
    header("Location: listarOrdenes.php");
} else {
    echo "Algo salió mal";
}
