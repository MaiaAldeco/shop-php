<!DOCTYPE html>
<html>

<head>
	<title>Contacto</title>
	<link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
	.texto{
		margin-left: 1em;
	}
	p, .fab{
		margin: 1.5%;
	}
</style>


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
				<a class="nav-item nav-link" href="interior.php">Plantas interior</a>
				<a class="nav-item nav-link active" href="contacto.php">Contacto<span class="sr-only">(current)</span></a>

			</div>
		</div>
	</nav>
	<br>
	

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Mundo Cactus!</h1>
			<p class="lead">Somos una tienda dedicada a la venta de cactus, suculentas y plantas de interior. Vivimos para brindarle la mejor atención y variedad de plantas a nuestros clientes ¿Tenes dudas? Contactanos!</p>
		</div>
	</div>

	<p class="texto"><strong>DIRECCIÓN:</strong> Calle falsa 123</p>
	<p class="texto"><strong>TELÉFONO:</strong> +54 3462 4444</p>
	<p class="texto"><strong>EMAIL:</strong> maiaaldeco@gmail.com</p>
	<p class="texto"><strong>HORARIO DE ATENCIÓN AL CLIENTE:</strong> Lunes a viernes de 8.00h. a 19.00h.</p>
	<p class="texto"><strong>WHATSAPP:</strong> +54 3462 381050</p>

	<a href="http://facebook.com" target="_blank" <i class="fab fa-facebook fa-3x"></i></a>
	<a href="http://twitter.com" target="_blank" <i class="fab fa-twitter fa-3x"></i></a>
	<a href="http://instagram.com" target="_blank" <i class="fab fa-instagram fa-3x"></i></a>
	<a href="https://api.whatsapp.com/send?phone=543462381050&text=Hola!%20Te%20quer%C3%ADa%20consultar%20sobre%20" target="_blank" <i class="fab fa-whatsapp fa-3x"></i></a>

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