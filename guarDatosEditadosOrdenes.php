<?php
/*
================================
Este archivo guarda los datos del formulario
en donde se editan
================================
*/
?>

<?php

#Salir si alguno de los datos no está presente

if (!isset($_POST["orderid"]) || !isset($_POST["shipcountry"]))
{
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "./config/base_de_datos.php";
$orderid = $_POST["orderid"];
$shipcountry = $_POST["shipcountry"];

$sentencia = $conexion->prepare("CALL update_contacttitle( ?, ?);");
$resultado = $sentencia->execute([ $orderid, $shipcountry]); # Pasar en el mismo orden de los ?
if ($resultado === true) {
    header("Location: listarCursor.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}
