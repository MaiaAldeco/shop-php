<!DOCTYPE html>
<html>

<head>
	<title>Cactus</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-success">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav mx-auto">
				<a class="nav-item nav-link" href="../Home.php">Home</a>
				<a class="nav-item nav-link active" href="cactus.php">Cactus<span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="suculenta.php">Suculentas</a>
				<a class="nav-item nav-link" href="interior.php">Plantas interior</a>
				<a class="nav-item nav-link" href="contacto.php">Contacto</a>

			</div>
		</div>
	</nav>
	<br>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Mejores Cactus</h1>
			<p class="lead">¿Eres capaz de imaginar tu cactus ideal? ¡Estamos seguros de que lo encontrarás en La Tienda del Cactus! Decorar tu casa o jardín nunca ha sido tan fácil. Aumentar tu colección, tampoco.

				Con o sin espinas, de interior o exterior… ¡Echa un vistazo a nuestra gran variedad!</p>
		</div>
	</div>

	<div class="row px-5 pt-5">
		<div class="col-md-4 mt-4 mt-sm-0 card-container">
			<div class="card text-center product p-4 pt-5 border-0 h-100 rounded-0">
				<img class="img-fluid d-block mx-auto" src="https://d3ugyf2ht6aenh.cloudfront.net/stores/032/245/products/c4e647f2-18c8-41ea-a8bf-039c61c0b978_nube-6e5603ee36f06b8c6515892891389885-1024-1024.jpg" alt="Cactus surtidos">
				<div class="card-body p-4 py-0 h-xs-440p">
					<h5 class="card-title font-weight-semi-bold mb-3 w-xl-220p mx-auto">Cactus Surtidos</h5>
					<p class="price">$5230</p>
				</div>
				<p class="btn w-100 px-4 mx-auto">
					<input type="submit" class="btn btn-dark btn-lg w-100" name="add-button" value="COMPRAR">
				</p>
			</div>
		</div>

		<div class="col-md-4 mt-4 mt-sm-0 card-container">
			<div class="card text-center product p-4 pt-5 border-0 h-100 rounded-0">
				<img class="img-fluid d-block mx-auto" src="https://d3ugyf2ht6aenh.cloudfront.net/stores/032/245/products/24d24ad5-7efa-4abf-9ee0-f74997b27173_nube-e49ee3096e1d15216215903326939282-1024-1024.jpg" alt="Aeonium tabuliforme">
				<div class="card-body p-4 py-0 h-xs-440p">
					<h5 class="card-title font-weight-semi-bold mb-3 w-xl-220p mx-auto">Aeonium Tabuliforme</h5>
					<p class="price">$455</p>
				</div>
				<p class="btn w-100 px-4 text-center mx-auto">
					<input type="submit" class="btn btn-dark btn-lg w-100" name="add-button" value="COMPRAR">
				</p>
			</div>
		</div>

		<div class="col-md-4 mt-4 mt-sm-0 card-container">
			<div class="card text-center product p-4 pt-5 border-0 h-100 rounded-0">
				<img class="img-fluid d-block mx-auto" src="https://d3ugyf2ht6aenh.cloudfront.net/stores/032/245/products/img_20201203_1311511-2c29534bf93ee78c3016070124131062-1024-1024.jpg" alt="Cactus cerebro">
				<div class="card-body p-4 py-0 h-xs-440p">
					<h5 class="card-title font-weight-semi-bold mb-3 w-xl-220p mx-auto">Cactus Cerebro</h5>
					<p class="price">$1012,50</p>
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