<?php

require_once 'conexao.php';

try {
    $email = $_POST['email'];
    $senha = $_POST['senha'];    

    $sql = "SELECT * FROM tb_login WHERE email = '$email'";
    $comando = $conexao->prepare($sql);
    $comando->execute();
    $dados = $comando->fetch(PDO::FETCH_ASSOC);

    if($dados != null){
        // armazena o hash da senha que está no banco de dados
        $senha_hash_banco = $dados['senha'];

        if(password_verify($senha,$senha_hash_banco)){
        // senha collator_create
        // inciar a sessão(troca de dados em paginas diferentes)
        session_start();
        // cria uma variavel de sassao
        $_SESSION['logado'] = "sim";


        header("location: ../produto-lista.php");
        }else{
            // Senha Invalida
            echo "Dados inválidos";
        }
    }else{
        // Email Inválido
        echo "Dados inválidos!";
    }

} catch (PDOException $erro) {
    // guarda o erro gerado no log do servidor
    error_log($erro->getMessage());
    // exibe a mensagem de erro
    echo "Não foi possível cadastrar";
}
