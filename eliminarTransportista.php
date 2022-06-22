<?php
/*
================================
Este archivo elimina un dato por ID sin
pedir confirmación. El ID viene de la URL
================================
*/
if (!isset($_GET["shipperid"])) {
    exit();
}

$customerid = $_GET["shipperid"];
include_once "./config/base_de_datos.php";

$sentencia = $conexion->prepare("CALL delete_shipper(?);");
$resultado = $sentencia->execute([$customerid]);
if ($resultado === true) {
    header("Location: listarTransportista.php");
} else {
    echo "Algo salió mal";
}
