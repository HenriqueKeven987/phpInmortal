<?php
	
	include('interface1.php');
	//implements a palavra usada para implementar uma interface
	class teste implements interface1{

		public function jogaNaTela($par){
			echo $par;
		}

	}

	$teste = new teste;

	$teste->jogaNaTela('agora sim');
	

?>