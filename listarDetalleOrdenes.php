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
$consulta = "select orderid, productid, unitprice, quantity, discount  from order_details ORDER BY orderid DESC LIMIT 40";
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
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE DETALLES ORDENES
				</h3>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
                    <li>
						<a  href="./formularioDetalleOrdenes.php"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR DETALLE ORDEN</a>
					</li>
					<li>
						<a class="active" href="./listarDetalleOrdenes.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE DETALLES ORDENES</a>
					</li>
                    <li>
				        <a href="./listarSubtotal.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; VISTA SUBTOTAL ORDENES</a>
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
                                <th>Orden id</th>
                                <th>Producto id</th>
                                <th>Precio unitario</th>
                                <th>Cantidad pedido</th>
                                <th>Descuento pedido</th>
                            </tr>
                        </thead>
                <tbody>
				<!--
					Y aquí usamos el ciclo while y fetchObject, el cuerpo
					del ciclo queda intacto pero ahora estamos usando
					cursores :)
				-->
				<?php while ($order = $sentencia->fetchObject()){ ?>
					<tr class="text-center" >
						<td><?php echo $order->orderid ?></td>
						<td><?php echo $order->productid ?></td>
						<td><?php echo $order->unitprice ?></td>
						<td><?php echo $order->quantity ?></td>
                        <td><?php echo $order->discount ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php include_once "./inc/pie.php" ?>