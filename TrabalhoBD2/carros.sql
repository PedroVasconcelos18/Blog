-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Mar-2019 às 11:29
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `like`
--

CREATE TABLE `like` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `tema_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `mesagem` text NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `tema_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tema`
--

CREATE TABLE `tema` (
  `id` int(11) NOT NULL,
  `assunto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `foto`, `senha`, `email`) VALUES
(1, 'Usuario', 'foto.png', '81dc9bdb52d04dc20036dbd8313ed055', 'usuario@gmail.com.br');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `tema_id` (`tema_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `tema_id` (`tema_id`);

--
-- Indexes for table `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tema`
--
ALTER TABLE `tema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `like_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `like_ibfk_2` FOREIGN KEY (`tema_id`) REFERENCES `tema` (`id`);

--
-- Limitadores para a tabela `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`tema_id`) REFERENCES `tema` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
