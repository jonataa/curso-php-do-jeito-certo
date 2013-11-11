<?php

namespace Controllers;

use Services\View;
use \Models\Carrinho as Cart;

class Carrinho {

	public static function index() {	
		session_start();
		if(isset($_SESSION['carrinho'])) {
			echo '<pre>';
			print_r($_SESSION);
		}

		View::exibir('Carrinho/index');		
	}

	public static function add($id) {
		$carrinho = new Cart();
		$carrinho->add(
			array('id'=> $id)
		);
		header('location: /carrinho');		
	}

	public static function limpar() {
		$carrinho = new Cart();
		$carrinho->limpar();
		header('location: /produtos/listar');		
	}

}