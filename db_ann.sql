-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2017 at 09:30 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ann`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `account` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ca` varchar(20) NOT NULL,
  `chucvu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `account`, `name`, `password`, `ca`, `chucvu`) VALUES
(1, 'admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'Full', 'admin'),
(8, 'hoaithu', 'Phạm Hoài Thu', 'ac7c1659c88b0b70236d38cac1368db1', 'Ca sáng', 'Nhân viên'),
(9, 'huyhip123', 'Nguyễn Đắc Huy', '1eb24fcf41495c7ac6ec1f188fadc35a', 'Ca chiều', 'Nhân viên'),
(13, 'trangg', 'Nguyễn Thị Huyền Trang', '0a00d3890d8a023941b80be7b67d0876', 'Ca tối', 'Nhân viên');

-- --------------------------------------------------------

--
-- Table structure for table `tb_catalog`
--

CREATE TABLE `tb_catalog` (
  `id` int(11) NOT NULL,
  `madanhmuc` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_catalog`
--

INSERT INTO `tb_catalog` (`id`, `madanhmuc`, `name`) VALUES
(7, 'AO', 'Áo'),
(8, 'QU', 'Quần'),
(9, 'VD', 'Váy Đầm'),
(10, 'PK', 'Phụ Kiện'),
(11, 'TX', 'Túi Xách');

-- --------------------------------------------------------

--
-- Table structure for table `tb_chitietnhap`
--

