-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 05, 2023 at 02:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_r`
--

-- --------------------------------------------------------

--
-- Table structure for table `adhesion`
--

CREATE TABLE `adhesion` (
  `registre` int(5) NOT NULL,
  `entreprise` varchar(35) NOT NULL,
  `numreg` int(11) DEFAULT NULL,
  `numnat` int(11) NOT NULL,
  `date_ad` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `adhesion`
--

INSERT INTO `adhesion` (`registre`, `entreprise`, `numreg`, `numnat`, `date_ad`) VALUES
(4, 'SOGEA', 14, 27, '2020-10-25'),
(4500, 'mohamed amine', 16, 27, '2018-01-30'),
(6846, 'Ahmed douraffei', 21, 42, '2022-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `banque`
--

CREATE TABLE `banque` (
  `code` varchar(2) NOT NULL,
  `Nom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `banque`
--

INSERT INTO `banque` (`code`, `Nom`) VALUES
('AB', 'ATTIJARI BANK'),
('BA', 'BANQUE AL MAGHREB'),
('BM', 'BANQUE MAROCAINE DU COMME'),
('BP', 'BANQUE POPULAIRE'),
('CA', 'CREDIT AGRICOLE'),
('CD', 'CREDIT DU MAROC'),
('SG', 'SOCIETE GENERALE MAROCAIN');

-- --------------------------------------------------------

--
-- Table structure for table `categ`
--

