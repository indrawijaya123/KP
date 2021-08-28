-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2021 at 12:30 PM
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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(3) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `jenis`) VALUES
(1, 'speaker wireless'),
(2, 'speaker aktif'),
(3, 'TV'),
(8, 'Mesin cuci'),
(9, 'MIC');

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
  `id_kategori` int(3) NOT NULL,
  `id_merk` int(3) NOT NULL,
  `id_size` int(3) NOT NULL,
  `kode_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(10) NOT NULL,
  `harga` int(15) NOT NULL,
  `jumlah_stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_kategori`, `id_merk`, `id_size`, `kode_produk`, `nama_produk`, `harga`, `jumlah_stok`) VALUES
(43, 1, 1, 1, 'BRG-001', 'venus', 1000000, 54),
(44, 1, 2, 1, 'BRG-002', '899', 1050000, 26),
(45, 1, 1, 1, 'BRG-003', 'Pandora', 1200000, 34),
(46, 1, 1, 1, 'BRG-004', 'Oceana', 1200000, 74),
(47, 1, 1, 2, 'BRG-005', 'Fuji', 450000, 25),
(48, 1, 3, 2, 'BRG-006', 'DT-820QD', 550000, 35),
(49, 1, 4, 2, 'BRG-007', 'SR8899', 550000, 66),
(50, 1, 1, 2, 'BRG-008', 'Olympus', 700000, 37),
(51, 1, 5, 2, 'BRG-009', '897R', 600000, 64),
(52, 1, 1, 3, 'BRG-010', 'Manchester', 1500000, 12),
(53, 1, 1, 3, 'BRG-011', 'Liverpool', 1500000, 74),
(54, 1, 1, 3, 'BRG-012', 'Titanium', 1750000, 23),
(55, 1, 1, 3, 'BRG-013', 'Diamond', 1750000, 69),
(56, 1, 4, 1, 'BRG-014', 'SR8899', 1000000, 12),
(57, 1, 2, 3, 'BRG-015', '899', 1500000, 26),
(58, 1, 2, 4, 'BRG-016', '899', 2100000, 38),
(59, 1, 2, 5, 'BRG-017', '899', 2400000, 15),
(60, 1, 1, 4, 'BRG-018', 'Champion', 2000000, 22),
(61, 1, 1, 1, 'BRG-019', 'Thypoon', 2500000, 43),
(62, 1, 1, 1, 'BRG-020', 'HT8871UKM', 1600000, 24),
(63, 1, 1, 1, 'BRG-021', 'HT8870UKM', 1500000, 19),
(64, 1, 1, 3, 'BRG-022', 'Hollywood', 2000000, 26),
(65, 1, 1, 6, 'BRG-023', 'HT8902', 2750000, 34),
(66, 1, 5, 7, 'BRG-024', '899F', 1650000, 37),
(67, 2, 3, 5, 'BRG-025', 'DS-122-DW', 3300000, 25),
(68, 3, 6, 8, 'BRG-026', '52UV60RG', 2750000, 16),
(69, 3, 6, 8, 'BRG-027', '24D123', 1700000, 14),
(70, 3, 7, 9, 'BRG-028', '24LE1701', 1500000, 12),
(71, 3, 8, 10, 'BRG-029', '32D1852', 2100000, 17),
(72, 3, 7, 10, 'BRG-030', 'C32BA11', 2000000, 19),
(73, 8, 9, 11, 'BRG-031', 'QW781XT', 1300000, 12),
(74, 8, 9, 12, 'BRG-032', '851XT', 1400000, 12),
(75, 8, 6, 11, 'BRG-033', '7363', 1300000, 18),
(76, 8, 8, 12, 'BRG-034', '8363', 1500000, 17),
(77, 8, 13, 13, 'BRG-035', '65MW', 1350000, 12),
(78, 9, 10, 14, 'BRG-036', '260', 225000, 73),
(79, 9, 10, 14, 'BRG-037', '270', 300000, 101),
(80, 9, 11, 14, 'BRG-038', 'BETA58', 200000, 25),
(81, 9, 11, 14, 'BRG-039', 'JK813', 150000, 20),
(82, 9, 12, 14, 'BRG-040', 'DM1300', 75000, 36),
(83, 9, 2, 14, 'BRG-041', 'SN909', 225000, 56);

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
(14, 'reguler');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_kategori`),
  ADD KEY `id_merk` (`id_merk`),
  ADD KEY `id_size` (`id_size`),
  ADD KEY `id_produk_2` (`id_kategori`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_merk`) REFERENCES `merk` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_size`) REFERENCES `size` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `produk_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
