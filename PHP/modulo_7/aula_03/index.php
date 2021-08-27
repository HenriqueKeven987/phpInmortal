<?php
		
	//quando uma classe E final nao pode ser herdada
	class Filha{

		/*
		protected function funcaoTeste(){
			echo 'chamando funçao teste';
		}*/

		private function funcaoTeste(){
			echo "chamando funçao teste: Ei chapa, tem condição não!!!! ";
		}

		public function mostrarOla(){
			//echo "ola";
			$this->funcaoTeste();
			
		}

	}

	//extends E para herda uma classe pegar todos os metodos para a classe que vai herda
	class Pai extends Filha{

		public function mostrarOla(){
			parent::mostrarOla();
			echo "<br/>";
			echo "nova funçao";
		}

		public function mostraTchau(){
			echo "tchau mundo";
			echo "<br/>";
			$this->mostrarOla();
		}

	}

	//$pai = new Pai;
	//$pai->mostraTchau();

	//echo "<br/>";

	//$filha = new Filha;
	//$filha->mostrarOla();

	$pai = new Pai;
	$pai->mostrarOla();


?>