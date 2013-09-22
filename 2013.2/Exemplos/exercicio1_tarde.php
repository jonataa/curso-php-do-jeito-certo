<?php

$notas[] = 7.6;
$notas[] = 8;
$notas[] = 10;

function mediaAritmetica($notas) {
	return array_sum($notas)/count($notas);
}
$media = mediaAritmetica($notas);

echo number_format(50000, 2, ',', '.');