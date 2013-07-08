<?php

class Estudantes extends Controller {

	public function listar()
	{
		require_once('app/models/Estudante.class.php');
		$estudante = new Estudante();
		$options = array(
			'where' => array(				
				'AND' => array('ativos' => 'senha\' OR ativos = \'1', 'nome'=>'Jefferson Maia')				
				),
			'order' => array('nome'   => 'DESC')
			);

		$this->view->set('estudantes', $estudante->getEstudantes($options));
	}

}