<?php

require_once 'conexao.php';

try {
    // captura os dados enviados pelo fontend(form)
    $produto         = $_POST['produto'];
    $ingredientes    = $_POST['ingredientes'];
    $valor           = $_POST['valor'];
    $categoria       = $_POST['categoria'];
    $descricao       = $_POST['descricao'];

    //    UPLOAD DA IMAGEM
    //    CAPTURA A EXTENSAO DA IMAGEM
    $extensao = pathinfo($_FILES['imagem']['name'],PATHINFO_EXTENSION);
    // gera um hash que sera usado como nome da imagem
    $hash = uniqid();

    $novoNomeImagem = $hash.'.'.$extensao;
    // JUNTA O HASH GERADO PARA IMAGEM COM A EXTENSAO CAPTURADA

    // CAMINHO ONDE O UPLOAD DA IMAGEM SERA REALIZADO, É NECESSARIO CRIAR ESSA PASTA
    $caminho = '../assets/img/uploads/';
     
    // junta o caminho e novo nome da imagem
    $caminhofinal = $caminho . $novoNomeImagem;
    // realizad o upload da imagem
    move_uploaded_file($_FILES['imagem']['tmp_name'],$caminhofinal);

    //    UPLOAD DA IMAGEM

    // FINAL DO UPLOAD DA IMAGEM

    $sql = "INSERT INTO tb_produto(produto,ingredientes,valor,categoria,imagem,descricao) VALUES ('$produto','$ingredientes','$valor','$categoria','$novoNomeImagem','$descricao')";

    $comando = $conexao->prepare($sql);
    $comando->execute();

    echo "cadastrado com sucesso";

} catch (PDOException $err) {
    // guarda o erro gerado no log do servidor
    error_log($erro->getMenssage());
    // exibe a mensagem de erro
    echo "Não foi possivel cadastar";
}
