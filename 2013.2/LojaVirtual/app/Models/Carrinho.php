<?php

namespace Models;

class Carrinho {

	private $chave = 'carrinho';

	public function add($produto) {
		session_start();		
		$_SESSION[$this->chave]['produtos'][] = $produto;				
	}

	public function limpar() {
		session_start();		
		unset($_SESSION[$this->chave]);
	}

}