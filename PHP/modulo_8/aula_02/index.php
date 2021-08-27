<?php
	
	date_default_timezone_set("America/Sao_Paulo");
	//conectando ao banco atraves do php
	$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

	if(isset($_POST['acao'])){
		$nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
		$momento_registro = date("Y-m-d H:i:s");

		//preparando comando para o banco 
		//os ? estao recebendo os valores atravs da array que esta no execute
		$sql = $pdo->prepare("INSERT INTO `clientes` VALUES(null,?,?,?)");
 
		//executando o que foi preparado /|\
		//array declarada por medida de segurança
		$sql->execute(array($nome,$sobrenome,$momento_registro));
		echo "cliente inserido com sucesso!";

	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro no banco</title>
</head>
<body>

	<form method="post"/>

		Nome: <input type="text" name="nome" required/> <br/>
		Sobrenome:  <input type="text" name="sobrenome" required/> <br/>
		<input type="submit" name="acao" value="enviar">

	</form>

</body>
</html>
