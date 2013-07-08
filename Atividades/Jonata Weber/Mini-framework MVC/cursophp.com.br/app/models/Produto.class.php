<?php

class Produto extends Model {

	var $tabela = 'produtos';

	public function getProdutos($options = NULL)
	{		
		$rows = $this->select($this->tabela, $options);

		foreach($rows AS &$row):						
			$row['preco_formatado'] = $this->formatarPreco($row['preco']);			
		endforeach;
		
		return $rows;
	}

	public function formatarPreco($preco)
	{
		return 'R$ ' . number_format($preco,'2', ',', '.');
	}

}