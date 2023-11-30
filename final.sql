-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 02:52 AM
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
-- Database: `cos`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `mabl` int(11) NOT NULL,
  `matk` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `noi_dung` varchar(5000) NOT NULL,
  `ngay_bl` datetime NOT NULL DEFAULT current_timestamp(),
  `trang_thai` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `madh` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`madh`, `masp`, `so_luong`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `magh` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietgiohang`
--

INSERT INTO `chitietgiohang` (`magh`, `masp`, `so_luong`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chitietkhuyenmai`
--

CREATE TABLE `chitietkhuyenmai` (
  `makm` int(11) NOT NULL,
  `masp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `madh` int(11) NOT NULL,
  `matk` int(11) DEFAULT NULL,
  `ngay_dat_hang` datetime NOT NULL DEFAULT current_timestamp(),
  `ho_ten` varchar(250) NOT NULL,
  `so_dien_thoai` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dia_chi` varchar(250) NOT NULL,
  `phuong_thuc` tinyint(1) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`madh`, `matk`, `ngay_dat_hang`, `ho_ten`, `so_dien_thoai`, `email`, `dia_chi`, `phuong_thuc`, `trang_thai`) VALUES
(1, 1, '2023-11-24 08:52:31', 'Nguyễn Chính', '0916512235', 'chinhnguyennn24@gmail.com', 'quang trung', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `magh` int(11) NOT NULL,
  `matk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`magh`, `matk`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `maha` int(11) NOT NULL,
  `hinh_anh` varchar(250) NOT NULL,
  `masp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hinhanh`
--

INSERT INTO `hinhanh` (`maha`, `hinh_anh`, `masp`) VALUES
(2, 'suaruamat1.2_truong.jpg', 1),
(3, 'suaruamat1.3_truong.jpg', 1),
(4, 'suaruamat1.4_truong.jpg', 1),
(5, 'suaruamat2.1_truong.jpg', 2),
(6, 'suaruamat2.2_truong.jpg', 2),
(7, 'suaruamat2.3_truong.jpg', 2),
(8, 'suaruamat2.4_truong.jpg', 2),
(9, 'suaruamat3.1_truong.jpg', 3),
(10, 'suaruamat3.2_truong.jpg', 3),
(11, 'suaruamat3.3_truong.jpg', 3),
(12, 'suaruamat3.4_truong.jpg', 3),
(13, 'suaruamat4.1_truong.jpg', 4),
(14, 'suaruamat4.2_truong.jpg', 4),
(15, 'suaruamat4.3_truong.jpg', 4),
(16, 'suaruamat4.4_truong.jpg', 4),
(17, 'suaruamat5.1_truong.jpg', 5),
(18, 'suaruamat5.2_truong.jpg', 5),
(19, 'suaruamat5.3_truong.jpg', 5),
(20, 'suaruamat5.4_truong.jpg', 5),
(21, 'suaruamat6.1_truong.jpg', 6),
(22, 'suaruamat6.2_truong.jpg', 6),
(23, 'suaruamat6.3_truong.jpg', 6),
(24, 'suaruamat6.4_truong.jpg', 6),
(25, 'suaruamat7.1_truong.jpg', 7),
(26, 'suaruamat7.2_truong.jpg', 7),
(27, 'suaruamat7.3_truong.jpg', 7),
(28, 'suaruamat7.4_truong.jpg', 7),
(29, 'suaruamat8.1_truong.jpg', 8),
(30, 'suaruamat8.2_truong.jpg', 8),
(31, 'suaruamat8.3_truong.jpg', 8),
(32, 'suaruamat8.4_truong.jpg', 8),
(33, 'suaruamat9.1_truong.jpg', 9),
(34, 'suaruamat9.2_truong.jpg', 9),
(35, 'suaruamat9.3_truong.jpg', 9),
(36, 'suaruamat9.4_truong.jpg', 9),
(37, 'suaruamat10.1_truong.jpg', 10),
(38, 'suaruamat10.2_truong.jpg', 10),
(39, 'suaruamat10.3_truong.jpg', 10),
(40, 'suaruamat10.4_truong.png', 10),
(41, 'duongthe1.1_truong.jpg', 11),
(42, 'duongthe1.2_truong.jpg', 11),
(43, 'duongthe1.3_truong.jpg', 11),
(44, 'duongthe1.4_truong.jpg', 11),
(45, 'duongthe2.1_truong.jpg', 12),
(46, 'duongthe2.2_truong.jpg', 12),
(47, 'duongthe2.3_truong.jpg', 12),
(48, 'duongthe2.4_truong.jpg', 12),
(49, 'duongthe3.1_truong.jpg', 13),
(50, 'duongthe3.3_truong.jpg', 13),
(51, 'duongthe3.3_truong.jpg', 13),
(52, 'duongthe3.4_truong.jpg', 13),
(53, 'duongthe4.1_truong.jpg', 14),
(54, 'duongthe4.2_truong.jpg', 14),
(55, 'duongthe4.3_truong.jpg', 14),
(56, 'duongthe4.4_truong.jpg', 14),
(57, 'duongthe5.1_truong.jpg', 15),
(58, 'duongthe5.2_truong.jpg', 15),
(59, 'duongthe5.3_truong.jpg', 15),
(60, 'duongthe5.4_truong.jpg', 15),
(61, 'duongthe6.1_truong.jpg', 16),
(62, 'duongthe6.2_truong.jpg', 16),
(63, 'duongthe6.3_truong.jpg', 16),
(64, 'duongthe6.4_truong.jpg', 16),
(65, 'duongthe7.1_truong.jpg', 17),
(66, 'duongthe7.2_truong.jpg', 17),
(67, 'duongthe7.3_truong.jpg', 17),
(68, 'duongthe7.4_truong.jpg', 17),
(69, 'duongthe8.1_truong.jpg', 18),
(70, 'duongthe8.2_truong.jpg', 18),
(71, 'duongthe8.3_truong.jpg', 18),
(72, 'duongthe8.4_truong.jpg', 18),
(73, 'duongthe9.1_truong.jpg', 19),
(74, 'duongthe9.2_truong.jpg', 19),
(75, 'duongthe9.3_truong.jpg', 19),
(76, 'duongthe9.4_truong.jpg', 19),
(77, 'duongthe10.1_truong.jpg', 20),
(78, 'duongthe10.2_truong.jpg', 20),
(79, 'duongthe10.3_truong.jpg', 20),
(80, 'duongthe10.4_truong.jpg', 20),
(81, 'phanmahong1.1_truong.jpg', 21),
(82, 'phanmahong1.2_truong.jpg', 21),
(83, 'phanmahong1.3_truong.jpg', 21),
(84, 'phanmahong1.4_truong.jpg', 21),
(85, 'phanmahong2.1_truong.jpg', 22),
(86, 'phanmahong2.2_truong.jpg', 22),
(87, 'phanmahong2.3_truong.jpg', 22),
(88, 'phanmahong2.4_truong.jpg', 22),
(89, 'phanmahong3.1_truong.jpg', 23),
(90, 'phanmahong3.2_truong.jpg', 23),
(91, 'phanmahong3.3_truong.jpg', 23),
(92, 'phanmahong3.4_truong.jpg', 23),
(93, 'phanmahong4.1_truong.jpg', 24),
(94, 'phanmahong4.2_truong.jpg', 24),
(95, 'phanmahong4.3_truong.jpg', 24),
(96, 'phanmahong4.4_truong.jpg', 24),
(97, 'phanmahong5.1_truong.jpg', 25),
(98, 'phanmahong5.2_truong.jpg', 25),
(99, 'phanmahong5.3_truong.jpg', 25),
(100, 'phanmahong5.4_truong.jpg', 25),
(101, 'phanmahong6.1_truong.jpg', 26),
(102, 'phanmahong6.2_truong.jpg', 26),
(103, 'phanmahong6.3_truong.jpg', 26),
(104, 'phanmahong6.4_truong.jpg', 26),
(105, 'phanmahong7.1_truong.jpg', 27),
(106, 'phanmahong7.2_truong.jpg', 27),
(107, 'phanmahong7.3_truong.jpg', 27),
(108, 'phanmahong7.4_truong.jpg', 27),
(109, 'phanmahong8.1_truong.jpg', 28),
(110, 'phanmahong8.2_truong.jpg', 28),
(111, 'phanmahong8.3_truong.jpg', 28),
(112, 'phanmahong8.4_truong.jpg', 28),
(113, 'phanmahong9.1_truong.jpg', 29),
(114, 'phanmahong9.2_truong.jpg', 29),
(115, 'phanmahong9.3_truong.jpg', 29),
(116, 'phanmahong9.4_truong.jpg', 29),
(117, 'phanmahong10.1_truong.jpg', 30),
(118, 'phanmahong10.2_truong.jpg', 30),
(119, 'phanmahong10.3_truong.jpg', 30),
(120, 'phanmahong10.4_truong.jpg', 30),
(121, 'sonmoi1.1_truong.jpg', 31),
(122, 'sonmoi1.2_truong.jpg', 31),
(123, 'sonmoi1.3_truong.jpg', 31),
(124, 'sonmoi1.4_truong.jpg', 31),
(125, 'sonmoi2.1_truong.jpg', 32),
(126, 'sonmoi2.2_truong.jpg', 32),
(127, 'sonmoi2.3_truong.jpg', 32),
(128, 'sonmoi2.4_truong.jpg', 32),
(129, 'sonmoi3.1_truong.jpg', 33),
(130, 'sonmoi3.2_truong.jpg', 33),
(131, 'sonmoi3.3_truong.jpg', 33),
(132, 'sonmoi3.4_truong.jpg', 33),
(133, 'sonmoi4.1_truong.jpg', 34),
(134, 'sonmoi4.2_truong.jpg', 34),
(135, 'sonmoi4.3_truong.jpg', 34),
(136, 'sonmoi4.4_truong.jpg', 34),
(137, 'sonmoi5.1_truong.jpg', 35),
(138, 'sonmoi5.2_truong.jpg', 35),
(139, 'sonmoi6.1_truong.jpg', 36),
(140, 'sonmoi6.2_truong.jpg', 36),
(141, 'sonmoi6.3_truong.jpg', 36),
(142, 'sonmoi6.4_truong.jpg', 36),
(143, 'sonmoi7.1_truong.jpg', 37),
(144, 'sonmoi7.2_truong.jpg', 37),
(145, 'sonmoi7.3_truong.jpg', 37),
(146, 'sonmoi7.4_truong.jpg', 37),
(147, 'sonmoi8.1_truong.webp', 38),
(148, 'sonmoi8.2_truong.webp', 38),
(149, 'sonmoi8.3_truong.webp', 38),
(150, 'sonmoi8.4_truong.jpg', 38),
(151, 'sonmoi9.1_truong.jpg', 39),
(152, 'sonmoi9.2_truong.jpg', 39),
(153, 'sonmoi9.3_truong.jpg', 39),
(154, 'sonmoi9.4_truong.jpg', 39),
(155, 'sonmoi10.1_truong.jpg', 40),
(156, 'sonmoi10.2_truong.jpg', 40),
(157, 'sonmoi10.3_truong.jpg', 40),
(158, 'sonmoi10.4_truong.jpg', 40),
(159, 'suatam1.1_truong.jpg', 41),
(160, 'suatam1.2_truong.jpg', 41),
(161, 'suatam1.3_truong.jpg', 41),
(162, 'suatam1.4_truong.jpg', 41),
(163, 'suatam2.1_truong.jpg', 42),
(164, 'suatam2.2_truong.jpg', 42),
(165, 'suatam2.3_truong.jpg', 42),
(166, 'suatam2.4_truong.jpg', 42),
(167, 'suatam3.1_truong.jpg', 43),
(168, 'suatam3.2_truong.jpg', 43),
(169, 'suatam3.3_truong.jpg', 43),
(170, 'suatam3.4_truong.jpg', 43),
(171, 'suatam4.1_truong.jpg', 44),
(172, 'suatam4.2_truong.jpg', 44),
(173, 'suatam4.3_truong.jpg', 44),
(174, 'suatam4.4_truong.jpg', 44),
(175, 'suatam5.1_truong.jpg', 45),
(176, 'suatam5.2_truong.jpg', 45),
(177, 'suatam5.3_truong.jpg', 45),
(178, 'suatam5.4_truong.jpg', 45),
(179, 'suatam6.1_truong.jpg', 46),
(180, 'suatam6.2_truong.jpg', 46),
(181, 'suatam6.3_truong.jpg', 46),
(182, 'suatam6.4_truong.jpg', 46),
(183, 'suatam7.1_truong.jpg', 47),
(184, 'suatam7.2_truong.jpg', 47),
(185, 'suatam7.3_truong.jpg', 47),
(186, 'suatam7.4_truong.jpg', 47),
(187, 'suatam8.1_truong.jpg', 48),
(188, 'suatam8.2_truong.jpg', 48),
(189, 'suatam8.3_truong.jpg', 48),
(190, 'suatam8.4_truong.jpg', 48),
(191, 'suatam9.1_truong.jpg', 49),
(192, 'suatam9.2_truong.jpg', 49),
(193, 'suatam9.3_truong.jpg', 49),
(194, 'suatam9.4_truong.jpg', 49),
(195, 'suatam10.1_truong.jpg', 50),
(196, 'suatam10.2_truong.jpg', 50),
(201, 'xitkhoang1_1_kien.jpg', 51),
(202, 'xitkhoang1_2_kien.jpg', 51),
(203, 'xitkhoang1_3_kien.jpg', 51),
(204, 'xitkhoang1_4_kien.jpg', 51),
(205, 'xitkhoang2_1_kien.jpg', 52),
(206, 'xitkhoang2_2_kien.jpg', 52),
(207, 'xitkhoang2_3_kien.jpg', 52),
(208, 'xitkhoang2_4_kien.jpg', 52),
(209, 'xitkhoang3_1_kien.jpg', 53),
(210, 'xitkhoang3_2_kien.jpg', 53),
(211, 'xitkhoang3_3_kien.jpg', 53),
(212, 'xitkhoang3_4_kien.jpg', 53),
(213, 'xitkhoang4_1_kien.jpg', 54),
(214, 'xitkhoang4_2_kien.jpg', 54),
(215, 'xitkhoang4_3_kien.jpg', 54),
(216, 'xitkhoang4_4_kien.jpg', 54),
(217, 'xitkhoang5_1_kien.jpg', 55),
(218, 'xitkhoang5_2_kien.jpg', 55),
(219, 'xitkhoang5_3_kien.jpg', 55),
(220, 'xitkhoang5_4_kien.jpg', 55),
(221, 'xitkhoang6_1_kien.jpg', 56),
(222, 'xitkhoang6_2_kien.jpg', 56),
(223, 'xitkhoang6_3_kien.jpg', 56),
(224, 'xitkhoang6_4_kien.jpg', 56),
(225, 'xitkhoang7_1_kien.jpg', 57),
(226, 'xitkhoang7_2_kien.jpg', 57),
(227, 'xitkhoang7_3_kien.jpg', 57),
(228, 'xitkhoang7_4_kien.jpg', 57),
(229, 'xitkhoang8_1_kien.jpg', 58),
(230, 'xitkhoang8_2_kien.jpg', 58),
(231, 'xitkhoang8_3_kien.jpg', 58),
(232, 'xitkhoang8_4_kien.jpg', 58),
(233, 'xitkhoang9_1_kien.jpg', 59),
(234, 'xitkhoang9_2_kien.jpg', 59),
(235, 'xitkhoang9_3_kien.jpg', 59),
(236, 'xitkhoang9_4_kien.jpg', 59),
(237, 'xitkhoang10_1_kien.jpg', 60),
(238, 'xitkhoang10_2_kien.jpg', 60),
(239, 'xitkhoang10_3_kien.jpg', 60),
(240, 'xitkhoang10_4_kien.jpg', 60),
(241, 'nuochoa1_1_kien.jpg', 61),
(242, 'nuochoa1_2_kien.jpg', 61),
(243, 'nuochoa1_3_kien.jpg', 61),
(244, 'nuochoa1_4_kien.jpg', 61),
(245, 'nuochoa2_1_kien.jpg', 62),
(246, 'nuochoa2_2_kien.jpg', 62),
(247, 'nuochoa2_3_kien.jpg', 62),
(248, 'nuochoa2_4_kien.jpg', 62),
(249, 'nuochoa3_1_kien.jpg', 63),
(250, 'nuochoa3_2_kien.jpg', 63),
(251, 'nuochoa3_3_kien.jpg', 63),
(252, 'nuochoa3_4_kien.jpg', 53),
(253, 'nuochoa4_1_kien.jpg', 64),
(254, 'nuochoa4_2_kien.jpg', 64),
(255, 'nuochoa4_3_kien.jpg', 64),
(256, 'nuochoa4_4_kien.jpg', 64),
(257, 'nuochoa5_1_kien.jpg', 65),
(258, 'nuochoa5_2_kien.jpg', 65),
(259, 'nuochoa5_3_kien.jpg', 65),
(260, 'nuochoa5_4_kien.jpg', 65),
(261, 'nuochoa6_1_kien.jpg', 66),
(262, 'nuochoa6_2_kien.jpg', 66),
(263, 'nuochoa6_3_kien.jpg', 66),
(264, 'nuochoa6_4_kien.jpg', 66),
(265, 'nuochoa7_1_kien.jpg', 67),
(266, 'nuochoa7_2_kien.jpg', 67),
(267, 'nuochoa7_3_kien.jpg', 67),
(268, 'nuochoa7_4_kien.jpg', 67),
(269, 'nuochoa8_1_kien.jpg', 68),
(270, 'nuochoa8_2_kien.jpg', 68),
(271, 'nuochoa8_3_kien.jpg', 68),
(272, 'nuochoa8_4_kien.jpg', 68),
(273, 'nuochoa9_1_kien.jpg', 69),
(274, 'nuochoa9_2_kien.jpg', 69),
(275, 'nuochoa9_3_kien.jpg', 69),
(276, 'nuochoa9_4_kien.jpg', 69),
(277, 'nuochoa10_1_kien.jpg', 70),
(278, 'nuochoa10_2_kien.jpg', 70),
(279, 'nuochoa10_3_kien.jpg', 70),
(280, 'nuochoa10_4_kien.jpg', 70),
(281, 'daugoi1_1_kien.jpg', 71),
(282, 'daugoi1_2_kien.jpg', 71),
(283, 'daugoi1_3_kien.jpg', 71),
(284, 'daugoi1_4_kien.jpg', 71),
(285, 'daugoi2_1_kien.jpg', 72),
(286, 'daugoi2_2_kien.jpg', 72),
(287, 'daugoi2_3_kien.jpg', 72),
(288, 'daugoi2_4_kien.jpg', 72),
(289, 'daugoi3_1_kien.jpg', 73),
(290, 'daugoi3_2_kien.jpg', 73),
(291, 'daugoi3_3_kien.jpg', 73),
(292, 'daugoi3_4_kien.jpg', 73),
(293, 'daugoi4_1_kien.jpg', 74),
(294, 'daugoi4_2_kien.jpg', 74),
(295, 'daugoi4_3_kien.jpg', 74),
(296, 'daugoi4_4_kien.jpg', 74),
(297, 'daugoi5_1_kien.jpg', 75),
(298, 'daugoi5_2_kien.jpg', 75),
(299, 'daugoi5_3_kien.jpg', 75),
(300, 'daugoi5_4_kien.jpg', 75),
(301, 'daugoi6_1_kien.jpg', 76),
(302, 'daugoi6_2_kien.jpg', 76),
(303, 'daugoi6_3_kien.jpg', 76),
(304, 'daugoi6_4_kien.jpg', 76),
(305, 'daugoi7_1_kien.jpg', 77),
(306, 'daugoi7_2_kien.jpg', 77),
(307, 'daugoi7_3_kien.jpg', 77),
(308, 'daugoi7_4_kien.jpg', 77),
(309, 'daugoi8_1_kien.jpg', 78),
(310, 'daugoi8_2_kien.jpg', 78),
(311, 'daugoi8_3_kien.jpg', 78),
(312, 'daugoi8_4_kien.jpg', 78),
(313, 'daugoi9_1_kien.jpg', 79),
(314, 'daugoi9_2_kien.jpg', 79),
(315, 'daugoi9_3_kien.jpg', 79),
(316, 'daugoi9_4_kien.jpg', 79),
(317, 'daugoi10_1_kien.jpg', 80),
(318, 'daugoi10_2_kien.jpg', 80),
(319, 'daugoi10_3_kien.jpg', 80),
(320, 'daugoi10_4_kien.jpg', 80),
(321, 'chongnang1_1_kien.jpg', 81),
(322, 'chongnang1_2_kien.jpg', 81),
(323, 'chongnang1_3_kien.jpg', 81),
(324, 'chongnang1_4_kien.jpg', 81),
(325, 'chongnang2_1_kien.jpg', 82),
(326, 'chongnang2_2_kien.jpg', 82),
(327, 'chongnang2_3_kien.jpg', 82),
(328, 'chongnang2_4_kien.jpg', 82),
(329, 'chongnang3_1_kien.jpg', 83),
(330, 'chongnang3_2_kien.jpg', 83),
(331, 'chongnang3_3_kien.jpg', 83),
(332, 'chongnang3_4_kien.jpg', 83),
(333, 'chongnang4_1_kien.jpg', 84),
(334, 'chongnang4_2_kien.jpg', 84),
(335, 'chongnang4_3_kien.jpg', 84),
(336, 'chongnang4_4_kien.jpg', 84),
(337, 'chongnang5_1_kien.jpg', 85),
(338, 'chongnang5_2_kien.jpg', 85),
(339, 'chongnang5_3_kien.jpg', 85),
(340, 'chongnang5_4_kien.jpg', 85),
(341, 'chongnang6_1_kien.jpg', 86),
(342, 'chongnang6_2_kien.jpg', 86),
(343, 'chongnang6_3_kien.jpg', 86),
(344, 'chongnang6_4_kien.jpg', 86),
(345, 'chongnang7_1_kien.jpg', 87),
(346, 'chongnang7_2_kien.jpg', 87),
(347, 'chongnang7_3_kien.jpg', 87),
(348, 'chongnang7_4_kien.jpg', 87),
(349, 'chongnang8_1_kien.jpg', 88),
(350, 'chongnang8_2_kien.jpg', 88),
(351, 'chongnang8_3_kien.jpg', 88),
(352, 'chongnang8_4_kien.jpg', 88),
(353, 'chongnang9_1_kien.jpg', 89),
(354, 'chongnang9_2_kien.jpg', 89),
(355, 'chongnang9_3_kien.jpg', 89),
(356, 'chongnang9_4_kien.jpg', 89),
(357, 'chongnang10_1_kien.jpg', 90),
(358, 'chongnang10_2_kien.jpg', 90),
(359, 'chongnang10_3_kien.jpg', 90),
(360, 'chongnang10_4_kien.jpg', 90),
(361, 'taytrang1_1_kien.jpg', 91),
(362, 'taytrang1_2_kien.jpg', 91),
(363, 'taytrang1_3_kien.jpg', 91),
(364, 'taytrang1_4_kien.jpg', 91),
(365, 'taytrang2_1_kien.jpg', 92),
(366, 'taytrang2_2_kien.jpg', 92),
(367, 'taytrang2_3_kien.jpg', 92),
(368, 'taytrang2_4_kien.jpg', 92),
(369, 'taytrang3_1_kien.jpg', 93),
(370, 'taytrang3_2_kien.jpg', 93),
(371, 'taytrang3_3_kien.jpg', 93),
(372, 'taytrang3_4_kien.jpg', 93),
(373, 'taytrang4_1_kien.jpg', 94),
(374, 'taytrang4_2_kien.jpg', 94),
(375, 'taytrang4_3_kien.jpg', 94),
(376, 'taytrang4_4_kien.jpg', 94),
(377, 'taytrang5_1_kien.jpg', 95),
(378, 'taytrang5_2_kien.jpg', 95),
(379, 'taytrang5_3_kien.jpg', 95),
(380, 'taytrang5_4_kien.jpg', 95),
(381, 'taytrang6_1_kien.jpg', 96),
(382, 'taytrang6_2_kien.jpg', 96),
(383, 'taytrang6_3_kien.jpg', 96),
(384, 'taytrang6_4_kien.jpg', 96),
(385, 'taytrang7_1_kien.jpg', 97),
(386, 'taytrang7_2_kien.jpg', 97),
(387, 'taytrang7_3_kien.jpg', 97),
(388, 'taytrang7_4_kien.jpg', 97),
(389, 'taytrang8_1_kien.jpg', 98),
(390, 'taytrang8_2_kien.jpg', 98),
(391, 'taytrang8_3_kien.jpg', 98),
(392, 'taytrang8_4_kien.jpg', 98),
(393, 'taytrang9_1_kien.jpg', 99),
(394, 'taytrang9_2_kien.jpg', 99),
(395, 'taytrang9_3_kien.jpg', 99),
(396, 'taytrang9_4_kien.jpg', 99),
(397, 'taytrang10_1_kien.jpg', 100),
(398, 'taytrang10_2_kien.jpg', 100),
(399, 'taytrang10_3_kien.jpg', 100),
(400, 'taytrang10_4_kien.jpg', 100),
(401, 'kemduong1_1_kien.jpg', 101),
(402, 'kemduong1_2_kien.jpg', 101),
(403, 'kemduong1_3_kien.jpg', 101),
(404, 'kemduong1_4_kien.jpg', 101),
(405, 'kemduong2_1_kien.jpg', 102),
(406, 'kemduong2_2_kien.jpg', 102),
(407, 'kemduong2_3_kien.jpg', 102),
(408, 'kemduong2_4_kien.jpg', 102),
(409, 'kemduong3_1_kien.jpg', 103),
(410, 'kemduong3_2_kien.jpg', 103),
(411, 'kemduong3_3_kien.jpg', 103),
(412, 'kemduong3_4_kien.jpg', 103),
(413, 'kemduong4_1_kien.jpg', 104),
(414, 'kemduong4_2_kien.jpg', 104),
(415, 'kemduong4_3_kien.jpg', 104),
(416, 'kemduong4_4_kien.jpg', 104),
(417, 'kemduong5_1_kien.jpg', 105),
(418, 'kemduong5_2_kien.jpg', 105),
(419, 'kemduong5_3_kien.jpg', 105),
(420, 'kemduong5_4_kien.jpg', 105),
(421, 'kemduong6_1_kien.jpg', 106),
(422, 'kemduong6_2_kien.jpg', 106),
(423, 'kemduong6_3_kien.jpg', 106),
(424, 'kemduong6_4_kien.jpg', 106),
(425, 'kemduong7_1_kien.jpg', 107),
(426, 'kemduong7_2_kien.jpg', 107),
(427, 'kemduong7_3_kien.jpg', 107),
(428, 'kemduong7_4_kien.jpg', 107),
(429, 'kemduong8_1_kien.jpg', 108),
(430, 'kemduong8_2_kien.jpg', 108),
(431, 'kemduong8_3_kien.jpg', 108),
(432, 'kemduong8_4_kien.jpg', 108),
(433, 'kemduong9_1_kien.jpg', 109),
(434, 'kemduong9_2_kien.jpg', 109),
(435, 'kemduong9_3_kien.jpg', 109),
(436, 'kemduong9_4_kien.jpg', 109),
(437, 'kemduong10_1_kien.jpg', 110),
(438, 'kemduong10_2_kien.jpg', 110),
(439, 'kemduong10_3_kien.jpg', 110),
(440, 'kemduong10_4_kien.jpg', 110),
(441, 'matna1.1_an.webp', 110),
(442, 'matna1.2_an.webp', 110),
(443, 'matna1.3_an.webp', 110),
(444, 'matna1.4_an.webp', 110),
(446, 'matna2.1_an.webp', 111),
(447, 'matna2.2_an.webp', 111),
(448, 'matna2.3_an.webp', 111),
(449, 'matna2.4_an.webp', 111),
(450, 'matna3.1_an.webp', 112),
(451, 'matna3.2_an.webp', 112),
(452, 'matna3.3_an.webp', 112),
(453, 'matna3.4_an.webp', 112),
(454, 'matna4.1_an.webp', 113),
(455, 'matna4.2_an.webp', 113),
(456, 'matna4.3_an.webp', 113),
(457, 'matna4.4_an.webp', 113),
(458, 'matna5.1_an.webp', 114),
(459, 'matna5.2_an.webp', 114),
(460, 'matna5.3_an.webp', 114),
(461, 'matna5.4_an.webp', 114),
(462, 'matna6.1_an.jpg', 115),
(463, 'matna6.2_an.jpg', 115),
(464, 'matna6.3_an.jpg', 115),
(465, 'matna6.4_an.jpg', 115),
(466, 'matna7.1_an.webp', 116),
(467, 'matna7.2_an.webp', 116),
(468, 'matna7.3_an.webp', 116),
(469, 'matna7.4_an.webp', 116),
(470, 'matna8.1_an.webp', 117),
(471, 'matna8.2_an.webp', 117),
(472, 'matna8.3_an.webp', 117),
(473, 'matna8.4_an.webp', 117),
(474, 'matna9.1_an.webp', 118),
(475, 'matna9.2_an.webp', 119),
(476, 'matna9.3_an.webp', 119),
(477, 'matna9.4_an.webp', 119),
(478, 'matna10.1_an.webp', 120),
(479, 'matna10.2_an.webp', 120),
(480, 'matna10.3_an.webp', 120),
(481, 'matna10.4_an.wepb', 120),
(482, 'serum1.1_an.webp', 121),
(483, 'serum1.2_an.webp', 121),
(484, 'serum1.3_an.webp', 121),
(485, 'serum1.4_an.webp', 121),
(486, 'serum2.1_an.webp', 122),
(487, 'serum2.2_an.webp', 122),
(488, 'serum2.3_an.webp', 122),
(489, 'serum2.4_an.jpg', 122),
(490, 'serum3.1_an.webp', 123),
(491, 'serum3.2_an.webp', 123),
(492, 'serum3.3_an.webp', 123),
(493, 'serum3.4_an.webp', 123),
(494, 'serum4.1_an.webp', 124),
(495, 'serum4.2_an.webp', 124),
(496, 'serum4.3_an.webp', 124),
(497, 'serum4.4_an.webp', 124),
(498, 'serum5.1_an.webp', 125),
(499, 'serum5.2_an.webp', 125),
(500, 'serum5.3_an.webp', 125),
(501, 'serum5.4_an.webp', 125),
(502, 'serum6.1_an.webp', 126),
(503, 'serum6.2_an.webp', 126),
(504, 'serum6.3_an.webp', 126),
(505, 'serum6.4_an.webp', 126),
(506, 'serum7.1_an.webp', 127),
(507, 'serum7.2_an.wepb', 127),
(508, 'serum7.3_an.wepb', 127),
(509, 'serum7.4_an.wepb', 127),
(510, 'serum8.1_an.wepb', 128),
(511, 'serum8.2_an.wepb', 128),
(512, 'serum8.3_an.wepb', 128),
(513, 'serum8.4_an.wepb', 128),
(514, 'serum9.1_an.webp', 129),
(515, 'serum9.2_an.webp', 129),
(516, 'serum9.3_an.webp', 129),
(517, 'serum9.4_an.webp', 129),
(518, 'serum10.1_an.webp', 130),
(519, 'serum10.2_an.webp', 130),
(520, 'serum10.3_an.webp', 130),
(521, 'serum10.4_an.webp', 130),
(522, 'lankhumui1.1_an.webp', 131),
(523, 'lankhumui1.2_an.webp', 131),
(524, 'lankhumui1.3_an.webp', 131),
(525, 'lankhumui1.4_an.webp', 131),
(526, 'lankhumui2.1_an.webp', 132),
(527, 'lankhumui2.2_an.webp', 132),
(528, 'lankhumui2.3_an.webp', 132),
(529, 'lankhumui2.4_an.webp', 132),
(530, 'lankhumui3.1_an.webp', 133),
(531, 'lankhumui3.2_an.webp', 133),
(532, 'lankhumui3.3_an.webp', 133),
(533, 'lankhumui3.4_an.webp', 133),
(534, 'lankhumui4.1_an.webp', 134),
(535, 'lankhumui4.2_an.webp', 134),
(536, 'lankhumui4.3_an.webp', 134),
(537, 'lankhumui4.4_an.webp', 134),
(538, 'lankhumui5.1_an.webp', 135),
(539, 'lankhumui5.2_an.webp', 135),
(540, 'lankhumui5.3_an.webp', 135),
(541, 'lankhumui5.4_an.webp', 135),
(542, 'lankhumui6.1_an.webp', 136),
(543, 'lankhumui6.2_an.webp', 136),
(544, 'lankhumui6.3_an.webp', 136),
(545, 'lankhumui6.4_an.webp', 136),
(546, 'lankhumui7.1_an.webp', 137),
(547, 'lankhumui7.2_an.webp', 137),
(548, 'lankhumui7.3_an.webp', 137),
(549, 'lankhumui7.4_an.webp', 137),
(550, 'lankhumui8.1_an.webp', 138),
(551, 'lankhumui8.2_an.webp', 138),
(552, 'lankhumui8.3_an.webp', 138),
(553, 'lankhumui8.4_an.webp', 138),
(554, 'lankhumui9.1_an.webp', 139),
(555, 'lankhumui9.2_an.webp', 139),
(556, 'lankhumui9.3_an.webp', 139),
(557, 'lankhumui9.4_an.webp', 139),
(558, 'lankhumui10.1_an.webp', 140),
(559, 'lankhumui10.2_an.webp', 140),
(560, 'lankhumui10.3_an.webp', 140),
(561, 'lankhumui10.4_an.webp', 140),
(562, 'taytebao1.1_an.webp', 141),
(563, 'taytebao1.2_an.webp', 141),
(564, 'taytebao1.3_an.webp', 141),
(565, 'taytebao1.4_an.webp', 141),
(566, 'taytebao2.1_an.webp', 142),
(567, 'taytebao2.2_an.webp', 142),
(568, 'taytebao2.3_an.webp', 142),
(569, 'taytebao2.4_an.webp', 142),
(570, 'taytebao3.1_an.webp', 143),
(571, 'taytebao3.2_an.webp', 143),
(572, 'taytebao3.3_an.webp', 143),
(573, 'taytebao3.4_an.webp', 143),
(574, 'taytebao4.1_an.webp', 144),
(575, 'taytebao4.2_an.webp', 144),
(576, 'taytebao4.3_an.webp', 144),
(577, 'taytebao4.4_an.webp', 144),
(578, 'taytebao5.1_an.webp', 145),
(579, 'taytebao5.2_an.webp', 145),
(580, 'taytebao5.3_an.webp', 145),
(581, 'taytebao5.4_an.webp', 145),
(582, 'taytebao6.1_an.webp', 146),
(583, 'taytebao6.2_an.webp', 146),
(584, 'taytebao6.3_an.webp', 146),
(585, 'taytebao6.4_an.webp', 146),
(586, 'taytebao7.1_an.webp', 147),
(587, 'taytebao7.2_an.webp', 147),
(588, 'taytebao7.3_an.webp', 147),
(589, 'taytebao7.4_an.webp', 147),
(590, 'taytebao8.1_an.webp', 148),
(591, 'taytebao8.2_an.webp', 148),
(592, 'taytebao8.3_an.webp', 148),
(593, 'taytebao8.4_an.webp', 148),
(594, 'taytebao9.1_an.webp', 149),
(595, 'taytebao9.2_an.webp', 149),
(596, 'taytebao9.3_an.webp', 149),
(597, 'taytebao9.4_an.webp', 149),
(598, 'taytebao10.1_an.webp', 150),
(599, 'taytebao10.2_an.webp', 150),
(600, 'taytebao10.3_an.webp', 150),
(601, 'taytebao10.4_an.webp', 150),
(602, 'phukien1.1_an.webp', 151),
(603, 'phukien1.2_an.webp', 151),
(604, 'phukien1.3_an.webp', 151),
(605, 'phukien1.4_an.webp', 151),
(606, 'phukien2.1_an.webp', 152),
(607, 'phukien2.2_an.webp', 152),
(608, 'phukien2.3_an.webp', 152),
(609, 'phukien2.4_an.webp', 152),
(610, 'phukien3.1_an.webp', 153),
(611, 'phukien3.2_an.webp', 153),
(612, 'phukien3.3_an.webp', 153),
(613, 'phukien3.4_an.webp', 153),
(614, 'phukien4.1_an.webp', 154),
(615, 'phukien4.2_an.webp', 154),
(616, 'phukien4.3_an.webp', 154),
(617, 'phukien4.4_an.webp', 154),
(618, 'phukien5.1_an.webp', 155),
(619, 'phukien5.2_an.webp', 155),
(620, 'phukien5.3_an.webp', 155),
(621, 'phukien5.4_an.webp', 155),
(622, 'phukien6.1_an.webp', 156),
(623, 'phukien6.2_an.webp', 156),
(624, 'phukien6.3_an.webp', 156),
(625, 'phukien6.4_an.webp', 156),
(626, 'phukien7.1_an.webp', 157),
(627, 'phukien7.2_an.webp', 157),
(628, 'phukien7.3_an.webp', 157),
(629, 'phukien7.4_an.webp', 157),
(630, 'phukien8.1_an.webp', 158),
(631, 'phukien8.2_an.webp', 158),
(632, 'phukien8.3_an.webp', 158),
(633, 'phukien8.4_an.webp', 158),
(634, 'phukien9.1_an.webp', 159),
(635, 'phukien9.2_an.webp', 159),
(636, 'phukien9.3_an.webp', 159),
(637, 'phukien9.4_an.webp', 159),
(638, 'phukien10.1_an.webp', 160),
(639, 'phukien10.2_an.webp', 160),
(640, 'phukien10.3_an.webp', 160),
(641, 'phukien10.4_an.webp', 160);

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `makm` int(11) NOT NULL,
  `ten_km` varchar(50) NOT NULL,
  `giam_gia` float NOT NULL,
  `ngay_bat_dau` datetime NOT NULL,
  `ngay_ket_thuc` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaihang`
--

CREATE TABLE `loaihang` (
  `maloai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL,
  `hinh_anh` varchar(250) NOT NULL,
  `noi_bat` int(11) NOT NULL,
  `an_hien` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaihang`
--

INSERT INTO `loaihang` (`maloai`, `ten_loai`, `hinh_anh`, `noi_bat`, `an_hien`) VALUES
(1, 'Sữa rửa mặt', 'suaruamat.webp', 1, 1),
(2, 'Sữa tắm', 'suaatam.jpg', 1, 1),
(3, 'Xịt khoáng', 'xitkhoang.webp', 1, 1),
(4, 'Nước hoa', 'nuochoa.webp', 1, 1),
(5, 'Dưỡng thể', 'duongthe.webp', 1, 1),
(6, 'Dầu gội', 'daugoi.webp', 1, 1),
(7, 'Chống nắng', 'chongnag.webp', 1, 1),
(8, 'Tẩy trang', 'taytrang.jpg', 1, 1),
(9, 'Son môi', 'sonkem.webp', 1, 1),
(10, 'Kem dưỡng', 'kemduong.webp', 1, 1),
(11, 'Mặt nạ', 'matna.webp', 1, 1),
(12, 'Serum', 'cate.webp', 1, 1),
(13, 'Phấn má', 'phan-ma.jpg', 0, 1),
(14, 'Lăn khử mùi', 'lan-khu-mui.jpg', 0, 1),
(15, 'Tẩy tế bào chết', 'tay-te-bao-chet.png', 0, 1),
(16, 'Phụ kiện làm đẹp', 'phukien.webp', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `maloai` int(11) NOT NULL,
  `ten_sp` varchar(250) NOT NULL,
  `gia_tien` int(11) NOT NULL,
  `gia_goc` float NOT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `mo_ta` varchar(2000) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `ngay_nhap` datetime NOT NULL DEFAULT current_timestamp(),
  `an_hien` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `maloai`, `ten_sp`, `gia_tien`, `gia_goc`, `so_luot_xem`, `mo_ta`, `so_luong`, `ngay_nhap`, `an_hien`) VALUES
(1, 1, 'Gel Rửa Mặt & Tắm La Roche-Posay Làm Sạch & Giảm Mụn 400ml Effaclar Micro-Peeling Purifying Gel', 492000, 600000, 0, 'Gel Rửa Mặt & Tắm La Roche-Posay Effaclar Micro-Peeling Purifying Gel là sản phẩm rửa mặt và sữa tắm 2 trong 1 mới nhất vừa được ra mắt từ thương hiệu dược mỹ phẩm La Roche-Posay, thuộc dòng Effaclar chăm sóc da dầu mụn, với tác động kép - hiệu quả 2 trong 1 dùng được cho mặt và toàn thân, không chỉ giúp làm sạch dịu nhẹ mà còn hỗ trợ giảm mụn, vết thâm và ngăn ngừa mụn tái phát.Gel Rửa Mặt La Roche-Posay Hỗ Trợ Giảm Mụn Cho Mặt & Toàn Thân Effaclar Micro-Peeling Purifying Gel.Mang lại làn da mềm mại, sạch sẽ và tươi mát sau khi sử dụng, đồng thời cung cấp sự thoải mái tối đa cho làn da dễ bị mụn trứng cá, ngay cả trên vùng da cơ thể.', 100, '2023-11-17 15:32:22', 1),
(2, 1, 'Gel Rửa Mặt La Roche-Posay Dành Cho Da Dầu, Nhạy Cảm 400ml Effaclar Purifying Foaming Gel For Oily Sensitive Skin', 458000, 595000, 1, 'Gel Rửa Mặt La Roche-Posay Effaclar Purifying Foaming Gel For Oily Sensitive Skin là dòng sản phẩm sữa rửa mặt chuyên biệt dành cho làn da dầu, mụn, nhạy cảm đến từ thương hiệu dược mỹ phẩm La Roche-Posay nổi tiếng của Pháp. Với kết cấu dạng gel tạo bọt nhẹ nhàng giúp loại bỏ bụi bẩn, tạp chất và bã nhờn dư thừa trên da hiệu quả, mang đến làn da sạch mịn, thoáng nhẹ và tươi mát. Công thức sản phẩm an toàn, lành tính, giảm thiểu tình trạng kích ứng đối với làn da nhạy cảm.\r\n\r\n ', 100, '2023-11-18 13:24:46', 1),
(3, 1, 'Gel Rửa Mặt Bioderma Dành Cho Da Dầu & Hỗn Hợp 500ml Sébium Gel Moussant', 369000, 525000, 0, 'Gel Rửa Mặt Bioderma Sébium Gel Moussant là sữa rửa mặt thanh lọc dịu nhẹ được thương hiệu dược mỹ phẩm Bioderma thiết kế chuyên biệt dành cho làn da dầu & hỗn hợp, giúp loại bỏ các tạp chất trên da, giải phóng bít tắc và làm thông thoáng lỗ chân lông, đồng thời kiểm soát dầu thừa, ngăn ngừa mụn hiệu quả mà vẫn duy trì pH tự nhiên trên da. Làm sạch da mặt là một bước cần thiết trong bất kỳ quy trình chăm sóc da nào. Đối với 60% phụ nữ, khuôn mặt là bộ phận quan trọng nhất trên cơ thể, vì vậy chúng ta càng không được lơ là bước này. Việc làm sạch da giúp loại bỏ các tạp chất đã tích tụ (bã nhờn, mồ hôi, tế bào chết, vi khuẩn, mỹ phẩm, màng chống nắng, lớp trang điểm, bụi bẩn và các chất ô nhiễm dạng hạt khác), để giúp da sẵn sàng cho các bước chăm sóc tiếp theo.', 100, '2023-11-18 13:30:42', 1),
(4, 1, 'Gel Rửa Mặt Bioderma Tạo Bọt Cho Da Nhạy Cảm 200ml Sensibio Gel Moussant', 311000, 445000, 0, 'Gel Rửa Mặt Bioderma Sébium Gel Moussant là sữa rửa mặt thanh lọc dịu nhẹ được thương hiệu dược mỹ phẩm Bioderma thiết kế chuyên biệt dành cho làn da dầu & hỗn hợp, giúp loại bỏ các tạp chất trên da, giải phóng bít tắc và làm thông thoáng lỗ chân lông, đồng thời kiểm soát dầu thừa, ngăn ngừa mụn hiệu quả mà vẫn duy trì pH tự nhiên trên da. Làm sạch da mặt là một bước cần thiết trong bất kỳ quy trình chăm sóc da nào. Đối với 60% phụ nữ, khuôn mặt là bộ phận quan trọng nhất trên cơ thể, vì vậy chúng ta càng không được lơ là bước này. Việc làm sạch da giúp loại bỏ các tạp chất đã tích tụ (bã nhờn, mồ hôi, tế bào chết, vi khuẩn, mỹ phẩm, màng chống nắng, lớp trang điểm, bụi bẩn và các chất ô nhiễm dạng hạt khác), để giúp da sẵn sàng cho các bước chăm sóc tiếp theo.', 100, '2023-11-18 13:30:42', 1),
(5, 1, 'Sữa Rửa Mặt Cetaphil Dịu Lành Cho Da Nhạy Cảm 500ml (Mới) Gentle Skin Cleanser (New)', 336000, 419000, 0, 'Sữa Rửa Mặt Cetaphil Gentle Skin Cleanser phiên bản mới ra mắt năm 2022 từ thương hiệu Cetaphil với công thức khoa học mới cho làn da nhạy cảm, giúp làm sạch da, loại bỏ bụi bẩn, phù hợp cho mọi loại da, không làm khô da và duy trì hàng rào bảo vệ da suốt ngày dài. Được chứng minh lâm sàng có khả năng làm sạch sâu, loại bỏ hoàn toàn bụi bẩn, và tạp chất trên da một cách dịu nhẹ nhưng vẫn duy trì độ ẩm tự nhiên để bảo vệ da khỏi tình trạng khô ráp, Sữa Rửa Mặt Cetaphil Mới với công thức lành tính không gây kích ứng sẽ an toàn cho mọi loại da, kể cả da nhạy cảm. Tăng cường lipid và protein có trong hàng rào bảo vệ tự nhiên của da - những thành phần quan trọng trong việc duy trì hàng rào bảo vệ da luôn khỏe mạnh.', 100, '2023-11-18 13:37:52', 1),
(6, 1, 'Sữa Rửa Mặt CeraVe Sạch Sâu Cho Da Thường Đến Da Dầu 473ml Foaming Cleanser', 352000, 440000, 0, 'Sữa Rửa Mặt Cerave Sạch Sâu là sản phẩm sữa rửa mặt đến từ thương hiệu mỹ phẩm Cerave của Mỹ, với sự kết hợp của ba Ceramides thiết yếu, Hyaluronic Acid sản phẩm giúp làm sạch và giữ ẩm cho làn da mà không ảnh hưởng đến hàng rào bảo vệ da mặt và cơ thể. Sữa Rửa Mặt Cerave Foaming Cleanser kết cấu dạng gel tạo bọt rất lý tưởng để loại bỏ dầu thừa, bụi bẩn và lớp trang điểm với công thức nhẹ nhàng, không phá vỡ hàng rào bảo vệ tự nhiên của da và chứa các thành phần giúp duy trì độ ẩm cân bằng da. Cerave Foaming Cleanser chứa Ceramides, Axit Hyaluronic và Niacinamide giúp duy trì hàng rào bảo vệ da, khóa ẩm và làm dịu làn da của bạn.', 100, '2023-11-18 13:37:52', 1),
(7, 1, 'Gel Rửa Mặt SVR Không Chứa Xà Phòng Cho Da Dầu 400ml Sebiaclear Gel Moussant', 421000, 540000, 0, 'Gel Rửa Mặt SVR Sebiaclear Gel Moussant là sản phẩm sữa rửa mặt dành cho làn da dầu mụn đến từ thương hiệu dược mỹ phẩm SVR của Pháp, với công thức không chứa xà phòng giúp làm sạch, nhẹ nhàng làm thông thoáng làn da. Khả năng tạo bọt mịn giúp loại trừ các chất bẩn và lượng bã nhờn dư thừa mà không làm khô da. Có thể rửa sạch dễ dàng, mang lại một làn da sạch, tươi mát và khô thoáng.', 100, '2023-11-18 13:42:54', 1),
(8, 1, 'Sữa Rửa Mặt Eucerin Dịu Nhẹ Cho Da Nhạy Cảm 400ml pH5 Facial Cleanser Sensitive Skin', 211000, 279000, 0, 'Sữa Rửa Mặt Eucerin PH5 Facial Cleanser Sensitive Skin là dòng sữa rửa mặt hoàn toàn mới được Eucerin thiết kế dành riêng cho làn da nhạy cảm, với độ pH5 cân bằng cùng công thức 0% thành phần gây kích ứng da, giúp làm sạch sâu và cải thiện da nhạy cảm. Đối với da nhạy cảm, một bảng thành phần đẹp và an toàn luôn là yếu tố tiên quyết khi nàng chọn sản phẩm sữa rửa mặt. Nếu bạn vẫn đang loay hoay tìm cho mình một \"trợ thủ làm sạch\" vừa dịu nhẹ vừa không gây kích ứng, dòng sữa rửa mặt pH5 Facial Cleanser từ thương hiệu dược mỹ phẩm Eucerin sẽ là giải pháp lý tưởng dành cho bạn.', 100, '2023-11-18 13:42:54', 1),
(9, 1, 'Sữa Rửa Mặt Kimsohyung Chiết Xuất Thảo Dược 145g Pink Brightening Cleanser', 329000, 420000, 0, 'Sữa Rửa Mặt Kimsohyung Chiết Xuất Thảo Dược Pink Brightening Cleanser là sản phẩm sữa rửa mặt đến từ thương hiệu KimsohyungFul được nhiều khách hàng tin dùng tại Hàn Quốc. Với công dụng là sạch làn da một cách hoàn hảo, bên cạnh đó giúp cải thiện làn da mịn màng, tươi tắn. Được làm từ những nguyên liệu có sẵn trong tự nhiên, 100% từ các loại thảo dược như: đậu đen, đậu xanh, đậu đỏ, trà xanh, lúa mạch, lựu, lá thông, rễ sen, cây ngưu bàng, đậu nành, ngũ vị tử, hạt quả mơ, bí đỏ, ý dĩ, cám gạo, thanh yên,..', 100, '2023-11-18 13:48:32', 1),
(10, 1, 'Sữa Rửa Mặt Rau Củ Byvibes Wonder Bath Dưỡng Ẩm Da 300ml Super Vegitoks Cleanser Green', 189000, 350000, 0, 'Sữa Rửa Mặt Rau Củ Byvibes Wonder Bath Super Vegitoks Cleanser 300ml là sản phẩm sữa rửa mặt đến từ thương hiệu mỹ phẩm Byvibes Wonder Bath của Hàn Quốc, kết hợp cả 3 chức năng chỉ trong 1 sản phẩm duy nhất: tẩy trang – làm sạch – thải độc cho da. Điều đặc biệt nữa là dòng sản phẩm này được chiết xuất từ 100% các loại rau củ quả thiên nhiên, an toàn và lành tính cho cả những làn da nhạy cảm, giúp nuôi dưỡng cho da luôn khỏe mạnh và tươi trẻ, tràn đầy sức sống. Với Super Vegitoks Cleanser, các nàng “sâu lười” sẽ không còn phải lích kích đủ thứ bước skincare mà vẫn có được làn da sạch mịn mướt, thông thoáng, không lo mụn ẩn.', 100, '2023-11-18 13:48:32', 1),
(11, 5, 'Kem Dưỡng Thể Paula\'s Choice Giảm Viêm Lỗ Chân Lông 60ml Weightless Body Treatment 2% BHA (Trial size)', 299000, 349000, 0, 'Paula\'s Choice Weightless Body Treatment With 2% BHA là sản phẩm kem dưỡng thể tẩy tế bào chết toàn thân đến từ thương hiệu dược mỹ phẩm Paula\'s Choice. Công thức chứa nồng độ 2% Salicylic Acid (BHA) có khả năng cải thiện các vấn đề về mụn, viêm lỗ chân lông, mẩn đỏ các vùng da trên cơ thể, mang đến cho bạn làn da sạch thoáng mịn màng hơn. Bên cạnh đó, kem dưỡng thể Paula\'s Choice Weightless Body Treatment With 2% BHA hoàn toàn không chứa các chất gây bào mòn da, nhẹ nhàng làm sạch đồng thời duy trì độ mềm mịn cần thiết. Sản phẩm có độ pH lý tưởng từ 3.5 – 3.9, phù hợp với mọi loại da, kể cả da nhạy cảm.', 100, '2023-11-18 13:57:40', 1),
(12, 5, 'Serum Dưỡng Thể Vaseline Chống Nắng Sáng Da 300ml (Mới) Healthy Bright Daily Protection & Brightening Serum SPF 50+ PA++++', 135000, 203000, 0, 'Serum Chống Nắng Cơ Thể Vaseline Healthy Bright Sun + Pollution Protection SPF 50+ PA++++ là dòng sản phẩm dưỡng thể kết hợp chống nắng toàn thân đến từ thương hiệu mỹ phẩm Vaseline. Phiên bản nâng cấp mới nhất cho khả năng bảo vệ da trước 5 tác nhân có hại (UVA / UVB / ô nhiễm / ánh sáng xanh / môi trường điều hoà) gấp 50 lần, cùng hỗn hợp Vitamin gồm Niacinamide, Vitamin C&E giúp dưỡng da sáng rạng rỡ hơn gấp 2 lần. Với Serum Chống Nắng Vaseline Healthy Bright, làn da cơ thể bạn sẽ luôn được bảo vệ và nuôi dưỡng, ngăn ngừa hình thành các dấu hiệu lão hoá cũng như cải thiện tình trạng da thâm sạm, xỉn màu hiệu quả.', 100, '2023-11-18 13:57:40', 1),
(13, 5, 'Sữa Dưỡng Thể Eucerin Làm Sáng Da SPF 7 250ml Spotless Brightening Body Lotion SPF 7', 313000, 370000, 0, 'Lotion Dưỡng Sáng Da Toàn Thân Eucerin Ultra White+ Spotless Body Lotion SPF 7 là phiên bản mới của Eucerin White Therapy Whitening Body Lotion SPF 7. Sản phẩm thuộc dòng chăm sóc và dưỡng sáng da Eucerin UltraWhite+, có công thức dịu nhẹ phù hợp cho cả những làn da nhạy cảm nhất, giúp cung cấp độ ẩm và làm sáng da từ sâu bên trong. Kết hợp với chỉ số chống nắng SPF 7 giúp bảo vệ làn da trước những tổn thương do ánh nắng mặt trời gây ra. Sử dụng lâu dài sẽ mang lại cho bạn một làn da mịn màng, tươi sáng và đều màu hơn, ngăn ngừa lão hóa da cơ thể. ', 100, '2023-11-18 14:00:16', 1),
(14, 5, 'Sữa Dưỡng Thể Nivea Làm Sáng & Săn Chắc Da Ban Đêm 350ml Extra White Night Nourish Body Lotion', 91000, 139000, 0, 'Sữa Dưỡng Thể Nivea Extra White Body Lotion là dòng sản phẩm dưỡng thể làm sáng da toàn thân nổi tiếng của thương hiệu NIVEA, với công nghệ Deep White Essence chứa các hạt phân tử dưỡng sáng siêu nhỏ cùng hàm lượng Vitamin C cô đặc gấp 40 lần, nuôi dưỡng sâu các tế bào da, mang lại cho bạn làn da sáng mịn rạng rỡ. Sữa Dưỡng Thể Nivea Sáng Da Tức Thì White Instant Glow Body Lotion SPF30 PA++ chứa thành phần Collagen cao cấp giúp nuôi dưỡng và hỗ trợ phục hồi làn da hư tổn, sạm đen do ánh nắng. Công thức tiên tiến Deep White Essence với các hạt phân tử siêu nhỏ thẩm thấu nhanh cùng hàm lượng 40X Vitamin C, đem lại hiệu quả dưỡng sáng da nhanh chóng nhưng vẫn tuyệt đối an toàn cho da. Đặc biệt, sản phẩm được bổ sung chỉ số chống nắng cao SPF30 giúp bảo vệ làn da tránh khỏi các tổn thương bởi tia UV gây ra.', 100, '2023-11-18 14:00:16', 1),
(15, 5, 'Sữa Dưỡng Thể St.Ives Vitamin E & Bơ Dưỡng Ẩm Da 621ml Hydrating Vitamin E & Avocado Body Lotion', 171000, 192000, 0, 'Sữa Dưỡng Thể St.ives Body Lotion là dòng dưỡng thể đến từ thương hiệu chăm sóc da St.ives thuộc tập đoàn Unilever của Mỹ, với 100% thành phần thiên nhiên và Glycerin dưỡng ẩm thần kì được kết hợp cùng công thức thẩm thấu nhanh và không nhờn, sản phẩm giúp tăng cường độ ẩm, phục hồi da tươi khỏe suốt cả ngày. Hương thơm nhẹ nhàng tạo cảm giác thoải mái, thư giãn khi sử dụng. Sản phẩm phù hợp với mọi loại da. ', 100, '2023-11-18 14:03:03', 1),
(16, 5, 'Sữa Dưỡng Thể St.Ives Yến Mạch & Bơ Dưỡng Ẩm Dịu Da 621ml Nourish & Soothe Oatmeal & Shea Butter Body Lotion', 171000, 192000, 0, 'Sữa Dưỡng Thể St.ives Body Lotion là dòng dưỡng thể đến từ thương hiệu chăm sóc da St.ives thuộc tập đoàn Unilever của Mỹ, với 100% thành phần thiên nhiên và Glycerin dưỡng ẩm thần kì được kết hợp cùng công thức thẩm thấu nhanh và không nhờn, sản phẩm giúp tăng cường độ ẩm, phục hồi da tươi khỏe suốt cả ngày. Hương thơm nhẹ nhàng tạo cảm giác thoải mái, thư giãn khi sử dụng. Sản phẩm phù hợp với mọi loại da. ', 100, '2023-11-18 14:03:03', 1),
(17, 5, 'Sữa Dưỡng Thể Vaseline Dịu Mát Sáng Da 350ml Healthy Bright Fresh & Bright Cooling UV Niacinamide Lotion', 99000, 150000, 0, 'Sữa Dưỡng Thể Vaseline Healthy Bright Insta Radiance UV Tone-Up Lotion MỚI từ thương hiệu mỹ phẩm VASELINE nay được cải tiến với vi chất phản quang giúp làm sáng da gấp 4X lần, đồng thời nuôi dưỡng làn da, hỗ trợ phục hồi hư tổn từ sâu bên trong với giọt Vaseline Jelly siêu nhỏ. Bên cạnh đó, sản phẩm được kết hợp màng chống nắng 3 tác động sẽ bảo vệ làn da khỏi các tác hại từ tia UVA và UVB, là những tác nhân gây ra lão hóa, sạm nám da. Sản phẩm phù hợp cho mọi loại da. ', 100, '2023-11-18 14:04:24', 1),
(18, 5, 'Sữa Dưỡng Thể Vaseline Gluta-Hya Nâng Tông Tức Thì 300ml Healthy Bright Gluta-Hya Body Tone-Up UV Lotion', 135000, 195000, 0, 'Dòng sữa dưỡng thể mới Healthy Bright Gluta-Hya Body Tone-Up UV Lotion đến từ thương hiệu Vaseline với công nghệ Gluta Glow, có tác dụng mạnh hơn gấp 10 lần so với Vitamin C. Sản phẩm nâng tông da nhanh chóng, cải thiện da xỉn màu, thúc đẩy sản sinh collagen và phục hồi độ ẩm từ sâu bên trong. Sản phẩm phù hợp cho mọi loại da cơ thể.', 100, '2023-11-18 14:06:37', 1),
(19, 5, 'Sữa Dưỡng Thể Vaseline Sáng Da Chuyên Sâu Ban Đêm 330ml Gluta-Hya Serum Burst UV Lotion Dewy Radiance', 115000, 150000, 0, 'Vaseline tin rằng bất cứ ai cũng xứng đáng sở hữu một làn da khỏe mạnh. Với hơn 150 năm kinh nghiệm nghiên cứu, Vaseline giới thiệu dòng sản phẩm Sữa Dưỡng Thể Vaseline Gluta-Hya Serum Burst UV Lotion dưỡng sáng không lo tì vết, giúp cải thiện làn không đều màu và có đốm nâu. Đặc biệt, nhờ công thức thế hệ mới của Vaseline, sản phẩm sẽ tan ra như giọt nước khi tiếp xúc với làn da, thấm ngay chỉ sau 10 giây. Trải nghiệm làn da trông sáng mịn và đều màu với Vaseline Gluta-Hya Serum Burst UV Lotion!', 100, '2023-11-18 14:06:37', 1),
(20, 5, 'Sữa Dưỡng Ẩm Cetaphil Dịu Lành Cho Bé 400ml Baby Daily Lotion', 267000, 320000, 0, 'Cetaphil Baby Daily Lotion là sản phẩm sữa dưỡng ẩm toàn thân dịu nhẹ cho bé đến từ thương hiệu Cetaphil được bác sĩ da liễu khuyên dùng. Công thức với Vitamin B5, dầu hướng dương và bơ hạt mỡ có khả năng cung cấp độ ẩm tối ưu cho làn da mỏng manh của trẻ sơ sinh trong suốt 24 giờ, bảo vệ màng ẩm tự nhiên của da, chăm sóc da bé mềm mại và dịu nhẹ. Sản phẩm được bác sĩ da liễu kiểm nghiệm có thành phần lành tính, an toàn tuyệt đối khi sử dụng cho trẻ sơ sinh.\r\n\r\n ', 100, '2023-11-18 14:07:27', 1),
(21, 13, 'Phấn Má Hồng 3CE Mịn Lì Delectable - Hồng Anh Đào 5.5g Mood Recipe Face Blush', 277000, 360000, 0, 'Phấn Má Hồng Mịn Lì 3CE Mood Recipe Face Blush là dòng sản phẩm phấn má hồng dạng nén thuộc thương hiệu 3CE, với chất phấn mịn lì, nhỏ mịn có khả năng lên màu chuẩn xác, tự nhiên chỉ sau một lần lấy phấn, mang đến cho bạn sắc màu rạng rỡ và tinh tế. Đặc biệt, các hạt phấn còn có khả năng bám da cực tốt và kiềm dầu siêu đỉnh, giúp giữ đôi gò má luôn ửng hồng suốt cả ngày dài. Sản phẩm phù hợp cho mọi loại da, đặc biệt là da dầu.', 100, '2023-11-18 14:56:49', 1),
(22, 13, 'Phấn Má Hồng Artdeco Màu 18 Beige Rose Blush 5g Blusher #18 Beige Rose Blush', 177000, 239000, 0, 'Phấn Má Hồng Artdeco Blusher 5g là sản phẩm phấn má hồng đến từ thương hiệu mỹ phẩm Artdeco của Đức, với bảng màu vô cùng đa dạng phù hợp cho mọi layout trang điểm khác nhau. Phấn má có kết cấu mịn cùng độ lên màu tuyệt vời đem lại đôi má hồng hào, tươi tắn.Kết cấu mịn và có thể thoa nhẹ hoặc đậm hơn tùy theo sở thích của bạn.', 100, '2023-11-18 14:56:49', 1),
(23, 13, 'Phấn Má Hồng Cathy Doll Mịn Lì 01 Buddy Beige 6g Nude Matte Blusher #01 Buddy Beige', 159000, 220000, 0, 'Phấn Má Hồng Cathy Doll Nude Matte Blusher 6g là dòng má hồng đến từ thương hiệu mỹ phẩm Cathy Doll của Thái Lan, thành phần chứa bột Silica hình cầu cải tiến với kích thước siêu nhỏ 5-7 micron giúp phấn má tệp vào da tự nhiên đồng thời che phủ lỗ chân lông mang đến lớp nền mịn màng, hồng hào. Hạt phấn siêu mịn tạo hiệu ứng mịn lì không gây bóng nhờn đồng thời che phủ lỗ chân lông, giảm tiết bã nhờn hiệu quả.Sản phẩm phù hợp với mọi loại da.', 100, '2023-11-18 15:01:15', 1),
(24, 13, 'Phấn Má Hồng Cathy Doll Mịn Lì 03 Baby Boy 6g Nude Matte Blusher #03 Baby Boy', 159000, 220000, 0, 'Phấn Má Hồng Cathy Doll Nude Matte Blusher 6g là dòng má hồng đến từ thương hiệu mỹ phẩm Cathy Doll của Thái Lan, thành phần chứa bột Silica hình cầu cải tiến với kích thước siêu nhỏ 5-7 micron giúp phấn má tệp vào da tự nhiên đồng thời che phủ lỗ chân lông mang đến lớp nền mịn màng, hồng hào. Hạt phấn siêu mịn tạo hiệu ứng mịn lì không gây bóng nhờn đồng thời che phủ lỗ chân lông, giảm tiết bã nhờn hiệu quả.Sản phẩm phù hợp với mọi loại da.', 100, '2023-11-18 15:01:15', 1),
(25, 13, 'Phấn Má Hồng Horus 02 Coral Pink Màu Hồng Đào 4g\r\nLong - Lasting Blusher #02 Coral Pink', 58000, 79000, 0, 'Phấn Má Hồng Horus Long - Lasting Blusher 4g là sản phẩm phấn má đến từ thương hiệu mỹ phẩm Horus của Trung Quốc, má hồng dạng phấn có chất phấn mềm mịn, hạt phấn siêu nhỏ bám da cực tốt nhưng không hề gây cảm giác nặng nề cho da, không gây bít lỗ chân lông. Khả năng bám màu tốt lên đến 12 tiếng giúp cho luôn có đôi má tươi sáng rạng rỡ tự nhiên. Phấn má có khả năng lên chuẩn màu rõ nét từ lần cọ đầu tiên, hạt phấn bám dai và tốt để bạn thao tác bằng tay, bông mút hay dùng cọ đều được.', 100, '2023-11-18 15:03:05', 1),
(26, 13, 'Phấn Má Hồng Maybelline Màu Đỏ Rượu 50 Wine 4.5g\r\nFit Me Mono Blush', 110000, 128000, 0, 'Phấn má hồng dạng nén Maybelline Fit Me Mono Blush với 4 tông màu nhẹ nhàng trẻ trung được chọn lọc phù hợp với tông da châu Á, chất phấn mịn màng dễ tán cùng khả năng kiềm dầu, giúp giữ da bạn luôn khô thoáng, không bóng nhờn. Đây là sản phẩm thích hợp để đồng hành cùng các bạn nữ mỗi ngày, mang đến vẻ ngoài tươi tắn tự nhiên. Sản phẩm thích hợp với mọi loại da, kể cả da dầu, hỗn hợp dầu. ', 100, '2023-11-18 15:03:05', 1),
(27, 13, 'Phấn Má Hồng Maybelline Mịn Lì Chuẩn Màu 30 Fierce 4.5g Fit Me Mono Blush 30 - Fierce', 111000, 148000, 0, 'Phấn Má Hồng Fit Me Mono Blush MỚI từ thương hiệu Maybelline New York là sản phẩm má hồng dạng phấn nén có khả năng lên màu chuẩn - mịn mướt - tự nhiên và bền màu suốt cả ngày. Với các hạt \"vi phấn\" kết cấu nhẹ và mịn giúp chuẩn màu trong 1 lần chạm, tạo hiệu ứng gò má ửng hồng tự nhiên. Chất bột kem mịn mượt tựa như tan vào da, cho khả năng bám màu lâu trôi, bền màu lên đến 16H.', 100, '2023-11-18 15:05:03', 1),
(28, 13, 'Phấn Má Hồng Silkygirl 02 Hồng Đào Ngọt Ngào Blush Hour #02 Rosy Pink', 118000, 168000, 0, 'Phấn Má Hồng Blush Hour MỚI từ thương hiệu SILKYGIRL nổi bật với thiết kế vuông vức, nhỏ gọn đi kèm chổi và ba sắc hồng chuẩn xu hướng dành cho bạn gái đôi má ửng hồng trong trẻo tự nhiên tạo điểm nhấn tươi tắn trên gương mặt bạn gái. Má Hồng SILKYGIRL BLUSH HOUR có kết cấu phấn dạng phấn với các hạt phấn li ti được nén chặt, hạn chế việc rơi hay dây ra quần áo.  Sản phẩm thích hợp cho mọi loại da.', 100, '2023-11-18 15:05:03', 1),
(29, 13, 'Phấn Má Hồng Too Cool For School 03 Màu Hồng Nhạt 9g Artclass By Rodin Blusher - 03 De Peche', 262000, 340000, 0, 'Phấn Má Hồng Too Cool For School Artclass By Rodin Blusher 9g là dòng sản phẩm phấn má hồng đến từ thương hiệu Too Cool For School của Hàn Quốc, được ứng dụng công nghệ dạng bột phấn siêu mịn và trong suốt, cho màu sắc sống động và bền màu hoàn hảo. Mỗi hộp phấn chứa 3 ô màu trong cùng một sản phẩm vô cùng tiện lợi, tích hợp thêm gương lớn thuận tiện trang điểm. Phấn Má Hồng Too Cool For School Artclass By Rodin Blusher ứng dụng công nghệ dạng bột phấn siêu mịn và trong suốt, cho màu sắc sống động và bền màu hoàn hảo.', 100, '2023-11-18 15:07:13', 1),
(30, 13, 'Phấn Nước Aprilskin Ma Thuật Màu Sáng Hồng 22 Pink Beige 15g Magic Snow Cushion 2.0', 329000, 660000, 0, 'Phấn Nước Ma Thuật April Skin Black Magic Snow Cushion là sản phẩm cushion phiên bản mới nhất đến từ thương hiệu mỹ phẩm April Skin của Hàn Quốc, giúp biến hóa làn da khuyết điểm thành làn da đẹp ngay lập tức, có thể thay thế toàn bộ bước trang điểm từ kem lót, kem nền, phấn phủ, kem chống nắng chỉ trong một bước. Sản phẩm có thành phần nước khoáng thiên nhiên rất giàu Canxi, Magiê, Natri ... 6 loại khoáng chất cung cấp độ ẩm, bảo vệ làn da lâu dài trước tác động từ môi trường. ', 100, '2023-11-18 15:07:13', 1),
(31, 9, 'Son Dưỡng LipIce Red Hương Hoa Anh Đào, Đỏ Mọng 2.4g Hello Kitty Sheer Color', 60000, 78000, 0, 'Son Dưỡng LipIce Sheer Color x Hello Kitty 2.4g là một sự kết hợp vô cùng đáng yêu giữa giữa dòng son dưỡng nổi tiếng từ thương hiệu Rohto – LipIce Sheer Color cùng nàng mèo Hello Kitty lừng danh đến từ Nhật Bản. Son dưỡng hiệu chỉnh sắc môi mang đến đôi môi ẩm mượt, ửng màu tự nhiên và lâu phai. Bộ sưu tập theo concept Yummy Japan x Hello Kitty mới lạ, với thiết kế hình ảnh Hello Kitty đáng yêu cùng những họa tiết mô tả hương thơm đậm chất Nhật Bản, mang đến trải nghiệm độc đáo cho các nàng mỗi lần thoa son.', 100, '2023-11-18 15:29:45', 1),
(32, 9, 'Son Lì B.O.M #803 My Orange - Đỏ Cam 3.5g My Lipstick', 248000, 310000, 0, 'Son Lì B.O.M My Lipstick 3.5g đến từ thương hiệu B.O.M Cosmetics của Hàn Quốc là bộ sưu tập son MLBB vô cùng trendy - với 10 sắc son xu hướng từ màu nude tự nhiên đến đỏ cổ điển, cùng chất son mịn lì như nhung, đem đến cho bạn bờ môi đẹp chuẩn sắc. Thành phần son giàu các dưỡng chất tự nhiên từ Vitamin E và 4 loại dầu thực vật (Macca, quả bơ, hạt mơ, nụ tầm xuân) giúp bảo vệ và dưỡng ẩm cho đôi môi luôn mềm mịn, không khô tróc. Phiên bản nâng cấp nay đã có thêm dưỡng chất, đồng thời son lâu trôi màu hơn.', 100, '2023-11-18 15:29:45', 1),
(33, 9, 'Son Lì innisfree Siêu Nhẹ Môi 2 Mood Orange - Cam Đất 3.5g Airy Matte Lipstick #2 Mood Orange', 324000, 360000, 0, 'Son Lì innisfree Siêu Nhẹ Môi 3.5g là sản phẩm son thỏi đến từ thương hiệu mỹ phẩm Innisfree của Hàn Quốc, với kết cấu mỏng nhẹ như không, đem lại trải nghiệm lì mịn trên môi. Son lì dạng thỏi với nhiều tông màu son MLBB thời thượng tạo hiệu ứng môi căng mướt và bừng sức sống, mang lại sự tự tin rạng rỡ mỗi ngày. Không chứa 8 thành phần: thành phần động vật, Paraben, Talc, Polyacrylamide, hương thơm, Tmidazolidinyl urea, Triethanolamine, chất hoạt động bề mặt PEG', 100, '2023-11-18 15:31:30', 1),
(34, 9, 'Son Lì Maybelline Mịn Môi Siêu Nhẹ 1299 Đỏ Cam Đất 1.7g Color Sensational Ultimatte #1299 More Spice', 179000, 228000, 0, 'Son Lì Mịn Môi Siêu Nhẹ Maybelline Color Sensational Ultimatte là dòng son lì cao cấp mới nhất từ thương hiệu Maybelline New York, cho bạn 3 tính năng vượt trội \"Mịn - Mờ - Nhẹ tênh\". Với công nghệ làm mờ rãnh môi mang đến lớp finish mịn mờ sang trọng kết hợp công nghệ ultrafine powder cho son mịn lì nhẹ tênh. Thiết kế đầu son hình giọt sương nhỏ giúp son dễ dàng lướt nhẹ và chuẩn màu trên môi bạn. Đặc biệt, vỏ son “mảnh mai thon gọn” cùng màu sắc bắt mắt, khơi gợi hơi thở sang trọng, thời thượng và trẻ trung.', 100, '2023-11-18 15:31:30', 1),
(35, 9, 'Son Môi L\'Oréal Mịn Lì 129 I Lead - Cam Đỏ Đất 1.7g Color Riche Intense Volume Matte', 263000, 329000, 0, 'Son mịn lì cao cấp Color Riche Intense Volume Matte 2g là dòng son môi cao cấp mới của thương hiệu L\'Oréal, với thiết kế thanh lịch cùng đầu son vát cong mềm mại mang đến cho bạn hơi thở của sự sang trọng. Chất son mịn lì với hiệu ứng nhung mịn, lâu trôi lướt trên môi nhẹ nhàng. Dòng son còn được bổ sung thêm Hyaluronic Acid giúp khóa ẩm, cho đôi môi mềm căng mướt cả ngày dài. Với thiết kế thanh lịch, sang trọng, son môi Color Riche Intense Volume Matte sẽ là món đồ trang điểm & phụ kiện không thể thiếu của bạn khi ra đi ra đường!', 100, '2023-11-18 15:33:26', 1),
(36, 9, 'Son Môi Menard Giàu Dưỡng A 130 - Sắc Hồng Mẫu Đơn 3.2g TK Lipstick', 559000, 625000, 1, 'Son Môi Menard TK Lipstick Giàu Dưỡng là sản phẩm son thỏi của thương hiệu MENARD đến từ Nhật Bản. Son lót dưỡng ẩm Menard TK LipStick có độ dưỡng tốt, độ bền màu lâu, sau khi ăn mà son vẫn không phai màu. Chất son mịn màng, giàu ẩm, tan đều trên môi, nhẹ nhàng và êm ái, cho môi mềm hơn, mọng hơn và xinh hơn. Tinh chất thiên nhiên: Chiết xuất hoa Sơn Chi có thành phần vitamin E tăng cường bảo vệ độ ẩm. Hoa có mùi hương nhẹ nhàng, dễ chịu cho làn môi thêm mọng nước và quyến rũ.', 100, '2023-11-18 15:33:26', 1),
(37, 9, 'Son Thỏi 3CE Mịn Lì 222 Step And Go - Đỏ Đất 3.5g Mood Recipe Matte Lip Color', 304000, 380000, 0, 'Son Thỏi Mịn Lì 3CE 3.5g là sản phẩm son môi đến từ thương hiệu mỹ phẩm nổi tiếng 3CE của Hàn Quốc, chất son dạng Primer matte tăng độ bám, giảm hiện tượng son trượt môi, tạo đường viền môi gọn gàng, không hề gây khó chịu hay nặng môi giúp môi thêm gợi cảm, thu hút. Màu sắc phong phú trông đôi môi gợi cảm hơn, lên màu son rõ ràng chỉ với một đến hai lần quẹt son.', 100, '2023-11-18 15:35:42', 1),
(38, 9, 'Son Thỏi 3CE Vỏ Trong Suốt Eternal Warm - Gạch Caramel 3.5g Soft Matte Lipstick (Version Deep Under More Deep)', 304000, 380000, 0, 'Son Thỏi 3CE Vỏ Trong Suốt Soft Matte Lipstick – Version Deep Under More Deep 3.5g là bộ sưu tập son thỏi lì phiên bản đặc biệt được 3CE cho ra mắt ngay trong dịp lễ hội, với thiết kế bao bì sang trọng, bắt mắt nhờ tone chủ đạo là màu vàng đồng, tựa như những vầng sáng của những tia cực quang giữa bầu trời. 3CE Soft Matte Lipstick – Version Deep Under More Deep vẫn giữ nguyên kết cấu mềm mại đặc trưng và độ bám màu cao, giúp đôi môi luôn mềm mại, mịn màng như nhung. Công thức với bột đàn hồi silicon giúp son nhẹ nhàng lướt êm trên môi, cho lớp nền môi nhẹ thoáng, mịn lì, cảm giác như không đánh son. Bên cạnh đó, hạt phức hợp semi-solid sẽ giúp màu son được lưu giữ trên môi lâu hơn, không bị phai hay nứt nẻ.', 100, '2023-11-18 15:35:42', 1),
(39, 9, 'Son Thỏi 3CE Vỏ Trong Suốt Unstained Red - Đỏ Phấn 3.5g Soft Matte Lipstick (Version Deep Under More Deep)', 304000, 380000, 0, 'Son Thỏi 3CE Vỏ Trong Suốt Soft Matte Lipstick – Version Deep Under More Deep 3.5g là bộ sưu tập son thỏi lì phiên bản đặc biệt được 3CE cho ra mắt ngay trong dịp lễ hội, với thiết kế bao bì sang trọng, bắt mắt nhờ tone chủ đạo là màu vàng đồng, tựa như những vầng sáng của những tia cực quang giữa bầu trời. 3CE Soft Matte Lipstick – Version Deep Under More Deep vẫn giữ nguyên kết cấu mềm mại đặc trưng và độ bám màu cao, giúp đôi môi luôn mềm mại, mịn màng như nhung. Công thức với bột đàn hồi silicon giúp son nhẹ nhàng lướt êm trên môi, cho lớp nền môi nhẹ thoáng, mịn lì, cảm giác như không đánh son. Bên cạnh đó, hạt phức hợp semi-solid sẽ giúp màu son được lưu giữ trên môi lâu hơn, không bị phai hay nứt nẻ.', 100, '2023-11-18 15:37:26', 1),
(40, 9, 'Son Thỏi Lì 3CE Vỏ Trong Suốt Giving Pleasure - Cam Đỏ 3.5g Soft Matte Lipstick', 304000, 380000, 0, 'Son Thỏi Lì 3CE Vỏ Trong Suốt 3.5g là sản phẩm son môi đến từ thương hiệu mỹ phẩm 3CE của Hàn Quốc, kết cấu son mềm mại và nhẹ môi cùng sắc tố cao giúp lên màu chuẩn sắc ngay từ lần đầu tiên. Sản phẩm với thiết kế vỏ trong suốt độc đáo, lạ mắt và ấn tượng giúp bạn quan sát được màu son bên trong. Chứa các sắc tố màu cao và tinh tế, tạo màu sắc đậm nhạt như ý muốn, phức hợp Semi solid hạt mỏng giúp bám màu lên môi tốt hơn, không lộ vân môi và không làm bong tróc tế bào chết môi.', 100, '2023-11-18 15:37:26', 1),
(41, 2, 'Sữa Tắm Hatomugi Dưỡng Ẩm, Sáng Da Chiết Xuất Ý Dĩ 800ml Reihaku Hatomugi Body Soap', 80000, 230000, 0, 'Sữa Tắm Hatomugi Dưỡng Ẩm, Sáng Da Chiết Xuất Ý Dĩ 800ml đến từ thương hiệu HATOMUGI thường xuyên lọt vào top sữa tắm được yêu thích của các tạp chí làm đẹp tại Nhật, với thành phần chiết xuất hạt ý dĩ giàu dưỡng chất, không chỉ giúp làm sạch da mà còn dưỡng ẩm cho da, nuôi dưỡng cho làn da sáng mịn từ bên trong. Sữa tắm HATOMUGI Reihaku Hatomugi Body Soap chứa chiết xuất từ ý dĩ – là thành phần phổ biến trong các sản phẩm chăm sóc da, làm đẹp ở Nhật Bản. Ý dĩ rất giàu các vitamin nhóm B, vitamin E, axit béo… có khả năng cung cấp độ ẩm cho da ẩm mượt hơn, đồng thời giảm sự hình thành nếp nhăn, làm mờ các đốm nâu, dưỡng da sáng và đều màu. Ngoài ra, các enzyme phân giải protein có trong chiết xuất hạt ý dĩ có thể hòa tan lớp keratin của da, do đó giúp làm mềm và làm ẩm da.', 100, '2023-11-18 15:47:55', 1),
(42, 2, 'Sữa Tắm On: The Body Dưỡng Ẩm Hương Tinh Tế 1000g Perfume Shower Body Wash #Classic Pink', 185000, 209000, 0, 'Sữa Tắm On: The Body Dưỡng Ẩm Hương Nước Hoa là dòng sữa tắm đến từ thương hiệu chăm sóc da On: The Body (thuộc tập đoàn LG của Hàn Quốc), có kết cấu dạng kem đặc, nhẹ nhàng làm sạch cơ thể, lấy đi bụi bẩn, bã nhờn trên da, mang lại độ dưỡng ẩm mịn màng tránh để làn da khô ráp, nứt nẻ và hương thơm nước hoa từ thiên nhiên nhẹ nhàng, quyến rũ, lưu hương suốt cả ngày. Lấy nguồn cảm hứng từ nước hoa với hương thơm bất tận, Viện nghiên cứu Sent Berry – LG Household & Health care, Hàn Quốc đã sáng chế ra bộ sưu tập Sữa Tắm ON: THE BODY Perfume Shower Body Wash, gửi gắm vẻ đẹp và hương thơm từ thiên nhiên, đánh thức các giác quan với hương thơm độc đáo, mới lạ.', 100, '2023-11-18 15:47:55', 1),
(43, 2, 'Sữa Tắm Lifebuoy Detox Matcha & Khổ Qua 800g', 137000, 195000, 0, 'Sữa Tắm Lifebuoy Detox Và Bảo Vệ Khỏi Vi Khuẩn là dòng sản phẩm sữa tắm đến từ thương hiệu chăm sóc da Lifebuoy (thuộc tập đoàn Unilever), giúp detox sạch sâu, loại bỏ bụi bẩn kể cả bụi siêu mịn PM2.5 và bảo vệ da khỏi vi khuẩn gây mụn. Ô nhiễm bụi mịn “leo thang”, vi khuẩn khiến bạn phiền lòng với hàng loạt vấn đề của da cơ thể, thì sữa tắm Lifebuoy Detox Matcha & Khổ Qua chính là “chân ái” giúp detox da sạch sâu, mềm mịn, nhờ công thức dịu nhẹ từ thiên nhiên. Sản phẩm phù hợp với mọi loại da cơ thể, đặc biệt là da dầu nhờn.', 100, '2023-11-18 15:49:35', 1),
(44, 2, 'Sữa Tắm On: The Body Dưỡng Ẩm Hương Thư Giãn 1000g Perfume Shower Body Wash #White Pearl', 184000, 209000, 0, 'Sữa Tắm On: The Body Dưỡng Ẩm Hương Nước Hoa là dòng sữa tắm đến từ thương hiệu chăm sóc da On: The Body (thuộc tập đoàn LG của Hàn Quốc), có kết cấu dạng kem đặc, nhẹ nhàng làm sạch cơ thể, lấy đi bụi bẩn, bã nhờn trên da, mang lại độ dưỡng ẩm mịn màng tránh để làn da khô ráp, nứt nẻ và hương thơm nước hoa từ thiên nhiên nhẹ nhàng, quyến rũ, lưu hương suốt cả ngày. Lấy nguồn cảm hứng từ nước hoa với hương thơm bất tận, Viện nghiên cứu Sent Berry – LG Household & Health care, Hàn Quốc đã sáng chế ra bộ sưu tập Sữa Tắm ON: THE BODY Perfume Shower Body Wash, gửi gắm vẻ đẹp và hương thơm từ thiên nhiên, đánh thức các giác quan với hương thơm độc đáo, mới lạ.', 100, '2023-11-18 15:49:35', 1),
(45, 2, 'Sữa Tắm Nước Hoa Tesori d\'Oriente Hương Hoa Sen 500ml Shower Cream #Lotus Flower And Shea Butter', 229000, 275000, 0, 'Sữa Tắm Nước Hoa Tesori d\'Oriente là sản phẩm sữa tắm đến từ thương hiệu Tesori d\'Oriente của Ý, với các thành phần từ thiên nhiên có khả năng làm sạch bụi bẩn, loại bỏ dầu thừa, bã nhờn và dưỡng da ẩm mịn, mềm mại. Đặc biệt sữa tắm nước hoa Tesori d\'Oriente được nhập khẩu từ Ý nổi tiếng với hương thơm đa dạng và lưu giữ lâu đến 8 tiếng trên da giúp bạn tự tin suốt cả ngày. Sữa Tắm Nước Hoa Tesori d\'Oriente Hương Hoa Sen lấy cảm hứng từ Nghi thức của các vị thần Phương Đông, sữa tắm nước hoa với khả năng chống oxy hóa, trẻ hóa và nuôi dưỡng làn da mềm mại, sáng khỏe nhờ các thành phần quý: Hoa Sen và Bơ hạt mỡ. Sản phẩm mang lại một cảm giác dễ chịu, sảng khoái cho tất cả các giác quan sau khi tắm với hương thơm ngọt ngào, ấm áp. ', 100, '2023-11-18 15:51:09', 1),
(46, 2, 'Sữa Tắm Hazeline Sáng Mịn Dưỡng Ẩm Yến Mạch & Dâu Tằm 1kg', 88000, 139000, 0, 'Sữa Tắm Hazeline đến từ thương hiệu chăm sóc da Hazeline thuộc tập đoàn Unilever, nay đã có phiên bản hoàn toàn mới với BỘ BA VITAMIN B3 – C – E và 100% CHIẾT XUẤT THIÊN NHIÊN, cùng các siêu dưỡng chất giúp NHÂN BA TÁC ĐỘNG SÁNG DA, đem lại làn da sáng rạng ngời thuần khiết. Đồng thời, công thức mới TĂNG THÊM HƯƠNG THƠM, giúp LƯU HƯƠNG quyến rũ tới 8H. Bụi bẩn, ô nhiễm và nắng nóng sẽ khiến da trở nên sạm đi và kém rạng rỡ. Với sự kết hợp của chiết xuất trái cây giàu vitamin C cùng các siêu dưỡng chất, Sữa Tắm Hazeline Sáng Mịn Rạng Ngời Chiết Xuất Matcha & Lựu Đỏ mang đến hiệu quả làm sáng da một cách tự nhiên, cho bạn một làn da SÁNG MỊN RẠNG NGỜI, THƠM HƯƠNG THANH MÁT.', 100, '2023-11-18 15:51:09', 1),
(47, 2, 'Sữa Tắm Hazeline Sáng Mịn Rạng Ngời Matcha & Lựu Đỏ 1kg', 88000, 139000, 0, 'Sữa Tắm Hazeline đến từ thương hiệu chăm sóc da Hazeline thuộc tập đoàn Unilever, nay đã có phiên bản hoàn toàn mới với BỘ BA VITAMIN B3 – C – E và 100% CHIẾT XUẤT THIÊN NHIÊN, cùng các siêu dưỡng chất giúp NHÂN BA TÁC ĐỘNG SÁNG DA, đem lại làn da sáng rạng ngời thuần khiết. Đồng thời, công thức mới TĂNG THÊM HƯƠNG THƠM, giúp LƯU HƯƠNG quyến rũ tới 8H. Bụi bẩn, ô nhiễm và nắng nóng sẽ khiến da trở nên sạm đi và kém rạng rỡ. Với sự kết hợp của chiết xuất trái cây giàu vitamin C cùng các siêu dưỡng chất, Sữa Tắm Hazeline Sáng Mịn Rạng Ngời Chiết Xuất Matcha & Lựu Đỏ mang đến hiệu quả làm sáng da một cách tự nhiên, cho bạn một làn da SÁNG MỊN RẠNG NGỜI, THƠM HƯƠNG THANH MÁT.', 100, '2023-11-18 15:52:26', 1),
(48, 2, 'Sữa Tắm St.Ives Dưỡng Ẩm Da Yến Mạch & Bơ Hạt Mỡ 650ml Oatmeal & Shea Butter Soothing Body Wash (New Packaging)', 159000, 180000, 0, 'Sữa Tắm St.Ives Dưỡng Da Body Wash là dòng sữa tắm đến từ thương hiệu chăm sóc da St.Ives nổi tiếng xuất xứ từ Mỹ, với thành phần chiết xuất từ thiên nhiên giúp làm sạch bụi bẩn, nhẹ nhàng lấy đi tế bào chết đồng thời bổ sung các dưỡng chất dưỡng ẩm làm mềm mịn da. Ngoài ra, mỗi sản phẩm với các thành phần tự nhiên khác nhau mang lại hương thơm riêng biệt phù hợp cho mọi đối tượng. Mùi hương tươi mát và thư giãn từ Cam và Chanh Hồng giúp làm tan biến đi mọi lo âu, căng thẳng của cả ngày dài làm việc, mang tới cho bạn một cảm giá thư thái, dễ chịu.', 100, '2023-11-18 15:52:26', 1),
(49, 2, 'Sữa Tắm Some By Mi Làm Sạch Mụn Cơ Thể 400g\r\nAHA-BHA-PHA 30 Days Miracle Acne Clear Body Cleanser', 276000, 395000, 0, 'Sữa Tắm Some By Mi Làm Giảm Mụn AHA-BHA-PHA 400g là dòng sữa tắm đến từ thương hiệu Some By Mi của Hàn Quốc, chứa thành phần AHA, BHA, PHA giúp làm sạch lỗ chân lông và kiểm soát dầu cùng với chiết xuất từ tràm trà, bạch đàn giúp ngăn ngừa và cải thiện tình trạng mụn xuất hiện trên các vùng cơ thể. Sữa tắm tạo bọt kích thước nhỏ giúp làm sạch dầu thừa, bụi bẩn trên làn da, kết cấu dạng gel trong, mỏng nhẹ, tạo bọt dễ dàng, hương thơm thanh mát, mang đến làn da sạch thoáng, mịn màng cùng cảm giác thư giãn, sảng khoái.', 100, '2023-11-18 15:54:01', 1),
(50, 2, 'Sữa Tắm On: The Body Dưỡng Ẩm Hương Quyến Rũ 1000g Perfume Shower Body Wash #Violet Dream', 185000, 209000, 0, 'Sữa Tắm On: The Body Dưỡng Ẩm Hương Nước Hoa là dòng sữa tắm đến từ thương hiệu chăm sóc da On: The Body (thuộc tập đoàn LG của Hàn Quốc), có kết cấu dạng kem đặc, nhẹ nhàng làm sạch cơ thể, lấy đi bụi bẩn, bã nhờn trên da, mang lại độ dưỡng ẩm mịn màng tránh để làn da khô ráp, nứt nẻ và hương thơm nước hoa từ thiên nhiên nhẹ nhàng, quyến rũ, lưu hương suốt cả ngày. Lấy nguồn cảm hứng từ nước hoa với hương thơm bất tận, Viện nghiên cứu Sent Berry – LG Household & Health care, Hàn Quốc đã sáng chế ra bộ sưu tập Sữa Tắm ON: THE BODY Perfume Shower Body Wash, gửi gắm vẻ đẹp và hương thơm từ thiên nhiên, đánh thức các giác quan với hương thơm độc đáo, mới lạ.', 100, '2023-11-18 15:54:01', 1),
(51, 3, 'Xịt Khoáng Nghệ Hưng Yên Cocoon Hung Yen Turmeric Face Mist 130Ml', 215000, 360000, 0, 'Chiết xuất nghệ: tạo ra từ củ nghệ của Hưng yên, giàu chất chống oxy hóa và chất kháng khuẩn, nấm giúp làm dịu da, làm giảm kích ứng, giảm viêm trên da, đồng thời chữa lành thương tổn,Muối khoáng: là một chất giàu khoáng Cu, Zn, Mg, Aspartate, Gluconate.... có thể tăng cường sức khỏe cho làn da, trung hòa gốc tự do góp phần ngăn ngừa các dấu hiệu lão hóa, giữ cho làn da đàn hồi hơn.', 100, '2023-11-18 14:56:49', 1),
(52, 3, 'Xịt Khoáng Cấp Ẩm, Làm Dịu Da Evian Brumisateur Natural Mineral Water Facial Spray', 177000, 239000, 0, 'Phương pháp giữ cho làn da của bạn luôn tươi trẻ với xịt khoáng Evian Facial Spray tươi mát suốt cả ngày. Xịt khoáng thiên nhiên bổ sung thêm khoáng chất dưỡng ẩm, vừa giúp làm dịu mát da vừa chăm sóc làn da mềm mại, cho da ngậm nước & sáng khỏe trong thời gian dài.', 100, '2023-11-18 14:56:49', 1),
(53, 3, 'Xịt Khoáng Dưỡng Da Ẩm Mịn Da Bio Essence Bio Water Energizing Water', 159000, 220000, 0, 'Xịt khoáng Bio Water chiết xuất từ táo xanh giàu khoáng chất và hàm lượng muối thấp giúp cung cấp độ ẩm tối đa cho da, từ đó giúp da luôn tươi trẻ và tràn đầy năng lượng. Đồng thời, xịt khoáng còn làm mát, làm dịu da kích ứng một cách hiệu quả.', 100, '2023-11-18 15:01:15', 1),
(54, 3, 'Dưỡng Chất Khoáng Cô Đặc Phục Hồi & Bảo Vệ Da Vichy Mineral 89', 650000, 820000, 0, 'Dưỡng Chất Khoáng Cô Đặc Phục Hồi & Bảo Vệ Da VICHY MINERAL 89 là dưỡng chất khoáng cô đặc được chiết xuất từ thành phần khoáng chất quý giá dưới lòng núi lửa triệu năm tại Auvergne, Pháp. Sản phẩm đã trở thành liệu trình chăm sóc da cần thiết cho những làn da yếu, da sau điều trị và ngay cả những làn da muốn chăm sóc hằng ngày. Với khả năng khôi phục & nuôi dưỡng da rạng rỡ, săn chắc láng mịn và ẩm mượt, Vichy Mineral 89 là “mẫu” điển hình được các bác sĩ da liễu khuyên dùng cho quá trình chăm sóc mỗi ngày.', 100, '2023-11-18 15:01:15', 1),
(55, 3, 'Xịt Khoáng Evoluderm Cấp Nước & Làm Dịu Da 400ml\r\nPure Water Atomizer', 558000, 759000, 0, 'Xịt Khoáng Cung Cấp Nước Evoluderm Atomiseur Eau Pure thuộc thương hiệu Evoluderm được sản xuất, đóng gói tại Pháp đạt tiêu chuẩn GMP và ISO 9002. Với thành phần chính là nước tinh khiết nên xịt khoáng Evoluderm đảm bảo lành tính và không gây kích ứng với các loại da, thậm chí cả những người sở hữu làn da mỏng manh, nhạy cảm. Sản phẩm xịt khoáng có thể sử dụng cho cả mặt và toàn thân.', 100, '2023-11-18 15:03:05', 1),
(56, 3, 'Xịt Khoáng La Roche-Posay Làm Sạch & Dịu Da Dầu Mụn 150ml Serozinc Zinc Sulfate Solution Cleansing, Soothing', 280000, 388000, 0, 'Thời tiết nóng bức sẽ khiến các cô nàng da dầu trở nên đổ dầu nhiều hơn, gây ra tình trạng bít tắc lỗ chân lông & khiến làn da dễ phát sinh mụn hơn. Xịt khoáng La-Roche Posay Serozinc Zinc Sulfate Solution Cleansing, Soothing đến từ thương hiệu dược mỹ phẩm La Roche-Posay được thiết kế dành riêng cho làn da dầu, các vấn đề về mụn nhằm hỗ trợ chống oxy hóa cho da, giảm sưng viêm, bóng nhờn đáng kể mang đến làn da khô thoáng, mịn màng suốt cả ngày dài.', 100, '2023-11-18 15:03:05', 1),
(57, 3, 'Xịt Khoáng Avène Cấp Nước, Làm Dịu & Giảm Kích Ứng 300ml\r\nThermal Spring Water', 111000, 148000, 0, 'Xịt Khoáng Avène Thermal Spring Water là dòng sản phẩm nước xịt khoáng nổi tiếng từ thương hiệu dược mỹ phẩm Eau Thermale Avène  của Pháp. Thành phần chính là nước khoáng thiên nhiên được lấy từ dòng suối khoáng Sanite-Odile nổi tiếng, giàu khoáng chất và vi lượng thiên nhiên quý hiếm, với đặc tính làm dịu, chống oxy hóa và giúp chữa lành các thương tổn trên da. Sản phẩm dạng xịt phun sương, giúp cấp nước và làm dịu da tức thì, giảm kích ứng hiệu quả, giúp da của bạn luôn mềm mịn tự nhiên.', 100, '2023-11-18 15:05:03', 1),
(58, 3, 'Cicaplast Baume B5+ Ultra-Repairing Soothing Balm 40ml + Thermal Spring Water 50ml', 118000, 168000, 0, 'Kem dưỡng Cicaplast Baume B5+ Ultra-Repairing Soothing Balm mới từ thương hiệu dược mỹ phẩm La Roche-Posay được thiết kế chuyên biệt dành cho làn da khô, kích ứng và thương tổn, giúp phục hồi da sau 1H và bảo vệ hàng rào độ ẩm da với công nghệ cải tiến mới Tribioma và các hoạt chất phục hồi chuyên sâu.', 100, '2023-11-18 15:05:03', 1),
(59, 3, 'Serozinc Zinc + Anthelios UV Mune 400 Oil Control Gel-Cream', 262000, 340000, 0, 'Thời tiết nóng bức sẽ khiến các cô nàng da dầu trở nên đổ dầu nhiều hơn, gây ra tình trạng bít tắc lỗ chân lông & khiến làn da dễ phát sinh mụn hơn. Xịt khoáng La-Roche Posay Serozinc được thiết kế dành riêng cho làn da dầu, da mụn, với thành phần Kẽm (Zinc) có tác dụng chống oxy hóa, làm dịu da và giảm sưng viêm, giảm bóng nhờn đáng kể, mang đến làn da khô thoáng, mịn màng suốt cả ngày dài.', 100, '2023-11-18 15:07:13', 1),
(60, 3, 'Detransprirant Intensif 72H Transpiration Excessive + Thermal Spa Water', 329000, 660000, 0, 'Lăn Khử Mùi Vichy Diệt Khuẩn Detranspirant Intensif 72H 50ml là dòng khử mùi cho nữ đến từ thương hiệu mỹ phẩm Vichy của Pháp có công dụng khử mùi cực mạnh lên đến 72 giờ đồng hồ, với đặc điểm không mùi, không gây vàng áo. Giúp bạn kiểm soát lượng mồ hôi thừa của cơ thể, ngăn mùi khó chịu, đặc biệt ở vùng nách, tạo cảm giác thoải mái, thông thoáng suốt nhiều giờ.', 100, '2023-11-18 15:07:13', 1),
(61, 4, 'Nước Hoa Nữ Cacharel Noa Edt Vaporisateur Spray', 1038000, 1250000, 0, 'Cacharel Noa Edt Vaporisateur Spray của nhà chế tạo nước hoa Olivier Cresp được ví như tiểu hành tinh có nhiều ý nghĩa khác nhau. Noa là “linh hồn” trong tiếng Hy Lạp, là “hòa bình” trong tiếng Do Thái & là “Tri Thức” trong tiếng Anh.', 100, '2023-11-18 14:56:49', 1),
(62, 4, 'Nước Hoa Nữ Versace Bright Crystal Absolu Edp Spray', 1483000, 1854000, 0, 'Bright Crystal Absolu là mùi hương đặc biệt của Versace được nâng cấp từ phiên bản Bright Crystal trước đó. Hương thơm ngọt ngào quyến rũ mê hoặc của Bright Crystal Absolu thu hút mọi ánh nhìn.', 100, '2023-11-18 14:56:49', 1),
(63, 4, 'Nước Hoa Nữ Versace Yellow Diamond Edt Spray 90ml', 1590000, 2200000, 0, 'Nước hoa Versace Yellow Diamond là hương thơm tươi mát, tinh khiết, quyến rũ toát lên vẻ sang trọng, quý phái cho phái nữ. Thiết kế hình dáng chai mô phỏng viên kim cương cực kỳ ấn tượng và độc đáo.', 100, '2023-11-18 15:01:15', 1),
(64, 4, 'Nước Hoa Nam Gota Perfumed For Men 50Ml', 650000, 820000, 0, 'Gota là một thương hiệu nước hoa dành cho những bạn nam trẻ trung, năng động, đầy cá tính và hiện đại. Dòng nước hoa Gota bao gồm 4 mùi hương dành cho các chàng trai trẻ, mỗi mùi hương là mỗi cá tính và phong cách khác nhau.', 100, '2023-11-18 15:01:15', 1),
(65, 4, 'Nước Hoa Nam Versace Eros Edt Spray 100ml', 2558000, 2759000, 0, 'Nước hoa Versace Eros Edt Spray lấy cảm hứng từ câu chuyện Thần Thoại Hy Lạp được truyền cảm hứng và lấy tên Versace Eros. Chai nước hoa thể hiện cảm xúc đầy nam tính, quyến rũ của các loại thảo mộc.', 100, '2023-11-18 15:03:05', 1),
(66, 4, 'Nước Hoa Hồng Chống Lão Hóa Laneige Perfect Renew Youth Skin Refiner 120Ml', 280000, 388000, 0, 'Công dụng chính là cấp ẩm chuyên sâu, ngăn ngừa lão hóa mang lại làn da mềm mịn, săn chắc và trẻ trung bất chấp độ tuổi, Chiết xuất rễ hoa gừng, quả Acai Berry và sơ ri.', 100, '2023-11-18 15:03:05', 1),
(67, 4, 'Nước Hoa Nữ Ngọt Ngào Anna Sui Sky Edt Spray 75ml', 111000, 148000, 0, 'Nước hoa mang mùi hương trái cây ngọt ngào, kết hợp với các loại quả như cam, hạt tiêu hồng, bỏng ngô và vani tạo sức hút khó cưỡng lại giúp hội chị em thêm phần tự tin. Nếu đang tìm kiếm sự nhẹ nhàng và đầy lãng mạn, nước hoa Anna Sui Sky Edt Spray sẽ là sự lựa chọn tuyệt vời dành cho bạn.', 100, '2023-11-18 15:05:03', 1),
(68, 4, 'Nước Hoa Nam Azzaro Chrome Extreme EDP Vaporisateur spray', 1118000, 1368000, 0, 'Azzaro Chrome Extreme được ra mắt vào năm 2020, hương thơm như chuyến trải nghiệm khám phá đại dương sâu thẳm, mênh mông. Nó mang đến một cảm giác vô cùng tươi mới, sảng khoái nhưng cũng vô cùng bí ẩn của đại dương.', 100, '2023-11-18 15:05:03', 1),
(69, 4, 'Nước Hoa Dành Cho Nữ Calvin Klein Euphoria Eau De Parfum', 2262000, 2640000, 0, 'Nước hoa cho nữ giới với nhóm hương Oriental Floral (hoa cỏ phương Đông) mang lại làn hương đầy bí ẩn, quyến rũ. Euphoria có mùi hương tươi sáng và ngọt ngào nhờ vào những nốt hương trái cây và hoa cỏ góp mặt trong chai nước hoa. Sản phẩm được giới chuyên môn nhận định là mùi hương quyến rũ, huyền bí, gợi cảm đầy thu hút.', 100, '2023-11-18 15:07:13', 1),
(70, 4, 'Nước Hoa Nam Ralph Lauren Polo Deep Blue Parfum Spray Vaporisateur 125ml', 2400000, 3020000, 0, 'Ralph Lauren Polo Deep Blue là chai nước hoa mang hương thơm tương phản giữa “deep” và “blue” đầy thú vị, ấn tượng. Bước vào nốt hương đầu tiên là sự tươi mát kết hợp với cam quýt và xoài xanh Hawaii. Năng lượng ấy càng mạnh mẽ hơn dưới sự xuất hiện của CristalFizz™ - một thành phần thủy sinh độc quyền giúp tăng cường sự tươi mát.', 100, '2023-11-18 15:07:13', 1),
(71, 6, 'Dầu Gội Bưởi Cocoon Pomelo Shampoo 310ml', 500000, 450000, 0, 'Tinh dầu bưởi: chứa hàm lượng limonene rất cao giúp ức chế mạnh mẽ enzyme 5-alpha reductase gây ra tình trạng rụng tóc, có tính kháng khuẩn cao giúp hạn chế tình trạng gàu.', 100, '2023-11-20 00:00:00', 1),
(72, 6, 'Dầu Gội Khô Tsubaki Dry Shampoo 180ml', 600000, 550000, 0, 'Dầu gội khô Tsubaki Dry Shampoo cho mái tóc luôn bồng bềnh như mới được gội trong cả ngày. Cảm giác sảng khoái như sau khi gội đầu sẽ giúp bạn gạt bỏ mệt mỏi sau giờ làm việc căng thẳng.', 100, '2023-11-20 00:00:00', 1),
(73, 6, 'Dầu Gội Dưỡng Ẩm Pantene Shampoo Moisture Renewal', 700000, 650000, 0, 'Dầu gội Pantene Shampoo Moisture Renewal chứa thành phần dưỡng ẩm vượt trội nhất hiện nay. Với công dụng cung cấp, duy trì độ ẩm mang đến làn da mềm mại, óng ả như mong muốn.', 100, '2023-11-20 00:00:00', 1),
(74, 6, 'Dầu Gội Trị Gàu Cho Da Đầu Dầu Vichy Dercos Anti- Dandruff Oily Hair 200Ml', 800000, 750000, 0, 'Sở hữu phức hợp Anti-sebum giúp kiểm soát tuyến bã nhờn ,làm sạch da đầu, đặc biệt là da đầu nhiều dầu ,kiểm soát dầu tiết ra giúp duy trì mái tóc sạch sẽ, không bết nhờn ,đồng thời tăng độ dày của tóc', 100, '2023-11-20 00:00:00', 1),
(75, 6, 'Dầu Gội & Xả Tóc Dày, Bồng Bềnh Pantene Shampoo & Conditioner 2In1 Sheer Volume', 900000, 850000, 0, 'Uốn, nhuộm, sử dụng nhiệt nhiều khiến mái tóc hư tổn, mất đi độ đàn hồi nhất định. Vậy làm cách nào để giải quyết vấn đề nan giải này? Hãy cùng tìm hiểu ngay Pantene Shampoo & Conditioner 2IN1 Sheer Volume với công thức Sheer Volume Pro-V giúp làm dày, cung cấp ẩm, bảo vệ tóc trước tác nhân gây hại như tia cực tím, khói bụi, nhiệt độ... Đặc biệt dầu gội giữ được nếp khá lâu, hạn chế tiết dầu nhờn giúp tóc không bị bết dính.', 100, '2023-11-20 00:00:00', 1),
(76, 6, 'Dầu Gội Dưỡng Tóc Suôn Mượt Loreal Paris Shampoo Extraordinary Oil Sleek 440ml', 1000000, 950000, 0, '100% tinh dầu gỗ tuyết tùng (từ Pháp) giàu chất dưỡng ẩm cùng khả năng phục hồi hư tổn cho các tế bào ở mô tóc, nuôi dưỡng tóc suôn mượt, vào nếp.', 100, '2023-11-20 00:00:00', 1),
(77, 6, 'Dầu Gội Gừng Hà Thủ Ô Kích Mọc Tóc Weilaiya Zingiber Officinale Juice Shampoo 400Ml', 1100000, 1050000, 0, 'Dầu gội gừng hà thủ ô Weilaiya chứa chiết xuất từ gừng tươi, tinh chất hà thủ ô và các loại thảo mộc tự nhiên giúp làm sạch tóc và da đầu, loại bỏ gàu. Đồng thời dầu gội còn có tác dụng hỗ trợ lưu thông máu da đầu, tăng cường dinh dưỡng nuôi dưỡng nang tóc, giúp tóc phục hồi chắc khoẻ, giảm gãy rụng chỉ sau 1 lần gội. Ngoài ra tinh chất hà thủ ô có khả năng kích thích tóc mọc mới, giúp tóc đen nhánh, bóng mượt.', 100, '2023-11-20 00:00:00', 1),
(78, 6, 'Dầu Gội & Xả Dành Cho Nam Giới Head & Shouders Male Shampoo & Conditioner 2In1 Old Spice Pure Sport', 1200000, 1150000, 0, 'Head & Shouder là thương hiệu dầu gội trị gàu nổi tiếng có nguồn gốc từ Mỹ. Sản phẩm được đánh giá cao về chất lượng từ thành phần đến công dụng. Không chỉ loại bỏ bụi bẩn giúp mái tóc sạch sẽ, mà còn hỗ trợ điều trị các vấn đề về da đầu như nấm, gàu, ngứa rát gây khó chịu bằng thành phần ưu việt Zinc Pyrithione (ZPT) 1%. Nếu bạn đang gặp phải những tình trạng trên, đây sẽ là giải pháp tuyệt vời cho bạn.', 100, '2023-11-20 00:00:00', 1),
(79, 6, 'Dầu Gội Tsubaki Phục Hồi Ngăn Rụng Tóc 490ml\r\nPremium Volume & Repair Shampoo', 1300000, 1250000, 0, 'TSUBAKI Premium Shampoo là dòng sản phẩm dầu gội cao cấp của thương hiệu TSUBAKI (thuộc tập đoàn Shiseido Nhật Bản), được ứng dụng công nghệ thẩm thấu độc quyền của Shiseido giúp dưỡng chất hấp thu nhanh và sâu vào trong lõi tóc, nuôi dưỡng cho mái tóc khỏe mạnh và bóng mượt như vừa được dưỡng tại Salon Nhật về chỉ với \"0 giây chờ đợi\"!', 100, '2023-11-20 00:00:00', 1),
(80, 6, 'Bộ Gội Xả TRESemmé Keratin Vào Nếp Suôn Mượt 640g+620g\r\nKeratin Smooth Shampoo & Conditioner', 1400000, 1350000, 0, 'Combo TRESemmé Keratin Smooth Vào Nếp Mượt Mà: Dầu Gội 640g + Dầu Xả 620g là dòng chăm sóc tóc mới của thương hiệu TRESemmé. Với nồng độ sulfate thấp, sản phẩm dầu gội + dầu xả TRESemmé Keratin Smooth  dành riêng cho tóc xơ rối không thể vào nếp.  Công thức chứa tinh dầu Argan từ vùng Morocco và keratin giúp nuôi dưỡng từng sợi tóc, mang lại 5 hiệu quả sau: Tóc vào nếp - Bóng Mượt - Mềm Mại - Giảm xơ - Gỡ Rối ngay sau khi sử dụng. ', 100, '2023-11-20 00:00:00', 1),
(81, 7, 'Kem Chống Nắng Nâng Tông Da CNP Laboratory Tone-Up Protection Sun Spf42 Pa+++ 50Ml', 286000, 300000, 0, 'CNP Laboratory Tone-Up Protection Sun SPF42 PA+++ là kem chống nắng vật lý lai hóa học có chỉ số chống nắng SPF42 PA++++ phù hợp với người làm văn phòng, ở trong môi trường có bóng mát. Sản phẩm được nghiên cứu dành cho mọi loại da, thành phẩn được điều chế ở liều lượng an toàn, phù hợp cho làn da yếu, nhạy cảm.', 100, '2023-11-20 00:00:00', 1),
(82, 7, 'Kem Nền Nâng Tông Da, Chống Nắng Klairs Illuminating Supple Blemish Cream Spf40 Pa++ 40Ml', 279000, 319000, 0, 'Sodium Hyaluronate: hoạt chất có thể cấp nước ở các tầng biểu bì của da, giúp da ngậm nước, căng mọng, niacinamide: Giúp làm mờ đốm nâu, làm sáng đều màu da, chiết xuất nha đam: cấp nước dưỡng ẩm, làm dịu da.', 100, '2023-11-20 00:00:00', 1),
(83, 7, 'Sữa Chống Nắng Ngừa Mụn Sunplay Skin Aqua Acne Clear Milk 25G', 127000, 156000, 0, 'Sữa chống nắng Sunplay có khả năng chống nắng mạnh mẽ, bền lâu giúp bảo vệ da tối ưu dưới ánh nắng trong nhiều giờ liền. Ngoài ra, sản phẩm cấp giữ ẩm, kiểm soát dầu và ngăn ngừa mụn phát triển.', 100, '2023-11-20 00:00:00', 1),
(84, 7, 'Kem Chống Nắng Hằng Ngày Cancer Council Everyday Sunscreen Spf50 110Ml', 89000, 120000, 0, 'Với chỉ số chống nắng phổ rộng SPF50+ giúp bảo vệ da trước tác động của tia UVA, UVBNgăn ngừa da cháy nắng, sạm nám, xuất hiện đồi mồi và lão hóa sớmKhả năng chống nước đến 4hKết cấu sản phẩm mỏng nhẹ, không gây tắc lỗ chân lông thích hợp cho mọi loại da, kể cả da dầu nhạy cảm', 100, '2023-11-20 00:00:00', 1);
INSERT INTO `sanpham` (`masp`, `maloai`, `ten_sp`, `gia_tien`, `gia_goc`, `so_luot_xem`, `mo_ta`, `so_luong`, `ngay_nhap`, `an_hien`) VALUES
(85, 7, 'Kem Chống Nắng Bảo Vệ Da Toàn Diện Altruist Sunscreen Spf50 Uva 100Ml', 200000, 245000, 0, 'Altruist là thương hiệu mỹ phẩm, làm đẹp có xuất xứ từ Anh, được bác sĩ da liễu Andrew và nhà kinh tế học David sáng lập. Mục tiêu đặt ra của thương hiệu ngay từ những ngày đầu ra mắt là giảm tỷ lệ ung thư da, tăng cường sức khỏe làn da chỉ trong một loại kem chống nắng. Đặc biệt sứ mệnh của thương hiệu là mang đến những sản phẩm an toàn, lành tính, phù hợp với mọi loại da, kể cả da nhạy cảm', 100, '2023-11-20 00:00:00', 1),
(86, 7, 'Kem Chống Nắng Chống Lão Hóa Và Dưỡng Sáng Da Astalift D-Uv Clear Aqua Day Serum Spf 50+ Pa++++ 30G', 350000, 380000, 0, 'Với công nghệ độc quyền D-UV Guard giúp chống nắng suốt 8 giờ liên tục, giảm thiểu sự biến đổi màu sắc, hiện tượng cháy da. Bên cạnh đó còn ngăn ngừa lão hóa, chống chảy xệ, đẩy lùi thâm nám, đốm nâu mang lại làn da trẻ khỏe, sáng hồng tự nhiên.', 100, '2023-11-20 00:00:00', 1),
(87, 7, 'Kem Chống Nắng Hiệu Chỉnh Da Belif Uv Protector Multi Sunscreen Spf50+ Pa++++ 50Ml', 125000, 160000, 1, 'Kem chống nắng Belif UV Protector Multi Sunscreen SPF50+ PA++++ được thiết kế dưới dạng lotion, vừa bảo vệ da, vừa hiệu chỉnh tông da phù hợp. Sản phẩm có kết cấu kem mỏng nhẹ, thấm đều trên da, không gây vệt trắng và có thể sử dụng làm lớp nền trang điểm tiện lợi.', 100, '2023-11-20 00:00:00', 1),
(88, 7, 'Kem Chống Nắng Làm Sáng Da Dr.G Brightening Up Sun+ Spf50+ Pa+++ 50ml', 365000, 390000, 0, 'Làn da là bộ phận đầu tiên trên cơ thể phải chống chọi với ánh nắng gay gắt. Nếu không bảo vệ cẩn thận sẽ gây ra các tình trạng như cháy nắng, bỏng rát, tổn thương. Thậm chí còn có thể gây ra ung thư da. Vì vậy kem chống nắng ra đời như “vị cứu tinh” cho những làn da đang phải chịu tổn thương mỗi ngày. ', 100, '2023-11-20 00:00:00', 1),
(89, 7, 'Kem Chống Nắng Cho Da Tối Màu Ohui Day Shield Perfect Sun Black Spf50+ 50Ml', 90000, 129000, 0, 'Day Shield là dòng sản phẩm chống nắng đa dạng với các thành phần tự nhiên giúp bảo vệ da an toàn cho mọi đối tượng.', 100, '2023-11-20 00:00:00', 1),
(90, 7, 'Kem Chống Nắng Keo Ong Cho Da Khô CNP Propolis Moisture Sun SPF50+ PA++++ 50ml', 126000, 155000, 0, 'CNP Propolis là dòng sản phầm có thành phần chính từ keo ong, tập trung cải thiện làn da có dấu hiệu lão hóa. Trong đó, kem chống nắng CNP Propolis Moisture Sun là sản phẩm chống nắng hóa học có khả năng chống nắng mạnh mẽ, vừa bảo vệ da vừa tăng cường cấp ẩm giúp da khỏe khoắn hơn.', 100, '2023-11-20 00:00:00', 1),
(91, 8, 'Nước Tẩy Trang Trị Mụn Làm Trắng Da Eucerin Proacne Micellar Water 200Ml', 378000, 600000, 0, 'Loại bỏ dầu nhờn thừa trên da, giúp da thông thoáng, làm sạch sâu lớp trang điểm, kể cả cặn trang điểm không nhìn thấy được bằng mắt thường\r\nGiúp giảm mụn, ngừa mụn và thu nhỏ lỗ chân lông sau 4 tuần', 100, '2023-11-20 00:00:00', 1),
(92, 8, 'Dầu Tẩy Trang Bioré Makeup Remover Perfect Oil 150Ml', 600000, 700000, 0, 'Dầu Tẩy Trang Bioré Make Up Remover Perfect Oil dễ dàng cuốn sạch mọi lớp trang điểm kể cả makeup lâu trôi như mascara, kẻ mắt không trôi một cách nhanh chóng, giúp mang đến làn da thoáng sạch và mềm mịn ngay tức thì.', 100, '2023-11-20 00:00:00', 1),
(93, 8, 'Dầu Tẩy Trang Hoa Hồng Cocoon Rose Cleansing Oil 140Ml', 700000, 800000, 0, 'Dầu tẩy trang chiết xuất từ hoa hồng giúp làm sạch lớp trang điểm cứng đầu một cách dịu nhẹ, đồng thời hòa tan & cuốn trôi dầu thừa, bụi bẩn cho làn da sạch mịn.', 100, '2023-11-20 00:00:00', 1),
(94, 8, 'Nước Tẩy Trang Bí Đao Cocoon Winter Melon Micellar Water 500Ml', 800000, 900000, 0, 'Chăm sóc làn da dầu mụn chưa bao giờ là cuộc chiến dễ dàng đối với rất nhiều người, đặc biệt là dân thành thị sinh hoạt ở môi trường nhiều khói bụi và ô nhiễm nặng như hiện nay. Đối với Cocoon, việc làm sạch luôn là bước quan trọng nhất, vì thế chúng tôi không ngừng đầu tư và nghiên cứu vào các sản phẩm làm sạch đáp ứng những tiêu chí khắc khe trong việc chăm sóc da mụn: SẠCH SÂU - DỊU NHẸ - THOÁNG DA KHÔNG GÂY MỤN ẨN - KIỂM SOÁT DẦU.', 100, '2023-11-20 00:00:00', 1),
(95, 8, 'Nước Tẩy Trang Hoa Hồng Cocoon Rose Micellar Water 500Ml', 900000, 1000000, 0, 'Phát huy khả năng ưu việt của nước cất hoa hồng hữu cơ tinh khiết kết hợp với công nghệ Micellar, Nước Tẩy Trang Hoa Hồng COCOON ROSE MICELLAR WATER phiên bản nâng cấp được cải tiến đem đến những ưu điểm vượt trội so với phiên bản hiện tại, giúp làm sạch sâu hơn lớp trang điểm, bụi bẩn và dịu nhẹ hơn, đồng thời cung cấp độ ẩm, mang lại làn da sạch và mịn màng.', 100, '2023-11-20 00:00:00', 1),
(96, 8, 'Dầu Tẩy Trang Làm Sạch Sâu Klairs Gentle Black Deep Cleansing Oil 150Ml', 1000000, 1100000, 0, 'Phức hợp chiết xuất Hạt Jojoba, Mè đen, quả Lý chua đen, Đậu đen: giàu khoáng chất có khả năng làm sạch tự nhiên, cung cấp độ ẩm và chống oxy hóa cho da.', 100, '2023-11-20 00:00:00', 1),
(97, 8, 'Dầu Tẩy Trang Sạch Sâu Senka A.L.L. Clear Oil 230Ml', 1100000, 1200000, 0, 'Dầu tẩy trang có thể hòa tan cặn trang điểm, đặc biệt những sản phẩm khó trôi như mascara & son lì; đồng thời làm sạch bụi bẩn nằm sâu trong lỗ chân lông', 100, '2023-11-20 00:00:00', 1),
(98, 8, 'Nước Tẩy Trang Làm Dịu Da Dr.G Ph Cleansing Water 490ml', 1200000, 1300000, 0, 'CTẩy sạch bụi bẩn, lớp trang điểm cứng đầu và dầu nhờn giúp da sạch khỏe, tăng cường hàng rào ẩm tự nhiên mang lại làn da mềm mại, khỏe khoắn. ', 100, '2023-11-20 00:00:00', 1),
(99, 8, 'Dung Dịch Làm Sạch Và Tẩy Trang Cho Da Nhạy Cảm Bioderma Sensibio H2O 500Ml', 1300000, 1400000, 0, 'Bioderma là hãng dược mỹ phẩm nổi tiếng của Pháp chuyên chăm sóc da nhạy cảm, tổn thương. Các sản phẩm của thương hiệu mang sứ mệnh an toàn cho da với tính năng dịu nhẹ, lành tính. Trong đó nổi bật nhất là dung dịch tẩy trang dành cho da nhạy cảm Bioderma Sensibio H2O. Đây là sản phẩm hứa hẹn loại bỏ bụi bẩn, bã nhờn trên da trả lại cho bạn làn da sạch sẽ, khỏe mạnh.', 100, '2023-11-20 00:00:00', 1),
(100, 8, 'Sữa Tẩy Trang Hạnh Nhân Dưỡng Ẩm Caudalie Vinoclean Cleansing Almond Milk 400Ml', 1400000, 1500000, 0, 'Hỗn hợp hữu cơ (dầu hạnh nhân, dầu hạt jojoba, dầu bơ hạt mỡ, nước hoa ngô và polyphenols): giúp chống oxy hóa, làm dịu da đồng thời nuôi dưỡng da mềm mại, bảo vệ da khỏi tình trạng khô căng do mất nước.', 100, '2023-11-20 00:00:00', 1),
(101, 10, 'Kem Dưỡng Trắng Da Hada Labo Perfect White Cream 50G', 500000, 600000, 0, 'Arbutin: có tác dụng ức chế tích tụ melanin giúp làm sáng da, mờ các vùng da sạm nám.\r\nHỗn hợp vitamin C & E: chống oxy hóa, làm sáng đều màu da.\r\nHyaluronic acid: tăng cường độ ẩm, dưỡng da trong mướt.\r\nChiết xuất hạt Ý Dĩ : giúp dưỡng ẩm và sáng da, giảm viêm, ngừa lão hóa.', 100, '2023-11-20 00:00:00', 1),
(102, 10, 'Kem Dưỡng Ẩm Ban Đêm Astalift Night Charge Cream S 30G', 600000, 700000, 0, 'Bổ sung độ ẩm vượt trội, tăng cường hàng rào ẩm bảo vệ da vào ban đêm mang lại làn da căng mướt.', 100, '2023-11-20 00:00:00', 1),
(103, 10, 'Kem Dưỡng Tay Và Móng Caudalie Hand And Nail Cream 75Ml', 700000, 800000, 0, 'Kem dưỡng tập trung cấp giữ ẩm cho da tay, chăm sóc móng tay chắc khỏe, dẻo dai, chống oxy hóa với thành phần polyphenols giúp da tay thêm mềm mại, phục hồi da tay thô sần, bong tróc với tinh dầu bơ hạt mỡ, đôi tay được chăm sóc, bảo vệ mỗi ngày', 100, '2023-11-20 00:00:00', 1),
(104, 10, 'Bộ Dưỡng Da Nuxe (Kem Dưỡng Tay 50ml + Sáp Dưỡng Môi 15g + Dầu Dưỡng 10ml)', 800000, 900000, 0, 'Bộ dưỡng da Nuxe đa năng gồm 3 sản phẩm gồm kem dưỡng da tay, sáp dưỡng môi và dầu dưỡng giúp chăm sóc toàn diện cho làn da luôn khỏe khoắn, rạng rỡ.', 100, '2023-11-20 00:00:00', 1),
(105, 10, 'Kem Dưỡng Giảm Mụn, Kiềm Dầu Svr Sebiaclear Active 40Ml', 900000, 1000000, 0, 'Kem dưỡng SVR Sebiaclear Active đem lại hiệu quả giảm mụn và mờ thâm trong 7 ngày. Sản phẩm an toàn và hiệu quả trên cả các nốt mụn và mụn đầu đen.', 100, '2023-11-20 00:00:00', 1),
(106, 10, 'Kem Dưỡng Giảm Mụn & Thâm Mụn Bioderma Sébium Kerato+ 30ml', 1000000, 1100000, 0, 'Kem dưỡng giảm mụn và thâm mụn Bioderma Sébium Kerato+ được cải tiến của BIODERMA dành cho những làn da dễ nổi mụn trứng cá giúp mang lại kết quả nhanh chóng và lâu dài. Đồng thời, sử dụng công nghệ được cấp bằng sáng chế Fluidactiv™ và bộ đôi hoạt chất độc đáo (axit salicylic + este axit malic), Kerato+ có tác dụng nhanh chóng chống lại các vết thâm mà không làm khô hay kích ứng da. ', 100, '2023-11-20 00:00:00', 1),
(107, 10, 'Kem Dưỡng Ẩm Làm Dịu Da Klairs Midnight Blue Calming Cream', 1100000, 1200000, 0, 'Midnight Blue là dòng sản phẩm phục hồi chuyên sâu và cấp ẩm, làm dịu da của Klairs. Klairs Midnight Blue Calming Cream là kem dưỡng ẩm có khả năng làm dịu da kích ứng, da mới điều trị mụn với các thành phần từ rau má, cúc la mã.', 100, '2023-11-20 00:00:00', 1),
(108, 10, 'Kem Dưỡng Thể Paula\'s Choice Skin Revealing Body Lotion 10% Aha 210ml', 1200000, 1300000, 0, 'Kem dưỡng thể Resist skin Revealing Body Lotion 10% AHA là loại kem dưỡng tẩy tế bào chết nhẹ dịu cho da hoàn toàn không mài mòn, nhẹ nhàng để loại bỏ các lớp da chết tích tụ, mang lại làn da mịn màng, tươi trẻ rạng rỡ. Sản phẩm dưỡng ẩm tuyệt vời và mềm mịn làn da.', 100, '2023-11-20 00:00:00', 1),
(109, 10, 'Kem Dưỡng Mắt Chống Lão Hóa Laneige Perfect Renew Youth R. Eye Cream 20Ml', 1300000, 1400000, 0, 'Bạn cảm thấy mình già hơn khi chụp những bức ảnh selfie. Thấy những nếp nhăn đã dần hình thành ở khóe mắt. Kem dưỡng mắt với thành phần cao cấp của nhà Laneige sẽ là sự lựa chọn hoàn hảo, là giải pháp chăm sóc vùng da quanh mắt giúp bạn trông trẻ trung và rạng rỡ hơn.', 100, '2023-11-20 00:00:00', 1),
(110, 10, 'Kem Dưỡng Ẩm, Kiểm Soát Nhờn, Ngừa Mụn Eucerin Proacne Matt Fluid 50Ml', 1400000, 1500000, 0, 'Nhờ Salicylic Acid, Licochalcone A và Decandiol là các thành phần chuyên biệt cho da mụn, sản phẩm được chứng minh lâm sàng và kiểm chứng bởi nhiều người tiêu dùng về hiệu quả vượt trội cho da mụn.', 100, '2023-11-20 00:00:00', 1),
(111, 11, 'Mặt Nạ Giấy INNISFREE Squeeze Energy Mask', 200000, 220000, 0, 'Dạng giấy cellulose êm dịu, làm tính cho da.Được chiết xuất từ các thành phần hoa quả, cây lá tự nhiên giàu dưỡng chất,Giúp chăm sóc các vấn đề da hiệu quả như da khô, tối màu, da yếu, thiếu sức sống...Thiết kế mặt nạ ôm sát da, mỏng nhẹ, giàu dưỡng chất', 100, '2023-11-21 18:14:20', 1),
(112, 11, 'Mặt Nạ Dưỡng Da JMsolution Selfie Mask 30ml', 100000, 1200000, 0, 'Mặt nạ dưỡng da vùng mắt được làm từ nước dừa tươi lên men dưới dạng thạch trong suốt giúp định hình mặt nạ trên da. Sản phẩm giúp làm mát dịu vùng da mắt mệt mỏi, dưỡng da căng mịn, tăng độ đàn hồi, hạn chế nếp nhăn và vết chân chim.', 100, '2023-11-21 18:14:20', 1),
(113, 11, 'Mặt Nạ Dưỡng Da Jmsolution Water Luminous Mask', 120000, 1000000, 0, 'Mặt Nạ JMSolution Luminous là dòng sản phẩm mặt nạ giấy chăm sóc làn da toàn diện đến từ thương hiệu mỹ phẩm nội địa HànQuốcJMSolution. Được chiết xuất từ các thành phần hoàn toàn thiên nhiên mang đến hiệu quả chăm sóc từng vấn đề cụ thể của làn da. Đồng thời, mặt nạ được sử dụng chất liêu cực kỳ mềm mại êm ái dễ chịu cho cả làn da nhạy cảm', 100, '2023-11-21 18:50:35', 1),
(114, 11, 'Mặt Nạ Tinh Chất Garnier Serum Mask 23G', 100000, 900000, 0, 'Công dụng chính: mặt nạ tinh chất Garnier serum mask được chiết xuất từ những thành phần thiên nhiên giúp chăm sóc và cải thiện tối ưu những tình trạng mà da gặp phải.Cung cấp đổ ẩm cho da tức thì, cho bạn làn da căng bóng, khỏemạnh.Tăng độ đàn hồi và trẻ hóa làn da, cải thiện vết nhăn và đẩy lùi mọi dấu hiệu lão hóa', 100, '2023-11-21 18:50:35', 1),
(115, 11, 'Mặt Nạ Bí Đao Cocoon Winter Melon Face Mask', 200000, 300000, 0, 'Mặt nạ bí đao giúp giảm nhờn, thông thoáng lỗ chân lông góp phần cải thiện tình trạng da mụn, ửng đỏ trở nên sạch mịn.Sử dụng trước khi trang điểm để giúp lớp trang điểm căng bóng và lâu trôi hơn.Cung cấp đổ ẩm cho da tức thì, cho bạn làn da căng bóng, khỏe mạnh.', 100, '2023-11-21 19:01:07', 1),
(116, 11, 'Mặt Nạ Giấy Làm Dịu Da Peripera Calming Time Mask Sheet', 100000, 300000, 0, 'Mặt nạ giấy mang lại độ ẩm nhất định và cung cấp đầy đủ chất dinh dưỡng từ chiết xuất thảo mộc, mang lại một làn da tươi mới, giàu dưỡng chất.\r\nPhân tử Micellar lấy sạch bụi bẩn sâu bên trong lỗ chân lông mà không cần chà xát,Làm sạch da nhanh chóng, loại bỏ dầu thừa, bã nhờn tích tụ giúp lỗ chân lông thông thoáng.', 100, '2023-11-21 19:01:07', 1),
(117, 11, 'Mặt Nạ Dưỡng Da Bnbg Vita Cocktail Aqua Foil Mask 30Ml', 14222, 17444, 0, 'Công dụng chính: Tăng cường nuôi dưỡng da khỏe mạnh, ẩm mượt giúp duy trì sự trẻ trung, tươi tắn hoàn hảo.Thành phần chính: chiết xuất từ thiên nhiên.Mặt nạ cung cấp độ ẩm cao mà không gây bết dính, giúp dưỡng ẩm tối ưu và dưỡng sáng làn da. Thành phần chanh và mật ong mang lại sức sống cho da luôn rạng rỡ, trong trẻo.', 100, '2023-11-21 19:09:54', 1),
(118, 11, 'Mặt Nạ Chống Lão Hóa Bnbg Vita Cocktail Age Foil Mask 30Ml', 15222, 17555, 0, 'Công dụng chính: Chống lão hóa, giải quyết các vấn đề về chảy xệ, nếp nhăn xuất hiện trên da.Mặt nạ đem đến hiệu quả nuôi dưỡng, làm mềm da khô, bong tróc và mất nước trở nên khỏe khoắn, mịn màng hơn. Tăng tốc độ làm dịu da tức thì, phục hồi và chữa lành làn da tổn thương.', 100, '2023-11-21 19:09:54', 1),
(119, 11, 'Mặt Nạ Dưỡng Da Từ Sợi Tre Sense Plus Bamboo Tencel Mask 23g', 17222, 18777, 0, 'Dòng mặt nạ từ sợi tre Sense Plus đem lại giải pháp chăm sóc da toàn diện gồm dưỡng ẩm, ngăn ngừa hình thành mụn đồng thời làm sáng đều màu da với các thành phần tự nhiên, lành tính. Mặt nạ sợi tre Sense Plus được làm từ 100% sợi tre tự nhiên với cấu trúc vải mềm mại, mát mịn ôm sát bề mặt da', 100, '2023-11-21 19:17:16', 1),
(120, 11, 'Mặt Nạ Dưỡng Da Săn Chắc Goodal Apricot Collagen Youth Firming Mask 29g', 18222, 19888, 0, 'Thành phần collagen được chứng nhận thuần chay từ quả mơ có cấu trúc mô phỏng cao chiếm 80% tương thích với cấu trúc da người, đồng thời có chứa 3 loại acid (glycine, hydroxyproline, Proline) cho khả năng đi sâu vào tầng biểu bì da, chống oxy hóa mạnh mẽ, cải thiện tối ưu về độ đàn hồi da', 100, '2023-11-21 19:17:16', 1),
(121, 12, 'Serum Chống Oxy Hóa Làm Da Sáng Đều Màu Dành Cho Da Dầu Obagi Professional-C Serum 20% 30Ml\r\n', 152000, 162000, 0, 'Công dụng chính: Serum chống oxy hóa làm sáng da Obagi Professional-C Serum 20% hỗ trợ thúc đẩy tăng sinh collagen, đồng thời ức chế melanin hỗ trợ dưỡng sáng da, cải thiện sạm nám, nếp nhăn, dưỡng da ẩm mượt, tươi tắn và khỏe mạnh mỗi ngày.', 100, '2023-11-22 12:07:51', 1),
(122, 12, 'Tinh Chất Dưỡng Sáng Da Mờ Thâm Garnier Serum Dark Spot', 120000, 140000, 0, 'Công dụng chính: serum dưỡng sáng da mờ thâm với chiết xuất từ cam quýt giúp làn da đều màu, sáng khỏe rạng rỡ. Thành phần: vitamin C,Niacinamide, Axit Salicylic.Làm đều, làm sáng mịn da vượt trội, loại bỏ các vết thâm sạm do mụn,Kết cấu mỏng nhẹ, dễ dàng thẩm thấu nhanh vào da và hấp thụ tối ưu các dưỡng chất.', 100, '2023-11-22 12:07:51', 1),
(123, 12, 'Tinh Chất Dưỡng Sáng Da INNISFREE VitaC Green Tea Enzyme Brightening Serum', 120000, 140000, 0, 'Công dụng chính: Tinh chất INNISFREE VitaC Green Tea Enzyme Brightening Serum làm sáng da, mờ đốm nâu đồng thời tăng độ căng mướt, tươi sáng cho làn da.Khả năng tác động kép giúp chống oxy hóa, làm mờ đốm nâu và sạch tế bào da chết.Cải thiện bề mặt da láng mịn, mềm mại, căng mướt sau 4 tuần sử dụng.', 100, '2023-11-22 12:39:36', 1),
(124, 12, 'Mặt Nạ Dưỡng Da Cathy Doll Serum Mask Sheet 20G', 11100, 12200, 0, 'Công dụng: Mặt nạ Cathy Doll Serum Mask Sheet có nhiều loại với những công dụng khác nhau giúp dưỡng da dần khỏe khoắn, tươi trẻ.Ưu điểm: Mặt Nạ Cathy Doll Vitamin C Dưỡng Sáng Da giúp dưỡng da sáng mịn, mờ thâm sạm, tàn nhang và đốm thâm do mụn. Mặt nạ làm từ chất liệu giấy sợi thực vật an toàn, lành tính, không gây kích ứng cho da.', 100, '2023-11-22 12:39:36', 1),
(125, 12, 'Tinh Chất Cấp Ẩm Căng Mướt Da L\'Oreal Paris Revitalift Hyaluronic Acid Serum', 140000, 150000, 0, 'Revitalift Hyaluronic Acid Serum là giải pháp cấp ẩm cho da căng mướt và khỏe từ bên trong với thành phần chính là hyaluronic acid đậm đặc 1.5%, đem lại khả năng cấp khóa ẩm vượt trội, đủ đầy giúp duy trì làn da căng mọng, mướt mát. Hyaluronic acid: có 2 dạng HA là macro & micro với cấu trúc phân tử siêu nhỏ có thể cấp nước tức thì trên bề mặt da, ngăn ngừa tình trạng mất độ ẩm, đồng thời thấm sâu vào hạ bì giúp làm căng đầy, giảm nếp nhăn và sáng da từ bên trong', 100, '2023-11-22 12:56:22', 1),
(126, 12, 'Tinh Chất Cấp Ẩm Cosrx The Hyaluronic Acid 3 Serum 20ml', 180000, 190000, 0, 'Công dụng chính: Tinh chất Cosrx đem lại hiệu quả dưỡng ẩm tức thì, dưỡng ẩm sâu bên dưới da giúp làm dịu làn da cháy nắng.Tinh chất Cosrx The Hyaluronic Acid 3 Serum đem lại hiệu quả dưỡng ẩm tức thì & sâu bên trong da nhờ khả năng thâm nhập chuyên nghiệp của hoạt chất Hyaluronic acid. Sản phẩm cấp nước giữ ẩm cho làn da, phục hồi da khô thiếu ẩm đồng thời cải thiện kết cấu da mịn màng, căng mướt.', 100, '2023-11-22 12:56:22', 1),
(127, 12, 'Tinh Chất Dưỡng Sáng Da Garnier Skin Naturals Bright Complete Anti - Acne Booster Serum 30Ml', 130000, 160000, 0, 'Công dụng chính: Làm sáng, giảm mờ thâm nám, đốm nâu, vùng da xỉn màu mang lại làn da trắng khỏe và trẻ trung tràn đầy sức sống.Làm sáng da, mờ thâm nám, đốm nâu, cải thiện vùng da không đều màu.Tẩy da chết nhẹ nhàng, loại bỏ bụi bẩn ẩn sâu bên trong lỗ chân lông.Cấp ẩm, xây dựng hàng rào ẩm tự nhiên bảo vệ da khỏi các tác nhân gây hại.', 100, '2023-11-22 13:03:35', 1),
(128, 12, 'Tinh Chất Chống Lão Hóa Ohui Prime Advancer Ampoule Serum 50Ml', 120000, 100000, 0, 'Công dụng chính: Tinh chất chống lão hóa cùng các thành phần Triple Care nhằm giữ vững cốt lõi và tăng cường sức mạnh ban đầu của da trước các tác động môi trường.Serum chứa 78% lượng tinh chất đậm đặc có tác dụng chống lão hóa vượt trội, tăng cường hiệu quả dưỡng da trẻ khỏe:Cải thiện đàn hồi,Tăng độ ẩm,Cải thiện độ trong suốt.', 100, '2023-11-22 13:03:35', 1),
(129, 12, 'Tinh Chất Làm Sáng Da Some By Mi Yuja Niacin Blemish Care Serum 50Ml', 100000, 90000, 0, 'YUJA NIACIN là dòng sản phẩm với thành phần chính từ chiết xuất trái Yuja và Niacinamide giúp dưỡng sáng, cung cấp năng lượng cho làn da tối, xỉn màu mang lại làn da tươi sáng rạng rỡ.Một trong những sản phẩm chủ đạo của YUJA NIACIN phải nhắc đến Tinh chất làm sáng da Some By Mi Yuja Niacin Blemish Care Serum. Sản phẩm cho hiệu quả cải thiện da sáng trắng rõ rệt, với khả năng thâm nhập sâu vào vùng da tối màu, cải thiện sắc tố và làm mờ các vết nám, tàn nhang.', 100, '2023-11-22 13:14:03', 1),
(130, 12, 'Serum Dưỡng Da Kháng Mụn Balance Active Formula Niacinamide Blemish Recovery 15% Serum 30Ml', 500000, 400000, 0, 'Tinh Chất Balance Active Formula Niacinamide 15% Blemish Recovery Serum là sản phẩm serum mới ra mắt từ thương hiệu Balance Active Formula, với dạng lỏng nhẹ như nước và nồng độ 15% Niacinamide - một loại Vitamin B3 tự nhiên giúp giảm dầu thừa, giúp lỗ chân lông được thu nhỏ lại. Đồng thời, làm giảm các nhược điểm trên da và làm mờ vết thâm, giúp cải thiện kết cấu da và khuyến khích làn da khỏe mạnh.', 100, '2023-11-22 13:14:03', 1),
(131, 14, 'Lăn Khử Mùi Vichy Traitement Anti-Transpirant 48H 50ML', 1400000, 1200000, 0, 'Lăn khử mùi Vichy giúp khô thoáng vùng da dưới cánh tay suốt 48h giúp hạn chế và kiểm soát lượng mồ hôi hằng ngày, dưỡng da dưới cánh tay mềm mịn, khô thoáng suốt 48h. Sản phẩm đặc biệt dành cho da nhạy cảm.Sử dụng trên vùng da dưới cánh tay sạch sẽ và khô thoáng. Dùng hằng ngày.Dùng được cho cả nam và nữ.', 100, '2023-11-22 13:30:49', 1),
(132, 14, 'Xịt Ngăn Mùi Toàn Thân Cho Nam Axe Deo Bodyspray 135Ml', 70000, 60000, 0, 'Công dụng: xịt ngăn mùi AXE Deodorant Body Spray dành cho phái mạnh có khả năng khử mùi cơ thể hiệu quả. Ngoài ra, sản phẩm còn mang đến hương thơm nam tính lôi cuốn, cùng khả năng lưu giữ mùi hương suốt 48h, giúp phái mạnh tự tin hơn trong mọi hoạt động.Làn da sử dụng: mọi loại da .Xịt Nước Hoa Toàn Thân AXE có 3 hương thơm.', 100, '2023-11-22 13:30:49', 1),
(133, 14, 'Gel Khử Mùi Giảm Mùi Cơ Thể Etiaxil Deo Anti-Transpirant 48h Roll-on 50ml', 600000, 500000, 0, 'Công dụng chính: Chấm dứt các mùi hôi cơ thể khó chịu, có khả năng trị dứt điểm viêm cánh và kiểm soát mồ hôi dưới cánh tay hiệu quả.Thành phần chính: Chiết xuất thiên nhiên an toàn, phù hợp với làn da nhạy cảm.Aluminum Sesquichlorohydrate: Giảm sản xuất mồ hôi, ngăn việc tiết mồ hôi nhanh chóng, loại bỏ mùi hôi ở vùng da dưới cánh tay.', 100, '2023-11-22 13:39:47', 1),
(134, 14, 'Lăn Khử Mùi Ngăn Mùi Cơ Thể Cho Da Thường Etiaxil Detranspirant Aisselles Normales 15ml', 180000, 150000, 0, 'Công dụng chính: Có khả năng loại bỏ các mùi hôi khó chịu, hỗ trợ tẩy da chết, điều trị dứt điểm tình trạng viêm cánh với hương thơm dễ chịu, giữ vùng nách thông thoáng, thơm mát suốt ngày dài.Thành phần chính: Chiết xuất thiên nhiên, muối nhôm cùng với phức hợp dưỡng da.Thời tiết nắng nóng như hiện nay khiến mồ hôi, mùi cơ thể xuất hiện nhiều hơn khiến bạn kém tự tin, ngại giao tiếp và không thoải mái trong sinh hoạt hàng ngày. Giải pháp hiệu quả nhất để bảo vệ cơ thể khỏi các mùi khó chịu, lăn khử mùi Etiaxil Detranspirant Aisselles Normales là sự lựa chọn hoàn hảo.', 100, '2023-11-22 13:39:47', 1),
(135, 14, 'Lăn Khử Mùi Ngăn Mùi Cơ Thể Dành Cho Da Siêu Nhạy Cảm Etiaxil Detranspirant Aisselles Confort+ 15ml', 150000, 1700000, 0, 'Công dụng chính: Có khả năng loại bỏ các mùi hôi khó chịu, hỗ trợ tẩy da chết, điều trị dứt điểm tình trạng viêm cánh với hương thơm dễ chịu, giữ vùng nách thông thoáng, thơm mát suốt ngày dài.Thành phần chính: Chiết xuất thiên nhiên, muối nhôm cùng với phức hợp dưỡng da.Chứa công thức độc đáo của Etiaxil: Hoạt động với cơ chế tác động trực tiếp và cải thiện hiện tượng đổ mồ hôi ngay từ lần đầu tiên, không chỉ vậy còn giúp trị tình trạng viêm cánh hiệu quả.', 100, '2023-11-23 11:19:46', 1),
(136, 14, 'Gel Khử Mùi Giảm Mùi Cơ Thể Nam Giới Gillette Clear Gel Cool Wave 107g', 120000, 160000, 0, 'Công dụng chính: Đánh bay mùi hôi và tình trạng ẩm ướt dưới cánh tay, giúp hạn chế mùi hôi cơ thể mang lại cảm giác mát lạnh, sảng khoái.Loại da phù hợp: Mọi loại da của nam giới.Làn da dưới cánh tay hay đổ mồ hôi, lúc nào cũng trong tình trạng ẩm ướt khó chịu. Thậm chí còn có mùi hôi khiến bạn không thể tự tin giao tiếp với ai. Đừng quá lo lắng, gel khử mùi Gillette Clear Gel Cool Wave mát lạnh sẽ là giải pháp tuyệt vời nhất trong mùa hè oi bức này.', 100, '2023-11-23 11:19:46', 1),
(137, 14, ' Sáp Khử Mùi Hương Cam Quýt Old Spice Deo Stick Wolfthorn 73G', 150000, 170000, 0, 'Công dụng: nước dưỡng da Payot Radiance-Boosting Toning Lotion chứa 98% chiết xuất từ nguồn gốc tự nhiên giúp giảm khô và tái tạo da. Đồng thời, sản phẩm chứa AHA mang lại hiệu quả thanh tẩy tế bào chết nhẹ dịu cho làn da.Thành phần chính: chứa AHA,Làn da sử dụng: mọi loại daAHA khắc phục các vấn đề da: loại bỏ tế bào chết, chống lão hóa, làm sáng da, ngăn ngừa mụn.', 100, '2023-11-23 11:32:37', 1),
(138, 14, 'Lăn Khử Mùi Mát Lạnh Deonatulle Soft Stone Double Deodorant 20G', 140000, 170000, 0, 'Công dụng chính: Ngăn mùi hôi dưới cánh tay gấp 2 lần phiên bản thường, giảm thiểu tiết mồ hôi, dầu nhờn và se khít lỗ chân lông hoàn hảo.Thành phần chính: Chiết xuất trà xanh, đá khoáng Alum, vitamin E, O-Cymen-5-Ol.Đối tượng sử dụng: Phù hợp với người có mùi hôi cơ thể siêu nặng.', 100, '2023-11-23 11:32:37', 1),
(139, 14, 'Gel Khử Mùi Secret Clear Gel Completely Clean 73g', 200000, 400000, 0, 'Công dụng chính: Ngăn mùi, hạn chế tiết mồ hôi dưới vùng cánh tay tạo cảm giác khô thoáng, thoải mái.Thành phần chính: Chiết xuất từ thiên nhiên.Loại da phù hợp: Mọi loại daGel khử mùi Secret Clear gel dành cho nữ với mùi hương dễ chịu, nhẹ nhàng. Được sản xuất với công nghệ hiện đại Xtend giúp đánh bay mùi hôi cơ thể, không gây ố vàng trên quần áo. Đặc biệt là tạo cảm giác thông thoáng, thoải mái dù hoạt động dưới thời tiết nắng nóng.', 100, '2023-11-23 11:43:11', 1),
(140, 14, 'Xịt Ngăn Mùi Khử Mồ Hôi Vượt Trội Perspi-Guard Maximum Strength Antiperspirant', 80000, 100000, 0, 'Xịt Ngăn Mồ Hôi Toàn Thân Perspi-Guard Hiệu Quả Tối Ưu là dòng xịt khử mùi đến từ thương hiệu chăm sóc cơ thể Perspi-Guard của Anh Quốc, là sản phẩm tối ưu dành cho đối tượng thường xuyên tiết mồ hôi nhiều với khả năng ngăn ngừa mồ hôi vượt trội từ 3 đến 5 ngày. Xịt khử mùi không gây kích ứng, an toàn với mọi loại da bên cạnh đó sản phẩm được thiết kế dạng xịt tiện lợi khi sử dụng, đảm bảo vệ sinh an toàn cho làn da.Hiện sản phẩm Xịt Ngăn Mồ Hôi Toàn Thân Perspi-Guard Maximum Strength Antiperspirant đã có mặt tại Hasaki với 2 dung tích: 30ml & 50ml', 100, '2023-11-23 11:43:11', 1),
(141, 15, 'Tẩy Tế Bào Chết Ngăn Ngừa Mụn Eucerin Proacne Scrub 100Ml', 360000, 380000, 0, 'Eucerin ProAcne Scrub là sản phẩm tẩy tế bào chết không chứa dầu, kết hợp Lactic Acid giúp giảm mụn mà không làm khô da. Sản phẩm phù hợp cho mặt và toàn thân, giúp làm sạch nhẹ dịu, giảm các tác nhân gây mụn đầu trắng và mụn đầu đen, đồng thời loại bỏ căn trang điểm hiệu quả. Da sẽ trở nên mịn màng và mềm mại hơn. Sản phẩm được thiết kế phù hợp cho da dầu và da mụn.', 100, '2023-11-23 11:51:30', 1),
(142, 15, 'Tẩy Tế Bào Chết Skinfood Black Sugar Perfect Essential Scrub 2X 210G\r\n', 190000, 200000, 0, 'Tẩy da chết Skinfood đem lại hiệu quả chăm sóc da 5 trong 1 với gấp đôi dưỡng chất. Làm sạch tế bào chết ở da với tính năng làm sạch tự nhiên, không gây tác động mạnh trên da. Góp phần tăng cường tuần hoàn máu dưới da, da dễ dàng hấp thụ dưỡng chất hơn.Cấp ẩm làm mềm mại bề mặt da.Cải thiện tông da, giúp da sáng đều màu.', 100, '2023-11-23 11:51:30', 1),
(143, 15, 'Tẩy Tế Bào Chết Dạng Gel Jmsolution Nature Green Tangerine Peeling Gel 120ml', 300000, 500000, 0, 'Công dụng: tẩy tế bào chết Jmsolution Nature Green Tangerine Peeling dạng gel chứa chiết xuất từ Quýt Xanh và Hạt Cam giúp loại bỏ tế bào chết nhẹ dịu. Đồng thời, gel tẩy tế bào chết mang đến hiệu quả dưỡng sáng làn da một cách tự nhiên, mịn màng.Thành phần chính: chiết xuất từ Quýt Xanh và Hạt Cam.Làn da sử dụng: mọi loại da', 100, '2023-11-23 11:58:26', 1),
(144, 15, 'Tẩy Tế Bào Chết Da Mặt Cosrx Bha Blackhead Power Liquid', 140000, 160000, 0, 'Cosrx BHA Blackhead Power Liquid là sản phẩm tẩy tế bào chết, dạng tan trong dầu, sẽ giúp bạn tẩy đi tế bào chết từ sâu bên trong lỗ chân lông giúp thu nhỏ lỗ chân lông tối đa. Nó không chỉ loại bỏ mụn đầu đen và bã nhờn từ lỗ chân lông. Mà còn ngăn ngừa bã nhờn biến thành mụn đầu đen. Sản phẩm tinh chất trị mụn đầu đen này giúp làm tẩy tế bào chết. Và làm da thông thoáng bằng 4% Betaine Salicylate với BHA tự nhiên.', 100, '2023-11-23 11:58:26', 1),
(145, 15, 'Tẩy Tế Bào Chết Toàn Thân Organic Shop Body Scrub Brazilian Coffee 250G', 80000, 90000, 0, 'Công dụng chính: Loại bỏ lớp sừng già, da chết nhẹ nhàng mang lại làn da sáng trắng, đánh bay xỉn màu, thâm nám.Thành phần chính: Tinh dầu cà phê, đường mía.Loại da phù hợp: Mọi loại da.Tẩy da chết toàn thân Organic Shop Body Scrub Brazilian Coffee có xuất xứ từ Nga, thành phần hơn 70% nguồn gốc nông nghiệp được Bộ Nông Nghiệp Mỹ chứng nhận an toàn. Sản phẩm được thiết kế đơn giản với tông nâu tinh tế.', 100, '2023-11-23 12:05:58', 1),
(146, 15, 'Tẩy Tế Bào Chết Dạng Lỏng Goodal Apple Mint Aha Bha 10% Exfoliating Liquid 150ml', 145000, 175000, 0, 'Công dụng chính: Tẩy tế bào chết dạng lỏng Goodal Apple Mint Aha Bha 10% giúp làm sạch da chết nhẹ nhàng, loại bỏ dầu thừa và mụn đầu đen đồng thời giúp da sạch sẽ, mềm mại, sáng đều màu hơn.Thành phần chính: AHA, BHA.Sản phẩm sử dụng công thức oxy nén Mico-oxygen bubble ở 50 độC trong vòng 1 tiếng, giúp chắc lọc ra thành phần tinh khiết nhất giàu dưỡng chất giúp cải thiện da an toàn, hiệu quả.', 100, '2023-11-23 12:05:58', 1),
(147, 15, 'Tẩy Tế Bào Chết Cơ Thể Tree Hut Shea Sugar Scrub 510G', 170000, 180000, 0, 'Công dụng chính: Tẩy tế bào chết cơ thể Tree Hut được làm từ đường nâu và hạt bơ mỡ, kết hợp các tinh dầu tự nhiên giúp làm sạch hiệu quả lớp da chết, đồng thời cấp ẩm làm dịu da, mang lại vẻ mịn màng sáng khỏe.Thành phần chính: Bơ hạt mỡ, đường nâu.Loại da sử dụng tốt nhất: Da body.Hiệu quả sử dụng: Da sạch sẽ, mịn màng sau khi tẩy tế bào chết', 100, '2023-11-23 12:31:19', 1),
(148, 15, 'Tẩy Tế Bào Chết Cơ thể Beyond Total Recovery Gentle Polish 200ml', 90000, 100000, 0, 'Tẩy da chết dạng hạt Beyond Total Recovery Gentle Polish với các thành phần tự nhiên giúp nhẹ nhàng lấy đi lớp sừng già trên bề mặt da, cải thiện da sáng đều màu và mềm mại hơn.Chiết xuất hoa dâm bụt, nước tinh khiết, ceramide: đem lại tác dụng tẩy tế bào chết tự nhiên, cấp dưỡng ẩm sâu cho làn da, chống oxy hóa cải thiện các dấu hiệu lão hóa sớm trên da body. Đồng thời cải thiện làn da thô ráp, khô ráp trở nên săn chắc, mịn màng.', 100, '2023-11-23 12:31:19', 1),
(149, 15, 'Sản Phẩm Làm Sạch Tế Bào Chết Cho Da Dầu Mụn Vichy Normaderm 3 In 1 Scrub + Cleanser + Mask 125Ml', 950000, 1000000, 0, 'Công dụng nổi bật của Sản phẩm làm sạch đa năng Vichy Normaderm 3 IN 1.Dạng tạo bọt dịu nhẹ giúp loại bỏ tế bào chết và dầu thừa gây bít tắc lỗ chân lông.Vichy Normaderm 3 IN 1 Loại bỏ bụi bẩn nằm sâu trong lỗ chân lông gây ra mụn đầu đen, mụn cám.Làm thông thoáng lỗ chân lông giúp ngăn ngừa mụn.Sản phẩm làm sạch đa năng, có thể làm Gel rửa mặt tẩy da chết hoặc được sử dụng như Mặt nạ thanh lọc da.', 100, '2023-11-23 12:41:20', 1),
(150, 15, 'Tẩy Da Chết Mặt Cà Phê Cocoon Dak Lak Coffee Face Polish 150Ml', 750000, 800000, 0, 'Những hạt cà phê Đắk Lắk xay nhuyễn giàu cafeine hòa quyện với bơ cacao Tiền Giang giúp bạn loại bỏ lớp tế bào chết già cỗi và xỉn màu, đánh thức làn da tươi mới đầy năng lượng cùng cảm giác mượt mà và mềm mịn lan tỏa.Làm sạch da chết trên mặt.Mang lại làn da mịn màng ngay sau lần đầu sử dụng.Giúp da sáng mịn, đều màu.', 100, '2023-11-23 12:41:20', 1),
(151, 16, 'Bấm Mi Làm Cong Mi Trim Eyelash Curler', 170000, 180000, 0, 'Công dụng: Làm cong mi mang đến làn mi cong quyến rũ, đôi mắt to tròn có sức hút.Hướng dẫn sử dụng: Bấm mi, tạo đường cong hoàn hảo cho mi.\r\nạo hàng mi cong, dễ dàng chuốt mascara.Thiết kế gọn nhẹ, dễ sử dụng, không gây đau mắt.Không làm gãy, rụng lông mi.', 100, '2023-11-23 12:55:35', 1),
(152, 16, 'Bộ Cọ Trang Điểm Cá Nhân Vacosi Essential Brush Set 14Pcs', 150000, 180000, 0, 'Công dụng chính: Sản phẩm gồm 14 cây giúp việc trang điểm dễ dàng, không mất quá nhiều thời gian.Đầu cọ nhỏ, lông ngắn giúp trang điểm mắt dễ dàng, không rơi phấn.Có thể sử dụng với bảng màu mắt dạng kem, dạng bột, dạng kem.Chất liệu lông an toàn, mềm mại không gây hại, tổn thương đến vùng da nhạy cảm.', 100, '2023-11-23 12:55:35', 1),
(153, 16, 'Cây Nặn Mụn 2 Đầu Vacosi Pimple Popper', 15000, 30000, 0, 'Công dụng chính: Loại bỏ dễ dàng mụn đầu đen, mụn ẩn sâu dưới da không gây tổn thương đến vùng da nhạy cảm. Chất liệu: Thép ko gỉ với thiết kế 1 đầu nhọn và 1 đầu hình tròn có lỗ rỗng. Cây Nặn Mụn 2 Đầu sẽ giúp bạn loại bỏ những vết mụn trên da.', 100, '2023-11-23 13:05:02', 1),
(154, 16, 'Hộp Cọ Trang Điểm Du Lịch Vacosi My Darling Travel Brush Set 6Pcs Black', 120000, 150000, 0, 'Công dụng chính: Giúp trang điểm tiện lợi, đơn giản mọi lúc mọi nơi.Với hộp chứa cọ bằng sắt giúp bảo quản cọ an toàn, thuận tiện khi di chuyển. Lông cọ mềm mại, không gây ngứa da hay châm chích khi sử dụng.', 100, '2023-11-23 13:05:02', 1),
(155, 16, 'Hộp Cọ Trang Điểm Du Lịch Vacosi My Darling Travel Brush Set 8Pcs Black', 250000, 300000, 0, 'Công dụng chính: Giúp việc trang điểm trở nên đơn giản, tiện lợi với bộ cọ 8 món độc đáo được thiết kế bởi nhà VACOSI.Lông cọ mềm mại, không gây rát, kích ứng da.Thiết kế hộp đựng nhỏ gọn, đẹp mắt với 2 màu đỏ và đen ấn tượng.Thuận tiện khi mang đi du lịch và trang điểm mọi lúc mọi nơi.', 100, '2023-11-23 13:18:33', 1),
(156, 16, 'Keo Dán Mi Vacosi Natural Studio Eyelash 3D Primer 8', 350000, 400000, 0, 'Công dụng chính: Dùng để dán mi giả tạo thành làn mi dài cong vút vô cùng tự nhiên.Dán mi giả với mi thật tạo thành làn mi dày, dài cong vút.Chất keo chứa thành phần tự nhiên, không gây hại, kích ứng đối với vùng da mắt nhạy cảm.Keo dán bám lâu, không thấm nước.', 100, '2023-11-23 13:18:33', 1),
(157, 16, 'Cọ Chà Gót Chân Đa Năng Vacosi Foot Peeling', 55000, 60000, 0, 'Công dụng chính: Loại bỏ lớp da chai sần, bụi bẩn tích tụ lâu ngày mang lại làn da gót chân mềm mại, mịn màng. Sản phẩm có tay cầm tiện lợi, dễ dàng sử dụng.Giúp gọt sạch và loại bỏ các vùng da chai sần khô ráp, làm mềm và mịn da chân.', 100, '2023-11-23 13:27:44', 1),
(158, 16, 'Miếng Dán Mí Dạng Lưới Vacosi Invisible Fiber Tape (120 Miếng)', 65000, 70000, 0, 'Công dụng chính: Miếng dán mí dạng lưới giúp tạo đôi mắt to tròn, long lanh và có sức hút hơn.Sản phẩm bao gồm: 120 miếng dán mí, một nhíp gắp mí và một gel dán mí.Được cấu tạo từ những miếng lưới mỏng giúp kích mí cho đôi mắt trở nên to tròn, đầy quyến rũ.Sản phẩm được làm bằng nhựa không gây tổn thương làn da bạn.', 100, '2023-11-23 13:27:44', 1),
(159, 16, 'Chì Kẻ Mắt Dạng Gel Vacosi Natural Studio Styling Twist Liner 5Ml', 75000, 80000, 0, 'Công dụng chính: Dễ dàng tạo đường kẻ mắt không chứa dầu, không lem, không trôi mang lại phần trang điểm mắt cực thời thượng.Sản phẩm sử dụng công nghệ cô đặc giúp lõi chì luôn mềm, dễ dàng tạo đường kẻ mắt không bị khô.Đầu chì dạng gel lướt nhẹ từ đầu đến đuôi mắt.Thiết kế đầu vặn tiện lợi, dễ dàng sử dụng.Đầu bút thanh mảnh, bền màu, không lem, không phai, chống nước trong suốt nhiều giờ liền.', 100, '2023-11-23 13:36:29', 1),
(160, 16, 'Mi Giả Vacosi 4D Pro Eyelash Eq03 (3 Cặp/ 1 Hộp)', 85000, 90000, 0, 'Công dụng chính: Các sợi mi giả mỏng nhẹ tự nhiên tạo hàng mi dày, dài, không gây nặng mắt, tạo hiệu ứng 4D ấn tượng, quyến rũ.Đặc biệt Mi có thể tái sử dụng lại đến 3 lần sau khi tẩy trang.Mi Pro 4D gồm có 7 số, trên hộp được đánh mã số, mỗi hộp có 3 cặp mi.', 100, '2023-11-23 13:36:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `matk` int(11) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `so_dien_thoai` varchar(20) DEFAULT NULL,
  `dia_chi` varchar(250) DEFAULT NULL,
  `mat_khau` varchar(50) DEFAULT NULL,
  `hinh_anh` varchar(150) DEFAULT NULL,
  `mavt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`matk`, `ho_ten`, `email`, `so_dien_thoai`, `dia_chi`, `mat_khau`, `hinh_anh`, `mavt`) VALUES
(1, 'Nguyễn Chính', 'chinhnguyennn24@gmail.com', '', '', '', 'http://graph.facebook.com/1759565574523451/picture', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vaitro`
--

CREATE TABLE `vaitro` (
  `mavt` int(11) NOT NULL,
  `vai_tro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaitro`
--

INSERT INTO `vaitro` (`mavt`, `vai_tro`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabl`),
  ADD KEY `matk` (`matk`),
  ADD KEY `masp` (`masp`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD KEY `madh` (`madh`),
  ADD KEY `masp` (`masp`);

--
-- Indexes for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD KEY `masp` (`masp`),
  ADD KEY `magh` (`magh`);

--
-- Indexes for table `chitietkhuyenmai`
--
ALTER TABLE `chitietkhuyenmai`
  ADD KEY `makm` (`makm`),
  ADD KEY `masp` (`masp`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`),
  ADD KEY `matk` (`matk`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`magh`),
  ADD KEY `matk` (`matk`);

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`maha`),
  ADD KEY `masp` (`masp`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`makm`);

--
-- Indexes for table `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `maloai` (`maloai`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`matk`),
  ADD KEY `mavt` (`mavt`);

--
-- Indexes for table `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`mavt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `magh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `maha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=642;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `makm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `matk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `mavt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`matk`) REFERENCES `taikhoan` (`matk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `chitietgiohang_ibfk_1` FOREIGN KEY (`magh`) REFERENCES `giohang` (`magh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietgiohang_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietkhuyenmai`
--
ALTER TABLE `chitietkhuyenmai`
  ADD CONSTRAINT `chitietkhuyenmai_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietkhuyenmai_ibfk_2` FOREIGN KEY (`makm`) REFERENCES `khuyenmai` (`makm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`matk`) REFERENCES `taikhoan` (`matk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`matk`) REFERENCES `taikhoan` (`matk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `hinhanh_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loaihang` (`maloai`) ON UPDATE CASCADE;

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`mavt`) REFERENCES `vaitro` (`mavt`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
