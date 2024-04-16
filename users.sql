-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Apr 2024 um 15:51
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
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `Anrede` varchar(10) NOT NULL,
  `Vorname` varchar(50) NOT NULL,
  `Nachname` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Passwort` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `anbieter` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userID`, `Anrede`, `Vorname`, `Nachname`, `Email`, `Username`, `Passwort`, `admin`, `anbieter`, `status`) VALUES
(1, 'Herr', 'Wendelin', 'Windhager', 'wendelin.windhager@gmail.com', 'Wendelin', '123', 1, 0, 1),
(0, 'Herr', 'test', 'user', 'test.user@email.com', 'tester', '$2y$10$dYlqFSMVPIgHeWLkp1t9QeNwZkM./jSAFRE6rOwrDYrWiWX8DGXoi', 0, 0, 0),
(0, 'Herr', 'test2', 'user2', 'test.user@email.com2', 'tester2', '$2y$10$QD7FdQpjH3kxj843nzLtW.inq7/fBtJHTtIgqzA7zKROvBqD0LSz2', 0, 0, 0),
(0, 'Herr', 'test3', 'user3', 'test.user@email.com3', 'tester3', '$2y$10$yN3C/HitBgoBtO//kg7EVemIAxaIhXeX5hu4SQQTMRoDpcVQgVSEW', 0, 0, 0),
(0, 'Fraud', 'user', 'test', 'test.user@email.com4', 'user', '$2y$10$BPuewDdCuXu7ARvmznA2SuoJlLyAR8tvutmMVt2EewTTB6Ztjlsfm', 0, 0, 0),
(0, 'Herr', 'Wendelin', 'Windhager', 'wendelin.windhager@gmail.com', 'wow', '$2y$10$H.CPVOidgQcrjVUdwRVZEO.uGSqBFPVDm9Ru.zpq3XAiCv6xTGEuu', 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
