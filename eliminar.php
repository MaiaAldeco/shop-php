
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
				<?php
					include ('conexion/conexion.php');
					
					$id_datos = $_POST['txtClave'];
		

					$eliminar = ("DELETE from datos where id_datos='$id_datos'")
						or die ("No se pudieron eliminar los datos");

					$resultado = mysqli_query($conexion, $eliminar)
						or die ("Error al eliminar los datos");

					mysqli_close($conexion);
					echo "Datos Eliminados Correctamente";


				?>
				<br><a href="principal.php"  id="btnCerrar">Volver al Sistema</a>
</body>
</html>