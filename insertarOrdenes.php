<?php
/*
================================
Este archivo inserta los datos 
enviados a través de formulario.php
================================
*/
?>
<?php
#Salir si alguno de los datos no está presente
if (!isset($_POST["orderid"]) || !isset($_POST["customerid"]) || !isset($_POST[" employeeid"]) || !isset($_POST["orderdate"]) || !isset($_POST["requireddate"]) || !isset($_POST["shippeddate"]) || !isset($_POST["shipvia"])
|| !isset($_POST["freight"]) || !isset($_POST["shipname"]) || !isset($_POST["shipaddress"]) || !isset($_POST["shipcity"]) || !isset($_POST["shipregion"]) || !isset($_POST["shippostalcode"]) || !isset($_POST["shipcountry"])) {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...
include_once "./config/base_de_datos.php";
$orderid = $_POST["orderid"];
$customerid = $_POST["customerid"];
$employeeid = $_POST["employeeid"];
$orderdate = $_POST["orderdate"];
$requireddate = $_POST["requireddate"];
$shippeddate= $_POST["shippeddate"];
$shipvia = $_POST["shipvia"];
$freight = $_POST["freight"];
$shipname = $_POST["shipname"];
$shipaddress = $_POST["shipaddress"];
$shipcity = $_POST["shipcity"];
$shipregion = $_POST["shipregion"];
$shippostalcode = $_POST["shippostalcode"];
$shipcountry = $_POST["shipcountry"];

/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $conexion->prepare("INSERT INTO orders VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$orderid , $customerid, $employeeid , $orderdate, $requireddate, $shippeddate, $shipvia, $freight, $shipname, $shipaddress, $shipcity, $shipregion, $shippostalcode, $shipcountry ]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
    # Redireccionar a la lista
	header("Location: listarOrdenes.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}
