<?php

include "conexion.class.php";
session_start();

class Usuario{

	function loguearse($u , $p){
	//funcion destinada al logueo de usuario en la pagina web

		$user = ucwords(strtolower($u));
		$pass = ucwords(strtolower($p));

		$conn = new conexion();

		try{

			$sql = "SELECT * FROM usuarios WHERE user = :usuario AND pass = :contrasenia";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':usuario', $user, PDO::PARAM_STR);
			$stmt->bindParam(':contrasenia', $pass, PDO::PARAM_STR);
			$stmt->execute();

			if($stmt->rowCount() == 1)
			{
				$fila = $stmt->fetch(PDO::FETCH_ASSOC);
				$_SESSION['nombre'] = $fila['nombre'];
				$_SESSION['apellido'] = $fila['apellido'];
				$_SESSION['id'] = $fila['id'];

				return 'ok';
			}	

		} catch(PDOException $e){
			throw new Exception($e->getMessage());
		}

		return 'fail';
	}

	function registrarse($n,$a,$u,$p){
		$nombre = ucwords(strtolower($n));
		$apellido = ucwords(strtolower($a));
		$user = ucwords(strtolower($u));
		$pass = ucwords(strtolower($p));

		$conn = new conexion();

		try{

			$sql = "INSERT INTO usuarios (nombre, apellido, user, pass)
					values (:nombre, :apellido, :usuario, :contrasenia)";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
			$stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
			$stmt->bindParam(':usuario', $user, PDO::PARAM_STR);
			$stmt->bindParam(':contrasenia', $pass, PDO::PARAM_STR);
			$stmt->execute();

			if($stmt->rowCount() == 1)
			{		
				$cuenta['user'] = $user;
				$cuenta['pass'] = $pass;
				return $cuenta;
			}
		
		} catch(PDOException $e){
			throw new Exception($e->getMessage());
		}

		return 'fail';
	}
}