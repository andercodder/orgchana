-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 26-Jan-2018 às 17:07
-- Versão do servidor: 5.5.58-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `parque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

CREATE TABLE IF NOT EXISTS `carros` (
`id` int(11) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `estado` text NOT NULL,
  `fornecedor` text NOT NULL,
  `matricula` text NOT NULL,
  `marca` text NOT NULL,
  `modelo` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`id`, `cor`, `estado`, `fornecedor`, `matricula`, `marca`, `modelo`) VALUES
(1, 'vermelho', 'ocupado', 'teste', 'ld-52-51', 'sunny', 'cx'),
(2, 'blue', 'ocupado', 'chana', '', '', ''),
(3, 'preta', 'ocupado', 'andre', 'ld-52-12', 'i10', '2.0'),
(4, 'purple', 'livre', '', '', '', ''),
(5, '', 'livre', '', '', '', ''),
(6, '', 'livre', '', '', '', ''),
(7, '', 'livre', '', '', '', ''),
(8, '', 'livre', '', '', '', ''),
(9, '', 'livre', '', '', '', ''),
(10, '', 'livre', '', '', '', ''),
(11, '', 'livre', '', '', '', ''),
(12, '', 'livre', '', '', '', ''),
(13, '', 'livre', '', '', '', ''),
(14, '', 'livre', '', '', '', ''),
(15, '', 'livre', '', '', '', ''),
(16, '', 'livre', '', '', '', ''),
(17, '', 'livre', '', '', '', ''),
(18, '', 'livre', '', '', '', ''),
(19, '', 'livre', '', '', '', ''),
(20, '', 'livre', '', '', '', ''),
(21, '', 'livre', '', '', '', ''),
(22, '', 'livre', '', '', '', ''),
(23, '', 'livre', '', '', '', ''),
(24, '', 'livre', '', '', '', ''),
(25, '', 'livre', '', '', '', ''),
(26, '', 'livre', '', '', '', ''),
(27, '', 'livre', '', '', '', ''),
(28, '', 'livre', '', '', '', ''),
(29, '', 'livre', '', '', '', ''),
(30, '', 'livre', '', '', '', ''),
(31, '', 'livre', '', '', '', ''),
(32, '', 'livre', '', '', '', ''),
(33, '', 'livre', '', '', '', ''),
(34, '', 'livre', '', '', '', ''),
(35, '', 'livre', '', '', '', ''),
(36, '', 'livre', '', '', '', ''),
(37, '', 'livre', '', '', '', ''),
(38, '', 'livre', '', '', '', ''),
(39, '', 'livre', '', '', '', ''),
(40, '', 'livre', '', '', '', ''),
(41, '', 'livre', '', '', '', ''),
(42, '', 'livre', '', '', '', ''),
(43, '', 'livre', '', '', '', ''),
(44, '', 'livre', '', '', '', ''),
(45, '', 'livre', '', '', '', ''),
(46, '', 'livre', '', '', '', ''),
(47, '', 'livre', '', '', '', ''),
(48, '', 'livre', '', '', '', ''),
(49, '', 'livre', '', '', '', ''),
(50, '', 'livre', '', '', '', ''),
(51, '', 'livre', '', '', '', ''),
(52, '', 'livre', '', '', '', ''),
(53, '', 'livre', '', '', '', ''),
(54, '', 'livre', '', '', '', ''),
(55, '', 'livre', '', '', '', ''),
(56, '', 'livre', '', '', '', ''),
(57, '', 'livre', '', '', '', ''),
(58, '', 'livre', '', '', '', ''),
(59, '', 'livre', '', '', '', ''),
(60, '', 'livre', '', '', '', ''),
(61, '', 'livre', '', '', '', ''),
(62, '', 'livre', '', '', '', ''),
(63, '', 'livre', '', '', '', ''),
(64, '', 'livre', '', '', '', ''),
(65, '', 'livre', '', '', '', ''),
(66, '', 'livre', '', '', '', ''),
(67, '', 'livre', '', '', '', ''),
(68, '', 'livre', '', '', '', ''),
(69, '', 'livre', '', '', '', ''),
(70, '', 'livre', '', '', '', ''),
(71, '', 'livre', '', '', '', ''),
(72, '', 'livre', '', '', '', ''),
(73, '', 'livre', '', '', '', ''),
(74, '', 'livre', '', '', '', ''),
(75, '', 'livre', '', '', '', ''),
(76, '', 'livre', '', '', '', ''),
(77, '', 'livre', '', '', '', ''),
(78, '', 'livre', '', '', '', ''),
(79, '', 'livre', '', '', '', ''),
(80, '', 'livre', '', '', '', ''),
(81, '', 'livre', '', '', '', ''),
(82, '', 'livre', '', '', '', ''),
(83, '', 'livre', '', '', '', ''),
(84, '', 'livre', '', '', '', ''),
(85, '', 'livre', '', '', '', ''),
(86, '', 'livre', '', '', '', ''),
(87, '', 'livre', '', '', '', ''),
(88, '', 'livre', '', '', '', ''),
(89, '', 'livre', '', '', '', ''),
(90, '', 'livre', '', '', '', ''),
(91, '', 'livre', '', '', '', ''),
(92, '', 'livre', '', '', '', ''),
(93, '', 'livre', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carros`
--
ALTER TABLE `carros`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carros`
--
ALTER TABLE `carros`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=94;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
