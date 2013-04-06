<?php
        $segundos =6000;//so é mudar aqui...

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

        echo (getHora($segundos)." : ".getMinuto($segundos)." : ".getSegundo($segundos));
?>