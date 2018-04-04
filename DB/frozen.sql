-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 08:24 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `frozen`
--

-- --------------------------------------------------------

--
-- Table structure for table `asumaneh`
--

CREATE TABLE IF NOT EXISTS `asumaneh` (
  `kode` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `asumaneh2`
--

CREATE TABLE IF NOT EXISTS `asumaneh2` (
  `nama` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asumaneh2`
--

INSERT INTO `asumaneh2` (`nama`, `harga`, `jumlah`) VALUES
('201803230001', 10000, 0),
('201803230001', 10000, 0),
('201803230001', 60000, 0),
('201803230001', 100, 0),
('201803230002', 100, 0),
('201803230002', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `det_penjualan`
--

CREATE TABLE IF NOT EXISTS `det_penjualan` (
  `kode_penjualan` varchar(20) NOT NULL,
  `Nama_Item` varchar(20) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `det_penjualan`
--
DELIMITER $$
CREATE TRIGGER `kurang_stok_penjualan` AFTER INSERT ON `det_penjualan`
 FOR EACH ROW BEGIN
UPDATE item set Stok=Stok-new.Jumlah WHERE item.Nama_Item=det_penjualan.Nama_Item;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `gatel`
--

CREATE TABLE IF NOT EXISTS `gatel` (
  `nama` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gatel2`
--

CREATE TABLE IF NOT EXISTS `gatel2` (
  `nama` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `hargabeli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gatel2`
--

INSERT INTO `gatel2` (`nama`, `jumlah`, `hargabeli`) VALUES
('cireng ori brecxele', 20, 90);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `Nama_Item` varchar(20) NOT NULL,
  `Stok` int(11) NOT NULL,
  `Kemasan` varchar(5) NOT NULL,
  `Harga_Jual_Ecer` int(11) NOT NULL,
  `Harga_Jual_Grosir` int(11) NOT NULL,
  `Jum_Grosir` int(11) NOT NULL,
  `disk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Nama_Item`, `Stok`, `Kemasan`, `Harga_Jual_Ecer`, `Harga_Jual_Grosir`, `Jum_Grosir`, `disk`) VALUES
('chicken katsu gold s', 11, '1', 32500, 32500, 10, 1),
('chicken pokpok gold ', 10, '1', 31500, 31500, 0, 1),
('cireng keju brecxele', 9, '20', 12500, 11600, 10, 0),
('cireng ori brecxele', 101, '20', 12500, 11600, 10, 0),
('cireng tenggiri khar', 9, '20', 12500, 11600, 10, 0),
('cireng udang brecxel', 8, '20', 12500, 11600, 10, 0),
('crispy crunch fiesta', 10, '1', 37000, 37000, 0, 1),
('ebi furai gi-gi 1kg', 2, '50', 67000, 67000, 0, 1),
('ebi furai gi-gi 200g', 10, '10', 15000, 15000, 0, 1),
('ekado telur puyuh gi', 10, '20', 23000, 23000, 0, 1),
('kebab jumbo mas bro', 10, '5', 21000, 20000, 10, 1),
('kebab mas brow', 10, '5', 18000, 18000, 0, 1),
('maryam mas brow', 10, '5', 13500, 13500, 0, 1),
('scallop ikan minaku ', 10, '1', 18000, 18000, 0, 1),
('siomay ayam keju uma', 10, '15', 18000, 18000, 0, 1),
('siomay ayam umami ', 10, '15', 17500, 17500, 0, 1),
('siomay ayam umami 80', 10, '60', 35000, 35000, 0, 1),
('siomay veggie umami', 10, '15', 18000, 18000, 0, 1),
('spicy wings gold sta', 9, '1', 37500, 37500, 0, 1),
('tempura ikan', 10, '', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `kode_pembelian` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `supplier` varchar(20) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`kode_pembelian`, `tanggal`, `supplier`, `total`) VALUES
('201803230001', '2018-03-23', '', 80100),
('201803230002', '2018-03-23', '', 200),
('201803230003', '2018-03-23', '', 0),
('201803230004', '2018-03-23', '', 0),
('201803230005', '2018-03-23', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `kode_penjualan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `Nama_Customer` varchar(20) NOT NULL,
  `tot_belanja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`kode_penjualan`, `tanggal`, `Nama_Customer`, `tot_belanja`) VALUES
('201801290001', '2018-01-29', '', 37500),
('201801290002', '2018-01-29', '', 79500),
('201801290003', '2018-01-29', '', 402000),
('201803210001', '2018-03-21', '', 37500),
('201803230001', '2018-03-23', '', 0),
('201803230002', '2018-03-23', '', 79500),
('201803230003', '2018-03-23', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `det_penjualan`
--
ALTER TABLE `det_penjualan`
  ADD KEY `Nama_Item` (`Nama_Item`), ADD KEY `kode_penjualan` (`kode_penjualan`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Nama_Item`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`kode_pembelian`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`kode_penjualan`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `det_penjualan`
--
ALTER TABLE `det_penjualan`
ADD CONSTRAINT `det_penjualan_ibfk_1` FOREIGN KEY (`Nama_Item`) REFERENCES `item` (`Nama_Item`),
ADD CONSTRAINT `det_penjualan_ibfk_2` FOREIGN KEY (`kode_penjualan`) REFERENCES `penjualan` (`kode_penjualan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
