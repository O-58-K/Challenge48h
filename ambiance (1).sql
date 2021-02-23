-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : eu-cdbr-west-03.cleardb.net
-- Généré le : mar. 23 fév. 2021 à 15:40
-- Version du serveur :  5.6.49-log
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `heroku_b9007de211fbd63`
--

-- --------------------------------------------------------

--
-- Structure de la table `ambiance`
--

CREATE TABLE `ambiance` (
  `id` int(11) NOT NULL,
  `photoProduit` varchar(30) NOT NULL,
  `photoHumain` varchar(30) NOT NULL,
  `credits` varchar(30) NOT NULL,
  `institutionnelle` varchar(30) NOT NULL,
  `url` varchar(2000) NOT NULL,
  `Titre` varchar(250) NOT NULL,
  `tag` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ambiance`
--

INSERT INTO `ambiance` (`id`, `photoProduit`, `photoHumain`, `credits`, `institutionnelle`, `url`, `Titre`, `tag`) VALUES
(1, '0', '1', '0', '0', 'ambiance/_AJG8279.jpg', 'Luxe', 'bien'),
(21, '0', '1', '0', '0', 'ambiance/AdobeStock_140683727.jpeg', 'Travail', 'work'),
(31, '0', '1', '0', '0', 'ambiance/AdobeStock_30838671.jpeg', 'Aide ', 'bien'),
(41, '0', '1', '0', '0', 'ambiance/_AJG8213.jpg', 'Nourriture', 'bien'),
(51, '', '', '', '', 'ambiance/AdobeStock_106008623.jpg', 'image', 'work');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ambiance`
--
ALTER TABLE `ambiance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ambiance`
--
ALTER TABLE `ambiance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
