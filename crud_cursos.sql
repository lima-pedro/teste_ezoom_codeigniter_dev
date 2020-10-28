-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Out-2020 às 03:13
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud_cursos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `img_principal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_galeria` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `titulo`, `descricao`, `img_principal`, `img_galeria`) VALUES
(16, 'Curso de jardinagem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquam lacus at metus efficitur tincidunt. Fusce quis vestibulum turpis. Fusce a aliquam nibh, cursus convallis lacus. Nam mattis massa nec ante dapibus consequat. Sed imperdiet, nulla ac tincidunt egestas, orci dui cursus ex, vitae lacinia quam tellus at sem. Praesent sed erat sit amet risus rutrum efficitur scelerisque a nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut quis diam et erat vehicula convallis.', '1603820974download (1).jpg', '1603820974download (2).jpg,1603820974download (3).jpg,1603820974download.jpg,1603820974main.jpg,'),
(17, 'Curso de mecânica', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquam lacus at metus efficitur tincidunt. Fusce quis vestibulum turpis. Fusce a aliquam nibh, cursus convallis lacus. Nam mattis massa nec ante dapibus consequat. Sed imperdiet, nulla ac tincidunt egestas, orci dui cursus ex, vitae lacinia quam tellus at sem. Praesent sed erat sit amet risus rutrum efficitur scelerisque a nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut quis diam et erat vehicula convallis.', '1603821009img2.jpg', '1603821009img1.jpg,1603821009img3.jpg,1603821009main.jpg,');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
