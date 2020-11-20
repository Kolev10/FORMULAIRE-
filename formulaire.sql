-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 20 nov. 2020 à 14:01
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `formulaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `form`
--

CREATE TABLE `form` (
  `id` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `niveau` varchar(100) NOT NULL,
  `specialite` varchar(255) NOT NULL,
  `projet` varchar(255) NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `disponible` varchar(255) NOT NULL,
  `jour` varchar(100) NOT NULL,
  `offre` varchar(100) NOT NULL,
  `interesse` varchar(255) NOT NULL,
  `attente1` varchar(255) NOT NULL,
  `attente2` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `motivation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `form`
--

INSERT INTO `form` (`id`, `email`, `tel`, `nom`, `prenom`, `age`, `niveau`, `specialite`, `projet`, `domaine`, `date`, `disponible`, `jour`, `offre`, `interesse`, `attente1`, `attente2`, `cv`, `motivation`) VALUES
(1, 'mansourkolev@gmail.com', '+221777142434', 'Sow', 'Mansour Kolev', '15 Ã  25 ans', ' Master 1', 'informatique', 'lorem12', 'DÃ©veloppement dâ€™outils bioinformatiques (algorithmes, scripts, applications, logiciels etc)', '2020-11-28', '5 mois', 'Lundi 08h-17h, Mardi 08h-17h, Mercredi 08h-17h, Jeudi 08h-17h, Vendredi 08h-17h, Samedi 08h-17h, Dim', 'lorem 12', 'lorem 12', 'lorem 12', 'lorem 12', 'Doc2.pdf', 'Mansour Kolev Sow motivation.pdf');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
