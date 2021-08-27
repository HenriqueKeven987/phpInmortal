<?php

	$nome = 'Henrique';

	/*
	switch ($nome) {
		case 'Henrique':
			echo "a variavel tem Henrique como valor";
			//break finaliza o codigo em execuçao
			break;

		case 'joao':
			echo "a variavel esta com joao o seu valor";
			break;

		//default se nao for nenhum dos casos acima vai ser o default
		default:
			echo "a variavel esta com um nome nao cadasrado no sistema";
			break;
	}*/

	//break serve para loop:for, while, foreach e switch
	//continue serve para loop: for, while e foreach


	for ($i=0; $i < 9; $i++) {
		if ($i == 5) {
			//o continue vai pular o resto do codigo e vai continua o loop
			continue;
		}

		echo $i;
		echo "<hr>";
			/*
			if ($i == 5) {
				break;
			}*/
	}


?>