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
			<i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR ORDEN
		</h3>
	</div>

	<div class="container-fluid">
		<ul class="full-box list-unstyled page-nav-tabs">
			<li>
				<a class="active" href="./formularioOrdenes.php"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR ORDEN</a>
			</li>
			<li>
				<a href="./listarOrdenes.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE ORDEN</a>
			</li>
		</ul>	
	</div>
	<!-- Content here-->
	<div class="container-fluid">
		<form class="form-neon" action="insertarOrdenes.php" method="POST">
		<fieldset>
			<legend><i class="fas fa-user"></i> &nbsp; Información básica</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="orderid" class="bmd-label-floating">Orden id</label>
							<input required name="orderid" type="text" id="orderid" class="form-control">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="customerid" class="bmd-label-floating">Cliente id</label>
							<input required name="customerid" type="text" id="customerid"  class="form-control" maxlength="40">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="employeeid" class="bmd-label-floating">Empleado id</label>
							<input  name="employeeid" type="text" id="employeeid" class="form-control" maxlength="30">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="orderdate" class="bmd-label-floating">Fecha Orden</label>
							<input name="orderdate" type="date" id="orderdate"  class="form-control" maxlength="30">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="requireddate" class="bmd-label-floating">Fecha requerida</label>
							<input  name="requireddate" type="date" id="requireddate" class="form-control" maxlength="60">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="shippeddate" class="bmd-label-floating">Fecha Envío</label>
							<input  name="shippeddate" type="date" id="shippeddate" class="form-control" maxlength="15">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="shipvia" class="bmd-label-floating">Ship id</label>
							<input  name="shipvia" type="text" id="shipvia" class="form-control" maxlength="15">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="freight," class="bmd-label-floating">Transporte</label>
							<input name="freight," type="text" id="freight," class="form-control">
						</div>
					</div>
                    <div class="col-12 col-md-4">
						<div class="form-group">
							<label for="shipname" class="bmd-label-floating">Nombre envío</label>
							<input  name="shipname" type="text" id="shipname" class="form-control" maxlength="15">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="shipaddress" class="bmd-label-floating">Dirección envío</label>
							<input  name="shipaddress" type="text" id="shipaddress" class="form-control" maxlength="15">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="shipcity" class="bmd-label-floating">Ciudad envío</label>
							<input  name="shipcity" type="text" id="shipcity" class="form-control"> 
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="shipregion" class="bmd-label-floating">Región envío</label>
							<input  name="shipregion" type="text" id="shipregion" class="form-control" maxlength="24">
						</div>
					</div>
                    <div class="col-12 col-md-4">
						<div class="form-group">
							<label for="shippostalcode" class="bmd-label-floating">CP</label>
							<input  name="shippostalcode" type="text" id="shippostalcode" class="form-control" maxlength="24">
						</div>
					</div>
                    <div class="col-12 col-md-4">
						<div class="form-group">
							<label for="shipcountry" class="bmd-label-floating">País envío</label>
							<input  name="shipcountry" type="text" id="shipcountry" class="form-control" maxlength="24">
						</div>
					</div>
				</div>
			</div>
		</fieldset>
		<br><br>
			<p class="text-center" style="margin-top: 40px;">
				<button type="submit" class="btn btn-raised btn-success btn-sm">Guardar</button>
				<a href="./listarOrdenes.php" class="btn btn-raised btn-secondary btn-sm">Ver todas</a>
			</p>
		</form>
	</div>
<?php include_once "./inc/pie.php" ?>
