<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Plantas de Interior</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-success">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav mx-auto">
				<a class="nav-item nav-link" href="../Home.php">Home</a>
				<a class="nav-item nav-link" href="cactus.php">Cactus</a>
				<a class="nav-item nav-link" href="suculenta.php">Suculentas</a>
				<a class="nav-item nav-link active" href="interior.php">Plantas interior<span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="contacto.php">Contacto</a>

			</div>
		</div>
	</nav>
	<br>

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Plantas de interior</h1>
			<p class="lead">¿Estás pensando decorar tu hogar con plantas de interior? Te dejamos una selección de plantas: cactus y suculentas, perfectas para tu salón, dormitorio u otra zona de tu casa que no esté al exterior.

				¡Las mejores plantas con las mejores condiciones!</p>
		</div>
	</div>
	<div class="row px-5 pt-5">
		<div class="col-md-4 mt-4 mt-sm-0 card-container">
			<div class="card text-center product p-4 pt-5 border-0 h-100 rounded-0">
				<img class="img-fluid d-block mx-auto" src="https://d3ugyf2ht6aenh.cloudfront.net/stores/032/245/products/8c66b8c5-e855-41df-9822-6ed5769e7b2d_nube-79c3ba039d5463cacf15902391156981-1024-1024.jpg" alt="Gynura">
				<div class="card-body p-4 py-0 h-xs-440p">
					<h5 class="card-title font-weight-semi-bold mb-3 w-xl-220p mx-auto">Gynura</h5>
					<p class="price">$1070</p>
				</div>
				<p class="btn w-100 px-4 mx-auto">
					<input type="submit" class="btn btn-dark btn-lg w-100" name="add-button" value="COMPRAR">
				</p>
			</div>
		</div>

		<div class="col-md-4 mt-4 mt-sm-0 card-container">
			<div class="card text-center product p-4 pt-5 border-0 h-100 rounded-0">
				<img class="img-fluid d-block mx-auto" src="https://d3ugyf2ht6aenh.cloudfront.net/stores/032/245/products/2fd4f1f1-9a72-4f30-850d-bfa397f25f4c_nube-0af3a02d180ea6999c15902411931309-1024-1024.jpg" alt="Croton mandarina">
				<div class="card-body p-4 py-0 h-xs-440p">
					<h5 class="card-title font-weight-semi-bold mb-3 w-xl-220p mx-auto">Croton Mandarina</h5>
					<p class="price">$1150</p>
				</div>
				<p class="btn w-100 px-4 text-center mx-auto">
					<input type="submit" class="btn btn-dark btn-lg w-100" name="add-button" value="COMPRAR">
				</p>
			</div>
		</div>

		<div class="col-md-4 mt-4 mt-sm-0 card-container">
			<div class="card text-center product p-4 pt-5 border-0 h-100 rounded-0">
				<img class="img-fluid d-block mx-auto" src="https://d3ugyf2ht6aenh.cloudfront.net/stores/032/245/products/ddd506d2-797e-4df1-961d-bfc6a62443fd_nube-c5878636a8588a9ed015902427618538-1024-1024.jpg" alt="Begonia Negra">
				<div class="card-body p-4 py-0 h-xs-440p">
					<h5 class="card-title font-weight-semi-bold mb-3 w-xl-220p mx-auto">Begonia Negra</h5>
					<p class="price">$1480,50</p>
				</div>
				<p class="btn w-100 px-4 mx-auto">
					<input type="submit" class="btn btn-dark btn-lg w-100" name="add-button" value="COMPRAR">
				</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col text-center">
				<a href="../Home.php" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Volver</a>
			</div>
		</div>
	</div>

	<br>
	<?php include('../Includes/pie_pagina.php'); ?>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>