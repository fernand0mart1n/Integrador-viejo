<?php
	session_start();
	header("Content-Type: text/html; charset=UTF-8");

	if (!isset($_SESSION['nombre'])) 
	{
		header("Location: ../index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Baja de usuarios</title>
  <meta charset="utf-8">
	<link href="../../librerias/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="col-sm-4">
			 <h2>¿Está seguro que desea eliminar su cuenta?</h2>
		  </div>
    </div>
          <div class="container">
            <div class="col-sm-4">
              <label for="contraseña"> Ingrese su contraseña para confirmar la baja </label>
              <input type="password" name="pass" class="form-control" id="contraseña" type="password" required>
            </div>
          </div>

    <div class="container">
     <div class="col-sm-4">
     <br>
        <button type="cancel" onclick="javascript:window.location='AreaPersonal.php';" class="btn btn-danger">Cancelar</button>
        <button type="submit" onclick="javascript:window.location='../index.php';" class="btn btn-success">Darme de baja</button>
      </div>
    </div>


</body>
</html>