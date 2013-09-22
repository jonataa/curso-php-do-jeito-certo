
<?php

/*ALUNO: JEFFERSON MAIA DE ALMEIDA SANTANA
  UNIVERSIDADE UNIFACS
  DATA: 27/03/2013
*/

//laço de repeticao for, repetirá 100 vezes para receber o valor ao vetor
for ($i=0; $i <= 100 ; $i++)
{ 
   $matriz[]=$i; 
}


//escrevendo o resuldado
echo "Exercicio 02: fazer um programa que com vetor que receba 100 numeros e imprima apenas os pares";

for ($i=1; $i <= 100 ; $i++)
{ 
   if (($matriz[$i]%2) == (0))
      {
      	echo $matriz[$i]."</br>";
   	  }	
   
   
   
}


?>