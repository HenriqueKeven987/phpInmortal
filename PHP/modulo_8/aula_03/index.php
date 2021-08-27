<?php
	
	//chama o objeto PDO e adiciona mysql:host o servidor; dbname= o nome do banco
	//, 'usuario','senha';
	$pdo = new PDO("mysql:host=localhost;dbname=modulo_8",'root','');

	$id = 5;

	//or e ad funciona tb no WHERE
	$sql = $pdo->prepare("UPDATE `clientes` set nome='coisa', sobrenome='coisado' 
		WHERE nome=? or nome=?");

	//quando tiver ? definir array como parametro com as variaveis
	if ($sql->execute()) {
		echo "cliente atualizado com sucesso!";
	}


?>