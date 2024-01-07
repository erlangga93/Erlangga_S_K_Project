-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 05:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erlangga_db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_admin`
--

CREATE TABLE `menu_admin` (
  `id_menu` int(11) NOT NULL,
  `judul_menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `is_main_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_admin`
--

INSERT INTO `menu_admin` (`id_menu`, `judul_menu`, `link`, `icon`, `is_main_menu`) VALUES
(1, 'nDashboard', 'admin/dashboard', 'glyphicon glyphicon-home', 0),
(2, 'Data', '#', 'glyphicon glyphicon-user', 0),
(3, 'User Management', 'admin/data_admin', 'fa fa-user', 2),
(4, 'Rule', 'admin/data_rule', 'fa fa-book', 2),
(6, 'Data Member', 'admin/data_member', 'fa fa-users', 2),
(97, 'Tanya & Jawab', '#', 'glyphicon glyphicon-envelope', 0),
(98, 'Struktur Organisasi', 'admin/data_organisasi', 'fa fa-book', 99),
(99, 'Profile Company', '#', 'fa fa-building', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_member`
--

CREATE TABLE `menu_member` (
  `id_menu` int(11) NOT NULL,
  `judul_menu` varchar(5) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `is_main_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role_pekerja`
--

CREATE TABLE `role_pekerja` (
  `id_rolep` int(3) NOT NULL,
  `nama_rolep` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_pekerja`
--

INSERT INTO `role_pekerja` (`id_rolep`, `nama_rolep`) VALUES
(1, 'admin'),
(2, 'bendahara');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_member`
--

CREATE TABLE `tabel_member` (
  `id_member` int(10) NOT NULL,
  `nama_member` text NOT NULL,
  `password_member` text NOT NULL,
  `no_kontakt_member` int(11) NOT NULL,
  `ttl_member` date NOT NULL,
  `email_member` text NOT NULL,
  `jenis_kelamin_m` enum('l','p') NOT NULL,
  `ktp_member` text NOT NULL,
  `pass_photo_m` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_member`
--

INSERT INTO `tabel_member` (`id_member`, `nama_member`, `password_member`, `no_kontakt_member`, `ttl_member`, `email_member`, `jenis_kelamin_m`, `ktp_member`, `pass_photo_m`) VALUES
(14, 'a', 'secret123', 2147483647, '2024-01-01', 'abn@gmail.com', 'l', '08348843834', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(10) NOT NULL,
  `username` text NOT NULL,
  `nik_admin` text NOT NULL,
  `nama_admin` text NOT NULL,
  `alamat_admin` text NOT NULL,
  `kontakt_admin` text NOT NULL,
  `id_rolep` int(3) NOT NULL,
  `password_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `nik_admin`, `nama_admin`, `alamat_admin`, `kontakt_admin`, `id_rolep`, `password_admin`) VALUES
(1, 'admin', '02634734253452375324', 'erlangga', 'yogyakarta', '0836436344', 1, 'admin'),
(3, 'dsad', '2332', 'ererew', 'rewewr', '2334', 1, '432');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_admin`
--
ALTER TABLE `menu_admin`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `menu_member`
--
ALTER TABLE `menu_member`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `role_pekerja`
--
ALTER TABLE `role_pekerja`
  ADD PRIMARY KEY (`id_rolep`);

--
-- Indexes for table `tabel_member`
--
ALTER TABLE `tabel_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_rolep` (`id_rolep`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_admin`
--
ALTER TABLE `menu_admin`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `menu_member`
--
ALTER TABLE `menu_member`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_pekerja`
--
ALTER TABLE `role_pekerja`
  MODIFY `id_rolep` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_member`
--
ALTER TABLE `tabel_member`
  MODIFY `id_member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD CONSTRAINT `id_rolep` FOREIGN KEY (`id_rolep`) REFERENCES `role_pekerja` (`id_rolep`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
