<?php
	include ("conexion/conexion.php");

	$id_imagen=$_REQUEST['id_imagen'];

	$nombre= $_POST['nombre'];
	$descripcion= $_POST['descripcion'];
	$imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
	$query= "UPDATE tabla_imagen set nombre='$nombre', descripcion='$descripcion', imagen='$imagen' where id_imagen='$id_imagen' ";
	$resultado= $conexion->query($query);
	if($resultado){

		header("location:mostrar_imagenes.php");
	}
	else{

		echo "Error al modificar la Imagen";
	}

	?>