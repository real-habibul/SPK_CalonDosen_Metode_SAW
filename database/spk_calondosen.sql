-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 01:45 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_calondosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_pegawai`
--

CREATE TABLE `calon_pegawai` (
  `calon_pegawai_id` int(11) NOT NULL,
  `name` varchar(160) NOT NULL,
  `usia` int(2) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `tempat_pendidikan` varchar(150) NOT NULL,
  `pengalaman_kerja` int(3) NOT NULL,
  `status_pernikahan` varchar(10) NOT NULL,
  `jarak` int(3) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kelompok_kriteria`
--

CREATE TABLE `kelompok_kriteria` (
  `kelompok_kriteria_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `range_1` varchar(50) DEFAULT NULL,
  `nilai_r1` int(1) DEFAULT NULL,
  `range_2` varchar(50) DEFAULT NULL,
  `nilai_r2` int(1) DEFAULT NULL,
  `range_3` varchar(50) DEFAULT NULL,
  `nilai_r3` int(1) DEFAULT NULL,
  `range_4` varchar(50) DEFAULT NULL,
  `nilai_r4` int(1) DEFAULT NULL,
  `range_5` varchar(50) DEFAULT NULL,
  `nilai_r5` int(1) DEFAULT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(2) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `username`, `password`, `created_date`) VALUES
(1, 'admin', 'e172dd95f4feb21412a692e73929961e', '2019-09-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_pegawai`
--
ALTER TABLE `calon_pegawai`
  ADD PRIMARY KEY (`calon_pegawai_id`);

--
-- Indexes for table `kelompok_kriteria`
--
ALTER TABLE `kelompok_kriteria`
  ADD PRIMARY KEY (`kelompok_kriteria_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_pegawai`
--
ALTER TABLE `calon_pegawai`
  MODIFY `calon_pegawai_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelompok_kriteria`
--
ALTER TABLE `kelompok_kriteria`
  MODIFY `kelompok_kriteria_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
