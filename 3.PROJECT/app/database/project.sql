-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 05:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `hosocanhan`
--

CREATE TABLE `hosocanhan` (
  `cmnd` int(100) NOT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaysinh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaycapcmnd` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `noicapcmnd` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hokhau` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tinh` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `huyen` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachinhanthu` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `hosocanhan`
--

INSERT INTO `hosocanhan` (`cmnd`, `hoten`, `gioitinh`, `ngaysinh`, `ngaycapcmnd`, `noicapcmnd`, `sdt`, `email`, `hokhau`, `tinh`, `huyen`, `diachinhanthu`) VALUES
(1, '', 'nam', '', '', '', '', '', '', '', '', ''),
(2, 'lgkjafljglkaf', 'nu', '2020-11-09', '2020-11-10', 'sfdkgjlaksdg', '67856908756', 'dangkhai@gmail.com', 'fgkjsdflgjlksf', '', 'Hoàn Kiếm', 'flhjfdshjlkdsfh'),
(4, '', 'false', '', '', '', '', '', '', '', '', ''),
(5, '', 'false', '', '', '', '', '', '', '', '', ''),
(6, '', 'Nam', '', '', '', '', '', '', '', '', ''),
(66, '', 'nam', '', '', '', '', '', '', '', '', ''),
(333, 'khai', 'Nam', '2020-11-18', '2020-11-11', 'Hà Nội', '9024859024859024', 'sdgasd', 'fgkjsdflgjlksf', '', 'Ba Đình', 'kldasjgklasdjgkl'),
(399, '', 'Nam', '', '', '', '', '', '', '', '', ''),
(675, '', 'nam', '', '', '', '', '', '', '', '', ''),
(747, '', 'nu', '', '', '', '', '', '', '', '', ''),
(777, '', 'nam', '', '', '', '', '', '', '', '', ''),
(2222, '', 'Nam', '', '', '', '', '', '', '', '', ''),
(7676, 'dsafasd', 'Nam', '2020-11-17', '2020-11-19', '', '7676575675', 'ádgasdga', 'ádgasdg', '', 'Quận 3', 'ádgadsgadsg'),
(471471, 'Nguyễn Văn B', 'Nam', '2020-11-01', '2020-11-06', 'ưeqrqwer', '01234567', 'ewqtqwetqwe', 'qioewutiowqeuio', '', 'Quận 3', 'qewtqwetqwe'),
(123456789, 'Đặng Khải', 'nam', '1999-04-28', '2020-11-01', 'Hà Nội', '0869872610', 'dangkhai@gmail.com', 'jldfghasgjklaskldg', '', 'Ba Đình', 'kldasjgklasdjgkl');

-- --------------------------------------------------------

--
-- Table structure for table `huyen`
--

CREATE TABLE `huyen` (
  `idhuyen` int(11) NOT NULL,
  `tenhuyen` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `idtinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `huyen`
--

INSERT INTO `huyen` (`idhuyen`, `tenhuyen`, `idtinh`) VALUES
(1, 'Ba Đình', 1),
(2, 'Hoàn Kiếm', 1),
(3, 'Đống Đa', 1),
(4, 'Hai Ba Trưng', 1),
(5, 'Hoàng Mai', 1),
(6, 'Thanh Xuân', 1),
(7, 'Long Biên', 1),
(8, 'Nam Từ Liêm', 1),
(9, 'Bắc Từ Liêm', 1),
(10, 'Tây Hồ', 1),
(11, 'Cầu Giấy', 1),
(12, 'Hà Đông', 1),
(13, 'Ba Vì ', 1),
(14, 'Thanh Trì', 1),
(15, 'Chương Mỹ ', 1),
(16, 'Phúc Thọ', 1),
(17, 'Đan Phượng ', 1),
(18, 'Đông Anh ', 1),
(19, 'Gia Lâm ', 1),
(20, 'Hoài Đức ', 1),
(21, 'Mê Linh ', 1),
(22, 'Mỹ Đức ', 1),
(23, 'Phú Xuyên ', 1),
(24, 'Quốc Oai ', 1),
(25, 'Sóc Sơn ', 1),
(26, 'Thạch Thất ', 1),
(27, 'Thanh Oai ', 1),
(28, 'Thường Tín ', 1),
(29, 'Ứng Hòa', 1),
(30, 'Quận 1', 2),
(31, 'Quận 2', 2),
(32, 'Quận 3', 2),
(33, 'Quận 4', 2),
(34, 'Quận 5', 2),
(35, 'Quận 6', 2),
(36, 'Quận 7', 2),
(37, 'Quận 8', 2),
(38, 'Quận 9', 2),
(39, 'Quận 10', 2),
(40, 'Quận 11', 2),
(41, 'Quận 12', 2),
(42, 'Bình Tân', 2),
(43, 'Bình Thạnh', 2),
(44, 'Gò Vấp', 2),
(45, 'Phú Nhuận', 2),
(46, 'Tân Bình', 2),
(47, 'Tân Phú', 2),
(48, 'Thủ Đức', 2),
(49, 'Bình Chánh', 2),
(50, 'Cần Giờ', 2),
(51, 'Củ Chi', 2),
(52, 'Hóc Môn', 2),
(53, 'Nhà Be', 2);

-- --------------------------------------------------------

--
-- Table structure for table `loaihinh`
--

CREATE TABLE `loaihinh` (
  `idloaihinh` int(11) NOT NULL,
  `loaihinh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `loaihinh`
--

INSERT INTO `loaihinh` (`idloaihinh`, `loaihinh`) VALUES
(1, 'Chính quy'),
(2, 'Liên thông'),
(3, 'VB 2 - Chính quy');

-- --------------------------------------------------------

--
-- Table structure for table `nghanh`
--

CREATE TABLE `nghanh` (
  `idnganh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `nganh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `idloaihinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `nghanh`
--

INSERT INTO `nghanh` (`idnganh`, `nganh`, `idloaihinh`) VALUES
('TLA201', 'Kỹ thuật xây dựng\r\n', 1),
('TLA202', 'Kỹ thuật tài nguyên nước', 1),
('TLA203', 'Kỹ thuật xây dựng công trình thủy', 1),
('TLA204', 'Quản trị kinh doanh', 1),
('TLA205', 'Công nghệ kỹ thuật xây dựng', 1),
('TLA206', 'Kỹ thuật xây dựng công trình giao thông', 1),
('TLA207', 'Kỹ thuật cấp thoát nước', 1),
('TLA208', 'Công nghệ thông tin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tinhhuyen`
--

CREATE TABLE `tinhhuyen` (
  `idtinh` int(11) NOT NULL,
  `tentinh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tinhhuyen`
--

INSERT INTO `tinhhuyen` (`idtinh`, `tentinh`) VALUES
(1, 'Hà Nội'),
(2, 'Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Table structure for table `tinhlop`
--

CREATE TABLE `tinhlop` (
  `idtinhlop` int(11) NOT NULL,
  `tinh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tinhlop`
--

INSERT INTO `tinhlop` (`idtinhlop`, `tinh`) VALUES
(1, 'Hà Nội'),
(2, 'TP Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Table structure for table `tinhtruong`
--

CREATE TABLE `tinhtruong` (
  `id` int(11) NOT NULL,
  `truong` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `idtinhlop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tinhtruong`
--

INSERT INTO `tinhtruong` (`id`, `truong`, `idtinhlop`) VALUES
(1, 'THPT Phạm Hồng Thái', 1),
(2, 'THPT Lê Quý Đôn', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'khai', 'dangkhai284@gmail.com', '$2y$10$QIGiLrEEEWg4h9CP7nXtCeUa7uTfYgv9uvlNCJLviTqPqMKeBcuIe', '2020-11-08 21:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `xetdiemthi`
--

CREATE TABLE `xetdiemthi` (
  `iddiemthi` int(11) NOT NULL,
  `cmnd` int(100) NOT NULL,
  `bacdaotao` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `nganh` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tohopmon` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `khuvucuutien` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `doituonguutien` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diemmon1` double NOT NULL,
  `diemmon2` double NOT NULL,
  `diemmon3` double NOT NULL,
  `tongdiem` double NOT NULL,
  `ghichu` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `xetdiemthi`
--

INSERT INTO `xetdiemthi` (`iddiemthi`, `cmnd`, `bacdaotao`, `nganh`, `tohopmon`, `khuvucuutien`, `doituonguutien`, `diemmon1`, `diemmon2`, `diemmon3`, `tongdiem`, `ghichu`) VALUES
(1, 399, 'Đại học', '', '', '', '', 0, 0, 0, 0, ''),
(2, 471471, 'Đại học', 'TLA202 : Kỹ thuật tài nguyên nước', 'A02: Toán , Vật Lý , Sinh học', 'Khu vực 02', 'Dối tượng 02', 7, 5, 7, 19, 'rêtrtwertrewtre');

-- --------------------------------------------------------

--
-- Table structure for table `xethocba`
--

CREATE TABLE `xethocba` (
  `idhocba` int(11) NOT NULL,
  `cmnd` int(100) NOT NULL,
  `bacdaotao` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `loaihinh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `nganh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `khuvucuutien` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `doituonguutien` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tinhlop10` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tinhlop11` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tinhlop12` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `truonglop10` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `truonglop11` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `truonglop12` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diemtblop10` double NOT NULL,
  `diemtblop11` double NOT NULL,
  `diemtblop12` double NOT NULL,
  `diemxettuyen` double NOT NULL,
  `namtotnghiep` int(11) NOT NULL,
  `ghichu` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `xethocba`
--

INSERT INTO `xethocba` (`idhocba`, `cmnd`, `bacdaotao`, `loaihinh`, `nganh`, `khuvucuutien`, `doituonguutien`, `tinhlop10`, `tinhlop11`, `tinhlop12`, `truonglop10`, `truonglop11`, `truonglop12`, `diemtblop10`, `diemtblop11`, `diemtblop12`, `diemxettuyen`, `namtotnghiep`, `ghichu`) VALUES
(14, 7676, 'Đại học', 'Chính quy', 'Kỹ thuật xây dựng công trình thủy', 'Khu vực 01', 'Dối tượng 02', '', '', '', 'THPT Phạm Hồng Thái', 'THPT Phạm Hồng Thái', 'THPT Phạm Hồng Thái', 5, 3, 5, 12, 2012, 'sdasdfasdfads');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hosocanhan`
--
ALTER TABLE `hosocanhan`
  ADD PRIMARY KEY (`cmnd`);

--
-- Indexes for table `huyen`
--
ALTER TABLE `huyen`
  ADD PRIMARY KEY (`idhuyen`),
  ADD KEY `idtinh` (`idtinh`);

--
-- Indexes for table `loaihinh`
--
ALTER TABLE `loaihinh`
  ADD PRIMARY KEY (`idloaihinh`);

--
-- Indexes for table `nghanh`
--
ALTER TABLE `nghanh`
  ADD PRIMARY KEY (`idnganh`),
  ADD KEY `idloaihinh` (`idloaihinh`);

--
-- Indexes for table `tinhhuyen`
--
ALTER TABLE `tinhhuyen`
  ADD PRIMARY KEY (`idtinh`);

--
-- Indexes for table `tinhlop`
--
ALTER TABLE `tinhlop`
  ADD PRIMARY KEY (`idtinhlop`);

--
-- Indexes for table `tinhtruong`
--
ALTER TABLE `tinhtruong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtinhlop` (`idtinhlop`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `xetdiemthi`
--
ALTER TABLE `xetdiemthi`
  ADD PRIMARY KEY (`iddiemthi`),
  ADD KEY `cmnd` (`cmnd`);

--
-- Indexes for table `xethocba`
--
ALTER TABLE `xethocba`
  ADD PRIMARY KEY (`idhocba`),
  ADD KEY `cmnd` (`cmnd`),
  ADD KEY `cmnd_2` (`cmnd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `huyen`
--
ALTER TABLE `huyen`
  MODIFY `idhuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `loaihinh`
--
ALTER TABLE `loaihinh`
  MODIFY `idloaihinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tinhhuyen`
--
ALTER TABLE `tinhhuyen`
  MODIFY `idtinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tinhlop`
--
ALTER TABLE `tinhlop`
  MODIFY `idtinhlop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `xetdiemthi`
--
ALTER TABLE `xetdiemthi`
  MODIFY `iddiemthi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `xethocba`
--
ALTER TABLE `xethocba`
  MODIFY `idhocba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `huyen`
--
ALTER TABLE `huyen`
  ADD CONSTRAINT `huyen_ibfk_1` FOREIGN KEY (`idtinh`) REFERENCES `tinhhuyen` (`idtinh`);

--
-- Constraints for table `nghanh`
--
ALTER TABLE `nghanh`
  ADD CONSTRAINT `nghanh_ibfk_1` FOREIGN KEY (`idloaihinh`) REFERENCES `loaihinh` (`idloaihinh`);

--
-- Constraints for table `tinhtruong`
--
ALTER TABLE `tinhtruong`
  ADD CONSTRAINT `tinhtruong_ibfk_1` FOREIGN KEY (`idtinhlop`) REFERENCES `tinhlop` (`idtinhlop`);

--
-- Constraints for table `xetdiemthi`
--
ALTER TABLE `xetdiemthi`
  ADD CONSTRAINT `xetdiemthi_ibfk_1` FOREIGN KEY (`cmnd`) REFERENCES `hosocanhan` (`cmnd`);

--
-- Constraints for table `xethocba`
--
ALTER TABLE `xethocba`
  ADD CONSTRAINT `xethocba_ibfk_1` FOREIGN KEY (`cmnd`) REFERENCES `hosocanhan` (`cmnd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
