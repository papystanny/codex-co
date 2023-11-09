-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 30 Mars 2023 à 23:17
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestionchandails`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`id` int(11) NOT NULL,
  `statut` int(32) NOT NULL,
  `prenom` varchar(125) NOT NULL,
  `nom` varchar(125) NOT NULL,
  `courriel` varchar(125) NOT NULL,
  `motDePasse` varchar(1000) NOT NULL,
  `idSuperAdmin` int(32) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf16le AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admins`
--

INSERT INTO `admins` (`id`, `statut`, `prenom`, `nom`, `courriel`, `motDePasse`, `idSuperAdmin`) VALUES
(1, 1, 'Shany-Jonathan', 'Carle', 'shany.carle@cegeptr.qc.ca', '47438e1972def5f29fb722d3870ed96d2436b25a', 1);

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
`id` int(32) NOT NULL,
  `statut` int(32) NOT NULL,
  `nom` varchar(125) NOT NULL,
  `prenom` varchar(125) NOT NULL,
  `courriel` varchar(125) NOT NULL,
  `motDePasse` varchar(1000) NOT NULL,
  `departement` varchar(125) NOT NULL,
  `idSuperAdmin` int(32) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf16le AUTO_INCREMENT=2 ;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id`, `statut`, `nom`, `prenom`, `courriel`, `motDePasse`, `departement`, `idSuperAdmin`) VALUES
(1, 2, 'Pouche Noue', 'Stan Pharel', 'stan.pouche.noue.01@edu.cegeptr.qc.ca', 'informatique', 'informatique', 1);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
`id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
`id` bigint(20) unsigned NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `superadmins`
--

CREATE TABLE IF NOT EXISTS `superadmins` (
`id` int(11) NOT NULL,
  `statut` int(32) NOT NULL,
  `courriel` varchar(255) NOT NULL,
  `motDePasse` varchar(10000) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf16le AUTO_INCREMENT=2 ;

--
-- Contenu de la table `superadmins`
--

INSERT INTO `superadmins` (`id`, `statut`, `courriel`, `motDePasse`) VALUES
(1, 0, 's.admin.321.@edu.cegeptr.qc.ca', '732950d0a2f10d947740bef18b7490fecd7ab22b');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`id`), ADD KEY `FK_SuperAdminAdmin` (`idSuperAdmin`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`id`), ADD KEY `FK_ClientSuperAdmin` (`idSuperAdmin`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `superadmins`
--
ALTER TABLE `superadmins`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
MODIFY `id` int(32) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `superadmins`
--
ALTER TABLE `superadmins`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
