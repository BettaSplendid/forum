-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 31 jan. 2022 à 13:27
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp_forum_blanc`
--

-- --------------------------------------------------------

--
-- Structure de la table `Article`
--

CREATE TABLE `Article` (
  `article_id` int(11) NOT NULL,
  `auteur_id` int(11) DEFAULT NULL,
  `id_editeur` int(11) DEFAULT NULL,
  `titre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `Article`
--

INSERT INTO `Article` (`article_id`, `auteur_id`, `id_editeur`, `titre`, `resume`) VALUES
(2, 3, 5, 'jnbhkj', 'jnlbjn');

-- --------------------------------------------------------

--
-- Structure de la table `Auteur`
--

CREATE TABLE `Auteur` (
  `auteur_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `Auteur`
--

INSERT INTO `Auteur` (`auteur_id`, `name`) VALUES
(1, 'Altenwerth'),
(2, 'Wolf'),
(3, 'Leffler'),
(4, 'Johnson'),
(5, 'Corwin'),
(6, 'Ritchie'),
(7, 'Paucek'),
(8, 'Grant'),
(9, 'Heaney'),
(10, 'Doyle'),
(11, 'Schmitt'),
(12, 'Schimmel'),
(13, 'Luettgen'),
(14, 'Weber'),
(15, 'Stanton'),
(16, 'Homenick'),
(17, 'Wunsch'),
(18, 'Spinka'),
(19, 'Hessel'),
(20, 'Yost'),
(21, 'Bruen'),
(22, 'Green'),
(23, 'Mills'),
(24, 'Runolfsson'),
(25, 'Lebsack'),
(26, 'Rodriguez'),
(27, 'Turner'),
(28, 'Littel'),
(29, 'Konopelski'),
(30, 'Boehm');

-- --------------------------------------------------------

--
-- Structure de la table `Editeur`
--

CREATE TABLE `Editeur` (
  `id_editeur` int(11) NOT NULL,
  `nom_editeur` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `Editeur`
--

INSERT INTO `Editeur` (`id_editeur`, `nom_editeur`) VALUES
(1, 'Koch'),
(2, 'Keebler'),
(3, 'Moore'),
(4, 'Emard'),
(5, 'Haag'),
(6, 'Schinner'),
(7, 'Lang'),
(8, 'Hermiston'),
(9, 'McKenzie'),
(10, 'Veum'),
(11, 'Weimann'),
(12, 'White'),
(13, 'Walter'),
(14, 'Gleason'),
(15, 'Mann'),
(16, 'Welch'),
(17, 'Schumm'),
(18, 'Kris'),
(19, 'Ondricka'),
(20, 'Nicolas'),
(21, 'Koss'),
(22, 'Hilpert'),
(23, 'Grimes'),
(24, 'Olson');

-- --------------------------------------------------------

--
-- Structure de la table `Visitor`
--

CREATE TABLE `Visitor` (
  `visitor_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Article`
--
ALTER TABLE `Article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `IDX_CD8737FA60BB6FE6` (`auteur_id`),
  ADD KEY `IDX_CD8737FADB3AEE9F` (`id_editeur`);

--
-- Index pour la table `Auteur`
--
ALTER TABLE `Auteur`
  ADD PRIMARY KEY (`auteur_id`);

--
-- Index pour la table `Editeur`
--
ALTER TABLE `Editeur`
  ADD PRIMARY KEY (`id_editeur`);

--
-- Index pour la table `Visitor`
--
ALTER TABLE `Visitor`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Article`
--
ALTER TABLE `Article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Auteur`
--
ALTER TABLE `Auteur`
  MODIFY `auteur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `Editeur`
--
ALTER TABLE `Editeur`
  MODIFY `id_editeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `Visitor`
--
ALTER TABLE `Visitor`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Article`
--
ALTER TABLE `Article`
  ADD CONSTRAINT `FK_CD8737FA60BB6FE6` FOREIGN KEY (`auteur_id`) REFERENCES `Auteur` (`auteur_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_CD8737FADB3AEE9F` FOREIGN KEY (`id_editeur`) REFERENCES `Editeur` (`id_editeur`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
