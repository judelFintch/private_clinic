-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 26 nov. 2021 à 15:23
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `clinicsoft`
--

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `postnom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `datenaiss` date NOT NULL,
  `genre` varchar(10) NOT NULL,
  `photo` blob NOT NULL,
  `typemedecin` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `adresse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`id`, `nom`, `postnom`, `prenom`, `datenaiss`, `genre`, `photo`, `typemedecin`, `role`, `tel`, `email`, `adresse`) VALUES
(1, 'sfsdfdsfdsf', 'sdasdsad', '', '2021-11-21', 'Homme', '', 'Generaliste', 'Visiteur', '46546546', 'christiankiyumbik@gmail.com', 'lshi');

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `postnom` varchar(50) NOT NULL,
  `presnom` varchar(50) NOT NULL,
  `datenaiss` varchar(50) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `photo` blob NOT NULL,
  `groupe` varchar(10) NOT NULL,
  `situation` varchar(50) NOT NULL,
  `tel` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`id`, `nom`, `postnom`, `presnom`, `datenaiss`, `genre`, `photo`, `groupe`, `situation`, `tel`, `email`, `adresse`) VALUES
(1, 'christian', 'chris', 'chris', '2021-11-14', 'Homme', '', '', '', 2147483647, 'christiankiyumbik@gmail.com', 'lshi'),
(2, 'christian', 'chris', 'chris', '2021-11-14', 'Homme', '', '', '', 2147483647, 'christiankiyumbik@gmail.com', 'lshi'),
(3, 'christian', 'chris', 'chris', '2021-11-14', 'Homme', '', '', '', 2147483647, 'christiankiyumbik@gmail.com', 'lshi'),
(4, 'christian', 'chris', 'chris', '2021-11-14', 'Homme', '', '', '', 2147483647, 'christiankiyumbik@gmail.com', 'lshi'),
(5, 'christian', 'chris', 'chris', '2021-11-10', 'Homme', 0x4172726179, 'O+', 'Célibataire', 596759869, 'christiankiyumbik@gmail.com', 'lshi');

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

CREATE TABLE `prestation` (
  `id` int(11) NOT NULL,
  `libelleprestation` varchar(80) NOT NULL,
  `prix` float NOT NULL,
  `nomservice` varchar(80) NOT NULL,
  `detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `prestation`
--

INSERT INTO `prestation` (`id`, `libelleprestation`, `prix`, `nomservice`, `detail`) VALUES
(1, 'shsfsdfds', 12222, 'Medical', 'service medical'),
(2, 'shsfsdfds', 12222, 'Medical', 'service medical');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id`, `libelle`, `detail`) VALUES
(2, 'NURSING', 'SERVICES INFIRMIER'),
(3, 'NURSING', 'SERVICES INFIRMIER'),
(4, 'NURSING', 'SERVICES INFIRMIER'),
(5, 'NURSING', 'SERVICES INFIRMIER'),
(6, 'laboratoir', 'service labo');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prestation`
--
ALTER TABLE `prestation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `prestation`
--
ALTER TABLE `prestation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
