-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 09:14 PM
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
-- Table structure for table `bobot_kriteria`
--

CREATE TABLE `bobot_kriteria` (
  `bobot_kriteria_id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nilai` int(3) NOT NULL,
  `kelompok_kriteria` int(2) NOT NULL,
  `costbenefit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bobot_kriteria`
--

INSERT INTO `bobot_kriteria` (`bobot_kriteria_id`, `nama`, `nilai`, `kelompok_kriteria`, `costbenefit`) VALUES
(1, 'Usia', 50, 1, 'Benefit'),
(2, 'Pendidikan Terakhir', 80, 2, 'Benefit'),
(3, 'Pengalaman Kerja', 80, 3, 'Benefit'),
(4, 'Status Perkawinan', 30, 4, 'Cost'),
(5, 'Jarak Dari Polinema', 30, 5, 'Cost'),
(6, 'usia1', 50, 1, 'Benefit');

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

--
-- Dumping data for table `calon_pegawai`
--

INSERT INTO `calon_pegawai` (`calon_pegawai_id`, `name`, `usia`, `pendidikan_terakhir`, `tempat_pendidikan`, `pengalaman_kerja`, `status_pernikahan`, `jarak`, `is_active`) VALUES
(1, 'Aldi R.A', 28, 'S2', 'UB', 12, 'SUDAH', 5, 1),
(2, 'Harada Yuki', 32, 'S3', 'JAPAN UNIVERSITY', 12, 'SUDAH', 7, 1),
(3, 'Lilis Dian S.', 26, 'S2', 'Universitas Muhammadiyah Malang', 6, 'BELUM', 12, 1),
(4, 'Tri Wulandari', 27, 'S2', 'Politeknik Negeri Malang', 0, 'BELUM', 4, 1),
(5, 'Hendrawan', 39, 'S2', 'Institute Teknologi Sepuluh November', 24, 'SUDAH', 2, 1),
(6, 'ferdiana', 21, 'D4', 'POLITEKNIK NEGERI MALANG', 0, 'BELUM', 3, 1),
(7, 'Hanif Luhur Wicaksono', 21, 'D4', 'Politeknik Negeri Malang', 1, 'BELUM', 3, 1);

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
  `is_active` int(1) NOT NULL,
  `kolom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kelompok_kriteria`
--

INSERT INTO `kelompok_kriteria` (`kelompok_kriteria_id`, `name`, `jenis`, `range_1`, `nilai_r1`, `range_2`, `nilai_r2`, `range_3`, `nilai_r3`, `range_4`, `nilai_r4`, `range_5`, `nilai_r5`, `is_active`, `kolom`) VALUES
(1, 'Usia', 'Kurang Dari', '30', 5, '35', 4, '40', 3, '45', 2, '60', 1, 1, 'usia'),
(2, 'Pendidikan Terakhir', 'Harus Sama Dengan', 'S3', 5, 'S2', 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'pendidikan_terakhir'),
(3, 'Pengalaman Kerja', 'Kurang Dari', '0', 1, '6', 2, '12', 3, '18', 4, '50', 5, 1, 'pengalaman_kerja'),
(4, 'Status', 'Harus Sama Dengan', 'SUDAH', 3, 'BELUM', 5, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'status_pernikahan'),
(5, 'Jarak', 'Kurang Dari', '5', 5, '8', 4, '13', 3, '15', 2, '30', 1, 1, 'jarak');

-- --------------------------------------------------------

--
-- Table structure for table `rangking`
--

CREATE TABLE `rangking` (
  `id_ranking` int(11) NOT NULL,
  `nama` text NOT NULL,
  `hasil` text NOT NULL,
  `nilai` text NOT NULL,
  `peringkat` text NOT NULL
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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2019-09-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot_kriteria`
--
ALTER TABLE `bobot_kriteria`
  ADD PRIMARY KEY (`bobot_kriteria_id`);

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
-- Indexes for table `rangking`
--
ALTER TABLE `rangking`
  ADD PRIMARY KEY (`id_ranking`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot_kriteria`
--
ALTER TABLE `bobot_kriteria`
  MODIFY `bobot_kriteria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `calon_pegawai`
--
ALTER TABLE `calon_pegawai`
  MODIFY `calon_pegawai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kelompok_kriteria`
--
ALTER TABLE `kelompok_kriteria`
  MODIFY `kelompok_kriteria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rangking`
--
ALTER TABLE `rangking`
  MODIFY `id_ranking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
