-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 03:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko baju`
--

-- --------------------------------------------------------

--
-- Table structure for table `baju`
--

CREATE TABLE `baju` (
  `id_baju` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baju`
--

INSERT INTO `baju` (`id_baju`, `name`, `description`, `price`, `image`) VALUES
(1, 'sweater', 'wow', 12000.00, 'uploads/images.jpg'),
(6, 'koas', 'waw', 123000.00, 'uploads/download (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_barang` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `nama_barang` varchar(500) NOT NULL,
  `nomor_wa` varchar(500) NOT NULL,
  `warna` varchar(500) NOT NULL,
  `ukuran` varchar(500) NOT NULL,
  `model` varchar(500) NOT NULL,
  `jumlah_barang` varchar(500) NOT NULL,
  `id_baju` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_barang`, `tanggal_pembelian`, `nama_barang`, `nomor_wa`, `warna`, `ukuran`, `model`, `jumlah_barang`, `id_baju`, `id`) VALUES
(1, '0000-00-00', 'hitam pendek dan satu gambar bisa request warna baju dan gambar', '01234567890', 'pink', 'xxl', 'pendek', '1', NULL, NULL),
(2, '2024-05-01', 'hitam pendek dan satu gambar bisa request warna baju dan gambar', '01234567890', 'pink', 'xl', 'pendek', '1', NULL, NULL),
(3, '2024-05-28', 'hitam pendek dan tidak ramai gambar bisa request warna baju dan gambar', '082153487688', 'pink', 'xl', 'pendek', '3', NULL, NULL),
(4, '2024-05-29', 'hitam pendek dan tidak ramai gambar bisa request warna baju dan gambar', '081234567', 'merah', 'xl', 'pendek', '5', NULL, NULL),
(5, '0000-00-00', '', '', '', '', '', '', NULL, NULL),
(6, '2024-05-29', 'sweater', '01234567890', 'merah', 'XXX', 'pendek', '3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `level` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `level`, `username`, `password`) VALUES
(5, 'admin', 'admin', 'admin'),
(8, 'user', 'user', 'user'),
(9, 'user', 'qaysar', 'qaysar'),
(10, 'user', 'josie', 'josie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baju`
--
ALTER TABLE `baju`
  ADD PRIMARY KEY (`id_baju`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `fk_baju_transaksi` (`id_baju`),
  ADD KEY `fk_user_transaksi` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baju`
--
ALTER TABLE `baju`
  MODIFY `id_baju` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_baju_transaksi` FOREIGN KEY (`id_baju`) REFERENCES `baju` (`id_baju`),
  ADD CONSTRAINT `fk_user_transaksi` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
