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
if (!isset($_POST["customerid"]) || !isset($_POST["companyname"]) || !isset($_POST["contactname"]) || !isset($_POST["contacttitle"]) || !isset($_POST["address"]) || !isset($_POST["city"]) || !isset($_POST["region"])
|| !isset($_POST["postalcode"]) || !isset($_POST["country"]) || !isset($_POST["phone"]) || !isset($_POST["fax"])) {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "./config/base_de_datos.php";
$customerid = $_POST["customerid"];
$companyname = $_POST["companyname"];
$contactname = $_POST["contactname"];
$contacttitle = $_POST["contacttitle"];
$address = $_POST["address"];
$city = $_POST["city"];
$region = $_POST["region"];
$postalcode = $_POST["postalcode"];
$country = $_POST["country"];
$phone = $_POST["phone"];
$fax = $_POST["fax"];

/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $conexion->prepare("CALL insert_customer (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$customerid, $companyname, $contactname, $contacttitle,$address,$city, $region, $postalcode, $country, $phone, $fax ]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
    # Redireccionar a la lista
	header("Location: listarCursor.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}
