-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Dez-2017 às 14:14
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2indio1-loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `nome_cient` varchar(70) CHARACTER SET utf16 NOT NULL,
  `categoria` varchar(32) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `estoque` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`codigo`, `nome`, `nome_cient`, `categoria`, `preco`, `estoque`) VALUES
(1, 'Peixe-palhaço', 'Amphiprioninae', 'Peixe', '20.00', 300),
(2, 'Barrigudinho', 'Poecilia reticulata', 'Peixe', '15.00', 200),
(3, 'Beta', 'Betta splendens', 'Peixe', '8.00', 3000),
(4, 'Peixe-lua', 'Pedalion capensis Castelnau', 'Peixe', '10.00', 100),
(5, 'Estrela-do-mar', ' Asteroidea', 'Asteroidea', '1.00', 300),
(6, 'Eeixe-leão', 'Pterois', 'Peixe', '60.00', 50),
(7, 'Neon', 'Paracheirodon innesi', 'Peixe', '15.00', 568),
(8, 'Fantail', 'Carassius auratus', 'Peixe', '10.00', 123),
(9, 'Caridina', 'Caridina dennerli', 'Asteroidea', '25.00', 432),
(16, 'Baiacu', 'Diodon hystrix', 'Peixe', '60.00', 540),
(17, 'Tartaruga', 'Trachemys dorbigni', 'Reptil', '100.00', 20),
(18, 'Tang-azul', 'Paracanthurus hepatus', 'Peixe', '75.00', 15),
(19, 'Arraia', 'Batoidea', 'Cephalopoda', '150.00', 5),
(20, 'Lula', 'Teuthida', 'Cephalopoda', '80.00', 40),
(21, 'Polvo', 'Octopoda', 'Cephalopoda', '100.00', 10),
(22, 'Nishikigoi', 'Cyprinus carpio', 'Peixe', '200.00', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
