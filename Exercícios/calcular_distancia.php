<?php

/*
Exibir na tela o resultado da seguinte maneira:

Origem: Feira de Santana,
Destino: Buenos Aires,
Distâcia em KM: 1.450 km,
Tempo: 1 hora e 45 min

*/

$tipo    = 'json';
$origem  = urlencode("Feira de Santana");
$destino = urlencode("Salvador");

$url = "http://maps.googleapis.com/maps/api/distancematrix/{$tipo}
		?origins={$origem}&destinations={$destino}&sensor=false";

$json = file_get_contents($url);

$array = json_decode($json, true);

print_r($array);
