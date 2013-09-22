<?php

$arr = array();

for($i = 0 ; $i <= 100 ; $i++):

	$arr[] = $i;

endfor;

foreach ($arr as $key => $value) {
	
	$resto = $value % 2;
	if($resto == 0)
		echo($value . '</br>');

}