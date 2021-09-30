<?php
include("./header.php");
?>
		<div class="container col-xxl-8 px-4 py-5">
			<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
				<div class="col-10 col-sm-8 col-lg-6">
					<img src="img/biblioteca.jpeg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy" />
				</div>
				<div class="col-lg-6">
					<h1 class="display-5 fw-bold lh-1 mb-3">¡Bienvenidas y bienvenidos!</h1>
					<p class="lead">En nuestra página podrás ver el catálago disponible para ti, solo debes registrarse e iniciar sesión.</p>
					<div class="d-grid gap-2 d-md-flex justify-content-md-start">
						<a href="/login/login.php">
							<button type="button" id="login" class="btn btn-primary btn-lg px-4 me-md-2">Iniciar sesión</button>
						</a>
						<a href="/registro/registrarse.php">
							<button type="button" id="register" class="btn btn-outline-secondary btn-lg px-4">Registrarse</button>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!--Carrusel-->
		<div class="container col-xxl-8 px-4 py-5" id="carrusel">
			<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
				<div class="col-10 col-sm-8 col-lg-6">
					<div class="container">
						<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item">
									<img src="img/libros/libro1.jpeg" class="d-block" alt="..." />
								</div>
								<div class="carousel-item">
									<img src="img/libros/libro2.jpeg" class="d-block" alt="..." />
								</div>
								<div class="carousel-item">
									<img src="img/libros/libro3.jpeg" class="d-block" alt="..." />
								</div>
								<div class="carousel-item active">
									<img src="/img/libros/libro4.jpeg" class="d-block" alt="..." />
								</div>
								<div class="carousel-item">
									<img src="/img/libros/libro5.jpeg" class="d-block" alt="..." />
								</div>
								<div class="carousel-item">
									<img src="img/libros/libro6.jpeg" class="d-block" alt="..." />
								</div>
								<div class="carousel-item">
									<img src="img/libros/libro7.jpeg" class="d-block" alt="..." />
								</div>
								<div class="carousel-item">
									<img src="img/libros/libro8.jpeg" class="d-block" alt="..." />
								</div>
								<div class="carousel-item">
									<img src="img/libros/libro9.jpeg" class="d-block" alt="..." />
								</div>
								<div class="carousel-item">
									<img src="img/libros/libro10.jpeg" class="d-block" alt="..." />
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<h1 class="display-5 fw-bold lh-1 mb-3">Deja volar la imaginación</h1>
					<p class="lead">Un pequeño adelanto de los libros que podrás encontrar en nuestra plataforma.</p>
					<p class="lead">Recuerda que puedes solicitar el libro físico o descargar el libro dígital.</p>
					<div class="d-grid gap-2 d-md-flex justify-content-md-start"></div>
				</div>
			</div>
		</div>
		<!--slider-->
		<?php
			include("./footer.php"); 
		?>
		
