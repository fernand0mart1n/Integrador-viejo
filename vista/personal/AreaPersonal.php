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

	    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Usuarios.com</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Personal</a></li>
            <li><a href="#about">Sobre</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <ul class="nav navbar-nav">
            <li><a href="../../controlador/conectarse.php?action=salir">Cerrar Sesion</a></li>
            
          </ul>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
    	<div class="col-sm-10">
			<h2>Bienvenido de nuevo <?php echo($_SESSION['nombre']); ?> te estabamos esperando..</h2>
		</div>

    </div>


	<div class="container">
		

		
	
	</div>
	<hr>

</body>
</html>