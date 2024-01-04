-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Set-2023 às 21:24
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc_simplehardware`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

DROP TABLE IF EXISTS `cadastros`;
CREATE TABLE IF NOT EXISTS `cadastros` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usuarios` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `cadastros`
--

INSERT INTO `cadastros` (`id`, `usuarios`, `password`) VALUES
(8, 'aha', '123'),
(9, 'Adm', '123'),
(10, 'ADM', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Senha` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`user_id`, `email`, `Senha`) VALUES
(3, 'adm@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `caracteristica1` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `caracteristica2` decimal(10,2) NOT NULL,
  `caracteristica3` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `caracteristica4` int NOT NULL,
  `caracteristica5` int NOT NULL,
  `caracteristica6` decimal(5,2) NOT NULL,
  `caracteristica7` decimal(5,2) NOT NULL,
  `caracteristica8` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `descricao` text,
  `preco` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `caracteristica1`, `caracteristica2`, `caracteristica3`, `caracteristica4`, `caracteristica5`, `caracteristica6`, `caracteristica7`, `caracteristica8`, `imagem`, `descricao`, `preco`) VALUES
(1, 'AMD Ryzen 9 5950X', 'AMD', '749.99', '64MB', 7, 32, '3.40', '4.90', 'AM4', 'amd_Ryzen9.jpg', 'O Intel Core i9-11900K é um processador de alto desempenho fabricado pela Intel, fazendo parte da série Core i9 da 11ª geração, também conhecida como \"Rocket Lake\". Projetado para atender às necessidades de computação exigentes, o i9-11900K é adequado para uma variedade de tarefas, desde jogos avançados até aplicativos de produtividade intensiva.\n\nCom 8 núcleos e 16 threads, o processador i9-11900K oferece um bom equilíbrio entre desempenho single-core e multi-core. Ele é construído com a microarquitetura Cypress Cove da Intel e é fabricado usando o processo de 14 nanômetros, garantindo melhorias significativas em relação às gerações anteriores.', 750),
(2, 'Intel Core i9-11900K', 'Intel', '539.99', '16MB', 14, 16, '3.50', '5.30', 'LGA 1200', 'IntelCore_i9.jpg', 'O Intel Core i9-11900K é um processador topo de linha da Intel, parte da série Core i9 da 11ª geração, também conhecida como \"Rocket Lake\". Projetado para oferecer um desempenho excepcional em uma variedade de aplicações, o i9-11900K é ideal para tarefas que exigem alto poder de processamento, como jogos de última geração e tarefas de criação de conteúdo intensivas.\n\nCom 8 núcleos e 16 threads, o processador i9-11900K é capaz de lidar com cargas de trabalho multitarefa de maneira eficiente. Ele utiliza a arquitetura Cypress Cove da Intel, entregando melhorias em relação às gerações anteriores e garantindo um desempenho sólido tanto em tarefas single-core quanto multi-core.', 540),
(3, 'AMD Ryzen 7 5800X', 'AMD', '449.99', '32MB', 7, 16, '3.80', '4.70', 'AM4', 'amd_Ryzen7.jpg', 'O AMD Ryzen 7 5800X é um processador de alto desempenho da linha Ryzen 5000 da AMD, que faz parte da arquitetura \"Zen 3\". Projetado para atender às demandas de jogos intensivos, multitarefa e criação de conteúdo, o Ryzen 7 5800X oferece uma combinação de núcleos e threads para proporcionar um desempenho eficiente e equilibrado.\n\nCom 8 núcleos e 16 threads, o Ryzen 7 5800X oferece uma excelente capacidade de multitarefa, permitindo que você execute várias tarefas simultaneamente sem comprometer o desempenho. A arquitetura Zen 3 traz melhorias significativas no IPC (instruções por ciclo), resultando em um aumento notável no desempenho em comparação com as gerações anteriores.', 450),
(4, 'Intel Core i7-12700K', 'Intel', '459.99', '30MB', 7, 20, '3.80', '5.00', 'LGA 1700', 'intelCore_i7.jpg', 'O Intel Core i7-12700K é um processador de alto desempenho da 12ª geração da família Intel Core, conhecida como \"Alder Lake\". Este processador é projetado para atender às demandas de jogos, multitarefa e criação de conteúdo, oferecendo uma combinação equilibrada de núcleos e threads para diversas aplicações.\n\nO Core i7-12700K apresenta uma abordagem híbrida com núcleos de alto desempenho \"P-cores\" e núcleos eficientes em termos de energia \"E-cores\". Essa arquitetura híbrida busca otimizar o desempenho em cargas de trabalho variadas, permitindo que os núcleos de alto desempenho lidem com tarefas mais intensivas, enquanto os núcleos de baixa potência lidam com tarefas leves para economizar energia.', 460),
(5, 'AMD Ryzen 5 5600X', 'AMD', '279.99', '32MB', 7, 12, '3.70', '4.60', 'AM4', 'amd_Ryzen5.jpg', 'O AMD Ryzen 5 5600X é um processador da série Ryzen 5000 da AMD, projetado para oferecer um equilíbrio entre desempenho e valor para jogadores e criadores de conteúdo. Ele faz parte da arquitetura Zen 3, que representa um avanço significativo em relação às gerações anteriores em termos de eficiência e desempenho.\n\nO Ryzen 5 5600X possui 6 núcleos e 12 threads, o que o torna capaz de lidar com multitarefas e aplicações de uso geral com facilidade. Ele também apresenta a tecnologia de boost automático da AMD, que ajusta dinamicamente as frequências de clock para otimizar o desempenho de acordo com a carga de trabalho. Isso resulta em excelente desempenho single-core e multi-core, tornando-o adequado tanto para jogos quanto para tarefas de produtividade.', 280);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
