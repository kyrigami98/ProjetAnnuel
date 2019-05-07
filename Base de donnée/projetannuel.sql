-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 07 Mai 2019 à 04:35
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projetannuel`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`idUser`, `email`, `nom`, `prenom`, `statut`, `pwd`) VALUES
(1, 'k@gmail.fr', 'DOSSOU', 'KYRIEL', 'etudiant', 'f23ccd066f8236c6f97a2a62d3f9f9f5'),
(5, 'kdossou1@myges.fr', 'DOSSOU', 'Kyriel', 'etudiant', 'df8fede7ff71608e24a5576326e41c75'),
(6, 'dossou1@myges.com', 'DOSSOU', 'Kyriel', 'etudiant', 'ceb8447cc4ab78d2ec34cd9f11e4bed2'),
(7, 'McDo@food.fr', 'Mc', 'Donalds', 'etudiant', '62506be34d574da4a0d158a67253ea99'),
(8, 'boobs@hot.fr', 'logic', 'Boobs', 'etudiant', 'd091fccc62e2d24ab101dbe01ce844f6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
