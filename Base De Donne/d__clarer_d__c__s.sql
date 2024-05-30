-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 30 mai 2024 à 19:52
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `déclarer décès`
--

-- --------------------------------------------------------

--
-- Structure de la table `déclarer décès`
--

CREATE TABLE `déclarer décès` (
  `id` int(11) NOT NULL,
  `Numero acte` varchar(80) NOT NULL,
  `Nom` varchar(15) NOT NULL,
  `Date De Naissance` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Sexe` enum('Male','Femelle') NOT NULL,
  `exp` enum('Mort_Ne') NOT NULL,
  `Wilaya` varchar(20) NOT NULL,
  `Mairie` varchar(20) NOT NULL,
  `Jour de Déce` varchar(11) NOT NULL,
  `Heure De Déce` varchar(5) NOT NULL,
  `Dated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `déclarer décès`
--

INSERT INTO `déclarer décès` (`id`, `Numero acte`, `Nom`, `Date De Naissance`, `Prenom`, `Sexe`, `exp`, `Wilaya`, `Mairie`, `Jour de Déce`, `Heure De Déce`, `Dated`) VALUES
(78, '08888', 'ss', '21-3-2024', 'ss', 'Male', 'Mort_Ne', 'Blida', 'centre ville', '29-5-2024', '22:32', '2024-05-29');

-- --------------------------------------------------------

--
-- Structure de la table `déclarer naissance`
--

CREATE TABLE `déclarer naissance` (
  `id` int(11) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Sexe` enum('Male','Femelle') NOT NULL,
  `exp` enum('X','Fille_Mere') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Wilaya` varchar(15) NOT NULL,
  `Mairie` varchar(20) NOT NULL,
  `Jour De Naissance` varchar(20) NOT NULL,
  `Heure de Naissance` varchar(10) NOT NULL,
  `Numero acte pére` varchar(20) NOT NULL,
  `Prenom Pére` varchar(20) NOT NULL,
  `Date naissance pére` varchar(20) NOT NULL,
  `Numero acte Mére` varchar(20) NOT NULL,
  `Nom Mére` varchar(20) NOT NULL,
  `prenom Mére` varchar(20) NOT NULL,
  `Date naissance Mére` varchar(20) NOT NULL,
  `Daten` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `déclarer naissance`
--

INSERT INTO `déclarer naissance` (`id`, `Nom`, `Prenom`, `Sexe`, `exp`, `Description`, `Wilaya`, `Mairie`, `Jour De Naissance`, `Heure de Naissance`, `Numero acte pére`, `Prenom Pére`, `Date naissance pére`, `Numero acte Mére`, `Nom Mére`, `prenom Mére`, `Date naissance Mére`, `Daten`) VALUES
(42, 'taher', 'moussa', 'Male', 'X', 'zfsqf', 'Alger', 'alger', '29-5-2024', '08:46', '', '', '21-3-2024', '', '', '', '21-3-2024', '2024-05-29');

-- --------------------------------------------------------

--
-- Structure de la table `userm`
--

CREATE TABLE `userm` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Télephone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `userm`
--

INSERT INTO `userm` (`Id`, `Nom`, `Prenom`, `Username`, `Email`, `Password`, `Télephone`) VALUES
(2, 'Debz', 'anis', 'anis', 'anissannabi2@gmail.com', 'anisanis', '0795337574'),
(3, 'Djaber', 'Amine', 'Amn19', 'aminedja99@gmail.com', 'amineamine', '0798760104'),
(4, 'Layachi', 'soumia', 'soumia', 'soumialayachibadri@yahoo.fr', 'soumiasoumia', '089778900');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Télephone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Id`, `Nom`, `Prenom`, `Username`, `Email`, `Password`, `Télephone`) VALUES
(12, 'Djaber', 'Amira', 'Amiramirou', 'amiradjaber51@gmail.com', 'amiramirou', ''),
(19, 'Djaber', 'Amine', 'Amn', 'aminedja99@gmail.com', 'amnakmdja19', '0798760104'),
(20, 'Debz', 'khaireddine', 'khairou', 'annabikhairo@gmail.com', 'khairou23', '09999999');

-- --------------------------------------------------------

--
-- Structure de la table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `image`) VALUES
(5, 'Amn', 'aminedja99@gmail.com', '318d0575caac5b9a4529d72026e79b01', 'Lion_(Panthera_leo)_male_6y.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user_form2`
--

CREATE TABLE `user_form2` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user_form2`
--

INSERT INTO `user_form2` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'billelzg', 'billelzg23@gmail.com', '49ece37c33705ebd642f195b168326c8', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `déclarer décès`
--
ALTER TABLE `déclarer décès`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `déclarer naissance`
--
ALTER TABLE `déclarer naissance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `userm`
--
ALTER TABLE `userm`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_form2`
--
ALTER TABLE `user_form2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `déclarer décès`
--
ALTER TABLE `déclarer décès`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT pour la table `déclarer naissance`
--
ALTER TABLE `déclarer naissance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `userm`
--
ALTER TABLE `userm`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user_form2`
--
ALTER TABLE `user_form2`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
