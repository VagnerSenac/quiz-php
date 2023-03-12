-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Mar-2023 às 23:08
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_quiz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_quiz`
--

CREATE TABLE `t_quiz` (
  `id` int(11) NOT NULL,
  `pergunta` varchar(4000) NOT NULL,
  `alternativa1` varchar(2000) NOT NULL,
  `alternativa2` varchar(2000) NOT NULL,
  `alternativa3` varchar(2000) NOT NULL,
  `alternativa4` varchar(2000) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `t_quiz`
--

INSERT INTO `t_quiz` (`id`, `pergunta`, `alternativa1`, `alternativa2`, `alternativa3`, `alternativa4`, `imagem`) VALUES
(1, 'Como você sente sua pele?', 'Muito Oleosa, de longe se ve brilho', 'Sinto que a testa e nariz são oleosos, já a bochecha é seca, chega a descascar', 'Não sinto minha pele nem seca e nem oleosa', 'Muito seca, chega a descascar', 'imagens/fundo2.jpg'),
(2, 'Como ?', 'Muito Oleosa, de longe se ve brilho', 'Sinto que a testa e nariz são oleosos, já a bochecha é seca, chega a descascar', 'Não sinto minha pele nem seca e nem oleosa', 'Muito seca, chega a descascar', 'imagens/fundo5.jpg'),
(3, 'Você costuma ter espinhas e cravos:', 'Sempre', 'De vez em quando', 'Raramente', 'Nunca', 'imagens/fundo6.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `t_user`
--

INSERT INTO `t_user` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Vagner Lourenço', 'vagnerinfo@yahoo.com.br', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `t_quiz`
--
ALTER TABLE `t_quiz`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `t_quiz`
--
ALTER TABLE `t_quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
