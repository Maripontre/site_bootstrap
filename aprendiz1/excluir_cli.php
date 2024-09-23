<?php

  require 'conecta.php';

  $id = $_POST['id'];

  //Exclui os dados na tabela
  $str_sql = "DELETE FROM clientes WHERE id = :ID";

  $str_salvar = $conecta->prepare($str_sql);
  $str_salvar->bindParam(':ID', $id);

  if($str_salvar->execute()) {
    //Salvo com sucesso
    echo "Cadastro excluído com sucesso.";
  } else {
      echo "Ocorreu um erro.";
  }