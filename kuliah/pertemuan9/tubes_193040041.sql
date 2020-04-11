-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 02:42 AM
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
-- Database: `tubes_193040041`
--

-- --------------------------------------------------------

--
-- Table structure for table `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(5) NOT NULL,
  `cover` varchar(30) NOT NULL,
  `model_laptop` varchar(50) NOT NULL,
  `processor` varchar(95) NOT NULL,
  `graphic_card` varchar(75) NOT NULL,
  `ram` varchar(75) NOT NULL,
  `storage` varchar(45) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`id`, `cover`, `model_laptop`, `processor`, `graphic_card`, `ram`, `storage`, `harga`) VALUES
(1, '1.jpg', 'Lenovo Legion Y540', '9th Generation Intel® Core™ i7-9750H, 9th Generation Intel® Core™ i5-9300H', 'NVIDIA® GEFORCE® GTX 1650 GDDR5 4G', '8 GB DDR4 2666 MHz, 16 GB DDR4 2666 MHz', '512GB PCIe SSD', 'Rp.14 Juta'),
(2, '2.jpg', 'Asus TUF FX504GE i5 8300H GTX1050', 'Intel® Core™ i5 8300H', 'NVIDIA® GeForce® GTX1050', '4 GB DDR4 2666MHz, 16 GB Intel® Optane™', '1 TB 5400 rpm SATA HDD', 'Rp.12 Juta'),
(3, '3.jpg', 'MSI GL63 9SC i5 9300H GTX1650', '9th Gen Intel Core i5-9300H (2.40 – 4.10 GHz, 8 MB SmartCache)', 'NVIDIA® GeForce GTX 1650 4 GB DDR6', '8 GB DDR4', '256 GB SSD', 'Rp.12 Juta'),
(4, '4.jpg', 'Acer Nitro 5 AN515 54 5942 i5 9300H', 'Intel® Core™ i5-9300H processor (8MB cache, up to 4.10GHz)', 'NVIDIA® GeForce® GTX 1650 with 4GB of GDDR5', '8 GB DDR4', '1 TB HDD', 'Rp.14 Juta'),
(5, '5.jpg', 'MSI GF75 9RCX 270 i7 9750H GTX 1050 Ti', '9th Gen Intel Core i7-9750H (2.60 – 4.50 GHz, 12 MB SmartCache)', 'Intel UHD Graphics 630, Nvidia GeForce GTX 1050 Ti 4 GB', '8 GB DDR4', '256 GB SSD', 'Rp.13 Juta'),
(6, '6.jpg', 'HP Pavilion Gaming 15 DK0042TX i7 9750H', '9th Gen Intel Core i7-9750H (2.60 – 4.50 GHz, 12 MB SmartCache)', 'Intel UHD Graphics 630, Nvidia GeForce GTX 1650 4 GB', '8 GB 2666 MHz DDR4', '256 GB SSD + 1 TB 7200 rpm SATA HDD	', 'Rp.13 Juta'),
(7, '7.jpg', 'Asus ROG Strix III G531GD I505G3T i5 9300H', 'Intel® Core™ i5-9300H Processor 2.4GHz (8M Cache, up to 4.1GHz)', 'NVIDIA® GeForce GTX1050 4GB', '8 GB DDR4', 'SSD 512 GB NVme', 'Rp.12 Juta'),
(8, '8.jpg', 'Lenovo IdeaPad L340 i7-9750H GTX 1650', 'Intel Core i7-9750H Processor (2.60Hz, up to 4.50GHz with Turbo Boost, 6 Cores, 12MB Cache)', 'NVIDIA GeForce GTX 1650 DDR5 4G', '8 GB DDR4', 'SSD 512 GB M.2 2280 NVME', 'Rp.14 Juta'),
(9, '9.jpg', 'Acer Nitro 5 AN515-54-76RU i7-9750H', 'Intel® Core™ i7-9750H Processor (2.60 GHz. up to 4.50 GHz. 12M Cache)', 'NVIDIA GeForce GTX 1650 4GB', '8 GB DDR4', 'SSD 512 GB M.2 2280 NVME', 'Rp.14 Juta'),
(10, '10.jpg', 'HP Pavilion Gaming 15 EC0022AX R7 3750H GTX1660Ti', 'AMD Ryzen 7 3750H 2.3 – 4.00 GHz', 'NVIDIA® GeForce® GTX1660Ti 6 GB GDDR5', '8 GB DDR4', 'HDD 1 TB + SSD 256 GB NVMe', 'Rp.14,5 Juta'),
(11, '11.jpg', 'Asus ROG G531GT i7 9750H GTX1650', 'Intel® Core™ i7-9750H 2.6GHz up to 4.5GHz', 'NVIDIA® GeForce GTX™ 1650 with 4GB GDDR5 VRAM', '8 GB DDR4', 'SSD 512 GB', 'Rp.14 Juta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
