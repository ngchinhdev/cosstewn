-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2023 lúc 12:12 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cosstewn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
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
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `madh` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgiohang`
--

CREATE TABLE `chitietgiohang` (
  `magh` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietkhuyenmai`
--

CREATE TABLE `chitietkhuyenmai` (
  `makm` int(11) NOT NULL,
  `masp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `madh` int(11) NOT NULL,
  `matk` int(11) DEFAULT NULL,
  `ngay_dat_hang` datetime NOT NULL DEFAULT current_timestamp(),
  `so_dien_thoai` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dia_chi` varchar(250) NOT NULL,
  `phuong_thuc` tinyint(1) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `magh` int(11) NOT NULL,
  `matk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

CREATE TABLE `hinhanh` (
  `maha` int(11) NOT NULL,
  `hinh_anh` varchar(250) NOT NULL,
  `masp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`maha`, `hinh_anh`, `masp`) VALUES
(1, 'suaruamat1_1.jpg', 1),
(2, 'suaruamat1_2.jpg', 1),
(3, 'suaruamat1_3.jpg', 1),
(4, 'suaruamat1_4.jpg', 1),
(5, 'suaruamat2_1.jpg', 2),
(6, 'suaruamat2_2.jpg', 2),
(7, 'suaruamat2_3.jpg', 2),
(8, 'suaruamat2_4.jpg', 2),
(9, 'suatam1_1.jpg', 3),
(10, 'suatam1_2.jpg', 3),
(11, 'suatam1_3.jpg', 3),
(12, 'suatam1_4.jpg', 3),
(13, 'suatam2_1.jpg', 4),
(14, 'suatam2_2.jpg', 4),
(15, 'suatam2_3.jpg', 4),
(16, 'suatam2_4.jpg', 4),
(17, 'xitkhoang1_1.jpg', 5),
(18, 'xitkhoang1_2.jpg', 5),
(19, 'xitkhoang1_3.jpg', 5),
(20, 'xitkhoang1_4.jpg', 5),
(21, 'xitkhoang2_1.jpg', 6),
(22, 'xitkhoang2_2.jpg', 6),
(23, 'xitkhoang2_3.jpg', 6),
(24, 'xitkhoang2_4.jpg', 6),
(25, 'nuochoa1_1.jpg', 7),
(26, 'nuochoa1_2.jpg', 7),
(27, 'nuochoa1_3.jpg', 7),
(28, 'nuochoa1_4.jpg', 7),
(29, 'nuochoa2_1.jpg', 8),
(30, 'nuochoa2_2.jpg', 8),
(31, 'nuochoa2_3.jpg', 8),
(32, 'nuochoa2_4.jpg', 8),
(33, 'duongthe1_1.jpg', 9),
(34, 'duongthe1_2.jpg', 9),
(35, 'duongthe1_3.jpg', 9),
(36, 'duongthe1_4.jpg', 9),
(37, 'duongthe2_1.jpg', 10),
(38, 'duongthe2_2.jpg', 10),
(39, 'duongthe2_3.jpg', 10),
(40, 'duongthe2_4.jpg', 10),
(41, 'daugoi1_1.jpg', 11),
(42, 'daugoi1_2.jpg', 11),
(43, 'daugoi1_3.jpg', 11),
(44, 'daugoi1_4.jpg', 11),
(45, 'daugoi2_1.jpg', 12),
(46, 'daugoi2_2.jpg', 12),
(47, 'daugoi2_3.jpg', 12),
(48, 'daugoi2_4.jpg', 12),
(49, 'chongnang1_1.jpg', 13),
(50, 'chongnang1_2.jpg', 13),
(51, 'chongnang1_3.jpg', 13),
(52, 'chongnang1_4.jpg', 13),
(53, 'chongnang2_1.jpg', 14),
(54, 'chongnang2_2.jpg', 14),
(55, 'chongnang2_3.jpg', 14),
(56, 'chongnang2_4.jpg', 14),
(57, 'taytrang1_1.jpg', 15),
(58, 'taytrang1_2.jpg', 15),
(59, 'taytrang1_3.jpg', 15),
(60, 'taytrang1_4.jpg', 15),
(61, 'taytrang2_1.jpg', 16),
(62, 'taytrang2_2.jpg', 16),
(63, 'taytrang2_3.jpg', 16),
(64, 'taytrang2_4.jpg', 16),
(65, 'sonmoi1_1.jpg', 17),
(66, 'sonmoi1_2.jpg', 17),
(67, 'sonmoi1_3.jpg', 17),
(68, 'sonmoi1_4.jpg', 17),
(69, 'sonmoi2_1.jpg', 18),
(70, 'sonmoi2_2.jpg', 18),
(71, 'sonmoi2_3.jpg', 18),
(72, 'sonmoi2_4.jpg', 18),
(73, 'kemduong1_1.jpg', 19),
(74, 'kemduong1_2.jpg', 19),
(75, 'kemduong1_3.jpg', 19),
(76, 'kemduong1_4.jpg', 19),
(77, 'kemduong2_1.jpg', 20),
(78, 'kemduong2_2.jpg', 20),
(79, 'kemduong2_3.jpg', 20),
(80, 'kemduong2_4.jpg', 20),
(81, 'matna1_1.jpg', 21),
(82, 'matna1_2.jpg', 21),
(83, 'matna1_3.jpg', 21),
(84, 'matna1_4.jpg', 21),
(85, 'matna2_1.jpg', 22),
(86, 'matna2_2.jpg', 22),
(87, 'matna2_3.jpg', 22),
(88, 'matna2_4.jpg', 22),
(89, 'serum1_1.jpg', 23),
(90, 'serum1_2.jpg', 23),
(91, 'serum1_3.jpg', 23),
(92, 'serum1_4.jpg', 23),
(93, 'serum2_1.jpg', 24),
(94, 'serum2_2.jpg', 24),
(95, 'serum2_3.jpg', 24),
(96, 'serum2_4.jpg', 24),
(97, 'phanma1_1.jpg', 25),
(98, 'phanma1_2.jpg', 25),
(99, 'phanma1_3.jpg', 25),
(100, 'phanma1_4.jpg', 25),
(101, 'phanma2_1.jpg', 26),
(102, 'phanma2_2.jpg', 26),
(103, 'phanma2_3.jpg', 26),
(104, 'phanma2_4.jpg', 26),
(105, 'lankhumui1_1.jpg', 27),
(106, 'lankhumui1_2.jpg', 27),
(107, 'lankhumui1_3.jpg', 27),
(108, 'lankhumui1_4.jpg', 27),
(109, 'lankhumui2_1.jpg', 28),
(110, 'lankhumui2_2.jpg', 28),
(111, 'lankhumui2_3.jpg', 28),
(112, 'lankhumui2_4.jpg', 28),
(113, 'taytebaochet1_1.jpg', 29),
(114, 'taytebaochet1_2.jpg', 29),
(115, 'taytebaochet1_3.jpg', 29),
(116, 'taytebaochet1_4.jpg', 29),
(117, 'taytebaochet2_1.jpg', 30),
(118, 'taytebaochet2_2.jpg', 30),
(119, 'taytebaochet2_3.jpg', 30),
(120, 'taytebaochet2_4.jpg', 30),
(121, 'phukienlamdep1_1.jpg', 31),
(122, 'phukienlamdep1_2.jpg', 31),
(123, 'phukienlamdep1_3.jpg', 31),
(124, 'phukienlamdep1_4.jpg', 31),
(125, 'phukienlamdep2_1.jpg', 32),
(126, 'phukienlamdep2_2.jpg', 32),
(127, 'phukienlamdep2_3.jpg', 32),
(128, 'phukienlamdep2_4.jpg', 32);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
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
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `maloai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL,
  `trang_thai` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`maloai`, `ten_loai`, `trang_thai`) VALUES
(1, 'Sữa rửa mặt', 0),
(2, 'Sữa tắm', 0),
(3, 'Xịt khoáng', 0),
(4, 'Nước hoa', 0),
(5, 'Dưỡng thể', 0),
(6, 'Dầu gội', 0),
(7, 'Chống nắng', 0),
(8, 'Tẩy trang', 0),
(9, 'Son môi', 0),
(10, 'Kem dưỡng', 0),
(11, 'Mặt nạ', 0),
(12, 'Serum', 0),
(13, 'Phấn má', 0),
(14, 'Lăn khử mùi', 0),
(15, 'Tẩy tế bào chết', 0),
(16, 'Phụ kiện làm đẹp', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
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
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `maloai`, `ten_sp`, `gia_tien`, `gia_goc`, `so_luot_xem`, `mo_ta`, `so_luong`, `ngay_nhap`, `an_hien`) VALUES
(1, 1, 'Sữa Rửa Mặt Tẩy Trang Senka All Clear Double W 120G', 119000, 155000, 0, 'Senka All Clear Double W có khả năng làm sạch sâu lớp bụi bẩn ô nhiễm, bã nhờn trong lỗ chân lông đồng thời tẩy trang nhẹ nhàng lớp trang điểm (kem chống nắng, cushion) trả lại làn da sạch sẽ thông thoáng. Với khả năng tạo bọt nhiều, cho lớp bọt mịn xốp dễ dàng len lỏi vào tận sâu bên trong, cuốn trôi các tạp chất một cách an toàn và hiệu quả.', 156, '0000-00-00 00:00:00', 0),
(2, 1, 'Sữa Rửa Mặt Từ Sữa Ong Chúa Cho Da Khô Bio Renew Deep Cleanser 100G', 175000, 230000, 0, 'Sữa rửa mặt Bio Renew Deep Cleanser là dòng sữa rửa mặt làm sạch sâu, giúp cuốn trôi mọi bụi bẩn, bã nhờn một cách nhanh chóng. Đồng thời, nhờ một loạt các chiết xuất từ thiên nhiên như sữa ong chúa, thảo mộc mang đến cho làn da đủ ẩm, mềm mại, mịn màng.', 38, '0000-00-00 00:00:00', 0),
(3, 2, 'Sữa Tắm Dành Cho Nam Old Spice Body Wash Timber 473Ml', 129000, 159000, 0, 'Công dụng chính: Loại sạch bụi bẩn, giúp lỗ chân lông thông thoáng và mang lại hương thơm nhẹ nhàng suốt nhiều giờ.', 189, '0000-00-00 00:00:00', 0),
(4, 2, 'Sữa Tắm Old Spice Body Wash Pure Sport 532ml', 129000, 159000, 0, 'Công dụng chính: Làm sạch bụi bẩn, mồ hôi toàn thân, lưu lại hương thơm nam tính suốt nhiều giờ liền.', 146, '0000-00-00 00:00:00', 0),
(5, 3, 'Xịt Khoáng Dưỡng Ẩm Eucerin Mist Spray', 269000, 299000, 0, 'Công dụng: Xịt dưỡng ẩm Hyaluron cấp ẩm cho da suốt 24 giờ và giúp cải thiện độ đàn hồi của da. Đồng thời, với Hyaluronic Acid giúp giảm nếp nhăn hiệu quả và ngăn nếp nhăn mới xuất hiện và Panthenol (Vitamin B5) giúp tăng cường bảo vệ da, từ đó ngăn tác hại của các tác nhân gây lão hóa.', 186, '0000-00-00 00:00:00', 0),
(6, 3, 'Xịt Khoáng Cấp Ẩm Vichy Eau Thermale Mineralizing Thermal Water', 455000, 519000, 0, 'Xịt khoáng cấp ẩm Vichy Eau Thermale Mineralizing Thermal Water giàu khoáng chất với sắt, potassium, canxi, manganese, silicon,... từ nước khoáng núi lửa, giúp làm dịu, củng cố và tăng cường sức khỏe cho làn da. Sản phẩm giúp da phục hồi nhanh tổn thương, củng cố hàng rào bảo vệ, tăng cường dưỡng chất nuôi dưỡng da ẩm mượt khỏe khoắn.', 196, '0000-00-00 00:00:00', 0),
(7, 4, 'Nước Hoa Calvin Klein Everyone Edt', 1208000, 1559000, 0, 'Calvin Klein Everyone với mùi hương mang hơi hướng tự nhiên, mát mẻ, dễ chịu và rất nịnh mũi. Chai nước hoa duy nhất của CK Vegan “thuần chay” ( Vegan – nước hoa được cam kết không thử nghiệm trên động vật, có nguồn gốc hoàn toàn tự nhiên).\r\n\r\nNước hoa Calvin Klein Everyone được tạo nên từ rượu có nguồn gốc tự nhiên để mang đến một hương thơm độc đáo. Các lớp dầu cam hữu cơ hoà với trà xanh và một lớp gỗ tuyết tùng, tạo ra một mùi hương không thể cưỡng lại.', 125, '0000-00-00 00:00:00', 0),
(8, 4, 'Nước Hoa Nữ Salvatore Ferragamo Signorina Misteriosa Spray', 2359000, 2859000, 0, 'Salvatore Ferragamo Signorina Misteriosa mang sắc đen huyền bí, lạnh lùng & kiêu sa. Sản phẩm vẫn giữ nguyên thiết kế cũ với chiếc nơ là biểu tượng đặc trưng của hãng, nhưng thay vào đó là toàn thân được phủ một màu đen đầy ma mị, huyền bí thu hút bất cứ tầng lớp, giới tính nào đã vô tình chạm phải.', 135, '0000-00-00 00:00:00', 0),
(9, 5, 'Sữa Dưỡng Thể Dưỡng Trắng, Chống Nắng Vaseline Healthy White Sun+Pollution Protection Spf24 Pa++', 150000, 199000, 0, 'Sữa dưỡng thể Vaseline Healthy White Sun+Pollution Protection 3 tác động bảo vệ da giúp dưỡng trắng, chống nắng & bảo vệ da trước ô nhiễm ngoài môi trường.', 89, '0000-00-00 00:00:00', 0),
(10, 5, 'Bơ Dưỡng Thể Cà Phê Cocoon Dak Lak Coffee Body Butter 200Ml', 215000, 269000, 0, 'Những hạt cà phê Đắk Lắk đậm vị và thơm nồng nàn là nguồn cảm hứng, nguồn nguyên liệu dồi dào để Cocoon cho ra mắt các sản phẩm chăm sóc làn da body và da mặt hiệu quả. Với nguồn dưỡng chất dồi dào từ hạt cà phê, đặc biệt là chất chống oxy giúp ích cho việc bảo vệ và chăm sóc làn da khỏe đẹp, mịn màng.', 185, '0000-00-00 00:00:00', 0),
(11, 6, 'Dầu Gội Bưởi Milaganics Grapefruit Shampoo 250ml', 165000, 189000, 0, 'Công dụng: dầu gội bưởi Milaganics Grapefruit Shampoo chứa tinh dầu bưởi nguyên chất giúp giảm xơ rối và ngăn ngừa rụng tóc bổ sung thêm dưỡng chất Biotin Keratin Betaine cho mái tóc chắc khỏe bóng mượt.\r\n\r\nThành phần chính: chiết xuất tinh dầu bưởi, chiết xuất cây Phỉ, chiết xuất Nha Đam tươi', 66, '0000-00-00 00:00:00', 0),
(12, 6, 'Dầu Gội Bưởi Cocoon Pomelo Shampoo 310ml', 385000, 419000, 0, 'Dầu gội chứa tinh dầu bưởi đem lại hiệu quả làm sạch  da đầu, sạch dầu & bụi bẩn một cách tự nhiên, an toàn, không làm tổn thương da đầu', 156, '0000-00-00 00:00:00', 0),
(13, 7, 'Kem Chống Nắng Dưỡng Ẩm, Chống Ánh Sáng Xanh Dr.G Green Mild Up Sun Essence 50ml', 580000, 650000, 0, 'Kem chống nắng hóa học Dr.G Green Mild Up Sun Essence có chiết xuất từ vỏ cây thông nhiều Pycnogenol giúp bảo vệ da khỏi 6 tác nhân gây hại từ môi trường như tia UVA, UVB, tia hồng ngoại, kích ứng, ánh sáng xanh, bụi mịn. Có khả năng chống lão hóa, cải thiện độ đàn hồi mang lại làn da săn chắc, khỏe khoắn. Đây là sản phẩm theo xu hướng Clean Beauty được thiết kế cho làn da nhạy cảm, thường xuyên bị kích ứng mỹ phẩm hoặc các tác nhân gây hại khác.', 89, '0000-00-00 00:00:00', 0),
(14, 7, 'Gel Chống Nắng Senka Perfect Uv Gel Spf50+ Pa++++ 80Ml', 183000, 229000, 0, 'Công dụng chính: Kem chống nắng dạng gel bảo vệ da với chỉ số chống nắng vượt trội SPF 50+, PA++++, cho làn da luôn mịn mượt và rạng rỡ.\r\nThành phần chính: Kén tơ tằm, mật ong, dầu cám gạo\r\nLoại da sử dụng tốt nhất: Da thường, da khô', 152, '0000-00-00 00:00:00', 0),
(15, 8, 'Bông Tẩy Trang Ipek Cotton Pads 130Pcs', 39800, 45000, 0, 'Ipek là thương hiệu bông tẩy trang hữu cơ nổi tiếng được sản xuất tại Thổ Nhĩ Kỳ, thành lập năm 1971. Với miếng bông được dệt thành 2 mặt mềm mại, giúp tiết kiệm khi sử dụng. Bạn có thể sử dụng bông tẩy trang với nhiều công dụng khác nhau như kết hợp với nước hoa hồng, lau mặt, tẩy móng tay, móng chân.', 125, '0000-00-00 00:00:00', 0),
(16, 8, 'Nước Tẩy Trang Trị Mụn Làm Trắng Da Eucerin Proacne', 349000, 389000, 0, 'Loại bỏ dầu nhờn thừa trên da, giúp da thông thoáng\r\nLàm sạch sâu lớp trang điểm, kể cả cặn trang điểm không nhìn thấy được bằng mắt thường\r\nGiúp giảm mụn, ngừa mụn và thu nhỏ lỗ chân lông sau 4 tuần', 35, '0000-00-00 00:00:00', 0),
(17, 9, 'Son Dưỡng Môi Thiên Nhiên Không Mùi Sense Plus Coco Balmie 3.5G', 89000, 119000, 0, 'Công dụng: Son Dưỡng Môi Coco Balmie Sense Plus trị khô môi hiệu quả nhờ vào các thành phần từ thiên nhiên lành tính. Sản phẩm giúp nuôi dưỡng, phục hồi môi khô ráp, trả lại vẻ đẹp nguyên bản làn môi.', 80, '0000-00-00 00:00:00', 0),
(18, 9, 'Son Tint Căng Mướt Môi Ofélia Lolli Glow Tint 3.9g', 263000, 309000, 0, 'Công dụng chính: Son môi Lolli Glow Tint cho lớp son căng bóng, lấp lánh và khả năng lưu giữ màu nhiều giờ liền trên môi.', 60, '0000-00-00 00:00:00', 0),
(19, 10, 'Kem Dưỡng Da Tay Frudia My Orchard 30G', 89000, 119000, 0, '\r\nCông dụng chính: Kem Dưỡng Tay Frudia My Orchard chiết xuất từ trái cây hương thơm ngọt ngào có lớp siêu giữ ẩm chứa giàu dưỡng chất làm mềm mịn da tay', 126, '0000-00-00 00:00:00', 0),
(20, 10, 'Kem Dưỡng Ẩm Hada Labo Advanced Nourish Cream 50G', 210000, 250000, 0, 'Đặc biệt thích hợp cho làn da khô, da thiếu ẩm - thiếu nước do thời tiết khô lạnh.\r\nKem dưỡng ẩm Hada Labo có khả năng cấp ẩm vượt trội gấp 2 lần, tăng cường hàng rào bảo vệ giúp nuôi dưỡng làn da săn chắc, căng đầy.', 195, '0000-00-00 00:00:00', 0),
(21, 11, 'Mặt Nạ Giấy INNISFREE Squeeze Energy Mask', 27000, 32000, 0, 'Điểm nổi bật của mặt nạ giấy INNISFREE\r\n- Dạng giấy cellulose êm dịu, làm tính cho da\r\n\r\n- Được chiết xuất từ các thành phần hoa quả, cây lá tự nhiên giàu dưỡng chất\r\n\r\n- Giúp chăm sóc các vấn đề da hiệu quả như da khô, tối màu, da yếu, thiếu sức sống...\r\n\r\n- Thiết kế mặt nạ ôm sát da, mỏng nhẹ, giàu dưỡng chất', 60, '0000-00-00 00:00:00', 0),
(22, 11, 'Mặt Nạ Dưỡng Da Jmsolution Water Luminous Mask', 39000, 50000, 0, 'Mặt Nạ JMSolution Luminous là dòng sản phẩm mặt nạ giấy chăm sóc làn da toàn diện đến từ thương hiệu mỹ phẩm nội địa Hàn Quốc JMSolution. Được chiết xuất từ các thành phần hoàn toàn thiên nhiên mang đến hiệu quả chăm sóc từng vấn đề cụ thể của làn da. Đồng thời, mặt nạ được sử dụng chất liêu cực kỳ mềm mại êm ái dễ chịu cho cả làn da nhạy cảm', 98, '0000-00-00 00:00:00', 0),
(23, 12, 'Serum Dưỡng Môi Căng Mọng Lipstician Lip Serum Youth Booster 9.5G', 399000, 459000, 0, 'Dành cho môi sẫm màu, nhợt nhạt, nhiều nếp nhăn.\r\nSon dưỡng môi với công thức Essential 10 được chiết xuất từ 10 thành phần tinh dầu & dưỡng chất thiên nhiên an toàn cho da giúp chăm sóc và giải quyết các vấn đề về môi một cách chuyên sâu, toàn vẹn.', 68, '0000-00-00 00:00:00', 0),
(24, 12, 'Tinh Chất Hoa Hồng Cocoon Rose Serum 30Ml', 265000, 299000, 0, 'Đối với làn da khô, mất nước, việc bổ sung bước tinh chất vào “routine” hằng ngày là vô cùng cần thiết để làn da luôn được cấp ẩm liên tục và đầy đủ, tạo sự cân bằng, giúp làn da luôn khỏe mạnh và tăng cường hàng rào phòng ngự khỏi các tác nhân gây hại. Đừng đợi đến khi bạn cảm thấy làn da trở nên căng tức và xuất hiện tình trạng bong tróc, khô sần mới bắt đầu chăm sóc, lúc này làn da đã bị thiếu ẩm trầm trọng và việc cải thiện sẽ trở nên khó khăn hơn rất nhiều.', 56, '0000-00-00 00:00:00', 0),
(25, 13, 'Phấn Má Hồng Maybelline Fit Me Mono Blush 4.5G', 158000, 189000, 0, 'Điểm nổi bật của Phấn má hồng Maybelline\r\n- Chất bột kem mướt mịn, tan ngay vào da cho hiệu ứng màu sắc tự nhiên\r\n\r\n- Khả năng lưu giữ màu đến 16h, cho đôi má tươi tắn cả ngày\r\n\r\n- Sản phẩm an toàn, không chứa hóa chất độc hại, phù hợp với mọi loại da', 80, '0000-00-00 00:00:00', 0),
(26, 13, 'Phấn Má Hồng Dạng Kem Cathy Doll Skin Fit Jelly Blusher 6g', 159000, 199000, 0, 'Công dụng chính: Phấn má hồng có kết cấu dạng kem mịn tạo hiệu ứng đôi má ửng hồng nhẹ nhàng mang lại gương mặt rạng rỡ, tràn đầy sức sống.\r\n\r\nThành phần chính: Chiết xuất hoa cúc, tinh dầu tràm trà, tinh dầu hướng dương.', 60, '0000-00-00 00:00:00', 0),
(27, 14, 'Lăn Khử Mùi Vichy Traitement Anti-Transpirant 48H 50Ml', 295000, 335000, 0, 'Lăn khử mùi Vichy giúp khô thoáng vùng da dưới cánh tay suốt 48h giúp hạn chế và kiểm soát lượng mồ hôi hằng ngày, dưỡng da dưới cánh tay mềm mịn, khô thoáng suốt 48h. Sản phẩm đặc biệt dành cho da nhạy cảm.', 58, '0000-00-00 00:00:00', 0),
(28, 14, 'Gel Khử Mùi Secret Clear Gel Completely Clean 73g', 100000, 133000, 0, 'Mô tả sản \r\nCông dụng chính: Ngăn mùi, hạn chế tiết mồ hôi dưới vùng cánh tay tạo cảm giác khô thoáng, thoải mái.\r\nThành phần chính: Chiết xuất từ thiên nhiên.\r\nLoại da phù hợp: Mọi loại da\r\nGel khử mùi Secret Clear gel dành cho nữ với mùi hương dễ chịu, nhẹ nhàng. Được sản xuất với công nghệ hiện đại Xtend giúp đánh bay mùi hôi cơ thể, không gây ố vàng trên quần áo. Đặc biệt là tạo cảm giác thông thoáng, thoải mái dù hoạt động dưới thời tiết nắng nóng.hẩm Lăn khử mùi 2', 30, '0000-00-00 00:00:00', 0),
(29, 15, 'Tẩy Tế Bào Chết Ngăn Ngừa Mụn Eucerin Proacne Scrub 100Ml', 398000, 450000, 0, 'Eucerin ProAcne Scrub là sản phẩm tẩy tế bào chết không chứa dầu, kết hợp Lactic Acid giúp giảm mụn mà không làm khô da. Sản phẩm phù hợp cho mặt và toàn thân, giúp làm sạch nhẹ dịu, giảm các tác nhân gây mụn đầu trắng và mụn đầu đen, đồng thời loại bỏ căn trang điểm hiệu quả. Da sẽ trở nên mịn màng và mềm mại hơn.', 66, '0000-00-00 00:00:00', 0),
(30, 15, 'Tẩy Tế Bào Chết Skinfood Black Sugar Perfect Essential Scrub 2X 210G', 595000, 699000, 0, 'Công dụng tẩy da chết Skinfood\r\nTẩy da chết Skinfood đem lại hiệu quả chăm sóc da 5 trong 1 với gấp đôi dưỡng chất:\r\n\r\n- Làm sạch tế bào chết ở da với tính năng làm sạch tự nhiên, không gây tác động mạnh trên da\r\n\r\n- Góp phần tăng cường tuần hoàn máu dưới da, da dễ dàng hấp thụ dưỡng chất hơn\r\n\r\n- Cấp ẩm làm mềm mại bề mặt da\r\n\r\n- Cải thiện tông da, giúp da sáng đều màu\r\n\r\n- Chống lão hóa da với các thành phần đường đen tự nhiên cùng rượu gạo nguyên chất', 96, '0000-00-00 00:00:00', 0),
(31, 16, 'Phấn Phủ M.O.I Baby Skin Powder 10g', 500000, 650000, 0, 'Baby Skin Powder - Phấn phủ với công dụng nổi bật là siêu kiềm dầu, cho bề mặt lớp makeup khô thoáng, dễ chịu dù đối mặt với nắng hè gay gắt. Baby Skin Powder gồm những hạt phấn nano siêu nhỏ, vừa hạn chế tình trạng đổ dầu trên da, vừa bám tốt và che phủ toàn bộ nhược điểm một cách tài tình, làm mờ lỗ chân lông, xứng đáng là phấn phủ “quốc dân” vì ai dùng cũng chuẩn.', 35, '0000-00-00 00:00:00', 0),
(32, 16, 'Phấn Phủ Nén Kiềm Dầu Clio Stay Perfect Finish Pact 8g', 689000, 889000, 0, 'Phấn phủ Clio Stay Perfect Finish Pact với chức năng hút dầu vượt trội, kiểm soát bã nhờn giúp lớp trang điểm lâu trôi mà không bóng nhờn. Công thức hạt phấn nén có trọng lượng nhẹ, cùng khả năng thấm hút dầu thừa trên bề mặt da, giúp phấn phủ Clio có thể kiểm soát và duy trì bề mặt da ráo mịn trong suốt thời gian trang điểm.', 89, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `matk` int(11) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `so_dien_thoai` varchar(20) DEFAULT NULL,
  `dia_chi` varchar(250) DEFAULT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `hinh_anh` varchar(150) NOT NULL,
  `mavt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaitro`
--

CREATE TABLE `vaitro` (
  `mavt` int(11) NOT NULL,
  `vai_tro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabl`),
  ADD KEY `matk` (`matk`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD KEY `madh` (`madh`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD KEY `masp` (`masp`),
  ADD KEY `magh` (`magh`);

--
-- Chỉ mục cho bảng `chitietkhuyenmai`
--
ALTER TABLE `chitietkhuyenmai`
  ADD KEY `makm` (`makm`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`),
  ADD KEY `matk` (`matk`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`magh`),
  ADD KEY `matk` (`matk`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`maha`),
  ADD KEY `masp` (`masp`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`makm`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `maloai` (`maloai`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`matk`),
  ADD KEY `mavt` (`mavt`);

--
-- Chỉ mục cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`mavt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `madh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `magh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `maha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=980;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `makm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `matk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `mavt` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`matk`) REFERENCES `taikhoan` (`matk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietgiohang`
--
ALTER TABLE `chitietgiohang`
  ADD CONSTRAINT `chitietgiohang_ibfk_1` FOREIGN KEY (`magh`) REFERENCES `giohang` (`magh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietgiohang_ibfk_2` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietkhuyenmai`
--
ALTER TABLE `chitietkhuyenmai`
  ADD CONSTRAINT `chitietkhuyenmai_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietkhuyenmai_ibfk_2` FOREIGN KEY (`makm`) REFERENCES `khuyenmai` (`makm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`matk`) REFERENCES `taikhoan` (`matk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`matk`) REFERENCES `taikhoan` (`matk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loaihang` (`maloai`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`mavt`) REFERENCES `vaitro` (`mavt`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
