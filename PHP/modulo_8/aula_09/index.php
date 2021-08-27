<?php 

	$pdo = new PDO("mysql:host=localhost;dbname=modulo_8",'root','');

	//block como o nome ja diz bloquear tabelas
	//exec executar diretamente o comando ("comando"); 
	$pdo->exec("LOCK TABLES  `clientes` WRITE");

	//dormir por (Segundos);
	sleep(10);


?>