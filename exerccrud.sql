-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 11-Nov-2021 às 18:33
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `exerccrud`
--
CREATE DATABASE IF NOT EXISTS `exerccrud` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `exerccrud`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet`
--

CREATE TABLE IF NOT EXISTS `pet` (
  `registro` char(5) NOT NULL,
  `nomepet` varchar(30) NOT NULL,
  `especie` varchar(30) NOT NULL,
  `raca` varchar(30) NOT NULL,
  `corpredominante` varchar(30) NOT NULL,
  `nascimento` varchar(10) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  PRIMARY KEY (`registro`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pet`
--

INSERT INTO `pet` (`registro`, `nomepet`, `especie`, `raca`, `corpredominante`, `nascimento`, `sexo`) VALUES
('10002', 'Paola', 'Gato', 'Persa', 'Branco', '21/02/2018', 'Femea'),
('10003', 'Marrie', 'Gato', 'Siames', 'Marrom', '01/03/2017', 'Femea'),
('10004', 'Clark', 'Cachorro', 'Buldogue', 'Preto', '14/04/2021', 'Macho'),
('10005', 'Marley', 'Cachorro', 'Husky Siberiano', 'Cinza Escuro', '30/05/2016', 'Macho'),
('10001', 'Max', 'Cachorro', 'Golden', 'Bege', '12/11/2019', 'Macho');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
