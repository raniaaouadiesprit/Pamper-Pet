-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 21 mai 2021 à 06:44
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pamper_pet`
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
(23, 'ooo', 25, 'yyyyyyyyyyyy', 'lux', 'Accessoire', '172838153_157507796272023_855056091244618997_n.jpg', 35000),
(24, 'abcccc', 10, 'wwww', 'mmmmm', 'Nourriture', '172474852_600155558047214_7179423654208457535_n.jpg', 10000),
(27, 'pok', 13, 'test', 'plm', 'Nourriture', '172617949_228516155728826_6575218528284303514_n.jpg', 250000),
(28, 'Rania', 20, 'bbb', 'xxx', 'Nourriture', '173130531_519833012511247_7489494368461141665_n.jpg', 450000),
(29, 'nom', 3, 'description', 'nomf', 'Nourriture', '173202743_261398005633447_7074865782569217561_n.jpg', 100);

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
(7, 'mm'),
(8, 'nomcat');

-- --------------------------------------------------------

--
-- Structure de la table `cmd_produit`
--

CREATE TABLE `cmd_produit` (
  `id` int(10) NOT NULL,
  `id_cmd` int(10) NOT NULL,
  `id_produit` int(10) DEFAULT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cmd_produit`
--

INSERT INTO `cmd_produit` (`id`, `id_cmd`, `id_produit`, `qty`) VALUES
(1, 23, NULL, 0),
(2, 23, NULL, 0),
(3, 23, NULL, 0),
(4, 23, NULL, 0),
(5, 23, NULL, 0),
(6, 24, 1, 0),
(7, 24, 2, 0),
(8, 24, 3, 0),
(9, 24, 4, 0),
(10, 25, 1, 0),
(11, 25, 2, 0),
(12, 25, 3, 0),
(13, 26, 1, 0),
(14, 26, 2, 0),
(15, 26, 3, 0),
(16, 27, 1, 0),
(17, 27, 3, 0),
(18, 30, 3, 3),
(19, 31, 2, 1),
(20, 31, 3, 1),
(21, 32, 2, 1),
(22, 32, 3, 1),
(23, 33, 2, 1),
(24, 33, 3, 1),
(25, 34, 2, 1),
(26, 34, 3, 1),
(27, 35, 2, 3),
(28, 35, 3, 2),
(29, 36, 2, 3),
(30, 36, 3, 2),
(31, 37, 1, 1),
(32, 38, 1, 1),
(33, 38, 2, 1),
(34, 39, 1, 1),
(35, 39, 2, 1),
(36, 39, 3, 1),
(37, 39, 4, 1),
(38, 40, 1, 4),
(39, 40, 2, 1),
(40, 40, 3, 1),
(41, 40, 4, 1),
(42, 41, 1, 1),
(43, 41, 2, 1),
(44, 42, 1, 1),
(45, 42, 2, 1),
(46, 43, 1, 1),
(47, 43, 2, 1),
(48, 44, 1, 1),
(49, 45, 1, 1),
(50, 46, 1, 1),
(51, 47, 1, 1),
(52, 48, 1, 1),
(53, 49, 1, 1),
(54, 50, 1, 1),
(55, 50, 2, 1),
(56, 51, 1, 1),
(57, 51, 2, 1),
(58, 51, 3, 1),
(59, 52, 2, 1),
(60, 53, 2, 1),
(61, 53, 3, 1),
(62, 54, 2, 1),
(63, 54, 3, 1),
(64, 55, 1, 1),
(65, 55, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `etat` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `total`, `user_id`, `etat`) VALUES
(50, 20, 1, 'Non Valid'),
(49, 16, 1, 'Non Valid'),
(48, 20, 1, 'Non Valid'),
(47, 16, 1, 'Non Valid'),
(46, 16, 1, 'Non Valid'),
(45, 16, 1, 'Non Valid'),
(44, 20, 1, 'Non Valid'),
(43, 25, 1, 'Non Valid'),
(37, 10, 1, 'Non Valid'),
(42, 25, 1, 'Non Valid'),
(41, 25, 1, 'Non Valid'),
(40, 107, 1, 'Non Valid'),
(39, 47, 1, 'Non Valid'),
(55, 15, 1, 'Non Valid'),
(51, 45, 1, 'Non Valid'),
(52, 5, 1, 'Non Valid'),
(53, 25, 1, 'Non Valid'),
(54, 22, 1, 'Non Valid');

-- --------------------------------------------------------

--
-- Structure de la table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `code` int(20) NOT NULL,
  `Valid` int(11) NOT NULL DEFAULT 1,
  `pourcentage` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `coupon`
--

INSERT INTO `coupon` (`id`, `code`, `Valid`, `pourcentage`) VALUES
(1, 4545, 1, 20),
(2, 7777, 1, 80),
(3, 7788, 1, 7),
(4, 7777, 1, 14),
(5, 7774, 1, 14),
(6, 4444, 1, 14),
(7, 1111, 1, 50);

-- --------------------------------------------------------

