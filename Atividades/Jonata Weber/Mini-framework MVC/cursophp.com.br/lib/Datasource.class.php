<?php

class Datasource {

	public $is_connected = false;
	private $dsn 	 	 = 'mysql:host=127.0.0.1;dbname=cursophp';
	private $usuario 	 = 'root';
	private $senha   	 = '123456';	
	private $pdo 		 = null;

	public function __construct()
	{	$this->connect();
	}

	private function connect()
	{	$this->pdo = new PDO($this->dsn, $this->usuario, $this->senha);								
		$this->is_connected = isset($this->pdo) && !empty($this->pdo);
	}

	public function salvar($model_object)
	{
		$data 	= (array) $model_object;	
		$tabela = $data['tabela'];
		unset($data['tabela']);
			
		foreach($data AS $coluna => $valor):			
			$colunas[] = $coluna;			
			$valores[] = (is_string($valor) ? ("'{$valor}'") : ($valor));
		endforeach;

		$colunas = implode(',', $colunas);
		$valores = implode(',', $valores);

		$sql = "INSERT INTO {$tabela}({$colunas}) VALUES({$valores});";
		return $this->pdo->query($sql);

	}

	public function select($tabela, $options)
	{						
		$where = NULL;		
		if(isset($options) && !empty($options)):
			foreach($options AS $type=>$option):
				if($type == 'where'):
					$where = 'WHERE ';
					foreach($option AS $operador=>$parametros):						
						$i = 0;					
						foreach($parametros AS $coluna=>$valor):												
							$condicoes[] =  is_string($valor) ? 
											"{$coluna} = '{$valor}'" :
										    "{$coluna} = {$valor}";																											
						endforeach;						
						$where .= implode(" {$operador} ", $condicoes);						
					endforeach;
				endif;

				if($type == 'order'):

				endif;
			endforeach;
		endif;	

		/*$usuario = $_GET['usuario'];
		$senha   = $_GET['senha'];

		$sql   = "SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha";
		$stmt  = $this->pdo->prepare($sql);

		$stmt->bindParam(':usuario', $usuario);
		$stmt->bindParam(':senha', $senha);

		$stmt->execute();
		
		print_r($stmt->fetchAll(PDO::FETCH_ASSOC));*/
		
		$sql = "SELECT * FROM {$tabela} {$where}";

		return $rows = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);				
	}
}