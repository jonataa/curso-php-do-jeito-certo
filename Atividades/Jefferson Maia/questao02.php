
<?php

/*ALUNO: JEFFERSON MAIA DE ALMEIDA SANTANA
  UNIVERSIDADE UNIFACS
  DATA: 27/03/2013
*/

function hora_certa($segundos_informados)
{

$horas = (integer)($segundos_informados/3600);
$minutos = (($segundos_informados/60)%60);
$segundos = (integer)($segundos_informados%60);

//$segundos = 
//echo $minutos;
//$segundos = 
echo "Total em horas: ".$horas." horas ,".$minutos." minutos ,".$segundos." segundos ";

}

$segundos_informados = 3661;
hora_certa($segundos_informados);


//$horas = (int) ($seg/3600);	$minutos = (int)(($seg%3600)/60);	$segundo = $seg%60
?>

