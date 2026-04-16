-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.14.0.7165
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_cardapio_digital
CREATE DATABASE IF NOT EXISTS `db_cardapio_digital` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `db_cardapio_digital`;

-- Copiando estrutura para tabela db_cardapio_digital.tb_produto
CREATE TABLE IF NOT EXISTS `tb_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto` varchar(100) NOT NULL,
  `ingredientes` varchar(200) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `categoria` enum('Artesanais','Tradicionais','Bebidas','Sobremesas','Porções','Combos') NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `descricao` text DEFAULT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `ativo` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela db_cardapio_digital.tb_produto: ~8 rows (aproximadamente)
INSERT INTO `tb_produto` (`id`, `produto`, `ingredientes`, `valor`, `categoria`, `imagem`, `descricao`, `data_cadastro`, `ativo`) VALUES
	(3, 'Rústico Bacon Premium', 'Pão brioche com gergelim, blend de carne bovina (180g), queijo cheddar derretido, fatias de bacon cr', 42.00, 'Artesanais', '69d8079f00209.png', 'A combinação perfeita entre o sabor intenso do nosso blend bovino grelhado e o toque agridoce da cebola roxa caramelizada. Montado em um pão brioche macio e selado na manteiga, este lanche traz a crocância do bacon perfeitamente harmonizada com vegetais frescos e a nossa maionese secreta. (Acompanha porção de batatas fritas temperadas com alecrim).', '2026-04-09 17:10:07', 1),
	(4, 'X-Tudo', 'Pão, hambúrguer, bacon, alface', 20.00, 'Tradicionais', '69dd1e9bc7202.jpg', 'Teste', '2026-04-13 13:49:31', 1),
	(5, 'Duplo Defumado Supremo', 'Pão brioche artesanal com gergelim,2 hambúrgueres, Queijo cheddar derretido, Bacon,Cebola carameliza', 39.90, 'Artesanais', '69dd24317aad9.jpg', 'Uma explosão de sabor para os verdadeiros amantes de hambúrguer! O Duplo Defumado Supremo combina dois suculentos burgers com cheddar derretido, bacon crocante e cebolas caramelizadas, equilibrados pelo toque agridoce do tomate seco e a acidez dos picles. Tudo isso envolvido em um macio pão brioche e finalizado com nosso molho especial irresistível.', '2026-04-13 14:13:21', 1),
	(6, 'Smash Artesanal do Chef', 'Pão brioche macio e levemente tostado, hambúrguer bovino suculento, queijo derretido, bacon crocante', 42.90, 'Combos', '69dd248a92eb5.jpg', 'Um hambúrguer artesanal cheio de personalidade, preparado com carne suculenta e ingredientes cuidadosamente selecionados. O contraste entre o bacon crocante, o frescor do coleslaw e o molho especial levemente picante cria uma experiência única a cada mordida. Acompanha uma generosa porção de batatas fritas douradas e crocantes, tornando este combo perfeito para quem busca sabor e satisfação completa.', '2026-04-13 14:14:50', 1),
	(7, 'Red Velvet com Frutas Vermelhas', 'Massa red velvet macia e levemente amanteigada, cobertura cremosa à base de cream cheese, calda de f', 24.90, 'Sobremesas', '69dd24c7cd63d.jpg', 'Delicado e sofisticado, o Red Velvet com Frutas Vermelhas combina uma massa aveludada com leve toque de cacau e coloração marcante, coberta por um creme suave de cream cheese. Finalizado com calda artesanal e frutas vermelhas frescas, oferece equilíbrio perfeito entre doçura e acidez, resultando em uma sobremesa leve, elegante e irresistível.', '2026-04-13 14:15:51', 1),
	(8, 'Smoothie de Framboesa Natural', 'Framboesas frescas, banana madura, leite (ou bebida vegetal), iogurte natural, mel ou açúcar a gosto', 14.90, 'Bebidas', '69dd253e4be32.jpg', 'Smoothie cremoso e refrescante feito com framboesas frescas e ingredientes naturais, perfeito para quem busca uma bebida leve, nutritiva e cheia de sabor. Possui um equilíbrio agradável entre o doce e o levemente ácido da fruta, sendo uma ótima opção para o café da manhã, lanche ou pós-treino.', '2026-04-13 14:17:50', 1),
	(9, 'Smoothie de Framboesa com Hortelã', 'Framboesas frescas, leite ou bebida vegetal, iogurte natural, açúcar ou mel a gosto, gelo e folhas d', 16.90, 'Bebidas', '69dd2588e0447.jpg', 'Bebida cremosa e refrescante que combina o sabor levemente ácido das framboesas com o toque aromático da hortelã. Ideal para dias quentes, esse smoothie oferece uma experiência leve e equilibrada, perfeita para quem busca uma opção saborosa, natural e revitalizante a qualquer hora do dia.', '2026-04-13 14:19:04', 1),
	(10, 'Café Duplo Tradicional', 'café, água', 8.00, 'Bebidas', '69dd26065ad90.jpg', 'Duas xícaras de café tradicional fresco, com aroma intenso e sabor encorpado, servidas em uma charmosa bandeja de madeira. Ideal para compartilhar ou para quem aprecia uma dose dupla de energia ao longo do dia.', '2026-04-13 14:21:10', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
