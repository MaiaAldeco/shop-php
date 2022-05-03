<?php
	include ("conexion/conexion.php");
	$id_imagen=$_REQUEST['id_imagen'];
	$query= "DELETE from tabla_imagen where id_imagen='$id_imagen'";
	$resultado= $conexion->query($query);

	if($resultado){

		header("location:mostrar_imagenes.php");
	}
	else{

		echo "Error al eliminar el registro";
	}

	?>