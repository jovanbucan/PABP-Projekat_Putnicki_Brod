-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 05:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `putnickibrod`
--

-- --------------------------------------------------------

--
-- Table structure for table `kabine`
--

CREATE TABLE `kabine` (
  `kabina_id` int(11) NOT NULL,
  `broj_kabine` varchar(10) NOT NULL,
  `tip_kabine` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kabine`
--

INSERT INTO `kabine` (`kabina_id`, `broj_kabine`, `tip_kabine`) VALUES
(1, '101', 'Standardna'),
(2, '102', 'Luksuzna'),
(3, '103', 'Luksuzna');

-- --------------------------------------------------------

--
-- Table structure for table `nalog`
--

CREATE TABLE `nalog` (
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `email` text NOT NULL,
  `sifra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nalog`
--

INSERT INTO `nalog` (`ime`, `prezime`, `email`, `sifra`) VALUES
('Jovan', 'Bucan', 'JB@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `putnici`
--

CREATE TABLE `putnici` (
  `putnik_id` int(11) NOT NULL,
  `ime` varchar(100) NOT NULL,
  `prezime` varchar(100) NOT NULL,
  `datum_rodjenja` date NOT NULL,
  `pol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `putnici`
--

INSERT INTO `putnici` (`putnik_id`, `ime`, `prezime`, `datum_rodjenja`, `pol`) VALUES
(1, 'Jovan', 'Jovic', '1980-01-15', 'Muško'),
(2, 'Dragan', 'Dragce', '1990-05-22', 'Žensko'),
(3, 'Radovan', 'Konj', '1990-05-07', 'Muško');

-- --------------------------------------------------------

--
-- Table structure for table `putovanja`
--

CREATE TABLE `putovanja` (
  `putovanje_id` int(11) NOT NULL,
  `ruta_id` int(11) DEFAULT NULL,
  `datum_polaska` date NOT NULL,
  `datum_dolaska` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `putovanja`
--

INSERT INTO `putovanja` (`putovanje_id`, `ruta_id`, `datum_polaska`, `datum_dolaska`) VALUES
(1, 1, '2024-06-01', '2024-06-08'),
(2, 2, '2024-07-01', '2024-07-04'),
(3, 3, '2024-08-01', '2024-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `ruta_id` int(11) NOT NULL,
  `polazna_luka` varchar(100) NOT NULL,
  `odredisna_luka` varchar(100) NOT NULL,
  `trajanje_dana` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`ruta_id`, `polazna_luka`, `odredisna_luka`, `trajanje_dana`) VALUES
(1, 'New York', 'Southampton', 7),
(2, 'Miami', 'Nassau', 3),
(3, 'Barcelona', 'Athens', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kabine`
--
ALTER TABLE `kabine`
  ADD PRIMARY KEY (`kabina_id`);

--
-- Indexes for table `putnici`
--
ALTER TABLE `putnici`
  ADD PRIMARY KEY (`putnik_id`);

--
-- Indexes for table `putovanja`
--
ALTER TABLE `putovanja`
  ADD PRIMARY KEY (`putovanje_id`),
  ADD KEY `ruta_id` (`ruta_id`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`ruta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kabine`
--
ALTER TABLE `kabine`
  MODIFY `kabina_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `putnici`
--
ALTER TABLE `putnici`
  MODIFY `putnik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `putovanja`
--
ALTER TABLE `putovanja`
  MODIFY `putovanje_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `ruta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `putovanja`
--
ALTER TABLE `putovanja`
  ADD CONSTRAINT `putovanja_ibfk_1` FOREIGN KEY (`ruta_id`) REFERENCES `rute` (`ruta_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
