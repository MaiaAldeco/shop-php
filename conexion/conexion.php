					
<?php
					$server = "localhost";
					$usuario = "root";
					$contraseña = "";
					$bd = "db_web";

					$conexion = mysqli_connect($server, $usuario, $contraseña, $bd) 
						or die ("Error al conectar con la DB");

?>