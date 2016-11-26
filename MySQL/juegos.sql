-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 26 Novembre 2016 à 12:00
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `juegos`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_bg` (IN `name` VARCHAR(25))  NO SQL
SELECT * FROM board_games WHERE board_games.name_bg=name$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_player` (IN `name` VARCHAR(25))  NO SQL
SELECT * FROM players WHERE players.name_players=name$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_bg` (IN `name` VARCHAR(25), IN `duration` INT, IN `age` INT, IN `min_players` INT, IN `max_players` INT)  BEGIN
	INSERT INTO board_games(name_bg, duration_bg, age_bg, min_players_bg, max_players_bg) VALUES (name, duration, age, min_players, max_players);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_gp` (IN `whenisit` DATETIME, IN `location` VARCHAR(25))  BEGIN
INSERT INTO game_plays (date_gp, location_gp) VALUES (whenisit, location);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_player` (IN `name` VARCHAR(25))  NO SQL
INSERT INTO `players`(`name_players`) VALUES (name)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_point` (IN `point` INT, IN `player` INT, IN `bg` INT, IN `gp` INT, IN `iswinner` INT)  BEGIN
INSERT INTO points (fk_board_games, fk_game_plays, fk_players, players_points, won) VALUES (bg, gp, player, point, iswinner);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_all points` ()  NO SQL
select * FROM full_vision$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_all_bg` ()  NO SQL
select board_games.id_bg, board_games.name_bg FROM board_games$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_all_gp` ()  NO SQL
select * FROM game_plays$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_all_players` ()  NO SQL
select * FROM players$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_all_tp` ()  NO SQL
select * FROM total_point$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_all_vp` ()  NO SQL
SELECT * FROM victory_percentage$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `average_score`
--
CREATE TABLE `average_score` (
`name_players` varchar(25)
,`name_bg` varchar(200)
,`total` decimal(14,4)
);

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `fk_player` int(11) NOT NULL,
  `title_blog` varchar(30) NOT NULL,
  `content_blog` text NOT NULL,
  `flash_blog` varchar(100) NOT NULL,
  `date_blog` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `blog`
--

INSERT INTO `blog` (`id_blog`, `fk_player`, `title_blog`, `content_blog`, `flash_blog`, `date_blog`) VALUES
(1, 1, 'on adorre jouer !', 'Dans cette famille, on adore jouer. Nous possèdeons tellement de jeux que nous ne savons pas où les mettre. <br /><br />\r\n\r\nLa naissance de ce site est la solution de notre problème de rangement. Chaque élément d''un jeu pourra être rangé à une place bien précise avec ses homologues. Ce site permettra de lister le matériel nécessaire ainsi que la localisation des ces dîts matériels.', 'Idée de départ.', '2016-07-21'),
(2, 1, 'un score board !', 'Si nous adorons les jeux, nous jouons ! Pourquoi ne pas faire de ce site notre score board !<br /><br />\r\n\r\nAvec la création d''une petite base de données en MySQL accompagné de requètes PHP, nous allons pouvoir analyser nos parties.', 'Et pourquoi pas ?', '2016-07-21'),
(3, 1, 'C''est bon !', 'Après de grosses lignes de code, le site est à présent bon.\r\nIl ne reste plus qu''à faire une gestion des éléments, un espace membre et la zone start', 'OPS', '2016-08-15'),
(16, 1, 'Création d''article', 'Nous pouvons maintenant créer des articles.\r\nCelui-ci a été insérer via la nouvelle interface.', 'Insert Blog', '2016-09-03'),
(17, 1, 'Nouvelles fonctionnalités', 'Nous pouvons maintenant ajouter des joueurs et des jeux dans l''interface de ce site.\r\n\r\nLa recherche des jeux est plus élaborée. Un jeu peut être recherche selon le nombre de joueur, l''age des joueur et le temps voulu pour jouer', 'news', '2016-09-03'),
(19, 1, 'Encodons nos parties', 'Après un bon casse tête, l''insertion de nos partie est actuellement possible. J''apprends, je m''amuse et ça avance.', 'Alimentons !', '2016-09-04'),
(20, 2, 'Nom d''un écrivain d''article', 'On ne doit plus selectionner l''auteur dans un article. La variable de session fai le travail à notre place.', '$_SESSION[''login'']', '2016-09-04'),
(21, 1, 'Gestion des droits', 'Notre gestion des droits est devenue plus précise.\r\nDe plus, l''affichage des blogs se faire par groupe de 10.', 'Crac dedans', '2016-10-01'),
(23, 1, 'Buzz it', 'Buzz it est intégré à la DB', 'Nouveau jeu', '2016-10-01'),
(24, 1, 'Les jeux que je veux', 'J''ai encodé dans la base de donnée tous les jeux que je voudrais avoir en inactifs.', 'want it !', '2016-10-01'),
(25, 1, 'Testons le blog en bloc de 10', 'Juste pour faire un article 11 afin de voir les articles du blog sur plusieurs pages.', 'test', '2016-10-01'),
(26, 1, 'orienté objet', 'On essaie l''OO', 'oo', '2016-11-05'),
(28, 1, 'Implémentation de class', 'L''implémentation de toutes les class php sont terminées.', '[x].class.php', '2016-11-05');

