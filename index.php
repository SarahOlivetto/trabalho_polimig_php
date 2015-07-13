<?php

    // O método próximo número demanda tempo de processamento de alguns números,
    //	para evitar erros aumentamos o tempo de retorno.
    set_time_limit(99*99*99*100);

	/*
	* Clase Miscelanea
	*
    *	Métodos:
    *	próximo perfeito, primo, perfeito, próximo primo,
    *	geekName, Letra AscII, Binário, Exadecimal, Octal,
    *	Aleatorio, Raiz, Potencia, Delta.
	*/
	
	class Miscelanea{
		//raiz do numero
		Public function raiz($numero){
 			$raiz = sqrt($numero);
 			echo "A raiz de: " . $numero . " é: " . $raiz;
		}
	
	    /*
		* Método para encontra o próximo número perfeito
		* @param $numero
		*/
		public function proximoPerfeito ($numero){
			
			$total = 0;
			$perfeito = 0;
			$num = 0;

			while($perfeito != 1){
				$num++;
				$proximoNumero = $numero+$num;
				// Verifica os divisores inteiros do numero, e soma a variavel total para validar posterormente
				for ($i = 1;$i < $proximoNumero; $i++){
					if(($proximoNumero%$i) == 0){
						$total = $total+$i;
					}
				}
                //Verifica se a soma dos divisores e igual ao número
				if($proximoNumero == $total) {
					$perfeito = 1;
					print_r('Pr&oacute;ximo n&uacute;mero perfeito:'.$proximoNumero);
				}
				$total = 0;
			}
					
		}
	
	}
	
?>
