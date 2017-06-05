-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2017 at 02:47 PM
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
(4, 'TTB', 'Thời trang nam'),
(5, 'TTG', 'Thời trang nữ'),
(6, 'TTCS', 'Thời trang công sở');

-- --------------------------------------------------------

--
-- Table structure for table `tb_chitietnhap`
--

CREATE TABLE `tb_chitietnhap` (
  `id_chitietnhap` int(11) NOT NULL,
  `id_nhapkho` int(10) NOT NULL,
  `product` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_chitiet_hoadon`
--

CREATE TABLE `tb_chitiet_hoadon` (
  `id` int(11) NOT NULL,
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

INSERT INTO `tb_chitiet_hoadon` (`id`, `mahoadon`, `img`, `name`, `qty`, `price`, `subtotal`) VALUES
(1, 1, '11.jpg', 'Sản phẩm 1', 1, 20000, 20000),
(2, 2, '11.jpg', 'Sản phẩm 1', 1, 20000, 20000),
(3, 3, '71.jpg', 'sanr pham 2', 1, 500000, 500000);

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
(1, '1221050146@gmail.com', 'Lai thi lan anh', '0123456789', 'HA noi', 'Hà Nội', 20000, 40000, 'abc\r\n', '2017-05-26 03:49:48', 1),
(2, '1221050146@gmail.com', 'LapTop MSI', '0123456789', 'HA noi', 'Nha Trang', 20000, 40000, '', '2017-05-26 03:56:36', 1),
(3, '1221050146@gmail.com', 'admin', '0123456789', 'HA noi', 'Đà Nẵng', 500000, 40000, '', '2017-05-26 03:57:01', 0);

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
  `name` varchar(30) NOT NULL,
  `number` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(11) NOT NULL,
  `masanpham` varchar(10) NOT NULL,
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

INSERT INTO `tb_product` (`id`, `masanpham`, `img`, `name`, `price`, `price_nhap`, `number`, `number_kho`, `madanhmuc`, `size`) VALUES
(3, 'abc', '11.jpg', 'san pham 1', 1000, 500, 10, 10, 'TTB', 'M'),
(4, '2', '71.jpg', 'san pham 2', 5000, 2000, 20, 1, 'TTG', 'XL'),
(5, 'abc', '11.jpg', 'san pham 1', 1000, 500, 10, 10, 'TTB', 'XL');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_chitietnhap`
--
ALTER TABLE `tb_chitietnhap`
  MODIFY `id_chitietnhap` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_chitiet_hoadon`
--
ALTER TABLE `tb_chitiet_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_nhapkho`
--
ALTER TABLE `tb_nhapkho`
  MODIFY `id_nhapkho` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
