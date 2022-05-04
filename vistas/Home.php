<!DOCTYPE html>
<html lang="es">

<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="stylesheet" href="../estilos/home.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-success">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav mx-auto">
				<a class="nav-item nav-link active" href="vistas/Home.php">Home <span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="vistas/cactus.php">Cactus</a>
				<a class="nav-item nav-link" href="vistas/suculenta.php">Suculentas</a>
				<a class="nav-item nav-link" href="vistas/interior.php">Plantas interior</a>
				<a class="nav-item nav-link" href="vistas/contacto.php">Contacto</a>

			</div>
		</div>
	</nav>
	<br>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block mx-auto" src="imagenes/sucu.jpg" alt="Suculentas">
			</div>
			<div class="carousel-item">
				<img class="d-block mx-auto" src="imagenes/cactus2.jpg" alt="Cactus">
			</div>
			<div class="carousel-item">
				<img class="d-block mx-auto" src="imagenes/interior.jpg" alt="Plantas interior">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</button>
	</div>

	<div class="container">
		<table class="table table-dark tabla">
			<thead>
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Descripción</th>
					<th scope="col">Imagen</th>
				<tr>
			</thead>
			<tbody>
				<?php
				include("../conexion/conexion.php");

				$query = "SELECT * from tabla_imagen";
				$resultado = $conexion->query($query);

				while ($row = $resultado->fetch_assoc()) {
				?>

					<tr>
						<td class="td">
							<?php echo $row['nombre']; ?>
						</td>
						<td class="td">
							<?php echo $row['descripcion']; ?>
						</td>
						<td class="ex3"><img height="60px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" /></td>
					</tr>

				<?php
				}
				?>

			</tbody>
		</table>
	</div>

	<?php include('Includes/pie_pagina.php'); ?>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>