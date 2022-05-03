

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body >

	<?php
	//CIERRA SESION CON LA DB Y VUELVE AL login
	session_start();
	session_destroy();
	header( "location: login.php?login=La Sesion se ha Cerrado");
	?>

</body>
</html>