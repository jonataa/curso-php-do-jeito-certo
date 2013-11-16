<?php

namespace Models;

use \Helpers\Database;

class Produto {

	public function getProdutos() 
	{	return Database::query('SELECT * FROM produto;');				
	}

}