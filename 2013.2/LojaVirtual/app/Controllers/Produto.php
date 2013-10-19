<?php

namespace Controllers;

use Services\View;

class Produto {

	public static function listar() {		
		$produtos = (new \Models\Produto())->getProdutos();
		View::exibir('Produtos/listar', 
			array('produtos' => $produtos)
		);		
	}

}
