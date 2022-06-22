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
					<i class="fab fa-dashcube fa-fw"></i> &nbsp; DASHBOARD
				</h3>
			</div>
			
			<!-- Content -->
			<div class="full-box tile-container">
				<a href="./listarCursor.php" class="tile">
					<div class="tile-tittle">Clientes</div>
					<div class="tile-icon">
						<i class="fas fa-users fa-fw"></i>
						<p>Registrados</p>
					</div>
				</a>
				
				<a href="./listarTransportista.php" class="tile">
					<div class="tile-tittle">Transportistas</div>
					<div class="tile-icon">
						<i class="fas fa-pallet fa-fw"></i>
						<p>Registrados</p>
					</div>
				</a>

				<a href="./listarOrdenes.php" class="tile">
					<div class="tile-tittle">Ordenes</div>
					<div class="tile-icon">
						<i class="fas fa-list-ul fa-fw"></i>
						<p>Registradas</p>
					</div>
				</a>
			</div>
<?php include_once "./inc/pie.php" ?>