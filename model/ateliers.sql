-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2017 at 01:57 PM
-- Server version: 5.7.18-0ubuntu0.17.04.1
-- PHP Version: 7.0.18-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `place_des_cliches`
--

-- --------------------------------------------------------

--
-- Table structure for table `ateliers`
--

CREATE TABLE `ateliers` (
  `idAtelier` int(11) NOT NULL,
  `atelier` text NOT NULL,
  `activity` text NOT NULL,
  `goals` text NOT NULL,
  `duration` text NOT NULL,
  `date_atelier` datetime NOT NULL,
  `place` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ateliers`
--

INSERT INTO `ateliers` (`idAtelier`, `atelier`, `activity`, `goals`, `duration`, `date_atelier`, `place`) VALUES
(1, 'atelier d\'introduction', 'Donner à chaque élève 2 post-it de couleurs\r\n\r\ndifférentes. Ils ont 1 minute top chrono pour écrire 2/3\r\n\r\nmots qui leur passe par la tête quand on dit le mot\r\n\r\nfemme sur un post-it et pareil quand on dit le mot\r\n\r\nhomme sur l\'autre post-it. Récupérez les post-it et\r\n\r\nlisez-en quelques un à voix haute. Les faire réagir\r\n\r\ndessus.', 'Ce que l\'on cherche ici, c\'est la SPONTANÉITÉ des\r\n\r\nélèves. Ils ne savent pas vraiment de quoi l\'atelier\r\n\r\nva parler, ils n\'ont pas le temps de réfléchir. Le but\r\n\r\net de faire ressortir les stéréotypes qu\'ils peuvent\r\n\r\navoir -> l\'atelier se base ainsi sur leurs propres\r\n\r\nstéréotypes.', '1 heure', '2017-06-28 10:00:00', 'Lycée');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ateliers`
--
ALTER TABLE `ateliers`
  ADD PRIMARY KEY (`idAtelier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ateliers`
--
ALTER TABLE `ateliers`
  MODIFY `idAtelier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
