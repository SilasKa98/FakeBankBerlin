-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Erstellungszeit: 04. Feb 2022 um 12:24
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.2.32

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
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE `benutzer` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Niemals für ernsthafte Benutzerkonten/Passwörter verwenden!';

--
-- Daten für Tabelle `benutzer`
--

INSERT INTO `benutzer` (`id`, `name`, `password`) VALUES
(1, 'patrick_kröller', 'patkro0205');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `konten`
--

CREATE TABLE `konten` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `nummer` varchar(30) NOT NULL,
  `kontostand` decimal(12,2) NOT NULL,
  `benutzer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `konten`
--

INSERT INTO `konten` (`id`, `name`, `nummer`, `kontostand`, `benutzer`) VALUES
(1, 'Bausparvertrag', '2325433345', '1234.00', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ueberweisungen`
--

CREATE TABLE `ueberweisungen` (
  `ID` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `iban` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `betrag` decimal(12,2) NOT NULL,
  `zweck` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `datum` datetime NOT NULL,
  `typ` varchar(30) COLLATE utf8mb4_german2_ci NOT NULL,
  `konto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Daten für Tabelle `ueberweisungen`
--

INSERT INTO `ueberweisungen` (`ID`, `name`, `iban`, `betrag`, `zweck`, `datum`, `typ`, `konto`) VALUES
(17, 'Patrick', 'DE82642500400009079946', '187.00', 'Lutschen', '2022-01-30 20:28:32', 'Überweisung', 1),
(18, 'Patrick', 'DE82642500400009079946', '187.00', 'Lutschen', '2022-01-30 20:29:13', 'Überweisung', 1),
(19, 'Patrick', 'DE82642500400009079946', '187.00', 'Lutschen', '2022-01-30 20:29:35', 'Überweisung', 1),
(20, 'Patrick', 'DE82642500400009079946', '187.00', 'Lutschen', '2022-01-30 20:29:57', 'Überweisung', 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `ueberweisungen`
--
ALTER TABLE `ueberweisungen`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `ueberweisungen`
--
ALTER TABLE `ueberweisungen`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
