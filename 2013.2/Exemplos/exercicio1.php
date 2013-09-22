<?php

function mediaAritmetica($notas){
	return ($notas[0] + $notas[1] + $notas[2]) / 3;
}

$notas = array(5, 7.5, 8.2);
$media = mediaAritmetica($notas);

echo 'Média: ' . number_format($media, 2, ',','.');

