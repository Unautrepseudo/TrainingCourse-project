-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 16 jan. 2020 à 11:23
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `artisan`
--

CREATE TABLE `artisan` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pseudo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` int(11) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `birthday` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `pseudo`, `gender`, `email`, `address`, `city`, `zip_code`, `phone_number`, `birthday`, `created_at`) VALUES
(1, 'dfgfg', 'dfg', 'dfgdf', 'female', 'aboudoumounir@hotmail.fr', '4 square Pascal Grousset', 'Evry', 91000, 786825697, '2015-01-01 00:00:00', '0000-00-00 00:00:00'),
(2, 'Mounir', 'Aboudou', 'dfgdfgdfgdfgdf', 'male', 'aboudoumounir@hotmail.fr', '4 square Pascal Grousset', 'Evry', 91000, 786825697, '2015-01-01 00:00:00', '2020-01-10 15:04:38');

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` datetime NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_user` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speciality` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artisan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `last_name`, `birthday`, `address`, `city`, `zip_code`, `phone_number`, `role_user`, `company`, `image`, `speciality`, `about`, `artisan_id`) VALUES
(14, 'jean', 'jean', 'jean@jean.fr', 'jean@jean.fr', 0, '3MDjd0WqledBdBVSwG6r6LnLES4.rs1aGwo.zQ8DnoU', '$2y$13$GKKfh/QEBn4WHCuEiX54eufbJtxaEoNWxpjYvTmp6N03ipa2rbJnO', NULL, NULL, NULL, 'a:0:{}', 'françois', '2015-01-01 00:00:00', 'rue jean', 'jeanville', '78000', '0105040302', 'customer', NULL, NULL, NULL, NULL, NULL),
(15, 'alber', 'alber', 'alber@castor.fr', 'alber@castor.fr', 0, 'ANKTWNHmjQqZ0i0wa23TTQhYTk0QVON0zF24.QJ1loA', '$2y$13$bhnkyJ.ioVcTdNqQ7By1KeKqvJfqSDrmgwc0AQYwP5oFwXi26Id6m', NULL, NULL, NULL, 'a:0:{}', 'Delaforet', '2015-01-01 00:00:00', 'rue de la foret', 'castorville', '78000', '0102030405', 'artisan', 'castorFirm', 'food15.jpg', 'castorman', 'chat', NULL),
(16, 'admin', 'admin', 'toto@hotmail.fr', 'toto@hotmail.fr', 1, 'y11Mam1T7zTJPK2o9McMdtXXYspHn8s23EKkQxCjY6Y', '$2y$13$MMdYFaHxBERxsSu0P.MpseC9csKrQXsdDBeZCpaFSTPmnYfB1QKI.', '2020-01-15 14:21:13', NULL, NULL, 'a:0:{}', 'TOTTI', '2015-01-01 00:00:00', 'rue de la foret', 'castorville', '78000', '0102030405', 'customer', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `picture_one` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture_two` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture_three` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materials` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artisan_company` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artisan_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artisan_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artisan`
--
ALTER TABLE `artisan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_3C600AD3A76ED395` (`user_id`);

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`),
  ADD UNIQUE KEY `UNIQ_957A64795ED3C7B7` (`artisan_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04AD5ED3C7B7` (`artisan_id`),
  ADD KEY `IDX_D34A04AD9395C3F3` (`customer_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artisan`
--
ALTER TABLE `artisan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `artisan`
--
ALTER TABLE `artisan`
  ADD CONSTRAINT `FK_3C600AD3A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD CONSTRAINT `FK_957A64795ED3C7B7` FOREIGN KEY (`artisan_id`) REFERENCES `artisan` (`id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD5ED3C7B7` FOREIGN KEY (`artisan_id`) REFERENCES `artisan` (`id`),
  ADD CONSTRAINT `FK_D34A04AD9395C3F3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
