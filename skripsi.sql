-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 02, 2020 at 07:21 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `nama`, `username`, `password`, `alamat`, `no_hp`, `foto`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Kudus', '0876512121212', 'foto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paket_pernikahan`
--

CREATE TABLE `paket_pernikahan` (
  `id_paket` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket_pernikahan`
--

INSERT INTO `paket_pernikahan` (`id_paket`, `id_vendor`, `nama`, `harga`, `keterangan`, `is_delete`) VALUES
(5, 2, 'Pekatt', '20103103', 'adasdfa', 0),
(6, 3, 'Paket bukan sembarang paket Y', '200001000', 'OKEOKE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` int(11) NOT NULL,
  `nama_vendor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemilik` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_daftar` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id_vendor`, `nama_vendor`, `nama_pemilik`, `ktp`, `telp`, `tgl_daftar`, `alamat`, `username`, `password`, `status`) VALUES
(2, 'Alfa FAN', 'Ahmad Fafa', 'f44faa637039905e3e9ab099a86409ae5efb5f508be6a.png', '89652128123', '2020-06-30', 'Dawe Kudus', 'alafan', '250cf8b51c773f3f8dc8b4be867a9a02', 0),
(3, 'AntonIO Project', 'Steven Antonio', '4afc1d958d15373d17bc7b2d7d2dee615efbcaf5eca2c.png', '8212323131031', '2020-07-01', 'Jakarta', 'antonio', '202cb962ac59075b964b07152d234b70', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `paket_pernikahan`
--
ALTER TABLE `paket_pernikahan`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paket_pernikahan`
--
ALTER TABLE `paket_pernikahan`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paket_pernikahan`
--
ALTER TABLE `paket_pernikahan`
  ADD CONSTRAINT `paket_pernikahan_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `vendor` (`id_vendor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
