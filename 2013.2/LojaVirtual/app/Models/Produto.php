<?php

namespace Models;

class Produto {

	public function getProdutos() {			
		$pdo 		= new \PDO('sqlite:'.ROOT.'/database/loja.db');
		$result 	= $pdo->query('SELECT * FROM produto WHERE estoque > 0;');
		$produtos 	= $result->fetchAll(\PDO::FETCH_ASSOC);

		$produtos = array_map(function($item){
			$item['precoFormatado'] = 'R$ ' . number_format($item['preco'],2,',','.');
			$item['href'] 			= '/carrinho/add?id=' . $item['id'];			
			$item['status']			= $item['estoque'] > 0 ? 'Disponível' : 'Sem estoque';
			return $item;
		}, $produtos);

		return $produtos;
	}

}