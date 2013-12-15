<?php

namespace Model;

class Produto {

	public $descricao = 'Padrao';
	public $preco	  = 4;

	function dobrar($valor) {
		return $valor * 2;
	}	

}