-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 27, 2023 alle 17:14
-- Versione del server: 10.4.27-MariaDB
-- Versione PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sito_web`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `gruppi`
--

CREATE TABLE `gruppi` (
  `utente` varchar(100) NOT NULL,
  `gruppo1` varchar(100) DEFAULT NULL,
  `gruppo2` varchar(100) DEFAULT NULL,
  `gruppo3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `gruppi`
--

INSERT INTO `gruppi` (`utente`, `gruppo1`, `gruppo2`, `gruppo3`) VALUES
('lll', 'forzainter', 'forzainter', 'menchia'),
('nome', 'gruppo', 'forzainter', 'menchia'),
('prova', 'fhdkjs', 'ahah', 'inzaghi'),
('pogacar', 'prova', 'palle', 'ahah'),
('la', 'prova', 'ahah', 'inzaghi'),
('fff', NULL, NULL, NULL),
('q', NULL, NULL, NULL),
('tre', 'prova', NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `idliste`
--

CREATE TABLE `idliste` (
  `id` int(100) NOT NULL,
  `nomelista` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `idliste`
--

INSERT INTO `idliste` (`id`, `nomelista`) VALUES
(1, 'a'),
(2, 'aa'),
(3, 'g'),
(4, 'fhks'),
(5, 'dio'),
(6, 'ahahah'),
(7, 'nella'),
(8, 'fff'),
(9, 'mer'),
(10, 'ga'),
(11, 'MATHIEUVANDERPOEL'),
(12, 'coppone'),
(13, 'coppone'),
(14, 'supercoppa'),
(15, 'supercoppone'),
(16, 'supercoppa'),
(17, 'f'),
(18, 'fa'),
(19, 'and'),
(20, 'gòuh'),
(21, 'f'),
(22, 'f'),
(23, 'fsakl'),
(24, 'ans'),
(25, 'pmò'),
(26, 'pnmò'),
(27, 'gggg'),
(28, 'landa'),
(29, 'valverde');

-- --------------------------------------------------------

--
-- Struttura della tabella `lista_elementi`
--

CREATE TABLE `lista_elementi` (
  `id` int(100) NOT NULL,
  `nome_elemento` varchar(100) NOT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `quantita` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `lista_elementi`
--

INSERT INTO `lista_elementi` (`id`, `nome_elemento`, `categoria`, `quantita`) VALUES
(10, 'gf', NULL, NULL),
(20, 'palle', NULL, NULL),
(6, 'a', NULL, NULL),
(6, 'c', NULL, NULL),
(10, 'njdksa', NULL, NULL),
(5, 'dsa,', NULL, NULL),
(5, 'fds', NULL, NULL),
(5, 'cista', NULL, NULL),
(19, 'dsa', 'opzione2', '1'),
(19, 'ndffkjs', 'opzione1', '2'),
(19, 'sborra', 'opzione3', 'du etti'),
(19, 'a', 'opzione1', 'mezzo'),
(7, 'sborra', 'opzione2', 'du etti'),
(7, 'a', 'opzione1', ''),
(7, 'fhds', 'opzione1', '1'),
(17, 'ahia', NULL, NULL),
(17, 'd', 'opzione1', '2'),
(9, 'rew', 'opzione1', '2'),
(17, 'la', 'opzione3', '3'),
(5, '', NULL, NULL),
(5, '', NULL, NULL),
(9, 'ff', NULL, NULL),
(5, 'sborra', NULL, NULL),
(6, 'dio', NULL, NULL),
(6, 'aa', 'opzione2', '2'),
(9, 'la', NULL, NULL),
(10, 'fjklds', 'opzione2', '3');

-- --------------------------------------------------------

--
-- Struttura della tabella `liste`
--

CREATE TABLE `liste` (
  `gruppo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lista1` varchar(100) NOT NULL,
  `lista2` varchar(100) NOT NULL,
  `lista3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `liste`
--

INSERT INTO `liste` (`gruppo`, `password`, `lista1`, `lista2`, `lista3`) VALUES
('ahah', '$2y$10$SH/HE8Zir0mc7RO2Lx4VB.3Rl/XH4jbSrWd5Bk5svWT9je/JAy5Ia', '10', '9', '10'),
('ancora', '$2y$10$ozOrTNW6xQqd7fXbe20aQO1lz.zB3SqVIQa9cqb6gHVVZAW.wasam', '19', '17', ''),
('anzi', '$2y$10$Cp6AFI4WWeKndMrFxz31J.46RIQr.dlkBIOgAV.BEIrCwKd0bHmAC', '', '', ''),
('benficamerda', '$2y$10$wUv.Zn.wQeYNx64svpvbfes1ZjUJuTJbo8a.NLEE5CzI0gWQ2u5ZO', '', '', ''),
('cc', '$2y$10$Jm4942FJSaUyT9s3.22yIuBTKQto1LCC0gi58qW6LZuhfD.F//1Ym', '', '', ''),
('ci', '$2y$10$GQstd8aZ1eFTwOyxxGrM/O633Hj90BSOBGnjRm336K0/ramF/okTe', '', '', ''),
('dhioas', '$2y$10$gOR/aDCiwLXeqwyMmWEzdOQs.jIbcg3CH/Bkq8E974LlBjW12WRAG', '', '', ''),
('fhdkjs', '$2y$10$6g6iPT07VMd46E26FH4ATOKuVpUDxTj.11Pgxdmc.k4/K3It4vCcO', '', '', ''),
('forzainter', '$2y$10$iP3R6gF1qdktzE0LTUpcZ.PDeJPuP6Rz9iUolCmRkt3jYoVDOt6MG', 'milan', 'aaaa', 'gky'),
('gruppo', '$2y$10$DNZisiB4VxvEGANlXINyNOYZbL6L2PJkManLWE.jWn/mFWfGSoZM6', 'nono', 'nono', 'and'),
('inzaghi', '$2y$10$mWqTXOS7s2/VhdlTeq8H/eSLP.447MGp2R2fGLCWZSEK6G0Ik4PYu', '27', '28', '29'),
('menchia', '$2y$10$KzkvEWwA2xGzg7DZN80HQeZaB/uBcHUEugzBgEs/X.pYuUzqikAE6', 'a', 'a', 'dioporco'),
('n', '$2y$10$wFsnzL6i5wc38.S9rrgCF.yCy8mdjzyVDEs1fxDauQvjOkPzkMeNy', '', '', ''),
('palle', '$2y$10$ykRJL4NCGqFH9a9iJJgsU.U12HAeP2IFsvD4q2MBmDLIL0OETd3Xu', '20', '', ''),
('prova', '$2y$10$q9vtOTyGUCiPupr/g6BkdufDem037cBy58aIgI.KE9GXb8esJWZly', '5', '6', '7'),
('q', '$2y$10$1jyinmRZchKgerNiUwaWDehVCtZcSuOFDvO2RMCWbR5C1ldAMlQVi', '', '', ''),
('w', '$2y$10$IhH/q09ebWH3sAbMDGSVKuZdMR0C4nsLEtU/dcAX.lO1zgpFOZYX2', '17', '23', '24');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`username`, `email`, `password`) VALUES
('federico', 'ma@io.l', '$2y$10$dqvslx1BtTdXhaP2UZzxruYa6h4HEbTdoYNw3bKG5AE3dFF9NSGLW'),
('fff', 'f@f.f', '$2y$10$qUDWCqpLtnv7UF4.GJjYNuckwkZqZRJLAlOm6m1H8lXMqV0W72sVW'),
('Juvemerda', 'juve@merda.schifo', '$2y$10$B96ngKAFOoV.SbukikjS6OLmQ5hCab6yvhKRneriYitZbtSVc0RFO'),
('la', 'la@la.l', '$2y$10$No5vZ7iQ/dHKsmCCOBDy5uD7GtizW8cRCId2wOvI4Th4j3QYiZubi'),
('lala', 'la@la.la', '$2y$10$qY9de/9GjE48lmJ1rS6TkeowPv8xix4Ly6g1OF7DUIBYNpy3QEJLW'),
('lll', 'l@l.l', '$2y$10$42MBSjNNZ7Arem4E3CjrfuYHghubUWqohsjbanZ4K9JWJ4xQBx8.C'),
('merda', 'm@m.m', '$2y$10$9IIU2OMw0qWTcTvtiCimSurHwM/eC0MmD91zN4h7CFvGAbCe0yEqy'),
('michelee', 'a@a.h', '$2y$10$H1mk2pKSTolPAreI0L54Yei7ejoUZvJUGnloMDj0bLy'),
('milanmerda', 'a@p.a', '$2y$10$v8Om.kZSSTgC7E6Gz8h2UuCpmDQJErJ29xauHLWGcuNUHFu8WteQC'),
('nome', 'email@email.com', '$2y$10$2DedGh480bSgm6rFTdmOW.eTk6ilNw7XzvRMuRfoDzic7/7koxOO6'),
('pogacar', 'tadej@pogacar.it', '$2y$10$OdIC2ZdMSpZR37xiK.guBOFEW/pQOGGB6f4vU8W2E8Qqe99MkRPHG'),
('prova', 'prova@prova.it', '$2y$10$nPMzB8muAuuf/aN0yBVf6ectl1I6DU.K24tF7kGB/E7z2hdZgBZ8i'),
('q', 'q@q.q', '$2y$10$8qYYJjT4sPybPyn7sND91euj9HSZpAi9PaMtoBiYe3Ra9VkIKgaVa'),
('tre', 'tre@email.com', '$2y$10$RGt1DAM7huwjlPIpEkm6ved6UOKKQV8HdnEUdYVFTqycukQ0eM7nS');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `idliste`
--
ALTER TABLE `idliste`
  ADD KEY `id` (`id`);

--
-- Indici per le tabelle `liste`
--
ALTER TABLE `liste`
  ADD UNIQUE KEY `gruppo` (`gruppo`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `idliste`
--
ALTER TABLE `idliste`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
