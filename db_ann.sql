-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2016 at 02:09 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

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
(7, 19, 'phpstorm.png', 'san pham 90', 1, 2000000, 2000000),
(8, 20, 'phpstorm.png', 'san pham 90', 1, 2000000, 2000000),
(9, 21, '1213.jpg', 'sanpham104', 1, 600, 600),
(10, 22, '1213.jpg', 'sanpham104', 1, 600, 600),
(11, 23, '1213.jpg', 'sanpham104', 1, 600, 600),
(12, 24, '1213.jpg', 'sanpham104', 1, 600, 600),
(13, 25, '1213.jpg', 'sanpham104', 1, 600, 600),
(14, 26, '1213.jpg', 'sanpham104', 1, 600, 600),
(15, 27, 'phpstorm.png', 'san pham 90', 1, 2000000, 2000000),
(16, 28, 'phpstorm.png', 'san pham 90', 1, 2000000, 2000000),
(17, 29, 'phpstorm.png', 'san pham 90', 1, 2000000, 2000000),
(18, 30, 'phpstorm.png', 'san pham 90', 1, 2000000, 2000000),
(19, 31, 'phpstorm.png', 'san pham 90', 1, 2000000, 2000000),
(28, 36, 'phpstorm.png', 'san pham 90', 1, 2000000, 2000000),
(29, 36, '12121.png', 'sanpham102', 1, 500, 500);

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
(19, 'ngocduc@gmail.com', 'Tran Ngoc Duc', '0972940495', 'Co Nhue Tu Liem', 'hanoi', 2000000, 40000, '', '2016-12-16 10:00:51', 1),
(20, 'ngocduc@gmail.com', 'Tran Ngoc Duc', '0972940495', 'Co Nhue Tu Liem', 'hanoi', 2000000, 40000, '', '2016-12-13 05:11:53', 0),
(21, 'ngocduc@gmail.com', 'Tran Ngoc Duc', '0972940495', 'Co Nhue Tu Liem', 'hanoi', 600, 40000, '', '2016-12-13 05:12:55', 0),
(22, 'ngocduc@gmail.com', 'Tran Ngoc Duc', '0972940495', 'Co Nhue Tu Liem', 'hanoi', 600, 40000, '', '2016-12-13 05:16:50', 0),
(23, 'ngocduc@gmail.com', 'Tran Ngoc Duc', '0972940495', 'Co Nhue Tu Liem', 'hanoi', 600, 40000, '', '2016-12-13 05:18:34', 0),
(24, 'ngocduc@gmail.com', 'Tran Ngoc Duc', '0972940495', 'Co Nhue Tu Liem', 'hanoi', 600, 40000, '', '2016-12-13 05:20:17', 0),
(25, 'ngocduc@gmail.com', 'Tran Ngoc Duc', '0972940495', 'Co Nhue Tu Liem', 'hanoi', 600, 40000, '', '2016-12-13 05:21:39', 0),
(26, 'ngocduc@gmail.com', 'Tran Ngoc Duc', '0972940495', 'Co Nhue Tu Liem', 'hanoi', 600, 40000, '', '2016-12-13 05:22:09', 0),
(27, 'ngocduc@gmail.com', 'Tran Ngoc Duc', '0972940495', 'Co Nhue Tu Liem', 'hanoi', 2000000, 40000, '', '2016-12-13 05:24:38', 0),
(28, 'ngocduc@gmail.com', 'Tran Ngoc Duc', '0972940495', 'Co Nhue Tu Liem', 'hanoi', 2000000, 40000, '', '2016-12-16 09:50:10', 1),
(29, 'ngocduc@gmail.com', 'Tran Ngoc Duc', '0972940495', 'Co Nhue Tu Liem', 'hanoi', 2000000, 40000, '', '2016-12-13 05:25:40', 0),
(30, 'dasda@gmail', 'ádas', '01234567891', 'ádasda', 'hanoi', 2000000, 40000, '', '2016-12-13 05:27:01', 0),
(31, 'dasda@gmail', 'ádas', '01234567891', 'ádasda', 'hanoi', 2000000, 40000, '', '2016-12-23 07:56:45', 1);

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
(8, 'Ngoc Duc', 'abc@gmail.com', 'ABC', '2016-12-25 07:56:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `img` varchar(70) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` bigint(11) NOT NULL,
  `number` int(11) NOT NULL,
  `catalog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `date`, `img`, `name`, `price`, `number`, `catalog`) VALUES
(6, '2016-12-28 19:57:35', 'chimcc.png', 'sanpham6', 20000, 100, 1),
(7, '2016-12-28 18:51:26', 'chimcc1.png', 'sanpham 7', 21, 28994, 1),
(8, '2016-12-28 19:57:26', 'despicable-me-2-Minion-icon-5.png', 'sanpham 8', 3000000, 100, 1),
(9, '2016-12-28 19:57:42', 'gimp.png', '1', 11, 100, 1),
(10, '2016-12-28 18:56:40', 'phpstorm.png', 'san pham 90', 2000000, 4, 1),
(11, '2016-12-28 18:51:26', 'netscape_37.png', 'sanpham 102', 2999997, 25, 1),
(12, '2016-12-28 18:56:40', '12121.png', 'sanpham102', 500, 17, 3),
(14, '2016-11-27 11:19:22', 'sandal1.jpg', 'sanpham9', 100000, 10, 1),
(15, '2016-11-27 11:20:36', 'botcaogot.jpg', 'sanpham10', 2000000, 30, 1);

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
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', ''),
(2, 'ngocduc', 'ngocduc@gmail.com', '4156fd5c1cb353803988421bf5c73913', '', ''),
(3, 'NgocDuc', 'babysumo@gmail.com', '4156fd5c1cb353803988421bf5c73913', '', '');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `tb_chitiet_hoadon`
--
ALTER TABLE `tb_chitiet_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb_test`
--
ALTER TABLE `tb_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
