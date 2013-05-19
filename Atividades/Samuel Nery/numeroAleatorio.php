<?php
        $vet=array();
        function inicializaVetor(&$vet){
           for($i=0;$i<10;$i++)
            {
               	   $vet[$i]= rand(1,100);
            }
        }
        
        function getResultado($vet)
        {
            inicializaVetor($vet); 
            rsort($vet); 
            return $vet;
        }   

        echo " Vetor ordenado do maior para o menor: "; 
        print_r(getResultado($vet));
?>