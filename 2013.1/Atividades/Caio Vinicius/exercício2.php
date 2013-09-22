<?php
            $vetor=array();

            for($indicie =100; $indicie< 0; $indicie++){
                    $vetor[]=$indicie;
                    echo "$vetor[$indicie]";
                    if($indicie % 2 == 0){
                    	echo(" = par");
                    }else{
                    	echo" = impar";
                    }  
                    echo"</br>";
            }
 ?>

 