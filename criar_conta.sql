-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 22-Nov-2022 às 11:46
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `oldin_bs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `criar_conta`
--

CREATE TABLE `criar_conta` (
  `id_conta` int(11) NOT NULL,
  `nome_conta` varchar(25) NOT NULL,
  `sobrenome_conta` varchar(25) NOT NULL,
  `cpf_conta` varchar(15) NOT NULL,
  `rg_conta` varchar(10) NOT NULL,
  `email_conta` varchar(50) NOT NULL,
  `senha_conta` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `criar_conta`
--

INSERT INTO `criar_conta` (`id_conta`, `nome_conta`, `sobrenome_conta`, `cpf_conta`, `rg_conta`, `email_conta`, `senha_conta`) VALUES
(1, 'Ademar', 'Rogerio', '111111111', '11111', 'ademar.rogerio@yahoo.com', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `criar_conta`
--
ALTER TABLE `criar_conta`
  ADD PRIMARY KEY (`id_conta`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `criar_conta`
--
ALTER TABLE `criar_conta`
  MODIFY `id_conta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
