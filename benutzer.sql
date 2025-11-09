-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 09. Nov 2025 um 10:27
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `beispiel_db`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE `benutzer` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `geburtstag` date DEFAULT NULL,
  `wohnort` text DEFAULT NULL,
  `beschreibung` text DEFAULT NULL,
  `bild` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `benutzer`
--

INSERT INTO `benutzer` (`id`, `name`, `email`, `geburtstag`, `wohnort`, `beschreibung`, `bild`) VALUES
(1, 'Anna Müller', 'anna@example.com', '2000-04-12', 'Berlin', 'Anna liebt Tiere und Kaffee. Sie arbeitet als Webdesignerin.', 'anna.jpg'),
(2, 'Max Mustermann', 'max@example.com', '1998-07-25', 'Hamburg', 'Max programmiert gerne in PHP. Er spielt auch Gitarre.', 'max.jpg'),
(3, 'Sarah Schmidt', 'sarah@example.com', '2002-01-08', 'München', 'Sarah ist Studentin der Informatik. Sie interessiert sich für KI und Gaming.', 'sarah.jpg'),
(4, 'Jonas Weber', 'jonas@example.com', '1995-11-30', 'Köln', 'Jonas reist gerne. Lieblingssprache: JavaScript.', 'jonas.jpg'),
(5, 'Lena Kraus', 'lena@example.com', '1997-03-18', 'Stuttgart', 'Lena schreibt gerne Geschichten. Lieblingsfarbe: Blau.', 'lena.jpg');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
