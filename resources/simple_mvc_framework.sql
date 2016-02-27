-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Fev-2016 às 13:42
-- Versão do servidor: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simple_mvc_framework`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
`id_contato` mediumint(8) unsigned NOT NULL,
  `nome` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_contato`, `nome`) VALUES
(1, 'Contato #1'),
(2, 'Contato #2'),
(3, 'Contato #3'),
(4, 'Contato #4'),
(5, 'Contato #5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato_email`
--

CREATE TABLE IF NOT EXISTS `contato_email` (
`id_contato_email` mediumint(8) unsigned NOT NULL,
  `id_contato_email_tipo` tinyint(3) unsigned NOT NULL,
  `id_contato` mediumint(8) unsigned NOT NULL,
  `email` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato_email`
--

INSERT INTO `contato_email` (`id_contato_email`, `id_contato_email_tipo`, `id_contato`, `email`) VALUES
(1, 1, 1, 'contato1_email1@exemplo.com'),
(2, 1, 2, 'contato2_email1@exemplo.com'),
(3, 2, 2, 'contato2_email2@exemplo.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato_email_tipo`
--

CREATE TABLE IF NOT EXISTS `contato_email_tipo` (
`id_contato_email_tipo` tinyint(3) unsigned NOT NULL,
  `nome` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato_email_tipo`
--

INSERT INTO `contato_email_tipo` (`id_contato_email_tipo`, `nome`) VALUES
(1, 'Pessoal'),
(2, 'Trabalho');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato_telefone`
--

CREATE TABLE IF NOT EXISTS `contato_telefone` (
`id_contato_telefone` mediumint(8) unsigned NOT NULL,
  `id_contato_telefone_tipo` tinyint(3) unsigned NOT NULL,
  `id_contato` mediumint(8) unsigned NOT NULL,
  `ddd` char(2) NOT NULL,
  `telefone` varchar(9) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato_telefone`
--

INSERT INTO `contato_telefone` (`id_contato_telefone`, `id_contato_telefone_tipo`, `id_contato`, `ddd`, `telefone`) VALUES
(1, 1, 1, '21', '911111111'),
(2, 3, 3, '11', '12345678'),
(3, 1, 4, '11', '944444444'),
(4, 2, 4, '11', '22222222'),
(5, 3, 4, '11', '44444444');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato_telefone_tipo`
--

CREATE TABLE IF NOT EXISTS `contato_telefone_tipo` (
`id_contato_telefone_tipo` tinyint(3) unsigned NOT NULL,
  `nome` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato_telefone_tipo`
--

INSERT INTO `contato_telefone_tipo` (`id_contato_telefone_tipo`, `nome`) VALUES
(1, 'Celular'),
(2, 'Residencial'),
(3, 'Trabalho');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
 ADD PRIMARY KEY (`id_contato`);

--
-- Indexes for table `contato_email`
--
ALTER TABLE `contato_email`
 ADD PRIMARY KEY (`id_contato_email`), ADD KEY `id_contato` (`id_contato`), ADD KEY `id_contato_email_tipo` (`id_contato_email_tipo`);

--
-- Indexes for table `contato_email_tipo`
--
ALTER TABLE `contato_email_tipo`
 ADD PRIMARY KEY (`id_contato_email_tipo`);

--
-- Indexes for table `contato_telefone`
--
ALTER TABLE `contato_telefone`
 ADD PRIMARY KEY (`id_contato_telefone`), ADD KEY `id_contato` (`id_contato`), ADD KEY `id_contato_telefone_tipo` (`id_contato_telefone_tipo`);

--
-- Indexes for table `contato_telefone_tipo`
--
ALTER TABLE `contato_telefone_tipo`
 ADD PRIMARY KEY (`id_contato_telefone_tipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
MODIFY `id_contato` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contato_email`
--
ALTER TABLE `contato_email`
MODIFY `id_contato_email` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contato_email_tipo`
--
ALTER TABLE `contato_email_tipo`
MODIFY `id_contato_email_tipo` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contato_telefone`
--
ALTER TABLE `contato_telefone`
MODIFY `id_contato_telefone` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contato_telefone_tipo`
--
ALTER TABLE `contato_telefone_tipo`
MODIFY `id_contato_telefone_tipo` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contato_email`
--
ALTER TABLE `contato_email`
ADD CONSTRAINT `contato_email_ibfk_1` FOREIGN KEY (`id_contato`) REFERENCES `contato` (`id_contato`) ON UPDATE CASCADE,
ADD CONSTRAINT `contato_email_ibfk_2` FOREIGN KEY (`id_contato_email_tipo`) REFERENCES `contato_email_tipo` (`id_contato_email_tipo`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `contato_telefone`
--
ALTER TABLE `contato_telefone`
ADD CONSTRAINT `contato_telefone_ibfk_1` FOREIGN KEY (`id_contato`) REFERENCES `contato` (`id_contato`) ON UPDATE CASCADE,
ADD CONSTRAINT `contato_telefone_ibfk_2` FOREIGN KEY (`id_contato_telefone_tipo`) REFERENCES `contato_telefone_tipo` (`id_contato_telefone_tipo`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
