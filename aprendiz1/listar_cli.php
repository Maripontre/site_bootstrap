<?php
	
	require "conecta.php";

  $consulta = "SELECT * FROM clientes";
  //Criando um statament ou query
  $stmt_listar = $conecta->prepare($consulta);

  //Executa a instrução
  $stmt_listar->execute();

  $cliente = array();

  while($registro = $stmt_listar->fetch(PDO::FETCH_OBJ)) {
    $cliente[] = array("ID"=>$registro->id, "NOME"=>$registro->nome, "EMAIL"=>$registro->email, "TELEFONE"=>$registro->telefone);
  }
		echo json_encode($cliente);

?>