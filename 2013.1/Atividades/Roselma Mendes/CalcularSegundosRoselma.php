<?php
function calculaSegundos($segundos){	

	$minutos = (int) ($segundos / 60);

	$segundos = $segundos % 60;

	$hora = (int) ($minutos / 60);

	$minutosCertos = $minutos % 60;

	echo("$hora:$minutosCertos:$segundos");

}

calculaSegundos(3600);