--
-- Structure de la table `evenment`
--

CREATE TABLE `evenment` (
  `id` int(10) NOT NULL,
  `nbr_invt` int(13) NOT NULL,
  `nom_evn` varchar(30) NOT NULL,
  `date_evn` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `type_evn` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evenment`
--

INSERT INTO `evenment` (`id`, `nbr_invt`, `nom_evn`, `date_evn`, `image`, `type_evn`) VALUES
(77780, 12, 'nom', '1211-12-12', 'logo-feuille-chanvre-vintage-cbd-cannabis-cannabis-marijuana_57043-537.jpeg', 'Sportif'),
(77782, 12, 'nomMMM', '2021-12-12', 'logo-feuille-chanvre-vintage-cbd-cannabis-cannabis-marijuana_57043-537.jpeg', 'Culture'),
(77785, 122, 'nomevent', '2021-12-12', 'promotion.jpeg', 'Culture'),
(77787, 7, 'oussama', '2021-05-31', 'logo-feuille-chanvre-vintage-cbd-cannabis-cannabis-marijuana_57043-537.jpeg', 'Culture'),
(77788, 7, 'CKCKC', '2021-05-27', 'EVENTA.jpg', 'Culture'),
(77789, 7, 'ahmed', '2021-05-25', 'Capture-d’écran-2018-11-07-à-11.22.52-780x321.png', 'Noel'),
(77790, 7, 'ahmed', '2021-06-02', '', 'saint_valentin'),
(77791, 88, 'ahmed', '2021-05-24', 'téléchargement.jpg', 'saint_valentin'),
(77792, 88, 'ahmed', '2021-05-25', 'EVENTA.jpg', 'Culture');

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `id_livraison` int(11) NOT NULL,
  `id_livreur` varchar(11) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `id_commande` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`id_livraison`, `id_livreur`, `destination`, `date`, `id_commande`) VALUES
(13, '9', 'ben gerden', '2021-05-21', '42'),
(14, '3', 'tatawine', '2021-05-21', '47'),
(15, '9', 'menzel temime', '2021-05-21', '54'),
(17, '0', 'oudhref ,gabes ', '2021-05-21', '44');

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

CREATE TABLE `livreur` (
  `id_livreur` int(8) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numero` int(8) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`id_livreur`, `nom`, `prenom`, `email`, `numero`, `image`) VALUES
(2, 'nomjoe', 'loloy', 'mortadha.bouzgarrou@esprit.tn', 12312312, 'livreur-porte-du-recepteur_23-2148593095.jpg'),
(3, 'joe', 'rak', 'oussama.said@esprit.tn', 12121212, '132564006_1697583637083121_6271772578592466369_n.jpg'),
(9, 'morata', 'cristiano', 'oussama.said@esprit.tn', 12345698, 'e2884474-ebf9-46ff-9b72-568f3d26b860.png'),
(10, 'ben yahya', 'alla', 'mortadha.bouzgarrou@esprit.tn', 14785203, 'concept-de-la-livraison-portrait-vue-côté-livreur-heureux-d-afro-américain-en-tissu-rouge-tenant-un-paquet-boîte-135590306.jpg'),
(11, 'ben yahya', 'SALEH', 'mortadha.bouzgarrou@esprit.tn', 12365489, 'livreur-porte-du-recepteur_23-2148593095.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_qty`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 2, 1, 'Royal Canin', 20, 20, '', 'royal.jpg', 'fromage,gruyere'),
(2, 12, 3, 'Litiere minerale', 5, 10, '', 'litere.jpg', 'cereal'),
(3, 1, 4, 'Cage Evoque Medium', 20, 30, '', 'cage.png', 'jus'),
(4, 12, 3, 'Croquettes Chien', 2, 40, '', 'croq.jpg', 'Nwasser');

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id_promo` int(7) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `idArticle` int(11) NOT NULL,
  `nouv_prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id_promo`, `date_debut`, `date_fin`, `idArticle`, `nouv_prix`) VALUES
(123456794, '2012-12-12', '2019-12-21', 1, 100),
(123456795, '2021-05-27', '2021-06-05', 29, 77);

-- --------------------------------------------------------

--
-- Structure de la table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `role`) VALUES
(1, 'ons', 'diweni', 'ons.diweni@esprit.tn', '123456789', '24591123', 'tunis', 1);

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
-- Index pour la table `cmd_produit`
--
ALTER TABLE `cmd_produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evenment`
--
ALTER TABLE `evenment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`id_livraison`);

--
-- Index pour la table `livreur`
--
ALTER TABLE `livreur`
  ADD PRIMARY KEY (`id_livreur`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id_promo`);

--
-- Index pour la table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `cmd_produit`
--
ALTER TABLE `cmd_produit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `evenment`
--
ALTER TABLE `evenment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77793;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `id_livraison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `livreur`
--
ALTER TABLE `livreur`
  MODIFY `id_livreur` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id_promo` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456796;

--
-- AUTO_INCREMENT pour la table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