CREATE TABLE `tb_chitietnhap` (
  `id_chitietnhap` int(11) NOT NULL,
  `id_nhapkho` int(10) NOT NULL,
  `tensanpham` varchar(50) NOT NULL,
  `anhsanpham` varchar(50) NOT NULL,
  `gianhap` varchar(11) NOT NULL,
  `giaban` varchar(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `danhmuc` varchar(5) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_chitietnhap`
--

INSERT INTO `tb_chitietnhap` (`id_chitietnhap`, `id_nhapkho`, `tensanpham`, `anhsanpham`, `gianhap`, `giaban`, `soluong`, `danhmuc`, `size`) VALUES
(7, 4, 'Váy', 'image1xxl--12-1.jpg', '500000', '1000000', 10, 'VD', 'M'),
(8, 4, 'Váy', 'image1xxl--12-2.jpg', '500000', '1000000', 3, 'VD', 'S'),
(9, 4, 'Váy', 'image1xxl--12-3.jpg', '500000', '1000000', 5, 'VD', 'L'),
(10, 4, 'Váy', 'image1xxl--12-4.jpg', '500000', '1000000', 7, 'VD', 'XL'),
(11, 5, 'Áo len đỏ đô', '2_1.jpg', '250000', '400000', 10, 'AO', 'Free Size'),
(12, 6, 'Váy xanh hoa trà ', '3.jpg', '980000', '1500000', 5, 'VD', 'S'),
(13, 6, 'Váy xanh hoa trà', '31.jpg', '980000', '1500000', 5, 'VD', 'M'),
(14, 6, 'Váy xanh hoa trà', '32.jpg', '980000', '1500000', 10, 'VD', 'L'),
(15, 6, 'Váy xanh hoa trà', '33.jpg', '980000', '1500000', 2, 'VD', 'XL'),
(16, 6, 'Váy xanh hoa trà', '34.jpg', '980000', '1500000', 3, 'VD', 'XXL'),
(17, 6, 'Váy trắng thắt nơ ', '4.jpg', '320000', '550000', 3, 'VD', 'M'),
(18, 6, 'Váy trắng thắt nơ ', '41.jpg', '320000', '550000', 5, 'VD', 'S'),
(19, 6, 'Váy trắng thắt nơ ', '42.jpg', '320000', '550000', 10, 'VD', 'L'),
(20, 6, 'Váy trắng thắt nơ ', '43.jpg', '320000', '550000', 3, 'VD', 'XL'),
(21, 6, 'Váy trắng thắt nơ ', '44.jpg', '320000', '550000', 2, 'VD', 'XXL'),
(22, 6, 'Váy hồng nơ bồng ngang vai', '6_1.jpg', '720000', '980000', 3, 'VD', 'M'),
(23, 6, 'Váy hồng nơ bồng ngang vai', '6_11.jpg', '720000', '980000', 5, 'VD', 'S'),
(24, 6, 'Váy hồng nơ bồng ngang vai', '6_12.jpg', '720000', '980000', 3, 'VD', 'L'),
(25, 6, 'Váy hồng nơ bồng ngang vai', '6_13.jpg', '720000', '980000', 2, 'VD', 'XL'),
(26, 6, 'Váy hồng nơ bồng ngang vai', '6_14.jpg', '720000', '980000', 2, 'VD', 'XXL'),
(27, 6, 'Đầm đen dài thắt eo', '1_1.jpg', '1200000', '1900000', 20, 'VD', 'Free Size'),
(28, 6, 'Quần Mango ống bó', '7_1.jpg', '350000', '550000', 10, 'QU', 'M'),
(29, 6, 'Quần Mango ống bó', '7_11.jpg', '350000', '550000', 10, 'QU', 'S'),
(30, 6, 'Quần Mango ống bó', '7_12.jpg', '350000', '550000', 10, 'QU', 'L'),
(31, 6, 'Quần Mango ống bó', '7_13.jpg', '350000', '550000', 10, 'QU', 'XL'),
(32, 6, 'Quần Mango ống bó', '7_14.jpg', '350000', '550000', 10, 'QU', 'XXL'),
(33, 6, 'Áo tay bèo viền đen', '8_2.jpg', '280000', '560000', 10, 'AO', 'M'),
(34, 6, 'Áo tay bèo viền đen', '8_21.jpg', '280000', '560000', 10, 'AO', 'S'),
(35, 6, 'Áo tay bèo viền đen', '8_22.jpg', '280000', '560000', 10, 'AO', 'L'),
(36, 6, 'Áo tay bèo viền đen', '8_24.jpg', '280000', '560000', 10, 'AO', 'XL'),
(37, 6, 'Áo tay bèo viền đen', '8_25.jpg', '280000', '560000', 10, 'AO', 'XXL'),
(38, 6, 'Chân váy bút chì', '111.jpg', '290000', '480000', 10, 'VD', 'M'),
(39, 6, 'Chân váy bút chì', '112.jpg', '290000', '480000', 10, 'VD', 'S'),
(40, 6, 'Chân váy bút chì', '113.jpg', '290000', '480000', 10, 'VD', 'S'),
(41, 6, 'Chân váy bút chì', '114.jpg', '290000', '480000', 10, 'VD', 'L'),
(42, 6, 'Chân váy bút chì', '116.jpg', '290000', '480000', 10, 'VD', 'XL'),
(43, 6, 'Chân váy bút chì', '117.jpg', '290000', '480000', 5, 'VD', 'XXL'),
(44, 6, 'Đồng hồ dây da đỏ', '30.jpg', '1800000', '2800000', 10, 'PK', 'Free Size'),
(45, 6, 'Đồng hồ đỏ dây da lỳ', '311.jpg', '1200000', '1650000', 10, 'PK', 'Free Size'),
(46, 6, 'Đồng hồ đôi mạ vàng 24K', '321.jpg', '3200000', '5200000', 10, 'PK', 'Free Size'),
(47, 6, 'Dây chuyền bạc mặt tim kim cương ', '40.jpg', '1200000', '14500000', 10, 'PK', 'Free Size'),
(48, 6, 'Đồng hồ đôi dây da nâu', '331.jpg', '900000', '1300000', 10, 'PK', 'Free Size'),
(49, 6, 'Đồng hồ mạ vàng 18K', '341.jpg', '1500000', '1950000', 5, 'PK', 'Free Size'),
(50, 6, 'Dây chuyền thiên nga ', '431.jpg', '13500000', '15000000', 10, 'PK', 'Free Size'),
(51, 6, 'Nhẫn bạc gắn đá kim cương ', '50.jpg', '1500000', '2000000', 10, 'PK', 'Free Size'),
(52, 6, 'Túi Xampo hàng hãng ', 'tuixampo.jpg', '2600000', '3600000', 10, 'TX', 'Free Size'),
(53, 6, 'Túi Gucci hoa hồng ', 'tuihoahong.jpg', '1900000', '2600000', 15, 'TX', 'Free Size'),
(54, 6, 'Túi Channel Boy đá', 'tuichannel.jpg', '2200000', '3100000', 15, 'TX', 'Free Size'),
(55, 7, 'Váy công chúa họa tiết hoa nhí', 'vaytrangchambi.png', '950000', '1200000', 5, 'VD', 'M'),
(56, 7, 'Váy công chúa họa tiết hoa nhí', 'vaytrangchambi2.png', '950000', '1200000', 5, 'VD', 'L'),
(57, 7, 'Váy công chúa họa tiết hoa nhí', 'vaytrangchambi3.png', '950000', '1200000', 5, 'VD', 'S'),
(58, 7, 'Váy công chúa họa tiết hoa nhí', 'vaytrangchambi4.png', '950000', '1200000', 5, 'VD', 'XL'),
(59, 7, 'Váy công chúa họa tiết hoa nhí', 'vaytrangchambi5.png', '950000', '1200000', 5, 'VD', 'XXL'),
(60, 7, 'Mũ vành rộng kẻ sọc xanh', 'muvanhrong.jpg', '350000', '580000', 20, 'PK', 'Free Size'),
(61, 7, 'Dây chuyền bạc trăng sao', '421.jpg', '1600000', '2100000', 10, 'PK', 'Free Size'),
(62, 7, 'Áo sơ mi thêu hoa hồng đỏ', 'aonutheuhoa.jpg', '390000', '620000', 10, 'AO', 'M'),
(63, 7, 'Áo sơ mi thêu hoa hồng đỏ', 'aonutheuhoa1.jpg', '390000', '620000', 10, 'AO', 'S'),
(64, 7, 'Áo sơ mi thêu hoa hồng đỏ', 'aonutheuhoa2.jpg', '390000', '620000', 10, 'AO', 'L'),
(65, 7, 'Áo sơ mi thêu hoa hồng đỏ', 'aonutheuhoa3.jpg', '390000', '620000', 10, 'AO', 'XL'),
(66, 7, 'Áo sơ mi thêu hoa hồng đỏ', 'aonutheuhoa5.jpg', '390000', '620000', 2, 'AO', 'XXL'),
(67, 7, 'Túi xách Hàn Quốc', 'tuixachhanquoc.jpg', '1200000', '1600000', 20, 'TX', 'Free Size'),
(68, 7, 'Váy công chúa trắng đen', 'vaycongchua.jpg', '460000', '720000', 5, 'VD', 'M'),
(69, 7, 'Váy công chúa trắng đen', 'vaycongchua1.jpg', '460000', '720000', 5, 'VD', 'S'),
(70, 7, 'Váy công chúa trắng đen', 'vaycongchua2.jpg', '460000', '720000', 5, 'VD', 'XL'),
(71, 7, 'Váy công chúa trắng đen', 'vaycongchua3.jpg', '460000', '720000', 5, 'VD', 'XXL'),
(72, 7, 'Váy công chúa trắng đen', 'vaycongchua4.jpg', '460000', '720000', 5, 'VD', 'L'),
(73, 7, 'Quần Skinny co giãn 4 chiều ', 'skiiny1.jpg', '480000', '520000', 10, 'QU', 'S'),
(74, 7, 'Quần Skinny co giãn 4 chiều ', 'skiiny2.jpg', '480000', '520000', 10, 'QU', 'L'),
(75, 7, 'Quần Skinny co giãn 4 chiều ', 'skiiny3.jpg', '480000', '520000', 10, 'QU', 'XL'),
(76, 7, 'Quần Skinny co giãn 4 chiều ', 'skiiny4.jpg', '480000', '520000', 10, 'QU', 'M'),
(77, 7, 'Quần Skinny co giãn 4 chiều ', 'skiiny5.jpg', '480000', '520000', 10, 'QU', 'XXL'),
(78, 7, 'Chân váy ren xòe', 'chanvayrenxoe.jpg', '570000', '820000', 10, 'VD', 'Free Size'),
(79, 8, 'Chân váy bút chì', '111.jpg', '290000', '480000', 1, 'VD', 'M'),
(80, 8, 'Chân váy bút chì', '116.jpg', '290000', '480000', 1, 'VD', 'XL'),
(81, 9, 'Váy', 'image1xxl--12-2.jpg', '500000', '1000000', 3, 'VD', 'S'),
(82, 10, 'Váy', 'image1xxl--12-1.jpg', '500000', '1000000', 2, 'VD', 'M'),
(83, 11, 'Váy', 'image1xxl--12-2.jpg', '500000', '1000000', 6, 'VD', 'S'),
(84, 12, 'Váy', 'image1xxl--12-2.jpg', '500000', '1000000', 3, 'VD', 'S'),
(85, 12, 'Váy', 'image1xxl--12-1.jpg', '500000', '1000000', 2, 'VD', 'M'),
(86, 13, 'Váy', 'image1xxl--12-1.jpg', '500000', '1000000', 1, 'VD', 'M'),
(87, 14, 'Váy', 'image1xxl--12-2.jpg', '500000', '1000000', 7, 'VD', 'S'),
(88, 15, 'Váy', 'image1xxl--12-2.jpg', '500000', '1000000', 7, 'VD', 'S'),
(89, 16, 'Váy', 'image1xxl--12-2.jpg', '500000', '1000000', 7, 'VD', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `tb_chitietxuat`
--

CREATE TABLE `tb_chitietxuat` (
  `id_chitietxuat` int(11) NOT NULL,
  `id_xuatkho` int(11) NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sanpham` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_chitietxuat`
--

INSERT INTO `tb_chitietxuat` (`id_chitietxuat`, `id_xuatkho`, `img`, `sanpham`, `size`, `soluong`, `gia`, `thanhtien`) VALUES
(1, 1, 'image1xxl--12-1.jpg', 'Váy', 'M', 1, 1000000, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_chitiet_hoadon`
--

CREATE TABLE `tb_chitiet_hoadon` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `mahoadon` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `subtotal` bigint(20) NOT NULL,
  `size` varchar(15) NOT NULL,
  `madanhmuc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hoadon`
--

CREATE TABLE `tb_hoadon` (
  `id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `address` varchar(90) NOT NULL,
  `city` varchar(50) NOT NULL,
  `money` bigint(20) NOT NULL,
  `ship` int(11) NOT NULL,
  `ghichu` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_message`
--

CREATE TABLE `tb_message` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nhapkho`
--

CREATE TABLE `tb_nhapkho` (
  `id_nhapkho` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `number` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_nhapkho`
--

INSERT INTO `tb_nhapkho` (`id_nhapkho`, `id_admin`, `money`, `number`, `date`) VALUES
(4, 1, 12500000, 25, '2017-06-25 02:00:51'),
(5, 1, 2500000, 10, '2017-06-25 23:45:26'),
(6, 1, 442110000, 353, '2017-06-26 00:10:14'),
(7, 1, 128330000, 202, '2017-06-26 01:01:08'),
(8, 1, 580000, 2, '2017-06-26 06:59:16'),
(9, 1, 1500000, 3, '2017-06-26 07:02:32'),
(10, 1, 1000000, 2, '2017-06-26 07:08:32'),
(11, 1, 3000000, 6, '2017-06-26 07:09:04'),
(12, 1, 2500000, 5, '2017-06-26 07:20:44'),
(13, 1, 500000, 1, '2017-06-26 07:23:57'),
(14, 1, 3500000, 7, '2017-06-26 07:25:54'),
(15, 1, 3500000, 7, '2017-06-26 07:28:37'),
(16, 1, 3500000, 7, '2017-06-26 07:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(11) NOT NULL,
  `img` varchar(70) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` bigint(11) NOT NULL,
  `price_nhap` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `number_kho` int(11) NOT NULL,
  `madanhmuc` varchar(11) NOT NULL,
  `size` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `img`, `name`, `price`, `price_nhap`, `number`, `number_kho`, `madanhmuc`, `size`) VALUES
(49, 'image1xxl--12-1.jpg', 'Váy', 1000000, 500000, 10, 10, 'VD', 'M'),
(50, 'image1xxl--12-2.jpg', 'Váy', 1000000, 500000, 10, 10, 'VD', 'S'),
(51, 'image1xxl--12-3.jpg', 'Váy', 1000000, 500000, 4, 4, 'VD', 'L'),
(52, 'image1xxl--12-4.jpg', 'Váy', 1000000, 500000, 7, 7, 'VD', 'XL'),
(53, '2_1.jpg', 'Áo len đỏ đô', 400000, 250000, 10, 10, 'AO', 'Free Size'),
(54, '3.jpg', 'Váy xanh hoa trà ', 1500000, 980000, 5, 5, 'VD', 'S'),
(55, '31.jpg', 'Váy xanh hoa trà', 1500000, 980000, 5, 5, 'VD', 'M'),
(56, '32.jpg', 'Váy xanh hoa trà', 1500000, 980000, 10, 10, 'VD', 'L'),
(57, '33.jpg', 'Váy xanh hoa trà', 1500000, 980000, 2, 2, 'VD', 'XL'),
(58, '34.jpg', 'Váy xanh hoa trà', 1500000, 980000, 3, 3, 'VD', 'XXL'),
(59, '4.jpg', 'Váy trắng thắt nơ ', 550000, 320000, 3, 3, 'VD', 'M'),
(60, '41.jpg', 'Váy trắng thắt nơ ', 550000, 320000, 5, 5, 'VD', 'S'),
(61, '42.jpg', 'Váy trắng thắt nơ ', 550000, 320000, 10, 10, 'VD', 'L'),
(62, '43.jpg', 'Váy trắng thắt nơ ', 550000, 320000, 3, 3, 'VD', 'XL'),
(63, '44.jpg', 'Váy trắng thắt nơ ', 550000, 320000, 2, 2, 'VD', 'XXL'),
(69, '1_1.jpg', 'Đầm đen dài thắt eo', 1900000, 1200000, 20, 20, 'VD', 'Free Size'),
(70, '7_1.jpg', 'Quần Mango ống bó', 550000, 350000, 10, 10, 'QU', 'M'),
(71, '7_11.jpg', 'Quần Mango ống bó', 550000, 350000, 10, 10, 'QU', 'S'),
(72, '7_12.jpg', 'Quần Mango ống bó', 550000, 350000, 10, 10, 'QU', 'L'),
(73, '7_13.jpg', 'Quần Mango ống bó', 550000, 350000, 10, 10, 'QU', 'XL'),
(74, '7_14.jpg', 'Quần Mango ống bó', 550000, 350000, 10, 10, 'QU', 'XXL'),
(75, '8_2.jpg', 'Áo tay bèo viền đen', 560000, 280000, 10, 10, 'AO', 'M'),
(76, '8_21.jpg', 'Áo tay bèo viền đen', 560000, 280000, 10, 10, 'AO', 'S'),
(77, '8_22.jpg', 'Áo tay bèo viền đen', 560000, 280000, 10, 10, 'AO', 'L'),
(78, '8_24.jpg', 'Áo tay bèo viền đen', 560000, 280000, 10, 10, 'AO', 'XL'),
(79, '8_25.jpg', 'Áo tay bèo viền đen', 560000, 280000, 10, 10, 'AO', 'XXL'),
(80, '111.jpg', 'Chân váy bút chì', 480000, 290000, 10, 10, 'VD', 'M'),
(81, '112.jpg', 'Chân váy bút chì', 480000, 290000, 10, 10, 'VD', 'S'),
(83, '114.jpg', 'Chân váy bút chì', 480000, 290000, 10, 10, 'VD', 'L'),
(84, '116.jpg', 'Chân váy bút chì', 480000, 290000, 10, 10, 'VD', 'XL'),
(85, '117.jpg', 'Chân váy bút chì', 480000, 290000, 5, 5, 'VD', 'XXL'),
(86, '30.jpg', 'Đồng hồ dây da đỏ', 2800000, 1800000, 10, 10, 'PK', 'Free Size'),
(87, '311.jpg', 'Đồng hồ đỏ dây da lỳ', 1650000, 1200000, 10, 10, 'PK', 'Free Size'),
(88, '321.jpg', 'Đồng hồ đôi mạ vàng 24K', 5200000, 3200000, 10, 10, 'PK', 'Free Size'),
(89, '40.jpg', 'Dây chuyền bạc mặt tim kim cương ', 14500000, 1200000, 10, 10, 'PK', 'Free Size'),
(90, '331.jpg', 'Đồng hồ đôi dây da nâu', 1300000, 900000, 10, 10, 'PK', 'Free Size'),
(91, '341.jpg', 'Đồng hồ mạ vàng 18K', 1950000, 1500000, 5, 5, 'PK', 'Free Size'),
(92, '431.jpg', 'Dây chuyền thiên nga ', 15000000, 13500000, 10, 10, 'PK', 'Free Size'),
(93, '50.jpg', 'Nhẫn bạc gắn đá kim cương ', 2000000, 1500000, 10, 10, 'PK', 'Free Size'),
(94, 'tuixampo.jpg', 'Túi Xampo hàng hãng ', 3600000, 2600000, 10, 10, 'TX', 'Free Size'),
(95, 'tuihoahong.jpg', 'Túi Gucci hoa hồng ', 2600000, 1900000, 15, 15, 'TX', 'Free Size'),
(96, 'tuichannel.jpg', 'Túi Channel Boy đá', 3100000, 2200000, 15, 15, 'TX', 'Free Size'),
(97, 'vaytrangchambi.png', 'Váy công chúa họa tiết hoa nhí', 1200000, 950000, 5, 5, 'VD', 'M'),
(98, 'vaytrangchambi2.png', 'Váy công chúa họa tiết hoa nhí', 1200000, 950000, 5, 5, 'VD', 'L'),
(99, 'vaytrangchambi3.png', 'Váy công chúa họa tiết hoa nhí', 1200000, 950000, 5, 5, 'VD', 'S'),
(100, 'vaytrangchambi4.png', 'Váy công chúa họa tiết hoa nhí', 1200000, 950000, 5, 5, 'VD', 'XL'),
(101, 'vaytrangchambi5.png', 'Váy công chúa họa tiết hoa nhí', 1200000, 950000, 5, 5, 'VD', 'XXL'),
(102, 'muvanhrong.jpg', 'Mũ vành rộng kẻ sọc xanh', 580000, 350000, 20, 20, 'PK', 'Free Size'),
(103, '421.jpg', 'Dây chuyền bạc trăng sao', 2100000, 1600000, 10, 10, 'PK', 'Free Size'),
(104, 'aonutheuhoa.jpg', 'Áo sơ mi thêu hoa hồng đỏ', 620000, 390000, 10, 10, 'AO', 'M'),
(105, 'aonutheuhoa1.jpg', 'Áo sơ mi thêu hoa hồng đỏ', 620000, 390000, 10, 10, 'AO', 'S'),
(106, 'aonutheuhoa2.jpg', 'Áo sơ mi thêu hoa hồng đỏ', 620000, 390000, 10, 10, 'AO', 'L'),
(107, 'aonutheuhoa3.jpg', 'Áo sơ mi thêu hoa hồng đỏ', 620000, 390000, 10, 10, 'AO', 'XL'),
(108, 'aonutheuhoa5.jpg', 'Áo sơ mi thêu hoa hồng đỏ', 620000, 390000, 2, 2, 'AO', 'XXL'),
(109, 'tuixachhanquoc.jpg', 'Túi xách Hàn Quốc', 1600000, 1200000, 20, 20, 'TX', 'Free Size'),
(110, 'vaycongchua.jpg', 'Váy công chúa trắng đen', 720000, 460000, 5, 5, 'VD', 'M'),
(111, 'vaycongchua1.jpg', 'Váy công chúa trắng đen', 720000, 460000, 5, 5, 'VD', 'S'),
(112, 'vaycongchua2.jpg', 'Váy công chúa trắng đen', 720000, 460000, 5, 5, 'VD', 'XL'),
(113, 'vaycongchua3.jpg', 'Váy công chúa trắng đen', 720000, 460000, 5, 5, 'VD', 'XXL'),
(114, 'vaycongchua4.jpg', 'Váy công chúa trắng đen', 720000, 460000, 5, 5, 'VD', 'L'),
(115, 'skiiny1.jpg', 'Quần Skinny co giãn 4 chiều ', 520000, 480000, 10, 10, 'QU', 'S'),
(116, 'skiiny2.jpg', 'Quần Skinny co giãn 4 chiều ', 520000, 480000, 10, 10, 'QU', 'L'),
(117, 'skiiny3.jpg', 'Quần Skinny co giãn 4 chiều ', 520000, 480000, 10, 10, 'QU', 'XL'),
(118, 'skiiny4.jpg', 'Quần Skinny co giãn 4 chiều ', 520000, 480000, 10, 10, 'QU', 'M'),
(119, 'skiiny5.jpg', 'Quần Skinny co giãn 4 chiều ', 520000, 480000, 10, 10, 'QU', 'XXL'),
(120, 'chanvayrenxoe.jpg', 'Chân váy ren xòe', 820000, 570000, 10, 10, 'VD', 'Free Size');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `email`, `password`, `phone`, `address`) VALUES
(8, 'Lai Thi Lan Anh', 'lananh@gmail.com', '9d9ca0162c8cc09f018f37c3d37bc8b3', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_xuatkho`
--

CREATE TABLE `tb_xuatkho` (
  `id_xuatkho` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tenkh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `thanhpho` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `thanhtoan` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `trangthai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_xuatkho`
--

INSERT INTO `tb_xuatkho` (`id_xuatkho`, `id_admin`, `tenkh`, `sdt`, `diachi`, `thanhpho`, `thanhtoan`, `soluong`, `ngaythang`, `trangthai`) VALUES
(1, 1, 'Lại Thị Lan Anh', '0972940495', 'Cổ Nhuế - Từ Liêm', 'Hà Nội', 1000000, 1, '2017-06-25 07:29:46', 'Đơn online17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_catalog`
--
ALTER TABLE `tb_catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_chitietnhap`
--
ALTER TABLE `tb_chitietnhap`
  ADD PRIMARY KEY (`id_chitietnhap`);

--
-- Indexes for table `tb_chitietxuat`
--
ALTER TABLE `tb_chitietxuat`
  ADD PRIMARY KEY (`id_chitietxuat`);

--
-- Indexes for table `tb_chitiet_hoadon`
--
ALTER TABLE `tb_chitiet_hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_message`
--
ALTER TABLE `tb_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_nhapkho`
--
ALTER TABLE `tb_nhapkho`
  ADD PRIMARY KEY (`id_nhapkho`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_xuatkho`
--
ALTER TABLE `tb_xuatkho`
  ADD PRIMARY KEY (`id_xuatkho`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_catalog`
--
ALTER TABLE `tb_catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_chitietnhap`
--
ALTER TABLE `tb_chitietnhap`
  MODIFY `id_chitietnhap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `tb_chitietxuat`
--
ALTER TABLE `tb_chitietxuat`
  MODIFY `id_chitietxuat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_chitiet_hoadon`
--
ALTER TABLE `tb_chitiet_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_nhapkho`
--
ALTER TABLE `tb_nhapkho`
  MODIFY `id_nhapkho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_xuatkho`
--
ALTER TABLE `tb_xuatkho`
  MODIFY `id_xuatkho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
