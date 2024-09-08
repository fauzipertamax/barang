-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2024 at 03:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_barang` varchar(25) NOT NULL,
  `keterangan` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `jenis_barang`, `keterangan`) VALUES
(1, 'Kopi', 'Konsumsi', 'Minuman Santai'),
(2, 'Teh', 'Konsumsi', 'Minuman Pagi Sore'),
(3, 'Pasta Gigi', 'Pembersih', ''),
(4, 'Sabun Mandi', 'Pembersih', ''),
(5, 'Shampo', 'Pembersih', ''),
(6, 'Susu', 'Konsumsi', 'Minuman Sehat'),
(8, 'Roti', 'Konsumsi', 'Makanan'),
(9, 'Deterjen', 'Pembersih', 'Deterjen Pembersih'),
(10, 'Autan', 'Konsumsi', 'sss'),
(11, 'asdsadadad', 'Konsumsi', 'acs'),
(12, 'SA', 'Konsumsi', 'asd'),
(13, 'sfe', 'Pembersih', 'asd'),
(14, 'asd', 'Konsumsi', 'adf'),
(15, 'dsf', 'Konsumsi', 'sds');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `stock` int(10) NOT NULL,
  `jml_jual` int(10) NOT NULL,
  `jml_sisa` int(10) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_barang`, `stock`, `jml_jual`, `jml_sisa`, `tgl_transaksi`, `keterangan`) VALUES
(1, 1, 10, 2, 8, '2024-09-01 12:53:34', ''),
(2, 2, 10, 4, 6, '2024-09-01 12:54:19', ''),
(3, 1, 8, 3, 5, '2024-09-02 12:54:49', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
