-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2022 às 21:26
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `progweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefone` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `datanasc`, `rg`, `cpf`, `endereco`, `estado`, `email`, `telefone`) VALUES
(1, 'Marcio Jose da Silva Bizerra', '1983-05-16', '126642115', '05416246790', 'Rua Pinto de Campos', 'RJ', '', '21985747278'),
(2, 'Marcelo da Silva Bizerra', '1985-05-16', '586898665', '74024701720', 'rua acari', 'AM', 'marcelo@gmail', '2130164143');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `nome` varchar(30) NOT NULL,
  `datanasc` date DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `cpf` varchar(30) DEFAULT NULL,
  `pai` varchar(30) DEFAULT NULL,
  `mae` varchar(40) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`nome`, `datanasc`, `rg`, `cpf`, `pai`, `mae`, `email`, `telefone`, `id`) VALUES
('Davi Lopes de Souza', '0000-00-00', '562115963', '2586935642', 'Lucas Souza da Silva', 'Bianca Lopes', 'davi@hotmail.com', '21986365214', 1),
('Beto Ribeiro  Machado', '0000-00-00', '526895214', '14589524555', 'Luiz Ribeiro', 'Maria Machado', 'beto@hotmail.com', '2125987565655', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `nome` varchar(30) DEFAULT NULL,
  `data_val` date DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `especie` varchar(10) DEFAULT NULL,
  `fornecedor` varchar(20) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `obs` varchar(20) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`nome`, `data_val`, `tipo`, `especie`, `fornecedor`, `valor`, `obs`, `telefone`, `id`) VALUES
('bola', '2024-05-26', 'brinquedo', '67', 'borracha', 0, 'cor branca', 2147483647, 1),
('calca', '0000-00-00', 'roupa', '', '', 0, '', 0, 2),
('maca', '0000-00-00', 'fruta', '', '', 0, '', 2147483647, 3),
('barraca', '0000-00-00', '', '', '', 0, '', 2130164143, 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rg` (`rg`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
