<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Subir Imagen</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="estilos/prof.css">

</head>
<style>
	footer {
		position: fixed;
		bottom: 0;
	}
</style>

<body style="background-image: url('vistas/Imagenes/fondo/fondo.jpg')">

	<nav class="navbar navbar-expand-lg navbar-dark bg-success ">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item active">
					<a class="nav-link" href="form_imagen.php">Subir imagen<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="mostrar_imagenes.php">Ver imagenes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="vistas/Home.php">Tienda</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
						Sesión
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="logout.php">Cerrar sesión</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>







	<!-- <div>
		<form id="form" action="proceso_guardarImagen.php" method="POST" enctype="multipart/form-data" style="height: 230px;">
			<br>
			<p align="center">INSERTAR IMAGEN</p>

			<input type="text" name="nombre" placeholder="Nombre..." value="">
			<br><input type="text" name="descripcion" placeholder="descripcion..." value="">
			<br><input type="file" required name="imagen">
			<br>
			<br><input id="btn" type="submit" value="Aceptar">
			

		</form>
		
	</div> -->


	<?php include('vistas/includes/pie_pagina.php'); ?>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>