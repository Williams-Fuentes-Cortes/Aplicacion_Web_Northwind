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
			<i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CLIENTE
		</h3>
	</div>

	<div class="container-fluid">
		<ul class="full-box list-unstyled page-nav-tabs">
			<li>
				<a class="active" href="./formulario.php"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CLIENTE</a>
			</li>
			<li>
				<a href="./listarCursor.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CLIENTES</a>
			</li>
		</ul>	
	</div>
	<!-- Content here-->
	<div class="container-fluid">
		<form class="form-neon" action="insertar.php" method="POST">
		<fieldset>
			<legend><i class="fas fa-user"></i> &nbsp; Información básica</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="customerid" class="bmd-label-floating">ID</label>
							<input required name="customerid" type="text" id="customerid" class="form-control">
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
							<label for="contactname" class="bmd-label-floating">Contacto</label>
							<input  name="contactname" type="text" id="contactname" class="form-control" maxlength="30">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="contacttitle" class="bmd-label-floating">Título</label>
							<input name="contacttitle" type="text" id="contacttitle"  class="form-control" maxlength="30">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="address" class="bmd-label-floating">Dirección</label>
							<input  name="address" type="text" id="address" class="form-control" maxlength="60">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="city" class="bmd-label-floating">Ciudad</label>
							<input  name="city" type="text" id="city" class="form-control" maxlength="15">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="region" class="bmd-label-floating">Región</label>
							<input  name="region" type="text" id="region" class="form-control" maxlength="15">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="postalcode" class="bmd-label-floating">Código Postal</label>
							<input name="postalcode" type="number" id="postalcode" class="form-control">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="country" class="bmd-label-floating">País</label>
							<input  name="country" type="text" id="country" class="form-control" maxlength="15">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="phone" class="bmd-label-floating">Teléfono</label>
							<input  name="phone" type="number" id="phone" class="form-control"> 
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="fax" class="bmd-label-floating">Fax</label>
							<input  name="fax" type="text" id="fax" class="form-control" maxlength="24">
						</div>
					</div>
				</div>
			</div>
		</fieldset>
		<br><br><br>
			<p class="text-center" style="margin-top: 40px;">
				<button type="submit" class="btn btn-raised btn-success btn-sm">Guardar</button>
				<a href="./listarCursor.php" class="btn btn-raised btn-secondary btn-sm">Ver todas</a>
			</p>
		</form>
	</div>
<?php include_once "./inc/pie.php" ?>