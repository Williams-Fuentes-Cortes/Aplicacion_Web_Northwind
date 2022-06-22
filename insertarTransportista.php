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
if (!isset($_POST["shipperid"]) || !isset($_POST["companyname"]) || !isset($_POST["phone"])) {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "./config/base_de_datos.php";
$shipperid = $_POST["shipperid"];
$companyname = $_POST["companyname"];
$phone = $_POST["phone"];


if (is_numeric($phone)) {
    print "<p>Ha escrito un número: $phone.</p>\n";
} else {
    $alerta=[
        "Alerta"=>"simple",
        "Titulo"=>"Ocurrio un error inesperado:(",
        "Texto"=>"Viola la restricción check: valida_telefono_transportista",
        "Tipo"=>"error"
    ];
    echo json_encode($alerta);
    exit();
}
/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $conexion->prepare("CALL insert_shipper (?, ?, ?);");
$resultado = $sentencia->execute([$shipperid, $companyname, $phone]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
    # Redireccionar a la lista
	header("Location: listarTransportista.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}
