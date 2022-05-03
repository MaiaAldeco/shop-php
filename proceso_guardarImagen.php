<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	include ("conexion/conexion.php");

	
	$nombre= $_POST['nombre'];
	$descripcion= $_POST['descripcion'];
	$imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
	$query= "INSERT into tabla_imagen(nombre,descripcion,imagen) values ('$nombre', '$descripcion', '$imagen') ";
	
	

	$resultado= $conexion->query($query);

	if($resultado){

		header("location:mostrar_imagenes.php");
	}
	else{

		echo "Error al subir la imagen";
	}

	?>;

</body>
</html>