<!DOCTYPE html>
<html>

<head>
	<title>Suculentas</title>
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
				<a class="nav-item nav-link active" href="suculenta.php">Suculentas<span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="interior.php">Plantas interior</a>
				<a class="nav-item nav-link" href="contacto.php">Contacto</a>

			</div>
		</div>
	</nav>
	<br>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Suculentas</h1>
			<p class="lead">¡Nos encantan las suculentas o crasas! En este apartado podrás adquirir aquellas que más te gusten. Sus colores y formas te sorprenderán. Descubre la planta de tus sueños y recíbela en casa.</p>
		</div>
	</div>
	<div class="row px-5 pt-5">
		<div class="col-md-4 mt-4 mt-sm-0 card-container">
			<div class="card text-center product p-4 pt-5 border-0 h-100 rounded-0">
				<img class="img-fluid d-block mx-auto" src="https://d3ugyf2ht6aenh.cloudfront.net/stores/032/245/products/665264d3-c563-4298-9149-7d34c092a605_nube-399070a2b535e0ab6f15903325468600-640-0.jpg" alt="Echeverria perle von nuremberg">
				<div class="card-body p-4 py-0 h-xs-440p">
					<h5 class="card-title font-weight-semi-bold mb-3 w-xl-220p mx-auto">Echeverria Perle Von Nuremberg</h5>
					<p class="price">$2795,50</p>
				</div>
				<p class="btn w-100 px-4 mx-auto">
					<input type="submit" class="btn btn-dark btn-lg w-100" name="add-button" value="COMPRAR">
				</p>
			</div>
		</div>

		<div class="col-md-4 mt-4 mt-sm-0 card-container">
			<div class="card text-center product p-4 pt-5 border-0 h-100 rounded-0">
				<img class="img-fluid d-block mx-auto" src="https://d3ugyf2ht6aenh.cloudfront.net/stores/032/245/products/b15a38d3-2064-4545-a4b7-0f5983d58c94_nube-0770f9ad895a55c36215903281189221-1024-1024.jpg" alt="Echeverria Elegans">
				<div class="card-body p-4 py-0 h-xs-440p">
					<h5 class="card-title font-weight-semi-bold mb-3 w-xl-220p mx-auto">Echeverria Elegans</h5>
					<p class="price">$250</p>
				</div>
				<p class="btn w-100 px-4 text-center mx-auto">
					<input type="submit" class="btn btn-dark btn-lg w-100" name="add-button" value="COMPRAR">
				</p>
			</div>
		</div>

		<div class="col-md-4 mt-4 mt-sm-0 card-container">
			<div class="card text-center product p-4 pt-5 border-0 h-100 rounded-0">
				<img class="img-fluid d-block mx-auto" src="https://d3ugyf2ht6aenh.cloudfront.net/stores/032/245/products/e27dc323-2ed6-4f43-b996-ea0c2960751c_nube-6deb937d547429502215902435501993-1024-1024.jpg" alt="Kalanchoe thyrsiflora">
				<div class="card-body p-4 py-0 h-xs-440p">
					<h5 class="card-title font-weight-semi-bold mb-3 w-xl-220p mx-auto">Kalanchoe Thyrsiflora</h5>
					<p class="price">$660</p>
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