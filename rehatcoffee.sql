-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 04:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rehatcoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kasir`
--

CREATE TABLE `tb_kasir` (
  `id_kasir` int(20) NOT NULL,
  `id_menu` int(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kasir`
--

INSERT INTO `tb_kasir` (`id_kasir`, `id_menu`, `jumlah`, `total`, `tanggal`) VALUES
(1, 7, 1, 25000, '2022-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_user` int(20) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(20) NOT NULL,
  `role_user` varchar(20) NOT NULL,
  `tanggal_user` date NOT NULL,
  `gambar_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_user`, `nama_user`, `email_user`, `password_user`, `role_user`, `tanggal_user`, `gambar_user`) VALUES
(3, 'admin', 'admin@admin.com', '$2y$10$ChUNU0Fr2cLL2', 'admin', '0000-00-00', 'default.jpg'),
(4, 'Muhammad Nayyul Habibie ', 'm.nayyul.habibie@gmail.com', '$2y$10$NG4/ETuFELw3.', 'user', '0000-00-00', 'default.jpg'),
(5, 'admin', 'admin2@admin.com', '$2y$10$My4Mh2LpO.bID', 'user', '0000-00-00', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(100) NOT NULL,
  `gambar_menu` varchar(50) NOT NULL,
  `nama_menu` varchar(20) NOT NULL,
  `kategori_menu` varchar(20) NOT NULL,
  `harga_menu` int(255) NOT NULL,
  `deskripsi_menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `gambar_menu`, `nama_menu`, `kategori_menu`, `harga_menu`, `deskripsi_menu`) VALUES
(7, 'brown_sugar.jpg', 'Brown Sugar Coffee', 'Coffee', 25000, 'Espresso + UHT Milk + Palm Sugar'),
(9, 'th.jfif', 'Mojito Berry', 'Non-Coffee', 25000, 'Soda + Sirup Berry'),
(10, 'vietnamese-drip-coffee.jpg', 'Vietnam Drip', 'Coffee', 22500, 'Vietnam Drip merupakan cara seduh yang berasal dari negara Vietnam.'),
(11, 'thai_tea.jpg', 'Thai Tea', 'Non-Coffee', 22500, 'Thai Tea dibuat dengan susu kental, minuman ini sering ditambah pilihan lain seperti susu murni, dan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(20) NOT NULL,
  `nama_pemesanan` varchar(20) NOT NULL,
  `menu_pemesanan` varchar(20) NOT NULL,
  `harga_pemesanan` int(255) NOT NULL,
  `total_harga` int(255) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `id_menu` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_report`
--

CREATE TABLE `tb_report` (
  `id_report` int(20) NOT NULL,
  `nama_report` varchar(30) NOT NULL,
  `tanggal_report` date NOT NULL,
  `file_report` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  ADD PRIMARY KEY (`id_kasir`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `tb_report`
--
ALTER TABLE `tb_report`
  ADD PRIMARY KEY (`id_report`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  MODIFY `id_kasir` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_report`
--
ALTER TABLE `tb_report`
  MODIFY `id_report` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  ADD CONSTRAINT `tb_kasir_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `tb_menu` (`id_menu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
