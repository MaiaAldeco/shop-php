
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="">
</head>
<body>
				<?php
				
					include ('conexion/conexion.php');

					$consulta = mysqli_query ($conexion, "SELECT * from datos")
						or die("Error al realizar la consulta");
					


					echo '<table align="center" border="1">';
					echo '<tr>';
					echo '<th id="clave">id_datos</th>';
					echo '<th id="apellido">Apellido</th>';
					echo '<th id="nombre">Nombre</th>';
					echo '<th id="telefono">Telefono</th>';
					echo '<th id="sexo">Sexo</th>';
					echo '</tr>';

					while ($extraido = mysqli_fetch_array($consulta))
					{

						echo '<tr>';
						echo '<td>'.$extraido['id_datos'].'</td>';
						echo '<td>'.$extraido['apellido'].'</td>';
						echo '<td>'.$extraido['nombre'].'</td>';
						echo '<td>'.$extraido['telefono'].'</td>';
						echo '<td>'.$extraido['sexo'].'</td>';
						echo '</tr>';

				

					}

						mysqli_close($conexion);
						echo '</table>';

				?>

</body>
</html>