<?php
	include_once("../header.php"); 
?>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
			crossorigin="anonymous"
		></script>

		<div class="row g-5">
			<div class="col-md-6 offset-md-3">
				<h4 class="mb-3">Registro de usuario</h4>
				<form class="needs-validation" novalidate="" action="registrador.php" method="POST">
					<div class="row g-3">
						<div class="col-sm-6">
							<label for="firstName" class="form-label">Nombres</label>
							<input type="text" name="nombre" class="form-control" id="firstName" placeholder="" value="" required="" />
							<div class="invalid-feedback">Valid first name is required.</div>
						</div>

						<div class="col-sm-6">
							<label for="lastName" class="form-label">Apellidos</label>
							<input type="text" name="apellido" class="form-control" id="lastName" placeholder="" value="" required="" />
							<div class="invalid-feedback">Valid last name is required.</div>
						</div>
					</div>

					<div class="col-12">
						<label for="email" class="form-label">Email <span class="text-muted"></span></label>
						<input type="email" name="email" class="form-control" id="email" placeholder="" />
						<div class="invalid-feedback">Please enter a valid email address for shipping updates.</div>
					</div>
					<div class="col-12">
						<label for="username" class="form-label">Nombre de usuario <span class="text-muted"></span></label>
						<input type="username" name="usuario" class="form-control" id="username" placeholder="" />
						<div class="invalid-feedback">Please enter a valid username for shipping updates.</div>
					</div>
					<div class="col-12">
						<label for="password" class="form-label">Contraseña <span class="text-muted"></span></label>
						<input type="password" name="contrasena" class="form-control" id="password" placeholder="" />
						<div class="invalid-feedback"></div>
					</div>

					<div class="col-12">
						<label for="password" class="form-label">Confirme contraseña <span class="text-muted"></span></label>
						<input type="password" name="contraseña" class="form-control" id="password" placeholder="" />
						<div class="invalid-feedback"></div>
					</div>

					<hr class="my-4 col-md-6 offset-md-3" />
					<button class="btn btn-primary col-md-6 offset-md-3" id="register" type="submit">Registrarse</button>
				</form>
			</div>
		</div>
<?php
	include_once("../footer.php");
?>
