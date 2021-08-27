<?php 
	
	include('class1.php');
	include('class2.php');

	//um import de namespace
	//as: dando apelido para \sessao1\class1 
	use \sessao1\class1 as classe_exemplo;

	$class1 = new classe_exemplo();
	echo "<br/>";
	//$class2 = new Class2();

	


?>