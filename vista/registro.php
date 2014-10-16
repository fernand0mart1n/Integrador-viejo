<?php
	session_start();
	header("Content-Type: text/html; charset=UTF-8");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link href="../librerias/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

	<div class="container">

		<h1>Registro</h1>
		<hr>

		<div class="col-sm-4"></div>

		<div class="col-sm-4">
			<fieldset>

				<form role="form" action="../controlador/registrarse.php" method="post">

					<div class="form-group">
					    <label for="usuario">Usuario</label>
					    <input type="text" name="user" class="form-control" id="usuario"
					        placeholder="Introduce tu Usuario" required>
					</div>

				  	<div class="form-group">
				    	<label for="contraseña1">Contraseña</label>
				    	<input type="password" name="pass" class="form-control" id="contraseña1" 
				        	placeholder="Introduce tu Contraseña" required>
				  	</div>

				  	<div class="form-group">
					    <label for="nombre">Nombre</label>
					    <input type="text" name="nombre" class="form-control" id="nombre"
					        placeholder="Introduce tu Nombre" required>
					</div>

					<div class="form-group">
					    <label for="apellido">Apellido</label>
					    <input type="text" name="apellido" class="form-control" id="apellido"
					        placeholder="Introduce tu Apellido" required>
					</div>
				  	
					<input id="action" type="hidden" name="action" value="registrarse"/>

				  	<button type="submit" class="btn btn-default">Enviar</button>

				</form>

			</fieldset>
		</div>

		<div class="col-sm-4"></div>

	</div>

</body>
</html>