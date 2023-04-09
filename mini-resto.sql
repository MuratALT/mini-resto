-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 09 avr. 2023 à 15:38
-- Version du serveur : 10.6.12-MariaDB-0ubuntu0.22.04.1
-- Version de PHP : 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mini-resto`
--

-- --------------------------------------------------------

--
-- Structure de la table `RESERVATION`
--

CREATE TABLE `RESERVATION` (
  `num_reserv` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `RESERVATION`
--

INSERT INTO `RESERVATION` (`num_reserv`, `user_id`, `table_id`) VALUES
(1, 1, 1),
(9, 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `TABLE_ROND`
--

CREATE TABLE `TABLE_ROND` (
  `ref` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `TABLE_ROND`
--

INSERT INTO `TABLE_ROND` (`ref`, `libelle`) VALUES
(1, 'Table ronde n°1'),
(2, 'Table carré n°1'),
(3, 'Table rectangulaire n°1');

-- --------------------------------------------------------

--
-- Structure de la table `UTILISATEUR`
--

CREATE TABLE `UTILISATEUR` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` char(2) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `UTILISATEUR`
--

INSERT INTO `UTILISATEUR` (`id`, `nom`, `prenom`, `date_naissance`, `mail`, `password`, `role`) VALUES
(1, 'FAKAJ', 'Andi', '2003-12-30', 'andi@fakaj.com', '$2y$10$HkVL0Dp3ciopY2JEtlFcDeRhDSeOxKefOSNXu2p.0zTaT.O5NYbD2', 'U'),
(2, 'AAAA', 'Aaaa', '2003-12-31', 'aaa@gmail.com', '$2y$10$zcc5QixbBqEMNwgngLlxK.mvMsTgnjbW.8ugOfxO8.f3IZifP.t9e', 'U'),
(3, 'ADMIN', 'Admin', '2003-12-31', 'admin@gmail.com', '$2y$10$Rf2tBpohvnbMxMpVAbfde.nb/6e.pE7lHSNacgY3lQAH.Os62gh22', 'A');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `RESERVATION`
--
ALTER TABLE `RESERVATION`
  ADD PRIMARY KEY (`num_reserv`),
  ADD KEY `user_id` (`user_id`,`table_id`);

--
-- Index pour la table `TABLE_ROND`
--
ALTER TABLE `TABLE_ROND`
  ADD PRIMARY KEY (`ref`);

--
-- Index pour la table `UTILISATEUR`
--
ALTER TABLE `UTILISATEUR`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `RESERVATION`
--
ALTER TABLE `RESERVATION`
  MODIFY `num_reserv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `TABLE_ROND`
--
ALTER TABLE `TABLE_ROND`
  MODIFY `ref` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `UTILISATEUR`
--
ALTER TABLE `UTILISATEUR`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
