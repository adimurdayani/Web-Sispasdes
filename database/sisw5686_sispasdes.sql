-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2022 at 04:29 PM
-- Server version: 10.5.13-MariaDB-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisw5686_sispasdes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_aset`
--

CREATE TABLE `tb_aset` (
  `id_aset` int(11) NOT NULL,
  `nama_aset` varchar(128) NOT NULL,
  `harga` int(50) NOT NULL,
  `jml_aset` int(100) NOT NULL,
  `created_at` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_aset`
--

INSERT INTO `tb_aset` (`id_aset`, `nama_aset`, `harga`, `jml_aset`, `created_at`) VALUES
(2, 'Tenda', 400000, 1, '28 Dec 2021 13:42'),
(3, 'Sound System', 1000000, 2, '24 Dec 2021 11:03'),
(4, 'Kursi', 50000, 197, '03 Jan 2022 07:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aset_t_sewa`
--

CREATE TABLE `tb_aset_t_sewa` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `jml_barang` varchar(50) NOT NULL,
  `created_at` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_aset_t_sewa`
--

INSERT INTO `tb_aset_t_sewa` (`id`, `nama_barang`, `jml_barang`, `created_at`) VALUES
(2, 'Pasar Desa', '1', '22 Dec 2021'),
(3, 'Gedung (Aula)', '1', '22 Dec 2021'),
(4, 'Tanah Desa (Lapangan)', '1', '22 Dec 2021'),
(6, 'Hibah (Pemberian, seperti uang, tanah dll)', '1', '24 Dec 2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dusun`
--

CREATE TABLE `tb_dusun` (
  `id_dusun` int(11) NOT NULL,
  `nama_dusun` varchar(128) NOT NULL,
  `created_at` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dusun`
--

INSERT INTO `tb_dusun` (`id_dusun`, `nama_dusun`, `created_at`) VALUES
(1, 'TO\'KAILI', '26 Oct 2021'),
(2, 'BAKONG', '26 Oct 2021'),
(3, 'TERPADU', '26 Oct 2021'),
(4, 'KAJU DATU', '26 Oct 2021'),
(5, 'LEMOE\n', '26 Oct 2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_grup`
--

CREATE TABLE `tb_grup` (
  `id_grup` int(11) NOT NULL,
  `nama_grup` varchar(128) NOT NULL,
  `created_at` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_grup`
--

INSERT INTO `tb_grup` (`id_grup`, `nama_grup`, `created_at`) VALUES
(1, 'Administrator', '21 Oktober 2021'),
(2, 'User', '21 Oktober 2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kritik`
--

CREATE TABLE `tb_kritik` (
  `id_kritik` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kritik` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `created_at` varchar(123) NOT NULL,
  `tgl_kirim` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kritik`
--

INSERT INTO `tb_kritik` (`id_kritik`, `user_id`, `kritik`, `admin_id`, `jawaban`, `created_at`, `tgl_kirim`) VALUES
(2, 8, 'Kkkk', 1, '', '17 Dec 2021 11:42', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_namakk`
--

CREATE TABLE `tb_namakk` (
  `id_kk` int(11) NOT NULL,
  `dusun_id` int(50) NOT NULL,
  `nama_kk` varchar(128) NOT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `no_kk` varchar(50) DEFAULT NULL,
  `created_at` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_namakk`
--

INSERT INTO `tb_namakk` (`id_kk`, `dusun_id`, `nama_kk`, `nik`, `no_kk`, `created_at`) VALUES
(1, 1, 'KADDA', NULL, NULL, '30 Oct 2021'),
(2, 1, 'SINNONG', NULL, NULL, '30 Oct 2021'),
(3, 1, 'RITIK', NULL, NULL, '30 Oct 2021'),
(4, 1, 'BOGGIN', NULL, NULL, '30 Oct 2021'),
(5, 1, 'JUHADIR', NULL, NULL, '30 Oct 2021'),
(6, 1, 'HIKMA', NULL, NULL, '30 Oct 2021'),
(7, 1, 'SAYYA', NULL, NULL, '30 Oct 2021'),
(8, 1, 'DODI', NULL, NULL, '30 Oct 2021'),
(9, 1, 'SAENA', NULL, NULL, '30 Oct 2021'),
(10, 1, 'ANTON', NULL, NULL, '30 Oct 2021'),
(11, 1, 'SULHENRI', NULL, NULL, '30 Oct 2021'),
(12, 1, 'MAHIS', NULL, NULL, '30 Oct 2021'),
(13, 1, 'SUPA', NULL, NULL, '30 Oct 2021'),
(14, 1, 'ABDUL KHALIB', NULL, NULL, '30 Oct 2021'),
(15, 1, 'ALMUNAWAR', NULL, NULL, '30 Oct 2021'),
(16, 1, 'GUNA', NULL, NULL, '23 Nov 2021'),
(18, 1, 'SERI MANURU', NULL, NULL, '23 Nov 2021'),
(19, 1, 'CAMBI', NULL, NULL, '23 Nov 2021'),
(20, 1, 'RASNA', NULL, NULL, '23 Nov 2021'),
(21, 1, 'WAKIMIN', NULL, NULL, '23 Nov 2021'),
(22, 1, 'JIDA', NULL, NULL, '16 Nov 2021'),
(23, 1, 'TAMBARU', NULL, NULL, '16 Nov 2021'),
(26, 0, 'CAMBI', NULL, NULL, '16 Nov 2021'),
(27, 0, 'RASNA', NULL, NULL, '16 Nov 2021'),
(28, 0, 'WAKIMIN', NULL, NULL, '16 Nov 2021'),
(29, 0, 'ANTI PITASARI', NULL, NULL, '16 Nov 2021'),
(30, 0, 'MADA', NULL, NULL, '16 Nov 2021'),
(31, 0, 'TENRI MANI', NULL, NULL, '16 Nov 2021'),
(32, 0, 'ASRIL', NULL, NULL, '16 Nov 2021'),
(33, 0, 'SAMSURI ABA SAHARA', NULL, NULL, '16 Nov 2021'),
(34, 0, 'TAKBIR ANNU', NULL, NULL, '16 Nov 2021'),
(35, 0, 'NURHIDAYAH', NULL, NULL, '16 Nov 2021'),
(36, 0, 'RAHMATIA', NULL, NULL, '16 Nov 2021'),
(37, 0, 'ASSE', NULL, NULL, '16 Nov 2021'),
(38, 0, 'HENDRA. L', NULL, NULL, '16 Nov 2021'),
(39, 0, 'HERIK', NULL, NULL, '16 Nov 2021'),
(40, 0, 'YUNUS TIKE', NULL, NULL, '16 Nov 2021'),
(41, 0, 'DARWAN', NULL, NULL, '16 Nov 2021'),
(42, 0, 'HAMKA', NULL, NULL, '16 Nov 2021'),
(43, 0, 'DARWANA', NULL, NULL, '16 Nov 2021'),
(44, 0, 'HAIRIL', NULL, NULL, '16 Nov 2021'),
(45, 0, 'RUSMAN', NULL, NULL, '16 Nov 2021'),
(46, 0, 'ASMAR IRAWAN', NULL, NULL, '16 Nov 2021'),
(47, 0, 'HAYATI', NULL, NULL, '16 Nov 2021'),
(48, 0, 'ROJALI SAPO', NULL, NULL, '16 Nov 2021'),
(49, 0, 'NATANIEL', NULL, NULL, '16 Nov 2021'),
(50, 0, 'JHON LAMBAI', NULL, NULL, '16 Nov 2021'),
(51, 0, 'NELCE BOMBONG', NULL, NULL, '16 Nov 2021'),
(52, 0, 'YT. NOLE', NULL, NULL, '16 Nov 2021'),
(53, 0, 'AMIR', NULL, NULL, '16 Nov 2021'),
(54, 0, 'SAHARIA', NULL, NULL, '16 Nov 2021'),
(55, 0, 'ISWOYO', NULL, NULL, '16 Nov 2021'),
(56, 0, 'SARIPUDDIN', NULL, NULL, '16 Nov 2021'),
(57, 0, 'JUSDIN YOSE M.MANING', NULL, NULL, '16 Nov 2021'),
(58, 0, 'LOIS', NULL, NULL, '16 Nov 2021'),
(59, 0, 'BARDIS', NULL, NULL, '16 Nov 2021'),
(60, 0, 'SUDIR', NULL, NULL, '16 Nov 2021'),
(61, 0, 'ASWAN', NULL, NULL, '16 Nov 2021'),
(62, 0, 'SABDA', NULL, NULL, '16 Nov 2021'),
(63, 0, 'JUMADI PAKOLO', NULL, NULL, '16 Nov 2021'),
(64, 0, 'LERE', NULL, NULL, '16 Nov 2021'),
(65, 0, 'SAFIRA', NULL, NULL, '16 Nov 2021'),
(66, 0, 'PUKKA', NULL, NULL, '16 Nov 2021'),
(67, 0, 'KAMALUDDIN', NULL, NULL, '16 Nov 2021'),
(68, 0, 'AKBAR UDDA', NULL, NULL, '16 Nov 2021'),
(69, 0, 'HASDIN', NULL, NULL, '16 Nov 2021'),
(70, 0, 'HUSDI', NULL, NULL, '16 Nov 2021'),
(71, 0, 'SITTI SANNA', NULL, NULL, '16 Nov 2021'),
(72, 0, 'HERMAN', NULL, NULL, '16 Nov 2021'),
(73, 0, 'JIDIL', NULL, NULL, '16 Nov 2021'),
(74, 0, 'JUDIN', NULL, NULL, '16 Nov 2021'),
(75, 0, 'MUSMIN KALLE', NULL, NULL, '16 Nov 2021'),
(76, 0, 'KALLE', NULL, NULL, '16 Nov 2021'),
(77, 0, 'HASRIADI PARANGA', NULL, NULL, '16 Nov 2021'),
(78, 0, 'MUDIN', NULL, NULL, '16 Nov 2021'),
(79, 0, 'SANI', NULL, NULL, '16 Nov 2021'),
(80, 0, 'ASRIL', NULL, NULL, '16 Nov 2021'),
(81, 0, 'SAKMIR', NULL, NULL, '16 Nov 2021'),
(82, 0, 'ABD. ANWAR', NULL, NULL, '16 Nov 2021'),
(83, 0, 'RUGAIYA', NULL, NULL, '16 Nov 2021'),
(84, 0, 'MUHAMMAD ROY HARYANTO', NULL, NULL, '16 Nov 2021'),
(85, 0, 'YUDAS KENDE', NULL, NULL, '16 Nov 2021'),
(86, 0, 'JATI', NULL, NULL, '16 Nov 2021'),
(87, 0, 'ANDARIAS TO\'GON', NULL, NULL, '16 Nov 2021'),
(88, 0, 'MARTEN TODINGAN', NULL, NULL, '16 Nov 2021'),
(89, 0, 'RETNO', NULL, NULL, '16 Nov 2021'),
(90, 0, 'MARTO', NULL, NULL, '16 Nov 2021'),
(91, 0, 'MASDIN', NULL, NULL, '16 Nov 2021'),
(92, 0, 'MAJID', NULL, NULL, '16 Nov 2021'),
(93, 0, 'HARMAN', NULL, NULL, '16 Nov 2021'),
(94, 0, 'NURDIANA', NULL, NULL, '16 Nov 2021'),
(95, 0, 'HARIANTO', NULL, NULL, '16 Nov 2021'),
(96, 0, 'MADING', NULL, NULL, '16 Nov 2021'),
(97, 0, 'SUARNO', NULL, NULL, '16 Nov 2021'),
(98, 0, 'MARIANI', NULL, NULL, '16 Nov 2021'),
(99, 0, 'RAHMAT', NULL, NULL, '16 Nov 2021'),
(100, 0, 'YOHANIS RURU', NULL, NULL, '16 Nov 2021'),
(101, 1, 'SUMARLIN', NULL, NULL, '16 Nov 2021'),
(102, 1, 'SALDIANTO', NULL, NULL, '16 Nov 2021'),
(103, 1, 'ZANAN', NULL, NULL, '16 Nov 2021'),
(104, 1, 'AMRAN', NULL, NULL, '16 Nov 2021'),
(105, 2, 'SENANG', NULL, NULL, '16 Nov 2021'),
(106, 2, 'YUSUF RURU', NULL, NULL, '16 Nov 2021'),
(107, 2, 'YUSUF SALEMPANG', NULL, NULL, '16 Nov 2021'),
(108, 2, 'LEME', NULL, NULL, '16 Nov 2021'),
(109, 2, 'AYUB PAKASI', NULL, NULL, '16 Nov 2021'),
(110, 2, 'RUT BANNE', NULL, NULL, '16 Nov 2021'),
(111, 2, 'PIKTOR REMPE', NULL, NULL, '16 Nov 2021'),
(112, 2, 'YUNUS TANGDIALLO', NULL, NULL, '16 Nov 2021'),
(113, 2, 'YOHANES. K', NULL, NULL, '16 Nov 2021'),
(114, 2, 'SABTU SUBA', NULL, NULL, '16 Nov 2021'),
(115, 2, 'RUBEN DAPO', NULL, NULL, '23 Nov 2021'),
(119, 2, 'ARIS PAKASI', NULL, NULL, '23 Nov 2021'),
(120, 4, 'LINGGI', NULL, NULL, '23 Nov 2021'),
(121, 4, 'HASIAH', NULL, NULL, '23 Nov 2021'),
(122, 4, 'ANWAR BOMBING', NULL, NULL, '23 Nov 2021'),
(123, 4, 'UNDING', NULL, NULL, '23 Nov 2021'),
(124, 4, 'ROBENG', NULL, NULL, '23 Nov 2021'),
(125, 4, 'JUMAIL', NULL, NULL, '23 Nov 2021'),
(126, 4, 'MANASA', NULL, NULL, '23 Nov 2021'),
(127, 4, 'SARIKA', NULL, NULL, '23 Nov 2021'),
(128, 4, 'TAUFAN', NULL, NULL, '23 Nov 2021'),
(129, 4, 'SAMSUL', NULL, NULL, '23 Nov 2021'),
(130, 4, 'YOHANIS BARU', NULL, NULL, '23 Nov 2021'),
(131, 4, 'MANASIA', NULL, NULL, '23 Nov 2021'),
(132, 4, 'TUTI', NULL, NULL, '23 Nov 2021'),
(133, 4, 'ABD.SALAM', NULL, NULL, '23 Nov 2021'),
(134, 4, 'ARLAN', NULL, NULL, '23 Nov 2021'),
(135, 5, 'UNDING', NULL, NULL, '23 Nov 2021'),
(136, 4, 'RAHMAN', NULL, NULL, '23 Nov 2021'),
(137, 4, 'PINI', NULL, NULL, '23 Nov 2021'),
(138, 4, 'ANNI', NULL, NULL, '23 Nov 2021'),
(139, 4, 'BARSON', NULL, NULL, '23 Nov 2021'),
(140, 4, 'TUMINGAN', NULL, NULL, '23 Nov 2021'),
(141, 4, 'SUTEJO', NULL, NULL, '23 Nov 2021'),
(142, 4, 'RISAL', NULL, NULL, '23 Nov 2021'),
(143, 4, 'RAHTRIARINI', NULL, NULL, '23 Nov 2021'),
(144, 4, 'RUSMINA', NULL, NULL, '23 Nov 2021'),
(145, 4, 'MANGGUJU', NULL, NULL, '23 Nov 2021'),
(146, 4, 'ROBIN', NULL, NULL, '23 Nov 2021'),
(147, 4, 'SLAMET.S', NULL, NULL, '23 Nov 2021'),
(148, 4, 'TUMIJO', NULL, NULL, '23 Nov 2021'),
(149, 4, 'MONDI', NULL, NULL, '23 Nov 2021'),
(150, 4, 'ANDIS', NULL, NULL, '23 Nov 2021'),
(151, 4, 'SAMSUADI', NULL, NULL, '23 Nov 2021'),
(152, 4, 'TAUFIK RADENG', NULL, NULL, '23 Nov 2021'),
(153, 4, 'LINDA SARI', NULL, NULL, '23 Nov 2021'),
(154, 4, 'TAMRIN', NULL, NULL, '23 Nov 2021'),
(155, 4, 'HAERANI MUH.DACHRY', NULL, NULL, '23 Nov 2021'),
(156, 4, 'DIAN SAPUTRI', NULL, NULL, '23 Nov 2021'),
(157, 4, 'IBRAHIM SIGUNTUK', NULL, NULL, '23 Nov 2021'),
(158, 4, 'TAJO', NULL, NULL, '23 Nov 2021'),
(159, 4, 'KASO', NULL, NULL, '23 Nov 2021'),
(160, 4, 'MADIATI', NULL, NULL, '23 Nov 2021'),
(161, 4, 'JUNAEDI', NULL, NULL, '23 Nov 2021'),
(162, 5, 'HAMZAH', NULL, NULL, '23 Nov 2021'),
(163, 5, 'PAINEM', NULL, NULL, '23 Nov 2021'),
(164, 5, 'AISA SAPUTRI', NULL, NULL, '23 Nov 2021'),
(165, 5, 'RINI', NULL, NULL, '23 Nov 2021'),
(166, 5, 'RIPA', NULL, NULL, '23 Nov 2021'),
(167, 5, 'HAMRIANI', NULL, NULL, '23 Nov 2021'),
(168, 5, 'SENGA', NULL, NULL, '23 Nov 2021'),
(169, 5, 'ALEX', NULL, NULL, '23 Nov 2021'),
(170, 5, 'SUTIYEM', NULL, NULL, '23 Nov 2021'),
(171, 5, 'LIANI', NULL, NULL, '23 Nov 2021'),
(172, 5, 'SUCINA ANDI HAKIM', NULL, NULL, '23 Nov 2021'),
(173, 5, 'UMMI KALSUM', NULL, NULL, '23 Nov 2021'),
(174, 5, 'BAHRUL', NULL, NULL, '23 Nov 2021'),
(175, 5, 'SUNARDI ARSAD', NULL, NULL, '23 Nov 2021'),
(176, 5, 'WAHYUDDIN', NULL, NULL, '23 Nov 2021'),
(177, 5, 'MAYA SARI', NULL, NULL, '23 Nov 2021'),
(178, 5, 'RAHING', NULL, NULL, '23 Nov 2021'),
(179, 5, 'ALMIANTO', NULL, NULL, '23 Nov 2021'),
(180, 5, 'HADRUL', NULL, NULL, '23 Nov 2021'),
(181, 5, 'SALMAN', NULL, NULL, '23 Nov 2021'),
(182, 5, 'MONA', NULL, NULL, '23 Nov 2021'),
(183, 5, 'SALING', NULL, NULL, '23 Nov 2021'),
(184, 5, 'SUDDING', NULL, NULL, '23 Nov 2021'),
(185, 5, 'ABDULLAH', NULL, NULL, '23 Nov 2021'),
(186, 5, 'HAERUDDIN', NULL, NULL, '23 Nov 2021'),
(187, 5, 'DEA ECCON', NULL, NULL, '23 Nov 2021'),
(188, 5, 'HERMAN', NULL, NULL, '23 Nov 2021'),
(189, 5, 'RUSAIL', NULL, NULL, '23 Nov 2021'),
(190, 5, 'HASRUNI', NULL, NULL, '23 Nov 2021'),
(191, 5, 'TAMRIN', NULL, NULL, '23 Nov 2021'),
(192, 5, 'DIANA', NULL, NULL, '23 Nov 2021'),
(193, 5, 'KARESWAN', NULL, NULL, '23 Nov 2021'),
(194, 5, 'ASWAN', NULL, NULL, '23 Nov 2021'),
(195, 5, 'BATMAN', NULL, NULL, '23 Nov 2021'),
(196, 5, 'MAMING', NULL, NULL, '23 Nov 2021'),
(197, 5, 'JUMARDING', NULL, NULL, '23 Nov 2021'),
(198, 5, 'DEBI', NULL, NULL, '23 Nov 2021'),
(199, 5, 'NAWIR PASANDE', NULL, NULL, '23 Nov 2021'),
(200, 5, 'DONA DEWI FORTUNA', NULL, NULL, '23 Nov 2021'),
(201, 5, 'KUKI', NULL, NULL, '23 Nov 2021'),
(202, 5, 'ANI RIAMALI', NULL, NULL, '23 Nov 2021'),
(203, 5, 'SILVIA DEWI BACHRI', NULL, NULL, '23 Nov 2021'),
(204, 5, 'TOPAN LUNGAN', NULL, NULL, '23 Nov 2021'),
(205, 5, 'MADIR.K', NULL, NULL, '23 Nov 2021'),
(206, 5, 'SITI', NULL, NULL, '23 Nov 2021'),
(207, 5, 'IRWAN', NULL, NULL, '23 Nov 2021'),
(208, 5, 'RUSMAN AKBAR', NULL, NULL, '23 Nov 2021'),
(209, 5, 'NAJA', NULL, NULL, '23 Nov 2021'),
(210, 5, 'SIDINA', NULL, NULL, '23 Nov 2021'),
(211, 5, 'LOSI', NULL, NULL, '23 Nov 2021'),
(212, 5, 'ARJUN', NULL, NULL, '23 Nov 2021'),
(213, 5, 'MUKTAR PAKOLO', NULL, NULL, '23 Nov 2021'),
(214, 5, 'ABDUL ALAM', NULL, NULL, '23 Nov 2021'),
(215, 5, 'RAIYA', NULL, NULL, '23 Nov 2021'),
(216, 5, 'RAJJA PASANDE', NULL, NULL, '23 Nov 2021'),
(217, 5, 'MERRAU', NULL, NULL, '23 Nov 2021'),
(218, 5, 'IRMA', NULL, NULL, '23 Nov 2021'),
(219, 1, 'ANTI PITASARI', NULL, NULL, '23 Nov 2021'),
(220, 1, 'MADA', NULL, NULL, '23 Nov 2021'),
(221, 1, 'TENRI MANI', NULL, NULL, '23 Nov 2021'),
(222, 1, 'ASRIL', NULL, NULL, '23 Nov 2021'),
(223, 1, 'SAMSURI ABA SAHARA', NULL, NULL, '23 Nov 2021'),
(224, 1, 'TAKBIR ANNU', NULL, NULL, '23 Nov 2021'),
(225, 1, 'NURHIDAYAH', NULL, NULL, '23 Nov 2021'),
(226, 1, 'RAHMATIA', NULL, NULL, '23 Nov 2021'),
(227, 1, 'ASSE', NULL, NULL, '23 Nov 2021'),
(228, 1, 'HENDRA.L', NULL, NULL, '23 Nov 2021'),
(229, 1, 'HERIK', NULL, NULL, '23 Nov 2021'),
(230, 1, 'YUNUS TIKE', NULL, NULL, '23 Nov 2021'),
(231, 1, 'DARWAN', NULL, NULL, '23 Nov 2021'),
(232, 1, 'HAMKA', NULL, NULL, '23 Nov 2021'),
(233, 1, 'DARWANA', NULL, NULL, '23 Nov 2021'),
(234, 1, 'HAIRIL', NULL, NULL, '23 Nov 2021'),
(235, 1, 'RUSMAN', NULL, NULL, '23 Nov 2021'),
(236, 1, 'ASMAR IRAWAN', NULL, NULL, '23 Nov 2021'),
(237, 1, 'HAYATI', NULL, NULL, '23 Nov 2021'),
(238, 1, 'ROJALI SAPO', NULL, NULL, '23 Nov 2021'),
(239, 1, 'NATANIEL', NULL, NULL, '23 Nov 2021'),
(240, 1, 'JHON LAMBAI', NULL, NULL, '23 Nov 2021'),
(241, 1, 'NELCE BOMBONG', NULL, NULL, '23 Nov 2021'),
(242, 1, 'YT.NOLE', NULL, NULL, '23 Nov 2021'),
(243, 1, 'AMIR', NULL, NULL, '23 Nov 2021'),
(244, 1, 'SAHARIA', NULL, NULL, '23 Nov 2021'),
(245, 1, 'ISWOYO', NULL, NULL, '23 Nov 2021'),
(246, 1, 'SARIPUDDIN', NULL, NULL, '23 Nov 2021'),
(247, 1, 'JUSDIN YOSE M.MANING', NULL, NULL, '23 Nov 2021'),
(248, 1, 'LOIS', NULL, NULL, '23 Nov 2021'),
(249, 1, 'BARDIS', NULL, NULL, '23 Nov 2021'),
(250, 1, 'SUDIR', NULL, NULL, '23 Nov 2021'),
(251, 1, 'ASWAN', NULL, NULL, '23 Nov 2021'),
(252, 1, 'SABDA', NULL, NULL, '23 Nov 2021'),
(253, 1, 'JUMADI PAKOLO', NULL, NULL, '23 Nov 2021'),
(254, 1, 'LERE', NULL, NULL, '23 Nov 2021'),
(255, 1, 'SAFIRA', NULL, NULL, '23 Nov 2021'),
(256, 1, 'PUKKA', NULL, NULL, '23 Nov 2021'),
(257, 1, 'KAMALUDDIN', NULL, NULL, '23 Nov 2021'),
(258, 1, 'AKBAR UDDA', NULL, NULL, '23 Nov 2021'),
(259, 1, 'HASDIN', NULL, NULL, '23 Nov 2021'),
(260, 1, 'HUSDI', NULL, NULL, '23 Nov 2021'),
(261, 1, 'SITTI SANNA', NULL, NULL, '23 Nov 2021'),
(262, 1, 'HERMAN', NULL, NULL, '23 Nov 2021'),
(263, 1, 'JIDIL', NULL, NULL, '23 Nov 2021'),
(264, 1, 'JUDIN', NULL, NULL, '23 Nov 2021'),
(265, 1, 'MUSMIN KALLE', NULL, NULL, '23 Nov 2021'),
(266, 1, 'KALLE', NULL, NULL, '23 Nov 2021'),
(267, 1, 'HASRIADI PARANGA', NULL, NULL, '23 Nov 2021'),
(268, 1, 'MUDIN', NULL, NULL, '23 Nov 2021'),
(269, 1, 'SANI', NULL, NULL, '23 Nov 2021'),
(270, 1, 'ASRIL', NULL, NULL, '23 Nov 2021'),
(271, 1, 'SAKMIR', NULL, NULL, '23 Nov 2021'),
(272, 1, 'ABD.ANWAR', NULL, NULL, '23 Nov 2021'),
(273, 1, 'RUGAIYAH', NULL, NULL, '23 Nov 2021'),
(274, 1, 'MUHAMMAD ROY HARYANTO', NULL, NULL, '23 Nov 2021'),
(275, 1, 'YUDAS KENDE', NULL, NULL, '23 Nov 2021'),
(276, 1, 'JATI', NULL, NULL, '23 Nov 2021'),
(277, 1, 'ANDARIAS TO\'GON', NULL, NULL, '23 Nov 2021'),
(278, 1, 'MARTEN TODINGAN', NULL, NULL, '23 Nov 2021'),
(279, 1, 'RETNO', NULL, NULL, '23 Nov 2021'),
(280, 1, 'MARTO', NULL, NULL, '23 Nov 2021'),
(281, 1, 'MASDIN', NULL, NULL, '23 Nov 2021'),
(282, 1, 'MAJID', NULL, NULL, '23 Nov 2021'),
(283, 1, 'HARMAN', NULL, NULL, '23 Nov 2021'),
(284, 1, 'NURDIANA', NULL, NULL, '23 Nov 2021'),
(285, 1, 'HARIANTO', NULL, NULL, '23 Nov 2021'),
(286, 1, 'MADING', NULL, NULL, '23 Nov 2021'),
(287, 1, 'SUARNO', NULL, NULL, '23 Nov 2021'),
(288, 1, 'MARIANI', NULL, NULL, '23 Nov 2021'),
(289, 1, 'RAHMAT', NULL, NULL, '23 Nov 2021'),
(290, 1, 'YOHANIS RURU', NULL, NULL, '23 Nov 2021'),
(294, 2, 'LIANA PATANDUK', NULL, NULL, '23 Nov 2021'),
(295, 2, 'YOHANIS BASI', NULL, NULL, '23 Nov 2021'),
(296, 2, 'ALPIUS PALUNGAN', NULL, NULL, '23 Nov 2021'),
(297, 2, 'YOHANIS SILAMBI P', NULL, NULL, '23 Nov 2021'),
(298, 2, 'DAUD B', NULL, NULL, '23 Nov 2021'),
(299, 2, 'YOSEF LAYUK', NULL, NULL, '23 Nov 2021'),
(300, 2, 'YUNUS TOTO KOMBONG', NULL, NULL, '23 Nov 2021'),
(301, 2, 'DANIEL PALUNGAN', NULL, NULL, '23 Nov 2021'),
(302, 2, 'YUNUS RAKAN', NULL, NULL, '23 Nov 2021'),
(303, 2, 'LINCE PARE', NULL, NULL, '23 Nov 2021'),
(304, 2, 'SARAH', NULL, NULL, '23 Nov 2021'),
(305, 2, 'MAISAK', NULL, NULL, '23 Nov 2021'),
(306, 2, 'YOHANIS PASANDE', NULL, NULL, '23 Nov 2021'),
(307, 2, 'MELKIANTO BIU', NULL, NULL, '23 Nov 2021'),
(308, 2, 'SAMUEL BITE PALUNGAN', NULL, NULL, '23 Nov 2021'),
(309, 2, 'DINA NALI', NULL, NULL, '23 Nov 2021'),
(310, 2, 'SAID', NULL, NULL, '23 Nov 2021'),
(311, 2, 'ISAK PALUNGAN', NULL, NULL, '23 Nov 2021'),
(312, 2, 'RIAN', NULL, NULL, '23 Nov 2021'),
(313, 2, 'DAVID', NULL, NULL, '23 Nov 2021'),
(314, 2, 'DARANA', NULL, NULL, '23 Nov 2021'),
(315, 2, 'RONI', NULL, NULL, '23 Nov 2021'),
(316, 2, 'FERDY JEMAHU', NULL, NULL, '23 Nov 2021'),
(317, 2, 'RIKI', NULL, NULL, '23 Nov 2021'),
(318, 2, 'MARTEN PALUNGAN', NULL, NULL, '23 Nov 2021'),
(319, 2, 'NANI', NULL, NULL, '23 Nov 2021'),
(320, 2, 'YOHANIS SIAPPA', NULL, NULL, '23 Nov 2021'),
(321, 2, 'AGUSTINU REMAK', NULL, NULL, '23 Nov 2021'),
(322, 2, 'YUNUS BULI', NULL, NULL, '23 Nov 2021'),
(323, 2, 'PAEBA', NULL, NULL, '23 Nov 2021'),
(324, 2, 'KODE', NULL, NULL, '23 Nov 2021'),
(325, 3, 'SALMIATI', NULL, NULL, '23 Nov 2021'),
(326, 3, 'HERMAN', NULL, NULL, '23 Nov 2021'),
(327, 3, 'KAHARUDDIN', NULL, NULL, '23 Nov 2021'),
(328, 3, 'HARIM', NULL, NULL, '23 Nov 2021'),
(329, 3, 'MUHAMMAD SATIN', NULL, NULL, '23 Nov 2021'),
(330, 3, 'SITTIARAH', NULL, NULL, '23 Nov 2021'),
(331, 3, 'TASLIM', NULL, NULL, '23 Nov 2021'),
(332, 3, 'BAHRUL', NULL, NULL, '23 Nov 2021'),
(333, 3, 'MUHAMMADONG', NULL, NULL, '23 Nov 2021'),
(334, 3, 'HAJIR', NULL, NULL, '23 Nov 2021'),
(335, 3, 'ISKANDAR', NULL, NULL, '23 Nov 2021'),
(336, 3, 'ANDI ALBANI', NULL, NULL, '23 Nov 2021'),
(337, 3, 'BAHRI W', NULL, NULL, '23 Nov 2021'),
(338, 3, 'AGUSTINA PATANDUK', NULL, NULL, '23 Nov 2021'),
(339, 3, 'WAHYU', NULL, NULL, '23 Nov 2021'),
(340, 3, 'MUH.ALI', NULL, NULL, '23 Nov 2021'),
(341, 3, 'YOHANIS RAPPUN', NULL, NULL, '23 Nov 2021'),
(342, 3, 'BAHRUM', NULL, NULL, '23 Nov 2021'),
(343, 3, 'CINDARE', NULL, NULL, '23 Nov 2021'),
(344, 3, 'MUJIMAN', NULL, NULL, '23 Nov 2021'),
(345, 3, 'MISDI', NULL, NULL, '23 Nov 2021'),
(346, 3, 'HAMDAN', NULL, NULL, '23 Nov 2021'),
(347, 3, 'NURUL SAFITRI', NULL, NULL, '23 Nov 2021'),
(348, 3, 'ISMAIL.P', NULL, NULL, '23 Nov 2021'),
(349, 3, 'OKTAVIANUS', NULL, NULL, '23 Nov 2021'),
(350, 3, 'NURLIA', NULL, NULL, '23 Nov 2021'),
(351, 3, 'HASMA', NULL, NULL, '23 Nov 2021'),
(352, 3, 'TIMARA', NULL, NULL, '23 Nov 2021'),
(353, 3, 'YOHANIS LAMBA', NULL, NULL, '23 Nov 2021'),
(354, 3, 'BASO', NULL, NULL, '23 Nov 2021'),
(355, 3, 'KASDI', NULL, NULL, '23 Nov 2021'),
(356, 3, 'HENGKI', NULL, NULL, '23 Nov 2021'),
(357, 3, 'PASATUNG', NULL, NULL, '23 Nov 2021'),
(358, 3, 'NURDIANA', NULL, NULL, '23 Nov 2021'),
(359, 3, 'HASMIRUDDIN', NULL, NULL, '23 Nov 2021'),
(360, 3, 'A.HAJRUDDIN K.A TENRI', NULL, NULL, '23 Nov 2021'),
(361, 3, 'OKTAVIANUS', NULL, NULL, '23 Nov 2021'),
(362, 3, 'PIRMAN MARIAPA', NULL, NULL, '23 Nov 2021'),
(363, 3, 'RUBEN MELAMBI', NULL, NULL, '23 Nov 2021'),
(364, 3, 'ROY AMIRDIN', NULL, NULL, '23 Nov 2021'),
(365, 3, 'PRASETIADHA TORA', NULL, NULL, '23 Nov 2021'),
(366, 3, 'DISEN MUSLIM', NULL, NULL, '23 Nov 2021'),
(367, 3, 'JEKI', NULL, NULL, '23 Nov 2021'),
(368, 3, 'HASNA', NULL, NULL, '23 Nov 2021'),
(369, 3, 'NASRUDDIN', NULL, NULL, '23 Nov 2021'),
(370, 3, 'RAHMAT JASMANI', NULL, NULL, '23 Nov 2021'),
(371, 3, 'MASRIANI', NULL, NULL, '23 Nov 2021'),
(372, 3, 'RISMAN', NULL, NULL, '23 Nov 2021'),
(373, 3, 'MUDDA', NULL, NULL, '23 Nov 2021'),
(374, 3, 'RANI', NULL, NULL, '23 Nov 2021'),
(375, 3, 'AGUSMAL MUSTAMIN', NULL, NULL, '23 Nov 2021'),
(376, 3, 'LUKAS RASE', NULL, NULL, '23 Nov 2021'),
(377, 3, 'AMIR SIRATANG', NULL, NULL, '23 Nov 2021'),
(378, 3, 'IKKI', NULL, NULL, '23 Nov 2021'),
(379, 3, 'IKSAN', NULL, NULL, '23 Nov 2021'),
(380, 3, 'KANDA', NULL, NULL, '23 Nov 2021'),
(381, 3, 'I.BUNGA', NULL, NULL, '23 Nov 2021'),
(382, 3, 'SIMON GOSE', NULL, NULL, '23 Nov 2021'),
(383, 5, 'FIRMAN', NULL, NULL, '24 Nov 2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id_pend` int(11) NOT NULL,
  `kk_id` int(11) NOT NULL,
  `nama_art` varchar(128) NOT NULL,
  `tgl_lahir` varchar(128) NOT NULL,
  `dusun_id` int(11) NOT NULL,
  `rt_id` int(11) NOT NULL,
  `kelamin` varchar(128) NOT NULL,
  `ket` int(50) NOT NULL,
  `created_at` varchar(128) NOT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `no_kk` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id_pend`, `kk_id`, `nama_art`, `tgl_lahir`, `dusun_id`, `rt_id`, `kelamin`, `ket`, `created_at`, `nik`, `no_kk`) VALUES
(3, 1, 'HASRIANTI', '1970-05-15', 1, 1, 'Perempuan', 1, '23 Dec 2021', '-', '-'),
(4, 1, 'LIBRA', '1981-10-08', 1, 1, 'Laki-Laki', 1, '23 Dec 2021', '-', '-'),
(5, 1, 'KIFLI', '1996-02-14', 1, 1, 'Laki-Laki', 1, '23 Dec 2021', '-', '-'),
(6, 1, 'HADRI ANI', '1998-07-08', 1, 1, 'Perempuan', 1, '23 Dec 2021', '-', '-'),
(7, 1, 'HARIANDI PASOLORAN', '2000-11-27', 1, 1, 'Laki-Laki', 1, '23 Dec 2021', '-', '-'),
(8, 1, 'HALIM PASOLORAN', '2002-06-24', 1, 1, 'Laki-Laki', 1, '23 Dec 2021', '-', '-'),
(9, 1, 'ADLI PASOLORAN', '2004-05-20', 1, 1, 'Laki-Laki', 1, '23 Dec 2021', '-', '-'),
(10, 1, 'HARIANTO', '2005-11-23', 1, 1, 'Laki-Laki', 1, '23 Dec 2021', '-', '-'),
(11, 1, 'KASMIRA PASOLORAN', '2008-02-28', 1, 1, 'Perempuan', 1, '23 Dec 2021', '-', '-'),
(12, 1, 'KASWIN PASOLORAN', '2009-05-09', 1, 1, 'Laki-Laki', 1, '23 Dec 2021', '-', '-'),
(13, 3, 'HERLINA RAMPA', '1993-02-14', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(14, 3, 'fitriani Kalontong', '2014-09-28', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(15, 3, 'AURELYA KALATONG', '2020-02-09', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(16, 4, 'HALIJA', '1980-09-29', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(17, 4, 'JUMIANI', '1998-02-07', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(18, 4, 'SARI', '2000-02-29', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(19, 4, 'RISA', '2002-10-22', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(20, 4, 'LISA', '0200-08-20', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(21, 4, 'HARIYANTO', '2006-12-19', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(22, 4, 'HARIYADI', '2008-12-22', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(23, 4, 'HARIANA', '2012-06-12', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(24, 4, 'HARIANI', '2012-07-02', 1, 1, 'Perempuan', 1, '03 Jan 2022', '--', '-'),
(25, 5, 'RISKI', '1981-09-10', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(26, 5, 'MUH. RISALDI ', '1999-05-20', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(27, 5, 'ANNISA', '2021-01-13', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(28, 5, 'MUH.SAHRAN ALFARUQ', '2009-08-03', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(29, 6, 'SALMIATI', '1974-12-10', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(30, 6, 'SAHRILLA ', '1997-07-06', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(31, 6, 'Muh.Hidayat', '1998-02-07', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(32, 6, 'SAHRIRIN', '2004-01-05', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(33, 6, 'SAHFIQRA', '2009-12-23', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(34, 7, 'SARIP', '1986-04-06', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(35, 7, 'SUKRIANTO', '0986-01-21', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(36, 7, 'DEDI', '1995-12-08', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(37, 7, 'SARINA', '1996-07-14', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(38, 7, 'FITRIYAH', '2001-01-06', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(39, 7, 'SILO', '2003-05-03', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(40, 8, 'DEVI', '1994-01-07', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(41, 8, 'NILAM SARI', '2012-10-24', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(42, 8, 'APRILIA BERNARD', '2019-04-23', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(43, 9, 'SAENA', '1955-01-02', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(44, 10, 'ANISA FANIASTI', '1988-05-25', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(45, 11, 'SRI KARNI', '1987-06-05', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(46, 11, 'DINDA SUCI. A', '2006-04-05', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(47, 11, 'DINKA SRI. A', '2009-12-28', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(48, 11, 'MUH. DIDAN ', '2020-06-28', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(49, 12, 'RITA', '1971-06-17', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(50, 12, 'HARIANDI', '1992-04-25', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(51, 12, 'HISRIANTI LUPU', '1995-04-14', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(52, 12, 'IRA', '1998-01-31', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(53, 12, 'MASRIL LUPU', '2000-08-08', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(54, 12, 'HASRUM LUPU', '2002-01-13', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(55, 12, 'HARIANI', '2007-03-02', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(56, 12, 'HARIADI', '2000-08-12', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(57, 13, 'SUPA', '1940-07-08', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(58, 14, 'HASNAWATI', '1979-07-19', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(59, 15, 'ALMUNAWAR', '1968-12-07', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(60, 16, 'SUKIR', '1972-05-12', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(61, 18, 'JUMAHIRA', '1972-12-31', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(62, 18, 'NUR AZILA SERI', '1995-08-16', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(63, 18, 'SURIANTI DAHRI', '1997-10-19', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(64, 18, 'NUR HIDAYAH', '1998-07-23', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(65, 18, 'NURFADILLAH', '2000-12-25', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(66, 18, 'MUH.NUR ', '2006-08-11', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(67, 18, 'ANUGRA', '2011-01-06', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(68, 19, 'ELMI', '1999-01-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(69, 19, 'MUH. AKMAL AKILA', '2008-02-07', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(70, 19, 'QIANDRA APRILIA', '2017-04-17', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(71, 20, 'NABILA SARI', '2006-02-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(72, 20, 'IQBAL ', '2011-01-08', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(73, 20, 'RIANZA', '2016-09-17', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(74, 21, 'HAJERAH', '1967-12-11', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(75, 21, 'LIA WULANDARI', '1993-12-29', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(76, 21, 'DELA ANJANI', '0997-03-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(77, 21, 'AFANDI', '1999-04-25', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(78, 21, 'SARWITO', '2003-05-24', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(79, 21, 'TIWI', '2006-01-03', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(80, 22, 'NANI', '1975-07-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(81, 22, 'TEPRI', '2007-03-11', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(82, 23, 'ANTI JM.', '1991-01-14', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(83, 23, 'MUH FAHRI', '2011-10-29', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(84, 29, 'Khadijah', '2019-03-17', 1, 1, 'Perempuan', 1, '04 Jan 2022', '-', '-'),
(85, 30, 'MADA', '0195-12-31', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(86, 31, 'ADI ANNU', '2000-10-25', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(87, 31, 'MUHAMMAD FAHRI', '2014-07-08', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(88, 32, 'ASRIL', '1988-11-07', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(89, 33, 'Sayyan', '2019-05-07', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(90, 33, 'sopian', '1986-11-18', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(91, 34, 'JUMIATI', '1988-01-08', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(92, 34, 'AIRA DEWI LESTARI', '2010-03-06', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(93, 34, 'NAJWA AMALIA', '2015-05-11', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(94, 35, 'NURHIDAYAH', '1982-09-10', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(95, 36, 'RAHMATIA', '1942-12-11', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(96, 37, 'ASSE', '1939-11-16', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(97, 38, 'MULIATI', '2972-02-02', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(98, 38, 'HENGKI', '1989-07-01', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(99, 38, 'HAFIT', '1998-12-21', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(100, 38, 'HASWIN', '2001-05-24', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(101, 38, 'HASWIN', '2001-05-24', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(102, 38, 'HASLAN', '2004-01-25', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(103, 38, 'VINA', '2007-07-07', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(104, 38, 'FAREL', '2009-09-15', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(105, 39, 'FIRGI MAY MUNA', '1997-08-04', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(106, 40, 'DARMONO', '1989-09-20', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(107, 40, 'DARWIN', '1994-08-05', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(108, 40, 'DARSAN', '1997-08-20', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(109, 40, 'DARSONO', '1998-07-15', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(110, 41, 'DARWAN', '1985-06-25', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(111, 42, 'DARWISA', '1983-06-06', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(112, 42, 'RESKI AMALLIA HAMKA', '2006-06-06', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(113, 42, 'ZHAKIA HUMAIRA H', '2018-11-18', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(114, 43, 'MUTMAINNA ALANNUR', '2014-10-06', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(115, 43, 'AYUDIA INARA', '2018-05-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(116, 44, 'NURSYAHRIDA', '1998-07-30', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(117, 44, 'SYAHRAINI', '2001-04-17', 0, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(118, 44, 'DIVA AULIA', '2006-01-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(119, 44, 'SYAHRAINI', '2001-04-17', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(120, 44, 'DHEA AYU LESTARI', '2010-03-03', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(121, 45, 'SAMIATI', '1972-01-10', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(122, 45, 'MUH.SULRIFKY', '1998-08-19', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(123, 45, 'WAHYU ALAMSYAH', '1999-11-09', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(124, 45, 'ANDIKA', '2008-05-08', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(125, 45, 'AHDIN ALAMSYAH', '2010-09-22', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(126, 45, 'AHDIN ALAMSYAH', '2010-09-22', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(127, 46, 'GITA ROSITA', '1983-04-23', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(128, 46, 'MUHAMMAD ZHEIN R', '2018-06-07', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(129, 48, 'Rosnia', '1986-02-19', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(130, 48, 'MUHAMMAD SAIDAN S', '2018-03-30', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(131, 49, 'IRENE NATANIEL.B', '2000-11-07', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(132, 49, 'IRRADIAT SOFIEL.B', '2010-10-06', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(133, 50, 'TRIVENA', '1982-10-10', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(134, 50, 'FEDER MAXIMILIAN LAMBAI', '2016-06-26', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(135, 50, 'GAVRIEL ALTAR LAMBAI', '2019-01-03', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(136, 51, 'NELCE BOMBONG', '1954-11-11', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(137, 52, 'TENNE PASODUNG', '1942-12-31', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(138, 52, 'ALPIUS PASODUNG', '1987-08-14', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(139, 53, 'NURDIANA', '1975-06-07', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(140, 53, 'SURIANA', '2002-02-25', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(141, 53, 'HARIYONO', '2006-01-05', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(142, 54, 'HUSNARIA IBRAHIM ', '2004-08-03', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(143, 54, 'HUSNIA IBRAHIM', '2007-09-26', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(144, 55, 'WIDIA KADDA', '1987-07-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(145, 55, 'ISLAMIA', '2011-01-06', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(146, 56, 'SARIPA', '1958-10-05', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(147, 56, 'SAPRIANTO', '1995-11-21', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(148, 56, 'SANDI', '1997-06-15', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(149, 56, 'SUPIANTI', '2000-07-21', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(150, 56, 'ANGGA', '2002-09-11', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(151, 56, 'ANNGI', '2002-09-11', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(152, 57, 'SEJARTI', '1978-04-04', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(153, 57, 'JAYA PERDANA PUTRA', '2004-05-20', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(154, 57, 'WISLAM DWI PUTRA', '2007-10-08', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(155, 57, 'RIDHO TRI PUTRA', '2012-09-20', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(156, 58, 'URTIN', '2004-01-21', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(157, 59, 'IDA', '1985-12-12', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(158, 59, 'SARA', '2006-05-09', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(159, 59, 'ACHMAD', '2007-09-21', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(160, 59, 'RAPIL', '2009-09-26', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(161, 59, 'SULKIFLI', '2013-10-28', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(162, 60, 'HAMSINA', '1976-07-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(163, 60, 'SUHARDI', '1993-11-08', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(164, 60, 'RAMADI', '1996-07-01', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(165, 60, 'NURFAINI', '1999-07-03', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(166, 60, 'RIKI', '2001-05-27', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(167, 60, 'INDA PITASARI', '2013-04-07', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(168, 60, 'KAYLA ANAYA PUTRI', '2014-11-12', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(169, 61, 'KARMILA', '1996-11-24', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(170, 61, 'MUHAMMAD ALFADILAN', '2018-10-08', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(171, 62, ' DHIRA YUDINI', '1984-09-13', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(172, 62, 'AL-WAQIA', '2012-02-28', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(173, 62, 'AQILAH', '2016-02-12', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(174, 63, 'RISNA', '1982-11-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(175, 63, 'RAHMAT', '2004-06-15', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(176, 63, 'RAHMA', '2007-05-24', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(177, 63, 'RAHMI', '2007-05-24', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(178, 63, 'RAHFKA', '2009-12-31', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(179, 63, 'RAHFLI', '2015-01-28', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(180, 64, 'IDIL', '1973-08-17', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(181, 64, 'SALDIANI', '1997-08-02', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(182, 64, 'KAHRUL', '2006-07-17', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(183, 65, 'ARISAH APRILIA RAMADHANI', '2021-04-13', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(184, 66, 'NUR AIZA', '2007-01-17', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(185, 67, 'YURNIANTI', '1988-10-09', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(186, 67, 'QORI\'AH ', '2008-03-02', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(187, 67, 'HALKA PAKOLO', '2009-10-09', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(188, 67, 'HAFIZ PAKOLO', '2016-01-05', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(189, 67, 'HAFIDA PAKOLO', '2017-03-24', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(190, 68, 'HAMIDA, A.Md. Keb', '1988-08-11', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(191, 68, 'AL FITRAH', '2016-07-06', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(192, 68, 'SAMRI', '1980-07-30', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(193, 69, 'HASDIN', '1990-05-05', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(194, 70, 'ANDRIANI', '1987-03-29', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(195, 70, 'NUR ADIFHA', '2017-09-18', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(196, 70, 'ALFAR', '2019-09-29', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(197, 71, 'HESRI', '1995-04-04', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(198, 72, 'YASNI', '1994-06-15', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(199, 72, 'MUHAMMAD HAIDIR', '2015-06-25', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(200, 72, 'RAHMA YANI', '2018-05-24', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(201, 73, 'WINDA', '1987-12-31', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(202, 73, 'JILDA', '2003-11-28', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(203, 73, 'ARIL', '2006-11-03', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(204, 73, 'CIKA', '2008-12-15', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(205, 73, 'RAKIL', '2013-07-17', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(206, 73, 'MUHAMMAD IKMAL', '2018-04-17', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(207, 74, 'MARLIANA', '1983-05-08', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(208, 74, 'PRISA', '2011-12-11', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(209, 75, 'LILI', '1986-06-07', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(210, 75, 'SYAHRU RAMADHAN', '2007-09-13', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(211, 75, 'ANDIKA', '2015-09-21', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(212, 76, 'WATIA', '1950-05-12', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(213, 76, 'SARDIS', '1974-12-31', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(214, 77, 'SULFIATI', '1984-05-12', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(215, 77, 'QULSUM ROFILAH', '2018-06-02', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(216, 78, 'JUMIANA', '1980-07-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(217, 78, 'LIFIA', '2008-10-17', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(218, 78, 'ASIFA', '2014-02-25', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(219, 79, 'SANI', '1945-08-17', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(220, 80, 'ANI SALEPA', '1993-06-02', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(221, 80, 'PUTRIANI', '2013-11-29', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(222, 80, 'MUH. ARPA', '2015-02-03', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(223, 81, 'ECCE', '1988-11-10', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(224, 81, 'SIRA', '2004-11-08', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(225, 81, 'PRETI', '2007-10-11', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(226, 82, 'MARNI', '1989-07-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(227, 82, 'LASTARI ANWAR', '2013-10-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(228, 83, 'RUGAIYA', '1965-12-31', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(229, 84, 'SRIWAHYUNI', '2000-04-12', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(230, 84, 'ALFY SYAHRI RAMADHAN', '2019-05-11', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(231, 85, 'LUDIANA NAMPE', '1995-06-05', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(232, 85, 'MARIATHY GEMPEN', '2014-03-22', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(233, 85, 'VIOLA BULAN', '2016-01-08', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(234, 86, 'JATI', '1958-12-13', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(235, 86, 'JATI', '1958-12-13', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(236, 87, 'LUDIA BOKKO', '1952-10-10', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(237, 87, 'GANGGU', '1989-11-08', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(238, 87, 'RISAL SIAMPA', '1993-06-26', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(239, 88, 'SELMI', '1986-11-13', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(240, 88, 'SALMA', '2011-11-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(241, 88, 'DEPRIL', '2013-04-08', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(242, 88, 'ABRAHAM SIAMPA', '2017-11-22', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(243, 89, 'NURBETI', '1979-07-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(244, 89, 'SELNI ', '2001-05-19', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(245, 89, 'SYAURA', '2013-11-20', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(246, 89, 'AGUM', '2015-04-11', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(247, 90, 'AMELIA', '1990-05-24', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(248, 90, ' ARUMY MARTO', '2010-05-22', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(249, 90, 'ABD. REFLY', '2012-02-20', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(250, 90, 'ABDUL REHAN TALLAMA', '2016-10-26', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(251, 91, 'RASTI', '1999-03-07', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(252, 91, 'RAMADAN MASDIN', '2016-06-18', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(253, 92, 'JERNIA', '1983-07-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(254, 92, 'FEBRIANTI', '2006-02-25', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(255, 92, 'SAFIRA', '2008-03-22', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(256, 92, 'NURHALIZA', '2010-11-27', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(257, 92, 'HASYUDA', '2014-12-11', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(258, 92, 'SAFITRI DIKKI', '2019-09-03', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(259, 93, 'MARIANA', '1976-07-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(260, 93, 'HARMAYANTI', '1992-09-15', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(261, 93, 'AHMAD', '1994-10-17', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(262, 93, 'INTAN SARI', '2005-04-23', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(263, 94, 'NURDIANA', '1945-07-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(264, 95, 'ALPIN', '1984-12-10', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(265, 95, 'WAHYUNI SIDALLE', '2002-09-04', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(266, 95, 'TAKDIR LUPU\'', '2004-05-09', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(267, 95, 'LIMAN SARI LUPU', '2006-09-12', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(268, 95, 'NADA SARI SIDALLE', '2011-04-09', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(269, 95, 'AKBAR HARPIN SIDALLE', '2017-01-17', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(270, 96, 'NURIANI', '1979-07-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(271, 96, 'ABDUL', '1997-07-28', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(272, 96, 'JUMADIR', '2001-11-28', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(273, 96, 'SELVIANI', '2004-06-24', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(274, 96, 'LESTARI', '2006-09-01', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(275, 96, 'DHIKA', '2008-12-03', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(276, 97, 'ICHA', '1992-08-06', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(277, 97, 'ALIF SETIAWAN', '2012-03-12', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(278, 97, 'AISYAH RAMADHANI', '2020-05-10', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(279, 98, 'ADITIYA', '2017-06-21', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(280, 98, 'ADITIYA', '2017-06-21', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(281, 99, 'NURMI', '1986-12-31', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(282, 99, 'ASMIRANDA RAHMAT', '2007-07-04', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(283, 99, 'MARVEL PATANDUK', '2009-11-29', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(284, 100, 'TETIK', '1994-05-13', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(285, 100, 'IRPAN', '2014-08-04', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(286, 100, 'ARVAN', '2018-03-03', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(287, 101, 'SUMARLIN', '2989-03-27', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(288, 102, 'SALDIANTO', '1980-02-08', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(289, 103, 'AGUS PENNA', '1950-05-06', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(290, 103, 'SELI', '1993-09-29', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(291, 104, 'HARMAYANA', '1991-07-13', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(292, 104, 'SARMILA', '2007-12-13', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(293, 104, 'SARTIKA', '2009-06-13', 1, 1, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(294, 104, 'SAHRUL', '2013-08-18', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(295, 104, 'ANUGRAH', '2018-03-29', 1, 1, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(296, 105, 'HERMIN', '1984-11-10', 2, 2, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(297, 105, 'ELMI', '2003-10-01', 2, 2, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(298, 105, 'VALENS YULIANUS TONAPA', '2006-02-13', 2, 2, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(299, 105, 'ADITIA SANDAAN TANGDIALLA', '2012-04-21', 2, 2, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(300, 106, 'HANA RURUK', '1964-07-01', 2, 2, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(301, 106, 'ANJAS NOSU', '1997-04-24', 2, 2, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(302, 106, 'ROSA LIA', '2007-05-25', 2, 2, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(303, 106, 'DONI', '2011-05-21', 2, 2, 'Laki-Laki', 1, '03 Jan 2022', '-', '-'),
(304, 107, 'MERI', '1991-05-29', 2, 2, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(305, 107, 'NATANIEL', '2005-12-25', 2, 2, 'Perempuan', 1, '03 Jan 2022', '-', '-'),
(306, 107, 'GAYUS TANGDIALLA', '2007-05-29', 2, 2, 'Laki-Laki', 2, '03 Jan 2022', '-', '-'),
(307, 107, 'KASI', '2011-05-21', 2, 2, 'Perempuan', 2, '03 Jan 2022', '-', '-'),
(308, 108, 'PETRUS. K', '1995-02-01', 2, 2, 'Laki-Laki', 2, '03 Jan 2022', '-', '-'),
(309, 108, 'LINDA', '1999-12-31', 2, 2, 'Perempuan', 2, '03 Jan 2022', '-', '-'),
(311, 109, 'YESLIN TIARA', '1993-06-11', 2, 2, 'Perempuan', 2, '03 Jan 2022', '-', '-'),
(312, 109, 'YESA YULIANTO PAKASI', '2014-07-03', 2, 2, 'Laki-Laki', 2, '03 Jan 2022', '-', '-'),
(313, 109, 'ELSA YOVELITA', '2017-10-21', 2, 2, 'Perempuan', 2, '03 Jan 2022', '--', '-'),
(314, 110, 'YOHANES BELO PANDU', '2002-02-10', 2, 2, 'Laki-Laki', 2, '03 Jan 2022', '-', '-'),
(315, 110, 'MIKHAEL TANGDIALLA', '2005-04-19', 2, 2, 'Laki-Laki', 2, '03 Jan 2022', '-', '-'),
(316, 110, 'ALFREDI TANDIPARE', '2007-06-17', 2, 2, 'Laki-Laki', 2, '03 Jan 2022', '-', '-'),
(317, 110, 'CHAMELIA PASIAKAN', '2012-10-26', 2, 2, 'Perempuan', 2, '03 Jan 2022', '-', '-'),
(318, 110, 'NOPALDI', '2017-11-23', 2, 2, 'Laki-Laki', 2, '03 Jan 2022', '-', '-'),
(319, 111, 'ALBERTIN SINGKALI', '1997-03-28', 2, 2, 'Perempuan', 2, '03 Jan 2022', '-', '-'),
(320, 111, 'ENJELINA REMPE GARANTA', '2019-03-18', 2, 2, 'Perempuan', 2, '03 Jan 2022', '-', '-'),
(321, 112, 'MARIA DUMA', '1972-12-11', 2, 2, 'Perempuan', 2, '03 Jan 2022', '-', '-'),
(322, 112, 'LENI', '2000-03-24', 2, 2, 'Perempuan', 2, '03 Jan 2022', '-', '-'),
(323, 112, 'POPIYANTI', '2003-07-26', 2, 2, 'Perempuan', 2, '03 Jan 2022', '-', '-'),
(324, 112, 'ADRIAN', '2007-02-15', 2, 2, 'Laki-Laki', 2, '03 Jan 2022', '-', '-'),
(325, 112, 'MITA DENGEN DATU', '2010-11-15', 2, 2, 'Perempuan', 2, '03 Jan 2022', '-', '-'),
(326, 113, 'YOHANES. K', '1992-12-04', 2, 2, 'Laki-Laki', 2, '03 Jan 2022', '-', '-'),
(327, 114, 'AGUSTINUS BIRI', '1976-12-31', 2, 2, 'Perempuan', 2, '03 Jan 2022', '-', '-'),
(328, 114, 'ISAL ', '2008-01-12', 2, 2, 'Laki-Laki', 2, '03 Jan 2022', '-', '-'),
(329, 114, 'ADRIEL SUBA', '2020-04-17', 2, 2, 'Laki-Laki', 2, '03 Jan 2022', '-', '-'),
(330, 115, 'FREDI PAKASI', '2002-02-02', 2, 2, 'Laki-Laki', 2, '03 Jan 2022', '-', '-'),
(331, 119, 'ITTANG', '1990-11-19', 2, 2, 'Perempuan', 2, '03 Jan 2022', '-', '-'),
(332, 119, 'KEZIA FEDORA PAKASI', '2016-03-12', 2, 2, 'Perempuan', 2, '03 Jan 2022', '-', '-'),
(333, 119, 'KENZO GIL PAKASI', '2021-04-15', 2, 2, 'Laki-Laki', 2, '03 Jan 2022', '-', '-'),
(334, 120, 'SANA', '1965-07-26', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(335, 120, 'SUDIANTO DOKA', '1984-03-28', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(336, 120, 'JUMARNI', '1997-11-14', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(337, 120, 'AISYAH', '2007-01-17', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(338, 121, 'WAWANDRI BINTIN', '1995-07-03', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(339, 121, 'HASNAENI LUPU', '1997-10-22', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(340, 121, 'SUHAETI ', '2002-11-14', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(341, 121, 'ANUGRAH LUPU', '2004-12-05', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(342, 122, 'AMELIA LOSI', '1992-04-02', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(343, 122, 'MUHAMMAD RIDWAN BOMBING', '2018-11-09', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(344, 123, 'SUMARNI', '1986-02-19', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(345, 123, 'YUHENI YUNITA', '2010-03-19', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(346, 123, 'M.WAHYUDI', '2013-11-04', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(347, 123, 'MUHAMMAD GURAN', '2020-04-13', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(348, 124, 'ASTIN', '1976-01-28', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(349, 124, 'IIS HIDAYAH', '1997-08-09', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(350, 124, 'SARWANDA', '2005-10-21', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '--', '-'),
(351, 124, 'HIDAYATULLAH', '2009-06-19', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(352, 125, 'RIANA', '1971-12-30', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(353, 125, 'ABDUL INDRA', '1994-04-20', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(354, 125, 'HEPIANI SULO ', '1994-10-08', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(355, 125, 'JUANDI', '1996-11-15', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(356, 125, 'ANGGUN SULO', '2010-12-17', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(357, 126, 'MANASA', '1934-03-23', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(358, 127, 'SARIKA', '1945-07-01', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(359, 128, 'HASNIAR MOMA', '1989-12-12', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(360, 128, 'GINA AZALIA MOMA', '2019-03-23', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(361, 129, 'WAODE FIDA', '1975-11-15', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(362, 129, 'IRMA', '2005-04-11', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(363, 130, 'SINAR', '1971-07-01', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(364, 130, 'TAMMU', '1997-12-04', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '--', '-'),
(365, 131, 'RAMMING', '1995-11-06', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(366, 132, 'SHAFIYYAH RAMADHANI', '2018-05-24', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(367, 133, 'TRIANA', '1996-05-12', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(368, 133, 'ULAN DARI', '0001-10-12', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(369, 133, 'NUR PAIDA', '2005-12-21', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(370, 133, 'MUHAMMAD IRFAN', '2010-02-15', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(371, 134, 'SATRIANTI', '1996-05-12', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(372, 134, 'ADIBAH SAHRA PAKOLO', '2005-02-15', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(373, 134, 'ADIAS PAKOLO', '2017-10-23', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(374, 135, 'YARA WADAN', '1989-06-20', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(375, 135, 'MUHAMMAD ASLAM', '2010-03-09', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(376, 135, 'SHAKIRA QALBI', '2016-05-13', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(377, 136, 'BAYA', '1990-03-20', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(378, 136, 'NUR AQILA', '2016-09-15', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(379, 137, 'DURTI', '1971-06-06', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(380, 137, 'DARNI', '1999-12-14', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(381, 137, 'DARMIN', '2001-09-17', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(382, 137, 'SISKA', '2003-09-10', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(383, 137, 'JUNITA', '2006-11-20', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(384, 137, 'AKIFA NAILA', '2014-02-04', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(385, 138, 'BAYU', '2000-01-01', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(386, 138, 'NURUL PAISAH', '2006-10-12', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(387, 139, 'EKAWATI', '1980-02-06', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(388, 139, 'ISTIQA PUTRI', '2010-05-31', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(389, 139, 'ALQIAMAH PUTRI', '2015-04-06', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(390, 141, 'JOKO NOVIANTO', '1992-11-15', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(391, 140, 'FIRGO', '1973-11-14', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(392, 140, 'AGUNG PURWANTO', '2005-05-05', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(393, 141, 'SRI RETNOWATI', '1967-06-27', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(394, 141, 'AYU TRI ANDINI', '1995-10-17', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(395, 142, 'ATI HALIK', '1969-03-09', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(396, 142, 'IRSAN', '2000-01-26', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(397, 143, 'MUH.GUNTUR', '1996-06-11', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(398, 143, 'M.GIMNASTIAR', '2000-11-12', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(399, 143, 'WIWIN TRIA NINGRUM', '2005-04-05', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(400, 144, 'NIRMALA SARI', '2002-01-03', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(401, 144, 'WAIZAHA LESTARI', '2006-06-26', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(402, 145, 'MANGUNGUJU', '1945-07-01', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(403, 146, 'ADRIANI', '1977-09-05', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(404, 146, 'ARYANI', '1998-04-04', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(405, 146, 'SHINTYA ALFATIHA', '2004-05-08', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(406, 147, 'SLAMET S.', '1961-12-31', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(407, 148, 'WATINI', '1970-07-01', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(408, 148, 'SRI MULYANI', '2007-07-15', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(409, 149, 'HERMIN', '1972-08-05', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(410, 149, 'VIKRAM', '1997-04-04', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(411, 149, 'VIKRIYANI', '1999-05-25', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(412, 149, 'GUNADI', '2003-07-08', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(413, 149, 'INES', '2005-07-17', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(414, 149, 'SHITI AISYA', '2015-09-02', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(415, 150, 'ROSITA ARISALDY', '1983-06-20', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(416, 150, 'ANAS TASYA', '2008-05-13', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(417, 150, 'NADIVA ZULAIKAH', '2009-04-11', 4, 4, 'Perempuan', 4, '03 Jan 2022', '--', '-'),
(418, 150, 'MUHAMMAD IZZAT HASAN', '2014-11-07', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(419, 150, 'MUHAMMAD NUAFIL ZIKRI', '2016-05-20', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(420, 151, 'WINARNI ANDRIANI', '1995-02-19', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(421, 151, 'HANINDINA AKHAYRA', '2018-11-30', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(422, 152, 'SULIANTI PONIRON', '1996-08-13', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(423, 152, 'MUHAMMAD RAFA AZKA RADENG', '2016-12-25', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(424, 153, 'ALAN TIRTA', '2010-11-10', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(425, 153, 'RAISYA BUNGA TINORING', '2014-05-15', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(426, 154, 'HADARIANA', '1982-08-05', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(427, 154, 'MUH.RAHMANSYAH', '2008-06-03', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(428, 154, 'MUH.RIFKI', '2010-11-01', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(429, 154, 'WASILAH', '2019-10-03', 0, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(430, 154, 'WASILAH', '2019-10-03', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(431, 155, 'HAERANI MUH.DACHRY', '1971-08-11', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(432, 156, 'AZKA ALDRICK', '2018-08-25', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(433, 157, 'RISMA RUSDIN, S.Pd', '1992-04-24', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(434, 157, 'AMRI HUSRI', '2013-03-30', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(435, 158, 'TAJO', '1870-07-19', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(436, 159, 'MASNI', '1972-07-01', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(437, 159, 'FACHRI', '2001-02-19', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(438, 159, 'FACHRUL', '2005-04-15', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(439, 160, 'TIAN ', '2004-11-08', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(440, 160, 'ALANNUARI', '2005-01-08', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(441, 161, 'HASRIANI', '1996-12-31', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(442, 161, 'AURA TAMARA', '2017-05-19', 4, 4, 'Perempuan', 4, '03 Jan 2022', '-', '-'),
(443, 161, 'MUHAMMAD HASAN', '2019-10-27', 4, 4, 'Laki-Laki', 4, '03 Jan 2022', '-', '-'),
(444, 162, 'PERIS ', '1974-03-01', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(445, 162, 'ABD.TAUFIQ DACHRI', '1996-06-26', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(446, 162, 'ABD.FAUSI DACHRI', '2000-08-04', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(447, 162, 'SURIATI', '2003-10-04', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(448, 162, 'SULKIFLI', '2006-02-27', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(449, 162, 'MEILANI', '2008-05-17', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(450, 163, 'MISNAN', '1998-07-07', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(451, 163, 'GIO', '1977-07-07', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(452, 164, 'MUH.LINTANG', '2004-04-01', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(453, 164, 'JEIHAN ABIGAIL', '2006-03-13', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(454, 164, 'AURA HERPISA', '2007-08-31', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(455, 164, 'IBNU SAHAB', '2010-12-04', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(456, 164, 'AZIZAH ', '2003-06-12', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(457, 164, 'KHALIFA', '2020-02-20', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(458, 164, 'KHALIFA', '2020-02-20', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(459, 165, 'JALIPA', '1960-06-04', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(460, 165, 'RIVAL', '1995-06-24', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(461, 165, 'RION', '1998-11-08', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(462, 165, 'TATI', '1999-07-10', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(463, 165, 'RAHMAT', '2000-09-02', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(464, 165, 'AKLIM', '2001-08-22', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(465, 165, 'PADLI', '2004-03-12', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(466, 165, 'RASDI', '2005-05-05', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(467, 165, 'SAMIA', '2009-08-17', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(468, 166, 'MUH.KILAL RAMADAN', '2006-09-28', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(469, 167, 'RANDI HASAN IDRIS', '2003-07-07', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(470, 167, 'HAMZAH ASHARI HASAN IDRIS', '2006-10-05', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(471, 167, 'TRI HAFIS HASAN IDRIS', '2009-10-10', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', ''),
(472, 168, 'WINDHY AFRILIA', '2004-04-27', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(473, 169, 'JANAWIA', '1970-12-31', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(474, 169, 'MUH.ABDUL RAHMAT', '1995-07-27', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(475, 169, 'AKBAR', '1998-12-18', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(476, 169, 'HASURA', '2001-03-30', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(477, 169, 'INDRA', '2002-03-16', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(478, 169, 'ADI PUTRA', '2003-08-16', 5, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(479, 169, 'SUSANTI', '2005-02-09', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(480, 170, 'NURWITA', '1992-07-10', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(481, 170, 'SULISTIAWATI', '2001-11-23', 5, 5, 'Perempuan', 5, '03 Jan 2022', '-', '-'),
(482, 170, 'AGUM CAHYANTO', '2005-06-06', 0, 5, 'Laki-Laki', 5, '03 Jan 2022', '-', '-'),
(483, 170, 'AGUM CAHYANTO', '2005-06-06', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(484, 170, 'UNUN JAYANTI PAINTU', '2007-10-11', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(485, 171, 'MUHAMMAD ILHAM', '2017-06-18', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(486, 171, 'MUHAMMAD FAUZAN', '2019-02-16', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(487, 172, 'MUHAMMAD ILHAM', '1997-07-01', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(488, 172, 'ANRINI DAHRI', '1999-05-07', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(489, 173, 'ARKANA HAMZAH', '2018-11-18', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(490, 174, 'LANI', '1984-12-20', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(491, 174, 'NUR HIJRA', '2003-06-08', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(492, 174, 'ABD.HASRIL', '2007-04-04', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(493, 174, 'MUHAMMAD SULPIKAR', '2014-09-07', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(494, 174, 'NUR ASIFAH', '2016-01-24', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(495, 174, 'MUHAMMAD HAMKA', '2017-04-01', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(496, 175, 'SARTIKA', '1987-09-09', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(497, 175, 'MUH.FAJRI', '2009-04-06', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(498, 175, 'ALFIAN', '2010-05-07', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(499, 175, 'ATTAHIR', '2017-05-29', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(500, 176, 'NURUL QORIA  S.Pd.I', '1991-04-20', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(501, 176, 'AFIF AKWAL', '2019-05-22', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(502, 177, 'DEVI RAHMDANI', '2000-10-29', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(503, 178, 'RAHING', '1960-12-31', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(504, 179, 'MUH.VADIL PAKOLO', '2010-05-01', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(505, 179, 'MUH. AMAR PAKOLO', '2013-07-28', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(506, 180, 'MARDIANA', '1997-03-25', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(507, 180, 'MUHAMMAD IRSYAD HADRUL', '2020-06-17', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(508, 181, 'SURYA JAYA', '1983-08-01', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(509, 182, 'JUMARIA', '1963-09-20', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(510, 182, 'EGI FADLY', '2000-08-13', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(511, 182, 'SUNDARI', '2002-01-19', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(512, 182, 'ULFA AZZHRA MONA', '2013-06-10', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(513, 183, 'UMMANG', '1996-03-01', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(514, 183, 'AKBAR', '1999-05-05', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(515, 184, 'MUH. YAHYA', '2002-06-01', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(516, 184, 'FATURRAHMAN', '2004-11-01', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(517, 185, 'NURLIANA SARI', '1994-12-23', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(518, 185, 'MUHAMMAD ARSYA FIRENDRA', '2019-09-18', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(519, 186, 'ASRA', '1962-03-17', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(520, 186, 'HAERUL', '1992-01-24', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(521, 186, 'ABD. RAHIM WADAN', '2002-01-03', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(522, 187, 'DEA ECCON', '1982-06-20', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(523, 188, 'JUMIA TALLESANG', '1968-04-14', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(524, 188, 'NURMALA', '1997-05-12', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(525, 188, 'ABDUL RAUF', '2002-03-26', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(526, 189, 'NURHAEMI', '1996-06-06', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(527, 189, 'MUHMMAD LUTHFI FATIH', '2017-12-23', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(528, 190, 'HASRUNI', '1996-10-10', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(529, 191, 'BARIA', '1974-04-04', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(530, 191, 'ALDIM TAMRIN', '1997-10-04', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(531, 191, 'MUH.LATIF TAMRIM', '2001-11-10', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(532, 191, 'NUR AQIDAH', '2005-12-12', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(533, 191, 'LATIFA', '2009-06-26', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(534, 191, 'TALITA ZAHRA', '2016-11-30', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(535, 192, 'MUHAMMAD FIQRI', '2015-07-28', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(536, 193, 'EVIANTY', '1987-03-16', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(537, 193, 'MUHAMMAD ALHADI', '2016-06-26', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(538, 193, 'MUHAMMAD RASYID', '2019-02-03', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(539, 193, 'HAYIRA HILIYA KARESWAN', '2020-11-16', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(540, 194, 'JUMAEDA', '1983-07-17', 5, 5, 'Perempuan', 5, '04 Jan 2022', '--', '-'),
(541, 194, 'NURUL ANNISA', '2008-01-31', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(542, 194, 'SIAMI', '2011-08-23', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(543, 194, 'TRI ANDINI', '2016-04-03', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(545, 195, 'YOLA', '1999-06-02', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(546, 195, 'NUR FAUZIA', '2018-09-20', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(547, 196, 'HARIANTI', '1993-07-03', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(548, 196, 'MUHLIS', '2009-10-26', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(549, 196, 'MUH. ALMUNAWIRI', '2013-02-07', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(550, 196, 'SUGIARTI', '2016-06-01', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(551, 196, 'MUHAMMAD RIZA', '2018-07-31', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(552, 197, 'NASMIANI', '1983-11-04', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(553, 197, 'MUHAMMAD ALIF PALULUN', '2002-12-28', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(554, 197, 'SYUMMA PALULUN', '2005-03-22', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(555, 197, 'INDRI', '2005-02-14', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(556, 197, 'SYAHIDA PALULUN', '2009-02-09', 5, 5, 'Perempuan', 5, '04 Jan 2022', '--', '-'),
(557, 197, 'AIDHA MUJAHIDA', '2010-06-29', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(558, 197, 'MUHAMMAD ALIF TALLESANG', '2012-08-12', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(559, 197, 'FAHIRA TALLESANG', '2020-10-14', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(560, 198, 'DEAFILARAHMA', '2009-09-29', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(561, 199, 'HAMIDA', '1967-07-11', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(562, 200, 'AULIYA', '2020-10-05', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(563, 201, 'NADAPRIYAN', '2013-04-21', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(564, 201, 'MUH. AMRUL P', '2003-03-07', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(565, 202, 'MUHAMMAD HAKIM', '2009-11-21', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(566, 202, 'NUR ALIYAH', '2013-04-02', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(567, 202, 'MUHAMMAD HUZAIN HAFIZ', '2020-09-22', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(568, 203, 'MUHAMMAD AL ZAHY KAMAL', '2014-07-02', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(569, 203, 'AZKA HURIYAH HAURA', '2015-07-29', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(570, 203, 'MUHAMMAD YUSUF SULAIMAN', '2017-10-25', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(571, 204, 'MARTINA PANGNGALA', '1978-02-26', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(572, 204, 'RESKIANTO LUNGAN', '1998-05-26', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(573, 204, 'RAINOL SILAS SASO LUNGAN', '1999-07-26', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(574, 204, 'SELVINA SONDA LUNGAN', '2001-02-06', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(575, 204, 'SELVINA SONDA LUNGAN', '2001-02-06', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(576, 204, 'RUSDIANTO LUNGAN', '2003-05-08', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(577, 204, 'SISKA LUNGAN', '2009-01-21', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(578, 204, 'WELVI MIKAL', '2012-03-11', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(579, 204, 'SANTIKA LUNGAN', '2014-05-22', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(580, 205, 'KARTIA', '1989-12-08', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(581, 205, 'NURWAHIDA', '2011-11-16', 5, 5, 'Perempuan', 5, '04 Jan 2022', '--', '-'),
(582, 205, 'MASITA DEWI', '2016-07-26', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(583, 206, 'BADIA', '1977-11-10', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(584, 206, 'BASRUL', '1996-06-27', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(585, 206, 'RUNIA', '2002-05-30', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(586, 206, 'SADIT', '2004-07-15', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(587, 206, 'SASTA', '2006-07-27', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(588, 206, 'JUMISA', '2008-06-20', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(589, 206, 'ANSAR', '2010-06-08', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(590, 207, 'DITA', '1992-11-06', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(591, 207, 'MUHAMMAD RAFLI', '2012-06-21', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(592, 207, 'MUHAMMAD WAHID', '2014-01-21', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(593, 207, 'ASROPI', '2018-05-05', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(594, 208, ' RUSMAN AKBAR', '1950-12-31', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(595, 209, 'SALBIA', '1986-05-11', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-');
INSERT INTO `tb_penduduk` (`id_pend`, `kk_id`, `nama_art`, `tgl_lahir`, `dusun_id`, `rt_id`, `kelamin`, `ket`, `created_at`, `nik`, `no_kk`) VALUES
(596, 209, 'MUH. RASYID', '2014-12-03', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(597, 209, 'NURAINI', '2012-11-16', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(598, 209, 'SITI SAENAB', '2016-09-03', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(599, 210, 'SIDINA', '1975-04-07', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(600, 211, 'AFRIANTO', '1994-04-04', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(601, 212, 'UNI', '1990-06-29', 5, 5, 'Perempuan', 5, '04 Jan 2022', '--', '-'),
(602, 212, 'RENDI LOSAK', '2009-03-12', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(603, 212, 'RENITA', '2010-04-13', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(604, 212, 'RIKAL', '2017-06-01', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(605, 212, 'RIKAL', '2017-06-01', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(606, 213, 'RISMA.A', '1990-06-10', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(607, 213, 'HALWA UTIRA PAKOLO', '2011-03-17', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(608, 213, 'ABRISAM PAKOLO', '2017-06-05', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(609, 214, 'NOVI', '1999-07-21', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(610, 214, 'KHAIRUNNISA AYA', '2014-12-14', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(611, 214, 'AZZAHRATUN NISA', '2018-12-03', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(612, 215, 'NURNAENI', '1991-12-31', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(613, 215, 'ISMAIL', '2010-11-30', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(614, 216, 'JANNATI', '1969-12-31', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(615, 216, 'LISNAWATI PASANDE', '1985-12-31', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(616, 216, 'ASBIANTI PASANDE', '1994-09-16', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(617, 216, 'HARMAN', '1994-12-25', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(618, 217, 'MERRAU', '1933-07-01', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(619, 218, 'IRMA', '1995-07-11', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(620, 294, 'LIANA PATANDUK', '1998-12-16', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(621, 295, 'RIDA', '1968-05-11', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(622, 295, 'HERMAN', '1994-03-27', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(623, 295, 'KRIS', '1999-03-08', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(624, 296, 'RUT SULLE', '1982-03-03', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(625, 296, 'RENO PALUNGAN', '2014-11-18', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(626, 296, 'RENI PALUNGAN', '2018-05-24', 0, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(627, 297, 'LUDIA SENGA', '1980-10-15', 0, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(628, 297, 'LUDIA SENGA', '1980-10-15', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(629, 297, '  MAYLINDA AGATHA T', '2010-05-17', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(630, 297, 'DANIEL TONAPA ', '2011-10-21', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(631, 297, 'DECRISTIN TONAPA', '2014-12-30', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(632, 298, 'YULIANA LANSELINA', '1990-07-18', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(633, 298, 'AFRIANA MARIA', '2018-04-28', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(634, 299, 'DAMARIS', '1990-09-21', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(635, 299, 'ALFASIUS YEREMIA L', '2017-10-28', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(636, 300, 'DAMARIS GARANTA', '1965-07-01', 0, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(637, 300, 'YOHANIS', '1988-07-01', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(638, 300, 'DAMARIS GARANTA', '1965-07-01', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(639, 300, 'SENI', '2002-09-23', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(640, 301, 'DESY PATANDUK', '1983-06-07', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(641, 301, 'ARIL PALUNGAN', '2006-11-13', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(642, 301, 'ANGGI PALUNGAN', '2008-02-05', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(643, 301, 'ABIGAEL PALUNGAN', '2010-07-15', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(644, 302, 'HANA SAMPE LEO', '1985-06-01', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(645, 302, 'ARIL SIMPAN', '2006-07-31', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(646, 302, 'MARLINA', '2008-01-13', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(647, 302, 'MERLIN', '2010-07-23', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(648, 303, 'RESTU KARANGAN ', '2009-06-08', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(649, 303, 'REINHAT TANGDIALLA', '2015-03-27', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(650, 303, 'RENSI TANGDIALLA', '2016-12-19', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(651, 304, 'OKY PARANGAN', '1995-05-11', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(652, 304, 'DEDY RANTE', '2005-03-19', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(653, 304, 'ALBER', '2007-12-12', 0, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(654, 305, 'APPING', '1997-11-10', 0, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(655, 305, 'APPING', '0997-11-01', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(656, 306, 'JENI TANGDIALLA', '1984-06-03', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(657, 306, 'PRISKILA RANDAN', '2003-03-07', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(658, 306, 'REFALDI TANGDIALLA', '2008-01-16', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(659, 306, 'FEBRIYAN TANGDIALLA', '2018-06-15', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(660, 307, 'RATNA', '2000-11-06', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(661, 307, 'CARLISSA RIANYSULLE', '2020-11-27', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(662, 308, 'POLINA', '1959-07-01', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(663, 308, 'PETRUS PALUNGAN', '2001-03-03', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(664, 309, 'YOSEF', '1994-07-01', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(665, 309, 'NICOLAUS TONAPA', '1996-09-08', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(666, 309, 'STANIS TANGDIALLA', '1998-07-01', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(667, 309, 'VALENS YULIANUS T.', '2006-02-13', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(668, 310, 'WAHYUNENGSIH', '1988-03-13', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(669, 310, 'HAIKAL PALUNGAN', '2010-10-08', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(670, 310, 'SELFIANI PALUNGAN', '2012-09-29', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(671, 310, 'ELVIANI PALUNGAN', '2017-12-09', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(672, 311, 'MARIA TAPPA', '1954-07-01', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(673, 311, 'PUTRI AURA.P', '2008-09-21', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(674, 312, 'DINA PATANDUK', '1985-06-04', 2, 2, 'Perempuan', 2, '04 Jan 2022', '--', '-'),
(675, 312, 'ANNATASYA PATANDUK', '2006-10-05', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(676, 312, 'KRISTIAN PABONTONG', '2011-03-09', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(677, 312, 'RAVAEL PABONTONG', '2013-09-02', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(678, 312, 'REHAN PABONTONG', '2018-05-07', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(679, 313, 'EVI', '1991-06-16', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(680, 313, 'ALPIAN', '2010-12-07', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(681, 313, 'ALGA SAMBE\'', '2013-12-09', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(682, 313, 'AUREL SAMBE\'', '2016-05-04', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(683, 313, 'ARFIN SAMBE\'', '2017-07-18', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(684, 314, 'ORAN', '1956-04-27', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(685, 314, 'AGUS PASANDE', '1996-08-26', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(686, 315, 'IRA PUSPITA', '1990-03-04', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(687, 315, 'NUR ASTRINDA', '2010-08-24', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(688, 315, 'NUR AENI', '2014-08-15', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(689, 315, 'NUR TRISA', '2017-08-07', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(690, 316, 'YULI', '1991-07-12', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(691, 316, 'RESKIANUS JEMAHU', '2010-12-19', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(692, 316, 'ARJUN MILKIOR', '2014-12-09', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(693, 317, 'RISMA DENGEN DATU', '1989-01-25', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(694, 317, 'SEYRIL RANTE TASIK', '2009-10-13', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(695, 317, 'APRILIO LOPPO TANDI L', '2013-10-25', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(696, 317, 'KELVIN BA\'TAN PALANGGU', '2018-09-22', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(697, 318, 'SARAH TAPPARAN', '1961-07-08', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(698, 318, 'DENIS SAPAN PADANG', '2018-12-24', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(699, 319, 'RUTH BUNGA', '1962-12-31', 0, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(700, 319, 'RUTH BUNGA', '1962-12-31', 0, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(701, 319, 'AGUSTINA', '1994-08-27', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(702, 319, 'RUTH BUNGA', '1961-12-31', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(703, 319, 'EDO', '1999-10-29', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(704, 320, 'EDO\'', '1946-07-01', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(705, 321, 'NATALIA', '1994-12-30', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(706, 321, 'PRISKILA PALUNGAN', '2015-04-05', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(707, 321, 'PRITA NATASYA PALUNGAN', '2020-08-24', 0, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(708, 321, 'PRITA NATASYA PALUNGAN', '2020-08-24', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(709, 322, 'ELISABET.A', '1996-01-12', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(710, 322, 'GITA GARANTA', '2001-10-11', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(711, 322, 'JUMRA PATANDUK', '2005-03-25', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(712, 322, 'YOSUA MANGOPO', '2012-06-16', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(713, 323, 'LINCE LAMBI', '1970-02-20', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(714, 323, 'MINCE', '1998-02-25', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(715, 323, 'RIFAN', '2013-12-02', 2, 2, 'Laki-Laki', 2, '04 Jan 2022', '-', '-'),
(716, 324, 'KODE', '1965-02-14', 2, 2, 'Perempuan', 2, '04 Jan 2022', '-', '-'),
(717, 383, 'PATIMANG', '1956-02-23', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(718, 383, 'ASRINA GANDA', '1996-04-20', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(719, 383, 'SAYRAH ANATAYA GANDA', '2000-10-12', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(720, 383, 'AHWAN GANDA', '2003-12-27', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(721, 383, 'AINUN', '2008-02-06', 5, 5, 'Perempuan', 5, '04 Jan 2022', '-', '-'),
(722, 383, 'MUHAMMAD KHILAL RAMADAN', '2006-09-28', 5, 5, 'Laki-Laki', 5, '04 Jan 2022', '-', '-'),
(723, 325, 'NURAIN', '2012-02-02', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(724, 326, 'MUHAMMAD RIVAL', '2007-12-06', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(725, 326, 'BAWENG', '1966-12-31', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(726, 327, 'ASMIATI', '1990-12-04', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(727, 327, 'ASMA ULHUSNA', '2010-09-04', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(728, 327, 'AHMAD ZAKY MAULANA', '2012-04-03', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(729, 327, 'NUR SYAFIQAH', '2017-03-20', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(730, 328, 'HAMRIANA', '1984-09-04', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(731, 328, 'FI\'ADH RESKIAWAN', '2014-01-10', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(732, 328, 'SALSABILA AZZAHRA', '2016-05-24', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(733, 329, 'SRI SUHERNI', '1974-07-05', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(734, 329, 'SYAHRUL AFANDI', '2005-05-21', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(735, 329, 'SYAHRA RAMADANI', '2010-10-08', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(736, 330, 'RISALDI', '2002-02-20', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(737, 330, 'RIPPA SADDIYA', '2004-09-25', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(738, 331, 'SAMIATING', '1985-05-05', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(739, 331, 'TAUFIQ RAUSA TAMMA', '1004-05-07', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(740, 331, 'SRI KIRANA', '2008-05-03', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(741, 332, 'BAHRU', '1948-02-04', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(742, 333, 'IDA NURFARIDA', '1985-02-22', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(743, 333, 'HIKMAH', '2006-04-28', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(744, 333, 'MUDMAINNAH', '2019-09-22', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(745, 333, 'ALAM MAULANA', '2014-05-30', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(746, 333, 'NURSAKINAH', '2019-09-03', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(747, 334, 'HASNA WATI', '1973-09-12', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(748, 334, 'SARDI', '1997-11-25', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(749, 335, 'BUNGALA', '1980-01-06', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(750, 335, 'ARLAN', '2002-07-09', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(751, 335, 'ARIL', '2004-10-14', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(752, 335, 'ALNAWATI', '2006-10-14', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(753, 336, 'RISKA', '1997-01-25', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(754, 336, 'ANDI SARLINA', '2018-07-20', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(755, 338, 'MARIANA LAPU', '1966-07-01', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(756, 338, 'UPA NATI', '2005-01-01', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(757, 339, 'WAHYUNI HERMAN', '1983-11-01', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(758, 338, 'SARLETI', '2009-03-30', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(759, 339, 'NADIFA NADA SALFA', '2012-11-10', 3, 3, 'Perempuan', 3, '04 Jan 2022', '--', '-'),
(760, 339, 'MUHAMMAD  PRAYUDA', '2018-08-09', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(761, 340, 'MUH.ALI', '1989-04-13', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(762, 341, 'SENIKA SIAMPA', '1974-09-01', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(763, 341, 'ELIESER', '2006-10-01', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(764, 341, 'PRISKA', '2009-04-10', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(765, 341, 'ALFHA GARANTA', '2013-12-22', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(766, 342, 'NOVIANTI ARSYAD', '1994-06-10', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(767, 342, 'MUHAMMAD ALIF HAVIS', '2016-07-28', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(768, 342, 'NUR AILA SAHIDA', '2018-02-09', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(769, 343, 'ISMA ALVAIDA', '1998-04-02', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(770, 343, 'HIJRAH', '2001-05-10', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(771, 344, 'WATINI', '1952-02-20', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(772, 345, 'YENI TANDI PARE', '1965-06-10', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(773, 345, 'LIDIA', '2008-08-20', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(774, 346, 'HAMRIANA', '1992-12-05', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(775, 346, 'PADIL', '2010-04-24', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(776, 346, 'SITI AISYAH', '2014-05-01', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(777, 346, 'ARSY SALSABILA', '2019-10-11', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(778, 347, 'NURUL SAFITRI, S.An', '1987-04-02', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(779, 348, 'SITTI OMBONG', '1970-10-04', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(780, 348, 'MUHAMMAD FAISAL', '2003-06-02', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(781, 348, 'IINTAN NURAENI', '2014-02-04', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(782, 348, 'RISKI', '2007-11-11', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(783, 349, 'DIRTA TAPPA', '1994-10-09', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(784, 349, 'NADIRA', '2016-05-20', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(785, 349, 'OLIVIA PUTRI RUSLAN', '2016-02-15', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(786, 350, 'ANNISA JENITA PUTRI', '2005-05-09', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(787, 350, 'NURAINI', '2012-02-02', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(788, 351, 'AUREL SAPUTRI', '2010-07-16', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-'),
(789, 352, 'SYAHRU RAMADHAN', '2007-09-13', 3, 3, 'Laki-Laki', 3, '04 Jan 2022', '-', '-'),
(790, 353, 'DINA KINAN', '1956-11-10', 3, 3, 'Perempuan', 3, '04 Jan 2022', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyewa`
--

CREATE TABLE `tb_penyewa` (
  `id_penyewa` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `aset_id` int(11) NOT NULL,
  `harga_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` varchar(128) NOT NULL,
  `tgl_kembali` varchar(123) NOT NULL,
  `total` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penyewa`
--

INSERT INTO `tb_penyewa` (`id_penyewa`, `user_id`, `aset_id`, `harga_id`, `status`, `created_at`, `tgl_kembali`, `total`) VALUES
(2, 2, 4, 4, 1, '24 Dec 2021', '2021-11-12', ''),
(3, 2, 3, 3, 1, '24 Dec 2021', '2021-12-27', ''),
(4, 2, 2, 2, 1, '03 Jan 2022', '2022-11-01', ''),
(5, 3, 4, 4, 1, '03 Jan 2022', '2022-01-06', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `id_regis` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(123) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `created_at` varchar(128) NOT NULL,
  `status` int(1) NOT NULL,
  `token_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`id_regis`, `user_id`, `nama`, `email`, `username`, `password`, `no_hp`, `created_at`, `status`, `token_id`) VALUES
(1, 2, 'Adi', 'adi@gmail.com', 'adimurdayani', '538ccb720c36e5991c7cbe07092497e56100869c', '', '24 Dec 2021 00:47', 1, 'fiIQCMsxSMs:APA91bFrEj2L7-0cSt_t9FoYEoIf1n4mDXHjbzVgZkdFF51iGBuWTQJ3YiFkSQbQZNlZPfCXutmg4Czxq6rixeNbS1QYfq-tJ1ioFyVs1iOsxME9Wae3zYO0c2vTLVm9tIFPrPB725pJ'),
(2, 2, 'Jumarni', 'jumarni@gmail.com', 'utti', 'dd39f57e2516914b72a0a0e17caf758a607dee20', '', '24 Dec 2021 07:40', 1, 'eKuz0dHG-OM:APA91bFhPrisiVShZOJOUpmUzFBH1iQtVPIzSCJ9DKcdibmzUf3CVBVch8_MEtVEHfPiOXBG3Rq_sCtlm9MdDQre5VFXMwH5q_u8fey2HLt8G0aBok6XCrNNSK9GNad1UyU3gw5MWY4N'),
(3, 2, 'Khalil', 'khalilkhalilgibran83@gmail.com', 'khalil', '83ee8aebb2ffa58dd1494b88005ea5317c6884a0', '', '03 Jan 2022 07:31', 1, 'cdT610CSnyM:APA91bGtEF3Tl2NiN1D9q_Q7msI4uXAS84cHMk1S1NcR5cF7IEdrTat0d8W0lmRqUAsR0bgAxN89p6RaE0nBuMI85WVrAUEiYXPu5S-uxJVXLhnj2lNX-TU8BCj-KAxBPtDHg4_DkPY1'),
(4, 2, 'Khalil', 'khalilkhalilgibran83@gmail.com', 'khalil', '83ee8aebb2ffa58dd1494b88005ea5317c6884a0', '', '03 Jan 2022 07:31', 1, 'cdT610CSnyM:APA91bGtEF3Tl2NiN1D9q_Q7msI4uXAS84cHMk1S1NcR5cF7IEdrTat0d8W0lmRqUAsR0bgAxN89p6RaE0nBuMI85WVrAUEiYXPu5S-uxJVXLhnj2lNX-TU8BCj-KAxBPtDHg4_DkPY1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rt`
--

CREATE TABLE `tb_rt` (
  `id_rt` int(11) NOT NULL,
  `rt` varchar(128) NOT NULL,
  `dusun_id` int(11) NOT NULL,
  `created_at` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rt`
--

INSERT INTO `tb_rt` (`id_rt`, `rt`, `dusun_id`, `created_at`) VALUES
(1, 'I', 1, '26 Oct 2021'),
(2, 'II', 1, '26 Oct 2021'),
(3, 'III', 2, '26 Oct 2021'),
(4, 'IV', 2, '26 Oct 2021'),
(5, 'V', 3, '26 Oct 2021'),
(6, 'VI', 3, '26 Oct 2021'),
(7, 'VII', 4, '26 Oct 2021'),
(8, 'VIII', 4, '26 Oct 2021'),
(9, 'IX', 5, '26 Oct 2021'),
(10, 'X', 5, '26 Oct 2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_active` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `user_id`, `user_active`, `nama`, `email`, `username`, `password`, `created_at`) VALUES
(1, 1, 1, 'Jumarni', 'jumarnipakolo@gmail.com', 'admin123', 'f865b53623b121fd34ee5426c792e5c33af8c227', '14 Dec 2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_aset`
--
ALTER TABLE `tb_aset`
  ADD PRIMARY KEY (`id_aset`);

--
-- Indexes for table `tb_aset_t_sewa`
--
ALTER TABLE `tb_aset_t_sewa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_dusun`
--
ALTER TABLE `tb_dusun`
  ADD PRIMARY KEY (`id_dusun`);

--
-- Indexes for table `tb_grup`
--
ALTER TABLE `tb_grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indexes for table `tb_kritik`
--
ALTER TABLE `tb_kritik`
  ADD PRIMARY KEY (`id_kritik`);

--
-- Indexes for table `tb_namakk`
--
ALTER TABLE `tb_namakk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id_pend`);

--
-- Indexes for table `tb_penyewa`
--
ALTER TABLE `tb_penyewa`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`id_regis`);

--
-- Indexes for table `tb_rt`
--
ALTER TABLE `tb_rt`
  ADD PRIMARY KEY (`id_rt`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aset`
--
ALTER TABLE `tb_aset`
  MODIFY `id_aset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_aset_t_sewa`
--
ALTER TABLE `tb_aset_t_sewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_dusun`
--
ALTER TABLE `tb_dusun`
  MODIFY `id_dusun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_grup`
--
ALTER TABLE `tb_grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kritik`
--
ALTER TABLE `tb_kritik`
  MODIFY `id_kritik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_namakk`
--
ALTER TABLE `tb_namakk`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=385;

--
-- AUTO_INCREMENT for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id_pend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=791;

--
-- AUTO_INCREMENT for table `tb_penyewa`
--
ALTER TABLE `tb_penyewa`
  MODIFY `id_penyewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `id_regis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_rt`
--
ALTER TABLE `tb_rt`
  MODIFY `id_rt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
