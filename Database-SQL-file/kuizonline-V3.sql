-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2021 at 09:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuizonlinev3`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idpengguna` varchar(12) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jantina` varchar(10) NOT NULL,
  `aras` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `perekodan`
--

CREATE TABLE `perekodan` (
  `idperekodan` int(11) NOT NULL,
  `idpengguna` varchar(12) NOT NULL,
  `idtopik` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `skor` varchar(5) NOT NULL,
  `catatan_masa` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE `pilihan` (
  `idpilihan` int(11) NOT NULL,
  `nom_soalan` int(10) NOT NULL,
  `jawapan` varchar(20) NOT NULL,
  `pilihan_jawapan` text NOT NULL,
  `idsoalan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `soalan`
--

CREATE TABLE `soalan` (
  `idsoalan` int(11) NOT NULL,
  `nom_soalan` int(10) NOT NULL,
  `soalan` text NOT NULL,
  `gambarajah` varchar(20) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `idtopik` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE `topik` (
  `idtopik` int(11) NOT NULL,
  `topik` varchar(30) NOT NULL,
  `markah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- Indexes for table `perekodan`
--
ALTER TABLE `perekodan`
  ADD PRIMARY KEY (`idperekodan`),
  ADD KEY `idpengguna` (`idpengguna`,`idtopik`),
  ADD KEY `rekod_topik` (`idtopik`);

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`idpilihan`),
  ADD KEY `idsoalan` (`idsoalan`);

--
-- Indexes for table `soalan`
--
ALTER TABLE `soalan`
  ADD PRIMARY KEY (`idsoalan`),
  ADD KEY `idtopik` (`idtopik`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`idtopik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perekodan`
--
ALTER TABLE `perekodan`
  MODIFY `idperekodan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `idpilihan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soalan`
--
ALTER TABLE `soalan`
  MODIFY `idsoalan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `idtopik` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `perekodan`
--
ALTER TABLE `perekodan`
  ADD CONSTRAINT `rekod_pengguna` FOREIGN KEY (`idpengguna`) REFERENCES `pengguna` (`idpengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekod_topik` FOREIGN KEY (`idtopik`) REFERENCES `topik` (`idtopik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD CONSTRAINT `pilihan_soalan` FOREIGN KEY (`idsoalan`) REFERENCES `soalan` (`idsoalan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soalan`
--
ALTER TABLE `soalan`
  ADD CONSTRAINT `soalan_topik` FOREIGN KEY (`idtopik`) REFERENCES `topik` (`idtopik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
