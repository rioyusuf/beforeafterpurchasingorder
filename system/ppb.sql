-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 07:28 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppb`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_po` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_po`) VALUES
('1', 'Spidol', '100'),
('2', 'Pencil', '1000'),
('3', 'Bulpen', '2000'),
('4', 'Laptop', '4000'),
('5', 'saragam', '25000'),
('6', 'Kertas F4', '58000'),
('7', 'Plakban Bening merk Daimaru', '23000');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_dept` varchar(20) NOT NULL,
  `NamaDepartemen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_dept`, `NamaDepartemen`) VALUES
('1', 'Keuangan'),
('2', 'Sales'),
('3', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `detail_permintaan`
--

CREATE TABLE `detail_permintaan` (
  `no_permintaan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty_permintaan` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nik` varchar(20) NOT NULL,
  `nama_karyawan` varchar(20) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama_karyawan`, `no_tlp`, `email`) VALUES
('1', 'kurkurs', '021', 'kurkur@kurkur');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_order`
--

CREATE TABLE `pemesanan_order` (
  `no_order` varchar(20) NOT NULL,
  `date_order` date NOT NULL,
  `id_barang` varchar(50) NOT NULL,
  `qty_order` varchar(20) NOT NULL,
  `id_satuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan_order`
--

INSERT INTO `pemesanan_order` (`no_order`, `date_order`, `id_barang`, `qty_order`, `id_satuan`) VALUES
('1', '0000-00-00', '1', '10', '2'),
('2', '2018-10-01', '2', '100', '2'),
('3', '2018-10-04', '3', '100', '2'),
('4', '2018-10-04', '3', '12', '1'),
('5', '2018-10-04', '1', '12', '1'),
('6', '2018-10-04', '4', '10', '1');

-- --------------------------------------------------------

--
-- Table structure for table `penyerahan_barang`
--

CREATE TABLE `penyerahan_barang` (
  `id_penyerahan` varchar(20) NOT NULL,
  `date_order` date NOT NULL,
  `id_barang` varchar(50) NOT NULL,
  `date_penyerahanorder` varchar(20) NOT NULL,
  `no_order` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyerahan_barang`
--

INSERT INTO `penyerahan_barang` (`id_penyerahan`, `date_order`, `id_barang`, `date_penyerahanorder`, `no_order`) VALUES
('1', '2018-09-13', '2', '2018-09-18', '2'),
('2', '2018-10-01', '1', '2018-10-01', '1'),
('3', '2018-10-01', '2', '2018-10-04', '2'),
('4', '2018-10-04', '1', '2018-10-04', '5'),
('5', '2018-10-01', '2', '2018-10-04', '2');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `id_permintaan` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `id_dept` varchar(50) NOT NULL,
  `Nik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`id_permintaan`, `Date`, `id_dept`, `Nik`) VALUES
('1', '2018-09-06', 'Sales', '1');

-- --------------------------------------------------------

--
-- Table structure for table `satuan_barang`
--

CREATE TABLE `satuan_barang` (
  `id_satuan` varchar(20) NOT NULL,
  `nama_satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan_barang`
--

INSERT INTO `satuan_barang` (`id_satuan`, `nama_satuan`) VALUES
('1', 'PCS'),
('2', 'PAK');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_Supplier` varchar(20) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_Supplier`, `nama_supplier`, `alamat`, `no_tlp`, `email`) VALUES
('1', 'PT Snowman', 'Jl. Snow', '021-123456', 'sales@snowman.com'),
('2', 'PT Faber Castle', 'Jl. Faber', '021-123456', 'sales@fabercastle.co'),
('3', 'PT Standart', 'Jl. Standart', '021-123456', 'sales@standart.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'susi', 'susi', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_dept`);

--
-- Indexes for table `detail_permintaan`
--
ALTER TABLE `detail_permintaan`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pemesanan_order`
--
ALTER TABLE `pemesanan_order`
  ADD PRIMARY KEY (`no_order`);

--
-- Indexes for table `penyerahan_barang`
--
ALTER TABLE `penyerahan_barang`
  ADD PRIMARY KEY (`id_penyerahan`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indexes for table `satuan_barang`
--
ALTER TABLE `satuan_barang`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_Supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
