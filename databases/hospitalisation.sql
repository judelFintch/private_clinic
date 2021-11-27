-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 27 nov. 2021 à 16:27
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `clinicsoft`
--

-- --------------------------------------------------------

--
-- Structure de la table `hospitalisation`
--

CREATE TABLE `hospitalisation` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `patient` int(11) NOT NULL COMMENT 'id du patient',
  `medecintr` int(11) NOT NULL COMMENT 'id du medecin traitant',
  `motifhosp` varchar(255) DEFAULT NULL COMMENT 'Motif d hospitalisation',
  `datehosp` varchar(10) DEFAULT NULL COMMENT 'Date d hospitalisation',
  `serv_id` int(11) NOT NULL COMMENT 'id de la personne qui a hospitalisé le patient',
  `note` varchar(255) DEFAULT NULL COMMENT 'Note sur l hospitalisation',
  `datesort` datetime DEFAULT NULL COMMENT 'Date sortie du patient',
  `statut_hosp` int(1) NOT NULL COMMENT 'statut hospitalisation, 0 : en cours de traitement, 1 : liberer',
  `chambre` int(11) NOT NULL,
  `lit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hospitalisation`
--

INSERT INTO `hospitalisation` (`id`, `patient`, `medecintr`, `motifhosp`, `datehosp`, `serv_id`, `note`, `datesort`, `statut_hosp`, `chambre`, `lit`) VALUES
(1, 1, 1, 'Diabete', '2021-11-03', 1, 'frfrfrf', '2021-11-27 00:00:00', 1, 0, 0),
(2, 3, 1, 'WY', '2021-11-25', 2, 'fdfdf', NULL, 0, 0, 0),
(3, 1, 1, 'Diabete', '2021-11-11', 5, '', NULL, 0, 0, 0),
(4, 3, 2, 'WY', '2021-11-11', 5, 'sdfdfdf', NULL, 0, 4, 2),
(5, 2, 1, 'WY', '2021-11-11', 5, 'sdfdfdf ', NULL, 0, 4, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `hospitalisation`
--
ALTER TABLE `hospitalisation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `hospitalisation`
--
ALTER TABLE `hospitalisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
