<?php
	session_start();
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$_SESSION['logged'] = true;
		$_SESSION['rol'] = $_POST['rol'];

		if ($_POST['rol'] == 1){
			header("Location: /administrador/perfil.administrador.php");
		} else if ($_POST['rol'] == 2){
			header("Location: /usuario/perfil.usuario.htm");
		}
	}
	
	if ($_SESSION['logged'] == true) {
		if ($_SESSION['rol'] == 1){
			header("Location: /administrador/perfil.administrador.php");
		} else if ($_SESSION['rol'] == 2){
			$_SESSION['logged'] == true;
			header("Location: /usuario/perfil.usuario.htm");
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap CSS -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
			crossorigin="anonymous"
		/>

		<!-- estilo personalizado CSS -->
		<link href="/css/style.css" rel="stylesheet" />

		<title>Biblioteca</title>
	</head>

	<body>
		<div class="container" name="header">
			<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
				<a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
					<img src="/img/logo.svg" width="40" height="32" />
					<span class="fs-4">Biblioteca Violeta Parra</span>
				</a>

				<ul class="nav mb-3 col-md-auto mb-2 justify-content-center mb-md-0">
					<li><a href="#" class="nav-link px-2 link-secondary">Sobre nosotros</a></li>
					<li><a href="#" class="nav-link px-2 link-dark">Noticias</a></li>
				</ul>

				<div class="col-md-3 text-end">
					<a href="/login/login.htm">
						<button type="button" id="login" class="btn btn-outline-primary me-2">Iniciar sesión</button>
					</a>
					<a href="/registro/registrarse.htm">
						<button type="button" id="register" class="btn btn-outline-primary me-2">Registrarme</button>
					</a>
				</div>
			</header>
		</div>

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
			crossorigin="anonymous"
		></script>

		<div class="container">
			<form method="POST">
				<h4 class="mb-3 text-center">Inicio de sesión</h4>

				<div class="mb-3">
					<label for="text" class="form-label">Nombre usuario <span class="text-muted"></span></label>
					<input type="text" name = "user"class="form-control" id="email" placeholder="usuario_123" />
					<div class="invalid-feedback">Please enter a valid email address for shipping updates.</div>
				</div>

				<div class="mb-3">
					<label for="password" class="form-label">Contraseña <span class="text-muted"></span></label>
					<input type="password" name="password"class="form-control" id="password" placeholder="" />
					<div class="invalid-feedback"></div>
				</div>

				<div class="mb-3">
					<label for="role" class="form-label">Rol <span class="text-muted"></span></label>
					<select class="form-select mb-3" name="rol" aria-label="role select">
					<option value="1">Administrador</option>
					<option value="2">Usuario</option>
				</select>
				<div class="invalid-feedback"></div>
			</div>


				<input class="w-100 btn btn-lg btn-primary mb-3" id="login" type="submit" value="Ingresar" />
			</form>
		</div>	



	</body>
</html>
