<?php

	/**
	 * 
	 */
	class Class1{
		
		private $nome;
		private $idade;

		//metodo magico chamado automaticamente quando criado um objeto de classe
		//OBS: metodos magicos tem __ em suas iniciais
		public function __construct($nome,$idade){

			$this->nome = $nome;
			$this->idade = $idade;

		}


		public function getNome(){
			return $this->nome;
		}

		public function getIdade(){
			return $this->idade;
		}
	}


?>