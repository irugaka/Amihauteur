-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 22 sep. 2021 à 10:06
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ami_hauteur`
--

-- --------------------------------------------------------

--
-- Structure de la table `accessoire`
--

DROP TABLE IF EXISTS `accessoire`;
CREATE TABLE IF NOT EXISTS `accessoire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_accessoire` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_accessoire` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_accessoire` double NOT NULL,
  `commercialise` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `accessoire`
--

INSERT INTO `accessoire` (`id`, `nom_accessoire`, `ref_accessoire`, `prix_accessoire`, `commercialise`) VALUES
(1, 'Vis', '852853', 500, 1),
(2, 'Unecrou', '45', 350, 0),
(3, 'Boulon', '546525', 990, 0),
(4, 'Equerre', '586562', 500, 1),
(5, 'Boulon', '58888', 100, 1),
(6, 'test1', '852853', 500, 0),
(7, 'porte', '45451682475', 100, 1);

-- --------------------------------------------------------

--
-- Structure de la table `changement_volee`
--

DROP TABLE IF EXISTS `changement_volee`;
CREATE TABLE IF NOT EXISTS `changement_volee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mesure_changement` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `changement_volee`
--

INSERT INTO `changement_volee` (`id`, `mesure_changement`) VALUES
(1, 1000),
(4, 6500),
(5, 6500),
(6, 6500),
(7, 6500),
(8, 6500),
(9, 6500),
(10, 6500),
(11, 6500),
(12, 6500),
(13, 6500),
(14, 6500),
(15, 6500),
(16, 6000),
(17, 6000),
(18, 6000),
(19, 6000),
(20, 6000),
(21, 9000),
(22, 0),
(23, 6000),
(24, 5000),
(25, 5000),
(26, 6000),
(27, 6000),
(28, 5000),
(29, 5000),
(30, 5000),
(31, 6000),
(32, 6000),
(33, 5000),
(34, 1),
(35, 1),
(36, 6000),
(37, 6000),
(38, 6000),
(39, 6000),
(40, 1),
(41, 6000),
(42, 2),
(43, 2),
(44, 2),
(45, 2),
(46, 5000),
(47, 5000),
(48, 5000),
(49, 5000),
(50, 7000),
(51, 6000),
(52, 6000),
(53, 7000),
(54, 7000),
(55, 8000),
(56, 8000),
(57, 6000),
(58, 9000),
(59, 7000),
(60, 7000),
(61, 6500),
(62, 6000),
(63, 6000),
(64, 5000),
(65, 8000),
(66, 7000),
(67, 8000),
(68, 8000),
(69, 7000),
(70, 7000),
(71, 8000),
(72, 8000),
(73, 8320),
(74, 8000),
(75, 8000),
(76, 6500),
(77, 8000),
(78, 8000),
(79, 8000);

-- --------------------------------------------------------

--
-- Structure de la table `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_config` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_config` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_config` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remise_config` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date_config` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D48A2F7CA76ED395` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `config`
--

INSERT INTO `config` (`id`, `nom_config`, `reference_config`, `description_config`, `remise_config`, `user_id`, `date_config`) VALUES
(1, 'Client1', 'ygtfrds', 'hgfds', 40, 1, '2021-04-02'),
(2, 'uhygfd', 'hgfd', 'tgrfedz', NULL, 2, '2021-04-23'),
(3, 'salutations', 'hgfd', 'tgrfedz', NULL, 2, '2021-04-23'),
(4, 'jhgfd', 'hgfd', 'egeg', NULL, 2, '2021-04-29'),
(5, 'gthththth', 'thth', 'ththt', NULL, 2, '2021-04-29'),
(6, 'd', 'dfgh', 'hgfd', NULL, 64, '2021-04-29'),
(7, 'ujhgfd', 'ytre', 'egeg', NULL, 65, '2021-04-29'),
(8, 'ytre', 'ytre', 'hgfd', NULL, 66, '2021-04-29'),
(9, 'rgrgrg', 'rgrgr', 'rgrg', 10, 67, '2021-04-29'),
(10, 'rg\"g', 'ef\"f', '\"f\"f', NULL, 68, '2021-04-29'),
(11, 'uytrfde', 'jhgfd', 'hgfrd', NULL, 69, '2021-04-29'),
(12, 'rrrrrr', 'rrrrrr', 'rrrrrr', NULL, 70, '2021-04-29'),
(13, 'gtfds', 'gfds', 'gfds', NULL, 2, '2021-04-29'),
(14, 'gggg', 'gggg', 'ggg', NULL, 71, '2021-04-29'),
(15, 'tr', 'ytre', 'ytre', NULL, 73, '2021-04-29'),
(16, 'rezzef', 'zfzf', 'fzfzfz', NULL, 2, '2021-04-29'),
(17, 'uygtfrd', 'uytre', 'yt(re', NULL, 2, '2021-04-29'),
(18, 'uytr', 'ytre', 'ytres', NULL, 2, '2021-04-29'),
(19, 'salutatio', 'eeff', 'efefef', NULL, 38, '2021-04-29'),
(20, 'd', 'd', 'd', NULL, 2, '2021-05-04'),
(21, 'r', 'r', 'r', NULL, 2, '2021-05-04'),
(22, 'd', 'd', 'd', NULL, 2, '2021-05-04'),
(23, 'd', 'd', 'd', NULL, 2, '2021-05-04'),
(24, 'e', 'e', 'e', NULL, 2, '2021-05-04'),
(25, 'd', 'd', 'd', NULL, 2, '2021-05-04'),
(26, 'd', 'd', 'd', NULL, 2, '2021-05-04'),
(27, 'd', 'd', 'd', NULL, 2, '2021-05-04'),
(28, 'e', 'egeg', 'egeg', NULL, 2, '2021-05-04'),
(29, 'd', 'd', 'd', 0, 63, '2021-05-04'),
(30, 'm', 'i', 'i', 0, 63, '2021-05-04'),
(31, 'l', 'k', 'k', 0, 63, '2021-05-04'),
(32, 'd', 'd', 'd', 0, 63, '2021-05-05'),
(33, 'd', 'd', 'd', 0, 63, '2021-05-05'),
(34, 'f', 'f', 'f', NULL, 74, '2021-05-05'),
(35, 'd', 'd', 'd', 0, 63, '2021-05-05'),
(36, 'r', 'r', 'r', 0, 63, '2021-05-05'),
(37, 'e', 'e', 'e', NULL, 38, '2021-05-05'),
(38, 'r', 'r', 'r', NULL, 38, '2021-05-05'),
(39, 'g', 'g', 'g', 0, 63, '2021-05-05'),
(40, 'd', 'd', 'd', 0, 63, '2021-05-05'),
(41, 'd', 'd', 'd', 0, 63, '2021-05-05'),
(42, 'd', 'd', 'd', 0, 63, '2021-05-05'),
(43, 'd', 'd', 'd', 0, 63, '2021-05-05'),
(44, 'd', 'd', 'd', NULL, 38, '2021-05-05'),
(45, 'd', 'd', 'd', NULL, 38, '2021-05-05'),
(46, 'd', 'd', 'd', NULL, 2, '2021-05-05'),
(47, 'de', 'e', 'bonjour', 0, 63, '2021-05-05'),
(48, 'd', 'd', 'd', NULL, 38, '2021-05-07'),
(49, 'r', 'r', 'r', NULL, 2, '2021-05-11'),
(50, 'jhgfd', 'd', 'd', NULL, 2, '2021-05-18'),
(51, 'r', 'd', 'd', 0, 63, '2021-05-20'),
(52, 't', 't', 't', NULL, 2, '2021-05-31'),
(53, 'u', 'u', 'u', NULL, 2, '2021-06-01'),
(54, 'd', 'd', 'd', NULL, 2, '2021-06-01'),
(55, 'e', 'e', 'e', NULL, 2, '2021-06-01'),
(56, 'f', 'f', 'f', NULL, 75, '2021-06-01'),
(57, 'ghjk', 'hjkl', 'jklm', NULL, 2, '2021-06-07'),
(58, 'ttrtt', 'tttt', 'tttt', NULL, 2, '2021-06-08'),
(59, 's', 's', 's', 0, 63, '2021-06-10'),
(60, 'd', 'd', 'd', NULL, 76, '2021-06-10'),
(61, 'rr', 'rrr', 'rrr', 0, 63, '2021-06-11'),
(62, 'd', 'd', 'd', 0, 63, '2021-06-11'),
(63, 'd', 'd', 'd', 0, 63, '2021-06-11'),
(64, 't', 't', 't', 0, 63, '2021-06-11'),
(65, 'f', 't', 't', 0, 63, '2021-06-11'),
(66, 'd', 'd', 'd', 0, 63, '2021-06-11'),
(67, 'v', 'v', 'v', 0, 63, '2021-06-11'),
(68, 'd', 'd', 'd', 0, 63, '2021-06-11'),
(69, 'h', 't', 't', 0, 63, '2021-06-11'),
(70, 'd', 'd', 'd', 0, 63, '2021-06-11'),
(71, 'f', 'f', 'f', 0, 63, '2021-06-11'),
(72, 'f', 'f', 'f', 0, 63, '2021-06-11'),
(73, 'f', 'f', 'f', 0, 63, '2021-06-11'),
(74, 'd', 'd', 'd', 0, 63, '2021-06-11'),
(75, 'h', 'h', 'h', 0, 63, '2021-06-11'),
(76, 'r', 'r', 'r', NULL, 2, '2021-06-25'),
(77, 'coupe de test', 'fefefefefefef', 'Ceci est ub test', NULL, 2, '2021-07-05'),
(78, 'test de coupe 2', 'ddddd', 'ceci est le test numero 2', NULL, 2, '2021-07-05'),
(79, 'Test echelle coupe 3', 'Ref', 'Ceci est le test numéro 3', NULL, 2, '2021-07-05'),
(80, 'yrte', 'ytre', 'ytfrd', NULL, 2, '2021-07-05'),
(81, 'test 1', 'dd', 'dd', NULL, 2, '2021-07-07'),
(82, 'fgrg', 'rgrgr', 'rgrg', NULL, 2, '2021-07-16'),
(83, 'Essai', 'Essai', 'Essai', NULL, 2, '2021-07-16'),
(84, 'essai2', 'essai2', 'essai2', NULL, 2, '2021-07-16'),
(85, 'essai3', 'essai3', 'essai3', NULL, 2, '2021-07-16'),
(86, 'essai4', 'essai4', 'essai4', NULL, 2, '2021-07-16'),
(87, 'essai5', 'essai5', 'essai5', NULL, 2, '2021-07-16'),
(88, 'rfrf', 'fefef', 'efef', NULL, 2, '2021-07-16'),
(89, 'regzzr', 'zegzeg', 'zgzgzg', NULL, 2, '2021-07-16'),
(90, 'essai', 'essai', 'essai', NULL, 2, '2021-07-16'),
(91, 'gh', 'gh', 'gh', 0, 63, '2021-07-16'),
(92, 'r', 'r', 'r', 0, 63, '2021-08-03'),
(93, 'f', 'f', 'f', 0, 63, '2021-08-03'),
(94, 'f', 'f', 'f', 0, 63, '2021-08-03'),
(95, 'ttr', 'ttt', 'ttt', 0, 63, '2021-08-05'),
(96, 'd', 'd', 'd', NULL, 2, '2021-08-05'),
(97, 'd', 'd', 'dd', 0, 63, '2021-08-09'),
(98, 'g', 'g', 'g', NULL, 79, '2021-08-31');

