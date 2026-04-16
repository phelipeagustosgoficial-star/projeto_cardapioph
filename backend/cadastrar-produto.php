<?php

// incluir o arquivo de conexao
require_once 'conexao.php';

try {
    // captura os dados enviados pelo frontend(form)
    $produto         = $_POST['produto'];
    $ingredientes    = $_POST['ingredientes'];
    $valor           = $_POST['valor'];
    $categoria       = $_POST['categoria'];
    $descricao       = $_POST['descricao'];

    //UPLOAD DA IMAGEM
    // captura a extensao da imagem (png,jpg,gif)
    $extensao = pathinfo($_FILES['imagem']['name'],PATHINFO_EXTENSION);

    // gera um hash que será usado como nome da imagem
    $hash = uniqid();

    // junta o hash gerado para imagem com a extensao capturada acima
    $novoNomeImagem = $hash.'.'.$extensao;
    
    // caminho onde o upload da imagem será realizado, é necessário criar essa pasta
    $caminho = '../assets/img/uploads/';

    // junta o caminho e novo nome da imagem
    $caminhoFinal = $caminho . $novoNomeImagem;

    // realizad o upload da imagem
    move_uploaded_file($_FILES['imagem']['tmp_name'],$caminhoFinal);

    //FINAL DO UPLOAD DA IMAGEM

    $sql = "INSERT INTO tb_produto(produto,ingredientes,valor,categoria,imagem,descricao) VALUES ('$produto','$ingredientes','$valor','$categoria','$novoNomeImagem','$descricao')";

    $comando = $conexao->prepare($sql);
    $comando->execute();

    // echo "Cadastro realizado com sucesso!";
    header('Location: ../produto-lista.php');   


} catch (PDOException $erro) {
    // guarda o erro gerado no log do servidor
    error_log($erro->getMessage());
    // exibe a mensagem de erro
    echo "Não foi possível cadastrar";
}
