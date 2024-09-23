<?php

    $con = mysqli_init();
    mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
    mysqli_real_connect($conn, "tcc2024mysql.mysql.database.azure.com", "tcc",  "{543150Ifsp}", "{tcc}", 3306, MYSQLI_CLIENT_SSL);	
/*
    $DSN = "mysql:host=tcc2024mysql.mysql.database.azure.com;
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
*/
?>
