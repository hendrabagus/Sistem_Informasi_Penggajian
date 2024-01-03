-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 03:26 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_mellavista`
--

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` varchar(10) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `gaji_pokok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `gaji_pokok`) VALUES
('JB001', 'Manager IT Support', 5500000),
('JB002', 'Staff IT', 4500000),
('JB003', 'Junior Front End', 5000000),
('JB004', 'Junior Network Administrator', 5000000),
('JB005', 'Junior Mobile Programer', 5000000),
('JB006', 'Senior Web Developer', 5500000),
('JB007', 'Data Analis', 5500000),
('JB008', 'Data Science', 6000000);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` varchar(10) NOT NULL,
  `id_jabatan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `tgl_mulai_kerja` date NOT NULL,
  `status_karyawan` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_rek` varchar(25) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `id_jabatan`, `nama_karyawan`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `alamat`, `no_telp`, `pendidikan`, `tgl_mulai_kerja`, `status_karyawan`, `email`, `no_rek`, `foto`) VALUES
('KRY0001', 'JB002', 'Fairuz Syifa Khaerunnisa', 'Perempuan', 'Lampung', '2002-06-18', 'Islam', 'Villa Dago Pamulang', '086534876243', 'S1 Teknik Informatika', '2023-06-01', 'Tetap', 'admin@email.com', '4673542311', 'syifa.jpg'),
('KRY0002', 'JB001', 'Hendra Bagus Setiawanto', 'Laki-Laki', 'Madiun', '1997-06-25', 'Islam', 'Jalan Nuri 1 Blok B4 No.9', '085257126513', 'S1 Teknik Informatika', '2023-06-01', 'Tetap', 'hendrabagussetiawanto25@gmail.com', '21213231232', 'hendra 3x4.jpg'),
('KRY0003', 'JB006', 'Haliza Musdalifa', 'Perempuan', 'Jakarta', '2001-07-09', 'Islam', 'Ulujami Raya Jakarta Selatan', '085257126513', 'S1 Teknik Informatika', '2023-06-01', 'Tetap', 'admin@email.com', '21213231232', 'haliza.jpg'),
('KRY0004', 'JB003', 'Ierdho Dharma Putra', 'Laki-Laki', 'Belitung', '2003-01-19', 'Islam', 'Pondok Petir Tangerang Selatan', '086534876243', 'S1 Teknik Informatika', '2023-06-01', 'Tetap', 'admin@email.com', '4673542311', 'edo.jpg'),
('KRY0005', 'JB004', 'Michel Olivia Diaz', 'Perempuan', 'Jakarta', '2002-10-19', 'Islam', 'Jagakarsa Jakarta Selatan', '087534678132', 'S1 Teknik Informatika', '2023-06-01', 'Tetap', 'admin@email.com', '4673542311', 'oliv.jpg'),
('KRY0006', 'JB008', 'Salsa Juliani Nuryadin', 'Perempuan', 'Tangerang Selatan', '2002-07-16', 'Islam', 'BSD Tangerang Selatan', '087534678132', 'S1 Teknik Informatika', '2023-06-01', 'Tetap', 'admin@email.com', '4673542311', 'salsa.jpg'),
('KRY0007', 'JB006', 'Siti Mariani', 'Perempuan', 'Tangerang', '2000-02-13', 'Islam', 'Alam asri raya blok k no 17 ', '08976543276', 'SMK', '2023-06-01', 'Kontrak', 'sitimariani34@gmail.com', '0975236516417', 'WhatsApp Image 2023-06-18 at 19.32.28.jpeg'),
('KRY0008', 'JB002', 'Ridzal Rhamdhan', 'Laki-Laki', 'Tangerang', '2023-06-01', 'Islam', 'rajeg tangerang', '08563526845', 'S1 Teknik Informatika', '2023-05-28', 'Kontrak', 'ridzal@email.com', '8528801657298', 'ridzal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('pimpinan', '90973652b88fe07d05a4304f0a945de8', 'pimpinan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
