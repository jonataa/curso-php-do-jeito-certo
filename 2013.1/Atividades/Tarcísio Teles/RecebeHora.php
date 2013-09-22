<?php

Class hora
{

	function CalcHora($seg) //Calcula as Horas
	{
		return (int)($seg/3600);
	}
	function CalcMin($seg) //Calcula os Minutos
	{
		return (int)(($seg%3600)/60);
	}
	function CalcSeg ($seg) //Calcula os Segundos
	{
		return (int)(($seg%3600)%60);
	}
}
$seg=250;
$calc = new hora;
echo "Hora certa: ".$calc->CalcHora($seg).":".$calc->CalcMin($seg).":".$calc->CalcSeg($seg);