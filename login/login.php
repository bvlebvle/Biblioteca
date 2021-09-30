<?php
	include_once("../header.php"); 
?>
<?php
	session_start();
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$_SESSION['logged'] = true;
		$_SESSION['rol'] = $_POST['rol'];
		if ($_POST['rol'] == 1){
			header("Location: /administrador/perfil.administrador.php");
		} else if ($_POST['rol'] == 2){
			header("Location: /usuario/perfil.usuario.php");
		}
	}
	
	if ($_SESSION['logged'] == true) {
		if ($_SESSION['rol'] == 1){
			header("Location: /administrador/perfil.administrador.php");
		} else if ($_SESSION['rol'] == 2){
			header("Location: /usuario/perfil.usuario.php");
		}
	}

?>
	<body>

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


<?php
	include_once("../footer.php");
?>
