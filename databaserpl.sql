-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2018 at 05:33 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaserpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentdb`
--

CREATE TABLE `commentdb` (
  `id_comment` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `commenttext` text,
  `id_post` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postdb`
--

CREATE TABLE `postdb` (
  `id_post` varchar(15) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `tema` varchar(30) NOT NULL,
  `waktu_batas` time NOT NULL,
  `rincian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postdb`
--

INSERT INTO `postdb` (`id_post`, `judul`, `jenis`, `tema`, `waktu_batas`, `rincian`) VALUES
('01', 'Flat Design', 'Flat', 'Flat', '10:00:00', 'Flat Design'),
('02', 'Cute', 'cartoon', 'cartoon', '13:00:00', 'unique cartoon');

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE `userdb` (
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `noHp` varchar(20) NOT NULL,
  `idLine` varchar(20) NOT NULL,
  `fotoProfil` blob NOT NULL,
  `reportSiapa` varchar(30) NOT NULL,
  `reportBerapa` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`username`, `password`, `nama`, `email`, `noHp`, `idLine`, `fotoProfil`, `reportSiapa`, `reportBerapa`) VALUES
('admin', 'admin', 'admin', 'admin@gmail.com', '34656', 'irv', 0x313530353433332e6a7067, '', 0),
('admin1', 'admin1', 'admin1', 'admin1@gmail.com', '346456465', 'admin1', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentdb`
--
ALTER TABLE `commentdb`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `postdb`
--
ALTER TABLE `postdb`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `userdb`
--
ALTER TABLE `userdb`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `idLine` (`idLine`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
