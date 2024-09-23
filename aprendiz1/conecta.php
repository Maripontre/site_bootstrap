<?php

	$DSN = "mysql:host=localhost;dbname=crud_ai;charset=utf8";
	$USUARIO = "root";
	$SENHA = "";

	try {
		$conecta = new PDO($DSN, $USUARIO, $SENHA);

	//	echo "Conectou com sucesso";
	}	catch(PDOException $erro) {
		echo $erro->getMessage();
		exit;
	}

?>
