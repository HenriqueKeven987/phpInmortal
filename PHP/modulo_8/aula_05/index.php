<?php
	

	//chama o objeto PDO e adiciona mysql:host o servidor; dbname= o nome do banco
	//, 'usuario','senha';
	/*
	$pdo = new PDO("mysql:host=localhost;dbname=modulo_8",'root','');

	$sql = $pdo->prepare("SELECT * FROM posts WHERE Categoria_id = ?");

	$Categoria_id = '2';
	$sql->execute(array($Categoria_id));

	//fetchAll imprimir todas informaçoes que estao vindas do prepare(); como array
	$info = $sql->fetchAll();

	foreach ($info as $key => $value) {
		// . <-- concatenaçao 
		echo "Titulo: ".$value['Titulo'];
		echo "<br/>";
		echo "Noticia: ".$value['Conteudo'];
		echo "<hr>";
	}*/


	//echo "<pre>";

	//imprimi a informaçao de forma legivel
	//print_r($info);

	//echo "</pre";

	/*
	foreach ($info as $key => $value) {
		echo "Titulo: ".$value['Titulo'];
		echo "<br/>";
		echo "Noticia: ".$value['Conteudo'];
		echo "<hr>";
	}*/

	//count saber tamanho do array

	/*for($i = 0; $i < count($info); $i++){
		echo "Titulo: ".$info[$i]['Titulo'];
		echo "<br/>";
		echo "Noticia: ".$info[$i]['Conteudo'];
		echo "<hr>";
	}*/
	
	$pdo = new PDO("mysql:host=localhost;dbname=modulo_8",'root','');

	/*
	$sql = $pdo->prepare("SELECT * FROM categorias");

	$sql->execute();

	//fetchAll imprimir todas informaçoes que estao vindas do prepare(); como array
	$info = $sql->fetchAll();

	foreach ($info as $key => $value) {
		// . <-- concatenaçao 
		$Categoria_id = $value['id'];
		echo 'Exibindo posts: '.$value['Nome'];
		echo "<br/>";
		$sql = $pdo->prepare("SELECT * FROM posts WHERE Categoria_id = $Categoria_id");
		$sql->execute();
		$infoPosts = $sql->fetchAll();
		foreach ($infoPosts as $key => $value) {
			echo "Titulo: " .$value['Titulo'];
			echo "<br/>";
			echo "Noticia: " .$value['Conteudo'];
			echo "<hr/>";
		}
	}*/

	//INNER JOIN juntar Tabelas 
	//ON funciona como um WHERE 
	$sql = $pdo->prepare("SELECT `posts`.*, `categorias`.*, `posts`.`id` as `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`.`Categoria_id` = `categorias`.`id` ");

	$sql->execute();

	//PDO::FETCH_ASSOC quando for imprimido um tabela junta com outra essa funçao estatica
	//vai tirar os numemos q estao no relatorio do fetchAll();
	$info = $sql->fetchAll(PDO::FETCH_ASSOC);

	echo "<pre>";
	print_r($info);
	echo "<pre/>";

?>