
<!DOCTYPE html>
<html>
<head>
		<title>ALTAS-BAJAS-MODIFICACIONES CON HTML+PHP+MYSQL</title>
		
		<link rel="stylesheet" type="text/css" href="estilos/principal.css">

		
</head>
<body  background="web/imagenes/bground4.jpg">
</body>
<body>


		<?php
		session_start();
		if(!$_SESSION["login"]){

			header("location: login.php?notlogedin=No es Administrador");
		}
		else{
		echo "<h3>BIENVENIDO AL SISTEMA DE ABM :".$_SESSION["login"]."<h3>";
		}
		?>
		<!-- BOTON QUE CIERRA LA SESION-->
		<a href="logout.php"  id="btnCerrar">Cerrar Sesion</a><br>

		<!-- BOTON PARA IR AL HOME BACKEND-->
		<br><a href="home.php"  id="btnCerrar">Ir al Home</a>

		<!-- TITULO DEL ADMINISTRADOR-->
		<p align="center">ALTAS-BAJAS-MODIFICACIONES CON HTML+PHP+MYSQL</p>

		<!-- INSERTAR IMAGEN EN LA DB
		<center><br><br><br>
		<form action="proceso_guardarImagen.php" method="POST" enctype="multipart/form-data">
			<input type"text" name="nombre" placeholder="Nombre...." value="">
			<input type="file" name="imagen">
			<input type="submit" value="Aceptar">
		</form>
		</center>
		-->

		<!-- INSERTAR DATOS EN LA DB-->
		<form id="insertar" action="registrar.php" method="POST" enctype="multipart/form-data">
		<p align="center">INSERTAR DATOS</p>
		Apellido: <input required type="text" name="txtApellido"> <br />
		Nombre: <input required  type="text" name="txtNombre"> <br />
		Telefono: <input required  type="text" name="txtTelefono"> <br />
		Sexo:
		<select required  name="cmbSexo">
			<option value="Masculino">Masculino</option>
			<option value="Femenino">Femenino</option>
			<option value="Transexual">Transexual</option>
		</select> <br />

		<input type="submit" value="enviar" name="btnRegistrar">

		</form>

		<!-- ELIMINAR DATOS EN LA DB-->	
		<form id="insertar" action="eliminar.php" method="POST">
		<p align="center">ELIMINAR DATOS</p>

		Clave: <input required type="text" name="txtClave"> <br />

		<input required type="submit" value="Eliminar Registro" name="btnEliminar">

		</form>

		<!-- ACTUALIZAR DATOS EN LA DB-->
		<form id="insertar" action="actualizar.php" method="POST">
		<p align="center">ACTUALIZAR DATOS</p>

		Clave: <input required  type="text" name="txtClave"> <br />
		Apellido: <input required type="text" name="txtApellido"> <br />
		
		<input required type="submit" value="Actualizar Registro" name="btnActualizar">

		</form>

		
			<!-- consulta DATOS EN LA DB-->
		<form id="insertar" action="registros.php" >
		<p align="center">CONSULTA DE DATOS</p>

			<input type="submit" value="Ver Registros" name="btnRegistros">

		</form>
		
</body>
</html>










































