-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2019 at 03:29 AM
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
  `id_anggota` varchar(8) NOT NULL,
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
('IDPX0001', 'Titam Septian', 'Subang', 'Laki-Laki', '08172651231', '2019-02-14 15:18:13'),
('IDPX0010', 'Septian Dwi Putra Pradipta', 'Subang', 'Laki-Laki', '081292839823', '2019-02-14 16:31:27'),
('IDPX0011', 'Titam Dwi Septian', 'Subang', 'Laki-Laki', '09283473745', '2019-02-18 18:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `data_peminjaman`
--

CREATE TABLE `data_peminjaman` (
  `id_pjn` varchar(8) NOT NULL,
  `id_anggota_peminjaman` varchar(8) NOT NULL,
  `kode_buku_pjn` varchar(8) NOT NULL,
  `jumlah_hari_pjn` int(100) NOT NULL,
  `tgl_pengembalian` text NOT NULL,
  `tanggal_entri_pjn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_peminjaman`
--

INSERT INTO `data_peminjaman` (`id_pjn`, `id_anggota_peminjaman`, `kode_buku_pjn`, `jumlah_hari_pjn`, `tgl_pengembalian`, `tanggal_entri_pjn`) VALUES
('PJNX0002', 'IDPX0011', 'KDBX0002', 13, 'March 3, 2019', 'February 18, 2019');

-- --------------------------------------------------------

--
-- Table structure for table `list_buku`
--

CREATE TABLE `list_buku` (
  `kode_buku` varchar(8) NOT NULL,
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
('KDBX0001', 'images3.jpg', 'Sebuah Foto', 'Titam', 2009, '231', 'mamamam', '2019-02-14 15:09:35', 'Septian'),
('KDBX0002', 'images2.jpg', 'Segititga', 'pt. ayam sejahtera', 2009, '493', 'Segitiga', '2019-02-18 18:12:54', 'Titam');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_pjn_ryt` varchar(8) NOT NULL,
  `id_anggota_ryt` varchar(8) NOT NULL,
  `kode_buku_ryt` varchar(8) NOT NULL,
  `tgl_pjn_ryt` varchar(50) NOT NULL,
  `jumlah_hari_pjn_ryt` int(255) NOT NULL,
  `tgl_pengembalian_ryt` text NOT NULL,
  `tgl_peng_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_pjn_ryt`, `id_anggota_ryt`, `kode_buku_ryt`, `tgl_pjn_ryt`, `jumlah_hari_pjn_ryt`, `tgl_pengembalian_ryt`, `tgl_peng_user`) VALUES
('PJNX0001', 'IDPX0001', 'KDBX0001', 'February 14, 2019', 1, 'February 15, 2019', 'February 18, 2019, 12:14 pm');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
