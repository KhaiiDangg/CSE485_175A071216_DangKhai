-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 08:47 AM
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
-- Database: `kiemtragiuaki`
--

-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--

CREATE TABLE `lophoc` (
  `id` int(11) NOT NULL,
  `tenlophoc` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `giaovien` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `lichhoc` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `hocphi` int(11) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` date NOT NULL,
  `phonghoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `lophoc`
--

INSERT INTO `lophoc` (`id`, `tenlophoc`, `giaovien`, `lichhoc`, `hocphi`, `ngaybatdau`, `ngayketthuc`, `phonghoc`) VALUES
(1, 'tin hoc', 'Phan Thanh Duy', '19h-20h', 200, '2020-10-02', '2020-10-16', 30),
(2, 'khoa hoc', 'Phan Thanh Duy', '17h-21h', 300, '2020-10-09', '2020-10-24', 30),
(5, 'hoc tap', 'Nguyễn Ngọc Dương', '12h-18h', 40000, '2020-10-01', '2020-10-02', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
