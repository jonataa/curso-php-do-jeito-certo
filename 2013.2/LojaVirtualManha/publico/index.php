<?php

// comando para iniciar esse aplicativo: 
//php -S localhost:8000 -t publico/

include '../app/Controllers/Produto.php';
include '../app/Models/Produto.php';
include '../app/Helpers/View.php';
include '../app/Helpers/Database.php';

use \Controllers\Produto;

require '../app/Configs/bootstrap.php';

if(URI == '/') {
	header('location: /produtos/listar');
} else if(URI == '/produtos/listar') {
	Produto::listar();
}