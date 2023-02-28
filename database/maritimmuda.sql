-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 06:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maritimmuda`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_bidang_keahlian`
--

CREATE TABLE `master_bidang_keahlian` (
  `id` int(11) NOT NULL,
  `nama_alias` varchar(255) NOT NULL,
  `nama_keahlian` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_bidang_keahlian`
--

INSERT INTO `master_bidang_keahlian` (`id`, `nama_alias`, `nama_keahlian`, `keterangan`) VALUES
(1, 'Skill', 'Arkeologi, Sejarah, dan Budaya Maritim', ''),
(2, 'Skill', 'Bioteknologi, Biokimia, dan Pengolahan Produk Kelautan', ''),
(3, 'Skill', 'Geologi Kelautan', ''),
(4, 'Skill', 'Kedokteran Kelautan', ''),
(5, 'Skill', 'Klimatologi dan Meteorologi Kelautan', ''),
(6, 'Skill', 'Logistik dan Ekonomi Maritim', ''),
(7, 'Skill', 'Manajemen Pesisir Terpadu, Tata Kelola Laut, Hukum Maritim', ''),
(8, 'Skill', 'Oseanografi Biologi, Oseanografi Perikanan', ''),
(9, 'Skill', 'Oseanografi Fisika, Pemodelan Laut', ''),
(10, 'Skill', 'Oseanografi Kimia, Pencemaran Laut', ''),
(11, 'Skill', 'Perikanan Tangkap', ''),
(12, 'Skill', 'Perikanan Budidaya', ''),
(13, 'Skill', 'Sistem Informasi, Penginderaan Jauh, dan Instrumentasi Kelautan', ''),
(14, 'Skill', 'Sosial dan Ekonomi Perikanan', ''),
(15, 'Skill', 'Teknik Kelautan, Energi Laut', ''),
(16, 'Skill', 'Teknik Perkapalan, Sistem Perkapalan', '');

-- --------------------------------------------------------

--
-- Table structure for table `master_pendidikan`
--

CREATE TABLE `master_pendidikan` (
  `id` int(11) NOT NULL,
  `nama_alias` varchar(255) NOT NULL,
  `nama_pendidikan` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_pendidikan`
--

INSERT INTO `master_pendidikan` (`id`, `nama_alias`, `nama_pendidikan`, `keterangan`) VALUES
(1, 'Pend', 'SMA', ''),
(2, 'Pend', 'SMK', ''),
(3, 'Pend', 'MA/Pesantren', ''),
(4, 'Pend', 'D-III', ''),
(5, 'Pend', 'D-IV', ''),
(6, 'Pend', 'S1', ''),
(7, 'Pend', 'S2', ''),
(8, 'Pend', 'S3', '');

-- --------------------------------------------------------

--
-- Table structure for table `master_provinsi`
--

CREATE TABLE `master_provinsi` (
  `id` int(11) NOT NULL,
  `nama_alias` varchar(255) NOT NULL,
  `nama_provinsi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_provinsi`
--

INSERT INTO `master_provinsi` (`id`, `nama_alias`, `nama_provinsi`, `keterangan`) VALUES
(1, 'Prov', 'Aceh', ''),
(2, 'Prov', 'Bali', ''),
(3, 'Prov', 'Banten', ''),
(4, 'Prov', 'Bengkulu', ''),
(5, 'Prov', 'DI Yogyakarta', ''),
(6, 'Prov', 'DKI Jakarta', ''),
(7, 'Prov', 'Gorontalo', ''),
(8, 'Prov', 'Jambi', ''),
(9, 'Prov', 'Jawa Barat', ''),
(10, 'Prov', 'Jawa Tengah', ''),
(11, 'Prov', 'Jawa Timur', ''),
(12, 'Prov', 'Kalimantan Barat', ''),
(13, 'Prov', 'Kalimantan Selatan', ''),
(14, 'Prov', 'Kalimantan Tengah', ''),
(15, 'Prov', 'Kalimantan Timur', ''),
(16, 'Prov', 'Kalimantan Utara', ''),
(17, 'Prov', 'Kepulauan Bangka Belitung', ''),
(18, 'Prov', 'Kepulauan Riau', ''),
(19, 'Prov', 'Lampung', ''),
(20, 'Prov', 'Maluku', ''),
(21, 'Prov', 'Maluku Utara', ''),
(22, 'Prov', 'Nusa Tenggara Barat', ''),
(23, 'Prov', 'Nusa Tenggara Timur', ''),
(24, 'Prov', 'Papua', ''),
(25, 'Prov', 'Papua Barat', ''),
(26, 'Prov', 'Riau', ''),
(27, 'Prov', 'Sulawesi Barat', ''),
(28, 'Prov', 'Sulawesi Selatan', ''),
(29, 'Prov', 'Sulawesi Tengah', ''),
(30, 'Prov', 'Sulawesi Tenggara', ''),
(31, 'Prov', 'Sulawesi Utara', ''),
(32, 'Prov', 'Sumatera Barat', ''),
(33, 'Prov', 'Sumatera Selatan', ''),
(34, 'Prov', 'Sumatera Utara', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `tmpt_lahir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(15) NOT NULL,
  `jns_keanggotaan` varchar(255) NOT NULL,
  `bidang_keahlian` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `instansi_pekerjaan` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `akun_instagram` varchar(255) NOT NULL,
  `akun_linkedin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `bio_singkat` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `thn_masuk` varchar(6) NOT NULL,
  `thn_tamat` varchar(6) NOT NULL,
  `organisasi` varchar(255) NOT NULL,
  `prestasi` varchar(255) NOT NULL,
  `karya_ilmiah` varchar(255) NOT NULL,
  `pengabdian` varchar(255) NOT NULL,
  `penelitian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `tmpt_lahir`, `tgl_lahir`, `jns_keanggotaan`, `bidang_keahlian`, `pekerjaan`, `instansi_pekerjaan`, `provinsi`, `no_hp`, `akun_instagram`, `akun_linkedin`, `alamat`, `bio_singkat`, `pendidikan`, `thn_masuk`, `thn_tamat`, `organisasi`, `prestasi`, `karya_ilmiah`, `pengabdian`, `penelitian`) VALUES
(5, 'Sandhika Galih', 'sandhikagalih@unpas.ac.id', 'profile1.jpg', '$2y$10$nXnrqGQTjpvg58OtOB/N.evYQjVlz7KIW37oUSQSQ2EgNMD0Dgrzq', 1, 1, 1552120289, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Doddy Ferdiansyah', 'doddy@gmail.com', 'profile.jpg', '$2y$10$FhGzXwwTWLN/yonJpDLR0.nKoeWlKWBoRG9bsk0jOAgbJ007XzeFO', 2, 1, 1552285263, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'Mara Karma', 'marakarma36@gmail.com', 'user3.jpg', '$2y$10$zs9Fr.3z2Xw4abTwlwTrAu9WRNomP8jYxiPN7FzZ6E2RPLa4cNoDC', 1, 1, 1605195781, 'Padang', '17-02-1995', 'Anggota Biasa (16 - 30 Tahun)', 'a', 'asdasda', 'asdasdas', 'a', '32432432', 'asdasda', 'asdasd', 'asdsad', 'adasdsa', 'a', '2012', '2015', 'asdsada', 'asdasd', 'asdasd', 'asdasd', 'asdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(8, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_bidang_keahlian`
--
ALTER TABLE `master_bidang_keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_pendidikan`
--
ALTER TABLE `master_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_provinsi`
--
ALTER TABLE `master_provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_bidang_keahlian`
--
ALTER TABLE `master_bidang_keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `master_pendidikan`
--
ALTER TABLE `master_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `master_provinsi`
--
ALTER TABLE `master_provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
