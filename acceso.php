

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	//ESTABLECE LA CONEXION CON LA DB
	include ('conexion/conexion.php');
	//INICIA LA SESION 	Y EXTRAE DEL BOTON SUBMIT DEL LOGIN.PHP Y COMPARA
	session_start();
	if (isset($_POST["btn"])){

		//Extrae las variables del Login en Principal.php
		$username = $_POST['user'];
		$password = md5($_POST['pass']);

		

		//CONSULTA A LA BASE DE DATOS
		$query=( "SELECT * from login where username='$username' and password= '$password'") or die (" Error al conectar con database" );
		//GUARDA EN UNA VARIABLE LA CONSULTA Y LA CONEXION
		$exe_query=mysqli_query($conexion, $query);
		//GUARDA EN UNA VARIABLE EL REGISTRO
		$row = mysqli_num_rows($exe_query);
	
		//COMPARA SI HAY REGISTRO
		if ($row==1){
				
				$_SESSION["login"]=$username;
				header("location: form_imagen.php");
				}else{
				header("location: login.php?invalid= Login Incorrecto");
				}
	}
		
	?>

</body><p>https://www.youtube.com/watch?v=5nwod5MDhz4&t=1446s</p>
</html>