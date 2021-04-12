-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 avr. 2021 à 23:51
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dev`
--

-- --------------------------------------------------------

--
-- Structure de la table `developpeurs`
--

CREATE TABLE `developpeurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prénom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `developpeurs`
--

INSERT INTO `developpeurs` (`id`, `nom`, `prénom`, `mail`, `password`) VALUES
(1, 'Meziouni', 'Reda', ' reda@mm', '$2y$10$Y1ODo87YDbfdd0PP2v6pFeTkyjGLtSHp.H5riQUmGb3euOZXxlSxe'),
(3, 'moad', 'moad', ' moad@gmail.com', '$2y$10$F0FwDuaw0TOvnF7Ii5W/pOwA2thp8CPgCGgygmxpnrORGeTWzL/Pq'),
(10, 'reda', 'reda', ' reda@gamil.com', '$2y$10$jm1oVJlel6eBMPFxht8QWendlzxnuxnTJdX3DDDdTFxBPVVOTveDm'),
(12, 'reda', 'meziouni', 'meziouni@reda.com', '123456'),
(14, 'teeest', 'eterf', ' reda@wedev.com', '$2y$10$y/RK4qxLR4IpE06kmeHZuuurQ1pfsU3e.gtcmQ5HqCZLFATwratA.'),
(16, 'Essalhi', 'Ayoub', ' ayoub@gmail.com', '$2y$10$BBRyD9gTUvg6gugmR/pjou8ib7xpcOFtGm4a.J.iaF3yoAI6ckam2'),
(17, 'Rabie', 'Eladab', ' rabie@test.com', '$2y$10$/lQ24NMjMS3mFm4rSwSsaOpTV4Rt1nge4b2QxwZbGRaWV/LqH8J5G'),
(18, 'Oussama', 'Almeskine', ' oussama@mail.com', '$2y$10$yfttJfwVhhhPRNr2UbsNK.Gvi0Jk7VCNVSWsE9fb3m5R9o3huIlay');

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id_form` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `techno` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id_form`, `id`, `techno`, `date`) VALUES
(106, 10, 'HTML', '2021-04-07'),
(107, 12, 'PHP', '2021-04-23'),
(108, 12, 'JS', '2021-04-29'),
(109, 12, 'PHP', '2021-04-28'),
(110, 16, 'JS', '2021-04-17');

-- --------------------------------------------------------

--
-- Structure de la table `technos`
--

CREATE TABLE `technos` (
  `id_tech` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `html` int(11) DEFAULT NULL,
  `cgi` int(11) DEFAULT NULL,
  `js` int(11) DEFAULT NULL,
  `ajax` int(11) DEFAULT NULL,
  `php` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `technos`
--

INSERT INTO `technos` (`id_tech`, `id`, `html`, `cgi`, `js`, `ajax`, `php`) VALUES
(2, 3, 5, 3, 2, 3, 5),
(10, 10, 5, 5, 5, 4, 5),
(11, 14, 2, 3, 4, 4, 5),
(12, 1, 2, 2, 2, 0, -1),
(13, 16, 3, 1, 0, 4, 5),
(14, 17, 1, 3, 4, 4, 5),
(15, 18, 3, 4, -1, 0, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `developpeurs`
--
ALTER TABLE `developpeurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id_form`),
  ADD KEY `formations_ibfk_1` (`id`);

--
-- Index pour la table `technos`
--
ALTER TABLE `technos`
  ADD PRIMARY KEY (`id_tech`),
  ADD KEY `technos_ibfk_1` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `developpeurs`
--
ALTER TABLE `developpeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT pour la table `technos`
--
ALTER TABLE `technos`
  MODIFY `id_tech` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `formations_ibfk_1` FOREIGN KEY (`id`) REFERENCES `developpeurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `technos`
--
ALTER TABLE `technos`
  ADD CONSTRAINT `technos_ibfk_1` FOREIGN KEY (`id`) REFERENCES `developpeurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
