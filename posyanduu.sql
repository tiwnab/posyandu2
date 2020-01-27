-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2020 at 12:54 AM
-- Server version: 10.2.30-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u6256344_posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `berat_lhr` int(10) NOT NULL,
  `panjang_lhr` int(10) NOT NULL,
  `asi` varchar(10) NOT NULL,
  `id_ortu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id`, `nama`, `tgl_lahir`, `jenis_kelamin`, `berat_lhr`, `panjang_lhr`, `asi`, `id_ortu`) VALUES
(2, 'Adela Nurma', '2019-08-07', 'P', 23, 12, 'asi', 12),
(3, 'Uchiha Sasuke', '2019-09-10', 'L', 2, 13, 'asi', 13);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `isi` longtext NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `isi`, `judul`, `tanggal`, `image`) VALUES
(1, '<p>wadwadadwa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></p>', 'Jadwal Posyandu', '1970-01-01', '01486a7311f59b8e039f5310d6058f83.png'),
(2, '<p>wadawdawdwa<br></p>', 'Ini Judul', '2020-01-20', 'd0b40a788cb487a23a0dc1a9f80c22f2.png'),
(3, '<p>COBAA INIIIII<br></p>', 'dwadwadaw', '2020-01-21', '407c9daf346087c2ae0e058c5fd7af33.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_imunisasi`
--

CREATE TABLE `data_imunisasi` (
  `id` int(11) NOT NULL,
  `id_balita` int(11) NOT NULL,
  `id_imunisasi` int(11) NOT NULL,
  `tgl_imunisasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_imunisasi`
--

INSERT INTO `data_imunisasi` (`id`, `id_balita`, `id_imunisasi`, `tgl_imunisasi`) VALUES
(1, 3, 9, '2020-01-23'),
(2, 2, 1, '1970-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
  `id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `sesi` varchar(10) NOT NULL,
  `ket_sesi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`id`, `jenis`, `sesi`, `ket_sesi`) VALUES
(1, 'BCG', 'I', '0-2 bulan'),
(2, 'HEPATITIS B', 'I', '0-2 bulan'),
(3, 'HEPATITIS B', 'II', '1-4 bulan'),
(4, 'HEPATITIS B', 'III', '6-18 bulan'),
(5, 'POLIO', 'I', 'O bulan (minggu 1)'),
(6, 'POLIO', 'II', '2-4 bulan'),
(7, 'POLIO', 'III', '3-5 bulan'),
(8, 'POLIO', 'IV', '4-6 bulan'),
(9, 'POLIO', 'V', '18-24 bulan'),
(10, 'POLIO', 'VI', '5-6 tahun');

-- --------------------------------------------------------

--
-- Table structure for table `orangtua`
--

CREATE TABLE `orangtua` (
  `id` int(11) NOT NULL,
  `no_kk` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `rt_rw` varchar(10) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `kb` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orangtua`
--

INSERT INTO `orangtua` (`id`, `no_kk`, `nama_ayah`, `nama_ibu`, `rt_rw`, `no_hp`, `kb`) VALUES
(12, '3330002226667', 'Arief', 'Widad', '02/03', '09876687588583', 'non'),
(13, '334450098756849', 'Budi Santoso', 'Eka Wahyuni', '04/05', '085747896357721', 'iud');

-- --------------------------------------------------------

--
-- Table structure for table `statistik_anak`
--

CREATE TABLE `statistik_anak` (
  `id` int(10) NOT NULL,
  `id_balita` int(10) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `berat` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik_anak`
--

INSERT INTO `statistik_anak` (`id`, `id_balita`, `tgl_periksa`, `berat`, `tinggi`) VALUES
(1, 3, '2019-11-20', 3, 22),
(2, 3, '2019-12-24', 5, 25),
(3, 3, '2020-01-22', 8, 29);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` int(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL,
  `alamat_posyandu` longtext NOT NULL,
  `no_telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nip`, `password`, `role`, `alamat_posyandu`, `no_telp`) VALUES
(1, 'RIsha Asdiyana Rifi', 18028631, '7f95b733f4210c71482904eb422143f8', 'petugas', 'Jogokariyan Yogyakarta', '083820935630'),
(2, 'Arief Nur Hidayat', 18028632, '7f95b733f4210c71482904eb422143f8', 'kader', 'Citeurep Bogor', '0856478362579');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_imunisasi`
--
ALTER TABLE `data_imunisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orangtua`
--
ALTER TABLE `orangtua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistik_anak`
--
ALTER TABLE `statistik_anak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_imunisasi`
--
ALTER TABLE `data_imunisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orangtua`
--
ALTER TABLE `orangtua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `statistik_anak`
--
ALTER TABLE `statistik_anak`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
