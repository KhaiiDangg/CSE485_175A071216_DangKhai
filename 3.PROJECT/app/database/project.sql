-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 02:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

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
  `tinh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `huyen` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachinhanthu` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

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
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `idlop` int(11) NOT NULL,
  `lop` int(11) NOT NULL,
  `idtinhlop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nganh`
--

CREATE TABLE `nganh` (
  `idnganh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `nganh` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `idloaihinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `nganh`
--

INSERT INTO `nganh` (`idnganh`, `nganh`, `idloaihinh`) VALUES
('TLA201', 'Kỹ thuật xây dựng\r\n', 1),
('TLA202', 'Kỹ thuật tài nguyên nước', 1),
('TLA203', 'Kỹ thuật xây dựng công trình thủy', 1),
('TLA204', 'Kỹ thuật xây dựng', 1),
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
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`idlop`),
  ADD KEY `idtinhlop` (`idtinhlop`);

--
-- Indexes for table `nganh`
--
ALTER TABLE `nganh`
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
  ADD KEY `cmnd` (`cmnd`);

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
  MODIFY `idtinhlop` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `huyen`
--
ALTER TABLE `huyen`
  ADD CONSTRAINT `huyen_ibfk_1` FOREIGN KEY (`idtinh`) REFERENCES `tinhhuyen` (`idtinh`);

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`idtinhlop`) REFERENCES `tinhlop` (`idtinhlop`);

--
-- Constraints for table `nganh`
--
ALTER TABLE `nganh`
  ADD CONSTRAINT `nganh_ibfk_1` FOREIGN KEY (`idloaihinh`) REFERENCES `loaihinh` (`idloaihinh`);

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
