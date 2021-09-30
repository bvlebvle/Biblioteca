<?php
	include_once("../header_perfiles.php");
?>
	<body>
		<div class="row g-5">
			<div class="col-md-6 offset-md-3">
				<h3 class="mb-3">Ingreso de libro</h3>
				<form class="needs-validation" novalidate="">
					<div class="row g-3">
						<div class="col-12">
							<label for="text" class="form-label">Titulo <span class="text-muted"></span></label>
							<input type="text" class="form-control" placeholder="" />
							<div class="invalid-feedback">Please enter a valid email address for shipping updates.</div>
						</div>
						<div class="col-12">
							<label for="text" class="form-label">Autor <span class="text-muted"></span></label>
							<input type="text" class="form-control" placeholder="" />
							<div class="invalid-feedback">Please enter a valid username for shipping updates.</div>
						</div>
						<div class="col-12">
							<label for="text" class="form-label">Código ISBN <span class="text-muted"></span></label>
							<input type="text" class="form-control" placeholder="" />
							<div class="invalid-feedback">Please enter a valid username for shipping updates.</div>
						</div>
						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Reseña del libro</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						<div class="mb-3">
							<label for="formFile" class="form-label">Portada de libro</label>
							<input class="form-control" type="file" id="formFile" />
						</div>
						<a href="#">
							<button type="button" class="btn btn-outline-primary me-2" id="register">Ingresar libro</button>
						</a>
					</div>
				</form>
			</div>
		</div>

<?php
	include_once("../footer.php"); 
?>