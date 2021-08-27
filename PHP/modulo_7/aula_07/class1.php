<?php 
	//como se este arquivo class1 estivesse dentro de uma pasta
	namespace sessao1;
	//use esta puxando o namespace e o nome do arquivo
	use \sessao2\class2;

	class Class1{
		
		function __construct(){
			
			echo "Class1 instanciada";
			echo "<br/>";
			new Class2();

		}
	}


?>