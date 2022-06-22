<?php
/*
================================
Este archivo inserta los datos 
enviados a través de formularioDetalleOrdenes.php
================================
*/
?>
<?php
#Salir si alguno de los datos no está presente
if (!isset($_POST["orderid"]) || !isset($_POST["productid"]) || !isset($_POST["unitprice"]) || !isset($_POST["quantity"]) || !isset($_POST["discount"])) {
    exit();
}
#Si todo va bien, se ejecuta esta parte del código...
include_once "./config/base_de_datos.php";
$orderid = $_POST["orderid"];
$productid = $_POST["productid"];
$unitprice = $_POST["unitprice"];
$quantity = $_POST["quantity"];
$discount = $_POST["discount"];

/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $conexion->prepare("INSERT INTO order_details VALUES(?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$orderid , $productid, $unitprice, $quantity, $discount]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
    # Redireccionar a la lista
	header("Location: listarDetalleOrdenes.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}
