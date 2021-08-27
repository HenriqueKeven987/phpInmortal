<?php 
	
	$pdo = new PDO("mysql:host=localhost;dbname=modulo_8",'root','');

	$sql = $pdo->prepare("SELECT * FROM `clientes`");

	$sql->execute();

	$usuarios = $sql->fetchAll();

	foreach ($usuarios as $key => $value) {
		echo $value['nome'];
		echo "<hr/>";

	}


	/*
	echo "<pre>";
	print_r($info);
	echo "<pre/>";
	*/
	/*
	foreach ($info as $key => $value) {
		echo $value['nome'];
		echo $value['sobrenome'];
		echo $value['momento_registro'];
		echo "<hr/>";
	}*/



?>