-- --------------------------------------------------------

--
-- Structure de la table `board_games`
--

CREATE TABLE `board_games` (
  `id_bg` int(11) NOT NULL,
  `name_bg` varchar(200) NOT NULL,
  `duration_bg` int(11) NOT NULL,
  `age_bg` int(11) NOT NULL,
  `min_players_bg` int(11) NOT NULL,
  `max_players_bg` int(11) NOT NULL,
  `is_extention` tinyint(4) NOT NULL,
  `ihave` tinyint(4) NOT NULL,
  `iwant` tinyint(4) NOT NULL,
  `is_activ` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `board_games`
--

INSERT INTO `board_games` (`id_bg`, `name_bg`, `duration_bg`, `age_bg`, `min_players_bg`, `max_players_bg`, `is_extention`, `ihave`, `iwant`, `is_activ`) VALUES
(1, 'carcassonne', 45, 8, 2, 6, 0, 1, 0, 1),
(2, 'les aventuriers du rail europe', 40, 8, 2, 5, 1, 1, 0, 1),
(3, 'pass the pig', 20, 8, 2, 1000, 0, 1, 0, 1),
(4, 'unanimo', 30, 8, 3, 8, 0, 1, 0, 1),
(5, 'bowling', 50, 5, 1, 1000, 0, 0, 0, 1),
(6, 'cluedo', 60, 8, 2, 6, 0, 1, 0, 0),
(7, 'carcassonne la riviere', 40, 8, 2, 5, 1, 1, 0, 1),
(8, 'carcassonne l abbe', 40, 8, 2, 5, 1, 1, 0, 1),
(10, '7 wonders duel', 25, 10, 2, 2, 1, 1, 0, 1),
(11, 'carcassonne auberges et cathedrales', 40, 8, 2, 6, 1, 1, 0, 1),
(12, 'buzz it', 15, 7, 3, 15, 0, 1, 0, 0),
(13, 'les pirates', 30, 8, 2, 4, 0, 1, 0, 0),
(15, 'smallworld plateau 6', 75, 8, 2, 6, 1, 1, 0, 0),
(16, 'carcassonne moutons et collines', 60, 8, 2, 6, 1, 1, 0, 1),
(17, 'carcassonne comte roi et brigands', 60, 8, 2, 6, 1, 1, 0, 0),
(18, 'carcassonne princesse et dragon', 40, 8, 2, 6, 1, 1, 0, 0),
(19, 'carcassonne la tour', 45, 8, 2, 5, 1, 1, 0, 1),
(20, 'carcassonne bazars ponts et forteresses', 40, 8, 2, 6, 1, 1, 0, 1),
(21, 'stratego', 80, 8, 1, 2, 0, 1, 0, 0),
(22, 'les aventuriers du rail', 45, 8, 2, 5, 0, 1, 0, 1),
(23, 'les aventuriers du rail au coeur de l afrique', 40, 8, 2, 5, 1, 1, 0, 0),
(25, 'les aventuriers du rail usa 1910', 60, 8, 2, 5, 1, 1, 0, 0),
(26, 'les aventuriers du rail europe 1912', 60, 8, 2, 5, 1, 1, 0, 1),
(27, 'les aventuriers du rail autour du monde', 105, 10, 2, 5, 1, 1, 0, 0),
(28, 'les aventuriers du rail inde et suisse', 40, 8, 2, 4, 1, 1, 0, 0),
(29, 'les aventuriers du rail asie', 40, 8, 2, 6, 1, 1, 0, 0),
(30, 'les aventuriers du rail pays bas', 40, 8, 2, 5, 1, 1, 0, 0),
(31, 'les aventuriers du rail royaume uni', 40, 8, 2, 5, 1, 1, 0, 0),
(32, 'world of yo ho', 60, 8, 2, 4, 0, 1, 0, 0),
(33, 'colt express', 40, 10, 2, 6, 0, 1, 0, 0),
(34, 'colt express chevaux et diligence', 40, 10, 2, 6, 1, 1, 0, 0),
(35, 'colt express marshal et prisonniers', 40, 10, 3, 7, 1, 1, 0, 0),
(39, 'five tribes', 60, 13, 2, 4, 0, 1, 0, 0),
(40, 'five tribes les artisans de naqala', 60, 13, 2, 4, 1, 1, 0, 0),
(41, 'five tribes les voleurs de naqala', 60, 13, 2, 4, 1, 1, 0, 0),
(42, 'bruges', 60, 10, 2, 4, 0, 1, 0, 1),
(43, 'time stories', 1000, 12, 2, 4, 0, 1, 0, 0),
(59, 'hit z road', 1000, 12, 1, 4, 0, 1, 0, 0),
(60, 'isle of skye', 60, 8, 2, 5, 0, 1, 0, 0),
(61, 'kubb', 45, 10, 2, 1000, 0, 1, 0, 0),
(62, 'molkky', 15, 6, 2, 10, 0, 1, 0, 0),
(63, 'diplomacy', 180, 12, 2, 7, 0, 1, 0, 0),
(64, 'smallworld river world', 60, 8, 2, 5, 1, 1, 0, 0),
(65, 'time stories marcy case', 90, 12, 2, 4, 1, 1, 0, 0),
(66, 'time stories la prophetie des dragons', 120, 12, 2, 4, 1, 1, 0, 0),
(67, 'time stories sous le masque', 1000, 12, 2, 4, 1, 1, 0, 0),
(68, 'mysterium hidden signs', 42, 10, 2, 7, 1, 1, 0, 0),
(69, 'mysterium', 42, 10, 2, 7, 0, 1, 0, 0),
(70, 'pandemic reign of chtulhu', 40, 14, 2, 4, 1, 0, 0, 1),
(71, 'abyss', 45, 10, 2, 4, 0, 0, 0, 0),
(72, 'abyss kraken', 45, 14, 2, 4, 1, 0, 0, 0),
(73, 'watson & holmes', 60, 12, 2, 7, 0, 0, 0, 0),
(74, 'time stories expedition endurance', 90, 12, 2, 4, 1, 0, 0, 0),
(75, 'le cercle des fees', 15, 4, 2, 4, 0, 0, 0, 0),
(76, 'pictionary man', 1000, 14, 2, 1000, 0, 0, 0, 0),
(77, 'risk game of thrones', 120, 18, 2, 7, 1, 0, 0, 0),
(78, 'puissance 4', 15, 6, 1, 2, 0, 0, 0, 0),
(79, 'mikado', 15, 4, 2, 4, 0, 0, 0, 0),
(80, 'echecs', 60, 6, 1, 2, 0, 0, 0, 0),
(81, 'burger quizz', 60, 15, 2, 10, 0, 0, 0, 0),
(82, 'smallworld contes et legendes', 75, 8, 2, 6, 1, 0, 0, 0),
(83, 'la cle cachee', 1000, 7, 2, 4, 0, 0, 0, 0),
(85, 'saboteur 2', 30, 8, 3, 10, 1, 0, 0, 1),
(86, 'carcassonne maire et monastere', 40, 8, 2, 6, 1, 0, 0, 1),
(87, 'carcassonne marchand et batisseur', 45, 8, 2, 6, 1, 0, 0, 1),
(88, 'le menteur', 30, 7, 2, 6, 0, 0, 0, 0),
(89, 'cranium black', 30, 12, 4, 1000, 0, 0, 0, 0),
(90, 'nosferatu', 30, 10, 5, 8, 0, 0, 0, 0),
(91, 'le donjon de naheulbeuk la marche barbare', 60, 10, 3, 6, 1, 0, 0, 0),
(92, 'partini', 60, 18, 4, 1000, 0, 0, 0, 0),
(93, 'monopoli', 120, 8, 2, 8, 0, 0, 0, 0),
(94, 'taboo', 30, 16, 4, 1000, 0, 0, 0, 0),
(95, 'saboteur', 30, 8, 3, 10, 0, 0, 0, 0),
(96, 'saboteur duel', 30, 8, 1, 2, 1, 0, 0, 0),
(97, 'rythme and boulet', 15, 10, 4, 10, 0, 0, 0, 0),
(98, 'bluff party', 120, 12, 4, 50, 0, 0, 0, 0),
(99, 'tchin tchin', 10, 12, 4, 6, 0, 0, 0, 0),
(100, 'cerebrale academie', 45, 8, 2, 6, 0, 0, 0, 0),
(101, 'killer party', 1000, 15, 8, 50, 0, 0, 0, 0),
(102, '1000 bornes', 30, 8, 2, 6, 0, 0, 0, 0),
(103, 'skull and roses', 30, 10, 3, 6, 0, 0, 0, 0),
(104, 'nonsense', 20, 8, 4, 1000, 0, 0, 0, 0),
(105, 'declic', 20, 8, 3, 8, 0, 0, 0, 0),
(106, 'shabadabada', 45, 8, 4, 16, 0, 0, 0, 0),
(107, 'monopoly deal', 20, 8, 2, 5, 1, 0, 0, 0),
(108, 'uno', 30, 7, 2, 10, 0, 0, 0, 0),
(109, 'color addict', 10, 7, 2, 1000, 0, 0, 0, 1),
(110, 'time s up family', 30, 8, 4, 12, 1, 0, 0, 0),
(111, 'time s up academy', 45, 12, 4, 12, 1, 0, 0, 0),
(112, 'time s up', 45, 12, 4, 12, 0, 0, 0, 0),
(113, 'mr jack pocket', 20, 9, 1, 2, 1, 0, 0, 1),
(114, 'wazabi', 20, 8, 2, 6, 0, 0, 0, 0),
(115, 'les loups garous de thiercelieux personnage', 30, 8, 8, 18, 1, 0, 0, 0),
(116, 'les loups garous de thiercelieux le village', 45, 10, 8, 29, 1, 0, 0, 0),
(117, 'les loups garous de thiercelieux nouvelle lune', 30, 8, 8, 18, 1, 0, 0, 0),
(118, 'les loups garous de thiercelieux', 30, 8, 8, 18, 0, 0, 0, 0),
(119, 'lady alice', 30, 8, 3, 5, 0, 0, 0, 0),
(121, '7 wonders', 30, 10, 2, 7, 0, 0, 0, 1),
(122, 'jungle speed l extension', 30, 8, 2, 10, 1, 0, 0, 0),
(123, 'jungle speed lapins cretins', 15, 7, 3, 8, 1, 0, 0, 0),
(124, 'jungle speed', 20, 7, 3, 7, 0, 0, 0, 0),
(125, '7 wonders wonder pack', 30, 10, 2, 8, 1, 0, 0, 1),
(126, '7 wonders babel', 60, 10, 2, 7, 1, 0, 0, 1),
(127, 'smallworld royal bonus', 75, 8, 2, 6, 1, 0, 0, 0),
(128, 'smallworld dans la toile', 60, 10, 2, 6, 1, 0, 0, 0),
(129, 'smallworld realms', 75, 8, 2, 6, 1, 0, 0, 0),
(130, 'smallworld tunnels', 75, 8, 2, 6, 1, 0, 0, 0),
(131, 'smallworld', 75, 10, 2, 5, 0, 0, 0, 0),
(132, 'smallworld underground', 75, 8, 2, 5, 1, 0, 0, 0),
(133, '7 wonders leader', 40, 10, 2, 7, 1, 0, 0, 1),
(134, 'smallworld meme pas peur', 75, 10, 2, 6, 1, 0, 0, 0),
(135, 'le donjon de naheulbeuk', 60, 10, 3, 6, 0, 0, 0, 0),
(136, 'smallworld honneur aux dames', 75, 10, 2, 6, 1, 0, 0, 0),
(137, 'smallworld maauuudits', 75, 8, 2, 6, 1, 0, 0, 0),
(138, 'risk', 120, 18, 2, 7, 0, 0, 0, 0),
(139, '7 wonders duel pantheon', 25, 10, 2, 2, 1, 1, 0, 1),
(140, 'les pays d europe', 1000, 7, 2, 4, 0, 0, 0, 0),
(142, 'grand quizz marvel', 30, 13, 2, 8, 0, 0, 0, 0),
(143, 'belgozoom', 20, 10, 2, 6, 0, 0, 0, 0),
(144, 'pandemic', 40, 14, 2, 4, 0, 0, 0, 0),
(145, 'mr jack', 20, 9, 1, 2, 0, 0, 0, 1),
(147, 'le donjon de naheulbeuk jdr', 240, 15, 3, 6, 1, 0, 0, 0),
(148, '7 wonder faith', 30, 10, 2, 7, 1, 1, 0, 1),
(149, '7 wonders new leaders', 30, 10, 2, 7, 1, 0, 0, 1),
(150, '7 wonders invasion', 30, 10, 2, 7, 1, 0, 0, 1),
(151, '7 wonders commerce', 30, 10, 2, 7, 1, 0, 0, 1),
(152, '7 wonders calamites et fortune', 30, 10, 2, 7, 1, 0, 0, 1),
(153, '7 wonders territoires', 30, 10, 2, 7, 1, 0, 0, 1),
(154, '7 wonders secret', 30, 10, 2, 7, 1, 0, 0, 1),
(155, '7 wonders sailors', 30, 10, 2, 7, 1, 0, 0, 1),
(156, '7 wonders ruins', 30, 10, 2, 7, 1, 0, 0, 1),
(157, '7 wonders empires', 30, 10, 2, 7, 1, 0, 0, 1),
(158, '7 wonders zodiac', 30, 10, 2, 7, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `equipment`
--

CREATE TABLE `equipment` (
  `id_equipment` int(11) NOT NULL,
  `name_equipment` varchar(25) NOT NULL,
  `location_equipment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `establishment`
--

CREATE TABLE `establishment` (
  `id_establishment` int(11) NOT NULL,
  `fk_bg` int(11) NOT NULL,
  `fk_equipment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `extension`
--

CREATE TABLE `extension` (
  `id_extension` int(11) NOT NULL,
  `fk_game_play` int(11) NOT NULL,
  `fk_board_game` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `extension`
--

INSERT INTO `extension` (`id_extension`, `fk_game_play`, `fk_board_game`) VALUES
(1, 9, 7),
(2, 1, 2),
(3, 23, 110),
(4, 26, 110),
(5, 27, 110),
(6, 18, 113),
(7, 19, 113),
(8, 20, 7),
(9, 20, 8),
(10, 20, 19),
(11, 21, 10),
(12, 22, 2),
(13, 25, 113),
(14, 26, 113),
(15, 27, 113);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `extentions`
--
CREATE TABLE `extentions` (
`name_players` varchar(25)
,`name_bg` varchar(200)
,`top` int(11)
,`avg` decimal(14,4)
,`percent` decimal(32,4)
,`tot` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `full_vision`
--
CREATE TABLE `full_vision` (
`name_bg` varchar(200)
,`date_gp` date
,`location_gp` varchar(25)
,`name_players` varchar(25)
,`player_points` int(11)
);

-- --------------------------------------------------------

--
-- Structure de la table `game_plays`
--

CREATE TABLE `game_plays` (
  `id_gp` int(11) NOT NULL,
  `date_gp` date NOT NULL,
  `location_gp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `game_plays`
--

INSERT INTO `game_plays` (`id_gp`, `date_gp`, `location_gp`) VALUES
(1, '2016-07-12', 'suances'),
(2, '2016-07-12', 'suances'),
(3, '2016-07-08', 'suances'),
(4, '2016-07-10', 'suances'),
(5, '2016-07-10', 'suances'),
(6, '2016-07-10', 'suances'),
(7, '2016-07-31', 'tilff'),
(8, '2016-07-31', 'tilff'),
(9, '2016-08-06', 'westende'),
(18, '2016-10-24', 'stockay'),
(19, '2016-10-25', 'stockay'),
(20, '2016-11-26', 'stockay'),
(21, '2016-11-26', 'stockay'),
(22, '2016-11-26', 'stockay'),
(23, '2016-11-26', 'stockay');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `game_plays_count`
--
CREATE TABLE `game_plays_count` (
`name_bg` varchar(200)
,`number` bigint(21)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `game_plays_player`
--
CREATE TABLE `game_plays_player` (
`name_players` varchar(25)
,`number` bigint(21)
);

-- --------------------------------------------------------

--
-- Structure de la table `players`
--

CREATE TABLE `players` (
  `id_players` int(11) NOT NULL,
  `name_players` varchar(25) NOT NULL,
  `password_players` varchar(200) NOT NULL,
  `is_activ` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `players`
--

INSERT INTO `players` (`id_players`, `name_players`, `password_players`, `is_activ`) VALUES
(1, 'bocal', 'd8fee6c2ba7dd15583f38425eb2d94b2', 1),
(2, 'djeke', '8843028fefce50a6de50acdf064ded27', 1),
(3, 'tchoupi', '8843028fefce50a6de50acdf064ded27', 1),
(4, 'dolores', '8843028fefce50a6de50acdf064ded27', 1),
(5, 'mika', '8843028fefce50a6de50acdf064ded27', 1),
(6, 'alice', '8843028fefce50a6de50acdf064ded27', 1),
(8, 'léa', '8843028fefce50a6de50acdf064ded27', 1),
(10, 'seb', '8843028fefce50a6de50acdf064ded27', 1),
(11, 'max', '8843028fefce50a6de50acdf064ded27', 1),
(12, 'sirtique', '8843028fefce50a6de50acdf064ded27', 0),
(13, 'mariemarie', '8843028fefce50a6de50acdf064ded27', 0),
(14, 'trugudu', '8843028fefce50a6de50acdf064ded27', 0),
(15, 'jeannine', '8843028fefce50a6de50acdf064ded27', 0);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `players_average`
--
CREATE TABLE `players_average` (
`name_players` varchar(25)
,`name_bg` varchar(200)
,`total` decimal(14,4)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `players_percentage`
--
CREATE TABLE `players_percentage` (
`name_players` varchar(25)
,`name_bg` varchar(200)
,`winning_percentage` decimal(32,4)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `players_top`
--
CREATE TABLE `players_top` (
`name_players` varchar(25)
,`name_bg` varchar(200)
,`total` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `players_total`
--
CREATE TABLE `players_total` (
`name_players` varchar(25)
,`name_bg` varchar(200)
,`total` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Structure de la table `points`
--

CREATE TABLE `points` (
  `id_points` int(11) NOT NULL,
  `fk_players` int(11) NOT NULL,
  `fk_board_games` int(11) NOT NULL,
  `fk_game_plays` int(11) NOT NULL,
  `player_points` int(11) NOT NULL,
  `won` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `points`
--

INSERT INTO `points` (`id_points`, `fk_players`, `fk_board_games`, `fk_game_plays`, `player_points`, `won`) VALUES
(1, 1, 22, 1, 118, 1),
(2, 3, 22, 1, 115, 0),
(3, 1, 4, 2, 33, 0),
(4, 4, 4, 2, 33, 0),
(5, 3, 4, 2, 37, 1),
(6, 1, 3, 3, 0, 0),
(7, 3, 3, 3, 95, 0),
(8, 2, 3, 3, 119, 1),
(9, 3, 4, 4, 31, 0),
(10, 1, 4, 4, 38, 0),
(11, 2, 4, 4, 39, 1),
(12, 4, 4, 4, 37, 0),
(13, 3, 4, 5, 49, 0),
(14, 1, 4, 5, 48, 0),
(15, 2, 4, 5, 56, 1),
(16, 4, 4, 5, 42, 0),
(17, 3, 4, 6, 46, 0),
(18, 1, 4, 6, 54, 1),
(19, 2, 4, 6, 42, 0),
(20, 4, 4, 6, 38, 0),
(21, 1, 5, 7, 90, 0),
(22, 2, 5, 7, 81, 0),
(23, 10, 5, 7, 108, 0),
(24, 11, 5, 7, 110, 1),
(25, 1, 5, 8, 87, 0),
(26, 2, 5, 8, 83, 0),
(27, 10, 5, 8, 100, 1),
(28, 11, 5, 8, 67, 0),
(29, 1, 1, 9, 57, 0),
(30, 3, 1, 9, 38, 0),
(31, 5, 1, 9, 58, 0),
(32, 6, 1, 9, 68, 1),
(33, 8, 1, 9, 36, 0),
(48, 1, 109, 18, 0, 0),
(49, 3, 109, 18, 17, 1),
(50, 1, 42, 19, 62, 1),
(51, 3, 42, 19, 42, 0),
(52, 1, 145, 18, 2, 0),
(53, 3, 145, 18, 9, 1),
(54, 1, 145, 19, 9, 1),
(55, 3, 145, 19, 7, 0),
(56, 1, 1, 20, 140, 1),
(57, 3, 1, 20, 64, 0),
(58, 1, 121, 21, 60, 0),
(59, 3, 121, 21, 68, 1),
(60, 1, 22, 22, 103, 0),
(61, 3, 22, 22, 118, 1),
(62, 1, 42, 23, 45, 1),
(63, 3, 42, 23, 40, 0);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `top_score`
--
CREATE TABLE `top_score` (
`name_players` varchar(25)
,`name_bg` varchar(200)
,`total` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `total_point`
--
CREATE TABLE `total_point` (
`name_players` varchar(25)
,`name_bg` varchar(200)
,`total` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `victory_percentage`
--
CREATE TABLE `victory_percentage` (
`name_players` varchar(25)
,`name_bg` varchar(200)
,`winning_percentage` decimal(32,4)
);

-- --------------------------------------------------------

--
-- Structure de la vue `average_score`
--
DROP TABLE IF EXISTS `average_score`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `average_score`  AS  select `players`.`name_players` AS `name_players`,`board_games`.`name_bg` AS `name_bg`,avg(`points`.`player_points`) AS `total` from (((`points` join `game_plays`) join `board_games`) join `players`) where ((`board_games`.`id_bg` = `points`.`fk_board_games`) and (`game_plays`.`id_gp` = `points`.`fk_game_plays`) and (`players`.`id_players` = `points`.`fk_players`)) group by `players`.`name_players`,`board_games`.`name_bg` order by max(`points`.`player_points`) desc ;

-- --------------------------------------------------------

--
-- Structure de la vue `extentions`
--
DROP TABLE IF EXISTS `extentions`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `extentions`  AS  select `players`.`name_players` AS `name_players`,`board_games`.`name_bg` AS `name_bg`,max(`points`.`player_points`) AS `top`,avg(`points`.`player_points`) AS `avg`,((sum(`points`.`won`) / count(0)) * 100) AS `percent`,sum(`points`.`player_points`) AS `tot` from ((((`points` join `game_plays`) join `board_games`) join `players`) join `extension`) where ((`game_plays`.`id_gp` = `points`.`fk_game_plays`) and (`players`.`id_players` = `points`.`fk_players`) and (`extension`.`fk_game_play` = `game_plays`.`id_gp`) and (`extension`.`fk_board_game` = `board_games`.`id_bg`)) group by `players`.`name_players`,`board_games`.`name_bg` ;

-- --------------------------------------------------------

--
-- Structure de la vue `full_vision`
--
DROP TABLE IF EXISTS `full_vision`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `full_vision`  AS  select `board_games`.`name_bg` AS `name_bg`,`game_plays`.`date_gp` AS `date_gp`,`game_plays`.`location_gp` AS `location_gp`,`players`.`name_players` AS `name_players`,`points`.`player_points` AS `player_points` from (((`board_games` join `game_plays`) join `players`) join `points`) where ((`board_games`.`id_bg` = `points`.`fk_board_games`) and (`game_plays`.`id_gp` = `points`.`fk_game_plays`) and (`players`.`id_players` = `points`.`fk_players`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `game_plays_count`
--
DROP TABLE IF EXISTS `game_plays_count`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `game_plays_count`  AS  select `board_games`.`name_bg` AS `name_bg`,count(0) AS `number` from ((`game_plays` join `points`) join `board_games`) where ((`game_plays`.`id_gp` = `points`.`fk_game_plays`) and (`board_games`.`id_bg` = `points`.`fk_board_games`) and (`points`.`won` = 1)) group by `points`.`fk_board_games` order by count(0) desc ;

-- --------------------------------------------------------

--
-- Structure de la vue `game_plays_player`
--
DROP TABLE IF EXISTS `game_plays_player`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `game_plays_player`  AS  select `players`.`name_players` AS `name_players`,count(0) AS `number` from ((`game_plays` join `points`) join `players`) where ((`players`.`id_players` = `points`.`fk_players`) and (`game_plays`.`id_gp` = `points`.`fk_game_plays`)) group by `points`.`fk_players` order by count(0) desc ;

-- --------------------------------------------------------

--
-- Structure de la vue `players_average`
--
DROP TABLE IF EXISTS `players_average`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `players_average`  AS  select `average_score`.`name_players` AS `name_players`,`average_score`.`name_bg` AS `name_bg`,max(`average_score`.`total`) AS `total` from `average_score` group by `average_score`.`name_bg` order by `average_score`.`total` ;

-- --------------------------------------------------------

--
-- Structure de la vue `players_percentage`
--
DROP TABLE IF EXISTS `players_percentage`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `players_percentage`  AS  select `victory_percentage`.`name_players` AS `name_players`,`victory_percentage`.`name_bg` AS `name_bg`,max(`victory_percentage`.`winning_percentage`) AS `winning_percentage` from `victory_percentage` group by `victory_percentage`.`name_bg` order by `victory_percentage`.`winning_percentage` desc ;

-- --------------------------------------------------------

--
-- Structure de la vue `players_top`
--
DROP TABLE IF EXISTS `players_top`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `players_top`  AS  select `top_score`.`name_players` AS `name_players`,`top_score`.`name_bg` AS `name_bg`,max(`top_score`.`total`) AS `total` from `top_score` group by `top_score`.`name_bg` order by `top_score`.`total` ;

-- --------------------------------------------------------

--
-- Structure de la vue `players_total`
--
DROP TABLE IF EXISTS `players_total`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `players_total`  AS  select `total_point`.`name_players` AS `name_players`,`total_point`.`name_bg` AS `name_bg`,max(`total_point`.`total`) AS `total` from `total_point` group by `total_point`.`name_bg` order by `total_point`.`total` ;

-- --------------------------------------------------------

--
-- Structure de la vue `top_score`
--
DROP TABLE IF EXISTS `top_score`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `top_score`  AS  select `players`.`name_players` AS `name_players`,`board_games`.`name_bg` AS `name_bg`,max(`points`.`player_points`) AS `total` from (((`points` join `game_plays`) join `board_games`) join `players`) where ((`board_games`.`id_bg` = `points`.`fk_board_games`) and (`game_plays`.`id_gp` = `points`.`fk_game_plays`) and (`players`.`id_players` = `points`.`fk_players`)) group by `players`.`name_players`,`board_games`.`name_bg` order by max(`points`.`player_points`) desc ;

-- --------------------------------------------------------

--
-- Structure de la vue `total_point`
--
DROP TABLE IF EXISTS `total_point`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `total_point`  AS  select `players`.`name_players` AS `name_players`,`board_games`.`name_bg` AS `name_bg`,sum(`points`.`player_points`) AS `total` from (((`points` join `game_plays`) join `board_games`) join `players`) where ((`board_games`.`id_bg` = `points`.`fk_board_games`) and (`game_plays`.`id_gp` = `points`.`fk_game_plays`) and (`players`.`id_players` = `points`.`fk_players`)) group by `players`.`name_players`,`board_games`.`name_bg` order by sum(`points`.`player_points`) desc ;

-- --------------------------------------------------------

--
-- Structure de la vue `victory_percentage`
--
DROP TABLE IF EXISTS `victory_percentage`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `victory_percentage`  AS  select `players`.`name_players` AS `name_players`,`board_games`.`name_bg` AS `name_bg`,((sum(`points`.`won`) / count(0)) * 100) AS `winning_percentage` from (((`points` join `game_plays`) join `board_games`) join `players`) where ((`board_games`.`id_bg` = `points`.`fk_board_games`) and (`game_plays`.`id_gp` = `points`.`fk_game_plays`) and (`players`.`id_players` = `points`.`fk_players`)) group by `players`.`name_players`,`board_games`.`name_bg` order by ((sum(`points`.`won`) / count(0)) * 100) desc ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Index pour la table `board_games`
--
ALTER TABLE `board_games`
  ADD PRIMARY KEY (`id_bg`);

--
-- Index pour la table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id_equipment`);

--
-- Index pour la table `establishment`
--
ALTER TABLE `establishment`
  ADD PRIMARY KEY (`id_establishment`),
  ADD KEY `fk_bg` (`fk_bg`);

--
-- Index pour la table `extension`
--
ALTER TABLE `extension`
  ADD PRIMARY KEY (`id_extension`);

--
-- Index pour la table `game_plays`
--
ALTER TABLE `game_plays`
  ADD PRIMARY KEY (`id_gp`);

--
-- Index pour la table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id_players`),
  ADD UNIQUE KEY `unique_name` (`name_players`);

--
-- Index pour la table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id_points`),
  ADD KEY `fk_players` (`fk_players`),
  ADD KEY `fk_board_games` (`fk_board_games`),
  ADD KEY `fk_game_plays` (`fk_game_plays`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT pour la table `board_games`
--
ALTER TABLE `board_games`
  MODIFY `id_bg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
--
-- AUTO_INCREMENT pour la table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id_equipment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `establishment`
--
ALTER TABLE `establishment`
  MODIFY `id_establishment` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `extension`
--
ALTER TABLE `extension`
  MODIFY `id_extension` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `game_plays`
--
ALTER TABLE `game_plays`
  MODIFY `id_gp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `players`
--
ALTER TABLE `players`
  MODIFY `id_players` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `points`
--
ALTER TABLE `points`
  MODIFY `id_points` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
