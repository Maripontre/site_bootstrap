<?php
  require 'conecta.php';


 
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
/*
  $nome = $_GET['nome'];
  $email = $_GET['email'];
  $telefone = $_GET['telefone'];
*/
  $consulta = "SELECT * FROM clientes  WHERE email = :EMAIL";
  $consulta = $conecta->prepare($consulta);

  $consulta->bindParam(':EMAIL', $email);
  $consulta->execute();

  if($consulta->rowCount() > 0 ) {
    // ja possui cadastro
    echo "Email já cadastrado.";
  } else {
    // novo cadastro

    $str_sql = "INSERT INTO clientes (nome, email, telefone)";
    $str_sql = $str_sql . "VALUES (:nome, :email, :telefone)";
    
    $str_salvar = $conecta->prepare($str_sql);
    $str_salvar->bindParam(':nome', $nome);
    $str_salvar->bindParam(':email', $email);
    $str_salvar->bindParam(':telefone', $telefone);

    if($str_salvar->execute()) {
        //Salvo com sucesso.
        echo "Cadastrado com sucesso!";
    } else {
        // Ocorreu um erro
        echo "Ocorreu um erro.";
    }
  }
?>
