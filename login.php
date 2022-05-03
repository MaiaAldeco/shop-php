<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body style="background-image: url('vistas/Imagenes/fondo/fondo.jpg')">


	<h3 align="center" style="color:red;"><?php echo @$_GET["success"]; ?></h3><!-- MUESTRA MENSAJE LOGIN SUCCESS-->
	<h3 align="center" style="color:red;"><?php echo @$_GET["invalid"]; ?></h3><!-- MUESTRA MENSAJE LOGIN INVALIDO-->
	<h3 align="center" style="color:red;"><?php echo @$_GET["login"]; ?></h3><!-- MUESTRA MENSAJE SESION CERRADA-->
	<h3 align="center" style="color:red;"><?php echo @$_GET["notlogedin"]; ?></h3><!-- EVITA ENTRAR COMO ADMIN POR URL AL PRINCIPAL.PHP Y MUESTRA MENSAJE "nO ES ADMINISTRADOR" REDIRECCIONA A LOGIN.PHP-->


	<!-- FORMULARIO LOGIN-->
	<section class="vh-100">
		<div class="container py-2 h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-12 col-md-8 col-lg-6 col-xl-5">
					<div class="card bg-dark text-white" style="border-radius: 1rem;">
						<div class="card-body p-5 text-center">
							<form action="acceso.php" method="POST">
								<div class="mb-md-5 mt-md-4 pb-5">
									<h2 class="fw-bold mb-2 text-uppercase">Login</h2>
									<p class="text-white-50 mb-5">Please enter your login and password!</p>
									<div class="form-outline form-white mb-4">

										<label class="form-label">Username</label>
										<input class="form-control form-control-lg"  type="text" id="user" name="user">
									</div>
									<div class="form-outline form-white mb-4">
										<label class="form-label">Password</label>
										<input class="form-control form-control-lg"  type="password" id="pass" name="pass">
									</div>
									<button class="btn btn-outline-light btn-lg px-5" type="submit" id="btn" name="btn">Login</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>