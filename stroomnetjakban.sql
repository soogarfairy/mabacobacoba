-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 02:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stroomnetjakban`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `priv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `priv`) VALUES
(13, 'lordsyahrur', 'belumpunyapacar', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `catatan_amal_pengembali`
--

CREATE TABLE `catatan_amal_pengembali` (
  `id` int(5) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama_pengembali` varchar(100) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `user` varchar(100) NOT NULL,
  `priv` varchar(100) NOT NULL,
  `aktivitas` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `tanggal`, `user`, `priv`, `aktivitas`) VALUES
(1, '2020-04-19 22:49:19', 'retno', 'admin', 'Clear History'),
(2, '2020-04-19 22:56:21', 'retno', 'admin', 'Logged Out'),
(3, '2020-04-21 12:53:08', 'retno', 'admin', 'Logged In'),
(4, '2020-04-21 12:53:30', 'retno', 'admin', 'Kelola Pengadaan Tab - Update Data Kalkun'),
(5, '2020-04-22 06:36:32', 'retno', 'admin', 'Logged In'),
(6, '2020-04-22 06:37:22', 'retno', 'admin', 'Logged Out'),
(7, '2020-04-22 06:37:31', 'lordsyahrur', 'admin', 'Logged In'),
(8, '2020-04-22 06:41:20', 'lordsyahrur', 'admin', 'Logged Out'),
(9, '2020-09-18 12:03:01', 'retno', 'admin', 'Logged In'),
(10, '2020-09-18 12:55:03', 'retno', 'admin', 'Kelola Menu Tim - Tambah Tim Sobat Bangun Telco'),
(11, '2020-09-18 13:05:07', 'retno', 'admin', 'Kelola Menu Tim - Tambah Tim Sobat Bangun TelcoM'),
(12, '2020-09-18 13:05:45', 'retno', 'admin', 'Kelola Menu Tim - Update Tim Sobat Bangun Telco'),
(13, '2020-09-18 13:07:00', 'retno', 'admin', 'Kelola Menu Tim - Delete Tim '),
(14, '2020-09-18 13:14:55', 'retno', 'admin', 'Kelola Menu Penerima - Tambah Penerima syahrur'),
(15, '2020-09-18 13:15:00', 'retno', 'admin', 'Kelola Menu Penerima - Update Penerima syahrurxwp'),
(16, '2020-09-18 13:15:04', 'retno', 'admin', 'Kelola Menu Penerima - Delete Penerima syahrurxwp'),
(17, '2020-09-18 13:24:32', 'retno', 'admin', 'Logged Out'),
(18, '2020-09-18 13:28:01', 'retno', 'admin', 'Logged In'),
(19, '2020-09-18 13:32:28', 'retno', 'admin', 'Kelola Menu Tim - Tambah Tim Sobat Bangun Telco'),
(20, '2020-09-18 13:32:35', 'retno', 'admin', 'Kelola Menu Tim - Tambah Tim JJC'),
(21, '2020-09-18 13:32:41', 'retno', 'admin', 'Kelola Menu Tim - Tambah Tim GSP'),
(22, '2020-09-18 13:32:46', 'retno', 'admin', 'Kelola Menu Tim - Tambah Tim KDK'),
(23, '2020-09-18 13:32:54', 'retno', 'admin', 'Kelola Menu Tim - Tambah Tim Internal Stroomnet'),
(24, '2020-09-18 13:33:38', 'retno', 'admin', 'Kelola Menu Tim - Tambah Tim SBU Aktivasi Publik'),
(25, '2020-09-18 13:33:54', 'retno', 'admin', 'Kelola Menu Penerima - Tambah Penerima Nurul'),
(26, '2020-09-18 13:33:59', 'retno', 'admin', 'Kelola Menu Penerima - Tambah Penerima Riki'),
(27, '2020-09-18 13:34:03', 'retno', 'admin', 'Kelola Menu Penerima - Tambah Penerima Pandu'),
(28, '2020-09-18 13:34:24', 'retno', 'admin', 'Kelola Menu Penerima - Tambah Penerima Internal Stroomnet'),
(29, '2020-09-18 15:16:06', 'retno', 'admin', 'Logged Out'),
(30, '2020-09-18 15:17:39', 'lordsyahrur', 'admin', 'Logged In'),
(31, '2020-09-19 14:11:03', 'lordsyahrur', 'admin', 'Logged In'),
(32, '2020-09-19 14:11:53', 'lordsyahrur', 'admin', 'Logged Out'),
(33, '2020-09-19 14:11:53', 'lordsyahrur', 'admin', 'Logged Out'),
(34, '2020-09-19 14:14:17', 'lordsyahrur', 'admin', 'Logged In');

-- --------------------------------------------------------

--
-- Table structure for table `material_validator`
--

CREATE TABLE `material_validator` (
  `id` int(5) NOT NULL,
  `material` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_validator`
--

INSERT INTO `material_validator` (`id`, `material`, `jumlah`, `tipe`) VALUES
(1, '1CORE_P.SC-SC_1,5m', '0', 'patchcore_singlemode'),
(2, '1CORE_P.SC-SC_1m', '0', 'patchcore_singlemode'),
(3, '1CORE_P.SC-SC_2m', '1', 'patchcore_singlemode'),
(4, '1CORE_P.SC-SC_3m', '3', 'patchcore_singlemode'),
(5, '1CORE_P.SC-SC_5m', '2', 'patchcore_singlemode'),
(6, '1CORE_P.SC-SC_7m', '0', 'patchcore_singlemode'),
(7, '1CORE_P.SC-SC_10m', '4', 'patchcore_singlemode'),
(8, '1CORE_P.SC-SC_12m', '0', 'patchcore_singlemode'),
(9, '1CORE_P.SC-SC_15m', '2', 'patchcore_singlemode'),
(10, '1CORE_P.SC-SC_17m', '0', 'patchcore_singlemode'),
(11, '1CORE_P.SC-SC_20m', '120', 'patchcore_singlemode'),
(12, '1CORE_P.SC-SC_25m', '0', 'patchcore_singlemode'),
(13, '1CORE_P.SC-SC_30m', '0', 'patchcore_singlemode'),
(14, '1CORE_P.SC-SC_35m', '0', 'patchcore_singlemode'),
(15, '1CORE_P.SC-SC_40m', '0', 'patchcore_singlemode'),
(16, '1CORE_P.SC-SC_45m', '0', 'patchcore_singlemode'),
(17, '1CORE_P.SC-SC_50m', '0', 'patchcore_singlemode'),
(18, '1CORE_P.SC-SC_55m', '0', 'patchcore_singlemode'),
(19, '1CORE_P.SC-LC_1,5m', '8', 'patchcore_singlemode'),
(20, '1CORE_P.SC-LC_1m', '0', 'patchcore_singlemode'),
(21, '1CORE_P.SC-LC_2m', '0', 'patchcore_singlemode'),
(22, '1CORE_P.SC-LC_3m', '0', 'patchcore_singlemode'),
(23, '1CORE_P.SC-LC_5m', '3', 'patchcore_singlemode'),
(24, '1CORE_P.SC-LC_7m', '1', 'patchcore_singlemode'),
(25, '1CORE_P.SC-LC_10m', '1', 'patchcore_singlemode'),
(26, '1CORE_P.SC-LC_12m', '0', 'patchcore_singlemode'),
(27, '1CORE_P.SC-LC_15m', '0', 'patchcore_singlemode'),
(28, '1CORE_P.SC-LC_17m', '0', 'patchcore_singlemode'),
(29, '1CORE_P.SC-LC_20m', '0', 'patchcore_singlemode'),
(30, '1CORE_P.SC-LC_25m', '0', 'patchcore_singlemode'),
(31, '1CORE_P.SC-LC_30m', '0', 'patchcore_singlemode'),
(32, '1CORE_P.SC-LC_35m', '0', 'patchcore_singlemode'),
(33, '1CORE_P.SC-LC_40m', '0', 'patchcore_singlemode'),
(34, '1CORE_P.SC-LC_45m', '0', 'patchcore_singlemode'),
(35, '1CORE_P.SC-LC_50m', '0', 'patchcore_singlemode'),
(36, '1CORE_P.SC-LC_55m', '0', 'patchcore_singlemode'),
(37, '1CORE_P.SC-FC_1,5m', '0', 'patchcore_singlemode'),
(38, '1CORE_P.SC-FC_1m', '0', 'patchcore_singlemode'),
(39, '1CORE_P.SC-FC_2m', '0', 'patchcore_singlemode'),
(40, '1CORE_P.SC-FC_3m', '0', 'patchcore_singlemode'),
(41, '1CORE_P.SC-FC_5m', '0', 'patchcore_singlemode'),
(42, '1CORE_P.SC-FC_7m', '0', 'patchcore_singlemode'),
(43, '1CORE_P.SC-FC_10m', '0', 'patchcore_singlemode'),
(44, '1CORE_P.SC-FC_12m', '0', 'patchcore_singlemode'),
(45, '1CORE_P.SC-FC_15m', '0', 'patchcore_singlemode'),
(46, '1CORE_P.SC-FC_17m', '0', 'patchcore_singlemode'),
(47, '1CORE_P.SC-FC_20m', '0', 'patchcore_singlemode'),
(48, '1CORE_P.SC-FC_25m', '0', 'patchcore_singlemode'),
(49, '1CORE_P.SC-FC_30m', '0', 'patchcore_singlemode'),
(50, '1CORE_P.SC-FC_35m', '0', 'patchcore_singlemode'),
(51, '1CORE_P.SC-FC_40m', '0', 'patchcore_singlemode'),
(52, '1CORE_P.SC-FC_45m', '0', 'patchcore_singlemode'),
(53, '1CORE_P.SC-FC_50m', '0', 'patchcore_singlemode'),
(54, '1CORE_P.SC-FC_55m', '0', 'patchcore_singlemode'),
(55, '1CORE_P.LC-LC_1,5m', '0', 'patchcore_singlemode'),
(56, '1CORE_P.LC-LC_1m', '0', 'patchcore_singlemode'),
(57, '1CORE_P.LC-LC_2m', '0', 'patchcore_singlemode'),
(58, '1CORE_P.LC-LC_3m', '20', 'patchcore_singlemode'),
(59, '1CORE_P.LC-LC_5m', '0', 'patchcore_singlemode'),
(60, '1CORE_P.LC-LC_7m', '0', 'patchcore_singlemode'),
(61, '1CORE_P.LC-LC_10m', '0', 'patchcore_singlemode'),
(62, '1CORE_P.LC-LC_12m', '0', 'patchcore_singlemode'),
(63, '1CORE_P.LC-LC_15m', '0', 'patchcore_singlemode'),
(64, '1CORE_P.LC-LC_17m', '0', 'patchcore_singlemode'),
(65, '1CORE_P.LC-LC_20m', '120', 'patchcore_singlemode'),
(66, '1CORE_P.LC-LC_25m', '0', 'patchcore_singlemode'),
(67, '1CORE_P.LC-LC_30m', '0', 'patchcore_singlemode'),
(68, '1CORE_P.LC-LC_35m', '0', 'patchcore_singlemode'),
(69, '1CORE_P.LC-LC_40m', '0', 'patchcore_singlemode'),
(70, '1CORE_P.LC-LC_45m', '0', 'patchcore_singlemode'),
(71, '1CORE_P.LC-LC_50m', '0', 'patchcore_singlemode'),
(72, '1CORE_P.LC-LC_55m', '0', 'patchcore_singlemode'),
(73, '1CORE_P.LC-LC_60m', '0', 'patchcore_singlemode'),
(74, '1CORE_P.FC-FC_1,5m', '0', 'patchcore_singlemode'),
(75, '1CORE_P.FC-FC_1m', '0', 'patchcore_singlemode'),
(76, '1CORE_P.FC-FC_2m', '0', 'patchcore_singlemode'),
(77, '1CORE_P.FC-FC_3m', '0', 'patchcore_singlemode'),
(78, '1CORE_P.FC-FC_5m', '0', 'patchcore_singlemode'),
(79, '1CORE_P.FC-FC_7m', '0', 'patchcore_singlemode'),
(80, '1CORE_P.FC-FC_10m', '0', 'patchcore_singlemode'),
(81, '1CORE_P.FC-FC_12m', '0', 'patchcore_singlemode'),
(82, '1CORE_P.FC-FC_15m', '0', 'patchcore_singlemode'),
(83, '1CORE_P.FC-FC_17m', '0', 'patchcore_singlemode'),
(84, '1CORE_P.FC-FC_20m', '0', 'patchcore_singlemode'),
(85, '1CORE_P.FC-FC_25m', '0', 'patchcore_singlemode'),
(86, '1CORE_P.FC-FC_30m', '0', 'patchcore_singlemode'),
(87, '1CORE_P.FC-FC_35m', '0', 'patchcore_singlemode'),
(88, '1CORE_P.FC-FC_40m', '0', 'patchcore_singlemode'),
(89, '1CORE_P.FC-FC_45m', '0', 'patchcore_singlemode'),
(90, '1CORE_P.FC-FC_50m', '0', 'patchcore_singlemode'),
(91, '1CORE_P.FC-FC_55m', '0', 'patchcore_singlemode'),
(92, '1CORE_P.FC-LC_1,5m', '0', 'patchcore_singlemode'),
(93, '1CORE_P.FC-LC_1m', '0', 'patchcore_singlemode'),
(94, '1CORE_P.FC-LC_2m', '0', 'patchcore_singlemode'),
(95, '1CORE_P.FC-LC_3m', '2', 'patchcore_singlemode'),
(96, '1CORE_P.FC-LC_5m', '0', 'patchcore_singlemode'),
(97, '1CORE_P.FC-LC_7m', '1', 'patchcore_singlemode'),
(98, '1CORE_P.FC-LC_10m', '0', 'patchcore_singlemode'),
(99, '1CORE_P.FC-LC_12m', '0', 'patchcore_singlemode'),
(100, '1CORE_P.FC-LC_15m', '0', 'patchcore_singlemode'),
(101, '1CORE_P.FC-LC_17m', '0', 'patchcore_singlemode'),
(102, '1CORE_P.FC-LC_20m', '0', 'patchcore_singlemode'),
(103, '1CORE_P.FC-LC_25m', '0', 'patchcore_singlemode'),
(104, '1CORE_P.FC-LC_30m', '0', 'patchcore_singlemode'),
(105, '1CORE_P.FC-LC_35m', '0', 'patchcore_singlemode'),
(106, '1CORE_P.FC-LC_40m', '0', 'patchcore_singlemode'),
(107, '1CORE_P.FC-LC_45m', '0', 'patchcore_singlemode'),
(108, '1CORE_P.FC-LC_50m', '0', 'patchcore_singlemode'),
(109, '1CORE_P.FC-LC_55m', '0', 'patchcore_singlemode'),
(110, '1CORE_P.SC-SC.APC_1m', '1', 'patchcore_singlemode'),
(111, '1CORE_P.SC-SC.APC_1,5m', '4', 'patchcore_singlemode'),
(112, '1CORE_P.SC-SC.APC_2m', '2', 'patchcore_singlemode'),
(113, '1CORE_P.SC-SC.APC_3m', '16', 'patchcore_singlemode'),
(114, '1CORE_P.SC-SC.APC_4m', '0', 'patchcore_singlemode'),
(115, '1CORE_P.SC-SC.APC_5m', '0', 'patchcore_singlemode'),
(116, '1CORE_P.SC-SC.APC_7m', '0', 'patchcore_singlemode'),
(117, '1CORE_P.SC-SC.APC_10m', '0', 'patchcore_singlemode'),
(118, '1CORE_P.SC-SC.APC_30m', '1', 'patchcore_singlemode'),
(119, '2CORE_P.SC-SC_1,5m', '0', 'patchcore_singlemode'),
(120, '2CORE_P.SC-SC_1m', '51', 'patchcore_singlemode'),
(121, '2CORE_P.SC-SC_2m', '37', 'patchcore_singlemode'),
(122, '2CORE_P.SC-SC_3m', '100', 'patchcore_singlemode'),
(123, '2CORE_P.SC-SC_5m', '120', 'patchcore_singlemode'),
(124, '2CORE_P.SC-SC_7m', '36', 'patchcore_singlemode'),
(125, '2CORE_P.SC-SC_10m', '46', 'patchcore_singlemode'),
(126, '2CORE_P.SC-SC_12m', '0', 'patchcore_singlemode'),
(127, '2CORE_P.SC-SC_15m', '7', 'patchcore_singlemode'),
(128, '2CORE_P.SC-SC_17m', '0', 'patchcore_singlemode'),
(129, '2CORE_P.SC-SC_20m', '1', 'patchcore_singlemode'),
(130, '2CORE_P.SC-SC_25m', '0', 'patchcore_singlemode'),
(131, '2CORE_P.SC-SC_30m', '0', 'patchcore_singlemode'),
(132, '2CORE_P.SC-SC_35m', '0', 'patchcore_singlemode'),
(133, '2CORE_P.SC-SC_40m', '0', 'patchcore_singlemode'),
(134, '2CORE_P.SC-SC_45m', '0', 'patchcore_singlemode'),
(135, '2CORE_P.SC-SC_50m', '0', 'patchcore_singlemode'),
(136, '2CORE_P.SC-SC_55m', '0', 'patchcore_singlemode'),
(137, '2CORE_P.SC-LC_1m', '47', 'patchcore_singlemode'),
(138, '2CORE_P.SC-LC_1,5m', '100', 'patchcore_singlemode'),
(139, '2CORE_P.SC-LC_2m', '44', 'patchcore_singlemode'),
(140, '2CORE_P.SC-LC_3m', '47', 'patchcore_singlemode'),
(141, '2CORE_P.SC-LC_5m', '17', 'patchcore_singlemode'),
(142, '2CORE_P.SC-LC_7m', '23', 'patchcore_singlemode'),
(143, '2CORE_P.SC-LC_10m', '13', 'patchcore_singlemode'),
(144, '2CORE_P.SC-LC_12m', '1', 'patchcore_singlemode'),
(145, '2CORE_P.SC-LC_15m', '14', 'patchcore_singlemode'),
(146, '2CORE_P.SC-LC_17m', '0', 'patchcore_singlemode'),
(147, '2CORE_P.SC-LC_20m', '0', 'patchcore_singlemode'),
(148, '2CORE_P.SC-LC_25m', '0', 'patchcore_singlemode'),
(149, '2CORE_P.SC-LC_30m', '3', 'patchcore_singlemode'),
(150, '2CORE_P.SC-LC_35m', '5', 'patchcore_singlemode'),
(151, '2CORE_P.SC-LC_40m', '0', 'patchcore_singlemode'),
(152, '2CORE_P.SC-LC_45m', '0', 'patchcore_singlemode'),
(153, '2CORE_P.SC-LC_50m', '0', 'patchcore_singlemode'),
(154, '2CORE_P.SC-LC_55m', '0', 'patchcore_singlemode'),
(155, '2CORE_P.SC-FC_1,5m', '0', 'patchcore_singlemode'),
(156, '2CORE_P.SC-FC_1m', '0', 'patchcore_singlemode'),
(157, '2CORE_P.SC-FC_2m', '0', 'patchcore_singlemode'),
(158, '2CORE_P.SC-FC_3m', '20', 'patchcore_singlemode'),
(159, '2CORE_P.SC-FC_5m', '47', 'patchcore_singlemode'),
(160, '2CORE_P.SC-FC_7m', '0', 'patchcore_singlemode'),
(161, '2CORE_P.SC-FC_10m', '11', 'patchcore_singlemode'),
(162, '2CORE_P.SC-FC_12m', '0', 'patchcore_singlemode'),
(163, '2CORE_P.SC-FC_15m', '19', 'patchcore_singlemode'),
(164, '2CORE_P.SC-FC_17m', '0', 'patchcore_singlemode'),
(165, '2CORE_P.SC-FC_20m', '1', 'patchcore_singlemode'),
(166, '2CORE_P.SC-FC_25m', '0', 'patchcore_singlemode'),
(167, '2CORE_P.SC-FC_30m', '0', 'patchcore_singlemode'),
(168, '2CORE_P.SC-FC_35m', '0', 'patchcore_singlemode'),
(169, '2CORE_P.SC-FC_40m', '0', 'patchcore_singlemode'),
(170, '2CORE_P.SC-FC_45m', '0', 'patchcore_singlemode'),
(171, '2CORE_P.SC-FC_50m', '0', 'patchcore_singlemode'),
(172, '2CORE_P.SC-FC_55m', '0', 'patchcore_singlemode'),
(173, '2CORE_P.LC-LC_1,5m', '11', 'patchcore_singlemode'),
(174, '2CORE_P.LC-LC_1m', '19', 'patchcore_singlemode'),
(175, '2CORE_P.LC-LC_2m', '5', 'patchcore_singlemode'),
(176, '2CORE_P.LC-LC_3m', '42', 'patchcore_singlemode'),
(177, '2CORE_P.LC-LC_5m', '37', 'patchcore_singlemode'),
(178, '2CORE_P.LC-LC_7m', '7', 'patchcore_singlemode'),
(179, '2CORE_P.LC-LC_10m', '22', 'patchcore_singlemode'),
(180, '2CORE_P.LC-LC_12m', '0', 'patchcore_singlemode'),
(181, '2CORE_P.LC-LC_15m', '14', 'patchcore_singlemode'),
(182, '2CORE_P.LC-LC_17m', '0', 'patchcore_singlemode'),
(183, '2CORE_P.LC-LC_20m', '8', 'patchcore_singlemode'),
(184, '2CORE_P.LC-LC_25m', '0', 'patchcore_singlemode'),
(185, '2CORE_P.LC-LC_30m', '3', 'patchcore_singlemode'),
(186, '2CORE_P.LC-LC_35m', '6', 'patchcore_singlemode'),
(187, '2CORE_P.LC-LC_40m', '0', 'patchcore_singlemode'),
(188, '2CORE_P.LC-LC_45m', '0', 'patchcore_singlemode'),
(189, '2CORE_P.LC-LC_50m', '0', 'patchcore_singlemode'),
(190, '2CORE_P.LC-LC_55m', '0', 'patchcore_singlemode'),
(191, '2CORE_P.LC-LC_60m', '1', 'patchcore_singlemode'),
(192, '2CORE_P.FC-FC_1,5m', '0', 'patchcore_singlemode'),
(193, '2CORE_P.FC-FC_1m', '0', 'patchcore_singlemode'),
(194, '2CORE_P.FC-FC_2m', '0', 'patchcore_singlemode'),
(195, '2CORE_P.FC-FC_3m', '9', 'patchcore_singlemode'),
(196, '2CORE_P.FC-FC_5m', '9', 'patchcore_singlemode'),
(197, '2CORE_P.FC-FC_7m', '0', 'patchcore_singlemode'),
(198, '2CORE_P.FC-FC_10m', '9', 'patchcore_singlemode'),
(199, '2CORE_P.FC-FC_12m', '0', 'patchcore_singlemode'),
(200, '2CORE_P.FC-FC_15m', '8', 'patchcore_singlemode'),
(201, '2CORE_P.FC-FC_17m', '0', 'patchcore_singlemode'),
(202, '2CORE_P.FC-FC_20m', '0', 'patchcore_singlemode'),
(203, '2CORE_P.FC-FC_25m', '0', 'patchcore_singlemode'),
(204, '2CORE_P.FC-FC_30m', '0', 'patchcore_singlemode'),
(205, '2CORE_P.FC-FC_35m', '0', 'patchcore_singlemode'),
(206, '2CORE_P.FC-FC_40m', '0', 'patchcore_singlemode'),
(207, '2CORE_P.FC-FC_45m', '0', 'patchcore_singlemode'),
(208, '2CORE_P.FC-FC_50m', '0', 'patchcore_singlemode'),
(209, '2CORE_P.FC-FC_55m', '0', 'patchcore_singlemode'),
(210, '2CORE_P.FC-LC_1,5m', '8', 'patchcore_singlemode'),
(211, '2CORE_P.FC-LC_1m', '0', 'patchcore_singlemode'),
(212, '2CORE_P.FC-LC_2m', '0', 'patchcore_singlemode'),
(213, '2CORE_P.FC-LC_3m', '7', 'patchcore_singlemode'),
(214, '2CORE_P.FC-LC_5m', '11', 'patchcore_singlemode'),
(215, '2CORE_P.FC-LC_7m', '27', 'patchcore_singlemode'),
(216, '2CORE_P.FC-LC_10m', '20', 'patchcore_singlemode'),
(217, '2CORE_P.FC-LC_12m', '0', 'patchcore_singlemode'),
(218, '2CORE_P.FC-LC_15m', '12', 'patchcore_singlemode'),
(219, '2CORE_P.FC-LC_17m', '0', 'patchcore_singlemode'),
(220, '2CORE_P.FC-LC_20m', '9', 'patchcore_singlemode'),
(221, '2CORE_P.FC-LC_25m', '0', 'patchcore_singlemode'),
(222, '2CORE_P.FC-LC_30m', '4', 'patchcore_singlemode'),
(223, '2CORE_P.FC-LC_35m', '0', 'patchcore_singlemode'),
(224, '2CORE_P.FC-LC_40m', '0', 'patchcore_singlemode'),
(225, '2CORE_P.FC-LC_45m', '0', 'patchcore_singlemode'),
(226, '2CORE_P.FC-LC_50m', '0', 'patchcore_singlemode'),
(227, '2CORE_P.FC-LC_55m', '0', 'patchcore_singlemode'),
(228, '2CORE_P.FC-ST_30m', '1', 'patchcore_singlemode'),
(229, '2CORE_P.SC-SC.APC_1m', '99', 'patchcore_singlemode'),
(230, '2CORE_P.SC-SC.APC_1,5m', '7', 'patchcore_singlemode'),
(231, '2CORE_P.SC-SC.APC_2m', '0', 'patchcore_singlemode'),
(232, '2CORE_P.SC-SC.APC_3m', '14', 'patchcore_singlemode'),
(233, '2CORE_P.SC-SC.APC_5m', '0', 'patchcore_singlemode'),
(234, '2CORE_P.SC-SC.APC_7m', '0', 'patchcore_singlemode'),
(235, '2CORE_P.SC-SC.APC_10m', '0', 'patchcore_singlemode'),
(236, '2CORE_P.SC-SC.APC_30m', '0', 'patchcore_singlemode'),
(237, '1CORE_P.SC-SC_1,5m', '0', 'patchcore_multimode'),
(238, '1CORE_P.SC-SC_1m', '0', 'patchcore_multimode'),
(239, '1CORE_P.SC-SC_2m', '0', 'patchcore_multimode'),
(240, '1CORE_P.SC-SC_3m', '0', 'patchcore_multimode'),
(241, '1CORE_P.SC-SC_5m', '0', 'patchcore_multimode'),
(242, '1CORE_P.SC-SC_7m', '0', 'patchcore_multimode'),
(243, '1CORE_P.SC-SC_10m', '0', 'patchcore_multimode'),
(244, '1CORE_P.SC-SC_12m', '0', 'patchcore_multimode'),
(245, '1CORE_P.SC-SC_15m', '0', 'patchcore_multimode'),
(246, '1CORE_P.SC-SC_17m', '0', 'patchcore_multimode'),
(247, '1CORE_P.SC-SC_20m', '0', 'patchcore_multimode'),
(248, '1CORE_P.SC-SC_25m', '0', 'patchcore_multimode'),
(249, '1CORE_P.SC-SC_30m', '0', 'patchcore_multimode'),
(250, '1CORE_P.SC-SC_35m', '0', 'patchcore_multimode'),
(251, '1CORE_P.SC-SC_40m', '0', 'patchcore_multimode'),
(252, '1CORE_P.SC-SC_45m', '0', 'patchcore_multimode'),
(253, '1CORE_P.SC-SC_50m', '0', 'patchcore_multimode'),
(254, '1CORE_P.SC-SC_55m', '0', 'patchcore_multimode'),
(255, '1CORE_P.SC-LC_1,5m', '0', 'patchcore_multimode'),
(256, '1CORE_P.SC-LC_1m', '0', 'patchcore_multimode'),
(257, '1CORE_P.SC-LC_2m', '0', 'patchcore_multimode'),
(258, '1CORE_P.SC-LC_3m', '0', 'patchcore_multimode'),
(259, '1CORE_P.SC-LC_5m', '0', 'patchcore_multimode'),
(260, '1CORE_P.SC-LC_7m', '0', 'patchcore_multimode'),
(261, '1CORE_P.SC-LC_10m', '0', 'patchcore_multimode'),
(262, '1CORE_P.SC-LC_12m', '0', 'patchcore_multimode'),
(263, '1CORE_P.SC-LC_15m', '0', 'patchcore_multimode'),
(264, '1CORE_P.SC-LC_17m', '0', 'patchcore_multimode'),
(265, '1CORE_P.SC-LC_20m', '0', 'patchcore_multimode'),
(266, '1CORE_P.SC-LC_25m', '0', 'patchcore_multimode'),
(267, '1CORE_P.SC-LC_30m', '0', 'patchcore_multimode'),
(268, '1CORE_P.SC-LC_35m', '0', 'patchcore_multimode'),
(269, '1CORE_P.SC-LC_40m', '0', 'patchcore_multimode'),
(270, '1CORE_P.SC-LC_45m', '0', 'patchcore_multimode'),
(271, '1CORE_P.SC-LC_50m', '0', 'patchcore_multimode'),
(272, '1CORE_P.SC-LC_55m', '0', 'patchcore_multimode'),
(273, '1CORE_P.SC-FC_1,5m', '0', 'patchcore_multimode'),
(274, '1CORE_P.SC-FC_1m', '0', 'patchcore_multimode'),
(275, '1CORE_P.SC-FC_2m', '0', 'patchcore_multimode'),
(276, '1CORE_P.SC-FC_3m', '0', 'patchcore_multimode'),
(277, '1CORE_P.SC-FC_5m', '0', 'patchcore_multimode'),
(278, '1CORE_P.SC-FC_7m', '0', 'patchcore_multimode'),
(279, '1CORE_P.SC-FC_10m', '0', 'patchcore_multimode'),
(280, '1CORE_P.SC-FC_12m', '0', 'patchcore_multimode'),
(281, '1CORE_P.SC-FC_15m', '0', 'patchcore_multimode'),
(282, '1CORE_P.SC-FC_17m', '0', 'patchcore_multimode'),
(283, '1CORE_P.SC-FC_20m', '0', 'patchcore_multimode'),
(284, '1CORE_P.SC-FC_25m', '0', 'patchcore_multimode'),
(285, '1CORE_P.SC-FC_30m', '0', 'patchcore_multimode'),
(286, '1CORE_P.SC-FC_35m', '0', 'patchcore_multimode'),
(287, '1CORE_P.SC-FC_40m', '0', 'patchcore_multimode'),
(288, '1CORE_P.SC-FC_45m', '0', 'patchcore_multimode'),
(289, '1CORE_P.SC-FC_50m', '0', 'patchcore_multimode'),
(290, '1CORE_P.SC-FC_55m', '0', 'patchcore_multimode'),
(291, '1CORE_P.LC-LC_1,5m', '0', 'patchcore_multimode'),
(292, '1CORE_P.LC-LC_1m', '0', 'patchcore_multimode'),
(293, '1CORE_P.LC-LC_2m', '0', 'patchcore_multimode'),
(294, '1CORE_P.LC-LC_3m', '0', 'patchcore_multimode'),
(295, '1CORE_P.LC-LC_5m', '0', 'patchcore_multimode'),
(296, '1CORE_P.LC-LC_7m', '0', 'patchcore_multimode'),
(297, '1CORE_P.LC-LC_10m', '0', 'patchcore_multimode'),
(298, '1CORE_P.LC-LC_12m', '0', 'patchcore_multimode'),
(299, '1CORE_P.LC-LC_15m', '0', 'patchcore_multimode'),
(300, '1CORE_P.LC-LC_17m', '0', 'patchcore_multimode'),
(301, '1CORE_P.LC-LC_20m', '0', 'patchcore_multimode'),
(302, '1CORE_P.LC-LC_25m', '0', 'patchcore_multimode'),
(303, '1CORE_P.LC-LC_30m', '0', 'patchcore_multimode'),
(304, '1CORE_P.LC-LC_35m', '0', 'patchcore_multimode'),
(305, '1CORE_P.LC-LC_40m', '0', 'patchcore_multimode'),
(306, '1CORE_P.LC-LC_45m', '0', 'patchcore_multimode'),
(307, '1CORE_P.LC-LC_50m', '0', 'patchcore_multimode'),
(308, '1CORE_P.LC-LC_55m', '0', 'patchcore_multimode'),
(309, '1CORE_P.FC-FC_1,5m', '0', 'patchcore_multimode'),
(310, '1CORE_P.FC-FC_1m', '0', 'patchcore_multimode'),
(311, '1CORE_P.FC-FC_2m', '0', 'patchcore_multimode'),
(312, '1CORE_P.FC-FC_3m', '0', 'patchcore_multimode'),
(313, '1CORE_P.FC-FC_5m', '0', 'patchcore_multimode'),
(314, '1CORE_P.FC-FC_7m', '0', 'patchcore_multimode'),
(315, '1CORE_P.FC-FC_10m', '0', 'patchcore_multimode'),
(316, '1CORE_P.FC-FC_12m', '0', 'patchcore_multimode'),
(317, '1CORE_P.FC-FC_15m', '0', 'patchcore_multimode'),
(318, '1CORE_P.FC-FC_17m', '0', 'patchcore_multimode'),
(319, '1CORE_P.FC-FC_20m', '0', 'patchcore_multimode'),
(320, '1CORE_P.FC-FC_25m', '0', 'patchcore_multimode'),
(321, '1CORE_P.FC-FC_30m', '0', 'patchcore_multimode'),
(322, '1CORE_P.FC-FC_35m', '0', 'patchcore_multimode'),
(323, '1CORE_P.FC-FC_40m', '0', 'patchcore_multimode'),
(324, '1CORE_P.FC-FC_45m', '0', 'patchcore_multimode'),
(325, '1CORE_P.FC-FC_50m', '0', 'patchcore_multimode'),
(326, '1CORE_P.FC-FC_55m', '0', 'patchcore_multimode'),
(327, '1CORE_P.FC-LC_1,5m', '0', 'patchcore_multimode'),
(328, '1CORE_P.FC-LC_1m', '0', 'patchcore_multimode'),
(329, '1CORE_P.FC-LC_2m', '0', 'patchcore_multimode'),
(330, '1CORE_P.FC-LC_3m', '0', 'patchcore_multimode'),
(331, '1CORE_P.FC-LC_5m', '0', 'patchcore_multimode'),
(332, '1CORE_P.FC-LC_7m', '0', 'patchcore_multimode'),
(333, '1CORE_P.FC-LC_10m', '0', 'patchcore_multimode'),
(334, '1CORE_P.FC-LC_12m', '0', 'patchcore_multimode'),
(335, '1CORE_P.FC-LC_15m', '0', 'patchcore_multimode'),
(336, '1CORE_P.FC-LC_17m', '0', 'patchcore_multimode'),
(337, '1CORE_P.FC-LC_20m', '0', 'patchcore_multimode'),
(338, '1CORE_P.FC-LC_25m', '0', 'patchcore_multimode'),
(339, '1CORE_P.FC-LC_30m', '0', 'patchcore_multimode'),
(340, '1CORE_P.FC-LC_35m', '0', 'patchcore_multimode'),
(341, '1CORE_P.FC-LC_40m', '0', 'patchcore_multimode'),
(342, '1CORE_P.FC-LC_45m', '0', 'patchcore_multimode'),
(343, '1CORE_P.FC-LC_50m', '0', 'patchcore_multimode'),
(344, '1CORE_P.FC-LC_55m', '0', 'patchcore_multimode'),
(345, '2CORE_P.SC-SC_1,5m', '2', 'patchcore_multimode'),
(346, '2CORE_P.SC-SC_1m', '0', 'patchcore_multimode'),
(347, '2CORE_P.SC-SC_2m', '0', 'patchcore_multimode'),
(348, '2CORE_P.SC-SC_3m', '0', 'patchcore_multimode'),
(349, '2CORE_P.SC-SC_5m', '0', 'patchcore_multimode'),
(350, '2CORE_P.SC-SC_7m', '0', 'patchcore_multimode'),
(351, '2CORE_P.SC-SC_10m', '0', 'patchcore_multimode'),
(352, '2CORE_P.SC-SC_12m', '0', 'patchcore_multimode'),
(353, '2CORE_P.SC-SC_15m', '0', 'patchcore_multimode'),
(354, '2CORE_P.SC-SC_17m', '0', 'patchcore_multimode'),
(355, '2CORE_P.SC-SC_20m', '0', 'patchcore_multimode'),
(356, '2CORE_P.SC-SC_25m', '0', 'patchcore_multimode'),
(357, '2CORE_P.SC-SC_30m', '0', 'patchcore_multimode'),
(358, '2CORE_P.SC-SC_35m', '0', 'patchcore_multimode'),
(359, '2CORE_P.SC-SC_40m', '0', 'patchcore_multimode'),
(360, '2CORE_P.SC-SC_45m', '0', 'patchcore_multimode'),
(361, '2CORE_P.SC-SC_50m', '0', 'patchcore_multimode'),
(362, '2CORE_P.SC-SC_55m', '0', 'patchcore_multimode'),
(363, '2CORE_P.SC-LC_1,5m', '0', 'patchcore_multimode'),
(364, '2CORE_P.SC-LC_1m', '0', 'patchcore_multimode'),
(365, '2CORE_P.SC-LC_2m', '0', 'patchcore_multimode'),
(366, '2CORE_P.SC-LC_3m', '0', 'patchcore_multimode'),
(367, '2CORE_P.SC-LC_5m', '0', 'patchcore_multimode'),
(368, '2CORE_P.SC-LC_7m', '0', 'patchcore_multimode'),
(369, '2CORE_P.SC-LC_10m', '13', 'patchcore_multimode'),
(370, '2CORE_P.SC-LC_12m', '0', 'patchcore_multimode'),
(371, '2CORE_P.SC-LC_15m', '38', 'patchcore_multimode'),
(372, '2CORE_P.SC-LC_17m', '0', 'patchcore_multimode'),
(373, '2CORE_P.SC-LC_20m', '2', 'patchcore_multimode'),
(374, '2CORE_P.SC-LC_25m', '0', 'patchcore_multimode'),
(375, '2CORE_P.SC-LC_30m', '0', 'patchcore_multimode'),
(376, '2CORE_P.SC-LC_35m', '0', 'patchcore_multimode'),
(377, '2CORE_P.SC-LC_40m', '0', 'patchcore_multimode'),
(378, '2CORE_P.SC-LC_45m', '0', 'patchcore_multimode'),
(379, '2CORE_P.SC-LC_50m', '0', 'patchcore_multimode'),
(380, '2CORE_P.SC-LC_55m', '0', 'patchcore_multimode'),
(381, '2CORE_P.SC-FC_1,5m', '0', 'patchcore_multimode'),
(382, '2CORE_P.SC-FC_1m', '0', 'patchcore_multimode'),
(383, '2CORE_P.SC-FC_2m', '0', 'patchcore_multimode'),
(384, '2CORE_P.SC-FC_3m', '0', 'patchcore_multimode'),
(385, '2CORE_P.SC-FC_5m', '0', 'patchcore_multimode'),
(386, '2CORE_P.SC-FC_7m', '0', 'patchcore_multimode'),
(387, '2CORE_P.SC-FC_10m', '0', 'patchcore_multimode'),
(388, '2CORE_P.SC-FC_12m', '0', 'patchcore_multimode'),
(389, '2CORE_P.SC-FC_15m', '0', 'patchcore_multimode'),
(390, '2CORE_P.SC-FC_17m', '0', 'patchcore_multimode'),
(391, '2CORE_P.SC-FC_20m', '0', 'patchcore_multimode'),
(392, '2CORE_P.SC-FC_25m', '0', 'patchcore_multimode'),
(393, '2CORE_P.SC-FC_30m', '0', 'patchcore_multimode'),
(394, '2CORE_P.SC-FC_35m', '0', 'patchcore_multimode'),
(395, '2CORE_P.SC-FC_40m', '0', 'patchcore_multimode'),
(396, '2CORE_P.SC-FC_45m', '0', 'patchcore_multimode'),
(397, '2CORE_P.SC-FC_50m', '0', 'patchcore_multimode'),
(398, '2CORE_P.SC-FC_55m', '0', 'patchcore_multimode'),
(399, '2CORE_P.LC-LC_1m', '10', 'patchcore_multimode'),
(400, '2CORE_P.LC-LC_1,5m', '0', 'patchcore_multimode'),
(401, '2CORE_P.LC-LC_2m', '0', 'patchcore_multimode'),
(402, '2CORE_P.LC-LC_3m', '5', 'patchcore_multimode'),
(403, '2CORE_P.LC-LC_5m', '3', 'patchcore_multimode'),
(404, '2CORE_P.LC-LC_7m', '0', 'patchcore_multimode'),
(405, '2CORE_P.LC-LC_10m', '10', 'patchcore_multimode'),
(406, '2CORE_P.LC-LC_12m', '0', 'patchcore_multimode'),
(407, '2CORE_P.LC-LC_15m', '1', 'patchcore_multimode'),
(408, '2CORE_P.LC-LC_17m', '0', 'patchcore_multimode'),
(409, '2CORE_P.LC-LC_20m', '2', 'patchcore_multimode'),
(410, '2CORE_P.LC-LC_25m', '0', 'patchcore_multimode'),
(411, '2CORE_P.LC-LC_30m', '0', 'patchcore_multimode'),
(412, '2CORE_P.LC-LC_35m', '0', 'patchcore_multimode'),
(413, '2CORE_P.LC-LC_40m', '1', 'patchcore_multimode'),
(414, '2CORE_P.LC-LC_45m', '0', 'patchcore_multimode'),
(415, '2CORE_P.LC-LC_50m', '0', 'patchcore_multimode'),
(416, '2CORE_P.LC-LC_55m', '0', 'patchcore_multimode'),
(417, '2CORE_P.FC-FC_1,5m', '0', 'patchcore_multimode'),
(418, '2CORE_P.FC-FC_1m', '0', 'patchcore_multimode'),
(419, '2CORE_P.FC-FC_2m', '0', 'patchcore_multimode'),
(420, '2CORE_P.FC-FC_3m', '2', 'patchcore_multimode'),
(421, '2CORE_P.FC-FC_5m', '0', 'patchcore_multimode'),
(422, '2CORE_P.FC-FC_7m', '0', 'patchcore_multimode'),
(423, '2CORE_P.FC-FC_10m', '0', 'patchcore_multimode'),
(424, '2CORE_P.FC-FC_12m', '0', 'patchcore_multimode'),
(425, '2CORE_P.FC-FC_15m', '0', 'patchcore_multimode'),
(426, '2CORE_P.FC-FC_17m', '0', 'patchcore_multimode'),
(427, '2CORE_P.FC-FC_20m', '0', 'patchcore_multimode'),
(428, '2CORE_P.FC-FC_25m', '0', 'patchcore_multimode'),
(429, '2CORE_P.FC-FC_30m', '0', 'patchcore_multimode'),
(430, '2CORE_P.FC-FC_35m', '0', 'patchcore_multimode'),
(431, '2CORE_P.FC-FC_40m', '0', 'patchcore_multimode'),
(432, '2CORE_P.FC-FC_45m', '0', 'patchcore_multimode'),
(433, '2CORE_P.FC-FC_50m', '0', 'patchcore_multimode'),
(434, '2CORE_P.FC-FC_55m', '0', 'patchcore_multimode'),
(435, '2CORE_P.FC-LC_1,5m', '0', 'patchcore_multimode'),
(436, '2CORE_P.FC-LC_1m', '0', 'patchcore_multimode'),
(437, '2CORE_P.FC-LC_2m', '0', 'patchcore_multimode'),
(438, '2CORE_P.FC-LC_3m', '4', 'patchcore_multimode'),
(439, '2CORE_P.FC-LC_4m', '10', 'patchcore_multimode'),
(440, '2CORE_P.FC-LC_5m', '0', 'patchcore_multimode'),
(441, '2CORE_P.FC-LC_7m', '20', 'patchcore_multimode'),
(442, '2CORE_P.FC-LC_10m', '4', 'patchcore_multimode'),
(443, '2CORE_P.FC-LC_12m', '0', 'patchcore_multimode'),
(444, '2CORE_P.FC-LC_15m', '9', 'patchcore_multimode'),
(445, '2CORE_P.FC-LC_17m', '0', 'patchcore_multimode'),
(446, '2CORE_P.FC-LC_20m', '9', 'patchcore_multimode'),
(447, '2CORE_P.FC-LC_25m', '0', 'patchcore_multimode'),
(448, '2CORE_P.FC-LC_30m', '0', 'patchcore_multimode'),
(449, '2CORE_P.FC-LC_35m', '0', 'patchcore_multimode'),
(450, '2CORE_P.FC-LC_40m', '0', 'patchcore_multimode'),
(451, '2CORE_P.FC-LC_45m', '0', 'patchcore_multimode'),
(452, '2CORE_P.FC-LC_50m', '1', 'patchcore_multimode'),
(453, '2CORE_P.FC-LC_55m', '0', 'patchcore_multimode'),
(454, '2CORE_P.LC-LC_5m_APC', '2', 'patchcore_multimode'),
(455, '2CORE_P.LC-LC_20m_APC', '2', 'patchcore_multimode'),
(456, 'CWDM-OUTDOOR_1:8', '1', 'foc'),
(457, 'CWDM-OUTDOOR_1:16', '4', 'foc'),
(458, 'CWDM-OUTDOOR_1:18', '1', 'foc'),
(459, 'CWDM-INDOOR_1:8', '0', 'foc'),
(460, 'CWDM-INDOOR_1:16', '5', 'foc'),
(461, 'CWDM-INDOOR_1:18', '0', 'foc'),
(462, 'PASSIVE-SPLITTER_1:8', '0', 'foc'),
(463, 'PASSIVE-SPLITTER_1:16', '0', 'foc'),
(464, 'JB_6core', '0', 'foc'),
(465, 'JB_24core', '1', 'foc'),
(466, 'JB_48core', '0', 'foc'),
(467, 'JB_96core', '0', 'foc'),
(468, 'JB_144core', '3', 'foc'),
(469, 'FAT_1:4', '0', 'foc'),
(470, 'FAT_1:8', '0', 'foc'),
(471, 'FDT_1:4', '0', 'foc'),
(472, 'FDT_1:8', '0', 'foc'),
(473, 'ODF_4port', '0', 'foc'),
(474, 'ODF_6port', '0', 'foc'),
(475, 'ODF_8port', '0', 'foc'),
(476, 'FIBER-PROTECTIVE-SLEEVES', '576', 'foc'),
(477, 'KONDOM-JB', '0', 'foc'),
(478, 'HOT-GUN', '4', 'foc'),
(479, 'GAS-HOTGUN', '8', 'foc'),
(480, 'BOX-ALFA', '0', 'foc'),
(481, 'BOX-SPLITTER', '2', 'foc'),
(482, 'DEADEND', '0', 'foc'),
(483, 'SUSPENSION', '0', 'foc'),
(484, 'TIS-BESAR_hitam', '2578', 'foc'),
(485, 'TIS-KECIL_putih', '0', 'foc'),
(486, 'TIS-KECIL_hitam', '68', 'foc'),
(487, 'ONE-CLICK-CLEANER', '4', 'foc'),
(488, 'KERTAS-FILE', '700', 'foc'),
(489, 'STEEL-BAND', '1', 'foc'),
(490, 'TALI-TANGGA', '6', 'foc'),
(491, 'PIGTAIL-SC-UPC', '321', 'ftth'),
(492, 'PIGTAIL-SC-APC', '137', 'ftth'),
(493, 'PIGTAIL-LC', '9', 'ftth'),
(494, 'PIGTAIL-FC', '0', 'ftth'),
(495, 'ROSET-SC-APC', '89', 'ftth'),
(496, 'ROSET-SC-UPC', '128', 'ftth'),
(497, 'KONEKTOR-SC-APC', '49', 'ftth'),
(498, 'KONEKTOR-SC-UPC', '148', 'ftth'),
(499, 'KONEKTOR-FC', '0', 'ftth'),
(500, 'KONEKTOR-LC', '0', 'ftth'),
(501, 'FASTCONNECTOR/SOC', '0', 'ftth'),
(502, 'S-CLAMP', '0', 'ftth'),
(503, 'DW/DROPCORE', '324', 'ftth'),
(504, 'PRECONNECT-50M', '0', 'ftth'),
(505, 'PRECONNECT-75M', '0', 'ftth'),
(506, 'PRECONNECT-100M', '0', 'ftth'),
(507, 'PRECONNECT-150M', '0', 'ftth'),
(508, 'PRECONNECT-200M', '0', 'ftth'),
(509, 'RJ45-CAT5-PLAT', '100', 'fot'),
(510, 'RJ45-CAT5E', '1612', 'fot'),
(511, 'PLATBOOT-RJ45', '0', 'fot'),
(512, 'UTP-CAT6', '5109', 'fot'),
(513, 'UTP-CAT5E', '248', 'fot'),
(514, 'STP-CAT6', '290', 'fot'),
(515, 'KLEM-CABLE_7MILI', '50', 'fot'),
(516, 'CSNAT', '40', 'fot'),
(517, 'ATTENUATOR_3db', '0', 'fot'),
(518, 'ATTENUATOR_5db', '0', 'fot'),
(519, 'ATTENUATOR_7db', '0', 'fot'),
(520, 'ATTENUATOR_10db', '0', 'fot'),
(521, 'GLCT', '5', 'fot'),
(522, 'SFP-DUALCORE_ER', '0', 'fot'),
(523, 'SFP-DUALCORE_LR', '0', 'fot'),
(524, 'SFP-DUALCORE_LH', '0', 'fot'),
(525, 'SFP-DUALCORE_SR', '0', 'fot'),
(526, 'SFP-DUALCORE_SX', '0', 'fot'),
(527, 'SFP-DUALCORE_1270', '8', 'fot'),
(528, 'SFP-DUALCORE_1290', '7', 'fot'),
(529, 'SFP-DUALCORE_1310', '9', 'fot'),
(530, 'SFP-DUALCORE_1330', '11', 'fot'),
(531, 'SFP-DUALCORE_1350', '0', 'fot'),
(532, 'SFP-DUALCORE_1370', '3', 'fot'),
(533, 'SFP-DUALCORE_1390', '10', 'fot'),
(534, 'SFP-DUALCORE_1410', '6', 'fot'),
(535, 'SFP-DUALCORE_1430', '6', 'fot'),
(536, 'SFP-DUALCORE_1450', '8', 'fot'),
(537, 'SFP-DUALCORE_1470', '6', 'fot'),
(538, 'SFP-DUALCORE_1490', '6', 'fot'),
(539, 'SFP-DUALCORE_1510', '2', 'fot'),
(540, 'SFP-DUALCORE_1530', '8', 'fot'),
(541, 'SFP-DUALCORE_1550', '6', 'fot'),
(542, 'SFP-DUALCORE_1570', '7', 'fot'),
(543, 'SFP-DUALCORE_1590', '2', 'fot'),
(544, 'SFP-DUALCORE_1610', '6', 'fot'),
(545, 'SFP-SINGLECORE_1310', '21', 'fot'),
(546, 'SFP-SINGLECORE_1550', '21', 'fot'),
(547, 'SKUN-TUNGGAL-BOLONG', '91', 'fot'),
(548, 'SKUN-TUNGGAL', '92', 'fot'),
(549, 'SKUN-Y', '136', 'fot'),
(550, 'SKUN-BULAT', '151', 'fot'),
(552, 'SFP-GPON OLT-CLASS B+', '1', 'fot'),
(553, '1CORE_P.SC-SC_15M', '1', 'patchcore_singlemode'),
(554, 'UTP_CAT6_BIRU', '256', 'fot');

-- --------------------------------------------------------

--
-- Table structure for table `menu_divisi`
--

CREATE TABLE `menu_divisi` (
  `id` int(3) NOT NULL,
  `divisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_divisi`
--

INSERT INTO `menu_divisi` (`id`, `divisi`) VALUES
(2, 'Sobat Bangun Telco'),
(3, 'JJC'),
(4, 'GSP'),
(5, 'KDK'),
(6, 'Internal Stroomnet'),
(7, 'SBU Aktivasi Publik');

-- --------------------------------------------------------

--
-- Table structure for table `menu_penerima`
--

CREATE TABLE `menu_penerima` (
  `id` int(3) NOT NULL,
  `penerima` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_penerima`
--

INSERT INTO `menu_penerima` (`id`, `penerima`) VALUES
(2, 'Nurul'),
(3, 'Riki'),
(4, 'Pandu'),
(5, 'Internal Stroomnet');

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan_validator`
--

CREATE TABLE `pengadaan_validator` (
  `id` int(3) NOT NULL,
  `nama_perangkat` varchar(100) NOT NULL,
  `no_spr` varchar(100) NOT NULL,
  `no_sn` varchar(100) NOT NULL,
  `jumlah` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengadaan_validator`
--

INSERT INTO `pengadaan_validator` (`id`, `nama_perangkat`, `no_spr`, `no_sn`, `jumlah`) VALUES
(3, 'Kalkun', '9898121212124444444444ccc', '00201241212', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tool_validator`
--

CREATE TABLE `tool_validator` (
  `id` int(5) NOT NULL,
  `tool` varchar(100) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tipe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tool_validator`
--

INSERT INTO `tool_validator` (`id`, `tool`, `jumlah`, `tipe`) VALUES
(2, 'opm02', 1, 'opm'),
(4, 'opm04', 1, 'opm'),
(5, 'opm05', 1, 'opm'),
(6, 'opm06', 1, 'opm'),
(7, 'opm07', 1, 'opm'),
(8, 'con01', 0, 'console'),
(9, 'con02', 0, 'console'),
(10, 'con03', 0, 'console'),
(11, 'con04', 1, 'console'),
(12, 'con05', 1, 'console'),
(13, 'con06', 1, 'console'),
(14, 'con07', 1, 'console'),
(15, 'con08', 1, 'console'),
(16, 'con09', 1, 'console'),
(17, 'con10', 1, 'console'),
(18, 'con11', 1, 'console'),
(19, 'crp01', 0, 'crimping'),
(21, 'crp03', 0, 'crimping'),
(22, 'crp04', 1, 'crimping'),
(23, 'crp05', 1, 'crimping'),
(24, 'crp06', 1, 'crimping'),
(25, 'crp07', 1, 'crimping'),
(35, 'lsr01', 1, 'laser'),
(36, 'lsr02', 1, 'laser'),
(37, 'lsr03', 1, 'laser'),
(38, 'lsr04', 1, 'laser'),
(43, 'WLM01', 1, 'walkingmeter'),
(45, 'WLM03', 1, 'walkingmeter'),
(46, 'WLM04', 1, 'walkingmeter'),
(47, 'WLM05', 1, 'walkingmeter'),
(48, 'WLM06', 1, 'walkingmeter'),
(49, 'TRP01', 1, 'teropong'),
(50, 'TRP02', 1, 'teropong'),
(52, 'SOFTTOOLKITS01', 1, 'toolkit'),
(53, 'HARDTOOLKITS01', 1, 'toolkit'),
(78, 'GPS01', 1, 'gps'),
(79, 'GPS02', 1, 'gps'),
(80, 'T17-01', 1, 'tangga'),
(81, 'T17-02', 1, 'tangga'),
(82, 'T15-01', 1, 'tangga'),
(134, 'OTDR_EXFOFTB-200-V2-S1_SN:679204', 1, 'focaklik'),
(135, 'OTDR_YOKOGAWAAQ1200_SN:C3RA27011F', 1, 'focaklik'),
(136, 'OTDR_YOKOGAWAAQ1200A_SN:C3RA27013F', 1, 'focaklik'),
(137, 'OTDR_YOKOGAWAAQ1200_SN:C3QH27003F', 1, 'focaklik'),
(138, 'OTDR_EXFO_SN:679215', 1, 'focaklik'),
(139, 'OTDR_YOKOGAWAAQ1200_SN:C3RA27014F', 1, 'focaklik'),
(140, 'OTDR_EXFOFTB-200', 1, 'focaklik'),
(141, 'OTDR_YOKOGAWAAQ1270_SN:IA2P00739', 1, 'focaklik'),
(142, 'OTDR_YOKOGAWAAQ1200E_SN:C3RA27012F', 1, 'focaklik'),
(143, 'OTDR_YOKOGAWAAQ1200OTDR_SN:C3QH27002F', 1, 'focaklik'),
(144, 'OTDR_YOKOGAWAaq1200OTDR_SN:C3QJ07003F', 1, 'focaklik'),
(145, 'OTDR_EXFOFTB200_SN:679212', 1, 'focaklik'),
(146, 'OTDR_Yokogawa_AQ1215E_SN:C3VH05015F', 1, 'focaklik'),
(147, 'OTDR-09_YOKOGAWAAQ1215E_SN:C3VH05015F', 1, 'focaklik'),
(148, 'SPLICER-10_Fujikura70S+_SN:LY3NAOZ3CKV2D3H4', 1, 'focaklik'),
(149, 'SPLICER_FUJIKURA70S_SN:N2T8ED04VM9XXF1P', 1, 'focaklik'),
(150, 'SPLICER_FUJIKURAS70_SN:7V4C4N8DJ6FWL8WJ', 1, 'focaklik'),
(152, 'SPLICER_FUJIKURA60S_SN:52657', 1, 'focaklik'),
(153, 'SPLICER_FUJIKURAS70_SN:DNAB1AMJTFEJX969', 1, 'focaklik'),
(154, 'SPLICER_FUJIKURAS70_SN:ND9RYA9JCS0DR4Y', 1, 'focaklik'),
(155, 'SPLICER_FUJIKURA60S_SN:54651', 1, 'focaklik'),
(156, 'SPLICER_FUJIKURA60S_SN:54653', 1, 'focaklik'),
(157, 'SPLICER_FUJIKURA70S_SN:HVJ8NPPGEA3YBE2V', 1, 'focaklik'),
(158, 'SPLICER_FUJIKURA70S_SN:KCVF7HRYE4A4WLNE', 1, 'focaklik'),
(159, 'SPLICER_FUJIKURA60S_SN:52517', 1, 'focaklik'),
(160, 'SPLICER_FUJIKURA_70S_SN:AETC44B7JP1YDGJJ', 1, 'focaklik'),
(161, 'SPLICER_FUJIKURA70S_SN:52638', 1, 'focaklik'),
(162, 'SPLICER_Fujikura_70S+_SN:6GDLKWCERTGVY4ZW', 1, 'focaklik'),
(163, 'SPLICER_Fujikura70S+_SN:HEJKZ78J6MAXXTAB', 1, 'focaklik'),
(182, 'SPLICER-08_Fujikura_70S+_SN:HEJKZ78J6MAXXTAB', 1, 'aklis'),
(183, 'SPLICER-09_Fujikura_70S+_SN:6GDLKWCERTGVY4ZW', 1, 'aklis'),
(184, 'OTDR-10_YOKOGAWAAQ1215E_SN:C3VH05018F', 1, 'aklis'),
(185, 'Bertest_VeEX_VePAL_TX_130E+_#01_SN:VTEB01SC014205', 1, 'aklis'),
(186, 'Bertest_VeEX_VePAL_TX_130E+_#02_SN:VTEB01SC014206', 1, 'aklis'),
(187, 'Aten_ACT6000_SN:934', 1, 'aklis'),
(190, 'crp08', 1, 'crimping'),
(192, 'PK02', 1, 'printlabel'),
(193, 'PK03', 0, 'printlabel'),
(194, 'PS01', 0, 'printlabel'),
(195, 'PS02', 1, 'printlabel'),
(196, 'PS03', 1, 'printlabel'),
(197, 'PS04', 1, 'printlabel'),
(198, 'PB01', 1, 'printlabel'),
(199, 'PB02', 1, 'printlabel'),
(200, 'PB03', 1, 'printlabel'),
(201, 'PB04', 1, 'printlabel'),
(202, 'PB05', 1, 'printlabel'),
(203, 'PB06', 1, 'printlabel'),
(204, 'BERT1G01', 1, 'bertest'),
(205, 'BERT1G02', 1, 'bertest'),
(206, 'BERT10G01', 1, 'bertest'),
(207, 'LOOPBACK01', 1, 'bertest'),
(208, 'OBENG+01', 1, 'toolkit'),
(209, 'TANGPOTONG01', 1, 'toolkit'),
(210, 'TANGKOMB01', 1, 'toolkit'),
(211, 'TANGKOMB02', 1, 'toolkit'),
(212, 'HPK01', 1, 'helm'),
(213, 'HPK02', 1, 'helm'),
(215, 'HPK04', 0, 'helm'),
(216, 'HPK05', 1, 'helm'),
(217, 'HPK06', 1, 'helm'),
(218, 'HPK07', 1, 'helm'),
(219, 'HPK08', 1, 'helm'),
(220, 'HPK09', 1, 'helm'),
(221, 'HPK10', 1, 'helm'),
(222, 'HPK11', 1, 'helm'),
(223, 'HPK12', 1, 'helm'),
(224, 'HPK13', 1, 'helm'),
(225, 'HPK14', 1, 'helm'),
(226, 'HPK15', 1, 'helm'),
(227, 'HPK16', 1, 'helm'),
(228, 'HPB01', 1, 'helm'),
(229, 'HPB02', 1, 'helm'),
(230, 'HPB03', 1, 'helm'),
(231, 'HPB04', 1, 'helm'),
(232, 'HPM01', 1, 'helm'),
(233, 'HPM02', 1, 'helm'),
(234, 'HPP01', 1, 'helm'),
(235, 'GPS03RUSAK', 1, 'gps'),
(237, 'T15-02', 1, 'tangga'),
(238, 'WRMM01', 1, 'wearpack_rompi'),
(239, 'WRMX01', 1, 'wearpack_rompi'),
(240, 'WRBL01', 1, 'wearpack_rompi'),
(241, 'WRBX01', 1, 'wearpack_rompi'),
(242, 'WRBX02', 1, 'wearpack_rompi'),
(243, 'WRBX03', 1, 'wearpack_rompi'),
(244, 'WRBX04', 1, 'wearpack_rompi'),
(245, 'WRBX05', 1, 'wearpack_rompi'),
(246, 'WRBX06', 1, 'wearpack_rompi'),
(247, 'WRBXX01', 1, 'wearpack_rompi'),
(248, 'ROL01', 1, 'wearpack_rompi'),
(249, 'ROL02', 1, 'wearpack_rompi'),
(250, 'ROL03', 1, 'wearpack_rompi'),
(251, 'ROL04', 1, 'wearpack_rompi'),
(252, 'ROL05', 1, 'wearpack_rompi'),
(253, 'ROL06', 1, 'wearpack_rompi'),
(254, 'ROL07', 1, 'wearpack_rompi'),
(255, 'ROX01', 1, 'wearpack_rompi'),
(256, 'RML01', 1, 'wearpack_rompi'),
(257, 'RMX01', 1, 'wearpack_rompi'),
(258, 'KCM01', 1, 'wearpack_rompi'),
(259, 'KCM02', 1, 'wearpack_rompi'),
(260, 'KCM03', 1, 'wearpack_rompi'),
(261, 'KCM04', 1, 'wearpack_rompi'),
(262, 'KCM05', 1, 'wearpack_rompi'),
(263, 'KCM06', 1, 'wearpack_rompi'),
(264, 'KCM07', 1, 'wearpack_rompi'),
(265, 'KCM08', 1, 'wearpack_rompi'),
(266, 'KCM09', 1, 'wearpack_rompi'),
(267, 'KCM10', 1, 'wearpack_rompi'),
(268, 'PAYUNG01', 1, 'payung'),
(269, 'PAYUNG02', 1, 'payung'),
(270, 'PAYUNG03', 1, 'payung'),
(271, 'PAYUNG04', 1, 'payung'),
(272, 'PAYUNG05', 1, 'payung'),
(273, 'PAYUNG06', 1, 'payung'),
(274, 'PAYUNG07', 1, 'payung'),
(275, 'TONECHECK01', 1, 'aklik'),
(276, 'INV01', 1, 'aklik'),
(277, 'INV02', 1, 'aklik'),
(279, 'RPOWERMETER01', 1, 'aklik'),
(280, 'RPOWERMETER02', 1, 'aklik'),
(281, 'RPOWERMETER03', 1, 'aklik'),
(282, 'RPOWERMETER04', 1, 'aklik'),
(283, 'HS5700-01', 1, 'switchtest'),
(284, 'C2960LL01', 0, 'switchtest'),
(285, 'C2960LL02', 1, 'switchtest'),
(286, 'C2960LL03', 1, 'switchtest'),
(287, 'C2960LL04', 1, 'switchtest'),
(288, 'C2960LL05', 1, 'switchtest'),
(289, 'C2960PD01', 1, 'switchtest'),
(369, 'C2960SI01', 1, 'switchtest'),
(370, 'HPK03', 1, 'helm'),
(373, 'OBENGCOMB01', 1, 'toolkit'),
(374, 'OBENGCOMB02', 1, 'toolkit'),
(375, 'TANGSKUN01', 1, 'toolkit'),
(376, 'TANGSKUN02', 1, 'toolkit'),
(377, 'opm08', 1, 'opm'),
(378, 'opm09', 1, 'opm'),
(379, 'opm10', 1, 'opm'),
(380, 'opm11', 1, 'opm'),
(381, 'TANGPOTONG04', 1, 'toolkit'),
(382, 'WLM02', 1, 'walkingmeter'),
(383, 'opm01', 1, 'opm'),
(384, 'opm03', 1, 'opm'),
(385, 'PK01', 1, 'printlabel');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_material`
--

CREATE TABLE `transaksi_material` (
  `kode` varchar(255) NOT NULL,
  `material` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_peminjam`
--

CREATE TABLE `transaksi_peminjam` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pengadaan`
--

CREATE TABLE `transaksi_pengadaan` (
  `kode` varchar(100) NOT NULL,
  `perangkat` varchar(100) NOT NULL,
  `nospr` varchar(100) NOT NULL,
  `nosn` varchar(100) NOT NULL,
  `jumlah` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_soiouser`
--

CREATE TABLE `transaksi_soiouser` (
  `kode` varchar(255) NOT NULL,
  `soio` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_tool`
--

CREATE TABLE `transaksi_tool` (
  `kode` varchar(255) NOT NULL,
  `tool` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catatan_amal_pengembali`
--
ALTER TABLE `catatan_amal_pengembali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material_validator`
--
ALTER TABLE `material_validator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_divisi`
--
ALTER TABLE `menu_divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_penerima`
--
ALTER TABLE `menu_penerima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengadaan_validator`
--
ALTER TABLE `pengadaan_validator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_sn` (`no_sn`);

--
-- Indexes for table `tool_validator`
--
ALTER TABLE `tool_validator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tool` (`tool`);

--
-- Indexes for table `transaksi_material`
--
ALTER TABLE `transaksi_material`
  ADD KEY `kode` (`kode`(191));

--
-- Indexes for table `transaksi_peminjam`
--
ALTER TABLE `transaksi_peminjam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode` (`kode`(191));

--
-- Indexes for table `transaksi_pengadaan`
--
ALTER TABLE `transaksi_pengadaan`
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `transaksi_soiouser`
--
ALTER TABLE `transaksi_soiouser`
  ADD KEY `kode` (`kode`(191));

--
-- Indexes for table `transaksi_tool`
--
ALTER TABLE `transaksi_tool`
  ADD KEY `kode` (`kode`(191));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `catatan_amal_pengembali`
--
ALTER TABLE `catatan_amal_pengembali`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `material_validator`
--
ALTER TABLE `material_validator`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=555;

--
-- AUTO_INCREMENT for table `menu_divisi`
--
ALTER TABLE `menu_divisi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_penerima`
--
ALTER TABLE `menu_penerima`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengadaan_validator`
--
ALTER TABLE `pengadaan_validator`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tool_validator`
--
ALTER TABLE `tool_validator`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=386;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
