<?php
	session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>master</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="index">
	<header >
		<div class="container">
			<div id="logo-ucr" class="row">
				<div  class="col-sx-12 col-sm-8 col-md-6 col-lg-4">
					<img id="logo-ucr" src="../img/logo-ucr.png" class="img-responsive" alt="">
				</div>
			</div>
		</div>
		<div id="perfil-row" class="container-fluid">
			<div  class="row">
			</div>
		</div>
		<div  id="perfil-nav" class="row ">
			<div class="container">
				<img src="../img/logo-planillas.png" class="img img-responsive center-block"alt="">
			</div>
		</div>
	</header>
	<main>
		<div class="container fondo-log">
			<div class="row center-block">
				<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6  col-lg-offset-3 contenedor-log ">
					<form action="usuarios/verificar_usuarios.php" method="post">
						<h3>Ingresar</h3>
						<div class="separador"></div>

						<h5 class="form-control-static texto-efectos1"><?php
						if (isset($_SESSION['mensaje'])) {
						echo $_SESSION['mensaje'];} ?></h5>

					 	<div class="form-group">
					    	<label for="exampleInputEmail1">Usuario</label>
					    	<input type="text" class="form-control"  name="txtUsuario" placeholder="Usuario">
					  	</div>
					  	<div class="form-group">
					    	<label for="exampleInputPassword1">Contraseña</label>
					    	<input type="password" class="form-control"  name="txtContrasena" placeholder="Contraseña">
					  	</div>
					  	<a href="#" data-toggle="modal" data-target="#modalRegistro">Registrar</a>
					  	<div class="separador separador-absolute"></div>
					  	<button type="submit" class="btn btn-default pull-right">Ingresar</button>
					</form>
				</div>
			</div>
		</div>
			<div class="clearfix"></div>
	</main>
	<footer class="footer " >
		<div class="container-fluid">
			<div class="row row1">
				<div class="container">
					<div class="col-sx-12 col-sm-6">
						<h6>Tel: 6666 66 66</h6>
					</div>
					<div class="col-sx-12 col-sm-6">
						<h6>Email: <a href="#">corre@my.com</a></h6>
					</div>
				</div>
			</div>
			<div class="row row2">
				<img src="../img/logo-ucr-footer.png" class="img-responsive pull-right"alt="">
			</div>
		</div>
	</footer>
<!--*********************** Modales *******************-->
	 <?php require("include/modalUsuarios.php"); ?>

</body>
<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<?php
	if ($_SESSION['registrando'] == 1) {
		echo "<script>
		$('#modalRegistro').modal('show');
		</script>";
	}
?>
</html>
