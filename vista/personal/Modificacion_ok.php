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
	<title>Bienvenido <?php echo $_SESSION['nombre'];?></title>
  <meta charset="utf-8">
	<link href="../../librerias/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="col-sm-10">
			 <h2>Modificación exitosa</h2>
		  </div>

    </div>
    <div class="container">
     <div class="col-sm-10">
                <button type="submit" onaction=redirect ../AreaPersonal.php class="btn btn-success">Volver a área personal</button>
      </div>
    </div>
    <hr>


</body>
</html>