-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 31. Mai 2017 um 06:50
-- Server-Version: 10.1.19-MariaDB
-- PHP-Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `devphowo`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `authors`
--

CREATE TABLE `authors` (
  `id` int(4) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `webpage` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `authors`
--

INSERT INTO `authors` (`id`, `name`, `webpage`) VALUES
(1, 'Teszt Elek', 'http://tesztelek.hu');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Teszt kategória'),
(2, 'Tájfotók');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pictures`
--

CREATE TABLE `pictures` (
  `id` int(5) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci,
  `catid` int(4) NOT NULL,
  `authid` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `pictures`
--

INSERT INTO `pictures` (`id`, `title`, `catid`, `authid`) VALUES
(1, 'Teszt Elek1', 1, 1),
(2, 'Teszt Elek2', 2, 1),
(3, 'Asd3', 1, 1),
(4, 'Asd4', 1, 1),
(5, 'AsdAAAA', 1, 1),
(6, 'Asd5', 1, 1),
(7, 'asdasd', 1, 1),
(8, 'asd8', 1, 1),
(9, 'asd9', 1, 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT für Tabelle `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
