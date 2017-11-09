-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 09 nov. 2017 à 17:15
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wcs_hackathon2`
--

-- --------------------------------------------------------

--
-- Structure de la table `jouet`
--

CREATE TABLE `jouet` (
  `id` int(11) NOT NULL,
  `nom` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `vignette` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `jouet`
--

INSERT INTO `jouet` (`id`, `nom`, `description`, `vignette`) VALUES
(2, 'Cluedo', NULL, 'img/JeuxSociete/Cluedo.jpg'),
(3, 'DocteurMaboul', NULL, 'img\\JeuxSociete\\DocteurMaboul.jpg'),
(4, 'Echec', NULL, 'img\\JeuxSociete\\Echec.jpg'),
(5, 'La bonne paye', NULL, 'img\\JeuxSociete\\LaBonnePaye.jpg'),
(6, 'Labyrinth', NULL, 'img\\JeuxSociete\\Labyrinth.jpg'),
(7, 'Le cochon qui rit', NULL, 'img\\JeuxSociete\\LeCochonQuiRit.jpg'),
(8, 'Ne réveille pas papa', NULL, 'img\\JeuxSociete\\NeReveillePasPapa.jpg'),
(9, 'Pic pirate', NULL, 'img\\JeuxSociete\\PicPirate.jpg'),
(10, 'Qui est-ce ?', NULL, 'img\\JeuxSociete\\QuiEstCe.jpg'),
(11, 'Twister', NULL, 'img\\JeuxSociete\\Twister.jpg\r\n'),
(12, 'Lego Classic', NULL, 'img\\Lego_Playmobil\\LegoClassic.jpg'),
(13, 'Lego jungle', NULL, 'img\\Lego_Playmobil\\LegoJungle.jpg'),
(14, 'Lego la belle et la bête', NULL, 'img\\Lego_Playmobil\\LegoLaBelleEtLaBete.jpg'),
(15, 'Lego star wars', NULL, 'img\\Lego_Playmobil\\LegoStarWars.jpg'),
(16, 'Lego ninja GO', NULL, 'img\\Lego_Playmobil\\LeogNinjago.jpg'),
(17, 'Playmobil Aquarium', NULL, 'img\\Lego_Playmobil\\PlaymobilAquarium.jpg'),
(18, 'Playmobil Fourgon de police', NULL, 'img\\Lego_Playmobil\\PlaymobilFourgonDePolice.jpg'),
(19, 'Playmobile Maison', NULL, 'img\\Lego_Playmobil\\PlaymobilMaison.jpg'),
(20, 'Playmobil Poney Club', NULL, 'img\\Lego_Playmobil\\PlaymobilPoneyClub.jpg'),
(21, 'Playmobil Pyramide', NULL, 'img\\Lego_Playmobil\\PlaymobilPyramide.jpg'),
(22, 'Coloriage Dory', NULL, 'img\\LoisirceCreatifs\\ColoriageDory.jpg'),
(23, 'Crayons à la cire', NULL, 'img\\LoisirceCreatifs\\CrayonsALaCire.jpg'),
(24, 'Feutres', NULL, 'img\\LoisirceCreatifs\\Feutres.jpg'),
(25, 'Kit gommettes', NULL, 'img\\LoisirceCreatifs\\KitGommettes.jpg'),
(26, 'Licorne à décorer', NULL, 'img\\LoisirceCreatifs\\LicorneADecorer.jpg'),
(27, 'Pate à modeler', NULL, 'img\\LoisirceCreatifs\\PateAModeler.jpg'),
(28, 'Pate à modeler Dentiste', NULL, 'img\\LoisirceCreatifs\\PateAModelerDentiste.jpg'),
(29, 'Peinture', NULL, 'img\\LoisirceCreatifs\\Peinture.jpg'),
(30, 'Peinture au doigt', NULL, 'img\\LoisirceCreatifs\\PeintureAuDoigt.jpg'),
(31, 'Poterie', NULL, 'img\\LoisirceCreatifs\\Poterie.jpg'),
(32, 'Peluche Dragon', NULL, 'img\\Peluches\\PelucheDragon.jpg'),
(33, 'Peluche éléphant', NULL, 'img\\Peluches\\PelucheElephant.jpg'),
(34, 'Peluche Girafe', NULL, 'img\\Peluches\\PelucheGirafe.jpg'),
(35, 'Peluche Hippopotame', NULL, 'img\\Peluches\\PelucheHippopotame.jpg'),
(36, 'Peluche Ours', NULL, 'img\\Peluches\\PelucheOurs.jpg'),
(37, 'Peluche Paddington', NULL, 'img\\Peluches\\PeluchePaddington.jpg'),
(38, 'Peluche Poisson', NULL, 'img\\Peluches\\PeluchePoisson.jpg'),
(39, 'Peluche Renard', NULL, 'img\\Peluches\\PelucheRenard.jpg'),
(40, 'Peluche Tigre', NULL, 'img\\Peluches\\PelucheTigre.jpg'),
(41, 'Peluche Tortue', NULL, 'img\\Peluches\\PelucheTortue.jpg'),
(42, 'Barbie Camping car', NULL, 'img\\Poupees\\BarbieCampingCar.jpg'),
(43, 'Barbie Sirene', NULL, 'img\\Poupees\\BarbieSirene.jpg'),
(44, 'Bebe fille', NULL, 'img\\Poupees\\BebeFille.jpg'),
(45, 'Bebe Garçon', NULL, 'img\\Poupees\\BebeGarçon.jpg'),
(46, 'Bebe malade', NULL, 'img\\Poupees\\BebeMalade.jpg'),
(47, 'Cendrillon', NULL, 'img\\Poupees\\Cendrillon.jpg'),
(48, 'Poussette', NULL, 'img\\Poupees\\Poussette.jpg'),
(49, 'Reine des neiges', NULL, 'img\\Poupees\\ReineDesNeiges.jpg'),
(50, 'Tête à coiffer', NULL, 'img\\Poupees\\TeteACoiffer.jpg'),
(51, 'Valise accessoires', NULL, 'img\\Poupees\\ValiseAccessoires.jpg'),
(52, 'Ambulance', NULL, 'img\\Voitures\\Ambulance.jpg'),
(53, 'Camion Pompier', NULL, 'img\\Voitures\\CamionPompier.jpg'),
(54, 'Cars Flash Mac Queen', NULL, 'img\\Voitures\\CarsFlashMacQueen.jpg'),
(55, 'Cars Flash Mac Queen Gris', NULL, 'img\\Voitures\\CarsFlashMacQueenGris.jpg.jpg'),
(56, 'Cars radio commandée', NULL, 'img\\Voitures\\CarsRadiocommandee.jpg'),
(57, 'Centre de secours', NULL, 'img\\Voitures\\CentreDeSecours.jpg'),
(58, 'Circuit Cars', NULL, 'img\\Voitures\\CircuitCars.jpg'),
(59, 'Garage', NULL, 'img\\Voitures\\Garage.jpg'),
(60, 'Mickey', NULL, 'img\\Voitures\\Mickey.jpg'),
(61, 'Petites Voitures', NULL, 'img\\Voitures\\PetitesVoitures.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jouet`
--
ALTER TABLE `jouet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jouet`
--
ALTER TABLE `jouet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
