<?php

namespace Models;

class Produto {

	public function getProdutos() 
	{
		$produtos 	= array();
		$produtos[] = array(
			'id'		=> 1,
			'descricao' => 'TV de LED 52"',
			'categoria' => 'Eletrônico',
			'preco'		=> 4199.90
		);	
		$produtos[] = array(
			'id'		=> 2,
			'descricao' => 'Videogame Sony PS4',
			'categoria' => 'Eletrônico',
			'preco'		=> 4000
		);

		return $produtos;	
	}

}