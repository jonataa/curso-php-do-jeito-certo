<?php

$horas = 20;

function horasParaSegundos($horas) {
	return $horas * 3600;
}

$segundos = horasParaSegundos($horas);
echo "$horas horas têm $segundos segundos\n";
echo $horas . ' horas têm ' . $segundos . ' segundos';
