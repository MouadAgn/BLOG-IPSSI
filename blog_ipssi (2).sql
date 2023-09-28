-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 28 sep. 2023 à 12:06
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog_ipssi`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenue` text NOT NULL,
  `id_user` int(100) NOT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenue`, `id_user`, `date`) VALUES
(1, 'Test', '<p>eejej</p>', 3, '2023-09-28'),
(3, 'Mon Article', '<p>Salut World</p>', 6, '2023-09-28'),
(4, 'Mouad Question', '<p>HAHAHAIPHAUI</p>', 6, '2023-09-28'),
(5, 'ca marche', '<p>pas</p>', 6, '2023-09-28'),
(6, 'test', '<p>test</p>', 6, '2023-09-28'),
(7, 'HOLA', '<p>HOLA</p>', 6, '2023-09-28'),
(8, 'wazec', '<p>test</p>', 6, '2023-09-28');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mdp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `nom`, `prenom`, `email`, `mdp`) VALUES
(2, 'Alexander477635', 'Alexander', 'Alexander', 'test@gmail.com', '$2y$10$YZ3dWQa9fBx4GQWnzZ5fMu.7RKfSGIutBxAZ.gJocG3eY4R8gEo/.'),
(3, 't', 'test', 'test', 'test', '123'),
(4, 'Anas', 'Anas', 'Anas', 'Anad', '$2y$10$jH0tjZh6O8SYZ7ms6hO8Pus/L.u.aouOJQTKpMyvZVoK17YRXy9qe'),
(5, 'test', 'test', 'test', 'test', '$2y$10$TuKOeez2EarBB5XKqffVIuwdVad95ow7epspoIPtvE5K1Yg/PYR1m'),
(6, 'MouadAgn', 'Aoughane', 'Mouad', 'aoughanemouad1@gmail.com', '$2y$10$2XlfNA4IpKzp/DXnDgDl9OzUU/zgpZ646ZtvIPwsDC6IjA4oaaykW');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
