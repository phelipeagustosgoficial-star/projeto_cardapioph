<?php
// include do arquivo de conexao
require_once 'conexao.php';

try {
   $id = $_GET['id'];
   $sql = "DELETE FROM tb_produto WHERE id = $id";
   $comando = $conexao->prepare($sql);
   $comando->execute();

   header("Location: ../produto-lista.php");

} catch (PDOException $erro) {
    // guarda o erro gerado no log do servidor
    error_log($erro->getMessage());
    // exibe a mensagem de erro
    echo "Não foi possível buscar os dados";
}

?>
