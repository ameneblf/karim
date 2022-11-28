-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 10:43 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adhesion`
--

INSERT INTO `adhesion` (`registre`, `entreprise`, `numreg`, `numnat`, `date_ad`) VALUES
(4, 'SOGEA', 14, 27, '2020-10-25'),
(6846, 'Ahmed douraffei', 21, 42, '2022-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `banque`
--

CREATE TABLE `banque` (
  `code` varchar(2) NOT NULL,
  `Nom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `cotis`
--

CREATE TABLE `cotis` (
  `registre` int(5) DEFAULT NULL,
  `dat` varchar(10) DEFAULT NULL,
  `type_paiement` varchar(35) NOT NULL,
  `cheque` varchar(9) DEFAULT NULL,
  `banque` varchar(2) DEFAULT NULL,
  `montant` int(5) DEFAULT NULL,
  `lieu` varchar(5) DEFAULT NULL,
  `ANNEE` int(11) DEFAULT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fonction`
--

CREATE TABLE `fonction` (
  `id_fonction` int(11) NOT NULL,
  `fonction` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `code` varchar(1) NOT NULL,
  `nom` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `nature`
--

CREATE TABLE `nature` (
  `code` int(1) NOT NULL,
  `nom` varchar(28) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nature`
--

INSERT INTO `nature` (`code`, `nom`) VALUES
(1, 'EXAMEN'),
(2, 'REEXAMEN'),
(3, 'RENOUVELLEMENT A L IDENTIQUE'),
(4, 'RECLAMATION');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `code` int(2) NOT NULL,
  `nom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `societe`
--

INSERT INTO `societe` (`registre`, `Nom`, `Fax`, `Tel`, `sigle`, `adresse`, `ville`, `jure`, `Patente`, `ICE`, `datecration`, `capitale`, `viller`, `region`, `adheree`, `chiffrea`, `cnss`, `ifs`, `ingenieur`, `technicien`, `cadre`, `email`, `sec_email`) VALUES
(3, 'BOUSSOUKSSOU', '0537755830', '0537705830', '', 'RUE AL KOUFA, N°7, RABAT', 'R1', 'SA', '18721', '825445', '2010-10-27', '800000000', 'sale', 1, 'nad', '', '1266488', '00000001895', '1', '', '55', 'test@gmail.com', ''),
(4, 'SOGEA', '0537700712', '053770369', 'SOGEA', '165, AVENUE ALLAL BEN ABDELLAH, RABAT\r\n', 'R1', 'PP', '555', '8853', '2014-05-23', '25000000', 'sale', 1, 'ad', '', '6077384', '4343', '0', '0', '1', 'SECRETARIAT@BITUMA.MA', ''),
(4500, 'mohamed amine', '0655545400', '0655555555', 'cdg', '03 rus sidi mchich sale', 'F2', 'SA', 'hkjkjkj', 'jkkjk56353', '2021-08-04', '45225', 'sale', 3, 'nad', '', '565685', '52313hvvv', '63', '56', '55', 'belfencha.ma@gmail', ''),
(6846, 'Ahmed douraffei', '0555555555', '0655555555', '', '36D rue de velotte 25000 besancon francee', 'F2', 'SNC', '555555', '8254455', '2022-10-25', '564', 'sale', 3, 'ad', '', '027852', '', '0', '0', '21', 'test@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `rule` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `Code_Cin`, `Nom`, `Prenom`, `Mail`, `Password`, `telephone`, `type_user`, `Log`, `Remarque`, `status`, `id_region`) VALUES
(3, 'ae1234', 'belfencha', 'amine', 'aminhamma@gmail.com', '1234', '0655555555', 1, '31-10-22 07:13:41', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE `ville` (
  `code` varchar(2) NOT NULL,
  `nom` varchar(10) DEFAULT NULL,
  `region` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`code`, `nom`, `region`) VALUES
('C1', 'CASABLANCA', 2),
('F2', 'SAFROU', 3),
('FE', 'FES', 3),
('KN', 'KENITRA', 4),
('R1', 'RABAT', 1),
('R2', 'SALE', 1),
('R3', 'TEMARA', 1),
('R4', 'KHEMISSET', 1),
('R5', 'TIFELT', 1),
('R6', 'ZAER', 1),
('R7', 'ZEMMOUR', 1);

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
-- Indexes for table `cotis`
--
ALTER TABLE `cotis`
  ADD PRIMARY KEY (`num`),
  ADD UNIQUE KEY `num` (`num`),
  ADD KEY `fk_bnk` (`banque`),
  ADD KEY `fk_register_societe` (`registre`);

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
-- Indexes for table `nature`
--
ALTER TABLE `nature`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `responsable`
--
ALTER TABLE `responsable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`registre`),
  ADD KEY `fk_ville` (`ville`),
  ADD KEY `fk_regio` (`region`),
  ADD KEY `fk_jure` (`jure`);

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
-- AUTO_INCREMENT for table `cotis`
--
ALTER TABLE `cotis`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id_fonction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- Constraints for table `cotis`
--
ALTER TABLE `cotis`
  ADD CONSTRAINT `fk_bnk` FOREIGN KEY (`banque`) REFERENCES `banque` (`code`),
  ADD CONSTRAINT `fk_register_societe` FOREIGN KEY (`registre`) REFERENCES `societe` (`registre`);

--
-- Constraints for table `responsable`
--
ALTER TABLE `responsable`
  ADD CONSTRAINT `fk_fonction` FOREIGN KEY (`fonction`) REFERENCES `fonction` (`id_fonction`);

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
