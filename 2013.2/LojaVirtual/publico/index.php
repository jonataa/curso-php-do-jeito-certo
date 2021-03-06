<?php

define('ROOT', dirname(__DIR__));

require_once '../app/Configs/bootstrap.php';

use \Controllers\Produto;
use \Controllers\Carrinho;

if(URI == '' || URI == '/produtos/listar') {	
	Produto::listar();	
} elseif(URI == '/carrinho') {
	Carrinho::index();	
} elseif(URI == '/carrinho/add') {		
	Carrinho::add($_GET['id']);
} elseif(URI == '/carrinho/limpar') {		
	Carrinho::limpar();
}


