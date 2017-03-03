-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
<<<<<<< HEAD
-- Vygenerováno: Úte 15. lis 2016, 18:03
-- Verze serveru: 5.5.50-0ubuntu0.14.04.1
-- Verze PHP: 5.5.9-1ubuntu4.17
=======
-- Vygenerováno: Úte 27. pro 2016, 19:11
-- Verze serveru: 5.5.53-0ubuntu0.14.04.1
-- Verze PHP: 5.5.9-1ubuntu4.20
>>>>>>> f50cdf160131a3e64e8b111c3306d33e0907703e

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
<<<<<<< HEAD
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=1 ;
=======
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=11 ;

--
-- Vypisuji data pro tabulku `mezicas`
--

INSERT INTO `mezicas` (`id`, `startovni_listina_id`, `timestamp`, `tracktime`, `cisloMezicasu`) VALUES
(1, 1, 1481211105, 25275, 1),
(2, 51, 1481211106, 25306, 1),
(3, 52, 1481211108, 25258, 1),
(4, 1, 1481211108, 25278, 2),
(5, 2, 1481211110, 25250, 1),
(6, 3, 1481211111, 25221, 1),
(7, 53, 1481211112, 25212, 1),
(8, 51, 1481211114, 25314, 2),
(9, 1, 1481211115, 25285, 3),
(10, 52, 1481211116, 25266, 2);
>>>>>>> f50cdf160131a3e64e8b111c3306d33e0907703e

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
<<<<<<< HEAD
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------
=======
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=102 ;
>>>>>>> f50cdf160131a3e64e8b111c3306d33e0907703e

--
-- Struktura tabulky `strelba`
--

<<<<<<< HEAD
=======
INSERT INTO `startovni_listina` (`id`, `startovniCislo`, `casStartu`, `jmeno`, `kategorie`) VALUES
(1, 1, 1481185830, '', 1),
(2, 2, 1481185860, '', 1),
(3, 3, 1481185890, '', 1),
(4, 4, 1481185920, '', 1),
(5, 5, 1481185950, '', 1),
(6, 6, 1481185980, '', 1),
(7, 7, 1481186010, '', 1),
(8, 8, 1481186040, '', 1),
(9, 9, 1481186070, '', 1),
(10, 10, 1481186100, '', 1),
(11, 11, 1481186130, '', 1),
(12, 12, 1481186160, '', 1),
(13, 13, 1481186190, '', 1),
(14, 14, 1481186220, '', 1),
(15, 15, 1481186250, '', 1),
(16, 16, 1481186280, '', 1),
(17, 17, 1481186310, '', 1),
(18, 18, 1481186340, '', 1),
(19, 19, 1481186370, '', 1),
(20, 20, 1481186400, '', 1),
(21, 21, 1481186430, '', 1),
(22, 22, 1481186460, '', 1),
(23, 23, 1481186490, '', 1),
(24, 24, 1481186520, '', 1),
(25, 25, 1481186550, '', 1),
(26, 26, 1481186580, '', 1),
(27, 27, 1481186610, '', 1),
(28, 28, 1481186640, '', 1),
(29, 29, 1481186670, '', 1),
(30, 30, 1481186700, '', 1),
(31, 31, 1481186730, '', 1),
(32, 32, 1481186760, '', 1),
(33, 33, 1481186790, '', 1),
(34, 34, 1481186820, '', 1),
(35, 35, 1481186850, '', 1),
(36, 36, 1481186880, '', 1),
(37, 37, 1481186910, '', 1),
(38, 38, 1481186940, '', 1),
(39, 39, 1481186970, '', 1),
(40, 40, 1481187000, '', 1),
(41, 41, 1481187030, '', 1),
(42, 42, 1481187060, '', 1),
(43, 43, 1481187090, '', 1),
(44, 44, 1481187120, '', 1),
(45, 45, 1481187150, '', 1),
(46, 46, 1481187180, '', 1),
(47, 47, 1481187210, '', 1),
(48, 48, 1481187240, '', 1),
(49, 49, 1481187270, '', 1),
(50, 50, 1481187300, '', 1),
(51, 100, 1481185800, '', 3),
(52, 101, 1481185850, '', 3),
(53, 102, 1481185900, '', 3),
(54, 103, 1481185950, '', 3),
(55, 104, 1481186000, '', 3),
(56, 105, 1481186050, '', 3),
(57, 106, 1481186100, '', 3),
(58, 107, 1481186150, '', 3),
(59, 108, 1481186200, '', 3),
(60, 109, 1481186250, '', 3),
(61, 110, 1481186300, '', 3),
(62, 111, 1481186350, '', 3),
(63, 112, 1481186400, '', 3),
(64, 113, 1481186450, '', 3),
(65, 114, 1481186500, '', 3),
(66, 115, 1481186550, '', 3),
(67, 116, 1481186600, '', 3),
(68, 117, 1481186650, '', 3),
(69, 118, 1481186700, '', 3),
(70, 119, 1481186750, '', 3),
(71, 120, 1481186800, '', 3),
(72, 121, 1481186850, '', 3),
(73, 122, 1481186900, '', 3),
(74, 123, 1481186950, '', 3),
(75, 124, 1481187000, '', 3),
(76, 125, 1481187050, '', 3),
(77, 126, 1481187100, '', 3),
(78, 127, 1481187150, '', 3),
(79, 128, 1481187200, '', 3),
(80, 129, 1481187250, '', 3),
(81, 130, 1481187300, '', 3),
(82, 131, 1481187350, '', 3),
(83, 132, 1481187400, '', 3),
(84, 133, 1481187450, '', 3),
(85, 134, 1481187500, '', 3),
(86, 135, 1481187550, '', 3),
(87, 136, 1481187600, '', 3),
(88, 137, 1481187650, '', 3),
(89, 138, 1481187700, '', 3),
(90, 139, 1481187750, '', 3),
(91, 140, 1481187800, '', 3),
(92, 141, 1481187850, '', 3),
(93, 142, 1481187900, '', 3),
(94, 143, 1481187950, '', 3),
(95, 144, 1481188000, '', 3),
(96, 145, 1481188050, '', 3),
(97, 146, 1481188100, '', 3),
(98, 147, 1481188150, '', 3),
(99, 148, 1481188200, '', 3),
(100, 149, 1481188250, '', 3),
(101, 150, 1481188300, '', 3);

-- --------------------------------------------------------

--
-- Struktura tabulky `strelba`
--

>>>>>>> f50cdf160131a3e64e8b111c3306d33e0907703e
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
<<<<<<< HEAD
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=11 ;
=======
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=40 ;
>>>>>>> f50cdf160131a3e64e8b111c3306d33e0907703e

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
