-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 03:50 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `claims`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_formulir`
--

CREATE TABLE `jenis_formulir` (
  `id_jenis` bigint(20) NOT NULL,
  `jenis_formulir` varchar(200) NOT NULL,
  `dibuat_oleh` bigint(20) NOT NULL,
  `dibuat_tanggal` date NOT NULL,
  `diubah_oleh` bigint(20) NOT NULL,
  `diubah_tanggal` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_formulir`
--

INSERT INTO `jenis_formulir` (`id_jenis`, `jenis_formulir`, `dibuat_oleh`, `dibuat_tanggal`, `diubah_oleh`, `diubah_tanggal`, `status`) VALUES
(3, 'B210', 1, '2020-05-01', 0, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` bigint(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `password`, `email`, `role`, `status`) VALUES
(1, 'admin', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@gmail.com', 1, 1),
(6, 'test', 'test', 'e10adc3949ba59abbe56e057f20f883e', 'test@gmail.com', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `persyaratan`
--

CREATE TABLE `persyaratan` (
  `id_persyaratan` bigint(20) NOT NULL,
  `persyaratan` varchar(2500) NOT NULL,
  `dibuat_oleh` int(11) NOT NULL,
  `dibuat_tanggal` date NOT NULL,
  `diubah_oleh` int(11) NOT NULL,
  `diubah_tanggal` date NOT NULL,
  `status` int(11) NOT NULL,
  `id_jenis` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` bigint(20) NOT NULL,
  `dibuat_oleh` int(11) NOT NULL,
  `dibuat_tanggal` date NOT NULL,
  `diubah_oleh` int(11) NOT NULL,
  `diubah_tanggal` date NOT NULL,
  `pertanyaan` varchar(2500) NOT NULL,
  `status` int(11) NOT NULL,
  `urutan` int(11) NOT NULL,
  `pilihan_jawaban_1` varchar(10) NOT NULL,
  `pilihan_jawaban_2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `dibuat_oleh`, `dibuat_tanggal`, `diubah_oleh`, `diubah_tanggal`, `pertanyaan`, `status`, `urutan`, `pilihan_jawaban_1`, `pilihan_jawaban_2`) VALUES
(2, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA PESERTA TASPEN/PNS/YANG BERSANGKUTAN LANGSUNG?', 1, 1, 'YA', 'TIDAK'),
(3, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA SUDAH MENGAJUKAN PENSIUN?', 1, 2, 'YA', 'TIDAK'),
(4, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN ASKEM ISTRI/SUAMI?', 1, 3, 'YA', 'TIDAK'),
(5, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN ASKEM ANAK?', 1, 4, 'YA', 'TIDAK'),
(6, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN PENSIUN PERTAMA?', 1, 5, 'YA', 'TIDAK'),
(7, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN ASKEM ISTRI/SUAMI?', 1, 6, 'YA', 'TIDAK'),
(8, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN ASKEM ANAK?', 1, 7, 'YA', 'TIDAK'),
(9, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA BERHENTI DARI STATUS PNS?', 1, 8, 'YA', 'TIDAK'),
(10, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN ASKEM PESERTA AKTIF MENINGGAL?', 1, 9, 'YA', 'TIDAK'),
(11, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN ASKEM PESERTA PENSIUN MENINGGAL?', 1, 10, 'YA', 'TIDAK'),
(12, 1, '2020-05-02', 1, '2020-05-02', 'ADA ISTRI?', 1, 11, 'YA', 'TIDAK'),
(13, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN PENSIUN JANDA?', 1, 12, 'YA', 'TIDAK'),
(14, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN PENSIUN YATIM?', 1, 13, 'YA', 'TIDAK');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan_detail`
--

CREATE TABLE `pertanyaan_detail` (
  `id_pertanyaan_detail` bigint(20) NOT NULL,
  `id_pertanyaan` bigint(20) NOT NULL,
  `jawaban` varchar(2500) NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_formulir`
--
ALTER TABLE `jenis_formulir`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `persyaratan`
--
ALTER TABLE `persyaratan`
  ADD PRIMARY KEY (`id_persyaratan`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `pertanyaan_detail`
--
ALTER TABLE `pertanyaan_detail`
  ADD PRIMARY KEY (`id_pertanyaan_detail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_formulir`
--
ALTER TABLE `jenis_formulir`
  MODIFY `id_jenis` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `persyaratan`
--
ALTER TABLE `persyaratan`
  MODIFY `id_persyaratan` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pertanyaan_detail`
--
ALTER TABLE `pertanyaan_detail`
  MODIFY `id_pertanyaan_detail` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
