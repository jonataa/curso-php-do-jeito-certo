<?php

session_start();
$logado = isset($_SESSION['login']) ? $_SESSION['login'] : false;

if(! $logado) {
	die('Você não tem permissão para acessar essa página!');
}

?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Área Restrita</title>
	</head>
	<body>
		<h1>Área Restrita</h1>
	</body>
</html>