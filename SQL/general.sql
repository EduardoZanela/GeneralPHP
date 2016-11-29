-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Nov-2016 às 11:33
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `general`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `general_game`
--

CREATE TABLE `general_game` (
  `id` int(11) NOT NULL,
  `playerName` varchar(200) COLLATE utf8_bin NOT NULL,
  `game` int(11) NOT NULL,
  `payerSummation` int(11) NOT NULL,
  `dice` varchar(20) COLLATE utf8_bin NOT NULL,
  `matchId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `general_game`
--

INSERT INTO `general_game` (`id`, `playerName`, `game`, `payerSummation`, `dice`, `matchId`) VALUES
(54, 'Computer', 1, 2, '1,1,2,4,6', 0),
(55, 'Eduardo', 1, 12, '1,3,3,6,6', 0),
(56, 'Computer', 2, 12, '1,1,2,6,6', 0),
(57, 'Eduardo', 2, 4, '1,1,2,2,3', 0),
(58, 'Computer', 3, 10, '1,3,3,5,5', 0),
(59, 'Eduardo', 3, 12, '1,4,5,6,6', 0),
(60, 'Computer', 4, 12, '2,5,5,6,6', 0),
(61, 'Eduardo', 4, 22, '1,3,6,6,6', 0),
(62, 'Computer', 5, 6, '1,1,3,3,5', 0),
(63, 'Eduardo', 5, 2, '1,1,3,5,6', 0),
(64, 'Computer', 6, 6, '1,3,3,4,5', 0),
(65, 'Eduardo', 6, 12, '2,4,5,6,6', 0),
(66, 'Computer', 7, 12, '1,3,4,6,6', 0),
(67, 'Eduardo', 7, 12, '2,4,5,6,6', 0),
(68, 'Computer', 8, 12, '1,2,2,6,6', 0),
(69, 'Eduardo', 8, 8, '1,1,4,4,5', 0),
(70, 'Computer', 9, 8, '2,3,3,4,4', 0),
(71, 'Eduardo', 9, 10, '3,4,4,5,5', 0),
(72, 'Computer', 10, 25, '3,4,6,6,6', 0),
(73, 'Eduardo', 10, 0, '1,2,3,4,6', 0),
(74, 'Computer', 1, 23, '2,3,6,6,6', 1),
(75, 'Eduardo', 1, 8, '1,2,4,4,5', 1),
(76, 'Computer', 2, 6, '2,3,3,4,6', 1),
(77, 'Eduardo', 2, 10, '1,2,4,5,5', 1),
(78, 'Computer', 3, 12, '2,3,5,6,6', 1),
(79, 'Eduardo', 3, 8, '3,4,4,5,6', 1),
(80, 'Computer', 4, 2, '1,1,2,4,6', 1),
(81, 'Eduardo', 4, 10, '1,2,5,5,6', 1),
(82, 'Computer', 5, 8, '1,1,1,2,3', 1),
(83, 'Eduardo', 5, 14, '1,3,3,3,4', 1),
(84, 'Computer', 6, 17, '3,3,3,4,4', 1),
(85, 'Eduardo', 6, 10, '1,4,5,5,6', 1),
(86, 'Computer', 7, 16, '2,2,2,5,5', 1),
(87, 'Eduardo', 7, 12, '3,3,5,6,6', 1),
(88, 'Computer', 8, 2, '1,1,3,4,5', 1),
(89, 'Eduardo', 8, 0, '1,3,4,5,6', 1),
(90, 'Computer', 9, 10, '2,2,5,5,6', 1),
(91, 'Eduardo', 9, 12, '1,2,4,6,6', 1),
(92, 'Computer', 10, 12, '1,5,5,6,6', 1),
(93, 'Eduardo', 10, 10, '1,2,3,5,5', 1),
(94, 'Computer', 1, 2, '1,1,3,4,5', 2),
(95, 'Alvadir', 1, 8, '2,3,4,4,6', 2),
(96, 'Computer', 2, 2, '1,1,2,4,5', 2),
(97, 'Alvadir', 2, 16, '2,2,2,4,6', 2),
(98, 'Computer', 3, 12, '1,1,5,6,6', 2),
(99, 'Alvadir', 3, 4, '2,2,3,5,6', 2),
(100, 'Computer', 4, 17, '2,3,4,4,4', 2),
(101, 'Alvadir', 4, 2, '1,1,2,4,6', 2),
(102, 'Computer', 5, 21, '3,4,4,4,6', 2),
(103, 'Alvadir', 5, 6, '1,3,3,5,6', 2),
(104, 'Computer', 6, 12, '3,4,5,6,6', 2),
(105, 'Alvadir', 6, 6, '2,3,3,5,6', 2),
(106, 'Computer', 7, 20, '3,4,4,4,5', 2),
(107, 'Computer', 1, 10, '1,1,2,5,5', 3),
(108, 'David', 1, 0, '1,2,4,5,6', 3),
(109, 'Computer', 2, 17, '3,3,3,3,5', 3),
(110, 'Computer', 1, 40, '1,2,3,4,5', 4),
(111, 'Eliseu', 1, 12, '1,2,4,6,6', 4),
(112, 'Computer', 2, 6, '1,2,3,3,4', 4),
(113, 'Eliseu', 2, 12, '1,1,1,4,5', 4),
(114, 'Computer', 3, 2, '1,1,2,3,6', 4),
(115, 'Eliseu', 3, 2, '1,1,2,5,6', 4),
(116, 'Computer', 4, 0, '1,2,3,4,6', 4),
(117, 'Eliseu', 4, 8, '1,3,4,4,6', 4),
(118, 'Computer', 5, 0, '1,3,4,5,6', 4),
(119, 'Eliseu', 5, 10, '1,3,5,5,6', 4),
(120, 'Computer', 6, 6, '1,3,3,5,6', 4),
(121, 'Eliseu', 6, 6, '2,3,3,4,5', 4),
(122, 'Computer', 7, 12, '3,4,5,6,6', 4),
(123, 'Eliseu', 7, 12, '2,4,4,6,6', 4),
(124, 'Computer', 8, 22, '1,5,5,5,6', 4),
(125, 'Eliseu', 8, 6, '1,2,3,3,4', 4),
(126, 'Computer', 9, 17, '3,3,3,3,5', 4),
(127, 'Eliseu', 9, 40, '1,2,3,4,5', 4),
(128, 'Computer', 10, 8, '1,1,4,4,5', 4),
(129, 'Eliseu', 10, 2, '1,1,2,3,4', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `general_game`
--
ALTER TABLE `general_game`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `general_game`
--
ALTER TABLE `general_game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
