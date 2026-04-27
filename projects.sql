-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Giu 20, 2021 alle 03:21
-- Versione del server: 5.7.32-0ubuntu0.18.04.1
-- Versione PHP: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `S4691028`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `projects`
--

INSERT INTO `projects` (`id`, `name`) VALUES
(1, 'Salvation Army Matioli Secondary School\r\nKenya'),
(2, 'Lungi, Rosint, COG Prophecy Primary School\r\n\r\nSierra Leone'),
(4, 'Kako Special School for the Mentally\r\n\r\nSierra Leone'),
(5, 'Khunyiri Community, Edward Spring\r\n\r\nCamerun'),
(6, 'Indangalasia AC Primary School\r\n\r\nKenya'),
(7, 'Elwasambi Community, Kadi Spring\r\n\r\nGhana'),
(8, 'St. Peter\'s Khabakaya Primary School\r\n\r\nkenya'),
(9, 'Masoila, #1023 Airport Ferry Road, Lion\r\n\r\nSierra Leone'),
(10, 'Mbiuni Community C\r\n\r\nTogo'),
(11, 'Mwituwa Community, Onyango Spring\r\n\r\nNigeria'),
(12, 'Makhwabuyu Community, Shirandula Spring\r\n\r\nZimbabwe'),
(13, 'Nduumoni Community C\r\n\r\nChad');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
