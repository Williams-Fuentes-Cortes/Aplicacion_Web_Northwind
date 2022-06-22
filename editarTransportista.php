<?php
/*
================================
Este archivo muestra un formulario llenado automáticamente
(a partir del ID pasado por la URL) para editar
================================
 */

if (!isset($_GET["shipperid"])) {
    exit();
}

$shipperid= $_GET["shipperid"];
include_once "./config/base_de_datos.php";
$sentencia = $conexion->prepare("SELECT shipperid, companyname, phone  FROM shippers WHERE shipperid=?;");	
$sentencia->execute([$shipperid]);
$shippers = $sentencia->fetchObject();
if (!$shippers) {
    #No existe
    echo "¡No existe algún transportista con ese ID!";
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
				<i class="fas fa-sync-alt fa-fw"></i> &nbsp; ACTUALIZAR TRANSPORTISTA
			</h3>
		</div>

	<!-- Content here-->
	<div class="container-fluid">
		<form class="form-neon" action="guardarDatosEditadosTransportista.php" method="POST">
		<fieldset>
			<legend><i class="fas fa-user"></i> &nbsp; Información básica</legend>
				<div class="container-fluid">
					<input type="hidden" name="shipperid" value="<?php echo $shippers->shipperid; ?>">
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="form-group">
								<label for="companyname" class="bmd-label-floating">Companía</label>
								<input disabled value="<?php echo $shippers->companyname; ?>"  name="companyname" type="text" id="companyname"  class="form-control" maxlength="40">
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="form-group">
								<label for="phone" class="bmd-label-floating">Teléfono</label>
								<input value="<?php echo $shippers->phone; ?>"  name="phone" type="text" id="phone" class="form-control">
							</div>
						</div>
					</div>
				</div>
		</fieldset>
		<br>
		<p class="text-center" style="margin-top: 40px;">
				<button type="submit" class="btn btn-raised btn-success btn-sm">Guardar</button>
				<a href="./listarTransportista.php" class="btn btn-raised btn-secondary btn-sm">Volver</a>
		</p>
		</form>
	</div>
<?php include_once "./inc/pie.php"?>