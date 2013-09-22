<?php

class Produtos extends Controller {	

	public function listar()
	{	
		require_once('app/models/Produto.class.php');		
		$produto  = new Produto();

		$produtos = $produto->getProdutos();
		
		$this->view->set('produtos', $produtos);				
	}

	public function add()
	{							
		if(isset($_POST) && !empty($_POST)):
			require_once('app/models/Produto.class.php');		
			$produto  			 = new Produto();			
			$produto->descricao  = filter_var(filter_input(INPUT_POST, 'descricao'), FILTER_SANITIZE_STRING);
			$produto->quantidade = filter_var(filter_input(INPUT_POST, 'quantidade'), FILTER_SANITIZE_NUMBER_INT);
			$preco = str_replace(',', '.', filter_input(INPUT_POST, 'preco'));
			$produto->preco      = filter_var($preco, FILTER_SANITIZE_NUMBER_FLOAT);
			$produto->salvar();
		endif;
	}

	public function delete($id)
	{		
	}

	public function editar()
	{			
	}


}