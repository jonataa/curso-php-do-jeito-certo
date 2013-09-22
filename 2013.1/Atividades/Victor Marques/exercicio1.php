<?php
	
	function horas($segundos)
	{

		$horas =  (int) ($segundos/3600);
		$minutos = (int) (($segundos % 3600)/60);
		$segundos =  ((($segundos % 3600) % 60));

		echo 'O valor em horas eh: '. $horas .' : ' .  $minutos .' : '. $segundos ;


		
	}

	function tratar_array($array)
	{
		
		$tamanho = count($array);

		for ($i = 0; $i <= $tamanho; $i++ )
		{
			if ( $array [$i] % 2 == 0) {
				echo '<br>' .$array [$i];
			}
		}

	}

	function tratar_array2($array)
	{

		foreach ($array as $key => $value) 
		{
			if ( $value % 2 != 0) continue;

			echo $value;



		}

	}

?>
<html><?php  
			
			tratar_array(array(0 => 2, 1 => 100, 2 =>25));




 ?>  </html>





