<?php

class Estudante extends Model
{
	var $tabela = 'estudantes';

	public function getEstudantes($options = null)
	{
		return $this->select($this->tabela, $options);
	}	
}