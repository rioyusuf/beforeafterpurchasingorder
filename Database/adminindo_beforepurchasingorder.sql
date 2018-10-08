-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 11:42 AM
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
-- Database: `adminindo_beforepurchasingorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_detail_inquiry`
--

CREATE TABLE `table_detail_inquiry` (
  `kode_jenis` char(3) NOT NULL,
  `kode_website` char(3) NOT NULL,
  `bulan_inquiry` char(4) NOT NULL,
  `nomor_urut_inquiry` char(4) NOT NULL,
  `nomor_surat_inquiry` varchar(17) NOT NULL,
  `kode_status` char(2) NOT NULL,
  `kode_kantor_klien` char(6) NOT NULL,
  `kode_user` char(6) NOT NULL,
  `rentang_waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_detail_inquiry`
--

INSERT INTO `table_detail_inquiry` (`kode_jenis`, `kode_website`, `bulan_inquiry`, `nomor_urut_inquiry`, `nomor_surat_inquiry`, `kode_status`, `kode_kantor_klien`, `kode_user`, `rentang_waktu`) VALUES
('QUO', 'TS', '0718', '0014', 'QUO-TS-0718-0014', 'SP', 'KN0007', 'SO0003', 14),
('QUO', 'TS', '0718', '0015', 'QUO-TS-0718-0015', 'SQ', 'KN0007', 'SO0003', 0),
('QUO', 'TS', '0718', '0016', 'QUO-TS-0718-0016', 'SP', 'KN0001', 'SO0003', 0),
('QUO', 'TS', '0718', '0003', 'QUO-TS-0718-0003', 'SQ', 'KN0007', 'SO0004', 16),
('QUO', 'TS', '0718', '0003', 'QUO-TS-0718-0003', 'SP', 'KN0007', 'SO0004', 16),
('QUO', 'TS', '0718', '0006', 'QUO-TS-0718-0006', 'SQ', 'KN0004', 'SO0008', 47),
('QUO', 'TS', '0718', '0006', 'QUO-TS-0718-0006', 'SP', 'KN0004', 'SO0008', 47),
('QUO', 'TS', '0718', '0007', 'QUO-TS-0718-0007', 'SQ', 'KN0003', 'SO0006', 67),
('QUO', 'TS', '0718', '0007', 'QUO-TS-0718-0007', 'SP', 'KN0003', 'SO0006', 67);

-- --------------------------------------------------------

--
-- Table structure for table `table_industri`
--

CREATE TABLE `table_industri` (
  `nomor_industri` int(11) NOT NULL,
  `kode_industri` char(4) NOT NULL,
  `keterangan_industri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_industri`
--

INSERT INTO `table_industri` (`nomor_industri`, `kode_industri`, `keterangan_industri`) VALUES
(4, 'FARM', 'Farmasi'),
(2, 'INFR', 'Infrastruktur'),
(1, 'MANU', 'Manufaktur'),
(3, 'OTOM', 'Otomotif');

-- --------------------------------------------------------

--
-- Table structure for table `table_inquiry`
--

CREATE TABLE `table_inquiry` (
  `kode_jenis` char(3) NOT NULL,
  `keterangan_jenis` varchar(255) NOT NULL,
  `kode_website` char(3) NOT NULL,
  `keterangan_website` varchar(255) NOT NULL,
  `bulan_inquiry` char(4) NOT NULL,
  `nomor_urut_inquiry` char(4) NOT NULL,
  `nomor_surat_inquiry` varchar(17) NOT NULL,
  `tanggal_input_inquiry` date NOT NULL,
  `tanggal_update_inquiry` date NOT NULL,
  `kode_status` char(2) NOT NULL,
  `keterangan_status` varchar(255) NOT NULL,
  `kebutuhan_inquiry` text NOT NULL,
  `nilai_quote_inquiry` int(11) NOT NULL,
  `kode_kantor_klien` char(6) NOT NULL,
  `nama_kantor_klien` varchar(255) NOT NULL,
  `alamat_kantor_klien` text NOT NULL,
  `telepon_kantor_klien` char(15) NOT NULL,
  `nama_klien` varchar(255) NOT NULL,
  `telepon_klien` char(15) NOT NULL,
  `email_klien` varchar(255) NOT NULL,
  `kode_user` char(6) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `nomor_po` text NOT NULL,
  `nomor_penerimaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_inquiry`
--

INSERT INTO `table_inquiry` (`kode_jenis`, `keterangan_jenis`, `kode_website`, `keterangan_website`, `bulan_inquiry`, `nomor_urut_inquiry`, `nomor_surat_inquiry`, `tanggal_input_inquiry`, `tanggal_update_inquiry`, `kode_status`, `keterangan_status`, `kebutuhan_inquiry`, `nilai_quote_inquiry`, `kode_kantor_klien`, `nama_kantor_klien`, `alamat_kantor_klien`, `telepon_kantor_klien`, `nama_klien`, `telepon_klien`, `email_klien`, `kode_user`, `nama_user`, `nomor_po`, `nomor_penerimaan`) VALUES
('QUO', 'Penawaran', 'TS', 'Testindo', '0718', '0003', 'QUO-TS-0718-0003', '2018-07-10', '2018-07-26', 'SP', 'Sudah PO', 'Jasa Impeler ukuran 20\", motor 3,7 kw dan Rpm 1370 n/menit', 2000000, 'KN0007', 'PT. Cosmo Makmur Indonesia', 'Jl.Raya Cileungsi-Jonggol Km7, No.89 Desa Gandoang, Cileungsi 16820 Bogor - Indonesia', '021-82493145', 'T. Wahyuni', '085283022300', 't.wahyuni@cosmomakmur.com', 'SO0004', 'Fajar Ibn Darussalam', 'NGASAL', 0),
('QUO', 'Penawaran', 'TS', 'Testindo', '0718', '0004', 'QUO-TS-0718-0004', '2018-07-12', '2018-07-16', 'SQ', 'Sudah Quote', 'Kalibrasi Alat Ukur', 0, 'KN0006', 'PT TEMAN KARUNIA SEJAHTERA', 'Jl. Palem Barat No. 7  Rt. 008 / Rw. 07 Duri Kepa  Jakarta Barat - DKI Jakarta 11510', '021-29029045', '', '', 'engineering.tekase@gmail.com', 'SO0006', 'Okta', '', 0),
('QUO', 'Penawaran', 'TS', 'Testindo', '0718', '0005', 'QUO-TS-0718-0005', '2018-07-12', '2018-07-19', 'SQ', 'Sudah Quote', 'Kalibrasi Photometer', 0, 'KN0005', 'PT. Pura Barutama Unit Indostamping', 'Jl. AKBP R Agil Kusumadya 203 Kudus, Jawa Tengah', '0291-444361', '', '088806456849', 'qms_ins@kudus.puragroup.com', 'SO0006', 'Okta', '', 0),
('QUO', 'Penawaran', 'TS', 'Testindo', '0718', '0006', 'QUO-TS-0718-0006', '2018-07-12', '2018-08-28', 'SP', 'Sudah PO', 'TIME Sample Preparation Machine for Impact Tester', 2000000, 'KN0004', 'PT Intan Pertiwi Industri', 'Jl. Pembangunan I No. 91 (Jl. Daan Mogot  Km 22), Batu ceper - Tangerang', '553-1128', 'Pak Bahari T', '0816 1304 837', 'intiwi_bahari@cbn.net.id', 'SO0008', 'Zulfikri', 'NGASL/2018', 0),
('QUO', 'Penawaran', 'TS', 'Testindo', '0718', '0007', 'QUO-TS-0718-0007', '2018-07-12', '2018-09-17', 'SP', 'Sudah PO', 'Mooney viscometer', 6000000, 'KN0003', 'PT. Sentra Analitika graha', 'Jl. Garuda no 71 E kemayoran, jakpus', '021-4243030', '', '', 'siti@ptsentra-ag.co', 'SO0006', 'Okta', 'THR/01/2018', 0),
('INQ', 'Inquiry', 'TS', 'Testindo', '0718', '0008', 'INQ-TS-0718-0008', '2018-07-12', '2018-07-19', 'BQ', 'Belum Quote', 'Pengujian Crosshola sonic logging (CSL) pada Tiang bor beton diameter 1000mm', 0, 'KN0002', 'PT. Brantas Abipraya', 'Jln. DI Panjaitan Kav. 14 Cawang Jakarta Timur  -  13340', '021-851 6290', 'Desy Triana Sari', '082221507391', 'brantaswil2@gmail.com', 'SO0003', 'Faoji', '', 0),
('QUO', 'Penawaran', 'TS', 'Testindo', '0718', '0009', 'QUO-TS-0718-0009', '2018-07-19', '2018-07-26', 'SP', 'Sudah PO', 'Kalibrasi', 5000000, 'KN0003', 'PT. Sentra Analitika graha', 'Jl. Garuda no 71 E kemayoran, jakpus', '021-4243030', 'Haikal', '-', 'haikal@testindo.com', 'SO0006', 'Okta', 'KURKUR', 0),
('QUO', 'Penawaran', 'TS', 'Testindo', '0718', '0010', 'QUO-TS-0718-0010', '2018-07-19', '2018-07-19', 'SP', 'Sudah PO', 'asdasd', 1000000, 'KN0001', 'PT Taharica', 'Jl. Radin Inten II No. 62 Duren Sawit Jakarta Timur', '021-8690 6777', 'asdasd', '123', 'asd@asd', 'SO0007', 'Richo', 'asd', 0),
('QUO', 'Penawaran', 'TS', 'Testindo', '0718', '0011', 'QUO-TS-0718-0011', '2018-07-19', '2018-07-19', 'SP', 'Sudah PO', 'qwer', 2000000, 'KN0002', 'PT. Brantas Abipraya', 'Jln. DI Panjaitan Kav. 14 Cawang Jakarta Timur  -  13340', '021-851 6290', 'kurkur', '09', 'kurjur@asdaf', 'SO0004', 'Fajar Ibn Darussalam', 'po09', 0),
('QUO', 'Penawaran', 'TS', 'Testindo', '0718', '0012', 'QUO-TS-0718-0012', '2018-07-19', '2018-07-19', 'SP', 'Sudah PO', 'Kalibrasi Flow Meter', 2000000, 'KN0001', 'PT Taharica', 'Jl. Radin Inten II No. 62 Duren Sawit Jakarta Timur', '021-8690 6777', 'Pak Didik', '021', 'didik@binainsani.ac.id', 'SO0003', 'Faoji', 'BI-2001', 0),
('QUO', 'Penawaran', 'TS', 'Testindo', '0718', '0013', 'QUO-TS-0718-0013', '2018-07-26', '2018-07-26', 'SP', 'Sudah PO', 'Kalibrasi HMP', 2000000, 'KN0001', 'PT Taharica', 'Jl. Radin Inten II No. 62 Duren Sawit Jakarta Timur', '021-8690 6777', 'Mas Agung', '021', 'it105@testindo.com', 'SO0006', 'Okta', 'THC/07/2018/9000', 0),
('QUO', 'Penawaran', 'TS', 'Testindo', '0718', '0014', 'QUO-TS-0718-0014', '2018-07-12', '2018-07-26', 'SP', 'Sudah PO', 'AS', 1000000, 'KN0007', 'PT. Cosmo Makmur Indonesia', 'Jl.Raya Cileungsi-Jonggol Km7, No.89 Desa Gandoang, Cileungsi 16820 Bogor - Indonesia', '021-82493145', 'asd', '123', 'asd@asd', 'SO0003', 'Faoji', 'asasd', 0),
('QUO', 'Penawaran', 'TS', 'Testindo', '0718', '0015', 'QUO-TS-0718-0015', '2018-07-26', '2018-07-26', 'SQ', 'Sudah Quote', 'asd', 123123, 'KN0007', 'PT. Cosmo Makmur Indonesia', 'Jl.Raya Cileungsi-Jonggol Km7, No.89 Desa Gandoang, Cileungsi 16820 Bogor - Indonesia', '021-82493145', 'asd', '123', 'asd@asd', 'SO0003', 'Faoji', '', 0),
('QUO', 'Penawaran', 'TS', 'Testindo', '0718', '0016', 'QUO-TS-0718-0016', '2018-07-26', '2018-07-26', 'SP', 'Sudah PO', 'HEHE', 2000000, 'KN0001', 'PT Taharica', 'Jl. Radin Inten II No. 62 Duren Sawit Jakarta Timur', '021-8690 6777', 'Koko', '021', 'koko@taharica.com', 'SO0003', 'Faoji', 'HEHE/2018', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_jenis`
--

CREATE TABLE `table_jenis` (
  `nomor_jenis` int(11) NOT NULL,
  `kode_jenis` char(3) NOT NULL,
  `keterangan_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_jenis`
--

INSERT INTO `table_jenis` (`nomor_jenis`, `kode_jenis`, `keterangan_jenis`) VALUES
(8, 'INQ', 'Inquiry'),
(6, 'QUO', 'Penawaran'),
(9, 'SDK', 'Surat Pendukung');

-- --------------------------------------------------------

--
-- Table structure for table `table_klien`
--

CREATE TABLE `table_klien` (
  `nomor_klien` int(11) NOT NULL,
  `kode_kantor_klien` char(6) NOT NULL,
  `nama_kantor_klien` varchar(255) NOT NULL,
  `alamat_kantor_klien` text NOT NULL,
  `telepon_kantor_klien` char(15) NOT NULL,
  `kode_industri` char(4) DEFAULT NULL,
  `keterangan_industri` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_klien`
--

INSERT INTO `table_klien` (`nomor_klien`, `kode_kantor_klien`, `nama_kantor_klien`, `alamat_kantor_klien`, `telepon_kantor_klien`, `kode_industri`, `keterangan_industri`) VALUES
(1, 'KN0001', 'PT Taharica', 'Jl. Radin Inten II No. 62 Duren Sawit Jakarta Timur', '021-8690 6777', 'OTOM', 'Otomotif'),
(2, 'KN0002', 'PT. Brantas Abipraya', 'Jln. DI Panjaitan Kav. 14 Cawang Jakarta Timur  -  13340', '021-851 6290', 'INFR', 'Infrastruktur'),
(3, 'KN0003', 'PT. Sentra Analitika graha', 'Jl. Garuda no 71 E kemayoran, jakpus', '021-4243030', 'MANU', 'Manufaktur'),
(4, 'KN0004', 'PT Intan Pertiwi Industri', 'Jl. Pembangunan I No. 91 (Jl. Daan Mogot  Km 22), Batu ceper - Tangerang', '553-1128', 'OTOM', 'Otomotif'),
(5, 'KN0005', 'PT. Pura Barutama Unit Indostamping', 'Jl. AKBP R Agil Kusumadya 203 Kudus, Jawa Tengah', '0291-444361', 'FARM', 'Farmasi'),
(6, 'KN0006', 'PT TEMAN KARUNIA SEJAHTERA', 'Jl. Palem Barat No. 7  Rt. 008 / Rw. 07 Duri Kepa  Jakarta Barat - DKI Jakarta 11510', '021-29029045', 'FARM', 'Farmasi'),
(11, 'KN0007', 'PT. Cosmo Makmur Indonesia', 'Jl.Raya Cileungsi-Jonggol Km7, No.89 Desa Gandoang, Cileungsi 16820 Bogor - Indonesia', '021-82493145', 'OTOM', 'Otomotif');

-- --------------------------------------------------------

--
-- Table structure for table `table_prog`
--

CREATE TABLE `table_prog` (
  `nomor_prog` int(11) NOT NULL,
  `kode_prog` char(2) NOT NULL,
  `keterangan_prog` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_prog`
--

INSERT INTO `table_prog` (`nomor_prog`, `kode_prog`, `keterangan_prog`) VALUES
(2, 'FD', 'Finished'),
(1, 'OP', 'On Progress'),
(4, 'PD', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `table_purchasing_order`
--

CREATE TABLE `table_purchasing_order` (
  `nomor` int(11) NOT NULL,
  `nomor_urut_inquiry` char(4) NOT NULL,
  `nomor_surat_inquiry` varchar(17) NOT NULL,
  `tanggal_update_inquiry` date NOT NULL,
  `tanggal_deadline` date NOT NULL,
  `kode_kantor_klien` char(6) NOT NULL,
  `nama_kantor_klien` varchar(255) NOT NULL,
  `kode_status` char(2) NOT NULL,
  `keterangan_status` varchar(255) NOT NULL,
  `kode_user` char(6) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `update_purchasing_order` text NOT NULL,
  `kode_status_purchasing_order` char(2) NOT NULL,
  `keterangan_status_purchasing_order` varchar(255) NOT NULL,
  `nomor_po` varchar(255) NOT NULL,
  `nilai_quote_inquiry` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `kode_prog` char(2) NOT NULL,
  `keterangan_prog` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_purchasing_order`
--

INSERT INTO `table_purchasing_order` (`nomor`, `nomor_urut_inquiry`, `nomor_surat_inquiry`, `tanggal_update_inquiry`, `tanggal_deadline`, `kode_kantor_klien`, `nama_kantor_klien`, `kode_status`, `keterangan_status`, `kode_user`, `nama_user`, `update_purchasing_order`, `kode_status_purchasing_order`, `keterangan_status_purchasing_order`, `nomor_po`, `nilai_quote_inquiry`, `discount`, `kode_prog`, `keterangan_prog`) VALUES
(11, '0013', 'QUO-TS-0718-0013', '2018-07-26', '2018-07-31', 'KN0001', 'PT Taharica', 'SP', 'Sudah PO', 'SO0006', 'Okta', 'PT Taharica sudah membayar, proses pengiriman barang akan dimulai besok', 'BL', 'Bill', 'THC/07/2018/9000', 2000000, 0, 'OP', 'On Progress'),
(24, '0006', 'QUO-TS-0718-0006', '2018-08-28', '2018-09-13', 'KN0004', 'PT Intan Pertiwi Industri', 'SP', 'Sudah PO', 'SO0008', 'Zulfikri', '', 'PO', 'Purchasing Order', 'NGASL/2018', 2000000, 0, 'OP', 'On Progress'),
(25, '0007', 'QUO-TS-0718-0007', '2018-09-17', '0000-00-00', 'KN0003', 'PT. Sentra Analitika graha', 'SQ', 'Sudah Quote', 'SO0006', 'Okta', '', 'PO', 'Purchasing Order', '', 6000000, 0, 'OP', 'On Progress');

-- --------------------------------------------------------

--
-- Table structure for table `table_status`
--

CREATE TABLE `table_status` (
  `nomor_status` int(11) NOT NULL,
  `kode_status` char(2) NOT NULL,
  `keterangan_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_status`
--

INSERT INTO `table_status` (`nomor_status`, `kode_status`, `keterangan_status`) VALUES
(1, 'BQ', 'Belum Quote'),
(3, 'GL', 'Gagal'),
(4, 'SP', 'Sudah PO'),
(2, 'SQ', 'Sudah Quote');

-- --------------------------------------------------------

--
-- Table structure for table `table_status_purchasing_order`
--

CREATE TABLE `table_status_purchasing_order` (
  `nomor_status` int(11) NOT NULL,
  `kode_status_purchasing_order` char(2) NOT NULL,
  `keterangan_status_purchasing_order` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_status_purchasing_order`
--

INSERT INTO `table_status_purchasing_order` (`nomor_status`, `kode_status_purchasing_order`, `keterangan_status_purchasing_order`) VALUES
(3, 'BL', 'Bill'),
(2, 'CN', 'Confirm'),
(1, 'PO', 'Purchasing Order'),
(4, 'SD', 'Send'),
(5, 'VT', 'Visit');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `nomor_user` int(11) NOT NULL,
  `kode_user` char(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `level` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`nomor_user`, `kode_user`, `username`, `password`, `nama_user`, `level`) VALUES
(1, 'SO0001', 'admin', 'testindo', 'administrator', 'admin'),
(2, 'SO0002', 'anto', 'anto', 'Anto Rudianto', 'user'),
(3, 'SO0003', 'faoji', 'faoji', 'Faoji', 'user'),
(4, 'SO0004', 'Fajar', 'fajar', 'Fajar Ibn Darussalam', 'user'),
(5, 'SO0005', 'mashudi', 'mashudi', 'Mashudi Alanwary', 'user'),
(6, 'SO0006', 'Okta', 'okta', 'Okta', 'user'),
(7, 'SO0007', 'richo', 'richo', 'Richo', 'user'),
(8, 'SO0008', 'zulfikri', 'zulfikri', 'Zulfikri', 'user'),
(9, 'SO0009', 'zulmailis', 'zulmailis', 'Zulmailis', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `table_website`
--

CREATE TABLE `table_website` (
  `nomor_website` int(11) NOT NULL,
  `kode_website` char(3) NOT NULL,
  `keterangan_website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_website`
--

INSERT INTO `table_website` (`nomor_website`, `kode_website`, `keterangan_website`) VALUES
(8, 'BM', 'Balancingmachineindonesia'),
(9, 'CM', 'Cncmachineindonesia'),
(6, 'DI', 'Dynamometerindonesia'),
(5, 'DL', 'Dataloggerindonesia'),
(7, 'NT', 'Ndt-indonesia'),
(4, 'SN', 'Sensorindo'),
(3, 'TI', 'Testingindonesia'),
(2, 'TS', 'Testindo'),
(1, 'VB', 'Vibrasindo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_detail_inquiry`
--
ALTER TABLE `table_detail_inquiry`
  ADD KEY `table_detail_inquiry_ibfk_1` (`kode_jenis`),
  ADD KEY `table_detail_inquiry_ibfk_2` (`kode_website`),
  ADD KEY `table_detail_inquiry_ibfk_3` (`kode_kantor_klien`),
  ADD KEY `table_detail_inquiry_ibfk_4` (`kode_user`),
  ADD KEY `nomor_urut_inquiry` (`nomor_urut_inquiry`),
  ADD KEY `kode_status` (`kode_status`);

--
-- Indexes for table `table_industri`
--
ALTER TABLE `table_industri`
  ADD PRIMARY KEY (`kode_industri`),
  ADD UNIQUE KEY `nomor_industri` (`nomor_industri`);

--
-- Indexes for table `table_inquiry`
--
ALTER TABLE `table_inquiry`
  ADD PRIMARY KEY (`nomor_urut_inquiry`),
  ADD KEY `kode_jenis` (`kode_jenis`),
  ADD KEY `kode_website` (`kode_website`),
  ADD KEY `kode_kantor_klien` (`kode_kantor_klien`),
  ADD KEY `kode_user` (`kode_user`),
  ADD KEY `kode_status` (`kode_status`);

--
-- Indexes for table `table_jenis`
--
ALTER TABLE `table_jenis`
  ADD PRIMARY KEY (`kode_jenis`),
  ADD UNIQUE KEY `nomor_jenis` (`nomor_jenis`);

--
-- Indexes for table `table_klien`
--
ALTER TABLE `table_klien`
  ADD PRIMARY KEY (`kode_kantor_klien`),
  ADD UNIQUE KEY `nomor_klien` (`nomor_klien`),
  ADD KEY `kode_industri` (`kode_industri`);

--
-- Indexes for table `table_prog`
--
ALTER TABLE `table_prog`
  ADD PRIMARY KEY (`kode_prog`),
  ADD UNIQUE KEY `nomor_prog` (`nomor_prog`);

--
-- Indexes for table `table_purchasing_order`
--
ALTER TABLE `table_purchasing_order`
  ADD PRIMARY KEY (`nomor`),
  ADD KEY `kode_user` (`kode_user`),
  ADD KEY `nomor_urut_inquiry` (`nomor_urut_inquiry`),
  ADD KEY `kode_status` (`kode_status`),
  ADD KEY `kode_kantor_klien` (`kode_kantor_klien`),
  ADD KEY `kode_status_purchasing_order` (`kode_status_purchasing_order`),
  ADD KEY `kode_prog` (`kode_prog`);

--
-- Indexes for table `table_status`
--
ALTER TABLE `table_status`
  ADD PRIMARY KEY (`kode_status`),
  ADD UNIQUE KEY `nomor_status` (`nomor_status`);

--
-- Indexes for table `table_status_purchasing_order`
--
ALTER TABLE `table_status_purchasing_order`
  ADD PRIMARY KEY (`kode_status_purchasing_order`),
  ADD UNIQUE KEY `nomor_status` (`nomor_status`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`kode_user`),
  ADD UNIQUE KEY `nomor_user` (`nomor_user`);

--
-- Indexes for table `table_website`
--
ALTER TABLE `table_website`
  ADD PRIMARY KEY (`kode_website`),
  ADD UNIQUE KEY `nomor_website` (`nomor_website`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_industri`
--
ALTER TABLE `table_industri`
  MODIFY `nomor_industri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_jenis`
--
ALTER TABLE `table_jenis`
  MODIFY `nomor_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table_klien`
--
ALTER TABLE `table_klien`
  MODIFY `nomor_klien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table_prog`
--
ALTER TABLE `table_prog`
  MODIFY `nomor_prog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_purchasing_order`
--
ALTER TABLE `table_purchasing_order`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `table_status`
--
ALTER TABLE `table_status`
  MODIFY `nomor_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_status_purchasing_order`
--
ALTER TABLE `table_status_purchasing_order`
  MODIFY `nomor_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `nomor_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table_website`
--
ALTER TABLE `table_website`
  MODIFY `nomor_website` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_detail_inquiry`
--
ALTER TABLE `table_detail_inquiry`
  ADD CONSTRAINT `table_detail_inquiry_ibfk_1` FOREIGN KEY (`kode_jenis`) REFERENCES `table_jenis` (`kode_jenis`),
  ADD CONSTRAINT `table_detail_inquiry_ibfk_2` FOREIGN KEY (`kode_website`) REFERENCES `table_website` (`kode_website`),
  ADD CONSTRAINT `table_detail_inquiry_ibfk_3` FOREIGN KEY (`kode_kantor_klien`) REFERENCES `table_klien` (`kode_kantor_klien`),
  ADD CONSTRAINT `table_detail_inquiry_ibfk_4` FOREIGN KEY (`kode_user`) REFERENCES `table_user` (`kode_user`),
  ADD CONSTRAINT `table_detail_inquiry_ibfk_5` FOREIGN KEY (`nomor_urut_inquiry`) REFERENCES `table_inquiry` (`nomor_urut_inquiry`),
  ADD CONSTRAINT `table_detail_inquiry_ibfk_6` FOREIGN KEY (`kode_status`) REFERENCES `table_status` (`kode_status`);

--
-- Constraints for table `table_inquiry`
--
ALTER TABLE `table_inquiry`
  ADD CONSTRAINT `table_inquiry_ibfk_1` FOREIGN KEY (`kode_jenis`) REFERENCES `table_jenis` (`kode_jenis`),
  ADD CONSTRAINT `table_inquiry_ibfk_2` FOREIGN KEY (`kode_website`) REFERENCES `table_website` (`kode_website`),
  ADD CONSTRAINT `table_inquiry_ibfk_3` FOREIGN KEY (`kode_kantor_klien`) REFERENCES `table_klien` (`kode_kantor_klien`),
  ADD CONSTRAINT `table_inquiry_ibfk_4` FOREIGN KEY (`kode_user`) REFERENCES `table_user` (`kode_user`),
  ADD CONSTRAINT `table_inquiry_ibfk_5` FOREIGN KEY (`kode_status`) REFERENCES `table_status` (`kode_status`);

--
-- Constraints for table `table_klien`
--
ALTER TABLE `table_klien`
  ADD CONSTRAINT `table_klien_ibfk_1` FOREIGN KEY (`kode_industri`) REFERENCES `table_industri` (`kode_industri`);

--
-- Constraints for table `table_purchasing_order`
--
ALTER TABLE `table_purchasing_order`
  ADD CONSTRAINT `table_purchasing_order_ibfk_2` FOREIGN KEY (`kode_user`) REFERENCES `table_user` (`kode_user`),
  ADD CONSTRAINT `table_purchasing_order_ibfk_3` FOREIGN KEY (`nomor_urut_inquiry`) REFERENCES `table_inquiry` (`nomor_urut_inquiry`),
  ADD CONSTRAINT `table_purchasing_order_ibfk_4` FOREIGN KEY (`kode_status`) REFERENCES `table_status` (`kode_status`),
  ADD CONSTRAINT `table_purchasing_order_ibfk_5` FOREIGN KEY (`kode_kantor_klien`) REFERENCES `table_klien` (`kode_kantor_klien`),
  ADD CONSTRAINT `table_purchasing_order_ibfk_6` FOREIGN KEY (`kode_status_purchasing_order`) REFERENCES `table_status_purchasing_order` (`kode_status_purchasing_order`),
  ADD CONSTRAINT `table_purchasing_order_ibfk_7` FOREIGN KEY (`kode_prog`) REFERENCES `table_prog` (`kode_prog`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
