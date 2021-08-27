<<?php 

	$pdo = new PDO("mysql:host=localhost;dbname=modulo_8",'root','');

	//ON so trazer informaçoes quando cargo id bata com cargos id
	//LEFT JOIN me retorne todos que estao a minha esquerda EX:cliente nesse caso
	//RIGHT JOIN me retorne todos da Direia EX: cargos 
	$sql = $pdo->prepare("SELECT * FROM cliente LEFT JOIN cargos ON  `cliente`.`cargo` = `cargos`.`id`");

	$sql->execute();

	$info = $sql->fetchAll();

	foreach ($info as $key => $value) {
		echo $value['nome'];
		echo " | ";
		echo $value['nome_cargo'];
		echo "<hr/>";
	}



?>