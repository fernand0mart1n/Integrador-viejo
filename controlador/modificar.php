<?php

session_start();

	if (isset($_SESSION['nombre'])) 
	{
		header("Location: ../vista/personal/AreaPersonal.php");
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['action']))
	{
		header("Location: ../index.php");
	}

	function modify(){
		include "../modelo/usuario.class.php";

		$usuario = buscar($_SESSION['id']);

		if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$action = $_POST['action'];

		if($action == 'modify')
		{
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$user = $_POST['user'];
			$pass = $_POST['pass'];

			$res = modificar($usuario,$_SESSION['id']);

			return $res;
		}
		else
		{
			header ('Location: ../index.php?error=1');
			die();
		}
	}
}

	