-- --------------------------------------------------------

--
-- Structure de la table `coupe_echelle`
--

DROP TABLE IF EXISTS `coupe_echelle`;
CREATE TABLE IF NOT EXISTS `coupe_echelle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longueur` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `coupe_echelle`
--

INSERT INTO `coupe_echelle` (`id`, `libelle`, `longueur`, `prix`) VALUES
(1, 'Echelle Alu 1960', 1960, 300),
(2, 'Echelle Alu 3360', 3360, 200);

-- --------------------------------------------------------

--
-- Structure de la table `coupe_echelle_echelle`
--

DROP TABLE IF EXISTS `coupe_echelle_echelle`;
CREATE TABLE IF NOT EXISTS `coupe_echelle_echelle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coupe_echelle_id_id` int(11) DEFAULT NULL,
  `echelle_id_id` int(11) DEFAULT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6D9623677DD6B4B5` (`coupe_echelle_id_id`),
  KEY `IDX_6D9623673E9E5E10` (`echelle_id_id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `coupe_echelle_echelle`
--

INSERT INTO `coupe_echelle_echelle` (`id`, `coupe_echelle_id_id`, `echelle_id_id`, `qte`) VALUES
(74, 1, 86, 1),
(75, 2, 86, 1),
(76, 2, 87, 2),
(77, 1, 88, 1),
(78, 2, 88, 2),
(79, 2, 89, 2),
(80, 1, 90, 1),
(81, 2, 90, 2),
(82, 1, 91, 1),
(83, 2, 91, 2),
(84, 2, 92, 2),
(85, 1, 92, 1),
(86, 2, 92, 3),
(87, 1, 92, 1),
(88, 1, 92, 1),
(89, 1, 92, 1),
(90, 1, 92, 1),
(91, 1, 92, 1),
(92, 2, 92, 2),
(93, 1, 92, 1),
(94, 2, 92, 2),
(95, 1, 92, 1),
(96, 2, 92, 2),
(97, 2, 93, 2),
(98, 1, 94, 1),
(99, 2, 94, 1),
(100, 1, 95, 1),
(101, 2, 95, 1),
(102, 2, 96, 2),
(103, 2, 97, 2),
(104, 2, 98, 2),
(105, 2, 99, 2),
(106, 2, 100, 2),
(107, 2, 101, 2),
(108, 1, 102, 1),
(109, 2, 102, 2),
(110, 2, 103, 2),
(111, 2, 103, 2),
(112, 2, 104, 2),
(113, 2, 105, 2),
(114, 2, 106, 2),
(115, 1, 107, 1),
(116, 2, 107, 2);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210216120054', '2021-02-16 12:01:04', 3323),
('DoctrineMigrations\\Version20210216140136', '2021-02-16 14:01:45', 80),
('DoctrineMigrations\\Version20210330134350', '2021-03-30 13:44:09', 955),
('DoctrineMigrations\\Version20210401073601', '2021-04-01 07:36:14', 1247),
('DoctrineMigrations\\Version20210401091328', '2021-04-01 09:13:37', 108),
('DoctrineMigrations\\Version20210414142814', '2021-04-14 14:31:51', 530),
('DoctrineMigrations\\Version20210414144257', '2021-04-14 14:43:24', 277),
('DoctrineMigrations\\Version20210414144451', '2021-04-14 14:44:58', 133),
('DoctrineMigrations\\Version20210414144623', '2021-04-14 14:46:34', 207),
('DoctrineMigrations\\Version20210416082950', '2021-04-16 08:58:01', 135),
('DoctrineMigrations\\Version20210416135139', '2021-04-16 13:51:50', 882),
('DoctrineMigrations\\Version20210416135258', '2021-04-16 13:53:02', 123),
('DoctrineMigrations\\Version20210420131850', '2021-04-20 13:19:03', 394),
('DoctrineMigrations\\Version20210420132614', '2021-04-20 13:26:26', 305),
('DoctrineMigrations\\Version20210423150216', '2021-04-23 15:02:28', 975),
('DoctrineMigrations\\Version20210423150655', '2021-04-23 15:08:03', 109),
('DoctrineMigrations\\Version20210427133744', '2021-04-27 13:37:59', 910),
('DoctrineMigrations\\Version20210429141933', '2021-04-29 14:19:43', 350),
('DoctrineMigrations\\Version20210429142012', '2021-04-29 14:20:20', 155),
('DoctrineMigrations\\Version20210511132823', '2021-05-11 13:28:42', 297),
('DoctrineMigrations\\Version20210520075525', '2021-05-20 07:55:55', 878),
('DoctrineMigrations\\Version20210520085154', '2021-05-20 08:52:04', 270),
('DoctrineMigrations\\Version20210601140543', '2021-06-01 14:05:49', 828),
('DoctrineMigrations\\Version20210601143713', '2021-06-01 14:37:25', 263),
('DoctrineMigrations\\Version20210611122007', '2021-06-11 12:20:27', 491),
('DoctrineMigrations\\Version20210611123139', '2021-06-11 12:31:50', 84),
('DoctrineMigrations\\Version20210611123245', '2021-06-11 12:32:53', 108),
('DoctrineMigrations\\Version20210611125621', '2021-06-11 12:56:30', 250),
('DoctrineMigrations\\Version20210611131420', '2021-06-11 13:14:30', 408),
('DoctrineMigrations\\Version20210611145555', '2021-06-11 14:56:07', 240),
('DoctrineMigrations\\Version20210611155204', '2021-06-11 15:52:14', 458),
('DoctrineMigrations\\Version20210716144112', '2021-07-16 14:41:18', 438),
('DoctrineMigrations\\Version20210803143417', '2021-08-03 14:34:23', 867);

