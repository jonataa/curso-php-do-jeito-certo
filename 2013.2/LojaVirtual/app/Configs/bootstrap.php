<?php

define('URI', rtrim($_SERVER['REQUEST_URI'], '/'));
define('TITULO', 'Minha Loja Virtual');
define('VIEW_PATH', ROOT . '/app/Views/');

require_once ROOT . '/app/Controllers/Produto.php';
require_once ROOT . '/app/Controllers/Carrinho.php';
require_once ROOT . '/app/Models/Produto.php';
require_once ROOT . '/app/Services/View.php';