CREATE TABLE `categ` (
  `code` varchar(2) NOT NULL,
  `nom` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categ`
--

INSERT INTO `categ` (`code`, `nom`) VALUES
('B', 'BATIMENT'),
('T', 'TRAVAUX PUBLICS');

-- --------------------------------------------------------

--
-- Table structure for table `classe`
--

CREATE TABLE `classe` (
  `code` varchar(3) NOT NULL,
  `nom` varchar(35) NOT NULL,
  `ministere` varchar(2) NOT NULL,
  `type_direction` varchar(1) NOT NULL,
  `chiffre_aff` int(11) NOT NULL,
  `CS` float NOT NULL,
  `Nb_min_ing` int(11) NOT NULL,
  `Nb_tech` int(11) NOT NULL,
  `nb_min_encadre` int(11) NOT NULL,
  `secteur` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classe`
--

INSERT INTO `classe` (`code`, `nom`, `ministere`, `type_direction`, `chiffre_aff`, `CS`, `Nb_min_ing`, `Nb_tech`, `nb_min_encadre`, `secteur`) VALUES
('C1', 'CLASSE 1', 'E', 'N', 70, 0, 2, 2, 80, 'SA'),
('C2', 'CLASSE 2', 'E', 'N', 30, 0, 1, 1, 60, 'SA'),
('C3', 'CLASSE 3', 'E', 'R', 10, 0, 0, 1, 40, 'SA'),
('C4', 'CLASSE 4', 'E', 'R', 3, 0, 0, 0, 28, 'SA'),
('C5', 'CLASSE 5', 'E', 'R', 0, 0, 0, 0, 20, 'SA'),
('CS', 'CLASSE S', 'E', 'N', 130, 0, 3, 3, 110, 'SA'),
('C1T', 'CLASS1', 'H', 'R', 2, 0, 0, 0, 1, 'S1'),
('C2T', 'CLASS2', 'H', 'R', 5, 0, 0, 0, 1, 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `cotis`
--

CREATE TABLE `cotis` (
  `registre` int(5) DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `type_paiement` varchar(35) NOT NULL,
  `cheque` varchar(9) DEFAULT NULL,
  `banque` varchar(2) DEFAULT NULL,
  `montant` int(5) DEFAULT NULL,
  `lieu` varchar(5) DEFAULT NULL,
  `ANNEE` int(11) DEFAULT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cotis`
--

INSERT INTO `cotis` (`registre`, `dat`, `type_paiement`, `cheque`, `banque`, `montant`, `lieu`, `ANNEE`, `num`) VALUES
(4500, '2022-11-05', 'virement', '120651512', 'BM', 1000, 'sale', 2018, 2204406),
(4500, '0000-00-00', 'amnistie', '0', '0', 0, '', 2019, 4956730),
(4, '2022-11-02', 'versement', '', '0', 1500, 'sale', 2021, 7432700),
(4, '2022-10-31', 'virement', '100064981', 'BA', 1500, 'sale', 2020, 7859083),
(6846, '2022-11-01', 'lcn', '100064981', 'BM', 1500, 'sale', 2022, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `demand`
--

CREATE TABLE `demand` (
  `id_demand` int(11) NOT NULL,
  `date` date NOT NULL,
  `Commission` varchar(35) NOT NULL,
  `ministere` varchar(2) NOT NULL,
  `register` int(5) NOT NULL,
  `nature_demande` int(11) NOT NULL,
  `etat_demande` varchar(2) NOT NULL,
  `Fonction` int(11) NOT NULL,
  `motif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demand`
--

INSERT INTO `demand` (`id_demand`, `date`, `Commission`, `ministere`, `register`, `nature_demande`, `etat_demande`, `Fonction`, `motif`) VALUES
(21, '2023-01-02', 'Nationale', 'E', 4, 2, 'VD', 0, ''),
(23, '2023-02-19', 'Regionale', 'E', 4500, 2, 'VD', 0, ''),
(24, '2023-03-04', 'Regionale', 'H', 6846, 4, 'EN', 0, ''),
(25, '2023-03-06', 'Regionale', 'H', 6846, 1, 'VD', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `direction`
--

CREATE TABLE `direction` (
  `Code` varchar(1) NOT NULL,
  `nom` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `direction`
--

INSERT INTO `direction` (`Code`, `nom`) VALUES
('N', 'National'),
('R', 'Regional');

-- --------------------------------------------------------

--
-- Table structure for table `dossiersociete`
--

CREATE TABLE `dossiersociete` (
  `registre` int(5) NOT NULL,
  `numcertif` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dossiersociete`
--

INSERT INTO `dossiersociete` (`registre`, `numcertif`) VALUES
(4, 'R1/125'),
(4500, 'RF/1298'),
(6846, 'A/85df');

-- --------------------------------------------------------

--
-- Table structure for table `en_fonction`
--

CREATE TABLE `en_fonction` (
  `ID` int(11) NOT NULL,
  `EN_FONCTION_DU` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `en_fonction`
--

INSERT INTO `en_fonction` (`ID`, `EN_FONCTION_DU`) VALUES
(0, 'Chiffre d\'affaire'),
(1, 'Capital social et du Chiffre d\'affaire');

-- --------------------------------------------------------

--
-- Table structure for table `etat_demande`
--

CREATE TABLE `etat_demande` (
  `code` varchar(2) NOT NULL,
  `type_demande` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `etat_demande`
--

INSERT INTO `etat_demande` (`code`, `type_demande`) VALUES
('EN', 'encore'),
('RF', 'refuse'),
('VD', 'valide');

-- --------------------------------------------------------

--
-- Table structure for table `fonction`
--

CREATE TABLE `fonction` (
  `id_fonction` int(11) NOT NULL,
  `fonction` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fonction`
--

INSERT INTO `fonction` (`id_fonction`, `fonction`) VALUES
(1, 'Gérant'),
(2, 'Co-Gérant'),
(3, 'Directeur Financier'),
(4, 'Bac+4'),
(5, 'Ingenieur'),
(6, 'PDG'),
(7, 'Neant'),
(8, 'Maitrise Sciences'),
(9, 'Directeur Technique'),
(10, 'Doctorat');

-- --------------------------------------------------------

--
-- Table structure for table `juridique`
--

CREATE TABLE `juridique` (
  `code` varchar(4) NOT NULL,
  `nom` varchar(31) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `juridique`
--

INSERT INTO `juridique` (`code`, `nom`) VALUES
('EI', 'ENTREPRISE INDIVIDUELLE'),
('PP', 'PERSONNE PHYSIQUE'),
('SA', 'SOCIETE ANONYME'),
('SARL', 'SOCIETE A RESPONSABILITE LIMITE'),
('SNC', 'SOCIETE AU NOM COLLECTIF');

-- --------------------------------------------------------

--
-- Table structure for table `ministere`
--

CREATE TABLE `ministere` (
  `code` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ministere`
--

INSERT INTO `ministere` (`code`, `nom`) VALUES
('A', 'Agriculture'),
('E', 'Equipement'),
('H', 'Habitat'),
('L', 'Reforme');

-- --------------------------------------------------------

--
-- Table structure for table `nature_dem`
--

CREATE TABLE `nature_dem` (
  `code` int(11) NOT NULL,
  `type_demande` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nature_dem`
--

INSERT INTO `nature_dem` (`code`, `type_demande`) VALUES
(1, 'EXAMEN'),
(2, 'REEXAMEN'),
(3, 'RENOUVELLEMENT A L IDENTIQUE'),
(4, 'RECLAMATION');

-- --------------------------------------------------------

--
-- Table structure for table `qualid_demand`
--

CREATE TABLE `qualid_demand` (
  `id` int(11) NOT NULL,
  `codesec` varchar(4) NOT NULL,
  `codeclass` varchar(3) NOT NULL,
  `Qualif` varchar(4) NOT NULL,
  `titre` int(11) NOT NULL,
  `note` varchar(50) NOT NULL,
  `validation` tinyint(1) NOT NULL,
  `id_demand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qualid_demand`
--

INSERT INTO `qualid_demand` (`id`, `codesec`, `codeclass`, `Qualif`, `titre`, `note`, `validation`, `id_demand`) VALUES
(44, 'SA', 'CS', 'A1', 1, 'eew', 1, 21),
(45, 'SA', 'CS', 'A3', 1, ' ', 1, 21),
(46, 'SA', 'CS', 'A4', 1, ' ', 1, 21),
(47, 'SA', 'C4', 'A2', 1, ' ', 0, 23),
(48, 'SA', 'C4', 'A3', 2, ' ', 0, 23),
(49, 'S1', 'C1T', '1-1', 2, '', 0, 24),
(50, 'S1', 'C1T', '1-2', 1, '', 0, 24),
(51, 'S1', 'C1T', '1-1', 1, '', 0, 25);

-- --------------------------------------------------------

--
-- Table structure for table `qualificationsec`
--

CREATE TABLE `qualificationsec` (
  `Code` varchar(4) NOT NULL,
  `nom` varchar(400) NOT NULL,
  `Codesec` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qualificationsec`
--

INSERT INTO `qualificationsec` (`Code`, `nom`, `Codesec`) VALUES
('1-1', 'Travaux de terrassements generaux en masse', 'S1'),
('1-2', 'Travaux terrassements speciaux', 'S1'),
('1-3', 'Travaux de minage et deroctage', 'S1'),
('A1', 'Travaux de fouilles a l\'air libre', 'SA'),
('A2', 'Travaux courants en beton arme-maconnerie pou', 'SA'),
('A3', 'Travaux de Complexité moyenne en béton armé p', 'SA'),
('A4', 'Travaux exceptionnels en béton armé pour bati', 'SA'),
('A5', 'Travaux d\'aménagement et de réhabilitation de batiments', 'SA');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `code` int(2) NOT NULL,
  `nom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`code`, `nom`) VALUES
(1, 'Tanger -Tetouan- Al Hocei'),
(2, 'Oriental'),
(3, 'Fes - Meknes\n'),
(4, 'Rabat - Sale-Kenitra'),
(5, 'Beni Mellal- Khenifra'),
(6, 'Grand Casablanca-Settat'),
(7, 'Marrakech- Safi'),
(8, 'Darea-Tafilalet'),
(9, 'Souss - Massa'),
(10, 'Guelmim eOued Noun'),
(11, 'Laeyoune - Sakia El Hamra'),
(12, 'Dakhla-Oued Eddahab');

-- --------------------------------------------------------

--
-- Table structure for table `responsable`
--

CREATE TABLE `responsable` (
  `id` int(11) NOT NULL,
  `nom_prenom` varchar(45) NOT NULL,
  `fonction` int(11) NOT NULL,
  `tele_responsqble` varchar(35) NOT NULL,
  `tele_resp` varchar(35) NOT NULL,
  `mail` varchar(35) NOT NULL,
  `registre_societe` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `responsable`
--

INSERT INTO `responsable` (`id`, `nom_prenom`, `fonction`, `tele_responsqble`, `tele_resp`, `mail`, `registre_societe`) VALUES
(6, 'mohamed amine', 1, '0655763420', '', 'a', 1),
(7, 'mohamed amine', 3, '0655763420', '', 'a', 555),
(8, 'mohamed amine belfencha', 1, '0685858888', '0685858888', 'test@gmail.com', 3),
(9, 'Ahmed douraffei', 5, '0655763420', '0655763420', 'test@gmail', 4500),
(10, 'Ahmed douraffei', 9, '06557634jh', '06557634jh', 'test@gmail', 4500);

-- --------------------------------------------------------

--
-- Table structure for table `secteur`
--

CREATE TABLE `secteur` (
  `code` varchar(4) NOT NULL,
  `nom` varchar(35) NOT NULL,
  `type_minister` varchar(2) NOT NULL,
  `categorie` varchar(2) NOT NULL,
  `base_capital` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `secteur`
--

INSERT INTO `secteur` (`code`, `nom`, `type_minister`, `categorie`, `base_capital`) VALUES
('S1', 'terrassements', 'H', 'T', 0),
('SA', 'Construction', 'E', 'B', 1),
('SB', 'travaux routiers et voirie urbaine', 'E', 'T', 1),
('SC', 'EAU Postable - assainissement - con', 'E', 'T', 0);

-- --------------------------------------------------------

--
-- Table structure for table `societe`
--

CREATE TABLE `societe` (
  `registre` int(5) NOT NULL,
  `Nom` varchar(40) DEFAULT NULL,
  `Fax` varchar(12) DEFAULT NULL,
  `Tel` varchar(19) DEFAULT NULL,
  `sigle` varchar(7) DEFAULT NULL,
  `adresse` varchar(46) DEFAULT NULL,
  `ville` varchar(2) DEFAULT NULL,
  `jure` varchar(4) DEFAULT NULL,
  `Patente` varchar(35) NOT NULL,
  `ICE` varchar(35) NOT NULL,
  `datecration` date DEFAULT NULL,
  `capitale` varchar(9) DEFAULT NULL,
  `viller` varchar(5) DEFAULT NULL,
  `region` int(1) DEFAULT NULL,
  `adheree` varchar(3) DEFAULT NULL,
  `chiffrea` varchar(10) DEFAULT NULL,
  `cnss` varchar(7) DEFAULT NULL,
  `ifs` varchar(35) NOT NULL,
  `ingenieur` varchar(2) DEFAULT NULL,
  `technicien` varchar(2) DEFAULT NULL,
  `cadre` varchar(2) DEFAULT NULL,
  `email` varchar(31) DEFAULT NULL,
  `sec_email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `societe`
--

INSERT INTO `societe` (`registre`, `Nom`, `Fax`, `Tel`, `sigle`, `adresse`, `ville`, `jure`, `Patente`, `ICE`, `datecration`, `capitale`, `viller`, `region`, `adheree`, `chiffrea`, `cnss`, `ifs`, `ingenieur`, `technicien`, `cadre`, `email`, `sec_email`) VALUES
(3, 'OTRAD', '0537721905', '0537733030', 'OTRAD', '220 AVENUE HASSAN II, APP 8, RABAT\r\n', 'R1', 'SARL', '187121', '10000', '0000-00-00', '', 'sale', 4, 'nad', '', '7249510', '10000', '1', '1', '0', 'test@gmail.com', ''),
(4, 'SOGEA', '0537700712', '053770369', 'SOGEA', '165, AVENUE ALLAL BEN ABDELLAH, RABAT\r\n', 'R1', 'PP', '555', '8853', '2014-05-23', '25000000', 'sale', 4, 'ad', '', '6077384', '4343', '0', '0', '1', 'SECRETARIAT@BITUMA.MA', ''),
(4500, 'mohamed amine', '0655545400', '0655555555', 'cdg', '03 rus sidi mchich sale', 'F2', 'SA', 'hkjkjkj', 'jkkjk56353', '2021-08-04', '45225', 'sale', 3, 'ad', '', '565685', '52313hvvv', '63', '56', '55', 'belfencha.ma@gmail', ''),
(6846, 'Ahmed douraffei', '0555555555', '0655555555', '', '36D rue de velotte 25000 besancon francee', 'F2', 'SNC', '555555', '8254455', '2022-10-25', '564', 'sale', 3, 'ad', '', '027852', '', '0', '0', '21', 'test@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `titre`
--

CREATE TABLE `titre` (
  `Code` int(11) NOT NULL,
  `nom` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `titre`
--

INSERT INTO `titre` (`Code`, `nom`) VALUES
(1, 'Provisoire'),
(2, 'Définitive');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `rule` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `rule`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `Code_Cin` varchar(20) NOT NULL,
  `Nom` varchar(35) NOT NULL,
  `Prenom` varchar(35) NOT NULL,
  `Mail` varchar(40) NOT NULL,
  `Password` varchar(35) NOT NULL,
  `telephone` varchar(35) NOT NULL,
  `type_user` int(11) NOT NULL,
  `Log` varchar(35) NOT NULL,
  `Remarque` varchar(40) NOT NULL,
  `status` int(11) NOT NULL,
  `id_region` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `Code_Cin`, `Nom`, `Prenom`, `Mail`, `Password`, `telephone`, `type_user`, `Log`, `Remarque`, `status`, `id_region`) VALUES
(3, 'ae1234', 'belfencha', 'amine', 'aminhamma@gmail.com', '1234', '0655555555', 1, '05-03-23 12:58:37', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE `ville` (
  `code` varchar(2) NOT NULL,
  `nom` varchar(10) DEFAULT NULL,
  `region` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`code`, `nom`, `region`) VALUES
('BE', 'Benslimane', 6),
('BR', 'Berrechid', 6),
('C1', 'CASABLANCA', 6),
('EJ', 'El Jadida', 6),
('F2', 'SAFROU', 3),
('FE', 'FES', 3),
('FN', 'Fnideq', 1),
('KN', 'KENITRA', 4),
('M1', 'Mohammedia', 6),
('MD', 'Médiouna', 6),
('NO', 'Nouaceur', 6),
('OU', 'Oualidia', 6),
('R1', 'RABAT', 4),
('R2', 'SALE', 4),
('R3', 'TEMARA', 4),
('R4', 'KHEMISSET', 4),
('SB', 'Sidi Benno', 6),
('ST', 'Settat', 6),
('TA', 'Tanger', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adhesion`
--
ALTER TABLE `adhesion`
  ADD PRIMARY KEY (`registre`);

--
-- Indexes for table `banque`
--
ALTER TABLE `banque`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `categ`
--
ALTER TABLE `categ`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `classe`
--
ALTER TABLE `classe`
  ADD KEY `fk_secteur` (`secteur`),
  ADD KEY `fk_direction` (`type_direction`);

--
-- Indexes for table `cotis`
--
ALTER TABLE `cotis`
  ADD PRIMARY KEY (`num`),
  ADD KEY `fk_register_societe` (`registre`);

--
-- Indexes for table `demand`
--
ALTER TABLE `demand`
  ADD PRIMARY KEY (`id_demand`),
  ADD KEY `fk_societe` (`register`),
  ADD KEY `id_nature_dem` (`nature_demande`),
  ADD KEY `fk_etat` (`etat_demande`),
  ADD KEY `fk_fonct_du` (`Fonction`),
  ADD KEY `ministere_fk` (`ministere`);

--
-- Indexes for table `direction`
--
ALTER TABLE `direction`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `dossiersociete`
--
ALTER TABLE `dossiersociete`
  ADD PRIMARY KEY (`numcertif`),
  ADD UNIQUE KEY `registre` (`registre`);

--
-- Indexes for table `en_fonction`
--
ALTER TABLE `en_fonction`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `etat_demande`
--
ALTER TABLE `etat_demande`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id_fonction`);

--
-- Indexes for table `juridique`
--
ALTER TABLE `juridique`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `ministere`
--
ALTER TABLE `ministere`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `nature_dem`
--
ALTER TABLE `nature_dem`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `qualid_demand`
--
ALTER TABLE `qualid_demand`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_qualif` (`Qualif`),
  ADD KEY `fk_titre` (`titre`),
  ADD KEY `fk_demand` (`id_demand`),
  ADD KEY `fk_sec` (`codesec`);

--
-- Indexes for table `qualificationsec`
--
ALTER TABLE `qualificationsec`
  ADD PRIMARY KEY (`Code`),
  ADD KEY `fk_secQ` (`Codesec`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fonction` (`fonction`);

--
-- Indexes for table `secteur`
--
ALTER TABLE `secteur`
  ADD PRIMARY KEY (`code`),
  ADD KEY `fk_catego` (`categorie`);

--
-- Indexes for table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`registre`),
  ADD KEY `fk_ville` (`ville`),
  ADD KEY `fk_regio` (`region`),
  ADD KEY `fk_jure` (`jure`),
  ADD KEY `registre` (`registre`);

--
-- Indexes for table `titre`
--
ALTER TABLE `titre`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_type` (`type_user`);

--
-- Indexes for table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`code`),
  ADD KEY `fk_region` (`region`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demand`
--
ALTER TABLE `demand`
  MODIFY `id_demand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id_fonction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nature_dem`
--
ALTER TABLE `nature_dem`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `qualid_demand`
--
ALTER TABLE `qualid_demand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `responsable`
--
ALTER TABLE `responsable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classe`
--
ALTER TABLE `classe`
  ADD CONSTRAINT `fk_direction` FOREIGN KEY (`type_direction`) REFERENCES `direction` (`Code`),
  ADD CONSTRAINT `fk_secteur` FOREIGN KEY (`secteur`) REFERENCES `secteur` (`code`);

--
-- Constraints for table `cotis`
--
ALTER TABLE `cotis`
  ADD CONSTRAINT `fk_register_societe` FOREIGN KEY (`registre`) REFERENCES `societe` (`registre`);

--
-- Constraints for table `demand`
--
ALTER TABLE `demand`
  ADD CONSTRAINT `fk_etat` FOREIGN KEY (`etat_demande`) REFERENCES `etat_demande` (`code`),
  ADD CONSTRAINT `fk_fonct_du` FOREIGN KEY (`Fonction`) REFERENCES `en_fonction` (`ID`),
  ADD CONSTRAINT `fk_societe` FOREIGN KEY (`register`) REFERENCES `societe` (`registre`),
  ADD CONSTRAINT `id_nature_dem` FOREIGN KEY (`nature_demande`) REFERENCES `nature_dem` (`code`),
  ADD CONSTRAINT `ministere_fk` FOREIGN KEY (`ministere`) REFERENCES `ministere` (`code`);

--
-- Constraints for table `qualid_demand`
--
ALTER TABLE `qualid_demand`
  ADD CONSTRAINT `fk_demand` FOREIGN KEY (`id_demand`) REFERENCES `demand` (`id_demand`),
  ADD CONSTRAINT `fk_qualif` FOREIGN KEY (`Qualif`) REFERENCES `qualificationsec` (`Code`),
  ADD CONSTRAINT `fk_sec` FOREIGN KEY (`codesec`) REFERENCES `secteur` (`code`),
  ADD CONSTRAINT `fk_titre` FOREIGN KEY (`titre`) REFERENCES `titre` (`Code`);

--
-- Constraints for table `qualificationsec`
--
ALTER TABLE `qualificationsec`
  ADD CONSTRAINT `fk_secQ` FOREIGN KEY (`Codesec`) REFERENCES `secteur` (`code`);

--
-- Constraints for table `responsable`
--
ALTER TABLE `responsable`
  ADD CONSTRAINT `fk_fonction` FOREIGN KEY (`fonction`) REFERENCES `fonction` (`id_fonction`);

--
-- Constraints for table `secteur`
--
ALTER TABLE `secteur`
  ADD CONSTRAINT `fk_catego` FOREIGN KEY (`categorie`) REFERENCES `categ` (`code`);

--
-- Constraints for table `societe`
--
ALTER TABLE `societe`
  ADD CONSTRAINT `fk_jure` FOREIGN KEY (`jure`) REFERENCES `juridique` (`code`),
  ADD CONSTRAINT `fk_regio` FOREIGN KEY (`region`) REFERENCES `region` (`code`),
  ADD CONSTRAINT `fk_ville` FOREIGN KEY (`ville`) REFERENCES `ville` (`code`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_type` FOREIGN KEY (`type_user`) REFERENCES `type` (`id`);

--
-- Constraints for table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `fk_region` FOREIGN KEY (`region`) REFERENCES `region` (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