-- --------------------------------------------------------

--
-- Structure de la table `echelle`
--

DROP TABLE IF EXISTS `echelle`;
CREATE TABLE IF NOT EXISTS `echelle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `echelle_sortie_id` int(11) DEFAULT NULL,
  `echelle_entree_id` int(11) DEFAULT NULL,
  `echelle_hauteur_id` int(11) DEFAULT NULL,
  `echelle_type_echelle_id` int(11) DEFAULT NULL,
  `echelle_norme_id` int(11) DEFAULT NULL,
  `echelle_config_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DA65794D712551BC` (`echelle_type_echelle_id`),
  KEY `IDX_DA65794D52EAF347` (`echelle_hauteur_id`),
  KEY `IDX_DA65794D21127304` (`echelle_sortie_id`),
  KEY `IDX_DA65794DB7242249` (`echelle_norme_id`),
  KEY `IDX_DA65794DC9BBACD4` (`echelle_config_id`),
  KEY `IDX_DA65794D421B7347` (`echelle_entree_id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `echelle`
--

INSERT INTO `echelle` (`id`, `echelle_sortie_id`, `echelle_entree_id`, `echelle_hauteur_id`, `echelle_type_echelle_id`, `echelle_norme_id`, `echelle_config_id`) VALUES
(1, 1, 1, 13, 1, 1, 2),
(2, 1, 1, 1, 1, 1, 2),
(3, 1, 1, 2, 1, 1, 4),
(4, 1, 1, 3, 1, 1, 5),
(5, 1, 1, 14, 2, 1, 6),
(6, NULL, NULL, NULL, 1, NULL, 7),
(7, 1, 1, 15, 1, 1, 7),
(8, 1, 1, 16, 1, 1, 12),
(9, 1, 1, 17, 1, 1, 1),
(10, 1, 1, 18, 1, 1, 22),
(11, 1, 1, 19, 1, 1, 23),
(12, 1, 1, 20, 1, 1, 24),
(13, 1, 1, 21, 1, 1, 25),
(14, 1, 1, 22, 1, 1, 26),
(15, 1, 1, 23, 1, 1, 27),
(16, 1, 1, 24, 1, 1, 28),
(17, 1, 1, 25, 1, 1, 29),
(18, 1, 1, 26, 1, 1, 30),
(19, 1, 1, 27, 1, 1, 31),
(20, 1, 1, 28, 1, 1, 32),
(21, 1, 1, 29, 1, 1, 33),
(22, 1, 1, 30, 1, 1, 34),
(23, 1, 1, 31, 1, 1, 35),
(24, 1, 1, 32, 1, 1, 36),
(25, 1, 1, 33, 1, 1, 37),
(26, 1, 1, 34, 1, 1, 38),
(27, 1, 1, 35, 1, 1, 39),
(28, 1, 1, 36, 1, 1, 40),
(29, NULL, NULL, NULL, 1, NULL, 6),
(30, 1, 1, 37, 1, 1, 7),
(31, 1, 1, 38, 1, 1, 8),
(32, 1, 1, 39, 1, 1, 9),
(33, 1, 1, 40, 1, 1, 10),
(34, 1, 1, 41, 1, 1, 11),
(35, 1, 1, 42, 1, 1, 12),
(36, 1, 1, 43, 1, 1, 13),
(37, 1, 1, 44, 1, 1, 15),
(38, 1, 1, 46, 1, 1, 18),
(39, 1, 1, 45, 1, 1, 19),
(40, 1, 1, 47, 1, 1, 21),
(41, 1, 1, 48, 1, 1, 27),
(42, 1, 1, 49, 1, 1, 28),
(43, 1, 1, 50, 1, 1, 29),
(44, 1, 1, 51, 1, 1, 30),
(45, 1, 1, 52, 1, 1, 32),
(46, NULL, NULL, NULL, 2, NULL, 32),
(47, 1, 1, 53, 1, 1, 33),
(48, 1, 1, 54, 1, 1, 34),
(49, 1, 1, 55, 1, 1, 35),
(50, NULL, NULL, 56, 1, 1, 38),
(51, NULL, NULL, NULL, 1, NULL, 43),
(52, NULL, NULL, NULL, 1, NULL, 44),
(53, NULL, NULL, NULL, 1, NULL, 45),
(54, NULL, NULL, NULL, 2, NULL, 45),
(55, NULL, NULL, NULL, 2, NULL, 45),
(56, NULL, NULL, NULL, 2, NULL, 45),
(57, NULL, NULL, NULL, 1, NULL, 46),
(58, 1, 1, 57, 1, 1, 47),
(59, 1, 1, 59, 1, 1, 48),
(60, NULL, NULL, NULL, 3, NULL, 49),
(61, NULL, NULL, NULL, 2, NULL, 50),
(62, 1, 1, 60, 1, 1, 51),
(63, NULL, NULL, NULL, 1, 1, NULL),
(64, 2, 2, 69, 3, 2, 53),
(65, 1, 1, 70, 3, 2, 54),
(66, 1, 1, 73, 4, 1, 55),
(67, 2, 2, 74, 5, 2, 56),
(68, 2, 2, 77, 4, 1, 57),
(69, NULL, NULL, NULL, 3, NULL, 58),
(70, 1, 1, 79, 2, 2, 59),
(71, 1, 2, 80, 5, 2, 60),
(72, NULL, NULL, 94, 1, 2, 61),
(73, NULL, NULL, 100, 1, 2, 62),
(74, NULL, NULL, 103, 1, 1, 63),
(75, NULL, NULL, 113, 1, 2, 64),
(76, NULL, NULL, 116, 1, 1, 65),
(77, NULL, NULL, 120, 1, 2, 66),
(78, NULL, NULL, 122, 1, 1, 67),
(79, NULL, NULL, 124, 1, 1, 68),
(80, NULL, NULL, 125, 1, 1, 69),
(81, NULL, NULL, 130, 1, 1, 70),
(82, 1, 1, 143, 1, 2, 71),
(83, 1, 1, 144, 1, 1, 72),
(84, 1, 1, 146, 1, 2, 73),
(85, 2, 2, 147, 1, 1, 74),
(86, NULL, NULL, 148, 1, 1, 75),
(87, 1, 1, 149, 1, 2, 76),
(88, 1, 1, 150, 1, 1, 77),
(89, 1, 1, 151, 1, 1, 78),
(90, 1, 1, 152, 1, 2, 79),
(91, 1, 1, 153, 1, 1, 80),
(92, 1, 1, 163, 1, NULL, 82),
(93, 1, 1, 164, 1, NULL, 83),
(94, 1, 1, 165, 1, NULL, 84),
(95, 1, 1, 166, 1, NULL, 85),
(96, 1, 1, 167, 1, NULL, 86),
(97, 1, 1, 168, 1, NULL, 87),
(98, 1, 1, 169, 1, NULL, 88),
(99, 1, 1, 170, 1, NULL, 89),
(100, 1, 1, 171, 1, NULL, 91),
(101, 1, 1, 172, 1, NULL, 92),
(102, 2, 1, 173, 1, NULL, 93),
(103, 1, 1, 175, 1, NULL, 94),
(104, 1, 1, 176, 1, NULL, 95),
(105, 1, 1, 177, 1, NULL, 96),
(106, 1, 1, 178, 1, NULL, 97),
(107, 1, 1, 179, 1, NULL, 98);

