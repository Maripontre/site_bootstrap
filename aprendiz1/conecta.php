<?php

	$DSN = "mysql:host= tcc2024mysql.mysql.database.azure.com;
            dbname=crud_ai;charset=utf8";
	$USUARIO = "tcc";
	$SENHA = "543150Ifsp";

	try {
		$conecta = new PDO($DSN, $USUARIO, $SENHA);

		echo "Conectou com sucesso";
	}	catch(PDOException $erro) {
		echo $erro->getMessage();
		exit;
	}

?>
