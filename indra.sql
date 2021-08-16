-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 08:42 AM
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
  `id_merk` varchar(4) NOT NULL,
  `merk` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id_merk`, `merk`) VALUES
('m01', 'asatron'),
('m02', 'noise'),
('m03', 'DAT'),
('m04', 'rinrei'),
('m05', 'GMC'),
('m06', 'polytron'),
('m07', 'sharp LED'),
('m08', 'polytron LED'),
('m09', 'aqua'),
('m10', 'TOA'),
('m11', 'JMK'),
('m12', 'targa'),
('m13', 'sharp');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(4) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `jenis`) VALUES
('P01', 'speaker wireless'),
('p02', 'speaker aktif'),
('p03', 'TV'),
('p04', 'mesin cuci'),
('p05', 'mic');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id_size` varchar(4) NOT NULL,
  `size` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id_size`, `size`) VALUES
('si01', '12 inch'),
('si02', '8 inch'),
('si03', '15 inch'),
('si04', '2X10 inch'),
('si05', '2 x 12 inch'),
('si06', '18 inch'),
('si07', '2 x 6 inch'),
('si08', '21 inch'),
('si09', '24 inch'),
('si10', '32 inch'),
('si11', '2 tabung 7 kg'),
('si12', '2 tabung 8 kg'),
('si13', '2 tabung 6 kg'),
('si14', '-');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id_stok` varchar(4) NOT NULL,
  `id_produk` varchar(4) NOT NULL,
  `id_merk` varchar(4) NOT NULL,
  `id_size` varchar(4) NOT NULL,
  `type` varchar(10) NOT NULL,
  `harga` int(15) NOT NULL,
  `jumlah_stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id_stok`, `id_produk`, `id_merk`, `id_size`, `type`, `harga`, `jumlah_stok`) VALUES
('st01', 'P01', 'm01', 'si01', 'venus', 1000000, 54),
('st02', 'P01', 'm02', 'si01', '899', 1050000, 26),
('st03', 'P01', 'm01', 'si01', 'pandora', 1200000, 34),
('st04', 'P01', 'm01', 'si01', 'oceana', 1200000, 74),
('st05', 'P01', 'm01', 'si02', 'fuji', 450000, 25),
('st06', 'P01', 'm03', 'si02', 'DT-820 QD', 550000, 35),
('st07', 'P01', 'm04', 'si02', 'SR8899', 550000, 66),
('st08', 'P01', 'm01', 'si02', 'olympus', 700000, 37),
('st09', 'P01', 'm05', 'si02', '897R', 600000, 64),
('st10', 'P01', 'm01', 'si03', 'manchester', 1500000, 12),
('st11', 'P01', 'm01', 'si03', 'liverpool', 1500000, 74),
('st12', 'P01', 'm01', 'si03', 'titanium', 1750000, 23),
('st13', 'P01', 'm01', 'si03', 'diamond', 1750000, 69),
('st14', 'P01', 'm04', 'si01', 'SR8899', 1000000, 12),
('st15', 'P01', 'm02', 'si03', '899', 1500000, 26),
('st16', 'P01', 'm02', 'si04', '899', 2100000, 38),
('st17', 'P01', 'm02', 'si05', '899', 2400000, 15),
('st18', 'P01', 'm01', 'si04', 'champion', 2000000, 22),
('st19', 'P01', 'm01', 'si01', 'thypoon', 2500000, 43),
('st20', 'P01', 'm01', 'si01', 'HT8871UKM', 1600000, 24),
('st21', 'P01', 'm01', 'si01', 'HT8870UKM', 1500000, 19),
('st22', 'P01', 'm01', 'si03', 'hollywood', 2000000, 26),
('st23', 'P01', 'm01', 'si06', 'HT8902', 2750000, 34),
('st24', 'P01', 'm05', 'si07', '899F', 1650000, 37),
('st25', 'p02', 'm03', 'si05', 'DS-122-DW', 3300000, 25),
('st26', 'P03', 'm06', 'si08', '52UV60RG', 2750000, 16),
('st27', 'P03', 'm06', 'si08', '24D123', 1700000, 14),
('st28', 'P03', 'm07', 'si09', '24LE1701', 1500000, 12),
('st29', 'P03', 'm08', 'si10', '32D1852', 2100000, 17),
('st30', 'p03', 'm07', 'si10', 'C32BA11', 2000000, 19),
('st31', 'p04', 'm09', 'si11', 'QW781XT', 1300000, 12),
('st32', 'p04', 'm09', 'si12', '851XT', 1400000, 12),
('st33', 'p04', 'm06', 'si11', '7363', 1300000, 18),
('st34', 'p04', 'm06', 'si12', '8363', 1500000, 17),
('st35', 'p04', 'm13', 'si13', '65MW', 1350000, 12),
('st36', 'p05', 'm10', 'si14', '260', 225000, 73),
('st37', 'p05', 'm10', 'si14', '270', 300000, 101),
('st38', 'p05', 'm11', 'si14', 'beta58', 200000, 25),
('st39', 'p05', 'm11', 'si14', 'JK813', 150000, 20),
('st40', 'p05', 'm12', 'si14', 'DM1300', 75000, 36),
('st41', 'p05', 'm02', 'si14', 'SN909', 225000, 56);

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
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_size`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_stok`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_merk` (`id_merk`),
  ADD KEY `id_size` (`id_size`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `stok_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stok_ibfk_2` FOREIGN KEY (`id_merk`) REFERENCES `merk` (`id_merk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stok_ibfk_3` FOREIGN KEY (`id_size`) REFERENCES `size` (`id_size`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
