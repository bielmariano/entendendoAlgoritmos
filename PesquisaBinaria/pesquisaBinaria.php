<?php
// Essa função irá adivinhar o número de uma lista ordenada no menor número de tentativas possíveis.
// A função PesquisaBinaria recebe como parâmetro uma lista/array e o número que será procurado.
 function PesquisaBinaria($lista, $item)
    {
    	$baixo = 0;
    	$alto = count($lista) - 1;
    	
    	while ($baixo <= $alto){
    		echo "baixo da lista é " . $lista[$baixo] . "\n";
    		echo "alto da lista é " . $lista[$alto] . "\n";
    		$meio = ($baixo + $alto);
    		$meio = intdiv($meio, 2);
    		echo "o meio é " . $lista[$meio] . "\n";
    		
    		$chute = $lista[$meio];
    		echo "chute é " . $chute . "\n";

    		if ($chute == $item){
    			echo 'o número é ';
    			return $chute;
    		}
    		if ($chute > $item) {
    			$alto = $meio - 1;
    		}
    		else {
    			$baixo = $meio + 1;
    		}
    		echo "\n";
    	}
    	return - 1;
    };
    
    $minhaLista = [1,3,5,7,9];
   echo PesquisaBinaria($minhaLista, 3);