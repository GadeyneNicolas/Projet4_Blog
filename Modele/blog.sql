-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 18 juin 2019 à 07:23
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_admin`
--

DROP TABLE IF EXISTS `t_admin`;
CREATE TABLE IF NOT EXISTS `t_admin` (
  `AD_ID` int(11) NOT NULL AUTO_INCREMENT,
  `AD_PSEUDO` varchar(255) NOT NULL,
  `AD_MOTDEPASSE` varchar(255) NOT NULL,
  PRIMARY KEY (`AD_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_admin`
--

INSERT INTO `t_admin` (`AD_ID`, `AD_PSEUDO`, `AD_MOTDEPASSE`) VALUES
(2, 'pseudo', '$2y$10$PeWov4h1oIaNI3zhBP9n9OjJYER6NI1B0z/4TIZtnHfYE5Gpl9L02'),
(3, 'nico', '$2y$10$8UsPok/8W6zQ1pg3X5ers.YAjuxaWZeNYPQ/Im3z7YpHIc6XmYJ2a'),
(4, 'Admin', '$2y$10$.px1f1uVuWEaAR4PcY3egeuetLym.z1.nzgr4QK1B6LHIt1U5pmRC');

-- --------------------------------------------------------

--
-- Structure de la table `t_billet`
--

DROP TABLE IF EXISTS `t_billet`;
CREATE TABLE IF NOT EXISTS `t_billet` (
  `BIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BIL_DATE` datetime NOT NULL,
  `BIL_TITRE` varchar(100) NOT NULL,
  `BIL_IMAGE` varchar(255) DEFAULT NULL,
  `BIL_CONTENU` text NOT NULL,
  PRIMARY KEY (`BIL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_billet`
--

INSERT INTO `t_billet` (`BIL_ID`, `BIL_DATE`, `BIL_TITRE`, `BIL_IMAGE`, `BIL_CONTENU`) VALUES
(44, '2019-06-07 09:17:14', 'Chapitre 1 - Premier pas en Alaska', 'Contenu/Images/Chapitre 1 - Premier pas en Alaska.png', 'Velut per avide ulla dicere ulla ordo et ob avide Ptolomaeo iuste angustias enim magis ob est in culpa et rege advectae sunt facta magis veneno et morte Romanum ideoque nunc dicere voluntaria inpositae classi dicere et urbem hausto et gestorum hausto advectae repetetur culpa culpa nunc populum gestorum hanc ulla repetetur hausto socio hostiles nunc gestorum in inpositae tributaria populum magis angustias foederato nostri est eius insulam ideoque Catonem sine hausto veneno populum eius sine nunc hostiles in dicere gestorum ob veneno ob Ptolomaeo et nostri voluntaria in populum piget hostiles sunt sine per tributaria foederato classi angustias Catonem.\r\n\r\nVelut per avide ulla dicere ulla ordo et ob avide Ptolomaeo iuste angustias enim magis ob est in culpa et rege advectae sunt facta magis veneno et morte Romanum ideoque nunc dicere voluntaria inpositae classi dicere et urbem hausto et gestorum hausto advectae repetetur culpa culpa nunc populum gestorum hanc ulla repetetur hausto socio hostiles nunc gestorum in inpositae tributaria populum magis angustias foederato nostri est eius insulam ideoque Catonem sine hausto veneno populum eius sine nunc hostiles in dicere gestorum ob veneno ob Ptolomaeo et nostri voluntaria in populum piget hostiles sunt sine per tributaria foederato classi angustias Catonem.\r\n\r\nVelut per avide ulla dicere ulla ordo et ob avide Ptolomaeo iuste angustias enim magis ob est in culpa et rege advectae sunt facta magis veneno et morte Romanum ideoque nunc dicere voluntaria inpositae classi dicere et urbem hausto et gestorum hausto advectae repetetur culpa culpa nunc populum gestorum hanc ulla repetetur hausto socio hostiles nunc gestorum in inpositae tributaria populum magis angustias foederato nostri est eius insulam ideoque Catonem sine hausto veneno populum eius sine nunc hostiles in dicere gestorum ob veneno ob Ptolomaeo et nostri voluntaria in populum piget hostiles sunt sine per tributaria foederato classi angustias Catonem.\r\n\r\nVelut per avide ulla dicere ulla ordo et ob avide Ptolomaeo iuste angustias enim magis ob est in culpa et rege advectae sunt facta magis veneno et morte Romanum ideoque nunc dicere voluntaria inpositae classi dicere et urbem hausto et gestorum hausto advectae repetetur culpa culpa nunc populum gestorum hanc ulla repetetur hausto socio hostiles nunc gestorum in inpositae tributaria populum magis angustias foederato nostri est eius insulam ideoque Catonem sine hausto veneno populum eius sine nunc hostiles in dicere gestorum ob veneno ob Ptolomaeo et nostri voluntaria in populum piget hostiles sunt sine per tributaria foederato classi angustias Catonem.'),
(45, '2019-06-07 09:21:38', 'Chapitre 2 - Découverte des lieux', 'Contenu/Images/Chapitre 2 - Découverte des lieux.jpg', 'Velut per avide ulla dicere ulla ordo et ob avide Ptolomaeo iuste angustias enim magis ob est in culpa et rege advectae sunt facta magis veneno et morte Romanum ideoque nunc dicere voluntaria inpositae classi dicere et urbem hausto et gestorum hausto advectae repetetur culpa culpa nunc populum gestorum hanc ulla repetetur hausto socio hostiles nunc gestorum in inpositae tributaria populum magis angustias foederato nostri est eius insulam ideoque Catonem sine hausto veneno populum eius sine nunc hostiles in dicere gestorum ob veneno ob Ptolomaeo et nostri voluntaria in populum piget hostiles sunt sine per tributaria foederato classi angustias Catonem. Velut per avide ulla dicere ulla ordo et ob avide Ptolomaeo iuste angustias enim magis ob est in culpa et rege advectae sunt facta magis veneno et morte Romanum ideoque nunc dicere voluntaria inpositae classi dicere et urbem hausto et gestorum hausto advectae repetetur culpa culpa nunc populum gestorum hanc ulla repetetur hausto socio hostiles nunc gestorum in inpositae tributaria populum magis angustias foederato nostri est eius insulam ideoque Catonem sine hausto veneno populum eius sine nunc hostiles in dicere gestorum ob veneno ob Ptolomaeo et nostri voluntaria in populum piget hostiles sunt sine per tributaria foederato classi angustias Catonem. Velut per avide ulla dicere ulla ordo et ob avide Ptolomaeo iuste angustias enim magis ob est in culpa et rege advectae sunt facta magis veneno et morte Romanum ideoque nunc dicere voluntaria inpositae classi dicere et urbem hausto et gestorum hausto advectae repetetur culpa culpa nunc populum gestorum hanc ulla repetetur hausto socio hostiles nunc gestorum in inpositae tributaria populum magis angustias foederato nostri est eius insulam ideoque Catonem sine hausto veneno populum eius sine nunc hostiles in dicere gestorum ob veneno ob Ptolomaeo et nostri voluntaria in populum piget hostiles sunt sine per tributaria foederato classi angustias Catonem. Velut per avide ulla dicere ulla ordo et ob avide Ptolomaeo iuste angustias enim magis ob est in culpa et rege advectae sunt facta magis veneno et morte Romanum ideoque nunc dicere voluntaria inpositae classi dicere et urbem hausto et gestorum hausto advectae repetetur culpa culpa nunc populum gestorum hanc ulla repetetur hausto socio hostiles nunc gestorum in inpositae tributaria populum magis angustias foederato nostri est eius insulam ideoque Catonem sine hausto veneno populum eius sine nunc hostiles in dicere gestorum ob veneno ob Ptolomaeo et nostri voluntaria in populum piget hostiles sunt sine per tributaria foederato classi angustias Catonem.'),
(46, '2019-06-07 09:22:48', 'Chapitre 3 - Découverte de la faune sauvage', 'Contenu/Images/Chapitre 3 - Découverte de la faune sauvage.jpg', 'Velut per avide ulla dicere ulla ordo et ob avide Ptolomaeo iuste angustias enim magis ob est in culpa et rege advectae sunt facta magis veneno et morte Romanum ideoque nunc dicere voluntaria inpositae classi dicere et urbem hausto et gestorum hausto advectae repetetur culpa culpa nunc populum gestorum hanc ulla repetetur hausto socio hostiles nunc gestorum in inpositae tributaria populum magis angustias foederato nostri est eius insulam ideoque Catonem sine hausto veneno populum eius sine nunc hostiles in dicere gestorum ob veneno ob Ptolomaeo et nostri voluntaria in populum piget hostiles sunt sine per tributaria foederato classi angustias Catonem. Velut per avide ulla dicere ulla ordo et ob avide Ptolomaeo iuste angustias enim magis ob est in culpa et rege advectae sunt facta magis veneno et morte Romanum ideoque nunc dicere voluntaria inpositae classi dicere et urbem hausto et gestorum hausto advectae repetetur culpa culpa nunc populum gestorum hanc ulla repetetur hausto socio hostiles nunc gestorum in inpositae tributaria populum magis angustias foederato nostri est eius insulam ideoque Catonem sine hausto veneno populum eius sine nunc hostiles in dicere gestorum ob veneno ob Ptolomaeo et nostri voluntaria in populum piget hostiles sunt sine per tributaria foederato classi angustias Catonem. Velut per avide ulla dicere ulla ordo et ob avide Ptolomaeo iuste angustias enim magis ob est in culpa et rege advectae sunt facta magis veneno et morte Romanum ideoque nunc dicere voluntaria inpositae classi dicere et urbem hausto et gestorum hausto advectae repetetur culpa culpa nunc populum gestorum hanc ulla repetetur hausto socio hostiles nunc gestorum in inpositae tributaria populum magis angustias foederato nostri est eius insulam ideoque Catonem sine hausto veneno populum eius sine nunc hostiles in dicere gestorum ob veneno ob Ptolomaeo et nostri voluntaria in populum piget hostiles sunt sine per tributaria foederato classi angustias Catonem. Velut per avide ulla dicere ulla ordo et ob avide Ptolomaeo iuste angustias enim magis ob est in culpa et rege advectae sunt facta magis veneno et morte Romanum ideoque nunc dicere voluntaria inpositae classi dicere et urbem hausto et gestorum hausto advectae repetetur culpa culpa nunc populum gestorum hanc ulla repetetur hausto socio hostiles nunc gestorum in inpositae tributaria populum magis angustias foederato nostri est eius insulam ideoque Catonem sine hausto veneno populum eius sine nunc hostiles in dicere gestorum ob veneno ob Ptolomaeo et nostri voluntaria in populum piget hostiles sunt sine per tributaria foederato classi angustias Catonem.');

-- --------------------------------------------------------

--
-- Structure de la table `t_commentaire`
--

DROP TABLE IF EXISTS `t_commentaire`;
CREATE TABLE IF NOT EXISTS `t_commentaire` (
  `COM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTEUR` varchar(100) NOT NULL,
  `COM_CONTENU` text NOT NULL,
  `COM_SIGNALER` varchar(100) NOT NULL DEFAULT 'Non',
  `BIL_ID` int(11) NOT NULL,
  PRIMARY KEY (`COM_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_commentaire`
--

INSERT INTO `t_commentaire` (`COM_ID`, `COM_DATE`, `COM_AUTEUR`, `COM_CONTENU`, `COM_SIGNALER`, `BIL_ID`) VALUES
(6, '2019-06-07 09:25:20', 'Nico', 'J\'aime pas ton livre!', 'Oui', 46);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
