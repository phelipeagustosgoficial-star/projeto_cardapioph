<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php 
        // include do header(menu)
        require_once 'includes/header.php';
    ?>
    <main>
        <h1>Cadastro - Cardápio</h1>
        <form action="backend/cadastrar-produto.php" method="post" enctype="multipart/form-data">
            <div id="grid">
                <div>
                    <label for="produto">Produto</label>
                    <input type="text" name="produto" id="produto" required>
                </div>
                <div>
                    <label for="ingredientes">Ingredientes</label>
                    <input type="text" name="ingredientes" id="ingredientes" required>
                </div>
                <div>
                    <label for="valor">Valor</label>
                    <input type="number" step="0.01" name="valor" id="valor" required>
                </div>
                <div>
                    <label for="categoria">Categoria</label>
                    <select name="categoria" id="categoria" required>
                        <option value="" disabled selected>Selecione...</option>
                        <option value="Artesanais">Artesanais</option>
                        <option value="Tradicionais">Tradicionais</option>
                        <option value="Bebidas">Bebidas</option>
                        <option value="Sobremesas">Sobremesas</option>
                        <option value="Porções">Porções</option>
                        <option value="Combos">Combos</option>
                    </select>
                </div>
                <div>
                    <label for="imagem">Imagem</label>
                    <input type="file" name="imagem" id="imagem" required>
                </div>

                <div>
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" id="descricao"></textarea>
                </div>
            </div>
            <input class="btn-cadastrar" type="submit" value="Cadastrar">
        </form>        
    </main>   
    <footer>
        &copy; 2026 - Todos os direitos reservados
    </footer>
    

</body>
</html>