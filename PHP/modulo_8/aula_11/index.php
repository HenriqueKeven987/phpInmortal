<?php 

	$pdo = new PDO("mysql:host=localhost;dbname=modulo_8",'root','');

	//IN funciona como EM id EX: IN (1,3);
	//$sql = $pdo->prepare("SELECT * FROM `clientes_between` WHERE id IN (1,4)");
	$sql = $pdo->("SELECT * FROM `clientes_between` WHERE ")

	$sql->execute();

	$clientes_IN = $sql->fetchAll();

	foreach ($clientes_IN as $key => $value) {
		echo "Nome: ".$value['nome'];
		echo "<br/>";
		echo "Email: ".$value['email'];
		echo "<hr/>";
	}


?>