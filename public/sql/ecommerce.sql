-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 16 jan. 2020 à 15:23
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
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `last_name`, `birthday`, `address`, `city`, `zip_code`, `phone_number`, `role_user`, `company`, `image`, `speciality`, `about`, `product_id`) VALUES
(19, 'jerome', 'jerome', 'jerome@hotmail.fr', 'jerome@hotmail.fr', 1, 'B9HItIiAEKNCdgPMkOI2XiSrgQSTsSJ8BtuVxlWd2vA', '$2y$13$ZBHztIY1cTXD9mKzHus07O0GAtVzGx9YT3bLynQRctXaGd0dG/Rei', NULL, NULL, NULL, 'a:0:{}', 'NomJerome', '2022-05-02 07:09:00', 'rue jerome', 'Trappes', '78000', '0102030405', 'customer', NULL, NULL, NULL, NULL, NULL),
(20, 'julien', 'julien', 'julien@hotmail.fr', 'julien@hotmail.fr', 1, '4vbLNh2pDzjuIGiS8I/53nYam9ngojzg8nwTR8F.yNY', '$2y$13$DziHLSJ5g7reJMIGd1.LXueDvmLyc49AC7W5jlK1FEPItvf.pfjt6', NULL, NULL, NULL, 'a:0:{}', 'Nomjulien', '2020-06-08 05:05:00', 'rue julien', 'Trappes', '78000', '0102030405', 'customer', NULL, NULL, NULL, NULL, NULL),
(21, 'Seb', 'seb', 'seb@gmail.com', 'seb@gmail.com', 1, '4qW0LJCIVEQkM0MLWCjtyCYOzqFbOC06f2J1TD8mDbw', '$2y$13$7KM27UWX8hOUiP26bX3KheMwZQ1KGLHJDWg2VcIREtunRIyjIxLdS', NULL, NULL, NULL, 'a:0:{}', 'NomSeb', '2022-11-08 00:04:00', 'rue seb', 'Trappes', '78000', '0102030405', 'customer', NULL, NULL, NULL, NULL, NULL),
(22, 'Camille', 'camille', 'camille@gmail.com', 'camille@gmail.com', 0, 'hw8DdEOMAq3SAlGm/9jkP94o3AO9Mhvp.JIHJeojYHw', '$2y$13$idvJzMK08eh92kGEwgt4r..vOzzQQ4sIzDaJR7RgZqt3nfG1mUUj6', NULL, NULL, NULL, 'a:0:{}', 'Ellimac', '2021-07-09 08:11:00', 'rue Camille', 'Trappes', '78000', '0102030405', 'artisan', 'CamilleFirme', 'Camille.jpg', 'Ameublement', 'J\'aime créer des meubles en bois pour toute la maison', NULL),
(23, 'Maellya', 'maellya', 'maellya@gmail.com', 'maellya@gmail.com', 0, 'WEwgbIYvOVzfjFVN/rGL1ZVnGBdHERWS5miRjF1Git8', '$2y$13$ILyfVNZngVel7sbmBn6nTOtf/NM1ZsM5fnh.GFYwIi1nK0XTTXGYe', NULL, NULL, NULL, 'a:0:{}', 'Aylleam', '2019-05-18 00:00:00', 'rue de maellya', 'Trappes', '78000', '0102030405', 'artisan', 'MaellyaFirme', 'Maellya.jpg', 'joalier', 'J\'aime créer des bijoux pour toute la famille', NULL),
(24, 'Edouardo', 'edouardo', 'edouardo@gmail.com', 'edouardo@gmail.com', 0, 'TD/gEUnIrmd9GE382p8vKmyBUy19KKmrt5tYV3dI.4Y', '$2y$13$vICVBZWHwmc1rXpY7vi92On0d7HrgOxQRLaA3WpjRWhGC9M0viHiG', NULL, NULL, NULL, 'a:0:{}', 'Odrauode', '2025-12-29 00:00:00', 'rue edouardo', 'Trappes', '78000', '0102030405', 'artisan', 'EdouardoFirme', 'edouardo.jpg', 'potier', 'J\'aime créer des produits pour la maison', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `materials` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `reference`, `price`, `materials`, `stock`, `description`, `image`, `user_id`) VALUES
(8, 'Chaise en boix', '123', 45, 'bois', 6, 'Très belle chaise en bois', 'chaise.jpg', 22),
(9, 'Collier en or', '456', 1568, 'or', 7, 'Très beau collier en or', 'collier 1.jpg', 23),
(10, 'Vase', '789', 25, 'plâtre', 6, 'Jolie vase', 'Robot 1.jpg', 24);

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
  ADD UNIQUE KEY `UNIQ_957A64794584665A` (`product_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04ADA76ED395` (`user_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  ADD CONSTRAINT `FK_957A64794584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04ADA76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
