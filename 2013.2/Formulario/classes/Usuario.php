<?php

class Usuario {

	const USUARIO_SENHA_VALIDOS  = 0;
	const SENHA_INVALIDA 		 = 1;
	const USUARIO_INVALIDO 		 = 2;
	const USUARIO_SENHA_INVALIDO = 3;

	public function estaValido($usuario, $senha) 
	{
		$usuarioBind = $usuario;
		$senhaBind   = $senha;

		$connection = new \PDO('mysql:host=localhost;dbname=projeto', 'root', 'mysqlpwd');
		$stmt = $connection->prepare('SELECT id FROM usuario WHERE usuario = :usuario AND senha = :senha');
		$stmt->bindParam(':usuario', $usuarioBind, \PDO::PARAM_STR); //<-- Automatically sanitized by PDO
		$stmt->bindParam(':senha', $senhaBind, \PDO::PARAM_STR); //<-- Automatically sanitized by PDO
		$resultado = $stmt->execute()->fetchAll(\PDO::FETCH_ASSOC);

		if(count($resultado) > 0) {
			return self::USUARIO_SENHA_VALIDOS;
		}

		return self::USUARIO_SENHA_INVALIDO;
	}

}