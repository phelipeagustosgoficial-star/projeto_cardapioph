<?php

require_once 'backend/conexao.php';

try {
    $id = $_GET['id'];

    $sql = "SELECT * FROM tb_produto WHERE id=$id";

    $comando = $conexao->prepare($sql);
    $comando->execute();

    $produto = $comando->fetch(PDO::FETCH_ASSOC);
    //    echo "<pre>";
    //    var_dump($produto);

} catch (PDOException $erro) {
    // guarda o erro gerado no log do servidor
    error_log($erro->getMessage());
    // exibe a mensagem de erro
    echo "Não foi possível buscar os dados";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Digital</title>
    <link rel="stylesheet" href="assets/css/cardapio-info.css">
</head>

<body>
    <main>
        <a href="index.php">Voltar</a>
        <div id="cardapio">
            <img src="assets/img/uploads/<?php echo $produto['imagem']; ?>">
            <div id="cardapio-detalhes">
                <h1 id="produto"><?php echo $produto['produto']; ?></h1>
                <h4 id="categoria"><?php echo $produto['categoria']; ?></h4>
                <p id="valor">R$<?php echo $produto['valor']; ?></p>
                <div id="desc">
                    <h3>DESCRIÇÃO</h3>
                    <?php echo $produto['descricao']; ?>
                </div>
                <div id="ingredientes">
                     <h2>INGREDIENTES</h2>
                    <?php echo $produto['ingredientes']; ?>
                </div>

                <button type="button" id="btn-pedido">Faça seu Pedido</button>
            </div>
        </div>


    </main>
</body>

</html>