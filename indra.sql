-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 05:54 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indra`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `email_admin` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level`, `email_admin`) VALUES
(1, 'admin', '$2a$10$I4WobUyILHg08Ij4KY5BwuExe09ypyrcfvyyWMUVa3jraQ7oVPAae', 1, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id` int(3) NOT NULL,
  `merk` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id`, `merk`) VALUES
(1, 'asatron'),
(2, 'noise'),
(3, 'DAT'),
(4, 'rinrei'),
(5, 'GMC'),
(6, 'polytron'),
(7, 'sharp LED'),
(8, 'polytron LED'),
(9, 'aqua'),
(10, 'TOA'),
(11, 'JMK'),
(12, 'targa'),
(13, 'sharp');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(3) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `jenis`) VALUES
(1, 'speaker wireless'),
(2, 'speaker aktif'),
(3, 'TV'),
(4, 'mesin cuci'),
(5, 'mic');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(3) NOT NULL,
  `size` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size`) VALUES
(1, '12 inch'),
(2, '8 inch'),
(3, '15 inch'),
(4, '2X10 inch'),
(5, '2 x 12 inch'),
(6, '18 inch'),
(7, '2 x 6 inch'),
(8, '21 inch'),
(9, '24 inch'),
(10, '32 inch'),
(11, '2 tabung 7 kg'),
(12, '2 tabung 8 kg'),
(13, '2 tabung 6 kg'),
(14, '-');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` int(3) NOT NULL,
  `id_produk` int(3) NOT NULL,
  `id_merk` int(3) NOT NULL,
  `id_size` int(3) NOT NULL,
  `type` varchar(10) NOT NULL,
  `harga` int(15) NOT NULL,
  `jumlah_stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id`, `id_produk`, `id_merk`, `id_size`, `type`, `harga`, `jumlah_stok`) VALUES
(1, 1, 1, 1, 'venus', 1000000, 54),
(2, 1, 2, 1, '899', 1050000, 26),
(3, 1, 1, 1, 'pandora', 1200000, 34),
(4, 1, 1, 1, 'oceana', 1200000, 74),
(5, 1, 1, 2, 'fuji', 450000, 25),
(6, 1, 3, 2, 'DT-820 QD', 550000, 35),
(7, 1, 4, 2, 'SR8899', 550000, 66),
(8, 1, 1, 2, 'olympus', 700000, 37),
(9, 1, 5, 2, '897R', 600000, 64),
(10, 1, 1, 3, 'manchester', 1500000, 12),
(11, 1, 1, 3, 'liverpool', 1500000, 74),
(12, 1, 1, 3, 'titanium', 1750000, 23),
(13, 1, 1, 3, 'diamond', 1750000, 69),
(14, 1, 4, 1, 'SR8899', 1000000, 12),
(15, 1, 2, 3, '899', 1500000, 26),
(16, 1, 2, 4, '899', 2100000, 38),
(17, 1, 2, 5, '899', 2400000, 15),
(18, 1, 1, 4, 'champion', 2000000, 22),
(19, 1, 1, 1, 'thypoon', 2500000, 43),
(20, 1, 1, 1, 'HT8871UKM', 1600000, 24),
(21, 1, 1, 1, 'HT8870UKM', 1500000, 19),
(22, 1, 1, 3, 'hollywood', 2000000, 26),
(23, 1, 1, 6, 'HT8902', 2750000, 34),
(24, 1, 5, 7, '899F', 1650000, 37),
(25, 2, 3, 5, 'DS-122-DW', 3300000, 25),
(26, 3, 6, 8, '52UV60RG', 2750000, 16),
(27, 3, 6, 8, '24D123', 1700000, 14),
(28, 3, 7, 9, '24LE1701', 1500000, 12),
(29, 3, 8, 10, '32D1852', 2100000, 17),
(30, 3, 7, 10, 'C32BA11', 2000000, 19),
(31, 4, 9, 11, 'QW781XT', 1300000, 12),
(32, 4, 9, 12, '851XT', 1400000, 12),
(33, 4, 6, 11, '7363', 1300000, 18),
(34, 4, 6, 12, '8363', 1500000, 17),
(35, 4, 13, 13, '65MW', 1350000, 12),
(36, 5, 10, 14, '260', 225000, 73),
(37, 5, 10, 14, '270', 300000, 101),
(38, 5, 11, 14, 'beta58', 200000, 25),
(39, 5, 11, 14, 'JK813', 150000, 20),
(40, 5, 12, 14, 'DM1300', 75000, 36),
(41, 5, 2, 14, 'SN909', 225000, 56);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_merk` (`id_merk`),
  ADD KEY `id_size` (`id_size`),
  ADD KEY `id_produk_2` (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `stok_ibfk_1` FOREIGN KEY (`id_merk`) REFERENCES `merk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stok_ibfk_2` FOREIGN KEY (`id_size`) REFERENCES `size` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stok_ibfk_3` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
