<?php

	function mostra($num)
	{
		for ($i==0; $i < $num; $i++) 
		{ 
			$array[]=$i;
		}
		for ($i=0; $i <=$num ; $i++) 
		{ 
			if (($array[$i]%2)==0)
			{
				echo $array[$i]."<br>";
			}	
		}
				
	}

$num=100;
mostra($num);