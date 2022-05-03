<!DOCTYPE html>
<html>

<head>
	<title>
		Modificar
	</title>
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="stylesheet" type="text/css" href="estilos/prof.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
</head>
<style>
	footer {
		width: 100%;
		height: 75px;
		background-color: #000;
		color: gold;
		text-align: center;
		line-height: 75px;
		font-size: 1.3em;
		position: fixed;
		bottom: 0;
	}

	form {
		border: solid gray 1px;
		margin: 0 auto;
		align-content: center;
		border-radius: 10px;
		border: 1px solid #666666;
		width: 410px;
		height: 350px;
		margin-top: 10%;
		/* width: 200px;
height: 300px;
border-radius: 5px;
margin: 100px ;
margin-left: 38%; */
		background: lavender;
		/* padding:50px; */
	}
</style>

<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<?php
				include("conexion/conexion.php");

				$id_imagen = $_REQUEST['id_imagen'];

				$query = "SELECT * from tabla_imagen where id_imagen='$id_imagen'";
				$resultado = $conexion->query($query);
				$row = $resultado->fetch_assoc();

				?>
				<center><br><br><br>
					<form action="proceso_modificarImagen.php?id_imagen=<?php echo $row['id_imagen']; ?>" method="POST" enctype="multipart/form-data"><br>
						<strong>Nombre: </strong><input type"text" REQUIRED name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre']; ?>" /><br><br>
						<strong>Descripción: </strong><input type"text" name="descripcion" placeholder="Descripcion..." value="<?php echo $row['descripcion']; ?>" /><br><br>
						<img height="100px" REQUIRED src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" /><br><br>
						<input type="file" name="imagen"><br><br>
						<input type="submit" value="Aceptar">
					</form>
				</center>
			</div>
		</div>
	</div>

	<?php include('vistas/Includes/pie_pagina.php'); ?>
</body>

</html>