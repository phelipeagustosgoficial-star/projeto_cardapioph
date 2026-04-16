<?php
// include do arquivo de conexao
require_once 'backend/conexao.php';

try {
    $sql = "SELECT * FROM tb_produto";
    $comando = $conexao->prepare($sql);
    $comando->execute();
    //armazena os dados do select em um array para que seja exibido na tabela
    $produtos = $comando->fetchAll(PDO::FETCH_ASSOC);

    //    echo "<pre>";
    //    var_dump($produtos);

} catch (PDOException $erro) {
    // guarda o erro gerado no log do servidor
    error_log($erro->getMessage());
    // exibe a mensagem de erro
    echo "Não foi possível buscar os dados";
}


?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Virtual</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main>
        <h1>Cardápio Digital</h1>

        <div id="grid-card">

            <?php
            foreach ($produtos as $produto):
            ?>

                <div class="card">
                    <img src="assets/img/uploads/<?php echo $produto['imagem']; ?>" alt="">
                    <div class="info">
                        <div class="titulo"><?php echo $produto['produto']; ?></div>
                        <div class="categoria"><?php echo $produto['categoria']; ?></div>
                        <div class="valor"><?php echo $produto['valor']; ?></div>
                        <a href="cardapio-info.php?id=<?php echo $produto['id']; ?>">
                            <button type="button">Visualizar</button>
                        </a>
                    </div>
                </div>

            <?php
            endforeach;
            ?>


        </div>

    </main>
</body>

</html>