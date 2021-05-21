-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8880
-- Généré le : jeu. 20 mai 2021 à 20:48
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `gestion-marketing`
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
(28, 'Rania', 20, 'bbb', 'xxx', 'Nourriture', 'palastine_by_mohamedsaberartist_dc7q08p.jpg', 450000),
(29, 'nom', 3, 'description', 'nomf', 'Accessoire', '183010256_10159994409564893_2195474843849638554_n.jpg', 100);

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
(63, 54, 3, 1);

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
(35, 55, 1, 'Valid'),
(37, 10, 1, 'Non Valid'),
(42, 25, 1, 'Non Valid'),
(41, 25, 1, 'Non Valid'),
(40, 107, 1, 'Non Valid'),
(39, 47, 1, 'Non Valid'),
(36, 55, 1, 'Valid'),
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
                          `Valid` int(11) NOT NULL DEFAULT '1',
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
(6, 4444, 1, 14);

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
(123, 7777, 'said', '2021-05-13', 'logo-feuille-chanvre-vintage-cbd-cannabis-cannabis-marijuana_57043-537.jpeg', 'Culture'),
(77779, 111, 'nomevent', '2121-12-12', 'logo-feuille-chanvre-vintage-cbd-cannabis-cannabis-marijuana_57043-537.jpeg', 'Culture'),
(77780, 12, 'nom', '1211-12-12', 'logo-feuille-chanvre-vintage-cbd-cannabis-cannabis-marijuana_57043-537.jpeg', 'Sportif'),
(77781, 10, 'nom', '2021-12-12', 'logo-feuille-chanvre-vintage-cbd-cannabis-cannabis-marijuana_57043-537.jpeg', 'Sportif'),
(77782, 12, 'nomMMM', '2021-12-12', 'logo-feuille-chanvre-vintage-cbd-cannabis-cannabis-marijuana_57043-537.jpeg', 'Culture'),
(77783, 12, 'nomevent', '2021-12-12', 'logo-feuille-chanvre-vintage-cbd-cannabis-cannabis-marijuana_57043-537.jpeg', 'Sportif');

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
(11, '1', 'bizerte', '2021-04-22', '939');

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
(1, 'joe', 'rakroukiii', 'youssef.rakrouki@esprit.tn', 12121212, '161742829_2760829190800558_5489253485416000048_n.jpeg');

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
(1, '2012-12-12', '2012-12-13', 12, 155),
(123456790, '2222-12-22', '2222-12-23', 12, 120),
(123456791, '1111-11-11', '2222-02-22', 12, 10),
(123456792, '1131-12-13', '1313-12-13', 12, 100),
(123456793, '1999-12-12', '1998-03-13', 2, 122),
(123456794, '2012-12-12', '2019-12-21', 1, 100);

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
(1, 'iheb', 'feriani', 'ferianiiheb@gmail.com', '123456789', '24843222', 'gafsa', 1),
(2, 'houba', 'feriani', 'iheb.feriani@esprit.tn', '12345678', '12', 'gafsa', 0);

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
    MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
    MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `cmd_produit`
--
ALTER TABLE `cmd_produit`
    MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
    MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `coupon`
--
ALTER TABLE `coupon`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `evenment`
--
ALTER TABLE `evenment`
    MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77784;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
    MODIFY `id_livraison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `livreur`
--
ALTER TABLE `livreur`
    MODIFY `id_livreur` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
    MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
    MODIFY `id_promo` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456795;

--
-- AUTO_INCREMENT pour la table `user_info`
--
ALTER TABLE `user_info`
    MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
