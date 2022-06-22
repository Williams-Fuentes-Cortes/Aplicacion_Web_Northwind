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

if (!isset($_POST["customerid"]) || !isset($_POST["companyname"]) || !isset($_POST["contacttitle"]))
{
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "./config/base_de_datos.php";
$customerid = $_POST["customerid"];
$contacttitle = $_POST["contacttitle"];

$sentencia = $conexion->prepare("CALL update_contacttitle( ?, ?);");
$resultado = $sentencia->execute([ $customerid, $contacttitle]); # Pasar en el mismo orden de los ?
if ($resultado === true) {
    header("Location: listarCursor.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}
