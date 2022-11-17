-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 17 nov. 2022 à 19:06
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sea_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiante`
--

DROP TABLE IF EXISTS `etudiante`;
CREATE TABLE IF NOT EXISTS `etudiante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(15) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Numero` int(15) NOT NULL,
  `Niveau` varchar(10) NOT NULL,
  `Photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiante`
--

INSERT INTO `etudiante` (`id`, `Nom`, `Prenom`, `Numero`, `Niveau`, `Photo`) VALUES
(10, 'N\'DRI', 'N\'GUESSAN', 987654321, 'Licence 1', 'elephant.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
