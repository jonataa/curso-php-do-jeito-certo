<?php

namespace Controller;

use Model\Produto as P;

class Produto {

	public static function index() {
		session_start();
		if(isset($_SESSION['produto']) 
			&& !empty($_SESSION['produto']))
		{
			$produto = unserialize($_SESSION['produto']);
		} else {
			$produto = new P();
			$_SESSION['produto'] = serialize($produto);	
		}
		return require(VIEW_PATH . 'Produto/index.phtml');
	}

	public static function alteraProduto($descricao, $preco) {
		session_start();
		if(isset($_SESSION['produto']) 
			&& !empty($_SESSION['produto']))
		{
			$produto = unserialize($_SESSION['produto']);
			$produto->descricao  = $descricao;
			$produto->preco 	 = $produto->dobrar($preco);
			$_SESSION['produto'] = serialize($produto);
		}
		return json_encode($produto);

	}

	public static function limparSessao() {
		session_start();
		session_destroy();
		return 'Limpou a sessao!';
	}

}