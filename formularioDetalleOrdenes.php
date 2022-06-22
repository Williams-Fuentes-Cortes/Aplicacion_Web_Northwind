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
			<i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR DETALLE ORDEN
		</h3>
	</div>

	<div class="container-fluid">
		<ul class="full-box list-unstyled page-nav-tabs">
			<li>
				<a class="active" href="./formularioDetalleOrdenes.php"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR DETALLE ORDEN</a>
			</li>
			<li>
				<a href="./listarDetalleOrdenes.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DETALLE ORDENES</a>
			</li>
		</ul>	
	</div>
	<!-- Content here-->
	<div class="container-fluid">
		<form class="form-neon" action="insertarDetalleOrdenes.php" method="POST">
		<fieldset>
			<legend><i class="fas fa-user"></i> &nbsp; Información básica</legend>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="orderid" class="bmd-label-floating">Orden id</label>
							<input required name="orderid" type="number" id="orderid" class="form-control">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="productid" class="bmd-label-floating">Producto id</label>
							<input required name="productid" type="number" id="productid"  class="form-control">
						</div>
					</div>
                    <div class="col-12 col-md-4">
						<div class="form-group">
							<label for="unitprice" class="bmd-label-floating">Precio unitario</label>
							<input name="unitprice" type="number" step="any" id="unitprice"  class="form-control">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="quantity" class="bmd-label-floating">Cantidad pedido</label>
							<input  name="quantity" type="number" id="quantity" class="form-control" >
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<label for="discount" class="bmd-label-floating">Descuento pedido</label>
							<input name="discount" type="number" step="any" id="discount"  class="form-control">
						</div>
					</div>
				</div>
			</div>
		</fieldset>
		<br><br>
			<p class="text-center" style="margin-top: 40px;">
				<button type="submit" class="btn btn-raised btn-success btn-sm">Guardar</button>
				<a href="./listarDetalleOrdenes.php" class="btn btn-raised btn-secondary btn-sm">Ver todas</a>
			</p>
		</form>
	</div>
<?php include_once "./inc/pie.php" ?>
