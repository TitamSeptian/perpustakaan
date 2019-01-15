-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2019 at 03:51 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_anggota_perpus`
--

CREATE TABLE `data_anggota_perpus` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `alamat_anggota` text NOT NULL,
  `jk_anggota` enum('Laki-Laki','Wanita') NOT NULL,
  `no_tlp_anggota` text NOT NULL,
  `tanggal_entri_akun` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anggota_perpus`
--

INSERT INTO `data_anggota_perpus` (`id_anggota`, `nama_anggota`, `alamat_anggota`, `jk_anggota`, `no_tlp_anggota`, `tanggal_entri_akun`) VALUES
(12, 'Titam Dwi Septian', 'Subang', 'Laki-Laki', '081324941403', '2019-01-09 11:21:07'),
(13, 'Septian Dwi Putra Pradipta', 'Bandung', 'Laki-Laki', '08212461263', '2019-01-09 11:22:26'),
(15, 'titam', 'SUBANG', 'Laki-Laki', '08126523236', '2019-01-11 10:26:37'),
(16, 'M Bintang F', 'Subang', 'Laki-Laki', '08923642312', '2019-01-11 10:26:58'),
(17, 'Restu Adi', 'Subang', 'Laki-Laki', '08563524623', '2019-01-11 10:27:22'),
(18, 'luli', 'subang', 'Wanita', '081324941403', '2019-01-14 09:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `data_peminjaman`
--

CREATE TABLE `data_peminjaman` (
  `id_pjn` int(11) NOT NULL,
  `id_anggota_peminjaman` int(11) NOT NULL,
  `kode_buku_pjn` int(11) NOT NULL,
  `jumlah_hari_pjn` int(100) NOT NULL,
  `tgl_pengembalian` text NOT NULL,
  `tanggal_entri_pjn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_peminjaman`
--

INSERT INTO `data_peminjaman` (`id_pjn`, `id_anggota_peminjaman`, `kode_buku_pjn`, `jumlah_hari_pjn`, `tgl_pengembalian`, `tanggal_entri_pjn`) VALUES
(58, 12, 20, 12, 'January 26, 2019, 7:19 am', 'January 14, 2019, 7:19 am'),
(59, 18, 23, 2, 'January 16, 2019, 8:09 am', 'January 14, 2019, 8:09 am'),
(60, 12, 21, 4, 'January 18, 2019, 10:43 am', 'January 14, 2019, 10:43 am'),
(61, 12, 21, 4, 'January 18, 2019, 10:44 am', 'January 14, 2019, 10:44 am'),
(62, 12, 22, 81, 'April 5, 2019, 10:45 am', 'January 14, 2019, 10:45 am'),
(63, 15, 22, 2000, 'July 6, 2024, 10:46 am', 'January 14, 2019, 10:46 am'),
(64, 13, 20, 1, 'January 15, 2019, 10:46 am', 'January 14, 2019, 10:46 am'),
(65, 12, 21, 11, 'January 25, 2019, 10:46 am', 'January 14, 2019, 10:46 am'),
(66, 13, 23, 1, 'January 15, 2019, 10:46 am', 'January 14, 2019, 10:46 am'),
(67, 12, 21, 1, 'January 15, 2019, 10:47 am', 'January 14, 2019, 10:47 am');

-- --------------------------------------------------------

--
-- Table structure for table `list_buku`
--

CREATE TABLE `list_buku` (
  `kode_buku` int(11) NOT NULL,
  `gambar_buku` varchar(255) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` int(10) NOT NULL,
  `jumlah_halaman` text NOT NULL,
  `sinopsis` text NOT NULL,
  `tanggal_entri_buku` datetime NOT NULL,
  `penulis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_buku`
--

INSERT INTO `list_buku` (`kode_buku`, `gambar_buku`, `judul_buku`, `penerbit`, `tahun_terbit`, `jumlah_halaman`, `sinopsis`, `tanggal_entri_buku`, `penulis`) VALUES
(20, 'IMG-20180823-WA0022.jpg', 'Kisah 36 Remaja', 'Gramedia', 2019, '108', 'mengisah kan 36 teman yaitu satu kelas dengan 1 tokoh utama', '2019-01-09 11:08:48', 'Titam'),
(21, '2018-08-14 (2).png', 'baruuu', 'Gramedia', 2091, '100', 'rame', '2019-01-10 09:34:45', 'jkds'),
(22, '2018-08-14 (2).png', 'inc.', 'tata inc.', 2002, '23', 'Kisah inc.', '2019-01-11 14:04:31', 'Irfan'),
(23, 'Adobe_Post_20180819_161931.jpg', 'TAP TO Edit', 'Titam', 2002, '203', 'Kisah Tap To edit', '2019-01-14 13:16:12', 'Titak');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_pjn_ryt` int(11) NOT NULL,
  `id_anggota_ryt` int(11) NOT NULL,
  `kode_buku_ryt` int(11) NOT NULL,
  `tgl_pjn_ryt` varchar(50) NOT NULL,
  `jumlah_hari_pjn_ryt` int(255) NOT NULL,
  `tgl_pengembalian_ryt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `name_user` varchar(50) NOT NULL,
  `password_user` varchar(50) NOT NULL,
  `level_user` enum('ADMIN_1','USER_1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`name_user`, `password_user`, `level_user`) VALUES
('admin', 'admin', 'ADMIN_1'),
('septian', 'septian', 'USER_1'),
('titam', 'titam', 'ADMIN_1'),
('user', 'user', 'USER_1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_anggota_perpus`
--
ALTER TABLE `data_anggota_perpus`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
  ADD PRIMARY KEY (`id_pjn`);

--
-- Indexes for table `list_buku`
--
ALTER TABLE `list_buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_pjn_ryt`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`name_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_anggota_perpus`
--
ALTER TABLE `data_anggota_perpus`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `data_peminjaman`
--
ALTER TABLE `data_peminjaman`
  MODIFY `id_pjn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `list_buku`
--
ALTER TABLE `list_buku`
  MODIFY `kode_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
