-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2020 at 01:45 AM
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
  `alamat` text NOT NULL,
  `id_user` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'pegasus', 'pegasus.png'),
(4, 'tesla', 'default_img.png'),
(7, 'santacruz', 'default_img.png'),
(9, 'swallow', 'default_img.png'),
(10, 'Pacific', 'default_img.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brg`
--

CREATE TABLE `tbl_brg` (
  `id_brg` bigint(20) NOT NULL,
  `nama_brg` varchar(191) NOT NULL DEFAULT '',
  `harga_brg` varchar(25) NOT NULL DEFAULT '',
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

INSERT INTO `tbl_brg` (`id_brg`, `nama_brg`, `harga_brg`, `stok`, `photo_brg`, `deskripsi`, `id_status`, `id_brand`, `id_kategori_brg`) VALUES
(2, 'tes', '400000', '12', 'bc31.jpeg', 'high spek for women', 1, 9, 1),
(4, 'Piringan Sepeda', '150000', '12', 'bc2.jpeg', 'baru baru baru', 1, 4, 3),
(6, 'Pacific Sepeda Downhill Merah', '800000', '5', 'bc41.jpeg', 'merah hitam guaranteed...', 1, 4, 1),
(8, 'qwerty', '150000', '20', 'bc51.jpeg', 'qwxsaads', 1, 1, 3),
(9, 'Pacific Sepedah', '1500000', '15', 'bc42.jpeg', 'tes', 1, 1, 1),
(10, 'sad', '1000000', '10', 'bc33.jpeg', 'saddd', 1, 4, 1),
(11, 'poligon', '20000000', '10', 'bc34.jpeg', 'belii', 1, 1, 1);

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
(1, 2, '10', '4000000', 5),
(2, 6, '1', '800000', 5),
(3, 6, '2', '1600000', 5),
(4, 6, '2', '1600000', 5),
(5, 6, '4', '3200000', 5),
(6, 2, '3', '1200000', 5),
(7, 9, '1', '1500000', 5);

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
(1, 'admin', 'admin@gmail.com', '$2y$10$IlQBXHVcHQ3aFB.VGlNDweQQlc/MGhwqfiIw1DSmUaC8FS/84P6ki', '087726544819', 1, '2020-01-01', 'default_profile.png', 1),
(2, 'admin2', 'admin2@gmail.com', '$2y$10$7crqolvcZZiMalZtZGu3hONXGORbLzlH.I48pJxgcgY1/6qBWSSmW', '0831723891321', 2, '2020-01-07', 'default_profile.png', 1),
(3, 'tes123', 'tes@gmail.com', '$2y$10$qvS0tQJGmGuqo6HQFo25EOk4Cagr.MTPXtT5m8OMDKI8P6tUsnggi', '1234', 2, '2020-01-15', 'default_profile.png', 2),
(4, 'sabana nur rizki hermawan', 'sabana@gmail.com', '$2y$10$uWdED7VwbC1FaTnVDkpEW.m3xIT/MdXUyuWi6vACqg/9zy9QagtI2', '087726544819', 1, '2001-06-11', 'me.png', 1),
(5, 'tesuto', 'tesuto@gmail.com', '$2y$10$P5zMP9OR9DBHM/vK.lw9YOGZiRLsACFmRUDERaxwUEiElTWL.nVna', '0892133114758', 2, '2020-01-17', 'default_profile.png', 2);

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
-- AUTO_INCREMENT for table `tbl_alamat`
--
ALTER TABLE `tbl_alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id_brand` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_brg`
--
ALTER TABLE `tbl_brg`
  MODIFY `id_brg` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_kategori_brg`
--
ALTER TABLE `tbl_kategori_brg`
  MODIFY `id_kategori_brg` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_saldo`
--
ALTER TABLE `tbl_saldo`
  MODIFY `id_saldo` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
