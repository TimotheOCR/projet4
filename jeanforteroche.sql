-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : db5003527447.hosting-data.io
-- Généré le : lun. 19 juil. 2021 à 07:05
-- Version du serveur :  5.7.33-log
-- Version de PHP : 7.0.33-0+deb9u11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbs2868676`
--
CREATE DATABASE IF NOT EXISTS `dbs2868676` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbs2868676`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `ID` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`ID`, `titre`, `contenu`, `auteur_id`, `date`) VALUES
(1, 'lnalna', 'nouveau texte lanlna 25\r\n             \r\n        ', 0, '2021-02-10 11:27:46'),
(2, 'lnalna', 'nouveau texte lanlna 25\r\n             \r\n        ', 1, '2021-04-20 08:16:09'),
(3, 'lnalna', 'nouveau texte lanlna 25\r\n             \r\n        ', 1, '2021-04-20 08:20:39'),
(4, 'lnalna', 'nouveau texte lanlna 25\r\n             \r\n        ', 1, '2021-04-26 16:47:07'),
(5, 'lnalna', 'nouveau texte lanlna 25\r\n             \r\n        ', 1, '2021-04-27 02:01:42'),
(6, 'lnalna', 'nouveau texte lanlna 25\r\n             \r\n        ', 1, '2021-04-27 02:29:46'),
(7, 'lnalna', 'nouveau texte lanlna 25\r\n             \r\n        ', 1, '2021-05-18 01:19:05'),
(8, 'lnalna', 'nouveau texte lanlna 25\r\n             \r\n        ', 1, '2021-05-18 02:22:42'),
(9, 'lnalna', 'nouveau texte lanlna 25\r\n             \r\n        ', 1, '2021-05-18 02:34:50'),
(10, 'lnalna', 'nouveau texte lanlna 25\r\n             \r\n        ', 1, '2021-05-18 02:38:28'),
(11, 'lnalna', '<p>nouveau texte lanlna 25</p>', 1, '2021-05-18 02:38:28'),
(12, 'lnalna', '<p>nouveau texte lanlna 25</p>', 1, '2021-05-18 02:40:24'),
(18, 'lnalna', 'nouveau texte lanlna 25\r\n             \r\n        ', 1, '2021-05-21 14:53:38'),
(19, 'lnalna', 'nouveau texte lanlna 25\r\n             \r\n        ', 1, '2021-05-31 23:59:48'),
(20, 'lnalna', 'nouveau texte lanlna 25\r\n             \r\n        ', 1, '2021-06-01 00:11:34'),
(21, 'lnalna', 'nouveau texte lanlna 25\r\n             \r\n        ', 1, '2021-06-01 00:13:14'),
(24, 'lulu', 'bonenznze\r\n             \r\n             \r\n             \r\n        ', 1, '2021-06-01 06:14:05'),
(29, 'titreno', '<div id=\"TheTexte\" class=\"Texte\" lang=\"zxx\">\r\n<p>Tu autem, Fanni, quod mihi tantum tribui dicis quantum ego nec adgnosco nec postulo, facis amice; sed, ut mihi videris, non recte iudicas de Catone; aut enim nemo, quod quidem magis credo, aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.</p>\r\n<p>Batnae municipium in Anthemusia conditum Macedonum manu priscorum ab Euphrate flumine brevi spatio disparatur, refertum mercatoribus opulentis, ubi annua sollemnitate prope Septembris initium mensis ad nundinas magna promiscuae fortunae convenit multitudo ad commercanda quae Indi mittunt et Seres aliaque plurima vehi terra marique consueta.</p>\r\n<p>Restabat ut Caesar post haec properaret accitus et abstergendae causa suspicionis sororem suam, eius uxorem, Constantius ad se tandem desideratam venire multis fictisque blanditiis hortabatur. quae licet ambigeret metuens saepe cruentum, spe tamen quod eum lenire poterit ut germanum profecta, cum Bithyniam introisset, in statione quae Caenos Gallicanos appellatur, absumpta est vi febrium repentina. cuius post obitum maritus contemplans cecidisse fiduciam qua se fultum existimabat, anxia cogitatione, quid moliretur haerebat.</p>\r\n<p>Nihil est enim virtute amabilius, nihil quod magis adliciat ad diligendum, quippe cum propter virtutem et probitatem etiam eos, quos numquam vidimus, quodam modo diligamus. Quis est qui C. Fabrici, M\'. Curi non cum caritate aliqua benevola memoriam usurpet, quos numquam viderit? quis autem est, qui Tarquinium Superbum, qui Sp. Cassium, Sp. Maelium non oderit? Cum duobus ducibus de imperio in Italia est decertatum, Pyrrho et Hannibale; ab altero propter probitatem eius non nimis alienos animos habemus, alterum propter crudelitatem semper haec civitas oderit.</p>\r\n<p>Sed si ille hac tam eximia fortuna propter utilitatem rei publicae frui non properat, ut omnia illa conficiat, quid ego, senator, facere debeo, quem, etiamsi ille aliud vellet, rei publicae consulere oporteret?</p>\r\n</div>', 1, '2021-06-16 09:35:01');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `auteurId` varchar(11) NOT NULL,
  `commentaire` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `articleId` int(11) NOT NULL,
  `signalement` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `auteurId`, `commentaire`, `date`, `articleId`, `signalement`) VALUES
(4, 'pseudoez', '  opjpazjza\r\n        ', '2021-06-16 15:31:17', 29, 5),
(5, 'pseudoaett', '  knpijae\r\n        ', '2021-06-16 15:35:03', 25, 0),
(6, 'pseudoaett', '  knpijae\r\n        ', '2021-06-16 15:40:55', 25, 0),
(7, 'j\'aime', '  c\'était vraiment intéressant\r\n        ', '2021-06-16 15:41:28', 24, 1),
(8, 'monpseudo', '  \r\n        text à clean()', '2021-06-29 10:27:44', 18, 0),
(9, 'Anto', '  voyons voir si ce comm\' fonctionne;<script type=\"txt/javascript\">\r\n    alert (\"inline alert\");\r\n</script>\r\n    ', '2021-07-13 13:38:19', 29, 1),
(10, 'Ok', '  Bruh\r\n    ', '2021-07-14 09:10:14', 6, 0),
(11, 'Rand', '  \r\n    get lon ezk son moen ene it loum', '2021-07-14 13:36:03', 29, 0),
(12, 'Rand2', '  \r\n    get lon ezk son moen ene it loum', '2021-07-14 13:36:55', 29, 3),
(13, 'finaltest', '  commentaire avant mise en ligne\r\n      ', '2021-07-19 08:41:15', 29, 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL DEFAULT 'user',
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `commentaires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `pseudo`, `email`, `password`, `commentaires`) VALUES
(1, 'Admin', 'pierre@mail.com', '$2y$10$qXsUcQ8GorxjzUml0UQfietQw2CAw8kGjsRh365GHCZ3vjbA3394u', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
