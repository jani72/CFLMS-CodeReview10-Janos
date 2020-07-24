-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Jul 2020 um 13:46
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
  `ISBN` int(10) NOT NULL,
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
(1, 'Various Artists', 'Kefergasse 70 4845 Grünau', '2019-07-01', '20', 'Helene Fischer ', 'Das Beste und noch mehr', '<img src=\"images/Helene_Best_of.jpg\" height=200 width=140>', 'Cd', 'Cd', 'Best Of'),
(3, 'Sony Music', 'Kefergasse 70 4845 Grünau', '2020-01-01', '20', 'Various Artists', 'Party Party Party', '<img src=\"images/BH_20.jpg\" height=200 width=140>', 'CD', 'CD', 'Ballerman Hits 2020'),
(4, 'Ueberreuter', 'Johannesgasse 12 1010 Wien', '2019-01-01', '50', 'Christian Braun', 'PHP für Quereinsteiger', '<img src=\"images/PHP.jpg\" height=200 width=140>', 'Book', 'Book', 'PHP for Dummies'),
(5, 'Ueberreuter', 'Johannesgasse 12 1010 Wien', '2019-01-01', '50', 'Anita Bauer', 'Leichte und fettarme Rezepte zum nachmachen', '<img src=\"images/LK.jpg\" height=200 width=140>', 'Book', 'Book', 'Leichte Küche'),
(6, 'Ueberreuter', 'Johannesgasse 12 1010 Wien', '2019-01-01', '50', 'Stephen King', 'Horrorthriller von Stephen King', '<img src=\"images/ES.jpg\" height=200 width=140>', 'Book', 'Book', 'ES'),
(7, 'Universal', ' Sandgasse 15 4020 Linz', '2018-08-06', '45', 'Bradley Cooper', 'Die Geschichte von Micheal Kyle', '<img src=\"images/AS.jpg\" height=200 width=140>', 'DVD', 'DVD', 'American Sniper'),
(8, 'Universal ', 'Sandgasse 15 4020 Linz', '2018-08-06', '45', 'Tom Cruise', 'Faszinierende Geschichte eines jungen Kampfjet Piloten', '<img src=\"images/TG.jpg\" height=200 width=140>', 'DVD', 'DVD', 'Top Gun'),
(9, 'Universal', 'Sandgasse 15 4020 Linz', '2018-08-06', '45', 'Bruce Willis', 'Ein Komet droht die Erde zu zerstören können die Astronauten sie noch retten?', '<img src=\"images/AG.jpg\" height=200 width=140>', 'DVD', 'DVD', 'Armageddon'),
(10, 'Sony Music', 'Johannesgasse 12 1010 Wien', '2015-07-20', '50', 'Moby', 'Remixes von Moby in neuem Style', '<img src=\"images/AH.jpg\" height=200 width=140>', 'CD', 'CD', 'Almost Home Remixes 2015'),
(11, 'Constantin Film', 'Herrengassse 20 80331 München', '2008-07-21', '50', 'Michael \"Bully\" Herbig', 'Winnetou Parodie', '<img src=\"images/DS.jpg\" height=200 width=140>', 'DVD', 'DVD', 'Der Schuh des Manitu'),
(12, 'Sony Music', 'Johannesgasse 12 1010 Wien', '2020-07-01', '20', 'Ennio Morricone', 'Zum Gedenken an Ennio Morricone', '<img src=\"images/EM.jpg\" height=200 width=140>', 'cd', 'cd', 'Best of'),
(13, 'XYZ Music', 'Johannesgasse 12 1010 Wien', '2020-07-08', '20', 'Gigi D´Agostino', 'First Album from the Italian DJ', '<img src=\"images/gigi.jpg\" height=200 width=140>', 'Cd', 'Cd', 'Lamour Toujour´s'),
(14, 'XYZ Music', 'Johannesgasse 12 1010 Wien', '2010-07-14', '20', 'Gigi D´Agostino', 'The Best of from the Italian DJ', '<img src=\"images/Gigidag.jpg\" height=200 width=140>', 'Cd', 'Cd', 'Best of'),
(15, 'various', NULL, '0000-00-00', NULL, 'hans zimmer', 'bla bla la', '<img src=\"images/Helene_Best_of.jpg\" height=200 width=140>', 'CD', NULL, 'best of');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`ISBN`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `library`
--
ALTER TABLE `library`
  MODIFY `ISBN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
