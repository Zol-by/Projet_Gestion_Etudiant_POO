-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 24 août 2023 à 12:23
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `etudiants`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `iduser` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`iduser`, `nom`, `prenom`, `username`, `password`, `statut`) VALUES
(1, 'ZOLO', 'Eloge', 'admin', 'admin', 'admin'),
(2, 'MILAMEM', 'Chantal', 'Chantal', 'Chantal', 'admin'),
(3, 'ICANE', 'Mohamed', 'Mohamed', 'Mohamed', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `IdEnseignant` int(11) NOT NULL,
  `IdMatiere` int(11) DEFAULT NULL,
  `CNIB` varchar(254) NOT NULL,
  `NomEnseignant` varchar(254) DEFAULT NULL,
  `PrenomEnseignant` varchar(254) DEFAULT NULL,
  `TelEnseignant` int(11) DEFAULT NULL,
  `PhotoEnseignant` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`IdEnseignant`, `IdMatiere`, `CNIB`, `NomEnseignant`, `PrenomEnseignant`, `TelEnseignant`, `PhotoEnseignant`) VALUES
(1, 1, 'B23665552', 'NGBO ', 'Loic', 55663344, '../../font/photos/B23665552photo.jpg'),
(2, 3, 'B65412535', 'KABRE', 'Nina', 66552233, '../../font/photos/B65412535photo.jpg'),
(3, 2, 'B654125323', 'DIALO', 'Frède', 58996441, '../../font/photos/B654125323photo.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `IdEtudiant` int(11) NOT NULL,
  `IdFiliere` int(11) DEFAULT NULL,
  `NomEtudiant` varchar(254) DEFAULT NULL,
  `PrenomEtudiant` varchar(254) DEFAULT NULL,
  `TelEtudiant` int(11) DEFAULT NULL,
  `PaysEtudiant` varchar(254) NOT NULL,
  `PhotoEtudiant` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`IdEtudiant`, `IdFiliere`, `NomEtudiant`, `PrenomEtudiant`, `TelEtudiant`, `PaysEtudiant`, `PhotoEtudiant`) VALUES
(1, 2, 'DOBANGA', 'Eliane', 55446633, 'RCA', '../../font/photos/DOBANGAphoto.jpg'),
(2, 4, 'ZOLO', 'Eloge', 66552244, 'RCA', '../../font/photos/ZOLOphoto.jpg'),
(3, 5, 'MAIGA', 'Fayçal', 5562255, 'MALI', '../../font/photos/MAIGAphoto.jpg'),
(4, 3, 'KY', 'Ferdinand', 54326611, 'BURKINA FASO', '../../font/photos/KYphoto.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `filieres`
--

CREATE TABLE `filieres` (
  `IdFiliere` int(11) NOT NULL,
  `NomFiliere` varchar(25) NOT NULL,
  `Departement` varchar(25) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `filieres`
--

INSERT INTO `filieres` (`IdFiliere`, `NomFiliere`, `Departement`, `Date`) VALUES
(1, 'Medecine', 'FS', '2023-08-22'),
(2, 'Sage femme', 'GH', '2023-08-24'),
(3, 'Dentiste', 'HG', '2023-08-22'),
(4, 'Cardiologie', 'CD', '2023-08-22'),
(5, 'Pédiatre', 'HL', '2023-08-23');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `IdMatiere` int(11) NOT NULL,
  `NomMatiere` varchar(255) NOT NULL,
  `NiveauEtude` varchar(255) NOT NULL,
  `DateMatiere` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`IdMatiere`, `NomMatiere`, `NiveauEtude`, `DateMatiere`) VALUES
(1, 'Gastrologie ', '1ere année', '2023-08-23'),
(2, 'Neurologie', '1ere année', '2023-08-09'),
(3, 'Pathologie', '2emme année', '2023-08-24');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`iduser`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`IdEnseignant`),
  ADD KEY `IdMatiere` (`IdMatiere`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`IdEtudiant`),
  ADD KEY `IdFiliere` (`IdFiliere`);

--
-- Index pour la table `filieres`
--
ALTER TABLE `filieres`
  ADD PRIMARY KEY (`IdFiliere`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`IdMatiere`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `IdEnseignant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `IdEtudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `filieres`
--
ALTER TABLE `filieres`
  MODIFY `IdFiliere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `IdMatiere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `enseignant_ibfk_1` FOREIGN KEY (`IdMatiere`) REFERENCES `matiere` (`IdMatiere`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`IdFiliere`) REFERENCES `filieres` (`IdFiliere`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
