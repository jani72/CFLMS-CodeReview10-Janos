-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Jul 2020 um 16:53
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_janos_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_janos_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_janos_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `library`
--

CREATE TABLE `library` (
  `ISBN` int(11) NOT NULL,
  `publisher_name` varchar(55) DEFAULT NULL,
  `publisher_adress` varchar(111) DEFAULT NULL,
  `publish` date DEFAULT NULL,
  `publisher_size` varchar(55) DEFAULT NULL,
  `artist` varchar(55) DEFAULT NULL,
  `description` varchar(222) DEFAULT NULL,
  `teaser` varchar(111) DEFAULT NULL,
  `type` varchar(55) DEFAULT NULL,
  `active` varchar(55) DEFAULT NULL,
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `library`
--

INSERT INTO `library` (`ISBN`, `publisher_name`, `publisher_adress`, `publish`, `publisher_size`, `artist`, `description`, `teaser`, `type`, `active`, `name`) VALUES
(0, 'Various Artists', 'Kefergasse 70 4845 Grünau', '2019-07-01', '20', 'Robbie Williams ', 'bla bla bla', NULL, 'CD', 'yes', 'Best Of'),
(1, 'Various Artists', 'Kefergasse 70 4845 Grünau', '2019-07-01', '20', 'Helene Fischer ', 'bla bla bla', NULL, 'CD', 'yes', 'Best Of'),
(2, 'Various Artists', 'Kefergasse 70 4845 Grünau', '2019-01-01', '20', 'Andreas Gabalier', 'bla bla bla', NULL, 'CD', 'yes', 'Hulapalu'),
(3, 'Various Artists', 'Kefergasse 70 4845 Grünau', '2019-01-01', '20', 'Andrea Berg', 'bla bla bla', NULL, 'CD', 'yes', 'Best Of'),
(4, 'Ueberreuter', 'Johannesgasse 12 1010 Wien', '2019-01-01', '50', 'Robert Koch', 'bla bla bla', NULL, 'Book', 'yes', 'PHP for Dummies'),
(5, 'Ueberreuter', 'Johannesgasse 12 1010 Wien', '2019-01-01', '50', 'maria Teufel', 'bla bla bla', NULL, 'Book', 'yes', 'Leichte Küche'),
(6, 'Ueberreuter', 'Johannesgasse 12 1010 Wien', '2019-01-01', '50', 'Anita Bauer', 'bla bla bla', NULL, 'Book', 'yes', 'PC Basics'),
(7, 'Koch ', 'Innsbruckerstrasse 50 5224 Hall in Tirol', '2018-08-06', '45', 'Semino Rossi', 'bla bla bla', NULL, 'DVD', 'yes', 'Ein Abend mit Semino'),
(8, 'Koch ', 'Innsbruckerstrasse 50 5224 Hall in Tirol', '2018-08-06', '45', 'Tom Cruise', 'bla bla bla', NULL, 'DVD', 'yes', 'Top Gun'),
(9, 'Koch ', 'Innsbruckerstrasse 50 5224 Hall in Tirol', '2018-08-06', '45', 'Tom Selleck', 'bla bla bla', NULL, 'DVD', 'yes', 'Magnum');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`ISBN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
