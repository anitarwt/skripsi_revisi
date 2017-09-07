-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Sep 2017 pada 01.22
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahweb_spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'dafahi', 'admin'),
(6, 'anita', '83349cbdac695f3943635a4fd1aaa7d0', 'manajer'),
(10, 'cikaka', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(12, 'prapto', '844c4b61203d43b6f7211def05620539', 'manajer'),
(13, 'levine', '3229bf45cb9d7b517edc4327c6a64f34', 'staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wp_alternatif`
--

CREATE TABLE `wp_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `pengalaman_kerja` varchar(500) NOT NULL,
  `divisi` varchar(10) NOT NULL,
  `file` varchar(50) NOT NULL,
  `vektor_s` double DEFAULT NULL,
  `vektor_v` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wp_alternatif`
--

INSERT INTO `wp_alternatif` (`id_alternatif`, `nama_alternatif`, `jk`, `tanggal_lahir`, `alamat`, `email`, `no_hp`, `pendidikan`, `pengalaman_kerja`, `divisi`, `file`, `vektor_s`, `vektor_v`) VALUES
(21, 'Shinta', 'wanita', '1995-07-13', 'Jalan Maju gang Cakrawala ', 'shinta@amikom.ac.id', 2147483647, 'S1', '-2015 Depnaker Surabaya\r\n-2016 Bank Mandiri', 'teknisi', 'file_1503385017', 2.0937047867021, 0.10540153644266877),
(22, 'Rendy', 'pria', '1992-08-05', 'Jalan Pegangsaan Timur no 290 ', 'Rendy_panduga@amikom.ac.id', 2147483647, 'D3', '2014- Staff IT Amikom', 'teknisi', 'file_1503386391', 1.5879132994728, 0.07993892098121975),
(23, 'Doni', 'pria', '1994-07-07', 'Jalan Jawa No 219 ', 'doni@amikom.ac.id', 2147483647, 'S1', '2013-IT Staff Amikom\r\n2015-IT Staff Sale Stock', 'teknisi', 'file_1503386397', 1.2190136542045, 0.061367730978029174),
(24, 'Slamet', 'pria', '1995-10-26', 'Jalan kalimantan no 34 malang ', 'slamet.riyadhi@unair.com', 2147483647, 'D3', '2015: Staff IT Gameloft\r\n2016 Database admin Biznet', 'teknisi', 'file_1503388054', 2.6718339650709, 0.13450578459142146),
(25, 'Renold', 'pria', '2017-08-11', 'Jalan Anggayani no 123', 'renold@yahoo.com', 839348842, 'S2', '2014-Tester Gameloft\r\n2017-Customer Care Bri', 'teknisi', 'file_1504165869.rar', 1.3459001926324, 0.06775546825079842),
(26, 'Andre', 'pria', '2017-08-31', 'Jalan Anggur no 123 Jakarta', 'andre_taulani@gmail.com', 2147483647, 'S1', '2013-Staff IT UII \r\n2017-Staff IT Amikom', 'teknisi', 'file_1504165946.rar', 3, 0.15102635831772449),
(27, 'Fandi', 'pria', '2017-08-08', 'Jalan Masjid gang no 23 Malang', 'Fandi@yahoo.com', 2147483647, 'D3', 'Fresh Graduate', 'teknisi', 'file_1504166028.rar', 1.8646771873141, 0.09387180167939531),
(30, 'Septo', 'pria', '2017-08-15', 'Jalan Surabaya no 23 Perumahan Jatimulya', 'septoadyhma@yahoo.com', 2147483647, 'SMU', '2016-Staff IT Universitas Padjajaran', 'teknisi', 'file_1504166106.rar', 2.2837538219638, 0.11496900767512588),
(31, 'Andi', 'pria', '1999-03-09', 'Jalan  Naga no 12 Malang', 'andi.malarangeng@yahoo.com', 2147483647, 'D3', 'Fresh Graduate', 'teknisi', 'file_1504166191.rar', 1.8047166218519, 0.09085325973125279),
(32, 'Rinda', 'wanita', '2009-01-02', 'Jalan Jeruk No 128 Jakarta', 'rindaharahap@yahoo.com', 2147483647, 'S1', 'Fresh Graduate', 'teknisi', 'file_1504166262.rar', 1.9925686973396, 0.10031013135236398);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wp_kriteria`
--

CREATE TABLE `wp_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `tipe_kriteria` enum('Cost','Benefit') NOT NULL DEFAULT 'Benefit',
  `bobot` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wp_kriteria`
--

INSERT INTO `wp_kriteria` (`id_kriteria`, `nama_kriteria`, `tipe_kriteria`, `bobot`) VALUES
(19, 'Skill', 'Benefit', 4),
(20, 'Analisa', 'Benefit', 4),
(21, 'Komunikasi', 'Benefit', 2),
(22, 'Pengalaman Kerja', 'Benefit', 3),
(23, 'Penampilan', 'Benefit', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wp_nilai`
--

CREATE TABLE `wp_nilai` (
  `id_nilai` int(50) NOT NULL,
  `id_alternatif` int(255) DEFAULT NULL,
  `id_kriteria` int(100) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wp_nilai`
--

INSERT INTO `wp_nilai` (`id_nilai`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(135, 16, 12, 3),
(136, 16, 13, 2),
(137, 16, 14, 4),
(138, 16, 15, 2),
(139, 16, 16, 1),
(140, 10, 0, 0),
(141, 10, 12, 2),
(142, 10, 13, 2),
(143, 10, 14, 3),
(144, 10, 15, 2),
(145, 11, 12, 5),
(146, 11, 13, 2),
(147, 11, 14, 1),
(148, 11, 15, 2),
(150, 15, 14, 5),
(151, 12, 14, 87),
(152, 12, 15, 23),
(153, 9, 14, 4),
(154, 9, 15, 7),
(155, 13, 14, 2),
(156, 13, 15, 3),
(187, 21, 19, 3),
(188, 21, 20, 2),
(189, 21, 21, 1),
(190, 21, 22, 2),
(191, 21, 23, 3),
(192, 22, 19, 3),
(193, 22, 20, 1),
(194, 22, 21, 2),
(195, 22, 22, 1),
(196, 22, 23, 2),
(197, 23, 19, 2),
(198, 23, 20, 1),
(199, 23, 21, 1),
(200, 23, 22, 1),
(201, 23, 23, 1),
(202, 24, 19, 2),
(203, 24, 20, 3),
(204, 24, 21, 3),
(205, 24, 22, 3),
(206, 24, 23, 3),
(207, 25, 19, 1),
(208, 25, 20, 1),
(209, 25, 21, 2),
(210, 25, 22, 2),
(211, 25, 23, 2),
(212, 26, 19, 3),
(213, 26, 20, 3),
(214, 26, 21, 3),
(215, 26, 22, 3),
(216, 26, 23, 3),
(217, 27, 19, 2),
(218, 27, 20, 2),
(219, 27, 21, 1),
(220, 27, 22, 2),
(221, 27, 23, 3),
(222, 30, 19, 2),
(223, 30, 20, 3),
(224, 30, 21, 1),
(225, 30, 22, 3),
(226, 30, 23, 3),
(227, 31, 19, 1),
(228, 31, 20, 2),
(229, 31, 21, 3),
(230, 31, 22, 3),
(231, 31, 23, 1),
(232, 32, 19, 2),
(233, 32, 20, 3),
(234, 32, 21, 2),
(235, 32, 22, 1),
(236, 32, 23, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_alternatif`
--
ALTER TABLE `wp_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `wp_kriteria`
--
ALTER TABLE `wp_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `wp_nilai`
--
ALTER TABLE `wp_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `wp_alternatif`
--
ALTER TABLE `wp_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `wp_kriteria`
--
ALTER TABLE `wp_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `wp_nilai`
--
ALTER TABLE `wp_nilai`
  MODIFY `id_nilai` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
