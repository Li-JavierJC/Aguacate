<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administrador</title>

	<link rel="stylesheet" href="css/cabecera.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Administrador</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="admin.php">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#cargarA">Cargar Imagenes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="video/index.php">Cargar Videos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#cargarA">Cargar Audios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">Salir</a>
				</li>
			</ul>
		</div>
	</nav>
	<section id="cargarA">
		<br><br>
		<div class="container" style="background-color: #07537E; color:white">
			<div class="col-sm-12">
				<form name="MiForm" id="MiForm" method="post" action="cargar.php" enctype="multipart/form-data">
					<br>
					<h4 class="text-center" style="background-color: #030F5A">Seleccione imagen a cargar</h4>
					<div class="form-group">
						<label class="col-sm-6 control-label">Selecionar</label>
						<div class="col-sm-6">
							<input type="file" class="form-control" id="image" name="image" multiple>
						</div>
						<br><br><br>
						<button name="submit" class="btn btn-primary">Subir Imagen</button>
						<br><br>
					</div>
				</form>
			</div>
			<div>
				<form action="vista.php"method="post">
					<label>Ver imagen </label>
					<input type="submit" value="Buscar"/>
				</form>
				<br><br>
			</div>
		</div>

	</section>

	<footer class="footer mt-auto py-3">
		<div>
			<div style="background-color: black; color: white">
				<center>
					<span class="text-muted">Universidad de la Cañada</span>
				</center>
			</div>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>