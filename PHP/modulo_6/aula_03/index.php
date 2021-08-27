<?php

	//durma o codigo por x segundos
	sleep(3);


	$nome = 'henrique';

	if ($nome == 'joao') {
		echo "Ta igual!";
	}else{
		//vai ser o ultimo comando a ser executado die
		die("encheu dagua");
		echo "com die ai esse codigo nen existe";
	}



?>