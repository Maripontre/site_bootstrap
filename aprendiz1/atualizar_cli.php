    <?php
    require 'conecta.php';

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    // Atualiza os dados da tabela
    $str_sql = "UPDATE clientes SET nome = :nome, email = :email, telefone = :telefone WHERE id = :ID";
    
    $str_salvar = $conecta->prepare($str_sql);
    $str_salvar->bindParam(':ID', $id);
    $str_salvar->bindParam(':nome', $nome);
    $str_salvar->bindParam(':email', $email);
    $str_salvar->bindParam(':telefone', $telefone);

    if($str_salvar->execute()) {
        //Salvo com sucesso.
        echo "Cadastro atualizado com sucesso!";
    } else {
        // Ocorreu um erro
        echo "Ocorreu um erro.";
    }
    
?>