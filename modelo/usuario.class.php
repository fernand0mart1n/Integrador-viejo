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

	function modificar($i){
		$id = $i;

		$conn = new conexion();

		try{

			$sql = "SELECT * FROM usuarios WHERE id = :id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':id', $id, PDO::PARAM_STR);
			$stmt->execute();

			if($stmt->rowCount() == 1)
			{
				$fila = $stmt->fetch(PDO::FETCH_ASSOC);
				$usuario['nombre'] = $fila['nombre'];
				$usuario['apellido'] = $fila['apellido'];
				$usuario['user'] = $fila['user'];
				$usuario['pass'] = $fila['pass'];
				return $usuario;
			}	

		} catch(PDOException $e){
			throw new Exception($e->getMessage());
		}

		return 'fail';
	}

	function insertamodificacion($usuario, $id){
		$usuario['nombre'] = ucwords(strtolower($usuario['nombre']));
		$usuario['apellido'] = ucwords(strtolower($usuario['apellido']));
		$usuario['user'] = ucwords(strtolower($usuario['user']));
		$usuario['pass'] = ucwords(strtolower($usuario['pass']));

		$conn = new conexion();

		try{

			$sql = "UPDATE usuarios SET nombre = :nombre, apellido = :apellido, user = :usuario, pass = :contrasenia WHERE
					id = $id";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':nombre', $usuario['nombre'], PDO::PARAM_STR);
			$stmt->bindParam(':apellido', $usuario['apellido'], PDO::PARAM_STR);
			$stmt->bindParam(':usuario', $usuario['user'], PDO::PARAM_STR);
			$stmt->bindParam(':contrasenia', $usuario['pass'], PDO::PARAM_STR);
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
