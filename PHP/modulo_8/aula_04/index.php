<?php
	
	//chama o objeto PDO e adiciona mysql:host o servidor; dbname= o nome do banco
	//, 'usuario','senha';
	$pdo = new PDO("mysql:host=localhost;dbname=modulo_8",'root','');

	$id = 6;

	//or || e and && funciona tb no WHERE

	$sqlU = $pdo->prepare("UPDATE `clientes` SET nome=? WHERE nome=?");

	$sqlR = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

	if ($sqlR->execute(array($id))) {
		echo "cliente deletado com sucesso!";
	}


?>