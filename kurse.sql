-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Mai 2024 um 18:33
-- Server-Version: 10.4.28-MariaDB
-- PHP-Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `languageconnect`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kurse`
--

CREATE TABLE `kurse` (
  `Kursname` text NOT NULL,
  `Sprache` text NOT NULL,
  `Beschreibung` text NOT NULL,
  `Kursformat` text NOT NULL,
  `Kursdauer_Anfang` date NOT NULL,
  `Kursdauer_Ende` date NOT NULL,
  `Gebucht` tinyint(1) NOT NULL,
  `Gebucht_von` text NOT NULL,
  `KursID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `kurse`
--

INSERT INTO `kurse` (`Kursname`, `Sprache`, `Beschreibung`, `Kursformat`, `Kursdauer_Anfang`, `Kursdauer_Ende`, `Gebucht`, `Gebucht_von`, `KursID`) VALUES
('Testkurs', 'Deutsch', 'Testkurs zum Testen', 'Einwöchig', '2024-05-15', '2024-05-16', 1, 'Wendelin', 1),
('Testkurs2', 'Englisch', 'Kurs zum Testen des Kurse laden', '2-wöchig', '2024-05-20', '2024-05-24', 1, 'Wendelin', 2);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `kurse`
--
ALTER TABLE `kurse`
  ADD PRIMARY KEY (`KursID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `kurse`
--
ALTER TABLE `kurse`
  MODIFY `KursID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
