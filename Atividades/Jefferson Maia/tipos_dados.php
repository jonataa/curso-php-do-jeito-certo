<br>
	<?php
  		echo ".....................................";
  		echo " .:   TESTE 01 - TESTE COM var_dump() : ."."</br>";
  		$a=1;
  		var_dump($a);
 	?>
</br>

<br>
	<?php
		echo ".....................................";
		echo " .:   TESTE 02 - TESTE COM gettype() : ."."</br>";
  		$a=1;
  		echo gettype($a);
	?>
</br>

<br>
	<?php
		echo ".....................................";
		echo " .:   TESTE 03 - TESTE COM is_string() : ."."</br>";
  		$a=1;
  		echo "o valor de ".'$a'." e: $a"."</br>";
  			if(is_string($a))
  			{
  				echo "Resposta: e uma string";
  			}else{
  				echo "Resposta: nao e uma string, o tipo e: ".gettype($a);
  			}

  	?>
</br>

<br>
	<?php
		echo ".....................................";
		echo " .:   TESTE 04 - TESTE COM round(): ."."</br>";
  		$a=1.3;
  		echo "O valor de a = $a"."</br>";
  		echo "    Com round() o valor de a e: ".round($a);
	    echo "</br>";
	    $b=1.5;
	    echo "O valor de b = $b"."</br>";
  		echo "    Com round() o valor de b e: ".round($b);
	?>
</br>

<br>
	<?php
		echo ".....................................";
		echo " .:   TESTE 05 - TESTE COM define() ."."</br>";
  			define("TESTE_CONSTANTE",1000);
  		echo "O valor da constante e: ".TESTE_CONSTANTE;
        echo "</br>";
        echo "ver com jonathas, nao entendi o get_defined_constants() imprimir array....:   ";
  		echo (get_defined_constants());
  		echo "</br>";
	    
	    //constant() - obter dinamicamente valor de uma constante, ver com jonathas exemplos
        //outra maneira de declarar uma constante:
        const CONSTANTE_INICIAL = "1000";
        echo "o valor da constante e: ".CONSTANTE_INICIAL;
	?>
</br>

<br>
	<?php
	    //DICA: PHP_EOL quer dizer END OF LINE final da linha 
  		echo ".....................................";
  		echo " .:   TESTE 06 - TESTE COM CONSTANTES MAGICAS : ."."</br>";
  		echo "USO DO __LINE__ - Linha: ".__LINE__."</br>".PHP_EOL;
  		echo "USO DO __DIR__  - Diretorio: ".__DIR__."</br>".PHP_EOL;
  		echo "USO DO __FILE__ - Arquivo: ".__FILE__."</br>".PHP_EOL;

 	    /*VER O USO DAS OUTRAS VARIAVEIS MAGICAS:
		__LINE__
		__DIR__
		__FILE__
		__FUNCTION__
		__CLASS__
		__TRAIT__
		__METHOD__
		__NAMESPACE__
 	    */
 	?>
</br>

<br>
	<?php
  		echo ".....................................";
  		echo " .:   TESTE 07 - TESTE COM incremento/decremento : ."."</br>";
  		
  		$a=10;
  		echo $a++;
  		echo "</br>";
  		echo "valor de a e: $a "."</br>";
        
  		$b=10;
  		echo $b;
  		echo "</br>";
  		echo ++$b;
  		echo "</br>";
  		echo "valor de b e: $b "."</br>";
 	?>
</br>

<br>
  <html>
    <head> <title></title> </head> 

    <body> 
    <b>TESTE 08 - TESTE COM formularios</b></br>
    <b>Componente text:</b>
        <input type="text" name="tx_email" size="30"></br>;
     <b>Componente submit:</b>
        <input type="submit" name="btn_enviar" value="Enviar"></br>
    </body>
  
</br>