-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 20 jan. 2020 à 16:35
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
  `speciality` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_user` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
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
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `last_name`, `address`, `city`, `zip_code`, `role_user`, `company`, `image`, `speciality`, `about`, `product_id`) VALUES
(28, 'Camille', 'camille', 'camille@gmail.com', 'camille@gmail.com', 1, 'u/bULc4puHt8dBX7C/X6KfT9rWh3WjSH/0oKxQfnfog', '$2y$13$uzfkU0.qIafdsTgbrvPe5.qG58Ue9D93rfdjcmY05VAUcXdMSqs/u', '2020-01-20 15:14:06', NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Dubois', 'Rue de camille', 'Toulouse', '31000', 'artisan', 'Chaise\'amille', 'Camille.jpg', 'Menusier', 'Chaise\'amille, c\'est surtout le bonheur, l\'important du sois, le travail par moi même. J\'aime le boi', NULL),
(29, 'Edouard', 'edouard', 'edouard@gmail.com', 'edouard@gmail.com', 1, 'lWDvdduHlplG1vd0zCMmOTBZIFqkDS1IwBaeKOHUOdQ', '$2y$13$FV5zS0J6rI.ubuV1hbYKLufUMz/h34boSS.DJtRvkF3QULMae444q', '2020-01-20 15:49:40', NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Labour', 'Rue Edouard', 'Strasbourg', '67000', 'artisan', 'Le cabinet Cogniac', 'Edouard.jpg', 'Menusier', 'Le cabinet Cogniac, c\'est avant tout un projet fait main, par mes mains, pour vos envies ! je ne fai', NULL),
(36, 'Edwig', 'edwig', 'edwig@gmail.com', 'edwig@gmail.com', 1, 'Sr4XTjz/XGM5yli9mCuiMu33NI2NKr9RgVPQja8kV0c', '$2y$13$U14APp3LVofRUhVX7ApYme5FofpKBLjbPk0mciHlM85.4KwjXfsfW', '2020-01-20 16:31:35', NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Lechamp', 'rue edwig', 'Brest', '29200', 'artisan', 'Edwig familly', 'Edwig.jpg', 'Forgeron', 'Edwig family c\'est avant tout une histoire de famille. La conception de meubles nous connait depuis', NULL),
(37, 'François', 'françois', 'francois@gmail.com', 'francois@gmail.com', 1, 'RkkyDTQxPxCCk4HqbW7xb5ENzLmQXVwS7O9HIkusgoA', '$2y$13$Ssm6dQC67k2KZepb0vkAdO8L/bEPvguFLtEjopoL2.K6J536IIxuu', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Dupont', 'Rue françois', 'Nice', '06000', 'artisan', 'Franc Azur', 'François.jpg', 'Bijoutier', 'François , 47 ans, Orphèvre depuis mes 10 ans. J\'aime faire ce métier, et je le ferrais jusqu\'a ma m', NULL),
(38, 'Jean-Baptiste', 'jean-baptiste', 'jeanbaptiste@gmail.com', 'jeanbaptiste@gmail.com', 1, 'LndPX7zwc9ZMrXbsUa3mU9S/jPf29Y61Z2JgX3mcbu4', '$2y$13$bqP1/sH9D7AXZJ.Uwlk.V.7stPYK51WdAXCbl56gvIg55qEyARGWO', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Lavois', 'Rue Jean-Baptiste', 'Bordeaux', '33000', 'artisan', 'Eben', 'Jean Baptiste.jpg', 'Menusier', 'Jean-Baptiste ébéniste de père en fils, créant chaise et meuble à votre convenance, toute les pièces', NULL),
(39, 'Julie', 'julie', 'julie@gmail.com', 'julie@gmail.com', 1, '2W83RtexIbVid3HG0zGeUWEpSIT3sJapHmeRA5vsnp0', '$2y$13$Qe./IYgLx9tL00KahEc5UeWP8XhkDKJD0Hr43Ic6VZsNOj0Y7pufG', '2020-01-20 16:25:35', NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Ducroix', 'Rue de Julie', 'Lille', '59000', 'artisan', 'Forg Life', 'Julie.jpeg', 'Forgeron', 'Techniques modernes et savoir-faire traditionnel à votre service Redonnez une seconde vie à vos meub', NULL),
(40, 'Julien', 'julien', 'julien@gmail.com', 'julien@gmail.com', 1, 'tNPe06PiCEubbot7JqUYndS7wyYQkeisEIlqFwEE6Ro', '$2y$13$/aXNh5EjOLkh/.cdZja55e.bsI2q.OBj0iRYWAIBSRo.p6nF0RWbq', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Delacroix', 'Rue de Julien', 'Evry', '91000', 'artisan', 'Jouet Main', 'Julien.jpg', 'Autre', 'Jouets fait main, fais pas le malin, tel est ton destin ! Amazon en octogone, ebay soldé ! Mort aux', NULL),
(41, 'Luc', 'luc', 'luc@gmail.com', 'luc@gmail.com', 1, 'ZoybWVzSY2Lx4mmu88Vu0pP49h6/1IXE6wyGzTd8RJY', '$2y$13$VnUfgoD9MVTDLTHzjx5DtO9QY4EGl2hFnRRDfMfdh0rIN.NRcafVG', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Lamar', 'Rue de Luc', 'Paris', '75003', 'artisan', 'Au potier heureux', 'Luc.jpg', 'Potier', 'Au potier heureux, on est heureux et comme vous l\'avez devinez , on fait de la poterie. Tout est her', NULL),
(42, 'Lucas', 'lucas', 'lucas@gmail.com', 'lucas@gmail.com', 1, 'xQBOE6C1MDOiVdo2zhQnEXbeOPbsGrmutRAdfprSU8U', '$2y$13$B3Pcn1K2WIhHev2kwm0wMeBQ7cwRLWdvdYVzw6NKhHjvj0y9NigDS', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Lacour', 'Rue de Lucas', 'Marseille', '13000', 'artisan', 'JouetClub', 'Lucas.jpg', 'Autre', 'Jouet club, jouet club, la passion du jouet ! Jouet club, jouet club, la passion du jouet ! Jouet cl', NULL),
(43, 'Ludwig', 'ludwig', 'ludwig@gmail.com', 'ludwig@gmail.com', 1, 'TpDk//71mKmej7mh3uBF.ydc44kLEcUxUiFV7R4UHDU', '$2y$13$2054m1uBNCLe9sd5BCqxGe7Stgu9DAnc.agvFFFpNgrRg3ZOQx28.', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Bonhumeur', 'Rue de Ludwig', 'Lyon', '69000', 'artisan', 'Lu Jouet', 'Ludwig.jpeg', 'Autre', 'Ludwig 60 ans, 30 ans de métier', NULL),
(44, 'Lyza', 'lyza', 'lyza@gmail.com', 'lyza@gmail.com', 1, 'GBEP2aE1jXvfv3lP8CHCcFdhQSewqkCuuK/1zyK/EZo', '$2y$13$bbzoHlptOmI1BhA1TontaulBQQqKkfF/U9lBW26LGhB1ROjvKKR8S', '2020-01-20 16:17:34', NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Lajoie', 'Rue de Lyza', 'Cergy', '95000', 'artisan', 'Manufac Ly', 'Lyza.jpg', 'Forgeron', 'Manufacture, manufacture, tout est mure, nous ne construisons pas des murs. Manufacture, manufacture', NULL),
(45, 'Maellya', 'maellya', 'maellya@gmail.com', 'maellya@gmail.com', 1, 'HxmWZZ8Wa2BZqS.1ur9KbqMq.Qb0pzyj8nbQv8SUDSg', '$2y$13$zmH6qXeSOI4Sba9qWl1T6u6uoy6jEuzK4UgrfMsT4UieVNJtVJZf.', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Victoire', 'rue de Maellya', 'Massy', '91300', 'artisan', 'BijouMain', 'Maellya.jpg', 'Bijoutier', 'Etre bien c\'est nous choisir', NULL),
(46, 'Malik', 'malik', 'malik@gmail.com', 'malik@gmail.com', 1, 'QYfmdXsNVygDKDxriJ/tsaY6zUZvMxLXAZMdPOiMU0o', '$2y$13$O9S1aSJ/406l1j/bIybstePKrlm7G79FvNcJRdvSt/12ciwQ5/xeC', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Yan', 'Rue du roi', 'Gentilly', '94250', 'artisan', 'PerlBi', 'Malik.jpg', 'Bijoutier', 'perles et bijoux, Tout types de matériaux, Savoir faire mémorable, Savoir faire innégalable, La décé', NULL),
(47, 'Mohammed', 'mohammed', 'mohammed@gmail.com', 'mohammed@gmail.com', 1, 'mTPWBTsAk56ciCA2rI4rBTFI3JPwKpWCIHGihXaW7VM', '$2y$13$pvYg6qHrp2KDh5AsdHBU8.IR.XKKjJRKWhiL3q12IkULEUnROmWoC', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Davoix', 'Rue de Mohammed', 'Rungis', '94150', 'artisan', 'Tapicour', 'Mohammed.jpg', 'Tapissier', 'la description n\'est pas utile au vu de la qualité des produits', NULL),
(48, 'Sahmara', 'sahmara', 'sahmara@gmail.com', 'sahmara@gmail.com', 1, 'zoNbnwZadE3ipmX9IEAFsgxmoQjYrtqI3BCLrt2dlkA', '$2y$13$7PIQfe0j8CYTnDRx1OHhcuBk5ANjymg8Ay9l5yg87b2byd9A4kV8u', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Hayek', 'Rue de Sahmara', 'Rennes', '35000', 'artisan', 'Poterie et compagnie', 'Sahmara.jpg', 'Potier', 'Poterie et compagnie, un lieu conviviale, ou l\'amour est dans l\'air, l\'amour de l\'agile et du travai', NULL),
(49, 'Youlu', 'youlu', 'youlu@gmail.com', 'youlu@gmail.com', 1, 'i3Y/E0/cgm0ibn14oPP3/7baHxuss.aHMXAHBgGS.kw', '$2y$13$tWYOMj.P5BdoCEPqQHPOqOH1oZs/SVAGjazQvSW1ylwJzWoJzdkDS', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Yana', 'Rue de Youloulou', 'Nantes', '44000', 'artisan', 'Yayou Pot', 'Youlu.jpg', 'Potier', 'La poterie c\'est ma vie et je vous partage ma passion', NULL),
(50, 'Edgar', 'edgar', 'edgar@gmail.com', 'edgar@gmail.com', 1, '6yP7quCsLyYzgsOljay6qBup7TOU8fZlF7DlZE8Kb7Q', '$2y$13$MB2zHkzsHMvelNPaMN1UN.wZ5QLcKlPuI1zMGGsOsfR3DynLvDkNq', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Lefil', 'Rue Edgar', 'Toulon', '83000', 'artisan', 'Pita Ed', 'edgar.jpg', 'Tapissier', 'Les tapis c\'est ma passion', NULL),
(51, 'Particia', 'particia', 'particia@gmail.com', 'particia@gmail.com', 1, 'Mt36JKE0EtsS1X4F2SifgyqVRGRT5nphGZY5EfWoi3A', '$2y$13$qYxFgfy63WFr40REvUri7u51mUPvpzolPvADI17tXuq.3qDSI.pYS', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Delacour', 'Rue de Patricia', 'Pau', '64000', 'artisan', 'Patapicia', 'Patricia.jpg', 'Tapissier', 'De beau tapis pour toute votre maison', NULL),
(52, 'Henry', 'henry', 'henry@gmail.com', 'henry@gmail.com', 1, 'ePT8jNeEI.KSxP..EnWhaKApfsxDWwT5JtlXWXCebIc', '$2y$13$rpa.5FgS3KxGCtUN1hJXYuznHCc5P.6Mcwp3R9.Th8oB19GGD5Zk.', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Thierry', 'Rue Henry IV', 'Melun', '77000', 'artisan', 'Arc en ciel', 'Henry.jpg', 'Peintre', 'Peindre nos vies de toutes les couleurs', NULL),
(53, 'Emma', 'emma', 'emma@gmail.com', 'emma@gmail.com', 1, '9Pm2Wm/DPg55R1kN1Uz2xheorummcQaU.rmZ6i6SOOE', '$2y$13$eOBhyKq1KiTPzKglsjCOveyZj9goEyJfLH33E8Vl0s2dlPBzllnzO', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Aimable', 'Rue Emma', 'Saint Etienne', '42000', 'artisan', 'AimePeinture', 'Emma.jpg', 'Peintre', 'Peindre avec amour', NULL),
(54, 'Simon', 'simon', 'simon@gmail.com', 'simon@gmail.com', 1, 's10w6AV2edARu8v9jiblg1.A/C413gatjr316kwA1q0', '$2y$13$R0WHYEdWNCCki/jxReyNR.avjTB0PPOSrE7XGWAySuW9abCHW25bK', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Aquarelle', 'Rue Simon', 'Nice', '06000', 'artisan', 'SimonArt', 'Simon.jpg', 'Peintre', 'L\'art au bout du pinceau', NULL),
(55, 'Samia', 'samia', 'samia@gmail.com', 'samia@gmail.com', 1, 'O2et28LCildXM2eWk4/nCZAiN8/xUlp1na4kTBvwXVA', '$2y$13$g2YRgPOn93kEnOb12dJZy.4HgfWoEEty6UJ.9Wlf1Q/Jk..h6yPjW', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Houari', 'Rue de Samia', 'Sarcelles', '95200', 'artisan', 'CousuMain', 'Samia.jpg', 'Couturier', 'La mode de vos envies', NULL),
(56, 'Clara', 'clara', 'clara@gmail.com', 'clara@gmail.com', 1, '0/af/UKNrmS6LlmDP7hrQWmG0q6IHOu65qDYG8xM/QY', '$2y$13$VXO2rCH6nMDbollZrvCwKefV3u47N7k3qHqOQ.YJQ10fdtm1N.eB2', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Malin', 'Rue de Clara', 'Lorient', '56100', 'artisan', 'ClassClara', 'Clara.jpg', 'Couturier', 'Vous avez la classe avec Clara', NULL),
(57, 'Karl', 'karl', 'karl@gmail.com', 'karl@gmail.com', 1, 'vO0YIsWmCwQutr6SFYukJzkYCSY8QNpf606vBA7uLUM', '$2y$13$ORHFOkNY5MvnSoQi.YC/uuH8/Mi72rYOFjxkl6xUcRwW7L0wxMlr2', NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_ARTISAN\";}', 'Lagareiffel', 'Rue de Karl', 'Paris', '75009', 'artisan', 'Effet Karl', 'karl.jpg', 'Couturier', 'Les vêtements que vous portez à votre porté', NULL);

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
  `user_id` int(11) DEFAULT NULL,
  `categorie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `reference`, `price`, `materials`, `stock`, `description`, `image`, `user_id`, `categorie`, `type`) VALUES
