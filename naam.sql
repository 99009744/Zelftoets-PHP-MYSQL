-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 06 sep 2020 om 17:09
-- Serverversie: 8.0.18
-- PHP-versie: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zelftoets`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `naam`
--

CREATE TABLE `naam` (
  `id` int(11) NOT NULL,
  `naam` text COLLATE utf8mb4_general_ci NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `naam`
--

INSERT INTO `naam` (`id`, `naam`, `datum`) VALUES
(1, 'mitchell', '1995-08-06'),
(3, 'piet', '2000-10-10'),
(10, 'AAB', '2020-09-04'),
(11, 'first', '1966-08-31'),
(12, 'TEST', '2017-01-01');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `naam`
--
ALTER TABLE `naam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `naam`
--
ALTER TABLE `naam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
