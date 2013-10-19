<?php

namespace Models;

class Produto {

	public function getProdutos() {			
		$pdo 		= new \PDO('sqlite:'.ROOT.'/database/loja.db');
		$result 	= $pdo->query('SELECT * FROM produto WHERE estoque > 0;');
		$produtos 	= $result->fetchAll(\PDO::FETCH_ASSOC);

		return $produtos;
	}

}