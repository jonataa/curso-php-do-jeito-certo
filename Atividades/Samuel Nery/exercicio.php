<?php
        $segundos =5200; 

        function getHora($segundos){
              $minutos=$segundos/60;
              return (int)($minutos/60);
        }

        function getMinuto($segundos){
              $minuto = $segundos/60;
              return (int)($minuto % 60);
        }

        function getSegundo($segundos){
               return (int)($segundos % 60);
        }

        echo (getHora($segundos)." "."Horas"." : ".getMinuto($segundos)
          
          ." "."Minutos"." : ".getSegundo($segundos)." "."Segundos");
?>