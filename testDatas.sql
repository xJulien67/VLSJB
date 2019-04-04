-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 04 avr. 2019 à 18:42
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vlsjb`
--

-- --------------------------------------------------------

--
-- Structure de la table `activity`
--

DROP TABLE IF EXISTS `activity`;
CREATE TABLE IF NOT EXISTS `activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sport_id` int(11) NOT NULL,
  `activitytype_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `distance` double NOT NULL,
  `duration` time NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `average_pace` time NOT NULL,
  `average_speed` double NOT NULL,
  `heart_rate` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AC74095AAC78BCF8` (`sport_id`),
  KEY `IDX_AC74095A6E098B10` (`activitytype_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `activity`
--

INSERT INTO `activity` (`id`, `sport_id`, `activitytype_id`, `date`, `distance`, `duration`, `place`, `partner`, `average_pace`, `average_speed`, `heart_rate`) VALUES
(1, 1, 1, '2019-03-07', 10, '01:30:00', 'Amiens', 'Valentin', '00:02:00', 1, NULL);
INSERT INTO `activity` (`id`, `sport_id`, `activitytype_id`, `date`, `distance`, `duration`, `place`, `partner`, `average_pace`, `average_speed`, `heart_rate`) VALUES
(2, 4, 1, '2019-03-23', 1, '01:30:00', 'Amiens', 'Nico', '00:02:00', 1, NULL);
INSERT INTO `activity` (`id`, `sport_id`, `activitytype_id`, `date`, `distance`, `duration`, `place`, `partner`, `average_pace`, `average_speed`, `heart_rate`) VALUES
(3, 3, 1, '2019-04-02', 12, '01:30:00', 'Amiens', '', '00:02:00', 1, NULL);
INSERT INTO `activity` (`id`, `sport_id`, `activitytype_id`, `date`, `distance`, `duration`, `place`, `partner`, `average_pace`, `average_speed`, `heart_rate`) VALUES
(4, 2, 1, '2019-04-05', 5, '01:30:00', 'Amiens', '', '00:02:00', 1, NULL);
INSERT INTO `activity` (`id`, `sport_id`, `activitytype_id`, `date`, `distance`, `duration`, `place`, `partner`, `average_pace`, `average_speed`, `heart_rate`) VALUES
(5, 5, 1, '2019-04-10', 3, '01:30:00', 'Amiens', '', '00:02:00', 1, NULL);
INSERT INTO `activity` (`id`, `sport_id`, `activitytype_id`, `date`, `distance`, `duration`, `place`, `partner`, `average_pace`, `average_speed`, `heart_rate`) VALUES
(6, 1, 1, '2019-04-15', 1, '01:30:00', 'Amiens', '', '00:02:00', 1, NULL);
INSERT INTO `activity` (`id`, `sport_id`, `activitytype_id`, `date`, `distance`, `duration`, `place`, `partner`, `average_pace`, `average_speed`, `heart_rate`) VALUES
(7, 6, 1, '2019-04-18', 1, '01:30:00', 'Amiens', '', '00:02:00', 1, NULL);
INSERT INTO `activity` (`id`, `sport_id`, `activitytype_id`, `date`, `distance`, `duration`, `place`, `partner`, `average_pace`, `average_speed`, `heart_rate`) VALUES
(8, 4, 1, '2019-04-27', 1, '01:30:00', 'Amiens', '', '00:02:00', 1, NULL);
INSERT INTO `activity` (`id`, `sport_id`, `activitytype_id`, `date`, `distance`, `duration`, `place`, `partner`, `average_pace`, `average_speed`, `heart_rate`) VALUES
(9, 3, 1, '2019-05-03', 1, '01:30:00', 'Amiens', 'Valentin', '00:02:00', 1, NULL);
INSERT INTO `activity` (`id`, `sport_id`, `activitytype_id`, `date`, `distance`, `duration`, `place`, `partner`, `average_pace`, `average_speed`, `heart_rate`) VALUES
(10, 1, 1, '2019-05-07', 1, '01:30:00', 'Amiens', 'Nico', '00:02:00', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `activitytype`
--

DROP TABLE IF EXISTS `activitytype`;
CREATE TABLE IF NOT EXISTS `activitytype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activitytype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `activitytype`
--

INSERT INTO `activitytype` (`id`, `activitytype`) VALUES
(1, 'Entrainement'),
(2, 'Compétition'),
(4, 'Seuil'),
(5, 'Fractionné');

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20190404183519', '2019-04-04 18:35:25');

-- --------------------------------------------------------

--
-- Structure de la table `sport`
--

DROP TABLE IF EXISTS `sport`;
CREATE TABLE IF NOT EXISTS `sport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sportname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sport`
--

INSERT INTO `sport` (`id`, `sportname`) VALUES
(1, 'Run'),
(2, 'Swim'),
(3, 'Bike'),
(4, 'Muscu'),
(5, 'Triathlon'),
(6, 'Swimrun');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `FK_AC74095A6E098B10` FOREIGN KEY (`activitytype_id`) REFERENCES `activitytype` (`id`),
  ADD CONSTRAINT `FK_AC74095AAC78BCF8` FOREIGN KEY (`sport_id`) REFERENCES `sport` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
