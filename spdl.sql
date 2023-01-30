-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 01:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spdl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id_gejala` int(11) NOT NULL,
  `kode_gejala` varchar(50) NOT NULL,
  `gejala` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id_gejala`, `kode_gejala`, `gejala`, `status`) VALUES
(2, 'G002 ', 'Tampil bluesreen pada OS Windows (macam-macam pesan error)', 'Tidak Aktif'),
(3, 'G003 ', 'Bunyi suara beep-beep', 'Aktif'),
(4, 'G004 ', 'PC atau laptop hidup, tapi tidak tampil di layar atau monitor', 'Aktif'),
(5, 'G005 ', 'Masuk Windows,tapi layar blank warna hitam', 'Aktif'),
(6, 'G006 ', 'Tombol keyboard sebagian atau seluruh tidak berfungsi', 'Tidak Aktif'),
(7, 'G007 ', 'Mati total / tidak bisa dihidupkan', 'Aktif'),
(8, 'G008 ', 'Berhenti beroperasi atau hang', 'Aktif'),
(9, 'G009 ', 'PC atau laptop lambat atau berat', 'Tidak Aktif'),
(10, 'G010 ', 'PC atau laptop hidup tapi tidak mau masuk Windows atau gagal booting', 'Aktif'),
(11, 'G011 ', 'Mengalami proses loading yang lama saat dihidupkan', 'Tidak Aktif'),
(12, 'G012 ', 'Sering restart sendiri', 'Tidak Aktif'),
(13, 'G013 ', 'Tidak ada tampilan awal BIOS', 'Tidak Aktif'),
(14, 'G014 ', 'Terdengar suara aneh pada Harddisk atau HDD', 'Aktif'),
(15, 'G015 ', 'Selalu Scandisk ketika booting', 'Aktif'),
(16, 'G016 ', 'Muncul pesan error pada BIOS (macam- macam pesan error)', 'Aktif'),
(17, 'G017 ', 'Tidak ada tanda-tanda dari sebagian/seluruh perangkat bekerja pada CPU', 'Aktif'),
(18, 'G018 ', 'Kinerja grafis terasa sangat berat (biasanya dalam game atau manipulasi gambar)', 'Aktif'),
(19, 'G019 ', 'Hanya sebagian perangkat yang bekerja', 'Aktif'),
(20, 'G020 ', 'Pointer mouse tidak merespon gerakan Mouse', 'Tidak Aktif'),
(21, 'G021 ', 'Tampak blok hitam, dan gambar tidak simetris / acak', 'Aktif'),
(22, 'G022 ', 'Keluar bunyi beep panjang pada saat laptop dinyalakan', 'Aktif'),
(23, 'G023 ', 'Dihidupkan agak sulit', 'Tidak Aktif'),
(24, 'G024 ', 'Baterai tidak mau di-charge', 'Aktif'),
(25, 'G025 ', 'Tidak ada indikasi masuk power', 'Aktif'),
(26, 'G026 ', 'Laptop di-charge posisi hidup kemudian tiba-tiba mati layar', 'Aktif'),
(27, 'G027 ', 'Terdapat garis horizontal / vertikal di tengah monitor', 'Aktif'),
(28, 'G028 ', 'Device driver informasi tidak terdeteksi dalam device manager', 'Aktif'),
(29, 'G029 ', 'Sound atau suara tidak keluar', 'Aktif'),
(30, 'G030 ', 'Muncul pesan error saat menjalankan aplikasi audio', 'Tidak Aktif'),
(31, 'G031 ', 'Belum sampai Windows sudah restart Lagi', 'Tidak Aktif'),
(32, 'G032 ', 'Muncul pesan error pada Windows/OS', 'Aktif'),
(33, 'G033 ', 'PC atau laptop sangat panas serta kotor atau banyak debu', 'Aktif'),
(34, 'G034 ', 'Kipas tidak berfungsi', 'Tidak Aktif'),
(35, 'G035 ', 'Baterai di-charge tidak bisa penuh 100%', 'Aktif'),
(36, 'G036 ', 'Indikator baterai menampilkan silang (x) merah', 'Tidak Aktif'),
(37, 'G037 ', 'Tombol keyboard lengket dan terpencet sendiri', 'Aktif'),
(38, 'G038 ', 'Laptop bunyi beep panjang 1x dan beep pendek 2x', 'Aktif'),
(39, 'G039 ', 'Laptop bunyi beep panjang 1x dan beep pendek 3x', 'Aktif'),
(46, 'G10051', 'keyboard mati hidup', 'Tidak Aktif'),
(47, 'G11 G33 G55', 'lampu mati', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kerusakan`
--

CREATE TABLE `tb_kerusakan` (
  `id_kerusakan` int(11) NOT NULL,
  `kode_kerusakan` varchar(50) NOT NULL,
  `kerusakan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kerusakan`
--

INSERT INTO `tb_kerusakan` (`id_kerusakan`, `kode_kerusakan`, `kerusakan`) VALUES
(1, 'K001 ', 'Monitor Bermasalah\r\n'),
(2, 'K002 ', 'RAM Bermasalah\r\n'),
(3, 'K003 ', 'HDD Bermasalah\r\n'),
(4, 'K004 ', 'VGA Bermasalah\r\n'),
(5, 'K005 ', 'Sound Card Bermasalah\r\n'),
(6, 'K006 ', 'OS / Windows Bermasalah\r\n'),
(7, 'K007 ', 'Power Supply Bermasalah\r\n'),
(8, 'K008 ', 'Processor Bermasalah\r\n'),
(9, 'K009 ', 'Keyboard Bermasalah\r\n'),
(10, 'K010 ', 'Mouse / Touchpad Bermasalah\r\n'),
(11, 'K011 ', 'Motherboard / IC Regulator Bermasalah\r\n'),
(12, 'K012 ', 'Charger Bermasalah\r\n'),
(13, 'K013 ', 'Kipas Bermasalah / Kotor\r\n'),
(14, 'K014 ', 'Baterai Laptop Bermasalah\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_relasi`
--

CREATE TABLE `tb_relasi` (
  `id_relasi` int(11) NOT NULL,
  `kd_gejala` varchar(250) NOT NULL,
  `kd_kerusakan` varchar(250) NOT NULL,
  `kd_rule` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_relasi`
--

INSERT INTO `tb_relasi` (`id_relasi`, `kd_gejala`, `kd_kerusakan`, `kd_rule`) VALUES
(1, 'G004', 'K001', 'R1'),
(2, 'G021', 'K001', 'R1'),
(3, 'G027', 'K001', 'R1'),
(4, 'G002', 'K002', 'R2'),
(5, 'G003', 'K002', 'R2'),
(6, 'G004', 'K002', 'R2'),
(7, 'G009', 'K002', 'R2'),
(8, 'G012', 'K002', 'R2'),
(9, 'G013', 'K002', 'R2'),
(10, 'G016', 'K002', 'R2'),
(11, 'G022', 'K002', 'R2'),
(12, 'G008', 'K003', 'R3'),
(13, 'G009', 'K003', 'R3'),
(14, 'G010', 'K003', 'R3'),
(15, 'G011', 'K003', 'R3'),
(16, 'G014', 'K003', 'R3'),
(17, 'G015', 'K003', 'R3'),
(18, 'G038', 'K003', 'R3'),
(19, 'G002', 'K004', 'R4'),
(20, 'G003', 'K004', 'R4'),
(21, 'G004', 'K004', 'R4'),
(22, 'G013', 'K004', 'R4'),
(23, 'G018', 'K004', 'R4'),
(24, 'G028', 'K004', 'R4'),
(25, 'G038', 'K004', 'R4'),
(26, 'G028', 'K005', 'R5'),
(27, 'G029\r\n', 'K005', 'R5'),
(28, 'G030\r\n', 'K005', 'R5'),
(29, 'G005\r\n', 'K006\r\n', 'R6\r\n'),
(30, 'G009\r\n', 'K006\r\n', 'R6\r\n'),
(31, 'G010\r\n', 'K006\r\n', 'R6\r\n'),
(32, 'G012\r\n', 'K006\r\n', 'R6\r\n'),
(33, 'G032\r\n', 'K006\r\n', 'R6\r\n'),
(34, 'G001\r\n', 'K007\r\n', 'R7\r\n'),
(35, 'G007\r\n', 'K007\r\n', 'R7\r\n'),
(36, 'G017\r\n', 'K007\r\n', 'R7\r\n'),
(37, 'G019\r\n', 'K007\r\n', 'R7\r\n'),
(38, 'G023\r\n', 'K007\r\n', 'R7\r\n'),
(39, 'G025\r\n', 'K007\r\n', 'R7\r\n'),
(40, 'G004\r\n', 'K008\r\n', 'R8\r\n'),
(41, 'G013\r\n', 'K008\r\n', 'R8\r\n'),
(42, 'G016\r\n', 'K008\r\n', 'R8\r\n'),
(43, 'G003', 'K009\r\n', 'R9\r\n'),
(44, 'G006\r\n', 'K009\r\n', 'R9\r\n'),
(45, 'G022\r\n', 'K009\r\n', 'R9\r\n'),
(46, 'G028\r\n', 'K009\r\n', 'R9\r\n'),
(47, 'G037\r\n', 'K009\r\n', 'R9\r\n'),
(48, 'G039\r\n', 'K009\r\n', 'R9\r\n'),
(49, 'G020\r\n', 'K010', 'R10'),
(50, 'G023\r\n', 'K010', 'R10'),
(51, 'G007\r\n', 'K011\r\n', 'R11'),
(52, 'G023\r\n', 'K011\r\n', 'R11'),
(53, 'G024\r\n', 'K012\r\n', 'R12'),
(54, 'G025\r\n', 'K012\r\n', 'R12'),
(55, 'G026\r\n', 'K012\r\n', 'R12\r\n'),
(56, 'G001\r\n', 'K013\r\n', 'R13\r\n'),
(57, 'G012\r\n', 'K013\r\n', 'R13\r\n'),
(58, 'G033\r\n', 'K013\r\n', 'R13\r\n'),
(59, 'G034\r\n', 'K013\r\n', 'R13\r\n'),
(60, 'G024\r\n', 'K014\r\n', 'R14\r\n'),
(61, 'G035\r\n', 'K014\r\n', 'R14\r\n'),
(62, 'G036\r\n', 'K014\r\n', 'R14\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rule`
--

CREATE TABLE `tb_rule` (
  `id_rule` int(11) NOT NULL,
  `kode_rule` varchar(50) NOT NULL,
  `kode_gejala` varchar(128) NOT NULL,
  `kode_kerusakan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rule`
--

INSERT INTO `tb_rule` (`id_rule`, `kode_rule`, `kode_gejala`, `kode_kerusakan`) VALUES
(1, 'R1', 'G004 G021 G027\r\n', 'K001\r\n'),
(2, 'R2', 'G002 G003 G004 G009 G012 G013 G016 G022\r\n', 'K002\r\n'),
(3, 'R3', 'G008 G009 G010 G011 G014 G015 G031 \r\n', 'K003\r\n'),
(4, 'R4', 'G002 G003 G004 G013 G018 G028 G038 \r\n', 'K004\r\n'),
(5, 'R5', 'G028 G029 G030 \r\n', 'K005\r\n'),
(6, 'R6', 'G005 G009 G010 G012 G032  \r\n', 'K006\r\n'),
(7, 'R7', 'G001 G007 G017 G019 G023 G025\r\n', 'K007\r\n'),
(8, 'R8', 'G004 G013 G016 \r\n', 'K008\r\n'),
(9, 'R9', 'G003 G006 G022 G028 G037 G039 \r\n', 'K009\r\n'),
(10, 'R10', 'G020 G028  \r\n', 'K010\r\n'),
(11, 'R11', 'G007 G023 \r\n', 'K011\r\n'),
(12, 'R12', 'G024 G025 G026 \r\n', 'K012\r\n'),
(13, 'R13', 'G001 G012 G033 G034\r\n', 'K013\r\n'),
(14, 'R14', 'G024 G035 G036 \r\n', 'K014\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_hasil`
--

CREATE TABLE `tmp_hasil` (
  `id_gejala` int(11) NOT NULL,
  `kode_gejala` varchar(10) NOT NULL,
  `poin_gejala` double NOT NULL,
  `poin_user` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'diki', 'diki@gmail.com', 'default.png', '$2y$10$qRAU34WSA5G/a5eV285STecUPCzYxhAnVwRgwVRLXBM0UdSDmSWn2', 1, 1, 1659594035),
(2, 'isan', 'isan@gmail.com', 'default.png', '$2y$10$K0RghCpab3ZAbHepO7CAkOEIojjFNxIfBgaV0kLA6RFnk8U6WcmA6', 2, 1, 1659594417),
(3, 'admin', 'admin@gmail.com', 'default.png', '$2y$10$6w2vvLnQarUfTYWT8r3lPOUjhYY3Uxv0gXgy666C76vZsyBaIAZlm', 1, 1, 1675080269),
(4, 'user', 'user@gmail.com', 'default.png', '$2y$10$EfyXGwBwpGtloJkKN3WuXunxjpSeDWa70/FNJorw9hpr82uGREntm', 2, 1, 1675080344);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 1, 3),
(5, 2, 3),
(6, 1, 4),
(7, 2, 4),
(9, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Home'),
(2, 'Dashboard'),
(3, 'Diagnosa'),
(4, 'Info');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indexes for table `tb_relasi`
--
ALTER TABLE `tb_relasi`
  ADD PRIMARY KEY (`id_relasi`);

--
-- Indexes for table `tb_rule`
--
ALTER TABLE `tb_rule`
  ADD PRIMARY KEY (`id_rule`);

--
-- Indexes for table `tmp_hasil`
--
ALTER TABLE `tmp_hasil`
  ADD PRIMARY KEY (`id_gejala`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_kerusakan`
--
ALTER TABLE `tb_kerusakan`
  MODIFY `id_kerusakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_relasi`
--
ALTER TABLE `tb_relasi`
  MODIFY `id_relasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tb_rule`
--
ALTER TABLE `tb_rule`
  MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tmp_hasil`
--
ALTER TABLE `tmp_hasil`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
