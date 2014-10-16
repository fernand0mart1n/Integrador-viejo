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

				<div class="form-group">

					<label for="inputUser" class="col-lg-2 control-label">  Usuario</label>
      				<div class="col-lg-8">
        				<input type="text" class="form-control" id="inputUser" placeholder="Usuario">
      				</div>
      				
				</div>

			</fieldset>
		</div>

		<div class="col-sm-4"></div>

	</div>

</body>
</html>