-- --------------------------------------------------------

--
-- Structure de la table `echelle_accessoire`
--

DROP TABLE IF EXISTS `echelle_accessoire`;
CREATE TABLE IF NOT EXISTS `echelle_accessoire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `echelle_id` int(11) NOT NULL,
  `accessoire_id` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FD1FA697DD268C11` (`echelle_id`),
  KEY `IDX_FD1FA697D23B67ED` (`accessoire_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `echelle_accessoire`
--

INSERT INTO `echelle_accessoire` (`id`, `echelle_id`, `accessoire_id`, `qte`) VALUES
(2, 1, 1, 3),
(3, 1, 2, 2),
(5, 4, 2, 3),
(6, 4, 1, 3),
(7, 5, 1, 8),
(8, 5, 2, 7),
(9, 7, 1, 9),
(10, 7, 2, 6),
(11, 8, 1, 5),
(12, 10, 1, 6),
(13, 11, 1, 5),
(14, 12, 1, 3),
(15, 13, 1, 3),
(16, 14, 1, 6),
(17, 15, 1, 10),
(18, 16, 1, 8),
(19, 37, 1, 5),
(20, 39, 4, 5),
(21, 38, 2, 5),
(22, 43, 5, 5),
(23, 44, 5, 5),
(24, 59, 1, 8),
(25, 62, 5, 7),
(26, 64, 2, 5),
(27, 65, 7, 8),
(28, 66, 2, 6),
(29, 67, 2, 8),
(30, 70, 5, 8),
(31, 70, 7, 7),
(32, 71, 5, 8),
(33, 71, 4, 7),
(34, 71, 7, 8),
(35, 82, 2, 8),
(36, 83, 5, 5),
(37, 84, 5, 8),
(38, 85, 2, 4),
(39, 88, 4, 4),
(40, 89, 4, 8),
(41, 90, 4, 5),
(42, 91, 4, 8),
(43, 92, 4, 5),
(44, 101, 4, 8),
(45, 102, 4, 8),
(46, 104, 4, 8);

-- --------------------------------------------------------

--
-- Structure de la table `echelle_changement_volee`
--

DROP TABLE IF EXISTS `echelle_changement_volee`;
CREATE TABLE IF NOT EXISTS `echelle_changement_volee` (
  `echelle_id` int(11) NOT NULL,
  `changement_volee_id` int(11) NOT NULL,
  PRIMARY KEY (`echelle_id`,`changement_volee_id`),
  KEY `IDX_69E28AE2DD268C11` (`echelle_id`),
  KEY `IDX_69E28AE2DB91C02D` (`changement_volee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `echelle_changement_volee`
--

INSERT INTO `echelle_changement_volee` (`echelle_id`, `changement_volee_id`) VALUES
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(5, 16),
(5, 17),
(5, 18),
(5, 19),
(7, 20),
(8, 21),
(9, 22),
(10, 23),
(11, 24),
(11, 25),
(12, 26),
(13, 27),
(14, 28),
(15, 29),
(16, 30),
(17, 31),
(18, 32),
(19, 33),
(20, 34),
(21, 35),
(22, 36),
(23, 37),
(24, 38),
(25, 39),
(26, 40),
(27, 41),
(28, 42),
(28, 43),
(28, 44),
(28, 45),
(30, 46),
(30, 47),
(30, 48),
(30, 49),
(31, 50),
(32, 51),
(32, 52),
(33, 53),
(34, 54),
(35, 55),
(36, 56),
(37, 57),
(38, 58),
(39, 59),
(43, 60),
(48, 61),
(59, 62),
(62, 63),
(64, 64),
(64, 65),
(65, 66),
(66, 67),
(66, 68),
(67, 69),
(70, 70),
(71, 71),
(82, 72),
(83, 73),
(84, 74),
(85, 75),
(88, 76),
(89, 77),
(90, 78),
(91, 79);

-- --------------------------------------------------------

--
-- Structure de la table `echelle_fixation`
--

DROP TABLE IF EXISTS `echelle_fixation`;
CREATE TABLE IF NOT EXISTS `echelle_fixation` (
  `echelle_id` int(11) NOT NULL,
  `fixation_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1DB625E1DD268C11` (`echelle_id`),
  KEY `IDX_1DB625E1C769D5E1` (`fixation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `echelle_fixation`
--

INSERT INTO `echelle_fixation` (`echelle_id`, `fixation_id`, `id`, `qte`) VALUES
(92, 2, 1, 1),
(92, 2, 2, 2),
(101, 2, 3, 5),
(102, 2, 4, 8),
(104, 2, 5, 3),
(106, 2, 6, 8),
(107, 2, 7, 8);

-- --------------------------------------------------------

--
-- Structure de la table `echelle_palier`
--

DROP TABLE IF EXISTS `echelle_palier`;
CREATE TABLE IF NOT EXISTS `echelle_palier` (
  `echelle_id` int(11) NOT NULL,
  `palier_id` int(11) NOT NULL,
  PRIMARY KEY (`echelle_id`,`palier_id`),
  KEY `IDX_663CCB8ADD268C11` (`echelle_id`),
  KEY `IDX_663CCB8A60E28355` (`palier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `element`
--

DROP TABLE IF EXISTS `element`;
CREATE TABLE IF NOT EXISTS `element` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description_element` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valeur_element` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `element_norme`
--

DROP TABLE IF EXISTS `element_norme`;
CREATE TABLE IF NOT EXISTS `element_norme` (
  `element_id` int(11) NOT NULL,
  `norme_id` int(11) NOT NULL,
  PRIMARY KEY (`element_id`,`norme_id`),
  KEY `IDX_FDB991FE1F1F2A24` (`element_id`),
  KEY `IDX_FDB991FE6F0D55C9` (`norme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entity_pdf`
--

DROP TABLE IF EXISTS `entity_pdf`;
CREATE TABLE IF NOT EXISTS `entity_pdf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `config_id` int(11) DEFAULT NULL,
  `libelle_pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_707FBB2B24DB0683` (`config_id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entity_pdf`
--

INSERT INTO `entity_pdf` (`id`, `config_id`, `libelle_pdf`, `location_pdf`) VALUES
(8, NULL, 'gouchet\'2\'', '../Devis/gouchet23420212.pdf'),
(9, NULL, 'gouchet\'2\'', '../Devis/gouchet23420212.pdf'),
(10, NULL, 'gouchet\'1\'', '../Devis/gouchet23420211.pdf'),
(11, 39, 'gouchet\'1\'', '../Devis/gouchet23420211.pdf'),
(18, 40, 'duvis\'1\'', '../Devis/duvis23420211.pdf'),
(19, 40, 'duvis\'2\'', '../Devis/duvis23420212.pdf'),
(20, 7, 'Invite\'1\'', '../Devis/Invite29420211.pdf'),
(21, 7, 'Invite\'2\'', '../Devis/Invite29420212.pdf'),
(22, 9, 'gouchet\'1\'', '../Devis/gouchet29420211.pdf'),
(23, 9, 'gouchet\'2\'', '../Devis/gouchet29420212.pdf'),
(24, 10, 'Elvis\'1\'', '../Devis/Elvis29420211.pdf'),
(25, 10, 'Elvis\'2\'', '../Devis/Elvis29420212.pdf'),
(26, 12, 'Invite\'1\'', '../Devis/Invite29420211.pdf'),
(27, 12, 'Invite\'2\'', '../Devis/Invite29420212.pdf'),
(28, 13, 'duvis\'1\'', '../Devis/duvis29420211.pdf'),
(29, 13, 'duvis\'2\'', '../Devis/duvis29420212.pdf'),
(30, 15, 'Invite\'1\'', '../Devis/Invite29420211.pdf'),
(31, 15, 'Invite\'2\'', '../Devis/Invite29420212.pdf'),
(32, 19, 'gouchet\'1\'', '../Devis/gouchet29420211.pdf'),
(33, 19, 'gouchet\'2\'', '../Devis/gouchet29420212.pdf'),
(34, 29, 'gouchet\'1\'', '../Devis/gouchet4520211.pdf'),
(35, 29, 'gouchet\'2\'', '../Devis/gouchet4520212.pdf'),
(36, 34, 'Invite\'1\'', '../Devis/Invite5520211.pdf'),
(37, 34, 'Invite\'2\'', '../Devis/Invite5520212.pdf'),
(38, 48, 'gouchet\'1\'', '../Devis/gouchet7520211.pdf'),
(39, 48, 'gouchet\'2\'', '../Devis/gouchet7520212.pdf'),
(40, 51, 'gouchet\'1\'', '../Devis/gouchet20520211.pdf'),
(41, 51, 'gouchet\'2\'', '../Devis/gouchet20520212.pdf'),
(42, 53, 'duvis\'1\'', '../Devis/duvis1620211.pdf'),
(43, 53, 'duvis\'2\'', '../Devis/duvis1620212.pdf'),
(44, 53, 'duvis\'1\'', '../Devis/duvis1620211.pdf'),
(45, 53, 'duvis\'2\'', '../Devis/duvis1620212.pdf'),
(46, 54, 'duvis\'1\'', '../Devis/duvis1620211.pdf'),
(47, 54, 'duvis\'2\'', '../Devis/duvis1620212.pdf'),
(48, 56, 'Invite\'1\'', '../Devis/Invite1620211.pdf'),
(49, 56, 'Invite\'2\'', '../Devis/Invite1620212.pdf'),
(50, 59, 'gouchet\'1\'', '../Devis/gouchet10620211.pdf'),
(51, 59, 'gouchet\'2\'', '../Devis/gouchet10620212.pdf'),
(52, 60, 'Invite\'1\'', '../Devis/Invite10620211.pdf'),
(53, 60, 'Invite\'2\'', '../Devis/Invite10620212.pdf'),
(54, 71, 'gouchet\'1\'', '../Devis/gouchet11620211.pdf'),
(55, 71, 'gouchet\'2\'', '../Devis/gouchet11620212.pdf'),
(56, 72, 'gouchet\'1\'', '../Devis/gouchet11620211.pdf'),
(57, 72, 'gouchet\'2\'', '../Devis/gouchet11620212.pdf'),
(58, 73, 'gouchet\'1\'', '../Devis/gouchet11620211.pdf'),
(59, 73, 'gouchet\'2\'', '../Devis/gouchet11620212.pdf'),
(60, 74, 'gouchet\'1\'', '../Devis/gouchet11620211.pdf'),
(61, 74, 'gouchet\'2\'', '../Devis/gouchet11620212.pdf'),
(62, 77, 'duvis\'1\'', '../Devis/duvis5720211.pdf'),
(63, 77, 'duvis\'2\'', '../Devis/duvis5720212.pdf'),
(64, 78, 'duvis\'1\'', '../Devis/duvis5720211.pdf'),
(65, 78, 'duvis\'2\'', '../Devis/duvis5720212.pdf'),
(66, 79, 'duvis\'1\'', '../Devis/duvis5720211.pdf'),
(67, 79, 'duvis\'2\'', '../Devis/duvis5720212.pdf'),
(68, 80, 'duvis\'1\'', '../Devis/duvis5720211.pdf'),
(69, 80, 'duvis\'2\'', '../Devis/duvis5720212.pdf'),
(70, 82, 'duvis\'1\'', '../Devis/duvis16720211.pdf'),
(71, 82, 'duvis\'2\'', '../Devis/duvis16720212.pdf'),
(72, 83, 'duvis\'1\'', '../Devis/duvis16720211.pdf'),
(73, 83, 'duvis\'2\'', '../Devis/duvis16720212.pdf'),
(74, 84, 'duvis\'1\'', '../Devis/duvis16720211.pdf'),
(75, 84, 'duvis\'2\'', '../Devis/duvis16720212.pdf'),
(76, 85, 'duvis\'1\'', '../Devis/duvis16720211.pdf'),
(77, 85, 'duvis\'2\'', '../Devis/duvis16720212.pdf'),
(78, 86, 'duvis\'1\'', '../Devis/duvis16720211.pdf'),
(79, 86, 'duvis\'2\'', '../Devis/duvis16720212.pdf'),
(80, 87, 'duvis\'1\'', '../Devis/duvis16720211.pdf'),
(81, 87, 'duvis\'2\'', '../Devis/duvis16720212.pdf'),
(82, 88, 'duvis\'1\'', '../Devis/duvis16720211.pdf'),
(83, 88, 'duvis\'2\'', '../Devis/duvis16720212.pdf'),
(84, 89, 'duvis\'1\'', '../Devis/duvis16720211.pdf'),
(85, 89, 'duvis\'2\'', '../Devis/duvis16720212.pdf'),
(86, 91, 'gouchet\'1\'', '../Devis/gouchet16720211.pdf'),
(87, 91, 'gouchet\'2\'', '../Devis/gouchet16720212.pdf'),
(88, 92, 'gouchet\'1\'', '../Devis/gouchet3820211.pdf'),
(89, 92, 'gouchet\'2\'', '../Devis/gouchet3820212.pdf'),
(90, 93, 'gouchet\'1\'', '../Devis/gouchet3820211.pdf'),
(91, 93, 'gouchet\'2\'', '../Devis/gouchet3820212.pdf'),
(92, 95, 'gouchet\'1\'', '../Devis/gouchet5820211.pdf'),
(93, 95, 'gouchet\'2\'', '../Devis/gouchet5820212.pdf'),
(94, 96, 'duvis\'1\'', '../Devis/duvis5820211.pdf'),
(95, 96, 'duvis\'2\'', '../Devis/duvis5820212.pdf'),
(96, 97, 'gouchet\'1\'', '../Devis/gouchet9820211.pdf'),
(97, 97, 'gouchet\'2\'', '../Devis/gouchet9820212.pdf'),
(98, 98, 'Invite\'1\'', '../Devis/Invite31820211.pdf'),
(99, 98, 'Invite\'2\'', '../Devis/Invite31820212.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `entree`
--

DROP TABLE IF EXISTS `entree`;
CREATE TABLE IF NOT EXISTS `entree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference_entree` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_entree` int(11) NOT NULL,
  `libelle_entree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_entree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commercialise` tinyint(1) NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entree`
--

INSERT INTO `entree` (`id`, `reference_entree`, `prix_entree`, `libelle_entree`, `description_entree`, `commercialise`, `image_url`) VALUES
(1, '200000', 250, 'Entree courte', 'Ceci est la prmeiere entree', 0, 'build/img/entreetest2.png'),
(2, '200000', 3000, 'Entree de test', 'Ceci est une description', 1, 'build/img/entreetest.jpg'),
(3, 'erhgerhe', 400, 'ethert', 'tre', 1, '0');

-- --------------------------------------------------------

--
-- Structure de la table `fixation`
--

DROP TABLE IF EXISTS `fixation`;
CREATE TABLE IF NOT EXISTS `fixation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `depart_fixation` int(11) NOT NULL,
  `commercialise` tinyint(1) NOT NULL,
  `nom_fixation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_fixation` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fixation`
--

INSERT INTO `fixation` (`id`, `depart_fixation`, `commercialise`, `nom_fixation`, `prix_fixation`) VALUES
(1, 3000, 0, '', 200),
(2, 3000, 1, 'Mur', 500);

-- --------------------------------------------------------

--
-- Structure de la table `hauteur`
--

DROP TABLE IF EXISTS `hauteur`;
CREATE TABLE IF NOT EXISTS `hauteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `afranchir_hauteur` int(11) DEFAULT NULL,
  `prix` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=180 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `hauteur`
--

INSERT INTO `hauteur` (`id`, `afranchir_hauteur`, `prix`) VALUES
(1, 6000, 3000),
(2, 6000, NULL),
(3, 8000, NULL),
(6, 6500, 0),
(7, 3000, 0),
(8, 1500, 0),
(9, 6000, 0),
(10, 600, NULL),
(11, 6000, NULL),
(12, 6000, 3000),
(13, 5998, 1500),
(14, 3000, 1500),
(15, 6000, 3000),
(16, 6000, 3000),
(17, 6000, 3000),
(18, 6000, 3000),
(19, 6500, 3000),
(20, 6000, 3000),
(21, 6000, 3000),
(22, 3000, 1500),
(23, 6000, 3000),
(24, 7500, 3000),
(25, 6000, 3000),
(26, 6000, 3000),
(27, 6000, 3000),
(28, 6000, 3000),
(29, 6000, 3000),
(30, 6500, 3000),
(31, 6000, 3000),
(32, 6000, 3000),
(33, 6000, 3000),
(34, 6000, 3000),
(35, 6000, 3000),
(36, 6000, 3000),
(37, 6000, 3000),
(38, 6000, 3000),
(39, 8000, 3000),
(40, 6000, 3000),
(41, 6000, 3000),
(42, 8000, 3000),
(43, 6000, 3000),
(44, 6000, 3000),
(45, 6000, 3000),
(46, 6000, 3000),
(47, 6000, 3000),
(48, 6000, 3000),
(49, 6000, 3000),
(50, 6000, 3000),
(51, 6000, 3000),
(52, 6000, 3000),
(53, 6000, 3000),
(54, 6000, 3000),
(55, 6000, 3000),
(56, 5, 1500),
(57, 6000, 3000),
(58, 6000, 3000),
(59, 6000, 3000),
(60, 6000, 3000),
(61, 6000, 3000),
(62, 6000, 3000),
(63, 6000, 3000),
(64, 6000, 3000),
(65, 6000, 3000),
(66, 6000, 3000),
(67, 6000, 3000),
(68, 6000, 3000),
(69, 6000, 3000),
(70, 8000, 3000),
(71, 6000, 3000),
(72, 6000, 3000),
(73, 6000, 3000),
(74, 8000, 3000),
(75, 6000, 3000),
(76, 6000, 3000),
(77, 6000, 3000),
(78, 6000, 3000),
(79, 6000, 3000),
(80, 6000, 3000),
(81, 1999, NULL),
(82, 1999, NULL),
(83, 1999, NULL),
(84, 1999, NULL),
(85, 1999, 1500),
(86, 1999, 1500),
(87, 1999, 1500),
(88, 1999, 1500),
(89, 8000, 3000),
(90, 7000, NULL),
(91, 7000, NULL),
(92, 7000, NULL),
(93, 7000, NULL),
(94, 7000, 3000),
(95, 8000, NULL),
(96, 8000, NULL),
(97, 7000, NULL),
(98, 7000, 3000),
(99, 7000, NULL),
(100, 7000, 3000),
(101, 7000, 3000),
(102, 7000, 3000),
(103, 7000, 3000),
(104, 7000, NULL),
(105, 7000, NULL),
(106, 7000, NULL),
(107, 7000, NULL),
(108, 7000, NULL),
(109, 7000, NULL),
(110, 7000, 3000),
(111, 7000, 3000),
(112, 7000, 3000),
(113, 7000, 3000),
(114, 7000, 3000),
(115, 7000, 3000),
(116, 7000, 3000),
(117, 7000, 3000),
(118, 7000, 3000),
(119, 7000, 3000),
(120, 7000, 3000),
(121, 7000, NULL),
(122, 7000, 3000),
(123, 5000, NULL),
(124, 2000, 1500),
(125, 3970, 1500),
(126, 3970, NULL),
(127, 3970, NULL),
(128, 3970, NULL),
(129, 3970, NULL),
(130, 3970, 1500),
(131, 3970, NULL),
(132, 3970, 1500),
(133, 3970, 1500),
(134, 3970, 1500),
(135, 3970, 1500),
(136, 3970, 1500),
(137, 3970, 1500),
(138, 3970, 1500),
(139, 3970, 1500),
(140, 3970, 1500),
(141, 3970, 1500),
(142, 3970, 1500),
(143, 3970, 1500),
(144, 6000, 3000),
(145, 3790, NULL),
(146, 3790, 1500),
(147, 3790, 1500),
(148, 4000, 1500),
(149, 6000, 3000),
(150, 7000, 3000),
(151, 6000, 3000),
(152, 8000, 3000),
(153, 8000, 3000),
(154, 6000, 3000),
(155, 0, 1500),
(156, 9000, 3000),
(157, 0, 1500),
(158, 123, 1500),
(159, 123, 1500),
(160, 150, 1500),
(161, 7000, 3000),
(162, 7000, 3000),
(163, 7000, 3000),
(164, 6000, 3000),
(165, 3000, 1500),
(166, 3970, 1500),
(167, 6000, 3000),
(168, 6000, 3000),
(169, 6000, 3000),
(170, 6000, 3000),
(171, 6000, 3000),
(172, 6000, 3000),
(173, 8000, 3000),
(174, 6000, 3000),
(175, 6000, 3000),
(176, 5000, 1500),
(177, 6000, 3000),
(178, 6000, 3000),
(179, 8000, 3000);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_echelle_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C53D045FC0255A34` (`type_echelle_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `type_echelle_id`, `url`) VALUES
(1, 1, 'build/img/crino.jpg'),
(2, 2, 'build/img/toit.jpg'),
(3, 3, 'build/img/toit.jpg'),
(4, 4, 'build/img/echelle.jpg'),
(7, 5, 'build/img/crino.jpg'),
(8, 6, 'build/img/echelle.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `norme`
--

DROP TABLE IF EXISTS `norme`;
CREATE TABLE IF NOT EXISTS `norme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description_norme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `norme`
--

INSERT INTO `norme` (`id`, `description_norme`, `image_url`) VALUES
(1, 'rtgfezdertgyujtrgeftyuj', 'build/img/euro.jpg'),
(2, 'Norme française', 'build/img/france.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `palier`
--

DROP TABLE IF EXISTS `palier`;
CREATE TABLE IF NOT EXISTS `palier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position_palier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hauteur_palier` int(11) NOT NULL,
  `profondeur_palier` int(11) NOT NULL,
  `longueur_palier` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_role` varchar(38) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sortie`
--

DROP TABLE IF EXISTS `sortie`;
CREATE TABLE IF NOT EXISTS `sortie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference_sortie` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_sortie` int(11) NOT NULL,
  `libelle_sortie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_entree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commercialise` tinyint(1) NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sortie`
--

INSERT INTO `sortie` (`id`, `reference_sortie`, `prix_sortie`, `libelle_sortie`, `description_entree`, `commercialise`, `image_url`) VALUES
(1, '8589658', 300, 'Sortie courte', 'ceci est la premiere sortie', 0, 'build/img/sortieTest.png'),
(2, '5458645', 3000, 'Sortie de Test', 'Ceci est une description', 1, 'build/img/SortieTest2.jpg'),
(3, 'salut', 400, 'salut', 'salut', 1, '0');

-- --------------------------------------------------------

--
-- Structure de la table `type_echelle`
--

DROP TABLE IF EXISTS `type_echelle`;
CREATE TABLE IF NOT EXISTS `type_echelle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_type_echelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `commercialise` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_echelle`
--

INSERT INTO `type_echelle` (`id`, `libelle_type_echelle`, `prix`, `commercialise`) VALUES
(1, 'Echelle à crinoline', 2000, 1),
(2, 'Echelle de toit', 1500, 1),
(3, 'Echelle de Test', 2000, 1),
(4, 'Echelle de Test 2', 3000, 0),
(5, 'Echelle de Test ', 4000, 1),
(6, 'Test du formulaire', 5000, 0),
(7, 'rgrg', 4000, 1);

-- --------------------------------------------------------

--
-- Structure de la table `type_user`
--

DROP TABLE IF EXISTS `type_user`;
CREATE TABLE IF NOT EXISTS `type_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_type_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_user`
--

INSERT INTO `type_user` (`id`, `libelle_type_user`) VALUES
(1, 'Client'),
(2, 'Prospect');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entreprise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_postal` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_typeuser_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  KEY `IDX_8D93D649D49196BB` (`user_typeuser_id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `telephone`, `adresse`, `entreprise`, `code_postal`, `pays`, `user_typeuser_id`, `nom`, `prenom`, `ville`) VALUES
(1, 'th@o.fr', '[]', '$argon2id$v=19$m=65536,t=4,p=1$ZGVTZDlVRWdOOUI3dTlrTw$CNfqa0JeNmVY4PC1+KpIe41hihctPAwJc7kvII+K1dI', '', '435 route de la vallée', 'amihauteur', '69800', 'france', 1, '', '', ''),
(2, 'theo@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$MHdzWDVZZlA0VDNOZXRETg$Fhms7RaS5fhFH4ChEyF1OUOQg1+LVjkl/DiYMwz9K/c', '', 'ytrgefz', 'ytbrvecz', '76500', 'rbtvfecdz', 1, 'duvis', 'perudin', ''),
(6, NULL, '[]', NULL, '688705402', '435', 'ytfre', '78500', 'france', 2, '', '', ''),
(7, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, '', '', ''),
(8, NULL, '[]', NULL, '502020202', 'yhtrgehgr\"egregr', 'rfegtegreg', '78500', 'ytrez', 2, '', '', ''),
(9, NULL, '[]', NULL, '688705402', '56', 'vingt', '70000', 'france', 2, '', '', ''),
(10, NULL, '[]', NULL, '688705402', '56', 'vingt', '70000', 'france', 2, '', '', ''),
(11, NULL, '[]', NULL, '688705402', '56', 'vingt', '70000', 'france', 2, '', '', ''),
(12, NULL, '[]', NULL, '688705402', '56', 'vingt', '70000', 'france', 2, '', '', ''),
(13, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '78500', 'france', 2, '', '', ''),
(14, 'salut@wf.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$Z2NlRTNPMXMyNWk5QXVZQg$l+CTRXYXzGOT/xvNDQfyxE5gvR8sispRAINokpjKLLk', '688705402', '435 route de la vallée', 'Ami-Hauteur', '75000', 'france', 1, '', '', ''),
(15, 'test@wf.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$b0RWaW1kandRSjRKNUpaRg$GYudwYGR7rxw0HsdL1MaqfYeLhtlJviEwVe0xrV7WIU', '688705402', '435 route de la vallée', 'Ami-Hauteur', '75000', 'france', 1, '', '', ''),
(16, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, '', '', ''),
(17, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, '', '', ''),
(18, NULL, '[]', NULL, '688705402', '4535', 'Ami-Hauteur', '78500', 'france', 2, '', '', ''),
(19, NULL, '[]', NULL, '688705402', 'yhtrgehgr\"egregr', 'rfegtegreg', '76000', 'france', 2, '', '', ''),
(20, NULL, '[]', NULL, '688705402', 'edsq', 'rezs', 'reszq', 'rde', 2, '', '', ''),
(21, 'test1@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$bzZLUkxHWFA5dUtjWDE0MA$cTbPRtdm+IWUn420LlrcGqhgQMJbZe4h+d7sKd6bZvI', '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 1, '', '', ''),
(22, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, '', '', ''),
(23, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, '', '', ''),
(24, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, '', '', ''),
(25, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, '', '', ''),
(26, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, '', '', ''),
(27, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, '', '', ''),
(28, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, '', '', ''),
(29, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, '', '', ''),
(30, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, '', '', ''),
(31, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, '', '', ''),
(32, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, '', '', ''),
(33, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, '', '', ''),
(34, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, '', '', ''),
(35, 'theo3@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$RHpQODU2R1IwQU5FdHg4RQ$5GX2MNH2tsg6Ci0sMy9I/bjxtMOLb0HP6GhbJPVF9jo', '688705402', 'yhtrgehgr\"egregr', 'rfegtegreg', '78500', 'france', 1, '', '', ''),
(36, NULL, '[]', NULL, '688705402', 'yhtrgehgr\"egregr', 'rfegtegreg', '76000', 'france', 2, '', '', ''),
(37, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76500', 'r', 2, '', '', ''),
(38, 'theo2@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$S2ZFWk5UNExUdzI2RG9MaQ$cEDGZ3M9Bn7EZSViq8WxMYWSz+MrgJDa4JzbamEFDEo', '688705402', '435 route de la vallée', 'ami-hauteur', '76116', 'France', 1, 'gouchet', 'theo', 'saint denis le thiboult'),
(39, 'theo4@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$QzJ6SFd6MDRxbEk3MFFtLg$EmXJj3jOA94HaKBiJHkrGChbRctaAAN07o/iN9kczZI', '688705402', '435 route de la vallée', 'ami-hauteur', '76116', 'France', 1, 'gouchet', 'theo', 'saint denis le thiboult'),
(40, 'theo5@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$WUM4dlowaFA1aGY1N2gzUQ$yO9W7uOTNPemLCr0QKPwiqZTwt4ykN3TDMHs9y1oKyw', '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 1, 'gouchet', 'theo', 'saint denis le thiboult'),
(41, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(42, NULL, '[]', NULL, '688705402', '435', 'Ami-Hauteur', '76220', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(43, 'theo6@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$WHhHSHhWTU9LZll1VEYwTg$Jj+QmqnhVm12QyzROogaLjYarpQamtFLm/CyD1jaERE', '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 1, 'gouchet', 'theo', 'saint denis le thiboult'),
(44, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(45, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(46, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '78500', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(47, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(48, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(49, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76500', 'rbtvfecdz', 2, 'r', 'r', 'saint denis le thiboult'),
(50, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(51, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '75000', 'France', 2, 'gouchet', 'r', 'saint denis le thiboult'),
(52, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(53, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(54, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(55, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '78500', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(56, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '78500', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(57, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '86555', 'france', 2, 'gouchet', 'r', 'saint denis le thiboult'),
(58, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(59, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(60, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '78500', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(61, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'France', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(62, NULL, '[]', NULL, '688705402', '435 route de la vallée', 'Ami-Hauteur', '76000', 'france', 2, 'gouchet', 'theo', 'saint denis le thiboult'),
(63, 'thierry@ami-hauteur.com', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$ZTZtVUw5Tkhxc0dGRFMxcg$iJcF/IhxoQFYK3z5iYaLowm4BDUeB0T34WD/PxJzHWc', '235000000', '26 route de Lyons la fôret', 'Ami-Hauteur', '76000', 'France', 1, 'gouchet', 'thierry', 'Rouen'),
(64, NULL, '[]', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Invite', 'Invite', NULL),
(65, 'essai@gmail.com', '[]', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Gouchet', 'Theo', NULL),
(66, 'essai2@gmail.com', '[]', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'gouchey', 'theyo', NULL),
(67, 'essai3@gmail.com', '[]', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'theo', 'gouchit', NULL),
(68, NULL, '[]', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Invite', 'Invite', NULL),
(69, 'essai5@gmail.Com', '[]', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Elvis', 'Presley', NULL),
(70, 'presley@gmail.com', '[]', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Pres', 'Pres', NULL),
(71, NULL, '[]', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Invite', 'Invite', NULL),
(72, NULL, '[]', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Invite', 'Invite', NULL),
(73, 'essai7@gmail.com', '[]', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'theo', 'gouchet', NULL),
(74, 'test46@gmail.com', '[]', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Theo', 'Goucheyyyt', NULL),
(75, 'yalcin@hotmail.Fr', '[]', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Yalcin', 'Mabos', NULL),
(76, 'theo88@gmail.com', '[]', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Flantier', 'Alexandre', NULL),
(77, NULL, '[]', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Invite', 'Invite', NULL),
(78, NULL, '[]', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'Invite', 'Invite', NULL),
(79, 'theo.gchet@gmail.Com', '[]', NULL, NULL, NULL, NULL, NULL, NULL, 2, 'duflantier', 'benjamin', NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `config`
--
ALTER TABLE `config`
  ADD CONSTRAINT `FK_D48A2F7CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `coupe_echelle_echelle`
--
ALTER TABLE `coupe_echelle_echelle`
  ADD CONSTRAINT `FK_6D9623673E9E5E10` FOREIGN KEY (`echelle_id_id`) REFERENCES `echelle` (`id`),
  ADD CONSTRAINT `FK_6D9623677DD6B4B5` FOREIGN KEY (`coupe_echelle_id_id`) REFERENCES `coupe_echelle` (`id`);

--
-- Contraintes pour la table `echelle`
--
ALTER TABLE `echelle`
  ADD CONSTRAINT `FK_DA65794D21127304` FOREIGN KEY (`echelle_sortie_id`) REFERENCES `sortie` (`id`),
  ADD CONSTRAINT `FK_DA65794D421B7347` FOREIGN KEY (`echelle_entree_id`) REFERENCES `entree` (`id`),
  ADD CONSTRAINT `FK_DA65794D52EAF347` FOREIGN KEY (`echelle_hauteur_id`) REFERENCES `hauteur` (`id`),
  ADD CONSTRAINT `FK_DA65794D712551BC` FOREIGN KEY (`echelle_type_echelle_id`) REFERENCES `type_echelle` (`id`),
  ADD CONSTRAINT `FK_DA65794DB7242249` FOREIGN KEY (`echelle_norme_id`) REFERENCES `norme` (`id`),
  ADD CONSTRAINT `FK_DA65794DC9BBACD4` FOREIGN KEY (`echelle_config_id`) REFERENCES `config` (`id`);

--
-- Contraintes pour la table `echelle_accessoire`
--
ALTER TABLE `echelle_accessoire`
  ADD CONSTRAINT `FK_FD1FA697D23B67ED` FOREIGN KEY (`accessoire_id`) REFERENCES `accessoire` (`id`),
  ADD CONSTRAINT `FK_FD1FA697DD268C11` FOREIGN KEY (`echelle_id`) REFERENCES `echelle` (`id`);

--
-- Contraintes pour la table `echelle_changement_volee`
--
ALTER TABLE `echelle_changement_volee`
  ADD CONSTRAINT `FK_69E28AE2DB91C02D` FOREIGN KEY (`changement_volee_id`) REFERENCES `changement_volee` (`id`),
  ADD CONSTRAINT `FK_69E28AE2DD268C11` FOREIGN KEY (`echelle_id`) REFERENCES `echelle` (`id`);

--
-- Contraintes pour la table `echelle_fixation`
--
ALTER TABLE `echelle_fixation`
  ADD CONSTRAINT `FK_1DB625E1C769D5E1` FOREIGN KEY (`fixation_id`) REFERENCES `fixation` (`id`),
  ADD CONSTRAINT `FK_1DB625E1DD268C11` FOREIGN KEY (`echelle_id`) REFERENCES `echelle` (`id`);

--
-- Contraintes pour la table `echelle_palier`
--
ALTER TABLE `echelle_palier`
  ADD CONSTRAINT `FK_663CCB8A60E28355` FOREIGN KEY (`palier_id`) REFERENCES `palier` (`id`),
  ADD CONSTRAINT `FK_663CCB8ADD268C11` FOREIGN KEY (`echelle_id`) REFERENCES `echelle` (`id`);

--
-- Contraintes pour la table `element_norme`
--
ALTER TABLE `element_norme`
  ADD CONSTRAINT `FK_FDB991FE1F1F2A24` FOREIGN KEY (`element_id`) REFERENCES `element` (`id`),
  ADD CONSTRAINT `FK_FDB991FE6F0D55C9` FOREIGN KEY (`norme_id`) REFERENCES `norme` (`id`);

--
-- Contraintes pour la table `entity_pdf`
--
ALTER TABLE `entity_pdf`
  ADD CONSTRAINT `FK_EF0DB8C24DB0683` FOREIGN KEY (`config_id`) REFERENCES `config` (`id`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `FK_C53D045FC0255A34` FOREIGN KEY (`type_echelle_id`) REFERENCES `type_echelle` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D6497D8A5F2E` FOREIGN KEY (`user_typeuser_id`) REFERENCES `type_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
