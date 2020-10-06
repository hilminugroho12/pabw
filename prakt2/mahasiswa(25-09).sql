-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 05:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pabw`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` varchar(9) DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `agama` varchar(12) DEFAULT NULL,
  `olahraga_fav` varchar(20) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jenis_kelamin`, `agama`, `olahraga_fav`, `foto`) VALUES
(15, 'Robert', 'J3C118154', 'L', 'Islam', 'Bersepeda,Futsal', 'RDJ.jpg'),
(16, 'Jhon', 'J3C118158', 'L', 'Kristen', 'Bersepeda,Tenis', 'jon snow.jpg'),
(17, 'Anya', 'J3C118138', 'P', 'Islam', 'Lari,Badminton', 'anya.jpg'),
(18, 'Dany', 'J3C118138', 'P', 'Hindu', 'Bersepeda,Tenis', 'daenerys.jpg'),
(19, 'pev', 'J3C118129', 'P', 'Kristen', 'Lari,Bersepeda', 'Pevita-Pearce-1-1280x720.jpg'),
(20, 'Chelsea', 'J3C118138', 'P', 'Kristen', 'Lari,Bersepeda', 'chelsea islan.jpg'),
(21, 'Chadwick', 'J3C118220', 'L', 'Budha', 'Futsa;,Tenis', 'chadwick boseman.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
