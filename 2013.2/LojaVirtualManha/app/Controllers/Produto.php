<?php

namespace Controllers;

use \Models\Produto as P;

class Produto {

	public static function listar() {
		$produtoModel = new P();
		$produtos 	  = $produtoModel->getProdutos();
	
		\Helpers\View::exibir('Produto/listar', array(
			'produtos' => $produtos
		));
	}	

}