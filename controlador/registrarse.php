<?php

session_start();

	if($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_GET['action']))
	{
		header("Location: ../index.php");
	}	

	if($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['action']))
	{
		header("Location: ../index.php");
	}

	//verifica acciones por metodo post
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$action = $_POST['action'];

		if($action == 'registrarse')
		{
			$nombre   = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$user     = $_POST['user'];
			$pass     = $_POST['pass'];			

			register($nombre,$apellido,$user,$pass);
		}
		else
		{
			header("Location: ../index.php");
			die();
		}
	}

	function register($nombre,$apellido,$user,$pass){
		include "../modelo/usuario.class.php";

		$a = new Usuario();

		try{

			$res = $a->registrarse($nombre,$apellido,$user,$pass);

		}catch(Exception $e){
			header("Location: ../vista/error/ErrorRegister.php?msg".$e->getMessage());
			die();
		}

		if($res == 'ok')
		{
			try{

				$res = $a->loguearse($user,$pass);

			}catch(Exception $e){
			header("Location: ../vista/error/ErrorLogin.php?msg".$e->getMessage());
			die();
			}

			if($res == 'ok')
			{
				echo "Registro exitoso";
				header ('Location: ../vista/personal/AreaPersonal.php');
				die();
			}
			elseif ($res == 'fail') 
			{
				header ('Location: ../index.php?error=1');
				die();
			}
		}
		elseif ($res == 'fail') 
		{
			header ('Location: ../index.php?error=1');
			die();
		}
	}