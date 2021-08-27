<?php

	//trabalhando com strings

	$text = 'acjvjunsivnavndjvnjsdvnsvjnjvnfavnajvmovmosavim mnvaojivnaoavnarjnjanvronvjarnmoiamvobnb';


	//echo substr($text, 0, 10);

	$nomeCompleto = 'Henrique Keven Sousa Almeida';

	
	$nome = explode(' ', $nomeCompleto);

	//imprimir array
	//print_r($nome);

	//serve para juna um array com delimitador
	//no caso espaço
	$nomes = implode(' ', $nome);

	//echo $nomes;

	//deixa visivel ao navegador todo codigo html
	echo htmlentities('<phpasdsdasdasdasdasdasdasd ?>');

	

?>