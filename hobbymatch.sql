-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2025 at 06:59 PM
-- Server version: 8.2.0
-- PHP Version: 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hobbymatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

DROP TABLE IF EXISTS `hobbies`;
CREATE TABLE IF NOT EXISTS `hobbies` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Titre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `DatePublication` date DEFAULT NULL,
  `Auteur` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Prix` decimal(10,2) DEFAULT NULL,
  `Latitude` decimal(9,6) DEFAULT NULL,
  `Longitude` decimal(9,6) DEFAULT NULL,
  `EmailContact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ImageRepository` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ImageFileName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DateCreation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DateMiseAJour` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=201 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`Id`, `Titre`, `Description`, `DatePublication`, `Auteur`, `Prix`, `Latitude`, `Longitude`, `EmailContact`, `ImageRepository`, `ImageFileName`, `DateCreation`, `DateMiseAJour`) VALUES
(1, 'Lecture', 'Ceci est une description générale pour le hobby Lecture', '2025-04-15', 'Jabari', 96.39, 49.435651, 1.102178, 'heidenreich.sage@bogan.com', 'fixtures', 'lecture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(2, 'Jardinage', 'Ceci est une description générale pour le hobby Jardinage', '2025-04-16', 'Isaiah', 87.85, 49.449704, 1.109104, 'uhintz@klein.com', 'fixtures', 'jardinage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(3, 'Peinture', 'Ceci est une description générale pour le hobby Peinture', '2025-04-17', 'Dusty', 82.58, 49.434654, 1.089789, 'melisa.ratke@stokes.org', 'fixtures', 'peinture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(4, 'Cuisine', 'Ceci est une description générale pour le hobby Cuisine', '2025-04-18', 'Leone', 96.51, 49.438981, 1.092333, 'emmie.yost@veum.biz', 'fixtures', 'cuisine.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(5, 'Voyage', 'Ceci est une description générale pour le hobby Voyage', '2025-04-19', 'Beryl', 83.62, 49.435644, 1.099196, 'vledner@hotmail.com', 'fixtures', 'voyage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(6, 'Photographie', 'Ceci est une description générale pour le hobby Photographie', '2025-04-20', 'Genesis', 56.66, 49.446095, 1.101671, 'ruthie90@gmail.com', 'fixtures', 'photographie.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(7, 'Cyclisme', 'Ceci est une description générale pour le hobby Cyclisme', '2025-04-21', 'Uriel', 55.90, 49.445173, 1.092867, 'maverick.maggio@oconnell.com', 'fixtures', 'cyclisme.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(8, 'Randonnée', 'Ceci est une description générale pour le hobby Randonnée', '2025-04-22', 'Rossie', 27.52, 49.435425, 1.100862, 'manuel81@gmail.com', 'fixtures', 'randonnée.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(9, 'Pêche', 'Ceci est une description générale pour le hobby Pêche', '2025-04-23', 'Derick', 47.79, 49.448350, 1.095342, 'helena.shields@schimmel.com', 'fixtures', 'pêche.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(10, 'Tricot', 'Ceci est une description générale pour le hobby Tricot', '2025-04-24', 'Mckayla', 11.48, 49.445163, 1.096667, 'horace91@koch.com', 'fixtures', 'tricot.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(11, 'Travail du bois', 'Ceci est une description générale pour le hobby Travail du bois', '2025-04-25', 'Orrin', 31.92, 49.440737, 1.104896, 'emard.monique@ernser.com', 'fixtures', 'travail_du_bois.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(12, 'Observation des oiseaux', 'Ceci est une description générale pour le hobby Observation des oiseaux', '2025-04-26', 'Garth', 38.63, 49.452039, 1.103387, 'rward@yahoo.com', 'fixtures', 'observation_des_oiseaux.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(13, 'Danse', 'Ceci est une description générale pour le hobby Danse', '2025-04-27', 'Leonel', 57.50, 49.434205, 1.106209, 'izaiah49@jenkins.biz', 'fixtures', 'danse.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(14, 'Écriture', 'Ceci est une description générale pour le hobby Écriture', '2025-04-28', 'Elyssa', 60.68, 49.435234, 1.095450, 'feeney.aliyah@gmail.com', 'fixtures', 'Écriture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(15, 'Yoga', 'Ceci est une description générale pour le hobby Yoga', '2025-04-29', 'Weston', 55.01, 49.441448, 1.098379, 'spencer.kole@gmail.com', 'fixtures', 'yoga.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(16, 'Méditation', 'Ceci est une description générale pour le hobby Méditation', '2025-04-30', 'Duane', 57.65, 49.435374, 1.100559, 'brennan.schultz@yahoo.com', 'fixtures', 'méditation.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(17, 'Jeux vidéo', 'Ceci est une description générale pour le hobby Jeux vidéo', '2025-05-01', 'Angus', 66.48, 49.440865, 1.094838, 'levi.flatley@hotmail.com', 'fixtures', 'jeux_vidéo.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(18, 'Collection', 'Ceci est une description générale pour le hobby Collection', '2025-05-02', 'Cleora', 45.72, 49.435383, 1.089477, 'joanny.feest@yahoo.com', 'fixtures', 'collection.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(19, 'Dessin', 'Ceci est une description générale pour le hobby Dessin', '2025-05-03', 'Matteo', 29.90, 49.450009, 1.097590, 'kory06@runolfsson.com', 'fixtures', 'dessin.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(20, 'Couture', 'Ceci est une description générale pour le hobby Couture', '2025-05-04', 'Betsy', 59.11, 49.453012, 1.105137, 'hane.kenya@hotmail.com', 'fixtures', 'couture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(21, 'Lecture', 'Ceci est une description générale pour le hobby Lecture', '2025-05-05', 'Gerda', 38.58, 49.447665, 1.090293, 'bette.pagac@harvey.com', 'fixtures', 'lecture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(22, 'Jardinage', 'Ceci est une description générale pour le hobby Jardinage', '2025-05-06', 'Else', 32.13, 49.436289, 1.107018, 'schroeder.nikolas@ullrich.com', 'fixtures', 'jardinage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(23, 'Peinture', 'Ceci est une description générale pour le hobby Peinture', '2025-05-07', 'Antoinette', 37.43, 49.452953, 1.108137, 'hassan52@hotmail.com', 'fixtures', 'peinture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(24, 'Cuisine', 'Ceci est une description générale pour le hobby Cuisine', '2025-05-08', 'Cornelius', 92.54, 49.446632, 1.094702, 'maye64@barton.info', 'fixtures', 'cuisine.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(25, 'Voyage', 'Ceci est une description générale pour le hobby Voyage', '2025-05-09', 'Leta', 12.47, 49.439141, 1.102722, 'ihills@hotmail.com', 'fixtures', 'voyage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(26, 'Photographie', 'Ceci est une description générale pour le hobby Photographie', '2025-05-10', 'Gianni', 48.79, 49.440669, 1.099217, 'haven43@hettinger.com', 'fixtures', 'photographie.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(27, 'Cyclisme', 'Ceci est une description générale pour le hobby Cyclisme', '2025-05-11', 'Caleb', 67.64, 49.445147, 1.092308, 'froob@yahoo.com', 'fixtures', 'cyclisme.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(28, 'Randonnée', 'Ceci est une description générale pour le hobby Randonnée', '2025-05-12', 'Antwon', 89.97, 49.448305, 1.107162, 'veronica.nolan@gmail.com', 'fixtures', 'randonnée.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(29, 'Pêche', 'Ceci est une description générale pour le hobby Pêche', '2025-05-13', 'Enrique', 83.52, 49.440125, 1.104960, 'twolff@lynch.info', 'fixtures', 'pêche.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(30, 'Tricot', 'Ceci est une description générale pour le hobby Tricot', '2025-05-14', 'Florence', 21.15, 49.438419, 1.093708, 'casper.cayla@satterfield.org', 'fixtures', 'tricot.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(31, 'Travail du bois', 'Ceci est une description générale pour le hobby Travail du bois', '2025-05-15', 'Judy', 61.92, 49.446728, 1.091835, 'crist.narciso@yahoo.com', 'fixtures', 'travail_du_bois.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(32, 'Observation des oiseaux', 'Ceci est une description générale pour le hobby Observation des oiseaux', '2025-05-16', 'Rogers', 17.64, 49.450364, 1.091665, 'mueller.virgie@walker.com', 'fixtures', 'observation_des_oiseaux.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(33, 'Danse', 'Ceci est une description générale pour le hobby Danse', '2025-05-17', 'Douglas', 68.62, 49.450731, 1.106331, 'joel.lueilwitz@hotmail.com', 'fixtures', 'danse.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(34, 'Écriture', 'Ceci est une description générale pour le hobby Écriture', '2025-05-18', 'Annetta', 77.33, 49.447517, 1.099224, 'marcellus.jacobs@yahoo.com', 'fixtures', 'Écriture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(35, 'Yoga', 'Ceci est une description générale pour le hobby Yoga', '2025-05-19', 'Robin', 11.65, 49.435165, 1.098884, 'kattie00@hahn.org', 'fixtures', 'yoga.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(36, 'Méditation', 'Ceci est une description générale pour le hobby Méditation', '2025-05-20', 'Buster', 92.72, 49.439722, 1.095883, 'rebecca.gerlach@yahoo.com', 'fixtures', 'méditation.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(37, 'Jeux vidéo', 'Ceci est une description générale pour le hobby Jeux vidéo', '2025-05-21', 'Shad', 34.78, 49.452789, 1.090283, 'jazmin.harber@boyer.net', 'fixtures', 'jeux_vidéo.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(38, 'Collection', 'Ceci est une description générale pour le hobby Collection', '2025-05-22', 'Emmy', 77.71, 49.451913, 1.091826, 'rupert.lind@rippin.com', 'fixtures', 'collection.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(39, 'Dessin', 'Ceci est une description générale pour le hobby Dessin', '2025-05-23', 'Eduardo', 63.00, 49.442051, 1.105343, 'effertz.laverna@bernier.com', 'fixtures', 'dessin.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(40, 'Couture', 'Ceci est une description générale pour le hobby Couture', '2025-05-24', 'Maya', 76.00, 49.434544, 1.105559, 'waufderhar@yahoo.com', 'fixtures', 'couture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(41, 'Lecture', 'Ceci est une description générale pour le hobby Lecture', '2025-05-25', 'Lavinia', 45.82, 49.436718, 1.089435, 'abbott.angelina@yahoo.com', 'fixtures', 'lecture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(42, 'Jardinage', 'Ceci est une description générale pour le hobby Jardinage', '2025-05-26', 'Tommie', 31.22, 49.449426, 1.106056, 'stroman.cary@yahoo.com', 'fixtures', 'jardinage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(43, 'Peinture', 'Ceci est une description générale pour le hobby Peinture', '2025-05-27', 'Caesar', 76.12, 49.437264, 1.091460, 'qborer@yahoo.com', 'fixtures', 'peinture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(44, 'Cuisine', 'Ceci est une description générale pour le hobby Cuisine', '2025-05-28', 'Jasmin', 67.74, 49.448003, 1.100152, 'annamarie.corkery@kuhic.com', 'fixtures', 'cuisine.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(45, 'Voyage', 'Ceci est une description générale pour le hobby Voyage', '2025-05-29', 'Dorian', 76.79, 49.442778, 1.107364, 'jacques81@yost.com', 'fixtures', 'voyage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(46, 'Photographie', 'Ceci est une description générale pour le hobby Photographie', '2025-05-30', 'Yazmin', 41.90, 49.439898, 1.101216, 'vleannon@yahoo.com', 'fixtures', 'photographie.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(47, 'Cyclisme', 'Ceci est une description générale pour le hobby Cyclisme', '2025-05-31', 'Kane', 15.68, 49.437841, 1.093836, 'curt.weimann@hotmail.com', 'fixtures', 'cyclisme.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(48, 'Randonnée', 'Ceci est une description générale pour le hobby Randonnée', '2025-06-01', 'Lysanne', 47.86, 49.435236, 1.104249, 'doyle.ila@brakus.com', 'fixtures', 'randonnée.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(49, 'Pêche', 'Ceci est une description générale pour le hobby Pêche', '2025-06-02', 'Charles', 15.68, 49.445074, 1.100929, 'dietrich.al@purdy.com', 'fixtures', 'pêche.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(50, 'Tricot', 'Ceci est une description générale pour le hobby Tricot', '2025-06-03', 'Presley', 73.14, 49.434939, 1.106562, 'herminia.hauck@armstrong.com', 'fixtures', 'tricot.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(51, 'Travail du bois', 'Ceci est une description générale pour le hobby Travail du bois', '2025-06-04', 'Dorris', 80.79, 49.447199, 1.100622, 'mclaughlin.donavon@abernathy.com', 'fixtures', 'travail_du_bois.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(52, 'Observation des oiseaux', 'Ceci est une description générale pour le hobby Observation des oiseaux', '2025-06-05', 'Adrianna', 81.45, 49.439896, 1.094516, 'aleen.heathcote@kassulke.com', 'fixtures', 'observation_des_oiseaux.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(53, 'Danse', 'Ceci est une description générale pour le hobby Danse', '2025-06-06', 'Shawn', 28.08, 49.450273, 1.092890, 'frempel@hagenes.com', 'fixtures', 'danse.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(54, 'Écriture', 'Ceci est une description générale pour le hobby Écriture', '2025-06-07', 'Rogers', 69.51, 49.435085, 1.090218, 'ucarter@hotmail.com', 'fixtures', 'Écriture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(55, 'Yoga', 'Ceci est une description générale pour le hobby Yoga', '2025-06-08', 'Xzavier', 78.05, 49.441572, 1.089863, 'cooper.ziemann@macejkovic.org', 'fixtures', 'yoga.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(56, 'Méditation', 'Ceci est une description générale pour le hobby Méditation', '2025-06-09', 'Tyler', 76.58, 49.442067, 1.104797, 'qullrich@cartwright.com', 'fixtures', 'méditation.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(57, 'Jeux vidéo', 'Ceci est une description générale pour le hobby Jeux vidéo', '2025-06-10', 'Jaren', 42.15, 49.445561, 1.098434, 'cshields@hotmail.com', 'fixtures', 'jeux_vidéo.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(58, 'Collection', 'Ceci est une description générale pour le hobby Collection', '2025-06-11', 'Virginie', 98.50, 49.447554, 1.090737, 'vincenza.hyatt@dicki.net', 'fixtures', 'collection.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(59, 'Dessin', 'Ceci est une description générale pour le hobby Dessin', '2025-06-12', 'Jewel', 33.33, 49.448249, 1.100853, 'homenick.sarina@hamill.com', 'fixtures', 'dessin.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(60, 'Couture', 'Ceci est une description générale pour le hobby Couture', '2025-06-13', 'Roderick', 70.27, 49.451109, 1.098419, 'cwillms@hotmail.com', 'fixtures', 'couture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(61, 'Lecture', 'Ceci est une description générale pour le hobby Lecture', '2025-06-14', 'Mikel', 71.33, 49.453031, 1.100525, 'nikko76@mraz.com', 'fixtures', 'lecture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(62, 'Jardinage', 'Ceci est une description générale pour le hobby Jardinage', '2025-06-15', 'Kadin', 37.28, 49.450093, 1.107514, 'jonatan38@hotmail.com', 'fixtures', 'jardinage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(63, 'Peinture', 'Ceci est une description générale pour le hobby Peinture', '2025-06-16', 'Alessia', 11.62, 49.440060, 1.090871, 'lavinia17@collier.info', 'fixtures', 'peinture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(64, 'Cuisine', 'Ceci est une description générale pour le hobby Cuisine', '2025-06-17', 'Ubaldo', 55.63, 49.446008, 1.104152, 'hardy.waelchi@yahoo.com', 'fixtures', 'cuisine.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(65, 'Voyage', 'Ceci est une description générale pour le hobby Voyage', '2025-06-18', 'Shany', 26.46, 49.448754, 1.089357, 'weimann.maryjane@shields.com', 'fixtures', 'voyage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(66, 'Photographie', 'Ceci est une description générale pour le hobby Photographie', '2025-06-19', 'Hallie', 62.14, 49.434867, 1.091698, 'elnora57@hotmail.com', 'fixtures', 'photographie.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(67, 'Cyclisme', 'Ceci est une description générale pour le hobby Cyclisme', '2025-06-20', 'Kristopher', 90.73, 49.442495, 1.101652, 'cgottlieb@bradtke.com', 'fixtures', 'cyclisme.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(68, 'Randonnée', 'Ceci est une description générale pour le hobby Randonnée', '2025-06-21', 'Misael', 78.60, 49.435547, 1.091026, 'xlind@gmail.com', 'fixtures', 'randonnée.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(69, 'Pêche', 'Ceci est une description générale pour le hobby Pêche', '2025-06-22', 'Breanne', 80.01, 49.435677, 1.094825, 'maxie.kerluke@yahoo.com', 'fixtures', 'pêche.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(70, 'Tricot', 'Ceci est une description générale pour le hobby Tricot', '2025-06-23', 'Hilma', 45.11, 49.440948, 1.100171, 'kenya60@hotmail.com', 'fixtures', 'tricot.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(71, 'Travail du bois', 'Ceci est une description générale pour le hobby Travail du bois', '2025-06-24', 'Nestor', 97.64, 49.433509, 1.107859, 'rosalind50@lemke.com', 'fixtures', 'travail_du_bois.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(72, 'Observation des oiseaux', 'Ceci est une description générale pour le hobby Observation des oiseaux', '2025-06-25', 'Dallin', 92.53, 49.444136, 1.099423, 'khuels@yahoo.com', 'fixtures', 'observation_des_oiseaux.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(73, 'Danse', 'Ceci est une description générale pour le hobby Danse', '2025-06-26', 'Lina', 47.46, 49.447273, 1.098087, 'dmurazik@hotmail.com', 'fixtures', 'danse.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(74, 'Écriture', 'Ceci est une description générale pour le hobby Écriture', '2025-06-27', 'Reinhold', 88.67, 49.434768, 1.105396, 'janice28@blanda.info', 'fixtures', 'Écriture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(75, 'Yoga', 'Ceci est une description générale pour le hobby Yoga', '2025-06-28', 'Clovis', 67.93, 49.446182, 1.091891, 'ibahringer@larkin.com', 'fixtures', 'yoga.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(76, 'Méditation', 'Ceci est une description générale pour le hobby Méditation', '2025-06-29', 'Sylvia', 18.51, 49.450312, 1.098156, 'mccullough.kory@yahoo.com', 'fixtures', 'méditation.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(77, 'Jeux vidéo', 'Ceci est une description générale pour le hobby Jeux vidéo', '2025-06-30', 'Rafaela', 12.61, 49.443744, 1.107823, 'raina65@yahoo.com', 'fixtures', 'jeux_vidéo.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(78, 'Collection', 'Ceci est une description générale pour le hobby Collection', '2025-07-01', 'Eva', 43.09, 49.451759, 1.090036, 'ryder07@purdy.com', 'fixtures', 'collection.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(79, 'Dessin', 'Ceci est une description générale pour le hobby Dessin', '2025-07-02', 'Myles', 99.03, 49.436572, 1.094656, 'hintz.roy@gmail.com', 'fixtures', 'dessin.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(80, 'Couture', 'Ceci est une description générale pour le hobby Couture', '2025-07-03', 'Deshawn', 83.69, 49.449067, 1.101188, 'clemmie.homenick@hotmail.com', 'fixtures', 'couture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(81, 'Lecture', 'Ceci est une description générale pour le hobby Lecture', '2025-07-04', 'Kristopher', 72.41, 49.449249, 1.100018, 'weimann.bette@yahoo.com', 'fixtures', 'lecture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(82, 'Jardinage', 'Ceci est une description générale pour le hobby Jardinage', '2025-07-05', 'Kyle', 66.29, 49.436509, 1.099786, 'kdamore@yahoo.com', 'fixtures', 'jardinage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(83, 'Peinture', 'Ceci est une description générale pour le hobby Peinture', '2025-07-06', 'Paul', 68.67, 49.439433, 1.092720, 'kprosacco@zboncak.info', 'fixtures', 'peinture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(84, 'Cuisine', 'Ceci est une description générale pour le hobby Cuisine', '2025-07-07', 'Keanu', 81.45, 49.444153, 1.104964, 'ctoy@parisian.info', 'fixtures', 'cuisine.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(85, 'Voyage', 'Ceci est une description générale pour le hobby Voyage', '2025-07-08', 'Edison', 28.90, 49.446624, 1.107516, 'kyra60@yahoo.com', 'fixtures', 'voyage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(86, 'Photographie', 'Ceci est une description générale pour le hobby Photographie', '2025-07-09', 'Hailee', 90.68, 49.439804, 1.098621, 'zrenner@boehm.com', 'fixtures', 'photographie.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(87, 'Cyclisme', 'Ceci est une description générale pour le hobby Cyclisme', '2025-07-10', 'Maya', 91.40, 49.437060, 1.104125, 'adrienne.crist@bode.org', 'fixtures', 'cyclisme.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(88, 'Randonnée', 'Ceci est une description générale pour le hobby Randonnée', '2025-07-11', 'Carley', 17.52, 49.445534, 1.103820, 'conn.teresa@funk.com', 'fixtures', 'randonnée.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(89, 'Pêche', 'Ceci est une description générale pour le hobby Pêche', '2025-07-12', 'Rhoda', 91.07, 49.437109, 1.099660, 'mariam.ferry@grady.info', 'fixtures', 'pêche.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(90, 'Tricot', 'Ceci est une description générale pour le hobby Tricot', '2025-07-13', 'Orpha', 26.05, 49.446806, 1.102707, 'cupton@yahoo.com', 'fixtures', 'tricot.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(91, 'Travail du bois', 'Ceci est une description générale pour le hobby Travail du bois', '2025-07-14', 'Susana', 41.64, 49.445603, 1.101380, 'jheller@turcotte.com', 'fixtures', 'travail_du_bois.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(92, 'Observation des oiseaux', 'Ceci est une description générale pour le hobby Observation des oiseaux', '2025-07-15', 'Nikolas', 69.61, 49.443124, 1.102046, 'clara20@lowe.info', 'fixtures', 'observation_des_oiseaux.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(93, 'Danse', 'Ceci est une description générale pour le hobby Danse', '2025-07-16', 'Nella', 89.75, 49.450979, 1.106453, 'julia.goldner@buckridge.info', 'fixtures', 'danse.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(94, 'Écriture', 'Ceci est une description générale pour le hobby Écriture', '2025-07-17', 'Dedrick', 89.95, 49.444420, 1.100287, 'wyman.zander@block.com', 'fixtures', 'Écriture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(95, 'Yoga', 'Ceci est une description générale pour le hobby Yoga', '2025-07-18', 'Alize', 37.46, 49.438798, 1.102054, 'thoppe@hotmail.com', 'fixtures', 'yoga.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(96, 'Méditation', 'Ceci est une description générale pour le hobby Méditation', '2025-07-19', 'Paris', 91.39, 49.451170, 1.107583, 'garfield83@schultz.biz', 'fixtures', 'méditation.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(97, 'Jeux vidéo', 'Ceci est une description générale pour le hobby Jeux vidéo', '2025-07-20', 'Crawford', 55.39, 49.451652, 1.104409, 'norene47@yahoo.com', 'fixtures', 'jeux_vidéo.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(98, 'Collection', 'Ceci est une description générale pour le hobby Collection', '2025-07-21', 'Brielle', 62.71, 49.435343, 1.104530, 'tromp.verda@hotmail.com', 'fixtures', 'collection.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(99, 'Dessin', 'Ceci est une description générale pour le hobby Dessin', '2025-07-22', 'Loraine', 90.21, 49.436908, 1.095583, 'lamar40@yahoo.com', 'fixtures', 'dessin.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(100, 'Couture', 'Ceci est une description générale pour le hobby Couture', '2025-07-23', 'Evan', 69.29, 49.451182, 1.093529, 'mozell42@gmail.com', 'fixtures', 'couture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(101, 'Lecture', 'Ceci est une description générale pour le hobby Lecture', '2025-07-24', 'Daisy', 17.68, 49.434885, 1.099626, 'kessler.ophelia@yahoo.com', 'fixtures', 'lecture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(102, 'Jardinage', 'Ceci est une description générale pour le hobby Jardinage', '2025-07-25', 'Bart', 35.65, 49.444578, 1.091158, 'larson.cassandra@gmail.com', 'fixtures', 'jardinage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(103, 'Peinture', 'Ceci est une description générale pour le hobby Peinture', '2025-07-26', 'Sylvan', 35.52, 49.436145, 1.103111, 'abbigail74@parker.org', 'fixtures', 'peinture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(104, 'Cuisine', 'Ceci est une description générale pour le hobby Cuisine', '2025-07-27', 'Mandy', 35.67, 49.450828, 1.108116, 'bwilderman@gmail.com', 'fixtures', 'cuisine.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(105, 'Voyage', 'Ceci est une description générale pour le hobby Voyage', '2025-07-28', 'Morris', 26.47, 49.450312, 1.099740, 'jaiden.johns@yahoo.com', 'fixtures', 'voyage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(106, 'Photographie', 'Ceci est une description générale pour le hobby Photographie', '2025-07-29', 'Raina', 29.61, 49.448779, 1.102546, 'annetta.ortiz@hotmail.com', 'fixtures', 'photographie.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(107, 'Cyclisme', 'Ceci est une description générale pour le hobby Cyclisme', '2025-07-30', 'Dixie', 94.51, 49.436400, 1.090335, 'rosalee.crist@yahoo.com', 'fixtures', 'cyclisme.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(108, 'Randonnée', 'Ceci est une description générale pour le hobby Randonnée', '2025-07-31', 'Britney', 97.90, 49.440962, 1.096428, 'ziemann.dejuan@windler.com', 'fixtures', 'randonnée.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(109, 'Pêche', 'Ceci est une description générale pour le hobby Pêche', '2025-08-01', 'Neva', 51.15, 49.441178, 1.099334, 'trantow.bell@gmail.com', 'fixtures', 'pêche.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(110, 'Tricot', 'Ceci est une description générale pour le hobby Tricot', '2025-08-02', 'Rylan', 17.23, 49.452515, 1.108303, 'oschumm@yahoo.com', 'fixtures', 'tricot.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(111, 'Travail du bois', 'Ceci est une description générale pour le hobby Travail du bois', '2025-08-03', 'Alice', 21.64, 49.451553, 1.104382, 'elody.lind@gmail.com', 'fixtures', 'travail_du_bois.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(112, 'Observation des oiseaux', 'Ceci est une description générale pour le hobby Observation des oiseaux', '2025-08-04', 'Layla', 69.50, 49.451510, 1.096504, 'gzboncak@yahoo.com', 'fixtures', 'observation_des_oiseaux.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(113, 'Danse', 'Ceci est une description générale pour le hobby Danse', '2025-08-05', 'Favian', 37.97, 49.445060, 1.102638, 'newell81@yahoo.com', 'fixtures', 'danse.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(114, 'Écriture', 'Ceci est une description générale pour le hobby Écriture', '2025-08-06', 'Bailey', 22.76, 49.443678, 1.093766, 'viva.steuber@donnelly.com', 'fixtures', 'Écriture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(115, 'Yoga', 'Ceci est une description générale pour le hobby Yoga', '2025-08-07', 'Elijah', 28.78, 49.442963, 1.103470, 'leanna.effertz@gibson.org', 'fixtures', 'yoga.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(116, 'Méditation', 'Ceci est une description générale pour le hobby Méditation', '2025-08-08', 'Adan', 11.52, 49.443594, 1.091659, 'noelia31@hotmail.com', 'fixtures', 'méditation.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(117, 'Jeux vidéo', 'Ceci est une description générale pour le hobby Jeux vidéo', '2025-08-09', 'Gerson', 79.54, 49.446572, 1.108714, 'eldridge47@yahoo.com', 'fixtures', 'jeux_vidéo.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(118, 'Collection', 'Ceci est une description générale pour le hobby Collection', '2025-08-10', 'Kiara', 23.43, 49.443537, 1.098930, 'alberta43@sipes.net', 'fixtures', 'collection.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(119, 'Dessin', 'Ceci est une description générale pour le hobby Dessin', '2025-08-11', 'Pete', 11.63, 49.440456, 1.103836, 'qbrakus@beier.net', 'fixtures', 'dessin.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(120, 'Couture', 'Ceci est une description générale pour le hobby Couture', '2025-08-12', 'Terry', 55.81, 49.443899, 1.091886, 'gage52@hotmail.com', 'fixtures', 'couture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(121, 'Lecture', 'Ceci est une description générale pour le hobby Lecture', '2025-08-13', 'Caleigh', 92.26, 49.439729, 1.090331, 'lauriane.johnston@gmail.com', 'fixtures', 'lecture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(122, 'Jardinage', 'Ceci est une description générale pour le hobby Jardinage', '2025-08-14', 'Amie', 19.58, 49.446600, 1.105948, 'erling07@hotmail.com', 'fixtures', 'jardinage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(123, 'Peinture', 'Ceci est une description générale pour le hobby Peinture', '2025-08-15', 'Alisa', 46.87, 49.452339, 1.109214, 'bhickle@gmail.com', 'fixtures', 'peinture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(124, 'Cuisine', 'Ceci est une description générale pour le hobby Cuisine', '2025-08-16', 'Ottilie', 58.59, 49.435432, 1.090264, 'estell.cartwright@grady.com', 'fixtures', 'cuisine.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(125, 'Voyage', 'Ceci est une description générale pour le hobby Voyage', '2025-08-17', 'Candice', 90.06, 49.433372, 1.099962, 'frederick69@gmail.com', 'fixtures', 'voyage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(126, 'Photographie', 'Ceci est une description générale pour le hobby Photographie', '2025-08-18', 'Trevor', 93.04, 49.442131, 1.093300, 'raynor.katelyn@yahoo.com', 'fixtures', 'photographie.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(127, 'Cyclisme', 'Ceci est une description générale pour le hobby Cyclisme', '2025-08-19', 'Charlene', 42.93, 49.452026, 1.090626, 'judy.maggio@wehner.info', 'fixtures', 'cyclisme.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(128, 'Randonnée', 'Ceci est une description générale pour le hobby Randonnée', '2025-08-20', 'Tyrese', 83.78, 49.449218, 1.095911, 'candace29@gmail.com', 'fixtures', 'randonnée.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(129, 'Pêche', 'Ceci est une description générale pour le hobby Pêche', '2025-08-21', 'Gonzalo', 98.39, 49.445335, 1.097914, 'strosin.aliza@gmail.com', 'fixtures', 'pêche.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(130, 'Tricot', 'Ceci est une description générale pour le hobby Tricot', '2025-08-22', 'Linwood', 78.48, 49.442997, 1.098172, 'cassin.glenna@gottlieb.org', 'fixtures', 'tricot.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(131, 'Travail du bois', 'Ceci est une description générale pour le hobby Travail du bois', '2025-08-23', 'Myles', 34.76, 49.443621, 1.106158, 'zora.huel@medhurst.com', 'fixtures', 'travail_du_bois.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(132, 'Observation des oiseaux', 'Ceci est une description générale pour le hobby Observation des oiseaux', '2025-08-24', 'Casey', 96.04, 49.446097, 1.095131, 'streich.emmet@gmail.com', 'fixtures', 'observation_des_oiseaux.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(133, 'Danse', 'Ceci est une description générale pour le hobby Danse', '2025-08-25', 'Mckayla', 24.04, 49.446628, 1.091564, 'jamar.corwin@gmail.com', 'fixtures', 'danse.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(134, 'Écriture', 'Ceci est une description générale pour le hobby Écriture', '2025-08-26', 'Otha', 86.37, 49.435037, 1.094718, 'quincy75@yahoo.com', 'fixtures', 'Écriture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(135, 'Yoga', 'Ceci est une description générale pour le hobby Yoga', '2025-08-27', 'Roberta', 37.90, 49.446555, 1.106704, 'nick.hyatt@hotmail.com', 'fixtures', 'yoga.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(136, 'Méditation', 'Ceci est une description générale pour le hobby Méditation', '2025-08-28', 'Warren', 85.41, 49.446879, 1.094804, 'pfannerstill.adrianna@gmail.com', 'fixtures', 'méditation.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(137, 'Jeux vidéo', 'Ceci est une description générale pour le hobby Jeux vidéo', '2025-08-29', 'Modesta', 30.47, 49.436877, 1.107902, 'mborer@roberts.org', 'fixtures', 'jeux_vidéo.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(138, 'Collection', 'Ceci est une description générale pour le hobby Collection', '2025-08-30', 'Hermann', 59.22, 49.443552, 1.097234, 'marcella.dickens@damore.com', 'fixtures', 'collection.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(139, 'Dessin', 'Ceci est une description générale pour le hobby Dessin', '2025-08-31', 'Alyce', 16.21, 49.442634, 1.107510, 'alize.smitham@sawayn.com', 'fixtures', 'dessin.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(140, 'Couture', 'Ceci est une description générale pour le hobby Couture', '2025-09-01', 'Otho', 71.23, 49.444884, 1.100403, 'cschinner@wunsch.com', 'fixtures', 'couture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(141, 'Lecture', 'Ceci est une description générale pour le hobby Lecture', '2025-09-02', 'Oscar', 51.51, 49.434121, 1.097948, 'maritza.moore@gmail.com', 'fixtures', 'lecture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(142, 'Jardinage', 'Ceci est une description générale pour le hobby Jardinage', '2025-09-03', 'Guadalupe', 62.52, 49.442758, 1.106612, 'ilarson@schoen.com', 'fixtures', 'jardinage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(143, 'Peinture', 'Ceci est une description générale pour le hobby Peinture', '2025-09-04', 'Marielle', 13.08, 49.441788, 1.104099, 'johns.gust@hotmail.com', 'fixtures', 'peinture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(144, 'Cuisine', 'Ceci est une description générale pour le hobby Cuisine', '2025-09-05', 'Aileen', 91.31, 49.451891, 1.094672, 'bortiz@jast.net', 'fixtures', 'cuisine.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(145, 'Voyage', 'Ceci est une description générale pour le hobby Voyage', '2025-09-06', 'Cristian', 64.16, 49.440477, 1.091771, 'konopelski.emely@jones.net', 'fixtures', 'voyage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(146, 'Photographie', 'Ceci est une description générale pour le hobby Photographie', '2025-09-07', 'Zoe', 39.26, 49.438319, 1.098299, 'kunze.green@yahoo.com', 'fixtures', 'photographie.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(147, 'Cyclisme', 'Ceci est une description générale pour le hobby Cyclisme', '2025-09-08', 'Vicenta', 60.90, 49.445390, 1.089802, 'geoffrey.yost@johns.com', 'fixtures', 'cyclisme.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(148, 'Randonnée', 'Ceci est une description générale pour le hobby Randonnée', '2025-09-09', 'Jessica', 57.88, 49.440548, 1.100795, 'tristian.thiel@yahoo.com', 'fixtures', 'randonnée.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(149, 'Pêche', 'Ceci est une description générale pour le hobby Pêche', '2025-09-10', 'Dock', 58.16, 49.448855, 1.100477, 'turcotte.sallie@gmail.com', 'fixtures', 'pêche.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(150, 'Tricot', 'Ceci est une description générale pour le hobby Tricot', '2025-09-11', 'Myah', 95.21, 49.441807, 1.098046, 'julie.weissnat@kerluke.com', 'fixtures', 'tricot.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(151, 'Travail du bois', 'Ceci est une description générale pour le hobby Travail du bois', '2025-09-12', 'Travon', 39.94, 49.434950, 1.096807, 'magdalena57@ankunding.com', 'fixtures', 'travail_du_bois.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(152, 'Observation des oiseaux', 'Ceci est une description générale pour le hobby Observation des oiseaux', '2025-09-13', 'Brian', 51.60, 49.433827, 1.108620, 'arlene85@yahoo.com', 'fixtures', 'observation_des_oiseaux.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(153, 'Danse', 'Ceci est une description générale pour le hobby Danse', '2025-09-14', 'Norbert', 90.27, 49.441365, 1.108767, 'tamia64@bailey.biz', 'fixtures', 'danse.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(154, 'Écriture', 'Ceci est une description générale pour le hobby Écriture', '2025-09-15', 'Adelle', 12.44, 49.441309, 1.098853, 'jordy26@hotmail.com', 'fixtures', 'Écriture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(155, 'Yoga', 'Ceci est une description générale pour le hobby Yoga', '2025-09-16', 'Blair', 98.22, 49.436707, 1.098697, 'letha74@yahoo.com', 'fixtures', 'yoga.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(156, 'Méditation', 'Ceci est une description générale pour le hobby Méditation', '2025-09-17', 'Justice', 54.06, 49.448560, 1.106918, 'nwillms@yahoo.com', 'fixtures', 'méditation.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(157, 'Jeux vidéo', 'Ceci est une description générale pour le hobby Jeux vidéo', '2025-09-18', 'Jovan', 48.73, 49.450746, 1.101705, 'rmarks@orn.org', 'fixtures', 'jeux_vidéo.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(158, 'Collection', 'Ceci est une description générale pour le hobby Collection', '2025-09-19', 'Elmore', 81.83, 49.442068, 1.102052, 'flarson@jakubowski.com', 'fixtures', 'collection.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(159, 'Dessin', 'Ceci est une description générale pour le hobby Dessin', '2025-09-20', 'Maximillian', 56.86, 49.439337, 1.105504, 'mhodkiewicz@connelly.com', 'fixtures', 'dessin.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(160, 'Couture', 'Ceci est une description générale pour le hobby Couture', '2025-09-21', 'Christa', 58.20, 49.436912, 1.107563, 'terry.miles@hotmail.com', 'fixtures', 'couture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(161, 'Lecture', 'Ceci est une description générale pour le hobby Lecture', '2025-09-22', 'Hailey', 22.73, 49.448766, 1.108937, 'carlo13@gmail.com', 'fixtures', 'lecture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(162, 'Jardinage', 'Ceci est une description générale pour le hobby Jardinage', '2025-09-23', 'Lila', 18.07, 49.440803, 1.106444, 'freeman.waelchi@yahoo.com', 'fixtures', 'jardinage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(163, 'Peinture', 'Ceci est une description générale pour le hobby Peinture', '2025-09-24', 'Anita', 89.70, 49.442406, 1.096810, 'aturcotte@mante.com', 'fixtures', 'peinture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(164, 'Cuisine', 'Ceci est une description générale pour le hobby Cuisine', '2025-09-25', 'Jessyca', 76.08, 49.439759, 1.093833, 'smitham.brock@boyer.net', 'fixtures', 'cuisine.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(165, 'Voyage', 'Ceci est une description générale pour le hobby Voyage', '2025-09-26', 'Hattie', 89.30, 49.444328, 1.104747, 'bernadine64@stanton.com', 'fixtures', 'voyage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(166, 'Photographie', 'Ceci est une description générale pour le hobby Photographie', '2025-09-27', 'Bette', 78.29, 49.433271, 1.107931, 'darby79@dare.org', 'fixtures', 'photographie.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(167, 'Cyclisme', 'Ceci est une description générale pour le hobby Cyclisme', '2025-09-28', 'Dixie', 47.40, 49.444199, 1.097491, 'prolfson@klein.com', 'fixtures', 'cyclisme.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(168, 'Randonnée', 'Ceci est une description générale pour le hobby Randonnée', '2025-09-29', 'Lyda', 76.50, 49.438418, 1.095130, 'marshall39@hirthe.com', 'fixtures', 'randonnée.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(169, 'Pêche', 'Ceci est une description générale pour le hobby Pêche', '2025-09-30', 'Evangeline', 12.38, 49.445973, 1.106491, 'demetrius.mante@hahn.info', 'fixtures', 'pêche.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(170, 'Tricot', 'Ceci est une description générale pour le hobby Tricot', '2025-10-01', 'Vicente', 69.46, 49.439065, 1.098557, 'albina85@hotmail.com', 'fixtures', 'tricot.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(171, 'Travail du bois', 'Ceci est une description générale pour le hobby Travail du bois', '2025-10-02', 'Anna', 33.89, 49.438327, 1.102735, 'zharvey@emmerich.info', 'fixtures', 'travail_du_bois.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(172, 'Observation des oiseaux', 'Ceci est une description générale pour le hobby Observation des oiseaux', '2025-10-03', 'Virginie', 90.18, 49.440272, 1.106887, 'maiya30@gmail.com', 'fixtures', 'observation_des_oiseaux.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(173, 'Danse', 'Ceci est une description générale pour le hobby Danse', '2025-10-04', 'Holden', 60.80, 49.445050, 1.094984, 'courtney.gaylord@gmail.com', 'fixtures', 'danse.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(174, 'Écriture', 'Ceci est une description générale pour le hobby Écriture', '2025-10-05', 'Pablo', 43.28, 49.451537, 1.105975, 'ukuvalis@ritchie.com', 'fixtures', 'Écriture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(175, 'Yoga', 'Ceci est une description générale pour le hobby Yoga', '2025-10-06', 'Ivah', 36.91, 49.442692, 1.091969, 'morar.brycen@yahoo.com', 'fixtures', 'yoga.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(176, 'Méditation', 'Ceci est une description générale pour le hobby Méditation', '2025-10-07', 'Ayana', 74.37, 49.439364, 1.108968, 'weissnat.dane@kirlin.com', 'fixtures', 'méditation.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(177, 'Jeux vidéo', 'Ceci est une description générale pour le hobby Jeux vidéo', '2025-10-08', 'Shaylee', 30.02, 49.450099, 1.108383, 'rosa58@walter.com', 'fixtures', 'jeux_vidéo.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(178, 'Collection', 'Ceci est une description générale pour le hobby Collection', '2025-10-09', 'Justice', 51.91, 49.443882, 1.101259, 'hills.juanita@hotmail.com', 'fixtures', 'collection.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(179, 'Dessin', 'Ceci est une description générale pour le hobby Dessin', '2025-10-10', 'Bella', 26.90, 49.442029, 1.092114, 'kennedi30@schmitt.com', 'fixtures', 'dessin.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(180, 'Couture', 'Ceci est une description générale pour le hobby Couture', '2025-10-11', 'Alisha', 25.12, 49.436050, 1.105195, 'buckridge.cayla@yahoo.com', 'fixtures', 'couture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(181, 'Lecture', 'Ceci est une description générale pour le hobby Lecture', '2025-10-12', 'Kris', 60.11, 49.439222, 1.099498, 'garrick20@rowe.biz', 'fixtures', 'lecture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(182, 'Jardinage', 'Ceci est une description générale pour le hobby Jardinage', '2025-10-13', 'Mikel', 58.54, 49.440652, 1.100487, 'diamond.considine@hotmail.com', 'fixtures', 'jardinage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(183, 'Peinture', 'Ceci est une description générale pour le hobby Peinture', '2025-10-14', 'Timmy', 52.75, 49.449162, 1.096627, 'alvina50@gmail.com', 'fixtures', 'peinture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(184, 'Cuisine', 'Ceci est une description générale pour le hobby Cuisine', '2025-10-15', 'Lorenz', 10.37, 49.438570, 1.092475, 'johanna.gerhold@beatty.com', 'fixtures', 'cuisine.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(185, 'Voyage', 'Ceci est une description générale pour le hobby Voyage', '2025-10-16', 'Francisca', 21.22, 49.436823, 1.091672, 'vernon90@hotmail.com', 'fixtures', 'voyage.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(186, 'Photographie', 'Ceci est une description générale pour le hobby Photographie', '2025-10-17', 'Napoleon', 96.54, 49.446516, 1.094381, 'spinka.jarrett@yahoo.com', 'fixtures', 'photographie.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(187, 'Cyclisme', 'Ceci est une description générale pour le hobby Cyclisme', '2025-10-18', 'Michaela', 26.44, 49.445148, 1.106009, 'sawayn.walter@cruickshank.info', 'fixtures', 'cyclisme.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(188, 'Randonnée', 'Ceci est une description générale pour le hobby Randonnée', '2025-10-19', 'Einar', 53.82, 49.440233, 1.096571, 'bednar.macey@hilpert.info', 'fixtures', 'randonnée.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(189, 'Pêche', 'Ceci est une description générale pour le hobby Pêche', '2025-10-20', 'Dameon', 19.71, 49.449753, 1.093555, 'buckridge.lance@gmail.com', 'fixtures', 'pêche.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(190, 'Tricot', 'Ceci est une description générale pour le hobby Tricot', '2025-10-21', 'Verna', 63.56, 49.442316, 1.106989, 'lhuels@beer.com', 'fixtures', 'tricot.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(191, 'Travail du bois', 'Ceci est une description générale pour le hobby Travail du bois', '2025-10-22', 'Sid', 85.56, 49.435323, 1.104415, 'ymckenzie@yahoo.com', 'fixtures', 'travail_du_bois.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(192, 'Observation des oiseaux', 'Ceci est une description générale pour le hobby Observation des oiseaux', '2025-10-23', 'Keven', 91.55, 49.433559, 1.097213, 'kuphal.enid@yahoo.com', 'fixtures', 'observation_des_oiseaux.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(193, 'Danse', 'Ceci est une description générale pour le hobby Danse', '2025-10-24', 'Kyler', 30.71, 49.442648, 1.094552, 'willie87@dickens.biz', 'fixtures', 'danse.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(194, 'Écriture', 'Ceci est une description générale pour le hobby Écriture', '2025-10-25', 'Glen', 95.50, 49.437569, 1.091105, 'hirthe.jazmyne@yahoo.com', 'fixtures', 'Écriture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(195, 'Yoga', 'Ceci est une description générale pour le hobby Yoga', '2025-10-26', 'Richie', 29.87, 49.442215, 1.096551, 'jack81@langworth.com', 'fixtures', 'yoga.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(196, 'Méditation', 'Ceci est une description générale pour le hobby Méditation', '2025-10-27', 'Karlee', 76.02, 49.452428, 1.098634, 'goyette.rosalee@gmail.com', 'fixtures', 'méditation.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(197, 'Jeux vidéo', 'Ceci est une description générale pour le hobby Jeux vidéo', '2025-10-28', 'Violette', 93.77, 49.435676, 1.106103, 'lew.romaguera@kirlin.biz', 'fixtures', 'jeux_vidéo.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(198, 'Collection', 'Ceci est une description générale pour le hobby Collection', '2025-10-29', 'Maia', 99.65, 49.448979, 1.099959, 'prince76@ferry.com', 'fixtures', 'collection.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(199, 'Dessin', 'Ceci est une description générale pour le hobby Dessin', '2025-10-30', 'Blanca', 95.96, 49.446720, 1.105125, 'sanford.bernita@mckenzie.com', 'fixtures', 'dessin.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50'),
(200, 'Couture', 'Ceci est une description générale pour le hobby Couture', '2025-10-31', 'Demetris', 96.97, 49.445773, 1.096790, 'wvon@hotmail.com', 'fixtures', 'couture.jpg', '2025-04-14 18:52:50', '2025-04-14 18:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `NomPrenom` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Roles` json DEFAULT NULL,
  `Active` tinyint(1) DEFAULT NULL,
  `Token` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Email`, `Password`, `NomPrenom`, `Roles`, `Active`, `Token`) VALUES
(1, 'admin@admin.com', '$2y$10$qk1uI9GR/PxrOwpn65V23./gOHHM5RZLephfVQoLBcRJXg/mCD4Ya', 'Admin', '[\"Administrateur\", \"Redacteur\"]', NULL, NULL),
(2, 'axel@test.com', '$2y$10$L3Wlxj8oqw4zWok1py6e9.PDKB0thqc5ciJ7UGjqco1RBkxUk30se', 'Olivier Carglass', '[\"Redacteur\"]', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
