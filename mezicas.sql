-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Úte 15. lis 2016, 18:03
-- Verze serveru: 5.5.50-0ubuntu0.14.04.1
-- Verze PHP: 5.5.9-1ubuntu4.17

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
-- Struktura tabulky `kategorie`
--

CREATE TABLE IF NOT EXISTS `kategorie` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `long` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `short` varchar(15) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=7 ;

--
-- Vypisuji data pro tabulku `kategorie`
--

INSERT INTO `kategorie` (`id`, `long`, `short`) VALUES
(1, 'Žáci A', 'ŽCA'),
(2, 'Žákyně A', 'ŽKA'),
(3, 'Žáci B', 'ŽCB'),
(4, 'Žákyně B', 'ŽKB'),
(5, 'Žáci C', 'ŽCC'),
(6, 'Žákyně C', 'ŽKC');

-- --------------------------------------------------------

--
-- Struktura tabulky `mezicas`
--

CREATE TABLE IF NOT EXISTS `mezicas` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `startovni_listina_id` int(15) NOT NULL,
  `timestamp` int(20) NOT NULL,
  `tracktime` int(20) NOT NULL,
  `cisloMezicasu` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabulky `startovni_listina`
--

CREATE TABLE IF NOT EXISTS `startovni_listina` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `startovniCislo` int(15) NOT NULL,
  `casStartu` int(20) NOT NULL,
  `jmeno` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `kategorie` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabulky `strelba`
--

CREATE TABLE IF NOT EXISTS `strelba` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `startovni_listina_id` int(12) NOT NULL,
  `cislo_strelby` int(11) NOT NULL,
  `timestamp` int(20) NOT NULL,
  `a` tinyint(1) NOT NULL DEFAULT '0',
  `b` tinyint(1) NOT NULL DEFAULT '0',
  `c` tinyint(1) NOT NULL DEFAULT '0',
  `d` tinyint(1) NOT NULL DEFAULT '0',
  `e` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=11 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
