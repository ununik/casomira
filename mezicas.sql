-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Počítač: 127.0.0.1
-- Vygenerováno: Pon 12. zář 2016, 07:15
-- Verze serveru: 5.5.34
-- Verze PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `mezicas`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `startovnilistina`
--

CREATE TABLE IF NOT EXISTS `startovnilistina` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `startovniCislo` int(15) NOT NULL,
  `casStartu` int(20) NOT NULL,
  `jmeno` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=116 ;

--
-- Vypisuji data pro tabulku `startovnilistina`
--

INSERT INTO `startovnilistina` (`id`, `startovniCislo`, `casStartu`, `jmeno`) VALUES
(103, 3, 1473492690, ''),
(104, 4, 1473492720, ''),
(105, 5, 1473492750, ''),
(107, 7, 1473492810, ''),
(108, 8, 1473492840, ''),
(109, 9, 1473492870, ''),
(110, 10, 1473492900, ''),
(112, 12, 1473492960, ''),
(113, 13, 1473492990, ''),
(114, 14, 1473493020, ''),
(115, 15, 1473493050, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
