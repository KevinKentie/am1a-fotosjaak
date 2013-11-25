-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 25 nov 2013 om 14:08
-- Serverversie: 5.6.12-log
-- PHP-versie: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `users`
--
CREATE DATABASE IF NOT EXISTS `am1a-fotosjaak` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `am1a-fotosjaak`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_english` text NOT NULL,
  `question_dutch` text NOT NULL,
  `awnser_english` text NOT NULL,
  `awnser_dutch` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Gegevens worden uitgevoerd voor tabel `faq`
--

INSERT INTO `faq` (`id`, `question_english`, `question_dutch`, `awnser_english`, `awnser_dutch`) VALUES
(1, 'Is this game hard to play?', 'Is dit een moeilijk spel om te spelen?', 'Yes, this game is very hard to play!', 'Ja, sit spel is erg moeilijk om te spelen!'),
(2, 'When do you win/lose the game?', 'Wanneer is het spel gewonnen/verloren?', 'It''s done when your points go below zero.', 'Het is afgelopen wanneer je punten onder nu belanden.'),
(3, 'How do I download the game?', 'Hoe download ik het spel?', 'First you need to be logged in to download the awesome game. When you''re logged in you simply click on downloads and there is, the awesome game! the only thing left is you need to click on the download button dan off you go!', 'Eerst moet je ingelogd zijn om het kei vette spel te downloaden. Wanneer je ingelogd bent moet je op downloads klikken en dan zie je het kei vette spel! Het enige wat je nog moet doen is op de download knop klikken en spelen die handel!'),
(4, 'How do I instal the game?', 'Hoe installeer ik het spel?', 'You simply just pack the rar out and click on the .exe file.', 'Je pakt het rar bestandje gewoon gemakkelijk uit en dan klik je op het .exe bestant.'),
(5, 'Is there any story behind this game?', 'Is er een verhaal achter dit spel?', 'Not realy, just play!', 'Niet echt, gewoon spelen!'),
(6, 'How do I report a bug that I found?', 'Hoe kan ik een bug rapporteren die ik gevonden heb?', 'Just mail to: kevin-k@hotmail.com and explain (with a picture) what the bug is.', 'Je kunt gewoon mailen naar: kevin-k@hotmail.com om uit te leggen (graag met foto erbij) wat de bug is.'),
(7, 'Is this the full game or is it just a little demo to show is what u are making?', 'Is dit het hele spel of is het een kleine demo om te laten zien wat je aan het maken bent?', 'No, this is just a project. I will try to add a few more thing but there is not really anything more that is coming in to this game.', 'Nee, dit is gewoon een project. Ik zal proberen om een paar kleine dingen erbij te doen maar er zal niet veel meer veranderen in het spel.'),
(8, 'Is there going to be another game in the futere?', 'Komt er in de toekomst nog een anders spel?', 'Probably.', 'Waarschijnlijk.'),
(9, 'How dit je learn to make a game like this?', 'Hoe heb je geleerd om een spel zoals dit te maken?', 'Everything I learned comes from my teacher: A de Ruijter.', 'Alles wat ik geleerd heb komt van mijn leraar: A de Ruijter.'),
(10, 'How can I ask a question that isn''t mentiont in this faq?', 'Hoe kan ik iets vragen over een vraag die niet in de faq staat?', 'Just mail it to: kevin-k@hotmail.com', 'Gewoon mailen naar: kevin-k@hotmail.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `infix` varchar(20) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `residence` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `housenumber` int(11) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` varchar(5) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `genre_favorite_game` varchar(20) NOT NULL,
  `favoritegame` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userrole` enum('admin','root','customer') NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `infix`, `surname`, `residence`, `street`, `housenumber`, `zipcode`, `date_of_birth`, `sex`, `marital_status`, `genre_favorite_game`, `favoritegame`, `email`, `password`, `userrole`) VALUES
(29, 'Kevin', '', 'Kentie', 'Nieuwegein', 'Frans Coenenhove', 33, '3438HJ', '1996-07-05', 'male', 'not maried', 'RPG', 'Guitar Hero', 'kevin-kentie@hotmail.com', 'geheim', 'customer'),
(30, 'Zwarte', '', 'Piet', 'Hawai', 'Pepernootstraat', 100, '2020HH', '1938-01-31', 'male', 'maried', 'puzzel', 'pakjes inpakken', 'piet@hotmail.com', 'sinterklaas', 'admin'),
(31, 'root', 'de', 'root', 'rootstraa', 'adminstraat', 12, '1920HJ', '2013-01-01', 'male', 'maried', 'rpg', 'cod', 'root@hotmail.com', 'admin', 'root'),
(32, 'Ferrie', '', 'kentie', 'nieuwegien', 'Frans Coenenhove', 33, '3438HJ', '1964-06-21', 'male', 'maried', 'FPS', 'cod', 'ferrie@hotmail.com', 'ferrie', 'customer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
