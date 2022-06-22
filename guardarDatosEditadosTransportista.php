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

if (!isset($_POST["shipperid"]))
{
    echo "Salir";
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "./config/base_de_datos.php";
$shipperid = $_POST["shipperid"];
$phone = $_POST["phone"];

$sentencia = $conexion->prepare("CALL update_phone( ?, ?);");
$resultado = $sentencia->execute([ $shipperid, $phone]);
if ($resultado === true) {
    header("Location: listarTransportista.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}
