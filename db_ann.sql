-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2017 at 12:52 AM
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
(7, 'A', 'Áo'),
(8, 'Q', 'Quần'),
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
(1, 1, 'Tu  Tho', 'botcaogot.jpg', '1000', '10000000', 30, 'A', 'M'),
(2, 1, 'Giuong ngu', 'aokhoac1.jpg', '1', '20000000', 30, 'A', 'M'),
(3, 1, 'Tu ao', 'sandal.jpg', '1', '15000000', 30, 'A', 'M'),
(4, 2, 'Túi bucket', 'image1xxl11.jpg', '500000', '1100000', 1, 'TX', 'Free Size'),
(5, 2, 'Túi dáng cổ điển Asos', 'image1xxl--43-1.jpg', '650000', '1120000', 1, 'TX', 'Free Size');

-- --------------------------------------------------------

--
-- Table structure for table `tb_chitietxuat`
--

CREATE TABLE `tb_chitietxuat` (
  `id_chitietxuat` int(11) NOT NULL,
  `id_xuatkho` int(11) NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sanpham` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_chitietxuat`
--

INSERT INTO `tb_chitietxuat` (`id_chitietxuat`, `id_xuatkho`, `img`, `sanpham`, `soluong`, `gia`, `thanhtien`) VALUES
(43, 12, 'image1xxl11.jpg', 'Túi bucket', 1, 1100000, 1100000),
(44, 12, 'image1xxl--12-1.jpg', 'Quần váy rủ Asos', 3, 1300000, 3900000),
(45, 12, 'image1xxl--2-.jpg', 'Đầm maxi trễ vai', 1, 1190000, 1190000),
(46, 13, 'image1xxl11.jpg', 'Túi bucket', 1, 1100000, 1100000),
(47, 13, 'image1xxl--12-1.jpg', 'Quần váy rủ Asos', 3, 1300000, 3900000),
(48, 13, 'image1xxl--2-.jpg', 'Đầm maxi trễ vai', 1, 1190000, 1190000),
(49, 14, 'image1xxl11.jpg', 'Túi bucket', 1, 1100000, 1100000),
(50, 14, 'image1xxl--12-1.jpg', 'Quần váy rủ Asos', 3, 1300000, 3900000),
(51, 14, 'image1xxl--2-.jpg', 'Đầm maxi trễ vai', 1, 1190000, 1190000),
(52, 15, 'image1xxl11.jpg', 'Túi bucket', 1, 1100000, 1100000),
(53, 15, 'image1xxl--12-1.jpg', 'Quần váy rủ Asos', 3, 1300000, 3900000),
(54, 15, 'image1xxl--2-.jpg', 'Đầm maxi trễ vai', 1, 1190000, 1190000),
(55, 16, 'image1xxl11.jpg', 'Túi bucket', 1, 1100000, 1100000),
(56, 16, 'image1xxl--12-1.jpg', 'Quần váy rủ Asos', 3, 1300000, 3900000),
(57, 16, 'image1xxl--2-.jpg', 'Đầm maxi trễ vai', 1, 1190000, 1190000),
(58, 17, 'botcaogot.jpg', 'Tu  Tho', 2, 10000000, 20000000),
(59, 17, 'aokhoac1.jpg', 'Giuong ngu', 1, 20000000, 20000000),
(60, 17, 'sandal.jpg', 'Tu ao', 2, 15000000, 30000000),
(61, 18, 'botcaogot.jpg', 'Tu  Tho', 2, 10000000, 20000000),
(62, 18, 'aokhoac1.jpg', 'Giuong ngu', 1, 20000000, 20000000),
(63, 18, 'sandal.jpg', 'Tu ao', 2, 15000000, 30000000),
(64, 19, 'image1xxl--43-1.jpg', 'Túi dáng cổ điển Asos', 2, 1120000, 2240000),
(65, 19, 'image1xxl--12-1.jpg', 'Quần váy rủ Asos', 1, 1300000, 1300000),
(66, 20, 'image1xxl--43-1.jpg', 'Tui co dien Asos', 2, 1120000, 2240000),
(67, 20, 'image1xxl--12-1.jpg', 'Quan vay Asos', 1, 1300000, 1300000),
(68, 21, 'image1xxl--14-.jpg', 'Quần Short', 5, 750000, 3750000),
(69, 21, 'image1xxl--49-.jpg', 'Túi đeo chéo Mango', 7, 990000, 6930000),
(70, 22, 'image4xxl--10-.jpg', 'Quần Jean', 5, 700000, 3500000),
(71, 22, 'image1xxl11.jpg', 'Túi bucket', 3, 1100000, 3300000),
(72, 23, 'image4xxl--10-.jpg', 'Quần Jean', 5, 700000, 3500000),
(73, 23, 'image1xxl11.jpg', 'Túi bucket', 3, 1100000, 3300000),
(74, 23, 'image1xxl--43-1.jpg', 'Túi dáng cổ điển Asos', 2, 1120000, 2240000),
(75, 24, 'image4xxl--10-.jpg', 'Quần Jean', 5, 700000, 3500000),
(76, 24, 'image1xxl11.jpg', 'Túi bucket', 3, 1100000, 3300000),
(77, 24, 'image1xxl--43-1.jpg', 'Túi dáng cổ điển Asos', 2, 1120000, 2240000),
(78, 25, 'image1xxl11.jpg', 'Túi bucket', 1, 1100000, 1100000),
(79, 25, 'image1xxl--43-1.jpg', 'Túi dáng cổ điển Asos', 1, 1120000, 1120000),
(80, 28, 'image1xxl11.jpg', 'Túi bucket', 10, 1100000, 11000000),
(81, 28, 'image1xxl--43-1.jpg', 'Túi dáng cổ điển Asos', 5, 1120000, 5600000);

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
  `subtotal` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_chitiet_hoadon`
--

INSERT INTO `tb_chitiet_hoadon` (`id`, `id_product`, `mahoadon`, `img`, `name`, `qty`, `price`, `subtotal`) VALUES
(17, 41, 10, 'image1xxl11.jpg', 'Túi bucket', 1, 1100000, 1100000),
(18, 43, 10, 'image1xxl--12-1.jpg', 'Quần váy rủ Asos', 3, 1300000, 3900000),
(19, 48, 10, 'image1xxl--2-.jpg', 'Đầm maxi trễ vai', 1, 1190000, 1190000),
(20, 49, 11, 'botcaogot.jpg', 'Tu  Tho', 2, 10000000, 20000000),
(21, 50, 11, 'aokhoac1.jpg', 'Giuong ngu', 1, 20000000, 20000000),
(22, 51, 11, 'sandal.jpg', 'Tu ao', 2, 15000000, 30000000),
(23, 42, 12, 'image1xxl--43-1.jpg', 'Tui dang co dien Asos', 2, 1120000, 2240000),
(24, 43, 12, 'image1xxl--12-1.jpg', 'Quan vay Asos', 1, 1300000, 1300000),
(25, 41, 13, 'image1xxl11.jpg', 'Túi bucket', 1, 1100000, 1100000),
(26, 42, 13, 'image1xxl--43-1.jpg', 'Túi dáng cổ điển Asos', 1, 1120000, 1120000);

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

--
-- Dumping data for table `tb_hoadon`
--

INSERT INTO `tb_hoadon` (`id`, `email`, `name`, `phone`, `address`, `city`, `money`, `ship`, `ghichu`, `date`, `active`) VALUES
(10, 'babysumo2912@gmail.com', 'Lai Lan Anh', '0438827017', 'Co Nhue', 'Ha Noi', 6190000, 40000, '', '2017-06-12 22:06:22', 1),
(11, 'dachuy@gmail.com', 'Nguyen Dac Huy', '0966599493', 'Xa Van Ha, Huyen Dong Anh', 'Ha Noi', 70000000, 40000, 'Liên hệ trước khi giao hàng', '2017-06-14 07:33:01', 1),
(12, 'lananh@gmail.com', 'Lai Thi Lan Anh', '0972940495', 'Co Nhue Tu Liem', 'Ha Noi', 3540000, 40000, '', '2017-06-15 11:47:09', 1),
(13, 'lananh@gmail.com', 'Tran Ngoc Duc', '0972940495', 'Co Nhue Tu Liem', 'Hà Nội', 2220000, 40000, '', '2017-06-18 18:00:28', 1);

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

--
-- Dumping data for table `tb_message`
--

INSERT INTO `tb_message` (`id`, `name`, `email`, `content`, `date`, `active`) VALUES
(8, 'Ngoc Duc', 'abc@gmail.com', 'ABC', '2016-12-25 07:56:23', 1),
(9, 'Lai Lan Anh', 'lananh@gmail.com', 'Shop có đợt giảm giá không ạ', '2017-05-30 08:35:41', 0);

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
(1, 1, 30060, 90, '2017-06-14 07:29:59'),
(2, 1, 1150000, 2, '2017-06-18 18:06:46');

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
(41, 'image1xxl11.jpg', 'Túi bucket', 1100000, 500000, 20, 20, 'TX', 'Free Size'),
(42, 'image1xxl--43-1.jpg', 'Túi dáng cổ điển Asos', 1120000, 650000, 5, 5, 'TX', 'Free Size'),
(43, 'image1xxl--12-1.jpg', 'Quần váy rủ Asos', 1300000, 650000, 2, 8, 'TX', 'Free Size'),
(44, 'image1xxl--14-.jpg', 'Quần Short', 750000, 500000, 10, 10, 'Q', 'L'),
(45, 'image4xxl--10-.jpg', 'Quần Jean', 700000, 300000, 7, 7, 'Q', 'XL'),
(46, 'image1xxl-1--c6eac49d-8358-44bc-a768-70d3a4da85aa.jpg', 'Đầm maxi pha ren', 2190000, 700000, 1, 3, 'VD', 'L'),
(47, 'image1xxl--49-.jpg', 'Túi đeo chéo Mango', 990000, 650000, 27, 30, 'TX', 'Free Size'),
(48, 'image1xxl--2-.jpg', 'Đầm maxi trễ vai', 1190000, 400000, 5, 6, 'VD', 'XL');

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
(5, 'Lại Thị Lan Anh', '1221050146@gmail.com', '9d9ca0162c8cc09f018f37c3d37bc8b3', '', ''),
(6, 'Lai Lan Anh', 'lananh@gmail.com', '9d9ca0162c8cc09f018f37c3d37bc8b3', '', '');

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
(12, 1, 'Lai Lan Anh', '0438827017', 'Co Nhue', 'Hà Nội', 6190000, 5, '2017-06-12 18:42:35', 'Đơn online10'),
(13, 1, 'Lai Lan Anh', '0438827017', 'Co Nhue', 'Ha Noi', 6190000, 5, '2017-06-12 22:06:22', 'Đơn online10'),
(14, 1, 'Lai Lan Anh', '0438827017', 'Co Nhue', 'Ha Noi', 6190000, 5, '2017-06-12 22:15:04', 'Đơn online10'),
(15, 1, 'Lai Lan Anh', '0438827017', 'Co Nhue', 'Ha Noi', 6190000, 5, '2017-06-12 22:18:25', 'Đơn online10'),
(16, 1, 'Lai Lan Anh', '0438827017', 'Co Nhue', 'Ha Noi', 6190000, 5, '2017-06-12 22:19:38', 'Đơn online10'),
(17, 1, 'Nguyen Dac Huy', '0966599493', 'Xa Van Ha, Huyen Dong Anh', 'Hà Nội', 70000000, 5, '2017-06-14 07:32:18', 'Đơn online11'),
(18, 1, 'Nguyen Dac Huy', '0966599493', 'Xa Van Ha, Huyen Dong Anh', 'Ha Noi', 70000000, 5, '2017-06-14 07:33:09', 'Đơn online11'),
(19, 1, 'Lại Thị Lan Anh', '0972940495', 'Co Nhue Tu Liem', 'Hà Nội', 3540000, 3, '2017-06-15 11:45:56', 'Đơn online12'),
(20, 1, 'Lai Thi Lan Anh', '0972940495', 'Co Nhue Tu Liem', 'Ha Noi', 3540000, 3, '2017-06-15 11:47:14', 'Đơn online12'),
(21, 1, 'Nguyen Dac Huy 123', '09999999999', 'Ha Dong - Dong Anh', 'Ha Noi', 10680000, 12, '2017-06-18 16:11:19', ''),
(22, 1, 'Nguyen Dac Huy 123456', '08888888888', 'Ha Dong - Dong Anh', 'Ha Noi', 6800000, 8, '2017-06-18 16:14:18', ''),
(23, 13, 'huy1111', '0123456789', 'Cau Ham Rong', 'Da Nang', 9040000, 10, '2017-06-18 20:32:20', 'Don offline'),
(24, 1, 'huy1111', '0123456789', 'Cau Ham Rong', 'Da Nang', 9040000, 10, '2017-06-18 16:37:59', 'Don offline'),
(25, 1, 'Tran Ngoc Duc', '0972940495', 'Co Nhue Tu Liem', 'Hà Nội', 2220000, 2, '2017-06-18 18:00:28', 'Đơn online13'),
(26, 1, 'Nguyen Dac Huy 1', '0777777777', 'Co Nhue Tu Liem', 'Ha Noi', 16600000, 15, '2017-05-31 18:15:53', 'Don offline'),
(27, 9, 'Nguyen Dac Huy 1', '0777777777', 'Co Nhue Tu Liem', 'Ha Noi', 16600000, 15, '2017-06-09 20:20:59', 'Don offline'),
(28, 8, 'Nguyen Dac Huy 1', '0777777777', 'Co Nhue Tu Liem', 'Ha Noi', 16600000, 15, '2017-06-08 20:32:04', 'Don offline');

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
  MODIFY `id_chitietnhap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_chitietxuat`
--
ALTER TABLE `tb_chitietxuat`
  MODIFY `id_chitietxuat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `tb_chitiet_hoadon`
--
ALTER TABLE `tb_chitiet_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_nhapkho`
--
ALTER TABLE `tb_nhapkho`
  MODIFY `id_nhapkho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_xuatkho`
--
ALTER TABLE `tb_xuatkho`
  MODIFY `id_xuatkho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
