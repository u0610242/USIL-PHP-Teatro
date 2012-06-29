-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 30. Jun 2012 um 01:49
-- Server Version: 5.5.16
-- PHP-Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `final`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `id` int(11) NOT NULL,
  `mensaje` varchar(300) NOT NULL,
  `user` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `comentario`
--

INSERT INTO `comentario` (`id`, `mensaje`, `user`) VALUES
(1, 'Buena Obra', 'david_qh@hotmail.com'),
(1, 'Me parece que esta buena la obra', 'darksts@hotmail.com');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `obra`
--

CREATE TABLE IF NOT EXISTS `obra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `director` varchar(50) NOT NULL,
  `sala` varchar(20) NOT NULL,
  `horarios` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  `temporada` varchar(35) NOT NULL,
  `afiche` varchar(100) NOT NULL,
  `resena` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `obra`
--

INSERT INTO `obra` (`id`, `nombre`, `autor`, `director`, `sala`, `horarios`, `precio`, `temporada`, `afiche`, `resena`) VALUES
(1, 'Romeo Y Julieta', 'Jorge Lucas', 'Steven Spilberg', 'sala 2', '4-5 y 5-6', 25, 'verano 2012', '../Afiches/013ea8_google-posicion-e1320951052652.jpg', 'Obra ambientada en la edad media trata sobre dos personas que no pueden tener una relacion por culpa de la sociedad.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `opinion`
--

CREATE TABLE IF NOT EXISTS `opinion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `puntaje` int(11) NOT NULL,
  `mensaje` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `opinion`
--

INSERT INTO `opinion` (`id`, `puntaje`, `mensaje`) VALUES
(1, 10, 'Se el Primero en Escribir un mensaje');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(35) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `apellido`, `correo`, `pass`) VALUES
(1, 'David', 'Quintana', 'david_qh@hotmail.com', 'ohsisixD'),
(2, 'Stuart', 'Travi', 'darksts@hotmail.com', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
