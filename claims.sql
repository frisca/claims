-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 03:21 PM
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
-- Table structure for table `detail_pengguna`
--

CREATE TABLE `detail_pengguna` (
  `id_detail_pengguna` int(11) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(200) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `kelurahan` varchar(200) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tempt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pengguna`
--

INSERT INTO `detail_pengguna` (`id_detail_pengguna`, `alamat`, `kode_pos`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `no_tlp`, `no_ktp`, `id_pengguna`, `tempt_lahir`, `tgl_lahir`) VALUES
(4, 't', '1', 't', 't', 't', 't', '1', '1', 9, 'testing', '1981-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `detail_persyaratan`
--

CREATE TABLE `detail_persyaratan` (
  `id_detail_persyaratan` int(11) NOT NULL,
  `urutan` int(11) NOT NULL,
  `persyaratan` varchar(2500) NOT NULL,
  `id_persyaratan` int(11) NOT NULL,
  `files` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_persyaratan`
--

INSERT INTO `detail_persyaratan` (`id_detail_persyaratan`, `urutan`, `persyaratan`, `id_persyaratan`, `files`) VALUES
(2, 1, 'MENGISI FORMULIR SPP ', 2, 'F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI'),
(5, 2, 'MENGISI FORMULIR KUTIPAN PERICIAN PENERIMAAN GAJI (KPPG)', 2, 'F2. SPTB'),
(6, 3, 'FOTOCOPY SURAT NIKAH LEGALISIR KUA / CAMAT + ASLI', 2, ''),
(7, 4, 'FOTOCOPY SURAT KEMATIAN LEGALISIR LURAH + ASLI', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `formulir`
--

CREATE TABLE `formulir` (
  `id_pengguna` int(11) NOT NULL,
  `id_jenis_formulir` int(11) NOT NULL,
  `id_detail_pengguna` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir`
--

INSERT INTO `formulir` (`id_pengguna`, `id_jenis_formulir`, `id_detail_pengguna`, `status`, `id_formulir`) VALUES
(9, 4, 4, 0, 10),
(9, 4, 4, 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_pertanyaan`
--

CREATE TABLE `jawaban_pertanyaan` (
  `id_jawaban` bigint(20) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  `hasil` varchar(100) NOT NULL,
  `id_jenis` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban_pertanyaan`
--

INSERT INTO `jawaban_pertanyaan` (`id_jawaban`, `id_pertanyaan`, `jawaban`, `hasil`, `id_jenis`) VALUES
(2, 2, 'YA', '3', NULL),
(3, 2, 'TIDAK', '10', NULL),
(4, 3, 'YA', '7', NULL),
(5, 3, 'TIDAK', '6', NULL),
(6, 4, 'YA', '99', 3),
(7, 4, 'TIDAK', '5', NULL),
(8, 5, 'YA', '99', 12),
(9, 5, 'TIDAK', '0', 0),
(10, 6, 'YA', '99', 5),
(11, 6, 'TIDAK', '7', NULL),
(12, 7, 'YA', '99', 4),
(13, 7, 'TIDAK', '8', NULL),
(14, 8, 'YA', '99', 13),
(15, 8, 'TIDAK', '9', NULL),
(16, 9, 'YA', '99', 14),
(17, 9, 'TIDAK', '0', NULL),
(18, 10, 'YA', '99', 6),
(19, 10, 'TIDAK', '11', NULL),
(20, 11, 'YA', '15', NULL),
(21, 11, 'TIDAK', '13', NULL),
(22, 15, 'YA', '99', 11),
(23, 15, 'TIDAK', '0', NULL),
(24, 13, 'YA', '0', NULL),
(25, 13, 'TIDAK', '14', NULL),
(26, 14, 'YA', '99', 16),
(27, 14, 'TIDAK', '0', 0);

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
(3, 'B210', 1, '2020-05-01', 0, '0000-00-00', 1),
(4, 'A210 - ASURANSI KEMATIAN ISTERI / SUAMI / ANAK PESERTA AKTIF', 1, '2020-05-15', 0, '0000-00-00', 1),
(5, 'B110 & SP4A', 1, '2020-05-20', 1, '2020-05-30', 1),
(6, 'C110', 1, '2020-05-20', 0, '0000-00-00', 1),
(7, 'D110', 1, '2020-05-20', 0, '0000-00-00', 0),
(8, 'E110 & UDW TERUSAN', 1, '2020-05-20', 1, '2020-05-30', 1),
(9, 'E210', 1, '2020-05-20', 0, '0000-00-00', 1),
(10, 'SP2YP', 1, '2020-05-20', 0, '0000-00-00', 2),
(11, 'SP4B', 1, '2020-05-20', 1, '2020-05-30', 1),
(12, 'B310', 1, '2020-05-30', 0, '0000-00-00', 1),
(13, 'A310', 1, '2020-05-30', 0, '0000-00-00', 1),
(14, 'SP3IP', 1, '2020-05-30', 0, '0000-00-00', 1),
(15, 'E110 & UDW PUNAH', 1, '2020-05-30', 0, '0000-00-00', 1),
(16, 'SP4Y', 1, '2020-05-30', 0, '0000-00-00', 1);

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
(1, 'admins', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com', 1, 1),
(9, 'test', '112012311', '827ccb0eea8a706c4c34a16891f84e7b', 'test@gmail.com', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `persyaratan`
--

CREATE TABLE `persyaratan` (
  `id_persyaratan` bigint(20) NOT NULL,
  `dibuat_oleh` int(11) NOT NULL,
  `dibuat_tanggal` date NOT NULL,
  `diubah_oleh` int(11) NOT NULL,
  `diubah_tanggal` date NOT NULL,
  `status` int(11) NOT NULL,
  `id_jenis` bigint(20) NOT NULL,
  `nama_persyaratan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persyaratan`
--

INSERT INTO `persyaratan` (`id_persyaratan`, `dibuat_oleh`, `dibuat_tanggal`, `diubah_oleh`, `diubah_tanggal`, `status`, `id_jenis`, `nama_persyaratan`) VALUES
(2, 1, '2020-06-01', 0, '0000-00-00', 1, 4, 'PERSYARATAN PENGAJUAN ASURANSI KEMATIAN ISTERI / SUAMI / ANAK PESERTA AKTIF ');

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
(2, 1, '2020-05-02', 1, '2020-05-15', 'APAKAH ANDA PESERTA TASPEN/PNS/YANG BERSANGKUTAN LANGSUNG ?', 1, 1, 'YA', 'TIDAK'),
(3, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA SUDAH MENGAJUKAN PENSIUN?', 1, 2, 'YA', 'TIDAK'),
(4, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN ASKEM ISTRI/SUAMI?', 1, 3, 'YA', 'TIDAK'),
(5, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN ASKEM ANAK?', 1, 4, 'YA', 'TIDAK'),
(6, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN PENSIUN PERTAMA?', 1, 5, 'YA', 'TIDAK'),
(7, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN ASKEM ISTRI/SUAMI?', 1, 6, 'YA', 'TIDAK'),
(8, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN ASKEM ANAK?', 1, 7, 'YA', 'TIDAK'),
(9, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA BERHENTI DARI STATUS PNS?', 1, 8, 'YA', 'TIDAK'),
(10, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN ASKEM PESERTA AKTIF MENINGGAL?', 1, 9, 'YA', 'TIDAK'),
(11, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN ASKEM PESERTA PENSIUN MENINGGAL?', 1, 10, 'YA', 'TIDAK'),
(13, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN PENSIUN JANDA?', 1, 12, 'YA', 'TIDAK'),
(14, 1, '2020-05-02', 1, '2020-05-02', 'APAKAH ANDA INGIN MENGAJUKAN PENSIUN YATIM?', 1, 13, 'YA', 'TIDAK'),
(15, 1, '2020-05-20', 0, '0000-00-00', 'APAKAH MASIH ADA ISTRI?', 1, 11, 'YA', 'TIDAK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pengguna`
--
ALTER TABLE `detail_pengguna`
  ADD PRIMARY KEY (`id_detail_pengguna`);

--
-- Indexes for table `detail_persyaratan`
--
ALTER TABLE `detail_persyaratan`
  ADD PRIMARY KEY (`id_detail_persyaratan`);

--
-- Indexes for table `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id_formulir`);

--
-- Indexes for table `jawaban_pertanyaan`
--
ALTER TABLE `jawaban_pertanyaan`
  ADD PRIMARY KEY (`id_jawaban`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pengguna`
--
ALTER TABLE `detail_pengguna`
  MODIFY `id_detail_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail_persyaratan`
--
ALTER TABLE `detail_persyaratan`
  MODIFY `id_detail_persyaratan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jawaban_pertanyaan`
--
ALTER TABLE `jawaban_pertanyaan`
  MODIFY `id_jawaban` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `jenis_formulir`
--
ALTER TABLE `jenis_formulir`
  MODIFY `id_jenis` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `persyaratan`
--
ALTER TABLE `persyaratan`
  MODIFY `id_persyaratan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
