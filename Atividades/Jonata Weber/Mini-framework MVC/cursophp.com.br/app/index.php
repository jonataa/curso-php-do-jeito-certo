<?php

$uri = explode('/', $_SERVER['REQUEST_URI']);

$controller = $uri[1];
$action 	= $uri[2];


try {
	require_once("lib/View.class.php");
	require_once("lib/Controller.class.php");
	
	$controller_filename = "app/controllers/{$controller}.class.php";
	if(!file_exists($controller_filename))
		throw new Exception("Você precisa criar este controller: '{$controller_filename}'");	
	require_once($controller_filename);

	$controllerApp 		 = new $controller();
	$controllerApp->view = new View();	

	if(!method_exists($controllerApp, $action))
		throw new Exception("Você precisa criar o método '{$action}' na classe '{$controller}': {$controller_filename}");		
	$controllerApp->$action();

	$controllerApp->view->render($controller, $action);		

} catch(Exception $ex){
	echo $ex->getMessage();
}
