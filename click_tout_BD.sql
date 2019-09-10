-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 10 sep. 2019 à 18:28
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `click_tout`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `Nom` varchar(250) NOT NULL,
  `Prenom` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `N_carte` varchar(250) NOT NULL,
  `ccv` varchar(250) NOT NULL,
  `Date_Carte` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commende`
--

CREATE TABLE `commende` (
  `id_commende` int(11) NOT NULL,
  `Adresse_depart` varchar(250) NOT NULL,
  `Adresse_arrive` varchar(250) NOT NULL,
  `Date` date NOT NULL,
  `Heure` time NOT NULL,
  `type_voiture` varchar(50) NOT NULL,
  `nb_place_dispo` int(11) NOT NULL,
  `nb_ouvruer` int(11) NOT NULL,
  `typeClient` varchar(50) NOT NULL,
  `n_cmd` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `n_facture` varchar(50) NOT NULL,
  `client_id_client` int(11) DEFAULT NULL,
  `transporteur_Id_Transporteur` int(11) DEFAULT NULL,
  `partenaire_id_partenaire` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

CREATE TABLE `partenaire` (
  `id_partenaire` int(11) NOT NULL,
  `nom_ste` varchar(250) NOT NULL DEFAULT '0',
  `responsable` varchar(250) NOT NULL DEFAULT '0',
  `tel` varchar(250) NOT NULL DEFAULT '0',
  `email` varchar(250) NOT NULL DEFAULT '0',
  `adresse` varchar(250) NOT NULL DEFAULT '0',
  `psudo` varchar(250) NOT NULL DEFAULT '0',
  `pwd` varchar(250) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `id_Reclamation` int(11) NOT NULL,
  `Message` text NOT NULL,
  `type_compte` varchar(50) NOT NULL,
  `commende_id_commende` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `transporteur`
--

CREATE TABLE `transporteur` (
  `Id_Transporteur` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `Prenom` varchar(250) NOT NULL,
  `Date_naiss` date NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Adresse` varchar(250) NOT NULL,
  `Matricule` varchar(250) NOT NULL,
  `Type_Voiture` varchar(250) NOT NULL,
  `psudo` varchar(250) NOT NULL,
  `PWD` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commende`
--
ALTER TABLE `commende`
  ADD PRIMARY KEY (`id_commende`),
  ADD KEY `FK_commende_client` (`client_id_client`),
  ADD KEY `FK_commende_transporteur` (`transporteur_Id_Transporteur`),
  ADD KEY `FK_commende_partenaire` (`partenaire_id_partenaire`);

--
-- Index pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD PRIMARY KEY (`id_partenaire`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id_Reclamation`),
  ADD KEY `FK_reclamation_commende` (`commende_id_commende`);

--
-- Index pour la table `transporteur`
--
ALTER TABLE `transporteur`
  ADD PRIMARY KEY (`Id_Transporteur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commende`
--
ALTER TABLE `commende`
  MODIFY `id_commende` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `partenaire`
--
ALTER TABLE `partenaire`
  MODIFY `id_partenaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id_Reclamation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `transporteur`
--
ALTER TABLE `transporteur`
  MODIFY `Id_Transporteur` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commende`
--
ALTER TABLE `commende`
  ADD CONSTRAINT `FK_commende_client` FOREIGN KEY (`client_id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `FK_commende_partenaire` FOREIGN KEY (`partenaire_id_partenaire`) REFERENCES `partenaire` (`id_partenaire`),
  ADD CONSTRAINT `FK_commende_transporteur` FOREIGN KEY (`transporteur_Id_Transporteur`) REFERENCES `transporteur` (`Id_Transporteur`);

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `FK_reclamation_commende` FOREIGN KEY (`commende_id_commende`) REFERENCES `commende` (`id_commende`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
