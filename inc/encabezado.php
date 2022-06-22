<!doctype html>
<html lang="es">
<!--
================================
Este archivo define un encabezado que es
incluido y reutilizado por otros archivos
================================

-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Northwind Traders">
    <title>NORTHWIND TRADERS</title>


	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- Bootstrap V4.3 -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">

	<!-- Bootstrap Material Design V4.0 -->
	<link rel="stylesheet" href="./css/bootstrap-material-design.min.css">

	<!-- Font Awesome V5.9.0 -->
	<link rel="stylesheet" href="./css/all.css">

	<!-- Sweet Alerts V8.13.0 CSS file -->
	<link rel="stylesheet" href="./css/sweetalert2.min.css">

	<!-- Sweet Alert V8.13.0 JS file-->
	<script src="./js/sweetalert2.min.js" ></script>

	<!-- jQuery Custom Content Scroller V3.1.5 -->
	<link rel="stylesheet" href="./css/jquery.mCustomScrollbar.css">
	
	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">


</head>

<body>
    <!-- Definición del menú -->
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
		<section class="full-box nav-lateral">
			<div class="full-box nav-lateral-bg show-nav-lateral"></div>
			<div class="full-box nav-lateral-content">
				<figure class="full-box nav-lateral-avatar">
					<i class="far fa-times-circle show-nav-lateral"></i>
					<img src="./assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
					<figcaption class="roboto-medium text-center">
						Williams Fuentes Cortes <br><small class="roboto-condensed-light">Administrador</small>
					</figcaption>
				</figure>
				<div class="full-box nav-lateral-bar"></div>
				<nav class="full-box nav-lateral-menu">
					<ul>
						<li>
							<a href="./home.php"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard</a>
						</li>

						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="./formulario.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Cliente</a>
								</li>
								<li>
									<a href="./listarCursor.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Transportista <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="./formularioTransportista.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Transportista</a>
								</li>
								<li>
									<a href="./listarTransportista.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Transportista</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="nav-btn-submenu"><i class="fas fa-list-ul fa-fw"></i> &nbsp; Ordenes <i class="fas fa-chevron-down"></i></a>
							<ul>
								<li>
									<a href="./formularioOrdenes.php"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Ordenes</a>
								</li>
								<li>
									<a href="./listarOrdenes.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Ordenes</a>
								</li>
								<li>
									<a href="./listarDetalleOrdenes.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista Detalle Ordenes</a>
								</li>
							</ul>
						</li>

					</ul>

				</nav>
			</div>
		</section>