(12, 'Chaise en bois', '123', 23, 'Bois', 10, 'Belle chaise en bois', 'chaise.jpg', 28, 'meubles', 'chaises'),
(13, 'Table en bois', '456', 45, 'Bois', 5, 'Belle table en bois', 'table.jpg', 28, 'meubles', 'tables'),
(14, 'chaise en bois léger', '789', 35, 'Bois', 7, 'Magnifique chaise en bois léger', 'chaise1.jpg', 28, 'meubles', 'chaises'),
(15, 'Bureau maison', '321', 95, 'Bois', 8, 'Beau bureau pour particulier', 'bureau 1.jpg', 29, 'meubles', 'bureaux'),
(16, 'Étagère en bois', '654', 70, 'Bois', 4, 'Parfait pour tous vos bouquins', 'etagere1.jpg', 29, 'meubles', 'etageres'),
(17, 'Chaise en bois', '987', 16, 'Bois', 3, 'Exceptionnelle chaise en bois', 'chaise4.jpg', 29, 'meubles', 'chaises'),
(18, 'Armoire en bois', '147', 259, 'Bois', 4, 'De la place pour tous vos vêtements', 'armoire1.jpg', 38, 'meubles', 'armoires'),
(19, 'Armoire pour chambre', '258', 240, 'Bois', 9, 'Très belle armoire de chambre', 'armoire2.jpg', 38, 'meubles', 'armoires'),
(20, 'Étagère de salon', '369', 79, 'Bois', 6, 'Étagère design de salon', 'etagere2.jpg', 38, 'meubles', 'etageres'),
(21, 'Luminaire en metal', '741', 35, 'Metal', 7, 'Magnifique luminaire pour éclairé vos lieux de vie', 'luminaire1.jpg', 44, 'decoration', 'luminaires'),
(22, 'Porte bougie en metal', '852', 10, 'Metal', 7, 'Magnifique porte bougie en metal', 'bougie1.jpg', 44, 'decoration', 'bougies'),
(23, 'Trois luminaires en metal', '963', 56, 'Metal', 8, 'Luminaires lumineux', 'luminaire2.jpg', 44, 'decoration', 'luminaires'),
(24, 'Murale de salon', '159', 69, 'Metal', 3, 'Magnifique murale de salon', 'murale.jpg', 39, 'decoration', 'murales'),
(25, 'Décoration murale', '357', 85, 'Metal', 7, 'Très belle décoration', 'murale2.jpg', 39, 'decoration', 'murales'),
(26, 'Bougie de décoration', '258', 25, 'Metal', 3, 'Décorez votre intérieur avec de belles bougies', 'bougie2.jpg', 39, 'decoration', 'bougies');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artisan`
--
ALTER TABLE `artisan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_3C600AD3A76ED395` (`user_id`),
  ADD UNIQUE KEY `UNIQ_3C600AD34584665A` (`product_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `artisan`
--
ALTER TABLE `artisan`
  ADD CONSTRAINT `FK_3C600AD34584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
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
