<?php
/*
================================
Este archivo lista todos los
datos de la tabla, pero en un
ciclo usando un cursor,
(se supone que es más eficiente)
================================
*/
?>
<?php

include_once "./config/base_de_datos.php";
$consulta = "select shipperid, companyname, phone from shippers ORDER BY shipperid";
# Preparar sentencia e indicar que vamos a usar un cursor
$sentencia = $conexion->prepare($consulta, [
    PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL,
]);
# Ejecutar sin parámetros
$sentencia->execute();
# Abajo iteramos
?>

<!--Recordemos que podemos intercambiar HTML y PHP como queramos-->
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
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE TRANSPORTISTA
				</h3>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="./formularioTransportista.php"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR TRANSPORTISTA</a>
					</li>
					<li>
						<a class="active" href="./listarTransportista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE TRANSPORTISTAS</a>
					</li>
				</ul>	
			</div>
<!-- Aquí pon las col-x necesarias, comienza tu contenido, etcétera -->
			<!-- Content here-->
		<div class="container-fluid">
			<div class="table-responsive">
				<table class="table table-dark table-sm">
					<thead>
						<tr class="text-center roboto-medium">
							<th>ID</th>
							<th>Companía</th>
							<th>Phone</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
			<tbody>
				<!--
					Y aquí usamos el ciclo while y fetchObject, el cuerpo
					del ciclo queda intacto pero ahora estamos usando
					cursores :)
				-->
				<?php while ($shipper = $sentencia->fetchObject()){ ?>
					<tr class="text-center" >
						<td><?php echo $shipper->shipperid ?></td>
						<td><?php echo $shipper->companyname ?></td>
						<td><?php echo $shipper->phone ?></td>
						<td><a class="btn btn-raised btn-info btn-sm" href="<?php echo "editarTransportista.php?shipperid=" . $shipper->shipperid?>">Editar 📝</a></td>
						<td><a class="btn btn-raised btn-danger btn-sm" href="<?php echo "eliminarTransportista.php?shipperid=" . $shipper->shipperid?>">Eliminar 🗑️</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php include_once "./inc/pie.php" ?>