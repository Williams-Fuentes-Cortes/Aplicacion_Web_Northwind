<?php
/*

================================
Este archivo muestra un formulario que
se envía a insertar.php, el cual guardará
los datos
================================
*/
?>
<?php include_once "./inc/encabezado.php" ?>
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
			<i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR TRANSPORTISTA
		</h3>
	</div>

	<div class="container-fluid">
		<ul class="full-box list-unstyled page-nav-tabs">
			<li>
				<a class="active" href="./formularioTransportista.php"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR TRANSPORTISTA</a>
			</li>
			<li>
				<a href="./listarTransportista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE TRANSPORTISTAS</a>
			</li>
		</ul>	
	</div>
	<!-- Content here-->
	<div class="container-fluid">
		<form class="form-neon FormularioAjax" method="POST" action="insertarTransportista.php">
		<fieldset>
			<legend><i class="fas fa-user"></i> &nbsp; Información básica</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="shipperid" class="bmd-label-floating">ID</label>
							<input required name="shipperid" type="text" id="shipperid" class="form-control">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="companyname" class="bmd-label-floating">Companía</label>
							<input required name="companyname" type="text" id="companyname"  class="form-control" maxlength="40">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="phone" class="bmd-label-floating">Teléfono</label>
							<input  name="phone" type="text" id="phone" class="form-control" maxlength="30">
						</div>
					</div>
				</div>
			</div>
		</fieldset>
		<br><br>
			<p class="text-center" style="margin-top: 40px;">
				<button type="submit" class="btn btn-raised btn-success btn-sm">Guardar</button>
				<a href="./listarTransportista.php" class="btn btn-raised btn-secondary btn-sm">Ver todas</a>
			</p>
		</form>
	</div>
<?php include_once "./inc/pie.php" ?>