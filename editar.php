<?php
/*
================================
Este archivo muestra un formulario llenado automáticamente
(a partir del ID pasado por la URL) para editar
================================
 */

if (!isset($_GET["customerid"])) {
    exit();
}

$customerid = $_GET["customerid"];
include_once "./config/base_de_datos.php";
$sentencia = $conexion->prepare("SELECT customerid, companyname, contactname, contacttitle, address, city, region, postalcode, country, phone, fax  FROM customers WHERE customerid=?;");	
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
				<i class="fas fa-sync-alt fa-fw"></i> &nbsp; ACTUALIZAR CLIENTE
			</h3>
		</div>

	<!-- Content here-->
	<div class="container-fluid">
		<form class="form-neon" action="guardarDatosEditados.php" method="POST">
		<fieldset>
			<legend><i class="fas fa-user"></i> &nbsp; Información básica</legend>
				<div class="container-fluid">
					<input type="hidden" name="customerid" value="<?php echo $customers->customerid; ?>">
					<div class="row">
						<div class="col-12 col-md-4">
							<div class="form-group">
								<label for="companyname" class="bmd-label-floating">Companía</label>
								<input disabled value="<?php echo $customers->companyname; ?>"  name="companyname" type="text" id="companyname"  class="form-control" maxlength="40">
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="form-group">
								<label for="contactname" class="bmd-label-floating">Contacto</label>
								<input disabled value="<?php echo $customers->contactname; ?>"  name="contactname" type="text" id="contactname"  class="form-control" maxlength="30">
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="form-group">
								<label for="contacttitle" class="bmd-label-floating">Título</label>
								<input value="<?php echo $customers->contacttitle; ?>"  name="contacttitle" type="text" id="contacttitle" class="form-control" maxlength="30">
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="form-group">
								<label for="address" class="bmd-label-floating">Dirección</label>
								<input disabled value="<?php echo $customers->address; ?>"  name="address" type="text" id="address" class="form-control" maxlength="60">
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="form-group">
								<label for="city" class="bmd-label-floating">Ciudad</label>
								<input disabled value="<?php echo $customers->city; ?>"  name="city" type="text" id="city" class="form-control" maxlength="15">
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="form-group">
								<label for="region" class="bmd-label-floating">Región</label>
								<input disabled value="<?php echo $customers->region; ?>"  name="region" type="text" id="region" class="form-control" maxlength="15">
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="form-group">
								<label for="postalcode" class="bmd-label-floating">Código Postal</label>
								<input disabled value="<?php echo $customers->postalcode; ?>"  name="postalcode" type="number" id="postalcode" class="form-control">
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="form-group">
								<label for="country" class="bmd-label-floating">País</label>
								<input disabled value="<?php echo $customers->country; ?>"  name="country" type="text" id="country" class="form-control" maxlength="15">
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="form-group">
								<label for="phone" class="bmd-label-floating">Teléfono</label>
								<input disabled value="<?php echo $customers->phone; ?>"  name="phone" type="text" id="phone" class="form-control">
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="form-group">
								<label for="fax" class="bmd-label-floating">Fax</label>
								<input disabled value="<?php echo $customers->fax; ?>"  name="fax" type="text" id="fax" class="form-control" maxlength="24">
							</div>
						</div>
					</div>
				</div>
		</fieldset>
		<br><br><br>
		<p class="text-center" style="margin-top: 40px;">
				<button type="submit" class="btn btn-raised btn-success btn-sm">Guardar</button>
				<a href="./listarCursor.php" class="btn btn-raised btn-secondary btn-sm">Volver</a>
		</p>
		</form>
	</div>
<?php include_once "./inc/pie.php"?>