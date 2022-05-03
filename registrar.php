
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
				<?php
					include ('conexion/conexion.php');

					

					$apellido = $_POST['txtApellido'];
					$nombre = $_POST['txtNombre'];
					$telefono = $_POST['txtTelefono'];
					$sexo = $_POST['cmbSexo'];

					$insertar = "INSERT into datos values ('$','$apellido','$nombre','$telefono','$sexo')";
					
					$resultado = mysqli_query($conexion, $insertar)
						or die ("Error al insertar los datos");

					mysqli_close($conexion);
					echo "Datos Insertados Correctamente";

				?>
				<br><a href="principal.php"  id="btnCerrar">Volver al Sistema</a>
</body>
</html>