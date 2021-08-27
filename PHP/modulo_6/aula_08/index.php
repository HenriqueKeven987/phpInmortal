<?php
	

	//array_merge serve para junta os array
	/*$array1 = array("chave1" => "valor1", "chave2" => "valor2");
	$array2 = array("chave3" => "valor3", "chave4" => "valor4");
	$array3 = array("chave5" => "valor5");
	$result = array_merge($array1, $array2, $array3);
	print_r($result);*/

	/*
	$array1 = array("chave1" => "valor1", "chave2" => "valor2");
	$array2 = array("chave1" => "Diferente" ,"chave3" => "valor3", "chave4" => "valor4");

	//array_intersect_key serve para retorna o mesmo valor em 1 ou mais array
	print_r(array_intersect_key($array1, $array2));
	*/


	$arr = ['<p>henrique</p>','joao','<h1>guilherme</h1>'];

	//array_map serve para definir uma funçao a todos os valores de uma array
	//strig_tags remove o codigo html
	
	print_r(array_map('strip_tags', $arr));
	

?>