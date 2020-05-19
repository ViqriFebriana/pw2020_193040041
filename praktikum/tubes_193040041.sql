-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 10:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `harga` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`id`, `cover`, `model_laptop`, `processor`, `graphic_card`, `ram`, `storage`, `harga`, `keterangan`) VALUES
(1, '1.jpg', 'Lenovo Legion Y540', '9th Generation Intel® Core™ i7-9750H, 9th Generation Intel® Core™ i5-9300H', 'NVIDIA® GEFORCE® GTX 1650 GDDR5 4G', '8 GB DDR4 2666 MHz, 16 GB DDR4 2666 MHz', '512GB PCIe SSD', 'Rp.14 Juta', 'Laptop gaming, further evolved\r\nLaptop 15,6 inci yang ramping dan portabel ini mendorong performa gaming ke tingkat yang baru. Spesifikasi generasi terbaru menjamin Anda kekuatan yang serius. Dioptimalkan secara termal untuk menjalankan pendingin dan tidak bising dengan full-sized white-backlit keyboard, Laptop Lenovo Legion Y540 diprioritaskan bagi mereka yang menginginkan permainan di mana pun kehidupan membawa mereka\r\n'),
(2, '2.jpg', 'Asus TUF FX504GE i5 8300H GTX1050', 'Intel® Core™ i5 8300H', 'NVIDIA® GeForce® GTX1050', '4 GB DDR4 2666MHz, 16 GB Intel® Optane™', '1 TB 5400 rpm SATA HDD', 'Rp.12 Juta', 'ASUS TUF Gaming FX504 merupakan laptop bertenaga dengan Windows 10 yang menggabungkan pengalaman gaming yang mengesankan dan daya tahan diatas standar. Teknologi cooling yang telah dipatenkan, Anti-Dust Cooling (ADC) memastikan performa yang stabil, dan suara surround 7.1-channel sepenuhnya menyatukan indra Anda - FX504 hadir dengan harga terjangkau!'),
(3, '3.jpg', 'MSI GL63 9SC i5 9300H GTX1650', '9th Gen Intel Core i5-9300H (2.40 – 4.10 GHz, 8 MB SmartCache)', 'NVIDIA® GeForce GTX 1650 4 GB DDR6', '8 GB DDR4', '256 GB SSD', 'Rp.12 Juta', 'Sebagai satu-satunya laptop gaming Full HD dengan refresh rate 120Hz dan 3ms response time, ini adalah pendamping tepat yang dapat Anda andalkan untuk tidak pernah kelewatan detail selama gameplay yang cepat. Tingkat realisme diambil dari kemampuan panel untuk menghasilkan hingga 120 frame gambar per detiknya, dilengkapi dengan kalibrasi 94% NTSC Color Gamut untuk menghadirkan visual yang paling nyata dan memenuhi kebutuhan Anda.'),
(4, '4.jpg', 'Acer Nitro 5 AN515 54 5942 i5 9300H', 'Intel® Core™ i5-9300H processor (8MB cache, up to 4.10GHz)', 'NVIDIA® GeForce® GTX 1650 with 4GB of GDDR5', '8 GB DDR4', '1 TB HDD', 'Rp.14 Juta', 'Nitro 5 varian terbaru dengan model AN515-54 hadir dengan bobot yang lebih ringan hanya seberat 2.75kg dan memiliki dimensi 15.35 x 10.47 x 1.05 inci.Nitro 5 terbaru juga dilengkapi dengan sistem operasi Windows 10 Home dan prosesor Intel Core i5-9300H untuk memaksimalkan permainan dengan tetap menghemat daya.\r\n\r\nIntel Core Generasi ke-9 dan kartu grafis NVIDIA GeForce GTX1660Ti / GTX1650 / GTX1050 3GB sehingga akan memberikan daya kerja mesin lebih tinggi namun menggunakan energi yang rendah sehingga mesin laptop tetap terjaga. Slot storage berkapasitas 1TB dan memori 256GB juga dibenamkan dalam perangkat ini.'),
(5, '5.jpg', 'MSI GF75 9RCX 270 i7 9750H GTX 1050 Ti', '9th Gen Intel Core i7-9750H (2.60 – 4.50 GHz, 12 MB SmartCache)', 'Intel UHD Graphics 630, Nvidia GeForce GTX 1050 Ti 4 GB', '8 GB DDR4', '256 GB SSD', 'Rp.13 Juta', 'seri MSI GF75 9SC Thin. Seri MSI GF75 9SC Thin ini bisa dikatakan sebagai salah satu laptop gaming dengan layar 17 inci pertama di Indonesia yang ditenagai oleh grafis anyar dari Nvidia GeForce GTX 1650 yang belum lama ini dirilis.\r\n\r\nTak hanya itu, MSI GF75 9SC Thin ini juga menjadi salah satu notebook gaming 17 inci pertama di Indonesia yang ditenagai prosesor Intel Core i7-9750H generasi ke-9. Sesuai namanya, MSI GF75 9SC Thin ini mengandalkan desain yang ringkas dan tipis, serta menawarkan bobot yang terbilang ringan di kelasnya. Notebook gaming 17 inci ini tampil dengan desain yang minimalis dengan balutan casing solid berwarna hitam yang kokoh.'),
(6, '6.jpg', 'HP Pavilion Gaming 15 DK0042TX i7 9750H', '9th Gen Intel Core i7-9750H (2.60 – 4.50 GHz, 12 MB SmartCache)', 'Intel UHD Graphics 630, Nvidia GeForce GTX 1650 4 GB', '8 GB 2666 MHz DDR4', '256 GB SSD + 1 TB 7200 rpm SATA HDD	', 'Rp.13 Juta', ' HP Pavilion Gaming 15 DK0042TX. Harganya yang sangat kompetitif membuat HP Pavilion Gaming 15 DK0042TX menjadi salah satu laptop gaming Intel Core i7-9750H dengan grafis GeForce GTX 1650 termurah di Indonesia saat ini.\r\n\r\nPenampilan atau desain fisik laptop gaming HP Pavilion Gaming 15 DK0042TX ini sebenarnya tak banyak berubah jika dibandingkan dengan seri Pavilion Gaming generasi sebelumnya. Laptop ini hadir dengan gaya minimalis futuristik yang terinspirasi dari desain HP Omen. HP Pavilion Gaming 15 DK0042TX dibalut dengan casing solid berwarna Shadow Black yang membuatnya terkesan misterius. Dimensi dan bobot laptop gaming HP Pavilion Gaming 15 DK0042TX ini termasuk ringkas dengan tebal 2,34cm dan berat hanya 2,23kg.'),
(7, '7.jpg', 'Asus ROG Strix III G531GD I505G3T i5 9300H', 'Intel® Core™ i5-9300H Processor 2.4GHz (8M Cache, up to 4.1GHz)', 'NVIDIA® GeForce GTX1050 4GB', '8 GB DDR4', 'SSD 512 GB NVme', 'Rp.12 Juta', 'Salah satu varian laptop gaming besutan pabrikan asal Taiwan ini adalah Asus ROG Strix Hero III G531GU. Notebook ini menggunakan desain modern yang menarik yang terinspirasi dari ROG Face Off yang merupakan hasil kerja sama antara Asus dengan BMW Designworks.\r\n\r\nPenampilan Asus ROG Strix Hero III G531GU jelas jauh berbeda jika dibandingkan dengan seri ROG Strix Hero II pendahulunya. Laptop ini tampil dengan dimensi yang lebih ringkas dengan layar berbezel super tipis. Tak hanya itu, Asus ROG Strix Hero III G531GU ini dibekali sengan fitur pendinginan inovatif dari Asus yang disebut dengan 3D Flow Zone yang berada di sisi belakang yang mampu menjaga suhu laptop agar tetap aman terkendali. Performa Asus ROG Strix Hero III G531GU cukup andal dengan duet Intel Core i7-9750H dengan grafis dari Nvidia GeForce GTX 1660 Ti.'),
(8, '8.jpg', 'Lenovo IdeaPad L340 i7-9750H GTX 1650', 'Intel Core i7-9750H Processor (2.60Hz, up to 4.50GHz with Turbo Boost, 6 Cores, 12MB Cache)', 'NVIDIA GeForce GTX 1650 DDR5 4G', '8 GB DDR4', 'SSD 512 GB M.2 2280 NVME', 'Rp.14 Juta', 'notebook baru andalannya yang cocok untuk kebutuhan multimedia editing maupun viewing di Indonesia, yakni seri IdeaPad L340 15API. Berdasarkan pantauan Laptophia, notebook multimedia Lenovo IdeaPad L340 15API sudah tersedia dan dapat dibeli melalui e-commerce dan mungkin retail offline terkemuka tanah air.\r\n\r\nLaptop Lenovo IdeaPad L340 15API ini siap memanjakan penikmat multimedia dengan layar berukuran besar dengan resolusi tinggi dan didukung speaker berkualitas dengan teknologi Dolby Audio. Berbicara soal performa, Lenovo IdeaPad L340 15API ini cukup andal dengan dukungan prosesor anyar AMD Ryzen 7 3700U generasi baru dengan arsitektur Zen+. Tak hanya itu, penampilan laptop Lenovo IdeaPad L340 15API ini elegan dan tersedia dalam beberap varian warna, antara lain adalah Granite Black, Platinum Grey, Dark Orchid, Blizzard White, dan Abbys Blue.'),
(9, '9.jpg', 'Acer Nitro 5 AN515-54-76RU i7-9750H', 'Intel® Core™ i7-9750H Processor (2.60 GHz. up to 4.50 GHz. 12M Cache)', 'NVIDIA GeForce GTX 1650 4GB', '8 GB DDR4', 'SSD 512 GB M.2 2280 NVME', 'Rp.14 Juta', 'Tak hanya menggempur segmen entry-level dan menengah, Acer juga serius menggarap segmen gaming dengan meluncurkan laptop gaming murah dengan harga kisaran Rp 14 juta-an melalui seri Acer Nitro 5 AN515-52. Meski dijual dengan harga yang terbilang murah meriah, laptop gaming Acer Nitro 5 AN515-52 ini dibekali dengan prosesor Intel generasi terbaru melalui seri Core i5-8300H dari generasi Coffee Lake.\r\n\r\nPenampilan atau desain fisik dari notebook khusus game Acer Nitro 5 AN515-52 ini tak jauh berbeda dengan seri Nitro lainnya yang telah diluncurkan lebih dulu. Notebook ini dibalut dengan lakukan minimalis futuristik dengan balutan casing solid berwarna dark grey yang menawan.'),
(10, '10.jpg', 'HP Pavilion Gaming 15 EC0022AX R7 3750H GTX1660Ti', 'AMD Ryzen 7 3750H 2.3 – 4.00 GHz', 'NVIDIA® GeForce® GTX1660Ti 6 GB GDDR5', '8 GB DDR4', 'HDD 1 TB + SSD 256 GB NVMe', 'Rp.14,5 Juta', ' HP Pavilion Gaming 15 EC0022AX. Laptop gaming ini didesain khusus untuk membidik segmen entry-level, tetapi masih mempertahankan performa gaming yang terbilang tinggi di kelasnya dengan mengandalkan duet prosesor AMD Ryzen 7 3750H dan Nvidia GeForce GTX 1660 Ti.\r\n\r\nPenampilan atau desain fisik laptop gaming HP Pavilion Gaming 15 EC0022AX ini sebenarnya tak banyak berubah jika dibandingkan dengan seri Pavilion Gaming seri lainnya yang bergaya futuristik dengan engsel yang unik. HP Pavilion Gaming 15 EC0022AX dibalut dengan casing solid berwarna Shadow Black yang membuatnya terkesan misterius. Performa laptop gaming ini laik mendapat acungan jempol dengan duet prosesor AMD Ryzen generasi Picasso dengan GeForce GTX 1660 Ti.'),
(11, '11.jpg', 'Asus ROG G531GT i7 9750H GTX1650', 'Intel® Core™ i7-9750H 2.6GHz up to 4.5GHz', 'NVIDIA® GeForce GTX™ 1650 with 4GB GDDR5 VRAM', '8 GB DDR4', 'SSD 512 GB', 'Rp.14 Juta', 'Asus ROG Strix G yang terdiri dari beberapa varian, salah satunya adalah Asus ROG G531GT. Berdasarkan pantauan Laptophia, Asus ROG G531GT sudah mulai dijual di beberapa e-commerce terkemuka tanah air.\r\n\r\nAsus ROG G531GT ini sekilas tampil dengan bentuk yang sederhana dan minimalis, serta masih mempertahankan logo ROG  pada sisi kiri. Laptop ini menggunakan konsep desain yang disebut dengan ROG Face Off yang dirancang bersama BMW Designworks Group. Hal ini terlihat pada detail yang unik pada interior dan dipercantik dengan difussed LED pada sisi bawah laptop. Asus ROG G531GT juga dilengkapi dengan 3D Flow Zone pada sisi belakang. Performa laptop gaming ini cukup andal dengan duet prosesor Intel Core i7-9750H dan grafis diskrit Nvidia GeForce GTX 1650.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(7, 'admin', '$2y$10$DbfPLBUNiVQNPBCAzMwxyuSZSqLf7WV94FpMKJZBQrRSX0Xr6zeai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
