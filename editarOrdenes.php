<?php
/*
================================
Este archivo muestra un formulario llenado automáticamente
(a partir del ID pasado por la URL) para editar
================================
 */

if (!isset($_GET["orderid"])) {
    exit();
}

$customerid = $_GET["orderid"];
include_once "./config/base_de_datos.php";
$sentencia = $conexion->prepare("SELECT orderid, customerid, employeeid, orderdate, requireddate, shippeddate, shipvia, freight, shipname, shipaddress, shipcity, shipregion, shippostalcode, shipcountry  FROM orders WHERE orderid=?;");	
$sentencia->execute([$customerid]);
$customers = $sentencia->fetchObject();
if (!$customers) {
    #No existe
    echo "¡No existe algún cliente con ese ID!";
    exit();
}

#Si el cliente existe, se ejecuta esta parte del código
?>
<?php include_once "./inc/encabezado.php"?>
<!-- Page content -->
<section class="full-box page-content">
	<nav class="full-box navbar-info">
		<a href="#" class="float-left show-nav-lateral">
			<i class="fas fa-exchange-alt"></i>
		</a>
	</nav>

		<!-- Page header -->
		<div class="full-box page-header">
			<h3 class="text-left">
				<i class="fas fa-sync-alt fa-fw"></i> &nbsp; ACTUALIZAR ORDEN
			</h3>
		</div>


	<!-- Content here-->
	<div class="container-fluid">
		<form class="form-neon" action="guardarDatosEditadosOrdenes.php" method="POST">
		<fieldset>
			<legend><i class="fas fa-user"></i> &nbsp; Información básica</legend>
				<div class="container-fluid">
					<input type="hidden" name="customerid" value="<?php echo $customers->orderid; ?>">
                    <input type="hidden" name="customerid" value="<?php echo $customers->customerid; ?>">
                    <input type="hidden" name="customerid" value="<?php echo $customers->employeeid; ?>">
					<div class="row">
						<div class="col-12 col-md-4">
							<div class="form-group">
								<label for="orderdate" class="bmd-label-floating">Fecha orden</label>
								<input disabled value="<?php echo $customers->orderdate; ?>"  name="orderdate" type="date" id="orderdate" class="form-control">
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="form-group">
								<label for="shippeddate" class="bmd-label-floating">Fecha envío</label>
								<input disabled value="<?php echo $customers->shippeddate; ?>"  name="shippeddate" type="date" id="shippeddate" class="form-control">
							</div>
						</div>
                        <input type="hidden" name="customerid" value="<?php echo $customers->shipvia; ?>">
                        <div class="col-12 col-md-4">
							<div class="form-group">
								<label for="freight" class="bmd-label-floating">freight</label>
								<input disabled value="<?php echo $customers->freight; ?>"  name="freight" type="text" id="freight" class="form-control">
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="form-group">
								<label for="shipname" class="bmd-label-floating">Nombre envío</label>
								<input disabled value="<?php echo $customers->shipname; ?>"  name="shipname" type="text" id="shipname" class="form-control" maxlength="40"> 
							</div>
						</div>
                        <div class="col-12 col-md-4">
							<div class="form-group">
								<label for="shipaddress" class="bmd-label-floating">Dirección envío</label>
								<input disabled value="<?php echo $customers->shipaddress; ?>"  name="shipaddress" type="text" id="shipaddress" class="form-control" maxlength="60">
							</div>
						</div>
                        <div class="col-12 col-md-4">
							<div class="form-group">
								<label for="shipcity" class="bmd-label-floating">Ciudad</label>
								<input disabled value="<?php echo $customers->shipcity; ?>"  name="shipcity" type="text" id="shipcity" class="form-control" maxlength="15">
							</div>
						</div>
                        <div class="col-12 col-md-4">
							<div class="form-group">
								<label for="shipregion" class="bmd-label-floating">Región</label>
								<input disabled value="<?php echo $customers->shipregion; ?>"  name="shipregion" type="text" id="shipregion" class="form-control" maxlength="15">
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="form-group">
								<label for="shippostalcode" class="bmd-label-floating">CP</label>
								<input disabled value="<?php echo $customers->shippostalcode; ?>"  name="shippostalcode" type="text" id="shippostalcode" class="form-control" maxlength="10">
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="form-group">
								<label for="shipcountry" class="bmd-label-floating">País</label>
								<input value="<?php echo $customers->shipcountry; ?>"  name="shipcountry" type="text" id="shipcountry" class="form-control" maxlength="15">
							</div>
						</div>
					</div>
				</div>
		</fieldset>
		<br><br><br>
		<p class="text-center" style="margin-top: 40px;">
				<button type="submit" class="btn btn-raised btn-success btn-sm">Guardar</button>
				<a href="./listarOrdenes.php" class="btn btn-raised btn-secondary btn-sm">Volver</a>
		</p>
		</form>
	</div>
<?php include_once "./inc/pie.php"?>