-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Dez-2014 às 03:08
-- Versão do servidor: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bds`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
`codCargo` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`codCargo`, `nome`) VALUES
(1, 'ATENDENTE'),
(2, 'RECEPCIONISTA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE IF NOT EXISTS `cidades` (
`codCidade` int(11) NOT NULL,
  `codUf` int(11) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`codCidade`, `codUf`, `nome`) VALUES
(1, 2, 'Porto alegre'),
(2, 2, 'Canoas'),
(3, 2, 'Vimão'),
(4, 2, 'Guaiba');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE IF NOT EXISTS `funcionarios` (
`codFunc` int(11) NOT NULL,
  `codCidade` int(11) DEFAULT NULL,
  `codCargo` int(11) DEFAULT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`codFunc`, `codCidade`, `codCargo`, `nome`, `rg`, `cpf`) VALUES
(1, 1, 0, 'fds', 'fsd', 'sfd'),
(2, 1, 0, 'NEIMAR', 'JOTA SILVA', 'GERAMENAS'),
(3, 1, 0, 'JURRMA ', '134564564', '12'),
(4, 1, 0, 'CASTRO ', '12548855', '45464'),
(5, 2, 0, 'CALOTA@d.com', '12548855', '124554'),
(6, 0, 2, 'CASTRO ', '145456', '0041549104567'),
(7, 0, 2, 'JURRMA ', 'UTY', 'TUT');

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveisusuarios`
--

CREATE TABLE IF NOT EXISTS `niveisusuarios` (
`codNivelUsuario` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `obs` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `niveisusuarios`
--

INSERT INTO `niveisusuarios` (`codNivelUsuario`, `nome`, `obs`) VALUES
(1, 'PROPRIETARIO', NULL),
(2, 'DIREITOR', NULL),
(3, 'CHECHE DE SETOR', NULL),
(4, 'USUARIO COMUM', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ufs`
--

CREATE TABLE IF NOT EXISTS `ufs` (
`codUf` int(11) NOT NULL,
  `uf` varchar(10) DEFAULT NULL,
  `estado` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `ufs`
--

INSERT INTO `ufs` (`codUf`, `uf`, `estado`) VALUES
(1, 'RS', 'RIO GRANDE DO SUL'),
(2, 'SC', 'SANTA CATARINA'),
(3, 'PR', 'PARANA'),
(4, 'SP', 'SÃO PAULO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`codUsuario` int(11) NOT NULL,
  `codFunc` int(11) DEFAULT NULL,
  `codNivel` int(11) DEFAULT NULL,
  `userNome` varchar(50) NOT NULL,
  `senha` varchar(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`codUsuario`, `codFunc`, `codNivel`, `userNome`, `senha`) VALUES
(47, NULL, 10, 'neimar', 'neimar'),
(48, NULL, 10, 'karina', 'karina'),
(49, NULL, 10, 'carlos', 'carlos'),
(50, NULL, 10, 'leandro', 'leandro'),
(53, NULL, 3, 'PEDRO', 'PEDRO'),
(54, NULL, 2, 'RAFA', 'RAFA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
 ADD PRIMARY KEY (`codCargo`);

--
-- Indexes for table `cidades`
--
ALTER TABLE `cidades`
 ADD PRIMARY KEY (`codCidade`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
 ADD PRIMARY KEY (`codFunc`);

--
-- Indexes for table `niveisusuarios`
--
ALTER TABLE `niveisusuarios`
 ADD PRIMARY KEY (`codNivelUsuario`);

--
-- Indexes for table `ufs`
--
ALTER TABLE `ufs`
 ADD PRIMARY KEY (`codUf`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`codUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
MODIFY `codCargo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cidades`
--
ALTER TABLE `cidades`
MODIFY `codCidade` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
MODIFY `codFunc` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `niveisusuarios`
--
ALTER TABLE `niveisusuarios`
MODIFY `codNivelUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ufs`
--
ALTER TABLE `ufs`
MODIFY `codUf` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `codUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
