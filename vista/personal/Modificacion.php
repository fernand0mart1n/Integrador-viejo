<?php
	if(!isset($_SESSION)){
		session_start();
	}

	header("Content-Type: text/html; charset=UTF-8");

	include "../../modelo/usuario.class.php";

	$a = new usuario();

	$a->obtener($_SESSION['id']);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Modificar perfil</title>
	<meta charset="utf-8">
	<link href="../../librerias/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

	<div class="container">

		<h1>Modificación de perfil</h1>
		<hr>

		<div class="col-sm-4"></div>

		<div class="col-sm-4">
			<fieldset>

				<form role="form" action="../../controlador/modificar.php" method="get">

					<div class="form-group">
					    <label for="usuario">Usuario</label>
					    <input type="text" name="user" class="form-control" id="usuario" value=<?php echo $usuario['nombre'];?> required>
					</div>

				  	<div class="form-group">
				    	<label for="contraseña1">Nueva contraseña</label>
				    	<input type="password" name="pass" class="form-control" id="contraseña1" type="password" required>
				  	</div>

				  	 <div class="form-group">
				    	<label for="contraseña2">Confirmar nueva contraseña</label>
				    	<input type="password" name="pass" class="form-control" id="contraseña1" type="password" required>
				  	</div>

				  	 <div class="form-group">
				    	<label for="contraseña">Contraseña antigua</label>
				    	<input type="password" name="pass" class="form-control" id="contraseña1" type="password" required>
				  	</div>

				  	<div class="form-group">
					    <label for="nombre">Nombre</label>
					    <input type="text" name="nombre" class="form-control" id="nombre" required>
					</div>

					<div class="form-group">
					    <label for="apellido">Apellido</label>
					    <input type="text" name="apellido" class="form-control" id="apellido" required>
					</div>
				  	
					<input id="action" type="hidden" name="action" value="modificar"/>

				  	<button type="cancel" onclick="javascript:window.location='../index.php';" class="btn btn-danger">Cancelar</button>
				  	<button type="submit" class="btn btn-success">Guardar</button>
				</form>
			</fieldset>
		</div>

		<div class="col-sm-4"></div>

	</div>

</body>
</html>