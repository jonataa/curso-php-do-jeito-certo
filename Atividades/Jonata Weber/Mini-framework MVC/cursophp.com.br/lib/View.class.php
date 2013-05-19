<?php

class View {

	var $layout = 'layout';
	
	public function render($controller_name, $view_name)
	{	
		if(isset($this->sets) && !empty($this->sets)):
			foreach($this->sets AS $indice=>$valor):
				$$indice = $valor;
			endforeach;	
		endif;

		$filename = "app/views/{$controller_name}/{$view_name}.phtml";
		
		if(!file_exists($filename))
			throw new Exception("Você precisa criar este arquivo: {$filename}");			
		
		ob_start();							
			require_once($filename);
			$this->content = ob_get_contents();
		ob_end_clean();	

		require_once("app/views/{$this->layout}.phtml");	
	
	}

	public function set($chave, $valor)
	{	$this->sets[$chave] = $valor;
	}

}