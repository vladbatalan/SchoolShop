-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2016 at 08:41 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cos`
--

CREATE TABLE `cos` (
  `id_comanda` int(11) NOT NULL,
  `id_produs` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `stoc` int(11) NOT NULL,
  `comanda` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cos`
--

INSERT INTO `cos` (`id_comanda`, `id_produs`, `id_user`, `stoc`, `comanda`) VALUES
(16, 1, 2, 10, 0),
(17, 2, 2, 1, 0),
(18, 3, 2, 1, 0),
(19, 5, 2, 2, 0),
(20, 6, 2, 10, 0),
(21, 8, 2, 3, 0),
(22, 9, 2, 1, 0),
(23, 1, 2, 5, 0),
(24, 4, 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `produse`
--

CREATE TABLE `produse` (
  `id` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `imagine` varchar(50) NOT NULL,
  `pret` float(10,2) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `descriere` text NOT NULL,
  `stoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produse`
--

INSERT INTO `produse` (`id`, `nume`, `imagine`, `pret`, `categorie`, `descriere`, `stoc`) VALUES
(1, 'Coperti caiete', 'coperti.jpg', 0.50, 'hartie', 'Coperti pentru protejarea caietelor scolare de diferite marimi.', 25),
(2, 'Creioane', 'creioane.jpg', 6.00, 'birotica', 'Cutie de creioane in 12 culori.', 5),
(3, 'Penar Mickey Mouse', 'penar_mickey.jpg', 12.00, 'penare', 'Penar cu Mickey Mouse.', 3),
(4, 'Penar Minion', 'penar_minion.jpg', 20.00, 'penare', 'Penar cu minioni', 5),
(5, 'Penar Violetta', 'penar_violetta.jpg', 15.00, 'penare', 'Penar cu Violetta.', 10),
(6, 'Pixuri', 'pixuri.jpg', 1.50, 'birotica', 'Pixuri cu gel.', 50),
(7, 'Rigla', 'rigla.jpg', 1.00, 'rigle', 'O rigla din plastic de 20 cm.', 5),
(8, 'Caiete romana dictando', 'romana-dictando.jpg', 2.00, 'caiete', 'Caiete mici de tip dictando cu 48 de file.', 20),
(9, 'Stilou', 'stilou.jpg', 7.00, 'birotica', 'Un stilou pe baza de rezerve.', 10);

-- --------------------------------------------------------

--
-- Table structure for table `utilizator`
--

CREATE TABLE `utilizator` (
  `id_user` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `parola` varchar(30) NOT NULL,
  `judet` varchar(20) NOT NULL,
  `localitate` varchar(20) NOT NULL,
  `adresa` varchar(100) NOT NULL,
  `telefon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizator`
--

INSERT INTO `utilizator` (`id_user`, `email`, `parola`, `judet`, `localitate`, `adresa`, `telefon`) VALUES
(2, 'vladbatalan@yahoo.com', '123', 'Botosani', 'Botosani', 'Calea Nationala, nr. 86, bl. D, ap. 2', '0741111111'),
(3, 'mihai@yahoo.com', '123', 'Botosani', 'Brehuiesti', 'Strada din lemn Piatra verde, casa 2', '0712312312');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cos`
--
ALTER TABLE `cos`
  ADD PRIMARY KEY (`id_comanda`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produs` (`id_produs`),
  ADD KEY `comanda` (`comanda`);

--
-- Indexes for table `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizator`
--
ALTER TABLE `utilizator`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cos`
--
ALTER TABLE `cos`
  MODIFY `id_comanda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `produse`
--
ALTER TABLE `produse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `utilizator`
--
ALTER TABLE `utilizator`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cos`
--
ALTER TABLE `cos`
  ADD CONSTRAINT `cos_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilizator` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cos_ibfk_2` FOREIGN KEY (`id_produs`) REFERENCES `produse` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
