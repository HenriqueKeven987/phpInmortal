<?php

	//abstract so pode ser herdada nao pode ser instanciada
	abstract class teste{

		 public function func1(){
		 	echo "chamando funçao 1";
		 }
		 //precisar ser declarada dentro da classe que herda ex:class principal
		 abstract function func2();

	}

	class principal2{

		public static function outrometodoEstatico(){
			echo "meu outro metodo";
		}


	}

	//toda classe nao presisa de parenteses
	class principal extends teste{

		//definiçao da funçao abstract vinda do teste
		public function func2(){
			echo "estou declarando oficialmente um metodo abstrato";

		}

		public static function metodoestatico(){
			echo "metodo estatico";

		}

		public function funcao(){
			//o self serve para chamar metodos e static dentro da pripria classe
			//self::metodoestatico();
			//estanciar
			$principal2 = new principal2;
			//metodo static nao precissar estanciar
			principal::metodoestatico();
			echo "<br/>";
			principal2::outrometodoEstatico();
		}
	}

	//instanciar
	$principal = new principal;
	$principal->funcao();

	//$principal->func1();


	//echo "<br/>";

	//para chamar staic basta o nome da classe e o da funçao ex: 
	//principal::metodoestatico();

	//$principal->func2();


?>