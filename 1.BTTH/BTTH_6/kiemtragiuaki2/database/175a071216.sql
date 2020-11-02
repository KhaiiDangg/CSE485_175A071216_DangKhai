-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 11:07 AM
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
-- Database: `175a071216`
--

-- --------------------------------------------------------

--
-- Table structure for table `nhannvien`
--

CREATE TABLE `nhannvien` (
  `id` int(11) NOT NULL,
  `tennhanvien` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gioitinh` varchar(11) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `tuoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `nhannvien`
--

INSERT INTO `nhannvien` (`id`, `tennhanvien`, `diachi`, `gioitinh`, `designation`, `tuoi`) VALUES
(1, 'Nguyen Van A', 'Hanoi', 'Male', 'Student', 21),
(2, 'Nguyen Thi B', 'London', 'Female', 'CEO', 25),
(3, 'Nguyen Duy C', 'Paris', 'Male', 'Teacher', 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nhannvien`
--
ALTER TABLE `nhannvien`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
