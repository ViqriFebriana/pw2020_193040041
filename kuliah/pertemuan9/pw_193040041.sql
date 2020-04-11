-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 02:41 AM
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
-- Database: `pw_193040041`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(3) NOT NULL,
  `nama` char(40) DEFAULT NULL,
  `nrp` varchar(11) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `gambar` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `jurusan`, `Email`, `gambar`) VALUES
(1, 'Muhammad Viqri Febriana', '193040041', 'Teknik Informatika', '193040041@mail.unpas.ac.id', 'Viqri.jpg'),
(2, 'Rio Alifian Santoso', '193040057', 'Teknik Informatika', '193040057@mail.unpas.ac.id', 'Rio.jpg'),
(3, 'Herlan Nurachman', '193040043', 'Teknik Informatika', '193040043@mail.unpas.ac.id', 'herlan.jpg'),
(4, 'Suhendani', '193040042', 'Teknik Informatika', '193040042@mail.unpas.ac.id', 'suhe.jpg'),
(5, 'Hannan fh', '193040073', 'Teknik Informatika', '193040073@mail.unpas.ac.id', 'hanan.jpg'),
(6, 'Aldi Ageng Tri Seftian', '193040054', 'Teknik Informatika', '193040054@mail.unpas.ac.id', 'aldi.jpg'),
(7, 'Muhammad Angga Saputra', '193040070', 'Teknik Informatika', '193040070@mail.unpas.ac.id', 'angga.jpg'),
(8, 'Fauzan Nursalma M', '193040053', 'Teknik Informatika', '193040053@mail.unpas.ac.id', 'fauzan.jpg'),
(9, 'Adinda Fadhil Patria', '193040052', 'Teknik Informatika', '193040052@mail.unpas.ac.id', 'adinda.jpg'),
(10, 'Bayu Cucan Herdian', '193040058', 'Teknik Informatika', '193040058@mail.unpas.ac.id', 'bayu.jpg');

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
