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
    <title>Cardápio - Lista</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php 
        // include do header(menu)
        require_once 'includes/header.php';
    ?>    
    <main>
        <h1>Cardápio Lista</h1>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Imagem</th>
                <th>Produto</th>
                <th>Ingredientes</th>
                <th>Categoria</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Data Cadastro</th>
                <th>Ações</th>
            </tr>
            <!-- dados dinâmicos do banco -->   
            <?php
                foreach($produtos as $produto):
            ?>           
            <tr>
                <td><?php echo $produto['id'];?></td>
                <td>
                    <img width="90px" src="assets/img/uploads/<?php echo $produto['imagem'];?>" alt="">
                </td>
                <td><?php echo $produto['produto'];?></td>
                <td><?php echo substr($produto['ingredientes'],0,30) . '...';?></td>
                <td><?php echo $produto['categoria'];?></td>
                <td><?php echo $produto['valor'];?></td>
                <td><?php echo substr($produto['descricao'],0,30) . '...';?></td>
                <td><?php echo $produto['data_cadastro'];?></td>
                <td>
                    <a class="table-actions" onclick="return confirm('Deseja deletar?')" 
                    href="backend/deletar-produto.php?id=<?php echo $produto['id'];?>">
                        Deletar
                    </a>
                </td>
            </tr>
            <?php
                endforeach;
            ?>
            
        </table>
    </main>    
</body>
</html>