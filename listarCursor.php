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
$consulta = "select customerid, companyname, contactname, contacttitle,address, city, region, postalcode, country, phone, fax  from customers ORDER BY customerid LIMIT 90";
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
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CLIENTES
				</h3>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="./formulario.php"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CLIENTE</a>
					</li>
					<li>
						<a class="active" href="./listarCursor.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CLIENTES</a>
					</li>
				</ul>	
			</div>
<!-- Aquí pon las col-x necesarias, comienza tu contenido, etcétera -->
			<!-- Content here-->
		<div class="container-fluid">
			<!-- Search form -->
			<div class="table-responsive">
				<table class="table table-dark table-sm">
					<thead>
						<tr class="text-center roboto-medium">
							<th>ID</th>
							<th>Companía</th>
							<th>Contacto</th>
							<th>Titulo</th>
							<th>Direccion</th>
							<th>Ciudad</th>
							<th>Región</th>
							<th>CP</th>
							<th>País</th>
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
				<?php while ($customer = $sentencia->fetchObject()){ ?>
					<tr class="text-center" >
						<td><?php echo $customer->customerid ?></td>
						<td><?php echo $customer->companyname ?></td>
						<td><?php echo $customer->contactname ?></td>
						<td><?php echo $customer->contacttitle ?></td>
						<td><?php echo $customer->address ?></td>
						<td><?php echo $customer->city ?></td>
						<td><?php echo $customer->region ?></td>
						<td><?php echo $customer->postalcode ?></td>
						<td><?php echo $customer->country ?></td>
						<td><a class="btn btn btn-raised btn-info btn-sm" href="<?php echo "editar.php?customerid=" . $customer->customerid?>">Editar 📝</a></td>
						<td><a class="btn btn btn-raised btn-danger btn-sm" href="<?php echo "eliminar.php?customerid=" . $customer->customerid?>">Eliminar 🗑️</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php include_once "./inc/pie.php" ?>