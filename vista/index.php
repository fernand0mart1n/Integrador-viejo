<?php
	session_start();
	ini_set("display_errors", true);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Registro personas</title>
	<link href="../librerias/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

	<div class="container">

	<h1>Bienvenido</h1>
	<hr>
	
	<div class="col-sm-4"></div>

	<div class="col-sm-4">
		<div class="panel panel-default">
	  	<div class="panel-heading"><h3 align="center">Iniciar Sesion</h3></div>
	  		
	  		<div class="panel-body">
	    	
			<fieldset>

		  		<div class="form-group">

		  			<form action="../controlador/conectarse.php" method="post">
		  				
		  				
		  				<div class="col-sm-12" align="center">
		  					<input id="campoUsuario" type="text" name="user" placeholder="Usuario"/>
		  				</div>

		  				<div class="col-sm-12" align="center">
		  					<input id="campoPass" type="password" name="pass" placeholder="Contraseña"/>
		  				</div>

		  				<input id="action" type="hidden" name="action" value="login"/>



		  				<div class="col-sm-12" align="center">
		  					<hr>
		  					<button type="submit" class="btn btn-success btn-sm">Ingresar</button>
		  				</div>

		  			</form>

		  		</div>

		  		<div class="col-sm-12" align="center">
		  		<a href="registro.php"><h6>No tienes cuenta? Registrate..</h6></a>
		  		</div>

		  	</fieldset>
		  	
		  	

	  		</div>

		</div>
	</div>

	<div class="col-sm-4"></div>

	</div>

	<div class="col-sm-12">
		<?php
			if(isset($_GET['error'])):
		?>

			<div class='alert alert-danger' role='alert'>Nombre de usuario y/o contraseña incorrectos.</div>

		<?php
			endif;
		?>
	</div>

</body>
</html>