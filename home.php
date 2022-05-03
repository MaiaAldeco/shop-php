
<!DOCTYPE html>
<html>
<head>
		
		
		<link rel="stylesheet" type="text/css" href="estilos/principal.css">

		
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
						echo '<th id="nombre">Telefono</th>';
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
	
					<br>
					<a href="login.php"  id="btnCerrar">Acceso al Sistema</a>



	<table align="center" border="2">

		<thead>
			<tr>
				<th colspan="5"><a href="form_imagen.php" id="btnCerrar">Nuevo Registro</a></th>
			</tr>
			<tr>
				<th>id</th>
				<th>Nombre</th>
				<th>Imagen</th>
				<th colspan="2">Operaciones</th>
			</tr>
		</thead>

		<tbody>
			<?php
					include ("conexion/conexion.php");
				
					$query= "SELECT * from tabla_imagen";
					$resultado= $conexion->query($query);

					while($row = $resultado->fetch_assoc()){
			?>
					<tr>
						<td><?php echo $row['id_imagen']; ?></td>
						<td><?php echo $row['nombre']; ?></td>
						<td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
						<th><a href="modificar_imagen.php?id_imagen=<?php echo $row['id_imagen']; ?>">Modificar</a></th>
						<th><a href="eliminar_imagen.php?id_imagen=<?php echo $row['id_imagen']; ?>">Eliminar</a></th>
					</tr>
			<?php
					}
			?>

		</tbody>
	</table> 


		
</body>
</html>

