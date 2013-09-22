<?php

$lista = array(1,2,3,4);

$soma   = 0;
$dobrar = function($numero) use ($soma) {
	return $numero * 2 + $soma;
};

$listaDobrada = array_map($dobrar, $lista);
var_dump($listaDobrada);