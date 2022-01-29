-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 29. Jan 2022 um 15:06
-- Server-Version: 10.4.20-MariaDB
-- PHP-Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `fakebankberlin`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ueberweisungen`
--

CREATE TABLE `ueberweisungen` (
  `ID` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `iban` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `betrag` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `zweck` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Daten für Tabelle `ueberweisungen`
--

INSERT INTO `ueberweisungen` (`ID`, `name`, `iban`, `betrag`, `zweck`) VALUES
(1, 'test', '1212', '1212', 'dadsads'),
(2, 'adsdas', '132312', '1212', 'saxasdd'),
(3, 'Silo Tessler', '12313 132313 123111 132313', '2000', 'TEst Überweisung 12334513');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `ueberweisungen`
--
ALTER TABLE `ueberweisungen`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `ueberweisungen`
--
ALTER TABLE `ueberweisungen`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
