<?php

require_once 'conexao.php';

try {
    $nome           = $_POST['nome'];
    $email          = $_POST['email'];
    $senha          = $_POST['senha'];

    // Gera o Hash da senha digitada usando o alg ARGON2ID

    $senha_hash = password_hash($senha,PASSWORD_ARGON2ID);

    $sql = "INSERT INTO tb_login(nome,email,senha) VALUES ('$nome','$email','$senha_hash')";

    $comando = $conexao->prepare($sql);
    $comando->execute();
} catch (PDOException $erro) {
    // guarda o erro gerado no log do servidor
    error_log($erro->getMessage());
    // exibe a mensagem de erro
    echo "Não foi possível cadastrar";
}
