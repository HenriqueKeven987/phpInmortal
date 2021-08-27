<?php

	function mostraNome($nome, $idade){
		echo "<h2> Nome e : </h2> $nome";
		echo "<br/>";
		echo "idade: $idade";
	}


	//funçao com parametro definidos
	function cauculadora($numero1 = 10, $numero2 = 5){
		echo ($numero1+$numero2);
	}

	function verdade (){
		//retorna para a funçao
		return true;
	}


	function retornarString(){
		return 'Henrique';
	}

	echo retornarString();


	//a variavel vai receber o valor true
	$variavel = verdade();

	//valores definidos para os parametros
	echo cauculadora(20,30);

?>