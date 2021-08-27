<?php 
	
	$pdo = new PDO("mysql:host=localhost;dbname=modulo_8",'root','');

	//Fazer com q o PDO Cabuete o ERRO
	//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//GROUP BY esta agrupando por ai tu diz la 
	//LIMIT limita o numero de dados q vai retonar Obrigatorio no ORDER BY
	//ORDER BY ASC Ordem crescente ja com o DESC ordem descrecente
	//Estas consultas ORDER GROUP LIMIt podem ser usadas individualmente ou juntas
	//LIMIT 0,3 Vai trazer do 0 ao 3
	$sql = $pdo->prepare("SELECT * FROM `cliente` LIMIT 1 ");

	$sql->execute();

	$info = $sql->fetchAll();

	foreach ($info as $key => $value) {
		echo $value['nome'];
		echo "<hr/>";
	}





?>