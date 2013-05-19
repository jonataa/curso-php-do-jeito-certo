<?php

class Produtos extends Controller {	

	public function listar()
	{				
		$produtos[] = array(
				'id' 			=> 20,
				'descricao' 	=> 'TV LED 50"',
				'quantidade' 	=> '100',
				'preco'			=> 'R$ 2.000,00'				
			);

		$produtos[] = array(
				'id' 			=> 32,
				'descricao' 	=> 'IPhone 5',
				'quantidade' 	=> '500',
				'preco'			=> 'R$ 2.800,00'				
			);	

		$this->view->set('produtos', $produtos);				
	}

	public function add()
	{							
	}

	public function delete($id)
	{		
	}

	public function editar()
	{			
	}


}