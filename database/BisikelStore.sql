-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2020 at 03:20 AM
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
-- Database: `BisikelStore`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alamat`
--

CREATE TABLE `tbl_alamat` (
  `id_alamat` int(11) NOT NULL,
  `is_primary` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `id_user` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_alamat`
--

INSERT INTO `tbl_alamat` (`id_alamat`, `is_primary`, `alamat`, `id_user`) VALUES
(1, 1, 'langen, rt 01/01, muktisari, langensari, kota banjar, jawa barat', 5),
(2, 1, 'langen, rt 01/01, muktisari, langensari, kota banjar, jawa barat', 6),
(5, 1, 'langen, rt 01/01, muktisari, langensari, kota banjar, jawa barat, Indonesia', 3),
(6, 1, 'jl.pengairan no.2 waringinsari langensari kota banjar', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id_brand` bigint(20) NOT NULL,
  `brand` varchar(191) NOT NULL,
  `logo_brand` varchar(191) NOT NULL DEFAULT 'default_img.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`id_brand`, `brand`, `logo_brand`) VALUES
(1, 'GT', 'pegasus.png'),
(7, ' Santa Cruz', 'default_img.png'),
(10, 'Pacific', 'default_img.png'),
(11, 'Polygon', 'default_img.png'),
(12, 'United', 'default_img.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brg`
--

CREATE TABLE `tbl_brg` (
  `id_brg` bigint(20) NOT NULL,
  `nama_brg` varchar(191) NOT NULL DEFAULT '',
  `tahun_keluar` varchar(4) NOT NULL,
  `harga_brg` varchar(25) NOT NULL DEFAULT '',
  `diskon` varchar(3) NOT NULL,
  `harga_after_diskon` varchar(191) NOT NULL,
  `stok` varchar(191) NOT NULL DEFAULT '0',
  `photo_brg` varchar(255) DEFAULT 'default.png',
  `deskripsi` text DEFAULT NULL,
  `id_status` int(1) DEFAULT NULL COMMENT '1 = ada.2 = kosong',
  `id_brand` int(11) DEFAULT NULL,
  `id_kategori_brg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_brg`
--

INSERT INTO `tbl_brg` (`id_brg`, `nama_brg`, `tahun_keluar`, `harga_brg`, `diskon`, `harga_after_diskon`, `stok`, `photo_brg`, `deskripsi`, `id_status`, `id_brand`, `id_kategori_brg`) VALUES
(4, 'Piringan Sepeda', '2001', '150000', '50', '75000', '32', 'bc2.jpeg', 'baru baru baru', 1, 4, 2),
(11, 'poligon', '1900', '20000000', '80', '4000000', '10', 'bc34.jpeg', 'belii', 1, 0, 0),
(12, 'Santacruz bycycle', '2020', '3000000', '', '', '3', 'banner-img1.png', 'New for Downhill', 1, 7, 1),
(13, 'United Venus 1.00', '2020', '2930000', '', '', '10', 'Sepeda-United-Venus-1-26-new-1.jpg', 'Baru', 1, 12, 1),
(14, 'Rantai United Premium', '2001', '120000', '', '', '5', 'bc51.jpeg', '', 1, 0, 0),
(15, 'VENTURA XM 3.0 12″', '2020', '1050000', '', '', '5', 'ventura_xm.jpg', 'VENTURA XM 3.0 Series didesain secara khusus untuk anak-anak, dengan grafis menarik dan akan menambak si kecil lebih percaya diri.', 1, 0, 1),
(16, 'Sandle sepeda United Invernus', '2020', '150000', '', '', '10', 'gear_venus_3.jpg', '', 1, 12, 2),
(17, 'ZECKROM-TW-002-16', '2020', '1.300.000', '', '', '2', 'ZECKROM-TW-002-16.png', 'ZECKROM-TW-002-16 Series didesain secara khusus untuk anak-anak, dengan grafis menarik dan akan menambak si kecil lebih percaya diri.', 1, 10, 1),
(18, 'Stang sepeda United Invernus', '2020', '120000', '', '', '10', 'stang_invernus.jpg', '', 1, 12, 3),
(19, 'FORK SUSPENSION 27.5” TRAVEL 120mm, AIR, LOCK OUT, AL OR ST-C203', '', '1.200.000 ', '', '', '3', 'Fork-Suspension.jpg', '', 1, 10, 2),
(20, 'Bottle Cage AL BK ST-G702', '', '110.000', '', '', '1', 'Bottle-Cage-AL-BK-Art-No-ST-G702.jpg', '', 1, 10, 3),
(21, 'SPOKE & NIPPLE 14GX272 STAINLESS BLA', '', '2000', '', '', '50', 'SPOKE--NIPPLE-14GX272-STAINLESS-BLA.png', '', 1, 11, 2),
(22, 'harley 16 black a', '', '12000000', '', '', '1', 'harley-16-black-a.png', '', 1, 12, 1),
(23, 'scb my20 hero', '', '25000000', '', '', '5', 'scb_my20_hero.jpg', '', 1, 7, 1),
(24, 'APP Link Kit Nickel 1', '', '600000', '', '', '10', 'nickel_app_link_kit.jpg', 'APP Link Kit Nickel Kit Termasuk: APP Link dengan bantalan yang ditekan.', 1, 0, 0),
(25, 'tes', '1999', '20000000', '90', '2000000', '5', 'banner-img13.png', 'testinga', 1, 1, 1),
(26, 'Power Series Alloy Crank Set', '2019', '3000000', '', '', '4', 'power_series_alloy_crank_set_cr_175_22mm.png', '', 1, 1, 2),
(27, 'Super Soft with Flange Grips', '2019', '300000', '', '', '32', 'super_soft_with_flange_grips_gm.png', '', 1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` bigint(20) NOT NULL,
  `id_brg` bigint(20) DEFAULT NULL,
  `jumlah_pesanan` varchar(191) NOT NULL DEFAULT '',
  `total` varchar(191) NOT NULL,
  `id_user` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_brg`, `jumlah_pesanan`, `total`, `id_user`) VALUES
(19, 12, '2', '6000000', 6),
(20, 6, '1', '800000', 6),
(22, 4, '2', '300000', 5),
(25, 6, '1', '800000', 5),
(28, 12, '2', '6000000', 9),
(29, 4, '1', '150000', 9),
(30, 8, '2', '300000', 5),
(31, 12, '1', '3000000', 5),
(32, 6, '1', '800000', 6),
(33, 12, '1', '3000000', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id_detail_order` int(11) NOT NULL,
  `id_order` varchar(255) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id_detail_order`, `id_order`, `id_cart`, `keterangan`) VALUES
(1, 'BRG-2020-0001', 27, '-'),
(2, 'BRG-2020-0002', 27, '-'),
(3, 'BRG-2020-0002', 25, '-'),
(4, 'BRG-2020-0002', 22, '-'),
(5, 'BRG-2020-0003', 25, '-'),
(6, 'BRG-2020-0004', 22, '-'),
(7, 'BRG-2020-0005', 27, '-'),
(8, 'BRG-2020-0006', 27, '-'),
(9, 'BRG-2020-0006', 25, '-'),
(10, 'BRG-2020-0006', 22, '-'),
(11, 'BRG-2020-0007', 30, '-'),
(12, 'BRG-2020-0008', 33, '-'),
(13, 'BRG-2020-0009', 33, '-'),
(14, 'BRG-2020-0009', 32, '-'),
(15, 'BRG-2020-0009', 20, '-'),
(16, 'BRG-2020-0009', 19, '-'),
(17, 'BRG-2020-0010', 32, '-'),
(18, 'BRG-2020-0011', 32, '-'),
(19, 'BRG-2020-0012', 33, '-'),
(20, 'BRG-2020-0013', 34, '-'),
(21, 'BRG-2020-0014', 35, '-'),
(22, 'BRG-2020-0015', 35, '-'),
(23, 'BRG-2020-0016', 34, '-'),
(24, 'BRG-2020-0017', 37, '-'),
(25, 'BRG-2020-0018', 39, '-'),
(26, 'BRG-2020-0019', 38, '-'),
(27, 'BRG-2020-0020', 39, '-'),
(28, 'BRG-2020-0021', 36, '-'),
(29, 'BRG-2020-0022', 36, '-'),
(30, 'BRG-2020-0023', 36, '-'),
(31, 'BRG-2020-0024', 36, '-'),
(32, 'BRG-2020-0025', 36, '-'),
(33, 'BRG-2020-0026', 36, '-'),
(34, 'BRG-2020-0027', 36, '-'),
(35, 'BRG-2020-0028', 36, '-'),
(36, 'BRG-2020-0029', 36, '-'),
(37, 'BRG-2020-0030', 36, '-'),
(38, 'BRG-2020-0031', 36, '-'),
(39, 'BRG-2020-0032', 40, '-'),
(40, 'BRG-2020-0033', 41, '-'),
(41, 'BRG-2020-0034', 36, '-'),
(42, 'BRG-2020-0035', 36, '-'),
(43, 'BRG-2020-0036', 36, '-'),
(44, 'BRG-2020-0037', 36, '-'),
(45, 'BRG-2020-0038', 42, '-'),
(46, 'BRG-2020-0039', 44, '-'),
(47, 'BRG-2020-0040', 46, '-'),
(48, 'BRG-2020-0041', 44, '-'),
(49, 'BRG-2020-0042', 44, '-'),
(50, 'BRG-2020-0042', 44, '-'),
(51, 'BRG-2020-0043', 44, '-'),
(52, 'BRG-2020-0044', 49, '-'),
(53, 'BRG-2020-0045', 47, '-'),
(54, 'BRG-2020-0046', 47, '-'),
(55, 'BRG-2020-0047', 47, '-'),
(56, 'BRG-2020-0048', 47, '-'),
(57, 'BRG-2020-0048', 43, '-'),
(58, 'BRG-2020-0049', 51, '-'),
(59, 'BRG-2020-0049', 50, '-'),
(60, 'BRG-2020-0050', 52, '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_brg`
--

CREATE TABLE `tbl_kategori_brg` (
  `id_kategori_brg` bigint(20) NOT NULL,
  `kategori_brg` varchar(191) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori_brg`
--

INSERT INTO `tbl_kategori_brg` (`id_kategori_brg`, `kategori_brg`) VALUES
(1, 'Sepeda'),
(2, 'Gear'),
(3, 'Variasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` varchar(255) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `id_alamat` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_bayar` varchar(255) NOT NULL,
  `photo_bukti` text NOT NULL DEFAULT 'default_images.jpg',
  `status_transaksi` int(11) NOT NULL COMMENT '1 = belum dibayar 2 = verifikasi pembayaran 3 = pengemasan 4 = delivery 5 = selesai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `id_user`, `id_alamat`, `tgl`, `total_item`, `total_bayar`, `photo_bukti`, `status_transaksi`) VALUES
('BRG-2020-0001', 5, 1, '2020-02-22', 3, '6000000', 'default_images.jpg', 5),
('BRG-2020-0002', 5, 1, '2020-02-22', 3, '7100000', 'default_images.jpg', 4),
('BRG-2020-0003', 5, 1, '2020-02-22', 3, '800000', 'default_images.jpg', 1),
('BRG-2020-0004', 5, 1, '2020-02-22', 3, '300000', 'default_images.jpg', 1),
('BRG-2020-0005', 5, 1, '2020-02-22', 3, '6000000', 'default_images.jpg', 1),
('BRG-2020-0006', 5, 1, '2020-02-22', 3, '7100000', 'default_images.jpg', 1),
('BRG-2020-0007', 5, 1, '2020-02-22', 4, '300000', 'default_images.jpg', 1),
('BRG-2020-0008', 6, 2, '2020-02-22', 4, '3000000', 'default_images.jpg', 5),
('BRG-2020-0009', 6, 2, '2020-02-23', 4, '10600000', 'default_images.jpg', 1),
('BRG-2020-0010', 6, 2, '2020-02-23', 4, '800000', 'default_images.jpg', 1),
('BRG-2020-0011', 6, 2, '2020-02-23', 4, '800000', 'default_images.jpg', 4),
('BRG-2020-0012', 6, 2, '2020-02-23', 1, '3000000', 'bc4.jpeg', 5),
('BRG-2020-0013', 3, 5, '2020-02-23', 1, '3000000', 'Logo_BRI.png', 5),
('BRG-2020-0014', 7, 6, '2020-02-24', 1, '3000000', 'ari.JPG', 5),
('BRG-2020-0015', 7, 6, '2020-02-24', 1, '3000000', 'default_images.jpg', 1),
('BRG-2020-0016', 3, 5, '2020-02-24', 1, '3000000', 'default_images.jpg', 1),
('BRG-2020-0017', 3, 5, '2020-02-24', 1, '3000000', 'default_images.jpg', 1),
('BRG-2020-0018', 3, 5, '2020-02-24', 1, '3150000', 'default_images.jpg', 1),
('BRG-2020-0019', 3, 5, '2020-02-24', 1, '3000000', 'default_images.jpg', 1),
('BRG-2020-0020', 3, 5, '2020-02-24', 1, '150000', 'default_images.jpg', 1),
('BRG-2020-0021', 7, 6, '2020-02-24', 1, '4500000', 'default_images.jpg', 1),
('BRG-2020-0022', 7, 6, '2020-02-24', 1, '4500000', 'default_images.jpg', 1),
('BRG-2020-0023', 7, 6, '2020-02-24', 1, '4500000', 'default_images.jpg', 1),
('BRG-2020-0024', 7, 6, '2020-02-24', 1, '4500000', 'default_images.jpg', 1),
('BRG-2020-0025', 7, 6, '2020-02-24', 1, '4500000', 'default_images.jpg', 1),
('BRG-2020-0026', 7, 6, '2020-02-24', 1, '4500000', 'default_images.jpg', 1),
('BRG-2020-0027', 7, 6, '2020-02-24', 1, '4500000', 'default_images.jpg', 1),
('BRG-2020-0028', 7, 6, '2020-02-24', 1, '4500000', 'default_images.jpg', 1),
('BRG-2020-0029', 7, 6, '2020-02-24', 1, '4500000', 'default_images.jpg', 1),
('BRG-2020-0030', 7, 6, '2020-02-24', 1, '4500000', 'default_images.jpg', 1),
('BRG-2020-0031', 7, 6, '2020-02-24', 1, '4500000', 'default_images.jpg', 1),
('BRG-2020-0032', 3, 5, '2020-02-24', 1, '3000000', 'default_images.jpg', 1),
('BRG-2020-0033', 3, 5, '2020-02-24', 1, '3000000', 'default_images.jpg', 1),
('BRG-2020-0034', 7, 6, '2020-02-24', 1, '4500000', 'default_images.jpg', 1),
('BRG-2020-0035', 7, 6, '2020-02-24', 1, '4500000', 'default_images.jpg', 1),
('BRG-2020-0036', 7, 6, '2020-02-24', 1, '4500000', 'default_images.jpg', 1),
('BRG-2020-0037', 7, 6, '2020-02-24', 1, '4500000', 'default_images.jpg', 1),
('BRG-2020-0038', 7, 6, '2020-02-24', 1, '1000000', 'default_images.jpg', 1),
('BRG-2020-0039', 3, 5, '2020-02-24', 1, '20150000', 'default_images.jpg', 1),
('BRG-2020-0040', 7, 6, '2020-02-24', 1, '1650000', 'default_images.jpg', 1),
('BRG-2020-0041', 3, 5, '2020-02-24', 1, '20150000', 'default_images.jpg', 1),
('BRG-2020-0042', 3, 5, '2020-02-24', 1, '20150000', 'default_images.jpg', 1),
('BRG-2020-0043', 3, 5, '2020-02-24', 1, '150000', 'default_images.jpg', 1),
('BRG-2020-0044', 3, 5, '2020-02-24', 1, '150000', 'default_images.jpg', 1),
('BRG-2020-0045', 3, 5, '2020-02-24', 2, '23000000', 'default_images.jpg', 1),
('BRG-2020-0046', 3, 5, '2020-02-24', 2, '23000000', 'default_images.jpg', 1),
('BRG-2020-0047', 3, 5, '2020-02-24', 2, '23000000', 'default_images.jpg', 1),
('BRG-2020-0048', 3, 5, '2020-02-24', 2, '23000000', 'default_images.jpg', 1),
('BRG-2020-0049', 3, 5, '2020-02-24', 2, '20150000', 'default_images.jpg', 1),
('BRG-2020-0050', 3, 5, '2020-02-24', 1, '300000', 'default_images.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` bigint(20) NOT NULL,
  `fullname` varchar(191) DEFAULT '',
  `email` varchar(191) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `no_hp` varchar(15) NOT NULL,
  `jk` int(1) NOT NULL COMMENT '1 = laki-laki dan 2 = perempuan',
  `tgl_lahir` date NOT NULL,
  `photo_user` varchar(255) DEFAULT 'default_profile.png',
  `id_level` int(1) NOT NULL COMMENT '1 = owner 2 = user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `fullname`, `email`, `password`, `no_hp`, `jk`, `tgl_lahir`, `photo_user`, `id_level`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$IlQBXHVcHQ3aFB.VGlNDweQQlc/MGhwqfiIw1DSmUaC8FS/84P6ki', '087726544819', 0, '2020-01-01', 'ari.JPG', 1),
(2, 'admin2', 'admin2@gmail.com', '$2y$10$7crqolvcZZiMalZtZGu3hONXGORbLzlH.I48pJxgcgY1/6qBWSSmW', '0831723891321', 2, '2020-01-07', 'default_profile.png', 1),
(3, 'tes123', 'tes@gmail.com', '$2y$10$qvS0tQJGmGuqo6HQFo25EOk4Cagr.MTPXtT5m8OMDKI8P6tUsnggi', '1234', 2, '2020-01-15', 'default_profile.png', 2),
(4, 'sabana nur rizki hermawan', 'sabana@gmail.com', '$2y$10$uWdED7VwbC1FaTnVDkpEW.m3xIT/MdXUyuWi6vACqg/9zy9QagtI2', '087726544819', 1, '2001-06-11', 'me.png', 1),
(5, 'tesuto', 'tesuto@gmail.com', '$2y$10$P5zMP9OR9DBHM/vK.lw9YOGZiRLsACFmRUDERaxwUEiElTWL.nVna', '0892133114758', 2, '2020-01-17', 'default_profile.png', 2),
(6, 'tesuto kozuki', 'tesutokozuki@gmail.com', '$2y$10$eY0PJ3IEOl59t.0.bvyrm.qOP.ZrCqWWJl38TnwAkaFgSlgBOtglG', '087726544819', 1, '2020-02-21', 'default_profile.png', 2),
(7, 'ariyo', 'ariyo@gmail.com', '$2y$10$77zTAscRiRXDLOBtdPiz8Orqymzile8kECNKFY18DzuL1oqDd8o6a', '098765748391', 1, '2020-02-09', 'default_profile.png', 2),
(8, 'wahyu suryaman', 'wahyusuryaman100@gmail.com', '$2y$10$NJs87SOrLgzFr1xJCpSu.uHn9vt4sk/gO.6wv0GWE7eduZ1z8zWTK', '0955883273245', 1, '2020-02-12', 'default_profile.png', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alamat`
--
ALTER TABLE `tbl_alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `tbl_brg`
--
ALTER TABLE `tbl_brg`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id_detail_order`);

--
-- Indexes for table `tbl_kategori_brg`
--
ALTER TABLE `tbl_kategori_brg`
  ADD PRIMARY KEY (`id_kategori_brg`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_alamat`
--
ALTER TABLE `tbl_alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id_brand` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_brg`
--
ALTER TABLE `tbl_brg`
  MODIFY `id_brg` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id_detail_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_kategori_brg`
--
ALTER TABLE `tbl_kategori_brg`
  MODIFY `id_kategori_brg` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
