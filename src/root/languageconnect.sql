-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 18. Jun 2024 um 11:31
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
                         `Anbieter_Email` text NOT NULL,
                         `Anbieter` text NOT NULL,
                         `Sprache` text NOT NULL,
                         `Beschreibung` text NOT NULL,
                         `Kursformat` enum('Online','Praesenz') NOT NULL,
                         `Zielgruppe` enum('Anfaenger','Fortgeschritten','Experte') NOT NULL,
                         `Kursdauer_Anfang` date NOT NULL,
                         `Kursdauer_Ende` date NOT NULL,
                         `Preis` int(11) NOT NULL,
                         `Gebucht` tinyint(1) NOT NULL,
                         `Gebucht_von` text NOT NULL,
                         `KursID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `kurse`
--

INSERT INTO `kurse` (`Kursname`, `Anbieter_Email`, `Anbieter`, `Sprache`, `Beschreibung`, `Kursformat`, `Zielgruppe`, `Kursdauer_Anfang`, `Kursdauer_Ende`, `Preis`, `Gebucht`, `Gebucht_von`, `KursID`) VALUES
                                                                                                                                                                                                             ('Testkurs', 'wendelin.windhager@gmail.com', 'Wendelin', 'Deutsch', 'Testkurs zum Testen', 'Praesenz', 'Anfaenger', '2024-05-15', '2024-05-16', 30, 1, 'michelle', 1),
                                                                                                                                                                                                             ('Testkurs2', 'wendelin.windhager@gmail.com', 'Wendelin', 'Englisch', 'Kurs zum Testen des Kurse laden', 'Online', 'Fortgeschritten', '2024-05-20', '2024-05-24', 25, 1, 'Wendelin', 2),
                                                                                                                                                                                                             ('Englischkurs', 'wendelin.windhager@gmail.com', 'Wendelin', 'Englisch', 'test', 'Praesenz', 'Anfaenger', '2024-06-05', '2024-06-12', 20, 1, 'Wendelin', 3),
                                                                                                                                                                                                             ('Deutschkurs für Anfänger', 'wendelin.windhager@gmail.com', 'Wendelin', 'Deutsch', 'ein Deutschkurs für Anfänger', 'Praesenz', 'Anfaenger', '2024-06-05', '2024-06-12', 40, 1, 'sabrina', 5),
                                                                                                                                                                                                             ('Französischkurs', 'wendelin.windhager@gmail.com', 'Wendelin', 'Französisch', 'Französisch für Experten', 'Online', 'Experte', '2024-06-17', '2024-06-23', 50, 0, '', 6),
                                                                                                                                                                                                             ('Croissant', 'thomas@gmail.com', 'thomas', 'Französisch', 'Bonjour!!', 'Online', 'Anfaenger', '2024-06-10', '2024-06-24', 35, 1, 'sabrina', 7),
                                                                                                                                                                                                             ('HOLA', 'thomas@gmail.com', 'thomas', 'Spanisch', 'Hola, que tal?', 'Online', 'Anfaenger', '2024-06-24', '2024-06-28', 30, 1, 'michelle', 8);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
                         `user_id` int(11) NOT NULL,
                         `anrede` varchar(10) DEFAULT NULL,
                         `firstname` varchar(255) DEFAULT NULL,
                         `lastname` varchar(255) DEFAULT NULL,
                         `email` varchar(255) DEFAULT NULL,
                         `username` varchar(255) NOT NULL,
                         `password` varchar(255) NOT NULL,
                         `role` enum('Admin','Tutor','Student') NOT NULL,
                         `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`user_id`, `anrede`, `firstname`, `lastname`, `email`, `username`, `password`, `role`, `status`) VALUES
                                                                                                                          (1, NULL, 'Admin', 'Admin', 'admin@gmail.com', 'admin', '$2y$10$urbk0LWU4kX6roQp76InMOnwL4uC8V9HI8nDMM17h3a4u5fOxmN4q', 'Admin', 1),
                                                                                                                          (4, 'Herr', 'Wendelin', 'Windhager', 'wendelin.windhager@gmail.com', 'Wendelin', '$2y$10$ZmeYMnsQZ95QqiKawlcDJO2ec56ND2LyLwtfn6L4SzoD4cU0jdpLi', 'Tutor', 1),
                                                                                                                          (5, 'Herr', 'Thomas', 'Tamer', 'thomas@gmail.com', 'thomas', '$2y$10$k7lWjDSu16MmQAeyjw.Kkuf9AJgbz1LSMGiNljFrFZSRq6P3MV0aK', 'Tutor', 1),
                                                                                                                          (6, 'Frau', 'Sabrina', 'Sauer', 'sabrinasauer@gmail.com', 'sabrina', '$2y$10$vBCaHKG3jemoGZmMTsjsm.RloTZs.lNcmgotCmVJuaVwdQhp6ljjm', 'Student', 1),
                                                                                                                          (7, 'Frau', 'Michelle', 'Muster', 'michelle@gmail.com', 'michelle', '$2y$10$4Uk/l8TjUN7X6G0crw3XjeZV0VXto1GFQKp7umoQUtR8pZq9kcQli', 'Student', 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `kurse`
--
ALTER TABLE `kurse`
    ADD PRIMARY KEY (`KursID`),
  ADD KEY `Anbieter_Email` (`Anbieter_Email`(768));

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `kurse`
--
ALTER TABLE `kurse`
    MODIFY `KursID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
    MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
