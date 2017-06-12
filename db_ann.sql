-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 12:58 PM
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
(5, 9, 'Túi bucket', 'image1xxl11.jpg', '500000', '1100000', 30, 'TX', 'Free Size'),
(6, 9, 'Túi dáng cổ điển Asos', 'image1xxl--43-1.jpg', '650000', '1120000', 7, 'TX', 'Free Size'),
(7, 10, 'Túi dáng cổ điển Asos', 'image1xxl--43-1.jpg', '650000', '1120000', 3, 'TX', 'Free Size'),
(8, 10, 'Quần váy rủ Asos', 'image1xxl--12-1.jpg', '650000', '1300000', 8, 'TX', 'Free Size '),
(9, 11, 'Quần Short', 'image1xxl--14-.jpg', '500000', '750000', 10, 'Q', 'L'),
(10, 11, 'Quần Jean', 'image4xxl--10-.jpg', '300000', '700000', 7, 'Q', 'XL'),
(11, 11, 'Đầm maxi pha ren', 'image1xxl-1--c6eac49d-8358-44bc-a768-70d3a4da85aa.', '700000', '2190000', 3, 'VD', 'L'),
(12, 12, 'Túi đeo chéo Mango', 'image1xxl--49-.jpg', '650000', '990000', 30, 'TX', 'Free Size'),
(13, 13, 'Đầm maxi trễ vai', 'image1xxl--2-.jpg', '400000', '1190000', 6, 'VD', 'XL');

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
(10, 41, 8, 'image1xxl11.jpg', 'Túi bucket', 1, 1100000, 1100000),
(11, 43, 8, 'image1xxl--12-1.jpg', 'Quần váy rủ Asos', 1, 1300000, 1300000),
(12, 47, 8, 'image1xxl--49-.jpg', 'Túi đeo chéo Mango', 1, 990000, 990000),
(13, 46, 8, 'image1xxl-1--c6eac49d-8358-44bc-a768-70d3a4da85aa.jpg', 'Đầm maxi pha ren', 1, 2190000, 2190000);

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
(8, 'babysumo2912@gmail.com', 'Ngọc Đức  123', '0438827017', 'Co Nhue', 'Hà Nội', 5580000, 40000, '', '2017-06-12 10:39:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kho`
--

CREATE TABLE `tb_kho` (
  `id_kho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(9, 1, 19550000, 37, '2017-06-09 10:49:00'),
(10, 1, 7150000, 11, '2017-06-09 10:50:21'),
(11, 1, 9200000, 20, '2017-06-10 07:25:59'),
(12, 1, 19500000, 30, '2017-06-10 07:30:15'),
(13, 1, 2400000, 6, '2017-06-10 07:34:46');

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
(41, 'image1xxl11.jpg', 'Túi bucket', 1100000, 500000, 29, 30, 'TX', 'Free Size'),
(42, 'image1xxl--43-1.jpg', 'Túi dáng cổ điển Asos', 1120000, 650000, 10, 10, 'TX', 'Free Size'),
(43, 'image1xxl--12-1.jpg', 'Quần váy rủ Asos', 1300000, 650000, 7, 8, 'TX', 'Free Size'),
(44, 'image1xxl--14-.jpg', 'Quần Short', 750000, 500000, 10, 10, 'Q', 'L'),
(45, 'image4xxl--10-.jpg', 'Quần Jean', 700000, 300000, 7, 7, 'Q', 'XL'),
(46, 'image1xxl-1--c6eac49d-8358-44bc-a768-70d3a4da85aa.jpg', 'Đầm maxi pha ren', 2190000, 700000, 2, 3, 'VD', 'L'),
(47, 'image1xxl--49-.jpg', 'Túi đeo chéo Mango', 990000, 650000, 29, 30, 'TX', 'Free Size'),
(48, 'image1xxl--2-.jpg', 'Đầm maxi trễ vai', 1190000, 400000, 6, 6, 'VD', 'XL');

-- --------------------------------------------------------

--
-- Table structure for table `tb_test`
--

CREATE TABLE `tb_test` (
  `id` int(11) NOT NULL,
  `img` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_test`
--

INSERT INTO `tb_test` (`id`, `img`) VALUES
(3, 'sandal3.jpg'),
(4, 'sandal.jpg'),
(5, 'sandal1.jpg'),
(6, 'sandal2.jpg'),
(7, 'sandal4.jpg'),
(8, 'sandal5.jpg'),
(9, 'sandal6.jpg'),
(10, 'sandal7.jpg');

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
  `money` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Indexes for table `tb_test`
--
ALTER TABLE `tb_test`
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
  MODIFY `id_chitietnhap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_chitietxuat`
--
ALTER TABLE `tb_chitietxuat`
  MODIFY `id_chitietxuat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_chitiet_hoadon`
--
ALTER TABLE `tb_chitiet_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_nhapkho`
--
ALTER TABLE `tb_nhapkho`
  MODIFY `id_nhapkho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `tb_test`
--
ALTER TABLE `tb_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_xuatkho`
--
ALTER TABLE `tb_xuatkho`
  MODIFY `id_xuatkho` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
