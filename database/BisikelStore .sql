-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2020 at 03:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
  `alamat` text NOT NULL,
  `id_user` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id_brand` bigint(20) NOT NULL,
  `brand` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brg`
--

CREATE TABLE `tbl_brg` (
  `id_brg` bigint(20) NOT NULL,
  `nama_brg` varchar(191) NOT NULL DEFAULT '',
  `harga_brg` varchar(25) NOT NULL DEFAULT '',
  `stok` varchar(191) NOT NULL DEFAULT '0',
  `photo_brg` varchar(255) DEFAULT '',
  `deskripsi` text DEFAULT NULL,
  `id_kondisi` int(11) DEFAULT NULL COMMENT '1 = baru.\r\n2 = bekas.',
  `id_brand` int(11) DEFAULT NULL,
  `id_kategori_brg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` bigint(20) NOT NULL,
  `id_brg` bigint(20) DEFAULT NULL,
  `jumlah_pesanan` varchar(191) NOT NULL DEFAULT '',
  `id_user` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_brg`
--

CREATE TABLE `tbl_kategori_brg` (
  `id_kategori_brg` bigint(20) NOT NULL,
  `kategori_brg` varchar(191) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` bigint(20) NOT NULL,
  `id_alamat` int(11) NOT NULL,
  `id_metode_pembayaran` int(11) NOT NULL,
  `id_cart` bigint(20) NOT NULL,
  `id_kurir` int(11) NOT NULL,
  `total_harga_brg` varchar(191) NOT NULL,
  `total_pembayaran` varchar(191) NOT NULL,
  `status_order` int(11) NOT NULL DEFAULT 1 COMMENT '1 = belum dibayar.\r\n2 = dibayar.\r\n3 = dikemas.\r\n4 = dikirim.',
  `id_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saldo`
--

CREATE TABLE `tbl_saldo` (
  `id_saldo` bigint(20) NOT NULL,
  `saldo` varchar(191) NOT NULL DEFAULT '0',
  `tgl_topup` date DEFAULT NULL,
  `id_user` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'admin', 'admin@gmail.com', '$2y$10$YiieZfSR3BW0Dr8XDtVZT.LWQW2YUSMYW9Dxxq8kxYWwbWZJwhXfO', '087726544819', 0, '0000-00-00', 'default_profile.png', 1),
(2, 'admin2', 'admin2@gmail.com', '$2y$10$7crqolvcZZiMalZtZGu3hONXGORbLzlH.I48pJxgcgY1/6qBWSSmW', '0831723891321', 2, '2020-01-07', 'default_profile.png', 1),
(3, 'tes123', 'tes@gmail.com', '$2y$10$qvS0tQJGmGuqo6HQFo25EOk4Cagr.MTPXtT5m8OMDKI8P6tUsnggi', '1234', 2, '2020-01-15', 'default_profile.png', 2),
(4, 'sabana nur rizki hermawan', 'sabana@gmail.com', '$2y$10$DFpYMrHcZWQlS4Hs58r61O/g5v21da3xw/YOUqMifwuEn137.6VYS', '087726544819', 1, '2001-06-11', 'me.png', 1),
(5, 'tesuto', 'tesuto@gmail.com', '$2y$10$P5zMP9OR9DBHM/vK.lw9YOGZiRLsACFmRUDERaxwUEiElTWL.nVna', '0892133114758', 2, '2020-01-17', 'default_profile.png', 1);

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
-- Indexes for table `tbl_saldo`
--
ALTER TABLE `tbl_saldo`
  ADD PRIMARY KEY (`id_saldo`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
