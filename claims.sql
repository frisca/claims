-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 10 Agu 2020 pada 20.36
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.39

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
-- Struktur dari tabel `detail_pengguna`
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
-- Dumping data untuk tabel `detail_pengguna`
--

INSERT INTO `detail_pengguna` (`id_detail_pengguna`, `alamat`, `kode_pos`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `no_tlp`, `no_ktp`, `id_pengguna`, `tempt_lahir`, `tgl_lahir`) VALUES
(4, 't', '1', 't', 't', 't', 't', '1', '1', 9, 'testing', '1981-05-25'),
(5, 'Depok', '20226', 'Deli Serdang', 'Medan', 'Cilodong', 'Jatimulya', '08123847482293', '320928827300012', 11, 'Sigotom', '1993-10-19'),
(6, 'Jl.Raya Semanggi, RT/RW 03/08', '20226', 'Jawa Barat', 'Kalimulya', 'Cilodong', 'Deli', '08123847482293', '32048595758393749', 12, 'Sigotom', '1993-10-19'),
(7, 'Jl.Raya Semanggi, RT/RW 03/08', '20226', 'Jawa Barat', 'Kalimulya', 'Cilodong', 'Deli', '08123847482293', '32048595758393749', 1, 'Sigotom', '1993-10-19'),
(8, 'JL. Raya Kalimulya No.99,Cilodong, Depok', '343422', 'Jawa Barat', 'Kota Depok', 'Kalimulya', 'Cilodong', '08212312343432', '12093900000348002', 13, 'Bandung', '1987-10-19'),
(9, 'Jl. Raya Kalimulya No.99,Cilodong, Depok', '343422', 'Jawa Barat', 'Kota Depok', 'Kalimulya', 'Cilodong', '0812636378499', '32383747998370', 15, 'Depok', '1993-10-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_persyaratan`
--

CREATE TABLE `detail_persyaratan` (
  `id_detail_persyaratan` int(11) NOT NULL,
  `urutan` int(11) NOT NULL,
  `persyaratan` varchar(2500) NOT NULL,
  `id_persyaratan` int(11) NOT NULL,
  `files` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_persyaratan`
--

INSERT INTO `detail_persyaratan` (`id_detail_persyaratan`, `urutan`, `persyaratan`, `id_persyaratan`, `files`) VALUES
(2, 1, 'MENGISI FORMULIR SPP ', 2, 'F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI'),
(5, 2, 'MENGISI FORMULIR KUTIPAN PERICIAN PENERIMAAN GAJI (KPPG)', 2, 'F2. SPTB'),
(6, 3, 'FOTOCOPY SURAT NIKAH LEGALISIR KUA / CAMAT + ASLI', 2, ''),
(7, 4, 'FOTOCOPY SURAT KEMATIAN LEGALISIR LURAH + ASLI', 2, ''),
(9, 6, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">MENGISI FORMULIR SPP </span></span></p>\r\n', 3, 'F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI'),
(10, 6, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">MENGISI FORMULIR AHLI WARIS</span></span></p>\r\n', 3, 'F5. KETERANGAN AHLI WARIS KOREKSI C110'),
(11, 6, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">MENGISI FORMULIR KUTIPAN PERICIAN PENERIMAAN GAJI (KPPG)</span></span><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"> &amp; SLIP GAJI</span></span></p>\r\n', 3, 'F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI'),
(12, 6, '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">FOTOCOPY SURAT NIKAH LEGALISIR KUA / CAMAT + ASLI</span></span></p>\r\n', 3, ''),
(13, 1, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">MENGISI FORMULIR SPP</span></span></p>\r\n', 4, 'F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI'),
(14, 2, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">MENGISI FORMULIR KUASA AHLI WARIS</span></span></p>\r\n', 4, 'F5. KETERANGAN AHLI WARIS KOREKSI C110'),
(15, 3, '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">MENGISI FORMULIR KUTIPAN PERICIAN PENERIMAAN GAJI (KPPG)</span></span><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\"> &amp; SLIP GAJI</span></span></p>\r\n', 4, 'F6. KUTIPAN PERINCIAN PENERIMAAN GAJI KOREKSI'),
(16, 4, '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">4. FOTOCOPY SURAT NIKAH LEGALISIR KUA / CAMAT + ASLI</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">5. FOTOCOPY SURAT KEMATIAN LEGALISIR LURAH /SURAT KEMATIAN DARI RS + ASLI <strong><em>(*Harus tandatangan Lurah tidak boleh diwakilkan)</em></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">6. FOTOCOPY KARPEG, KARTU PESERTA TASPEN, KTP PEMOHON</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">7. FOTOCOPY SK CAPEG , KGB (KENAIKAN GAJI BERKALA) TERAKHIR LEGALISIR INSTANSI</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">8. FOTOCOPY BUKU REKENING TABUNGAN (JIKA PEMBAYARAN MELALUI BANK)</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">9. CANTUMKAN NOMOR TELEPON KANTOR</span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,&quot;sans-serif&quot;\">10. BUKTI PENGAJUAN UDW DARI INSTANSI</span></span></p>\r\n', 4, ''),
(20, 1, '<p>Form Permintaan</p>\r\n', 5, 'F1. FORMULIR PERMINTAAN PEMBAYARAN KOREKSI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir`
--

CREATE TABLE `formulir` (
  `id_pengguna` int(11) NOT NULL,
  `id_jenis_formulir` int(11) NOT NULL,
  `id_detail_pengguna` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_formulir` int(11) NOT NULL,
  `read` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `formulir`
--

INSERT INTO `formulir` (`id_pengguna`, `id_jenis_formulir`, `id_detail_pengguna`, `status`, `id_formulir`, `read`) VALUES
(9, 4, 4, 1, 11, 1),
(9, 5, 4, 2, 12, 1),
(9, 5, 4, 3, 13, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `formulir_dt`
--

CREATE TABLE `formulir_dt` (
  `id_formulir_dt` bigint(20) NOT NULL,
  `files` varchar(200) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `approveBy` int(11) DEFAULT NULL,
  `createdDate` date DEFAULT NULL,
  `id_formulir` bigint(20) NOT NULL,
  `id_detail_persyaratan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `formulir_dt`
--

INSERT INTO `formulir_dt` (`id_formulir_dt`, `files`, `status`, `approveBy`, `createdDate`, `id_formulir`, `id_detail_persyaratan`) VALUES
(17, 'Pelacakan_Mobil.pdf', 1, NULL, '2020-08-10', 11, 2),
(18, 'Penyewaan_Mobil2.pdf', 1, NULL, '2020-08-10', 11, 5),
(19, 'Penyewaan_Mobil.pdf', 1, NULL, '2020-08-10', 11, 6),
(20, 'Reservasi_Hotel.pdf', 1, NULL, '2020-08-10', 11, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_pertanyaan`
--

CREATE TABLE `jawaban_pertanyaan` (
  `id_jawaban` bigint(20) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  `hasil` varchar(100) NOT NULL,
  `id_jenis` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban_pertanyaan`
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
-- Struktur dari tabel `jenis_formulir`
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
-- Dumping data untuk tabel `jenis_formulir`
--

INSERT INTO `jenis_formulir` (`id_jenis`, `jenis_formulir`, `dibuat_oleh`, `dibuat_tanggal`, `diubah_oleh`, `diubah_tanggal`, `status`) VALUES
(3, 'B210 - Asuransi Kematian Istri/Suami Peserta Pensiun', 1, '2020-05-01', 1, '2020-06-24', 1),
(4, 'A210 - ASURANSI KEMATIAN ISTERI / SUAMI / ANAK PESERTA AKTIF', 1, '2020-05-15', 0, '0000-00-00', 1),
(5, 'B110 & SP4A - Pensiun Pertama atau Klim Tabungan Hari Tua', 1, '2020-05-20', 1, '2020-06-24', 1),
(6, 'C110,JKM - Asuransi Kematian PNS Aktif Meninggal Dunia', 1, '2020-05-20', 1, '2020-06-24', 1),
(7, 'D110/SP3IP - PNS Keluar', 1, '2020-05-20', 1, '2020-06-24', 2),
(8, 'E110 & UDW TERUSAN', 1, '2020-05-20', 1, '2020-05-30', 1),
(9, 'E210 - Asuransi Kematian Istri/Suami Setelah Peserta Pensiun Meninggal', 1, '2020-05-20', 1, '2020-06-24', 1),
(10, 'SP2YP', 1, '2020-05-20', 0, '0000-00-00', 2),
(11, 'SP4B', 1, '2020-05-20', 1, '2020-05-30', 1),
(12, 'B310 - Asuransi Kematian Anak Setelah Peserta Pensiun', 1, '2020-05-30', 1, '2020-06-24', 1),
(13, 'A310 - Asuransi Kematian Anak Peserta Aktif', 1, '2020-05-30', 1, '2020-06-24', 1),
(14, 'SP3IP', 1, '2020-05-30', 0, '0000-00-00', 1),
(15, 'E110 & UDW PUNAH', 1, '2020-05-30', 0, '0000-00-00', 1),
(16, 'SP4Y', 1, '2020-05-30', 0, '0000-00-00', 1),
(17, 'JKM', 1, '2020-06-25', 0, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
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
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `password`, `email`, `role`, `status`) VALUES
(1, 'admins', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com', 1, 1),
(9, 'test', '112012311', '827ccb0eea8a706c4c34a16891f84e7b', 'test@gmail.com', 2, 1),
(10, 'ana', '123', '202cb962ac59075b964b07152d234b70', 'deliana.sormin@gmail.com', 2, 1),
(11, 'ana', '333', '310dcbbf4cce62f762a2aaa148d556bd', 'deliana.sormin@gmail.com', 2, 1),
(12, 'Anti', '999', 'b706835de79a2b4e80506f582af3676a', 'deliana.sormin@gmail.com', 2, 1),
(13, 'Yosi', '123456', 'e10adc3949ba59abbe56e057f20f883e', 'yosi.arios@gmail.com', 2, 1),
(14, 'Yosi', '123456', 'e10adc3949ba59abbe56e057f20f883e', 'yosi.arios@gmail.com', 2, 1),
(15, 'anna', '454545', '9ea5e6f10d48803ae38499c0d5e6d93f', 'yosi@yahoo.com', 2, 1),
(16, 'customerservice', 'service', '827ccb0eea8a706c4c34a16891f84e7b', 'customer@gmail.com', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `persyaratan`
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
-- Dumping data untuk tabel `persyaratan`
--

INSERT INTO `persyaratan` (`id_persyaratan`, `dibuat_oleh`, `dibuat_tanggal`, `diubah_oleh`, `diubah_tanggal`, `status`, `id_jenis`, `nama_persyaratan`) VALUES
(2, 1, '2020-06-01', 0, '0000-00-00', 1, 4, 'PERSYARATAN PENGAJUAN ASURANSI KEMATIAN ISTERI / SUAMI / ANAK PESERTA AKTIF '),
(4, 1, '2020-06-24', 0, '0000-00-00', 1, 6, 'PERSYARATAN PENGAJUAN PESERTA AKTIF MENINGGAL DUNIA'),
(5, 1, '2020-06-25', 0, '0000-00-00', 1, 17, 'Jaminan Kematian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
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
-- Dumping data untuk tabel `pertanyaan`
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
-- Indeks untuk tabel `detail_pengguna`
--
ALTER TABLE `detail_pengguna`
  ADD PRIMARY KEY (`id_detail_pengguna`);

--
-- Indeks untuk tabel `detail_persyaratan`
--
ALTER TABLE `detail_persyaratan`
  ADD PRIMARY KEY (`id_detail_persyaratan`);

--
-- Indeks untuk tabel `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id_formulir`);

--
-- Indeks untuk tabel `formulir_dt`
--
ALTER TABLE `formulir_dt`
  ADD PRIMARY KEY (`id_formulir_dt`);

--
-- Indeks untuk tabel `jawaban_pertanyaan`
--
ALTER TABLE `jawaban_pertanyaan`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indeks untuk tabel `jenis_formulir`
--
ALTER TABLE `jenis_formulir`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `persyaratan`
--
ALTER TABLE `persyaratan`
  ADD PRIMARY KEY (`id_persyaratan`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_pengguna`
--
ALTER TABLE `detail_pengguna`
  MODIFY `id_detail_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `detail_persyaratan`
--
ALTER TABLE `detail_persyaratan`
  MODIFY `id_detail_persyaratan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `formulir_dt`
--
ALTER TABLE `formulir_dt`
  MODIFY `id_formulir_dt` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `jawaban_pertanyaan`
--
ALTER TABLE `jawaban_pertanyaan`
  MODIFY `id_jawaban` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `jenis_formulir`
--
ALTER TABLE `jenis_formulir`
  MODIFY `id_jenis` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `persyaratan`
--
ALTER TABLE `persyaratan`
  MODIFY `id_persyaratan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
