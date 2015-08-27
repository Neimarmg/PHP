-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Ago-2015 às 05:07
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `teste_selecao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cores`
--

CREATE TABLE IF NOT EXISTS `cores` (
`codigo` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=239 ;

--
-- Extraindo dados da tabela `cores`
--

INSERT INTO `cores` (`codigo`, `titulo`) VALUES
(235, 'Branco'),
(236, 'Azul'),
(237, 'Preto'),
(238, 'Vermelho');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_antigos`
--

CREATE TABLE IF NOT EXISTS `dados_antigos` (
  `codigo` int(11) DEFAULT NULL,
  `titulo` varchar(100) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `tamanho` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dados_antigos`
--

INSERT INTO `dados_antigos` (`codigo`, `titulo`, `cor`, `tamanho`) VALUES
(100, 'Sapato Verão 2014', 'Branco', '33'),
(100, 'Sapato Verão 2014', 'Branco', '34'),
(100, 'Sapato Verão 2014', 'Branco', '35'),
(100, 'Sapato Verão 2014', 'Azul', '33'),
(100, 'Sapato Verão 2014', 'Azul', '34'),
(100, 'Sapato Verão 2014', 'Azul', '35'),
(120, 'Tênis Nike', 'Preto', '36'),
(120, 'Tênis Nike', 'Preto', '37'),
(120, 'Tênis Nike', 'Preto', '38'),
(120, 'Tênis Nike', 'Vermelho', '36'),
(120, 'Tênis Nike', 'Vermelho', '37'),
(120, 'Tênis Nike', 'Vermelho', '38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `codigo` int(50) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`codigo`, `titulo`) VALUES
(100, 'Sapato Verão 2014'),
(120, 'Tênis Nike');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_cores`
--

CREATE TABLE IF NOT EXISTS `produtos_cores` (
  `id_cor` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos_cores`
--

INSERT INTO `produtos_cores` (`id_cor`, `id_produto`) VALUES
(167, 100),
(168, 100),
(169, 120),
(170, 120);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_tamanhos`
--

CREATE TABLE IF NOT EXISTS `produtos_tamanhos` (
  `id_produto_cor` int(11) DEFAULT NULL,
  `id_tamanho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos_tamanhos`
--

INSERT INTO `produtos_tamanhos` (`id_produto_cor`, `id_tamanho`) VALUES
(167, 33),
(168, 33),
(167, 34),
(168, 34),
(167, 35),
(168, 35),
(169, 36),
(170, 36),
(169, 37),
(170, 37),
(169, 38),
(170, 38);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tamanhos`
--

CREATE TABLE IF NOT EXISTS `tamanhos` (
`idTamanhao` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `tamanhos`
--

INSERT INTO `tamanhos` (`idTamanhao`, `titulo`) VALUES
(25, '33'),
(26, '34'),
(27, '35'),
(28, '36'),
(29, '37'),
(30, '38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cores`
--
ALTER TABLE `cores`
 ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
 ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `produtos_cores`
--
ALTER TABLE `produtos_cores`
 ADD KEY `id_cor` (`id_cor`), ADD KEY `id_produto` (`id_produto`);

--
-- Indexes for table `tamanhos`
--
ALTER TABLE `tamanhos`
 ADD PRIMARY KEY (`idTamanhao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cores`
--
ALTER TABLE `cores`
MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=239;
--
-- AUTO_INCREMENT for table `tamanhos`
--
ALTER TABLE `tamanhos`
MODIFY `idTamanhao` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
