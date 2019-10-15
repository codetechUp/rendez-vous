-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Mar 15 Octobre 2019 à 13:05
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rv`
--

-- --------------------------------------------------------

--
-- Structure de la table `fonctions`
--

CREATE TABLE `fonctions` (
  `id_fonction` int(11) NOT NULL,
  `nom_fonction` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fonctions`
--

INSERT INTO `fonctions` (`id_fonction`, `nom_fonction`) VALUES
(1, 'Pediatrie'),
(2, 'Pneumologie'),
(3, 'Cardiologie'),
(4, 'Dermatologie'),
(5, 'Gynecologie'),
(6, 'Radiologie'),
(7, 'Odontologie'),
(8, 'Urgence'),
(9, 'Chirurgie'),
(10, 'Rhumatologie');

-- --------------------------------------------------------

--
-- Structure de la table `heureRv`
--

CREATE TABLE `heureRv` (
  `id_heure` int(11) NOT NULL,
  `heureRv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `heureRv`
--

INSERT INTO `heureRv` (`id_heure`, `heureRv`) VALUES
(1, '8h-8h15'),
(2, '8h15-9h'),
(3, '9h-9h15'),
(4, '9h15-9h30'),
(5, '9h30-9h45'),
(6, '9h45-10h'),
(7, '10h-10h15'),
(8, '10h15-10h30'),
(9, '10h30-10h45'),
(10, '10h45-11h'),
(11, '11h-11h15'),
(12, '11h15_11h30'),
(13, '11h30-11h45'),
(14, '11h45-12h\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `medecins`
--

CREATE TABLE `medecins` (
  `id_medecin` int(11) NOT NULL,
  `id_fonction` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `disponible` tinyint(1) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `medecins`
--

INSERT INTO `medecins` (`id_medecin`, `id_fonction`, `nom`, `email`, `prenom`, `disponible`, `password`) VALUES
(1, 1, 'Ndiaye', 'ndiaye@gmail.com', 'Fallou', 0, '192797'),
(2, 2, 'Diop', 'DIOP@gmail.com', 'Samba', 0, '192797'),
(3, 3, 'Ba', 'Bah@gmail.com', 'Papa', 0, ''),
(4, 4, 'Fall', 'oumy@gmail.com', 'Oumy', 0, ''),
(5, 5, 'Rokhaya', 'rokaya@gmail.com', 'Apithy', 0, ''),
(6, 6, 'Dieng', 'dieng@gmail.com', 'Tapha', 0, ''),
(7, 1, 'Ka', 'Ka@gmail.com', 'Ibrahima', 0, '192797'),
(8, 1, 'Souleymane', 'souleymane@gmail.com', 'Diallo', 0, '192797');

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `id_patient` int(11) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `prenom_patient` varchar(255) NOT NULL,
  `nom_patient` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `date_rv` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `patients`
--

INSERT INTO `patients` (`id_patient`, `matricule`, `prenom_patient`, `nom_patient`, `sexe`, `email`, `pays`, `adresse`, `telephone`, `date_rv`) VALUES
(125, 'DE-00003', 'Papa Samba', 'mbaye', 'Mr', 'leak@hzd.com', 'Gambie', 'Thiaroye Gare', 775151236, '2019-10-02 16:02:57'),
(126, 'DE-00003', 'Papa Samba', 'mbaye', 'Mr', 'leak@hzd.com', 'Gambie', 'Thiaroye Gare', 775151236, '2019-10-02 16:04:50'),
(127, 'DE-00003', 'Papa Samba', 'mbaye', 'Mr', 'leak@hzd.com', 'Gambie', 'Thiaroye Gare', 775151236, '2019-10-02 16:09:08'),
(128, 'DE-00002', ',JKNKJ', 'IJHN', 'Mr', 'papasa97@gmail.com', 'Senegal', 'IUÃ‡U', 665498632, '2019-10-03 02:44:23'),
(129, 'DE-00004', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 452763786, '2021-10-13 17:49:39'),
(130, 'DE-00004', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 452763786, '2021-10-13 17:49:47'),
(131, 'DE-00004', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 452763786, '2021-10-13 17:53:40'),
(132, 'DE-00004', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 452763786, '2021-10-13 17:56:28'),
(133, 'DE-00004', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 452763786, '2021-10-13 17:56:35'),
(134, 'DE-00004', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 452763786, '2021-10-13 17:58:03'),
(135, 'DE-00004', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 452763786, '2021-10-13 17:58:27'),
(136, 'DE-00004', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 452763786, '2021-10-13 17:58:33'),
(137, 'DE-00004', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 452763786, '2021-10-13 17:59:29'),
(138, 'DE-00004', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 452763786, '2021-10-13 17:59:32'),
(139, 'DE-00005', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 452763786, '2021-10-13 18:01:41'),
(140, 'DE-00005', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 452763786, '2021-10-13 18:02:20'),
(141, 'DE-00005', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 452763786, '2021-10-13 18:02:24'),
(142, 'DE-00005', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 452763786, '2021-10-13 18:02:27'),
(143, 'DE-00006', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 746584959, '2021-10-14 04:56:42'),
(144, 'DE-00007', 'fallou', 'Ndiaye', 'Mr', 'leak@hzd.com', 'Senegal', 'Thiaroye Gare', 76245963, '2021-10-14 05:13:57'),
(145, 'DE-00007', 'fallou', 'Ndiaye', 'Mr', 'leak@hzd.com', 'Senegal', 'Thiaroye Gare', 76245963, '2021-10-14 05:15:27'),
(146, 'DE-00007', 'fallou', 'Ndiaye', 'Mr', 'leak@hzd.com', 'Senegal', 'Thiaroye Gare', 76245963, '2021-10-14 05:15:43'),
(147, 'DE-00007', 'fallou', 'Ndiaye', 'Mr', 'leak@hzd.com', 'Senegal', 'Thiaroye Gare', 76245963, '2021-10-14 05:16:44'),
(148, 'DE-00007', 'fallou', 'Ndiaye', 'Mr', 'leak@hzd.com', 'Senegal', 'Thiaroye Gare', 76245963, '2021-10-14 05:16:48'),
(149, 'DE-00007', 'fallou', 'Ndiaye', 'Mr', 'leak@hzd.com', 'Senegal', 'Thiaroye Gare', 76245963, '2021-10-14 05:18:32'),
(150, 'DE-00007', 'fallou', 'Ndiaye', 'Mr', 'leak@hzd.com', 'Senegal', 'Thiaroye Gare', 76245963, '2021-10-14 05:19:01'),
(151, 'DE-00007', 'fallou', 'Ndiaye', 'Mr', 'leak@hzd.com', 'Senegal', 'Thiaroye Gare', 76245963, '2021-10-14 05:19:45'),
(152, 'DE-00007', 'fallou', 'Ndiaye', 'Mr', 'leak@hzd.com', 'Senegal', 'Thiaroye Gare', 76245963, '2021-10-14 05:19:49'),
(153, 'DE-00007', 'fallou', 'Ndiaye', 'Mr', 'leak@hzd.com', 'Senegal', 'Thiaroye Gare', 76245963, '2021-10-14 05:21:11'),
(154, 'DE-00007', 'fallou', 'Ndiaye', 'Mr', 'leak@hzd.com', 'Senegal', 'Thiaroye Gare', 76245963, '2021-10-14 05:21:16'),
(155, 'DE-00007', 'fallou', 'Ndiaye', 'Mr', 'leak@hzd.com', 'Senegal', 'Thiaroye Gare', 76245963, '2021-10-14 05:22:39'),
(156, 'DE-00008', 'fallou', 'Ndiaye', 'Mr', 'leak@hzd.com', 'Senegal', 'Thiaroye Gare', 1259604154, '2019-10-13 02:54:15'),
(157, 'DE-00009', 'Samb', 'Ndiaye', 'Mr', 'djhero196@gmail.com', 'Senegal', 'Thiaroye Gare', 775516254, '2019-10-13 02:55:44'),
(158, 'DE-00009', 'Samb', 'Ndiaye', 'Mr', 'djhero196@gmail.com', 'Senegal', 'Thiaroye Gare', 775516254, '2019-10-13 02:56:58'),
(159, 'DE-00010', 'Papa Samba', 'Ndiaye', 'Mr', 'papasa97@gmail.com', 'Mauritanie', 'Thiaroye Gare', 5565656, '2019-10-13 02:58:04'),
(160, 'DE-00010', 'Papa Samba', 'Ndiaye', 'Mr', 'papasa97@gmail.com', 'Mauritanie', 'Thiaroye Gare', 5565656, '2019-10-13 02:59:54'),
(161, 'DE-00010', 'Papa Samba', 'Ndiaye', 'Mr', 'papasa97@gmail.com', 'Mauritanie', 'Thiaroye Gare', 5565656, '2019-10-13 03:00:02'),
(162, 'DE-00010', 'Papa Samba', 'Ndiaye', 'Mr', 'papasa97@gmail.com', 'Mauritanie', 'Thiaroye Gare', 5565656, '2019-10-13 03:00:53'),
(163, 'DE-00010', 'Papa Samba', 'Ndiaye', 'Mr', 'papasa97@gmail.com', 'Mauritanie', 'Thiaroye Gare', 5565656, '2019-10-13 03:01:18'),
(164, 'DE-00010', 'Papa Samba', 'Ndiaye', 'Mr', 'papasa97@gmail.com', 'Mauritanie', 'Thiaroye Gare', 5565656, '2019-10-13 03:01:32'),
(165, 'DE-00010', 'Papa Samba', 'Ndiaye', 'Mr', 'papasa97@gmail.com', 'Mauritanie', 'Thiaroye Gare', 5565656, '2019-10-13 03:01:57'),
(166, 'DE-00010', 'Papa Samba', 'Ndiaye', 'Mr', 'papasa97@gmail.com', 'Mauritanie', 'Thiaroye Gare', 5565656, '2019-10-13 03:02:10'),
(167, 'DE-00010', 'Papa Samba', 'Ndiaye', 'Mr', 'papasa97@gmail.com', 'Mauritanie', 'Thiaroye Gare', 5565656, '2019-10-13 03:02:44'),
(168, 'DE-00010', 'Papa Samba', 'Ndiaye', 'Mr', 'papasa97@gmail.com', 'Mauritanie', 'Thiaroye Gare', 5565656, '2019-10-13 03:03:35'),
(169, 'DE-00010', 'Papa Samba', 'Ndiaye', 'Mr', 'papasa97@gmail.com', 'Mauritanie', 'Thiaroye Gare', 5565656, '2019-10-13 03:03:53'),
(170, 'DE-00011', 'Samba', 'Ndiaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 758621496, '2019-10-13 02:24:59'),
(171, 'DE-00011', 'Samba', 'Ndiaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 758621496, '2019-10-13 02:25:59'),
(172, 'DE-00012', 'Papa Samba', 'Ndiaye', 'Mr', 'leak@hzd.com', 'Senegal', 'pikiniiii', 78578721, '2019-10-13 02:26:55'),
(173, 'DE-00012', 'Papa Samba', 'Ndiaye', 'Mr', 'leak@hzd.com', 'Senegal', 'pikiniiii', 78578721, '2019-10-13 02:27:40'),
(174, 'DE-00012', 'Papa Samba', 'Ndiaye', 'Mr', 'leak@hzd.com', 'Senegal', 'pikiniiii', 78578721, '2019-10-13 02:27:55'),
(175, 'DE-00013', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 88, '2019-10-13 02:28:28'),
(176, 'DE-00013', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 88, '2019-10-13 02:29:35'),
(177, 'DE-00013', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 88, '2019-10-13 02:29:39'),
(178, 'DE-00013', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 88, '2019-10-13 02:31:01'),
(179, 'DE-00014', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'Thiaroye Gare', 88, '2019-10-13 02:31:09'),
(180, 'DE-00015', 'Diouma', 'Fall', 'Mme', 'bvdrt@df.com', 'Senegal', 'keur massar teen bi', 54793158, '2019-10-13 02:33:53'),
(181, 'DE-00016', 'Kadiatou', 'Ndiye', 'Mme', 'leak@hzd.com', 'Senegal', 'thies keur mbaye fall', 4458782, '2019-10-13 02:35:52'),
(182, 'DE-00016', 'Kadiatou', 'Ndiye', 'Mme', 'leak@hzd.com', 'Senegal', 'thies keur mbaye fall', 4458782, '2019-10-13 02:36:00'),
(183, 'DE-00016', 'Kadiatou', 'Ndiye', 'Mme', 'leak@hzd.com', 'Senegal', 'thies keur mbaye fall', 4458782, '2019-10-13 02:37:43'),
(184, 'DE-00016', 'Kadiatou', 'Ndiye', 'Mme', 'leak@hzd.com', 'Senegal', 'thies keur mbaye fall', 4458782, '2019-10-13 02:38:21'),
(185, 'DE-00016', 'Kadiatou', 'Ndiye', 'Mme', 'leak@hzd.com', 'Senegal', 'thies keur mbaye fall', 4458782, '2019-10-13 02:38:57'),
(186, 'DE-00017', 'Samb', 'Ndiye', 'Mr', 'djhero196@gmail.com', 'Senegal', 'Thiaroye Gare', 55454854, '2019-10-13 03:02:30'),
(187, 'DE-00017', 'Samb', 'Ndiye', 'Mr', 'djhero196@gmail.com', 'Senegal', 'Thiaroye Gare', 55454854, '2019-10-13 03:03:27'),
(188, 'DE-00018', 'Samba', 'mbaye', 'Mr', 'leak@hzd.com', 'Senegal', 'thies keur mbaye fall', 221213, '2019-10-13 05:31:51'),
(189, 'DE-00019', 'Papa Samba', 'mbaye', 'Mr', 'papasa97@gmail.com', 'Senegal', 'thies keur mbaye fall', 4454445, '2019-10-15 05:29:46'),
(190, 'DE-00020', 'Kadiatou', 'diallo', 'Mr', 'leak@hzd.com', 'Senegal', 'thies keur mbaye fall', 771225757, '2019-10-15 05:36:49');

-- --------------------------------------------------------

--
-- Structure de la table `rv`
--

CREATE TABLE `rv` (
  `id_rv` int(11) NOT NULL,
  `id_medecin` int(11) DEFAULT NULL,
  `id_patient` int(11) NOT NULL,
  `date_rv` date DEFAULT NULL,
  `domaine` varchar(255) NOT NULL,
  `id_heure` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rv`
--

INSERT INTO `rv` (`id_rv`, `id_medecin`, `id_patient`, `date_rv`, `domaine`, `id_heure`) VALUES
(14, NULL, 159, '2019-10-17', 'Pediatrie', NULL),
(16, NULL, 159, NULL, 'Pediatrie', NULL),
(18, NULL, 170, NULL, 'Pediatrie', NULL),
(20, NULL, 172, NULL, 'Pediatrie', NULL),
(25, NULL, 175, NULL, 'Pediatrie', NULL),
(30, NULL, 181, NULL, 'Pediatrie', NULL),
(35, 1, 186, '2019-10-17', 'Pediatrie', 1),
(36, 1, 188, '2019-10-16', 'Pediatrie', 1),
(37, 1, 189, '2019-10-16', 'Pediatrie', 3),
(38, NULL, 190, '2019-10-16', 'Pediatrie', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `secretaires`
--

CREATE TABLE `secretaires` (
  `id_secret` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_fonction` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `secretaires`
--

INSERT INTO `secretaires` (`id_secret`, `username`, `password`, `id_fonction`) VALUES
(1, 'diouma', '5516254', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `fonctions`
--
ALTER TABLE `fonctions`
  ADD PRIMARY KEY (`id_fonction`);

--
-- Index pour la table `heureRv`
--
ALTER TABLE `heureRv`
  ADD PRIMARY KEY (`id_heure`);

--
-- Index pour la table `medecins`
--
ALTER TABLE `medecins`
  ADD PRIMARY KEY (`id_medecin`),
  ADD KEY `id_fonction` (`id_fonction`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id_patient`);

--
-- Index pour la table `rv`
--
ALTER TABLE `rv`
  ADD PRIMARY KEY (`id_rv`),
  ADD KEY `id_medecin` (`id_medecin`),
  ADD KEY `ld_patient` (`id_patient`),
  ADD KEY `id_heure` (`id_heure`);

--
-- Index pour la table `secretaires`
--
ALTER TABLE `secretaires`
  ADD PRIMARY KEY (`id_secret`),
  ADD KEY `domaine_secret` (`id_fonction`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `fonctions`
--
ALTER TABLE `fonctions`
  MODIFY `id_fonction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `heureRv`
--
ALTER TABLE `heureRv`
  MODIFY `id_heure` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `medecins`
--
ALTER TABLE `medecins`
  MODIFY `id_medecin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;
--
-- AUTO_INCREMENT pour la table `rv`
--
ALTER TABLE `rv`
  MODIFY `id_rv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `secretaires`
--
ALTER TABLE `secretaires`
  MODIFY `id_secret` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `medecins`
--
ALTER TABLE `medecins`
  ADD CONSTRAINT `medecins_ibfk_1` FOREIGN KEY (`id_fonction`) REFERENCES `fonctions` (`id_fonction`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rv`
--
ALTER TABLE `rv`
  ADD CONSTRAINT `rv_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id_patient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rv_ibfk_2` FOREIGN KEY (`id_medecin`) REFERENCES `medecins` (`id_medecin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rv_ibfk_3` FOREIGN KEY (`id_heure`) REFERENCES `heureRv` (`id_heure`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `secretaires`
--
ALTER TABLE `secretaires`
  ADD CONSTRAINT `secretaires_ibfk_1` FOREIGN KEY (`id_fonction`) REFERENCES `fonctions` (`id_fonction`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
