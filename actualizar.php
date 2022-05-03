
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
				<?php
				
					include ('conexion/conexion.php');

					$id_datos = $_POST['txtClave'];
					$apellido = $_POST['txtApellido'];
				
		

					$actualizar = ("UPDATE datos set apellido='$apellido' where id_datos='$id_datos'")
						or die ("No se pudieron Actualizar los datos");

					$resultado = mysqli_query($conexion, $actualizar)
						or die ("Error al modificar los datos");

					mysqli_close($conexion);
					echo "Datos Actualizados Correctamente";


				?>

</body>
</html>