-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2021 at 07:41 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'admin', '$2y$10$Vx.7JFIvzvw3GCaF/AdPke/VdsHotVOw4NJNKGSXIPmhO.7BucI3q', 1, 'admin@gmail.com');

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
(1, 1, 1, 1, 'brg-001', 'venus', 1000000, 54),
(2, 1, 2, 1, 'brg-035', '899', 1050000, 26),
(3, 1, 1, 1, 'brg-016', 'pandora', 1200000, 34),
(4, 1, 1, 1, 'brg-017', 'oceana', 1200000, 74),
(5, 1, 1, 2, 'brg-018', 'fuji', 450000, 25),
(6, 1, 3, 2, 'brg-019', 'DT-820 QD', 550000, 35),
(7, 1, 4, 2, 'brg-020', 'SR8899', 550000, 66),
(8, 1, 1, 2, 'brg-021', 'olympus', 700000, 37),
(9, 1, 5, 2, 'brg-022', '897R', 600000, 64),
(10, 1, 1, 3, 'brg-023', 'manchester', 1500000, 12),
(11, 1, 1, 3, 'brg-024', 'liverpool', 1500000, 74),
(12, 1, 1, 3, 'brg-025', 'titanium', 1750000, 23),
(13, 1, 1, 3, 'brg-014', 'diamond', 1750000, 69),
(15, 1, 2, 3, 'brg-002', '899', 1500000, 26),
(16, 1, 2, 4, 'brg-003', '899', 2100000, 38),
(17, 1, 2, 5, 'brg-004', '899', 2400000, 15),
(18, 1, 1, 4, 'brg-005', 'champion', 2000000, 22),
(19, 1, 1, 1, 'brg-006', 'thypoon', 2500000, 43),
(20, 1, 1, 1, 'brg-007', 'HT8871UKM', 1600000, 24),
(21, 1, 1, 1, 'brg-008', 'HT8870UKM', 1500000, 19),
(22, 1, 1, 3, 'brg-009', 'hollywood', 2000000, 26),
(23, 1, 1, 6, 'brg-010', 'HT8902', 2750000, 34),
(24, 1, 5, 7, 'brg-011', '899F', 1650000, 37),
(25, 2, 3, 5, 'brg-012', 'DS-122-DW', 3300000, 25),
(26, 3, 6, 8, 'brg-040', '52UV60RG', 2750000, 16),
(27, 3, 6, 8, 'brg-039', '24D123', 1700000, 14),
(28, 3, 7, 9, 'brg-038', '24LE1701', 1500000, 12),
(29, 3, 8, 10, 'brg-037', '32D1852', 2100000, 17),
(30, 3, 7, 10, 'brg-036', 'C32BA11', 2000000, 19);

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
