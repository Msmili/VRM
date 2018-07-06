-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 06 Juillet 2018 à 13:26
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `vrm`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheter`
--

CREATE TABLE IF NOT EXISTS `acheter` (
  `IdA` int(11) NOT NULL AUTO_INCREMENT,
  `IdUserA` int(11) NOT NULL,
  `IdProgrammeA` int(11) NOT NULL,
  `DateA` datetime NOT NULL,
  PRIMARY KEY (`IdA`),
  KEY `IdUserA` (`IdUserA`),
  KEY `IdProgrammeA` (`IdProgrammeA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Contenu de la table `acheter`
--

INSERT INTO `acheter` (`IdA`, `IdUserA`, `IdProgrammeA`, `DateA`) VALUES
(1, 1, 1, '2018-05-07 00:00:00'),
(2, 1, 1, '2018-05-07 00:00:00'),
(3, 1, 1, '2018-05-04 00:00:00'),
(4, 1, 1, '2018-07-08 09:00:00'),
(5, 1, 2, '2018-05-07 00:00:00'),
(6, 1, 3, '2018-05-07 00:00:00'),
(35, 1, 1, '2018-07-06 00:00:00'),
(36, 1, 1, '2018-07-06 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

CREATE TABLE IF NOT EXISTS `coach` (
  `IdC` int(11) NOT NULL AUTO_INCREMENT,
  `NomC` varchar(50) NOT NULL,
  `PrenomC` varchar(50) NOT NULL,
  `DateNaissC` date NOT NULL,
  `SexeC` char(1) NOT NULL,
  `EmailC` varchar(50) NOT NULL,
  `PasswordC` varchar(50) NOT NULL,
  `TelephoneC` varchar(10) NOT NULL,
  `AdresseC` varchar(100) NOT NULL,
  `VilleC` varchar(50) NOT NULL,
  `CodePostalC` varchar(5) NOT NULL,
  PRIMARY KEY (`IdC`),
  UNIQUE KEY `EmailC` (`EmailC`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `coach`
--

INSERT INTO `coach` (`IdC`, `NomC`, `PrenomC`, `DateNaissC`, `SexeC`, `EmailC`, `PasswordC`, `TelephoneC`, `AdresseC`, `VilleC`, `CodePostalC`) VALUES
(1, 'Hemric', 'Pascal', '0000-00-00', '', 'coach@coach.fr', 'coach', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

CREATE TABLE IF NOT EXISTS `evaluation` (
  `IdE` int(11) NOT NULL AUTO_INCREMENT,
  `DateHeureE` datetime NOT NULL,
  `NoteE` decimal(4,2) DEFAULT NULL,
  `ValderE` tinyint(1) NOT NULL DEFAULT '0',
  `RessentiE` varchar(20) DEFAULT NULL,
  `DifficulteE` text,
  `AvisE` text,
  `CommentaireE` text,
  `ValiderE` tinyint(1) NOT NULL DEFAULT '0',
  `IdUserE` int(11) NOT NULL,
  `IdSeanceE` int(11) NOT NULL,
  `IdCoachE` int(11) NOT NULL,
  PRIMARY KEY (`IdE`),
  KEY `IdUserE` (`IdUserE`),
  KEY `IdSeanceE` (`IdSeanceE`),
  KEY `IdCoachE` (`IdCoachE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Contenu de la table `evaluation`
--

INSERT INTO `evaluation` (`IdE`, `DateHeureE`, `NoteE`, `ValderE`, `RessentiE`, `DifficulteE`, `AvisE`, `CommentaireE`, `ValiderE`, `IdUserE`, `IdSeanceE`, `IdCoachE`) VALUES
(1, '2018-07-05 00:00:00', '25.00', 0, 'Trop facile', 'test', 'test', 'eeeeeee', 1, 1, 1, 1),
(2, '2018-07-08 09:00:00', '50.00', 0, NULL, NULL, NULL, 'test', 0, 1, 2, 1),
(3, '2018-07-04 18:00:00', '50.00', 0, '0', '', '', 'test', 1, 1, 3, 1),
(4, '2018-07-03 00:00:00', '50.00', 0, 'Difficile', 'test', 'test', 'test', 1, 1, 4, 1),
(27, '2018-07-07 12:58:15', NULL, 0, NULL, NULL, NULL, NULL, 0, 1, 3, 1),
(28, '2018-07-09 12:58:15', NULL, 0, NULL, NULL, NULL, NULL, 0, 1, 4, 1),
(29, '2018-07-12 12:58:15', NULL, 0, NULL, NULL, NULL, NULL, 0, 1, 5, 1),
(30, '2018-07-07 13:25:29', NULL, 0, NULL, NULL, NULL, NULL, 0, 1, 1, 1),
(31, '2018-07-09 13:25:29', NULL, 0, NULL, NULL, NULL, NULL, 0, 1, 2, 1),
(32, '2018-07-07 13:26:02', NULL, 0, NULL, NULL, NULL, NULL, 0, 1, 1, 1),
(33, '2018-07-09 13:26:02', NULL, 0, NULL, NULL, NULL, NULL, 0, 1, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `IdL` int(11) NOT NULL AUTO_INCREMENT,
  `IntituleL` varchar(100) NOT NULL,
  `DateHeureL` datetime NOT NULL,
  `DetailL` text NOT NULL,
  PRIMARY KEY (`IdL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

CREATE TABLE IF NOT EXISTS `programme` (
  `IdP` int(11) NOT NULL AUTO_INCREMENT,
  `IntituleP` varchar(100) NOT NULL,
  `DescriptifP` text NOT NULL,
  `PrixP` decimal(5,2) NOT NULL,
  `NBSeance` int(11) NOT NULL,
  `ActifP` tinyint(1) DEFAULT '1',
  `IdCoachP` int(11) NOT NULL,
  PRIMARY KEY (`IdP`),
  KEY `IdCoachP` (`IdCoachP`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `programme`
--

INSERT INTO `programme` (`IdP`, `IntituleP`, `DescriptifP`, `PrixP`, `NBSeance`, `ActifP`, `IdCoachP`) VALUES
(1, 'Pack1', 'Pack pour votre corps', '15.00', 10, 1, 1),
(2, 'Pack2', 'Pack pour votre corps', '15.00', 10, 1, 1),
(3, 'Pack3', 'Pack pour votre corps', '15.00', 10, 1, 1),
(4, 'Pack4', 'Pack pour votre corps', '15.00', 10, 1, 1),
(5, 'Pack5', 'Pack pour votre corps', '15.00', 10, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

CREATE TABLE IF NOT EXISTS `seance` (
  `IdS` int(11) NOT NULL AUTO_INCREMENT,
  `IntituleS` varchar(100) NOT NULL,
  `DescriptifS` text NOT NULL,
  `DureeS` varchar(10) NOT NULL,
  `IdProgrammeS` int(11) NOT NULL,
  PRIMARY KEY (`IdS`),
  KEY `IdProgrammeS` (`IdProgrammeS`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `seance`
--

INSERT INTO `seance` (`IdS`, `IntituleS`, `DescriptifS`, `DureeS`, `IdProgrammeS`) VALUES
(1, 'Abdos', 'Test', '15min', 1),
(2, 'Abdos', 'Test', '15min', 1),
(3, 'Abdos', 'Test', '15min', 2),
(4, 'Abdos', 'Test', '15min', 2),
(5, 'Abdos', 'Test', '15min', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `IdU` int(11) NOT NULL AUTO_INCREMENT,
  `NomU` varchar(50) NOT NULL,
  `PrenomU` varchar(50) NOT NULL,
  `DateNaissU` date NOT NULL,
  `SexeU` char(1) NOT NULL,
  `EmailU` varchar(50) NOT NULL,
  `PasswordU` varchar(50) NOT NULL,
  `TelephoneU` varchar(10) NOT NULL,
  `AdresseU` varchar(100) NOT NULL,
  `VilleU` varchar(50) NOT NULL,
  `CodePostalU` varchar(5) NOT NULL,
  `PoidsU` decimal(5,2) NOT NULL,
  `TailleU` decimal(5,2) NOT NULL,
  `DateInscriptionU` date NOT NULL,
  PRIMARY KEY (`IdU`),
  UNIQUE KEY `EmailU` (`EmailU`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`IdU`, `NomU`, `PrenomU`, `DateNaissU`, `SexeU`, `EmailU`, `PasswordU`, `TelephoneU`, `AdresseU`, `VilleU`, `CodePostalU`, `PoidsU`, `TailleU`, `DateInscriptionU`) VALUES
(1, 'Dupont', 'Charles', '1995-01-01', 'M', 'user@user.fr', 'test', '0123456789', '111 test', 'TEstVille', '12300', '64.20', '1.50', '2018-07-03'),
(3, 'Marshall', 'Casque', '0000-00-00', 'M', 'marshall@test.fr', 'azerty', '0123456789', 'teste de ladresse', 'Testy', '12300', '64.20', '185.00', '2018-07-06');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `acheter`
--
ALTER TABLE `acheter`
  ADD CONSTRAINT `acheter_ibfk_1` FOREIGN KEY (`IdUserA`) REFERENCES `user` (`IdU`),
  ADD CONSTRAINT `acheter_ibfk_2` FOREIGN KEY (`IdProgrammeA`) REFERENCES `programme` (`IdP`);

--
-- Contraintes pour la table `evaluation`
--
ALTER TABLE `evaluation`
  ADD CONSTRAINT `evaluation_ibfk_1` FOREIGN KEY (`IdUserE`) REFERENCES `user` (`IdU`),
  ADD CONSTRAINT `evaluation_ibfk_2` FOREIGN KEY (`IdSeanceE`) REFERENCES `seance` (`IdS`),
  ADD CONSTRAINT `evaluation_ibfk_3` FOREIGN KEY (`IdCoachE`) REFERENCES `coach` (`IdC`);

--
-- Contraintes pour la table `programme`
--
ALTER TABLE `programme`
  ADD CONSTRAINT `programme_ibfk_1` FOREIGN KEY (`IdCoachP`) REFERENCES `coach` (`IdC`);

--
-- Contraintes pour la table `seance`
--
ALTER TABLE `seance`
  ADD CONSTRAINT `seance_ibfk_1` FOREIGN KEY (`IdProgrammeS`) REFERENCES `programme` (`IdP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
