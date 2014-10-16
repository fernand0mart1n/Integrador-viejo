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

		if($action == 'login')
		{
			$user = $_POST['user'];
			$pass = $_POST['pass'];

			login($user,$pass);
		}
		else
		{
			header("Location: ../index.php");
			die();
		}
	}

	//verifica acciones por metodo get
	if($_SERVER['REQUEST_METHOD'] == 'GET')
	{
		$action1 = $_GET['action'];

		if($action1 == 'salir')
		{
			header("Location: ../index.php");
			session_destroy();
			die();
		}
	}

function login($user,$pass){

	include "../modelo/usuario.class.php";

	$a = new Usuario();

	try{

		$res = $a->loguearse($user,$pass);

	}catch(Exception $e){
		header("Location: ../vista/error/ErrorLogin.php?msg".$e->getMessage());
		die();
	}

	if($res == 'ok')
	{
		header ('Location: ../vista/personal/AreaPersonal.php');
		die();
	}
	elseif ($res == 'fail') 
	{
		header ('Location: ../index.php?error=1');
		die();
	}
}