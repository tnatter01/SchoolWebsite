-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 05 apr 2018 om 10:56
-- Serverversie: 10.1.30-MariaDB
-- PHP-versie: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schiphol`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klachtenformulier`
--

CREATE TABLE `klachtenformulier` (
  `klachtid` int(11) NOT NULL,
  `klacht` mediumtext NOT NULL,
  `naam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefoon` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `soort` varchar(255) NOT NULL,
  `datum` varchar(255) NOT NULL,
  `tijd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `klachtenformulier`
--
ALTER TABLE `klachtenformulier`
  ADD PRIMARY KEY (`klachtid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `klachtenformulier`
--
ALTER TABLE `klachtenformulier`
  MODIFY `klachtid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
