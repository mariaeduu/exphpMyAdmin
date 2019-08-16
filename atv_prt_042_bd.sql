-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 16-Ago-2019 às 11:22
-- Versão do servidor: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.14-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atv_prt_042_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste1`
--

CREATE TABLE `teste1` (
  `testID` int(4) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `idade` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `teste1`
--

INSERT INTO `teste1` (`testID`, `nome`, `idade`) VALUES
(1, 'Maria', 16),
(2, 'Yasmin', 12),
(3, 'a', 2),
(4, 'f', 2),
(5, 'f', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teste1`
--
ALTER TABLE `teste1`
  ADD PRIMARY KEY (`testID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teste1`
--
ALTER TABLE `teste1`
  MODIFY `testID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
