<?php 

	$pdo = new PDO("mysql:host=localhost;dbname=modulo_8",'root','');

	//LIKE pesquisa so o que tiver EX: '%g%' mais usados para pesaquisas avançadas
	$sql = $pdo->prepare("SELECT * FROM clientes_like WHERE email LIKE '%h%'");

	$sql->execute();

	//fetch esta mostrando no $sql [''];
	//echo $sql->fetch()['email'];

	$emails = $sql->fetchAll();

	foreach ($emails as $key => $value) {
		echo "nome: ".$value['nome'];
		echo "<br/>";
		echo "email: ".$value['email'];
		echo "<hr/>";
	}

?>