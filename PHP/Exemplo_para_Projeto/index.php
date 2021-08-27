<?php
	
	class Cachorro{


		public function __construct(){
			echo "classe cachorro";
		}

	}

	class gato{

		public function __construct(){

			echo "classe gato";
		}

	}

	class Animal{

		public static function build($nomeClasse){

			if (class_exists($nomeClasse)) {
				return new $nomeClasse;
			}else{
				die ('Encheu Dagua!');
			}

		}

	}


	Animal::build('cobra kai');

?>