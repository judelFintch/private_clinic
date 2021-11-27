-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 11:48 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clinicsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `medecin`
--

CREATE TABLE IF NOT EXISTS `medecin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `adresse` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `medecin`
--

INSERT INTO `medecin` (`id`, `nom`, `postnom`, `prenom`, `datenaiss`, `genre`, `photo`, `typemedecin`, `role`, `tel`, `email`, `adresse`) VALUES
(1, 'sfsdfdsfdsf', 'sdasdsad', '', '2021-11-21', 'Homme', '', 'Generaliste', 'Visiteur', '46546546', 'christiankiyumbik@gmail.com', 'lshi');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `adresse` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `nom`, `postnom`, `presnom`, `datenaiss`, `genre`, `photo`, `groupe`, `situation`, `tel`, `email`, `adresse`) VALUES
(1, 'christian', 'chris', 'chris', '2021-11-14', 'Homme', '', '', '', 2147483647, 'christiankiyumbik@gmail.com', 'lshi'),
(2, 'christian', 'chris', 'chris', '2021-11-14', 'Homme', '', '', '', 2147483647, 'christiankiyumbik@gmail.com', 'lshi'),
(3, 'christian', 'chris', 'chris', '2021-11-14', 'Homme', '', '', '', 2147483647, 'christiankiyumbik@gmail.com', 'lshi'),
(4, 'christian', 'chris', 'chris', '2021-11-14', 'Homme', '', '', '', 2147483647, 'christiankiyumbik@gmail.com', 'lshi'),
(5, 'christian', 'chris', 'chris', '2021-11-10', 'Homme', 0x4172726179, 'O+', 'Célibataire', 596759869, 'christiankiyumbik@gmail.com', 'lshi');

-- --------------------------------------------------------

--
-- Table structure for table `prestation`
--

CREATE TABLE IF NOT EXISTS `prestation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleprestation` varchar(80) NOT NULL,
  `prix` float NOT NULL,
  `nomservice` varchar(80) NOT NULL,
  `detail` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `prestation`
--

INSERT INTO `prestation` (`id`, `libelleprestation`, `prix`, `nomservice`, `detail`) VALUES
(1, 'shsfsdfds', 12222, 'Medical', 'service medical'),
(2, 'shsfsdfds', 12222, 'Medical', 'service medical');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_code` varchar(10) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `room_price` float NOT NULL,
  `room_details` varchar(100) NOT NULL,
  PRIMARY KEY (`id`,`room_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_code`, `room_type`, `room_price`, `room_details`) VALUES
(3, 'chambre1', 'Moyen', 20, 'detaisl chanmbre'),
(4, 'chambre1', 'Moyen', 20, 'detaisl chanmbre'),
(5, 'chambre1', 'Moyen', 20, 'detaisl chanmbre');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  `detail` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `libelle`, `detail`) VALUES
(5, 'NURSING', 'SERVICES INFIRMIER'),
(8, 'Chambre', '20'),
(9, 'Chambre', '20'),
(10, 'SGAD', 'detail'),
(11, 'SGAD', 'l');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL COMMENT 'password',
  `password_user` varchar(15) NOT NULL,
  `level` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password_user`, `level`) VALUES
(1, '1010', '1010', 1),
(2, '66', '66', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
