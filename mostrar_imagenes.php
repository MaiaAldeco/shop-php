<!DOCTYPE html>
<html lang="es">

<head>
	<title>Mostrar Imagenes</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
</head>
<style>

	body{
		background-image: url("vistas/Imagenes/fondo/fondo.jpg");
	}
	.container{
		margin-top: 10%;
	}
</style>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-success">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown" >
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link" href="form_imagen.php">Subir imagen</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="mostrar_imagenes.php">Ver imagenes<span class="sr-only">(current)</span></a>
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


	<br>
	<div class="container">
		<div class="row">
			<div class="col">
				<table class="table table-dark">

					<thead>
						<tr>
							<th scope="col">id</th>
							<th scope="col">Descripción</th>
							<th scope="col">Nombre</th>
							<th scope="col">Imagen</th>
							<th scope="col">Editar</th>
							<th scope="col">Eliminar</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include("conexion/conexion.php");

						$query = "SELECT * from tabla_imagen";
						$resultado = $conexion->query($query);

						while ($row = $resultado->fetch_assoc()) {
						?>
							<tr>
								<th scope="row"><?php echo $row['id_imagen']; ?></th>
								<td><?php echo $row['descripcion']; ?></td>
								<td><?php echo $row['nombre']; ?></td>
								<td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" /></td>
								<td><a href="modificar_imagen.php?id_imagen=<?php echo $row['id_imagen']; ?>">Modificar</a></td>
								<td><a href="eliminar_imagen.php?id_imagen=<?php echo $row['id_imagen']; ?>">Eliminar</a></td>

							</tr>
						<?php
						}
						?>

					</tbody>
				</table>
			</div>
		</div>
	</div>












	<!-- <?php include('vistas/Includes/pie_pagina.php'); ?> -->
</body>

</html>