<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'link.php'; ?>
</head>
<body style="background-color: #DBF6F9" bgcolor="#27D6EA ">
	<!--°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°Inicio de Contenido°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°-->
	<?php  include 'menu.php'; ?>
	
	<!--....................................Inicio de Carrusel ............................................-->
	<section >
		<div class="container mt-3">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="img/A1.jpg" alt="First slide" style="height: 470px">
						<div class="carousel-caption d-none d-md-block">
							<button type="button" class="btn btn-primary" style="border-radius: 20px; color: white; height: 50px; width: 150px"> <a href="Antecedentes.php">Antecedentes</a> </button>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/A2.jpg" alt="Second slide" style="height: 470px">
						<div class="carousel-caption d-none d-md-block">
							<center>
								<button type="button" class="btn btn-primary" style="border-radius: 20px; height: 50px; width: 300px"> <a href="requerimiento.php">Requerimientos Agroecológicos</a> </button>
							</center>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/A4.jpg" alt="Third slide"  style="height: 470px">
						<div class="carousel-caption d-none d-md-block">
							<button type="button" class="btn btn-primary" style="border-radius: 20px; height: 50px; width: 150px"><a href="propagacion.php">Propagación</a></button>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/A5.jpg" alt="Third slide"  style="height: 470px">
						<div class="carousel-caption d-none d-md-block">
							<button type="button" class="btn btn-primary" style="border-radius: 20px; height: 50px; width: 150px"><a href="plantacion.php">Plantación</a></button>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</section>
	<!--....................................Fin de Carrusel ............................................-->

<?php include 'pie.php';  ?>

	<!--°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°Final de Contenido°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
	<script type="js/jquery-3.2.1.slim.min.js"></script>
	<script type="js/popper.min.js"></script>
	<script type="js/bootstrap.min.js"></script> -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>