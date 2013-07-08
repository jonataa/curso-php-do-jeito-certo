<?php

class Model {

	public function select($tabela, $options)
	{
		$db = new Datasource();		
		return $db->select($tabela, $options);
	}

	public function salvar()
	{
		$db = new Datasource();		
		$db->salvar($this);
	}

	public function beforeRows($rows)
	{

	}

}