<?php
	
	class Pessoa{
		//objeto pessoa

		//private fica disponivel apenas dentro da classe
		//private so pode ser acessada de dentro da propria classe
		private $nome = 'Henrique';
		private $idade = '20';
		private $peso = '81kg';

		public function crescer(){
			//this quer dizer que E ess objeto em ci esta chamando dentro da 
			// propria classe
			$this->comer();
			echo "<br/>";
			echo "estou crescendo";
		}   

		private function comer(){
			echo "estou comendo";
		}
	}

	//instanciar chamando classe para uma variavel 
	$pessoa = new Pessoa;

	//chamando a funçao crescer de dentro da classe pessoa
	//detalha so porque a funçao crescer esta publica
	$pessoa->crescer();


?>