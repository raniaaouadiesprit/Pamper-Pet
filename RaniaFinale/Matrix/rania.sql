-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 mai 2021 à 19:53
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rania`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idArticle` int(11) NOT NULL,
  `Nom_article` varchar(20) NOT NULL,
  `Quantite` int(11) NOT NULL,
  `Description_article` varchar(20) NOT NULL,
  `Nom_fabriquant` varchar(20) NOT NULL,
  `NomCategorie` varchar(255) NOT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `Prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArticle`, `Nom_article`, `Quantite`, `Description_article`, `Nom_fabriquant`, `NomCategorie`, `Photo`, `Prix`) VALUES
(22, 'two', 15, 'bbb', 'DabYainnn', 'Nourriture', '185814384_324445775706284_1573930379031763082_n.jpg', 75000),
(23, 'ooo', 25, 'yyyyyyyyyyyy', 'DabYain', 'Nourriture', '185814384_324445775706284_1573930379031763082_n.jpg', 35000),
(24, 'abcccc', 10, 'wwww', 'mmmmm', 'Nourriture', 'available-subscriptions-favorable-whoever-hacker-wallpaper-for-fb.jpg', 10000),
(27, 'Yassin', 13, 'test', 'DabYainnnnnnnnnn', 'Nourriture', 'palastine_by_i7midan_d2motn9.jpg', 250000),
(28, 'Rania', 20, 'bbb', 'xxx', 'Nourriture', 'palastine_by_mohamedsaberartist_dc7q08p.jpg', 450000);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(11) NOT NULL,
  `NomCategorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `NomCategorie`) VALUES
(3, 'testppp'),
(7, 'mm');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idArticle`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
