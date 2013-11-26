<?php

$usuario = $_POST['usuario'];
$senha   = $_POST['senha'];

require 'classes/Usuario.php';
$usuario = new Usuario();

$resposta = $usuario->estaValido($usuario, $senha);

if($resposta == USUARIO::USUARIO_SENHA_VALIDOS) {
	session_start();
	$_SESSION['login'] = true;
	header('location: area_restrita.php');
}elseif($resposta == USUARIO::SENHA_INVALIDA) {
	echo 'Senha Inválida';
} elseif($resposta == USUARIO::USUARIO_INVALIDO) {
	echo 'Usuário Inválido';
} elseif($resposta == USUARIO::USUARIO_SENHA_INVALIDO) {
	echo 'Senha e Usuário Inválidos';
}