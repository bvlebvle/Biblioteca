<?php
	$paginaCorriente=basename($_SERVER['REQUEST_URI'], '?'. $_SERVER['QUERY_STRING']);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="UTF-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap CSS -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
			crossorigin="anonymous"
		/>
		

		<!-- estilo personalizado CSS -->
		<link href="../css/style.css" rel="stylesheet" type="text/css" />
		
		<!-- estilo personalizado CSS -->
		<link href="../css/slider.css" rel="stylesheet" type="text/css" />
		
		<!-- catalago libros css -->
		<link href="../css/catalogo.libros.css" rel="stylesheet" type="text/css" />
		
		<title>Biblioteca VP</title>
	</head>

	<body>
		<div class="container" name="header">
			<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
				<a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
					<img src="../img/logo.svg" width="40" height="32" />
					<span class="fs-4">Biblioteca Violeta Parra</span>
				</a>

				<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0"></ul>

				<div class="col-md-3 text-end">
				<ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0">
					<li class="nav-item"><a href="/index.php" class="nav-link px-2 link-dark <?php if ($paginaCorriente == "index.php") {echo "active";}?>">Home</a></li>
					<li class="nav-item"><a href="/login/login.php" class="nav-link px-2 link-secondary <?php if ($paginaCorriente == "login.php") {echo "active";}?>">Ingresar</a></li>
					<li class="nav-item"><a href="/registro/registrarse.php" class="nav-link px-2 link-secondary <?php if ($paginaCorriente == "registrarse.php") {echo "active";}?>">Registrarse</a></li>
				</ul>
			</div>
			</header>
		</div>