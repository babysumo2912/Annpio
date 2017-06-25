-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2017 at 09:47 AM
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
(10, 4, 'Váy', 'image1xxl--12-4.jpg', '500000', '1000000', 7, 'VD', 'XL');

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
(4, 1, 12500000, 25, '2017-06-25 02:00:51');

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
(50, 'image1xxl--12-2.jpg', 'Váy', 1000000, 500000, 3, 3, 'VD', 'S'),
(51, 'image1xxl--12-3.jpg', 'Váy', 1000000, 500000, 4, 4, 'VD', 'L'),
(52, 'image1xxl--12-4.jpg', 'Váy', 1000000, 500000, 7, 7, 'VD', 'XL');

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
  MODIFY `id_chitietnhap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
  MODIFY `id_nhapkho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
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
