<?php

$horas = 30;

function horasParaSegundos($horas) {
	return $horas * 3600;
}

$segudos = horasParaSegundos($horas);
echo "$horas horas têm $segudos segundos";