-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 06:42 AM
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
-- Database: `database_penggajian`
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
('KRY0001', 'JB001', 'Hendra Bagus Setiawanto', 'Laki-Laki', 'Madiun', '2023-05-02', 'Islam', 'Jalan Nuri 1 Blok B4 No.9', '085257126513', 'S1 Teknik Informatika', '2023-05-17', 'Tetap', 'hendrabagussetiawanto25@gmail.com', '21213231232', 'hendra 3x4.jpg'),
('KRY0002', 'JB002', 'Ierdho Dharma Putra', 'Laki-Laki', 'Belitung', '2023-05-09', 'Islam', 'Jalan Nuri 1 Blok B4 No.9', '0852571262', 'S1 Teknik Informatika', '2023-05-10', 'Tetap', 'guru@guru.com', '21213231232', 'Screenshot_125.png'),
('KRY0003', 'JB003', 'Ridzal Rhamdhan', 'Laki-Laki', 'Tangerang', '2023-05-11', 'Islam', 'Pamulang', '086534876243', 'S1 Teknik Informatika', '2023-05-10', 'Tetap', 'admin@email.com', '21213231232', 'Screenshot_104.png'),
('KRY0004', 'JB003', 'Haliza Musdalifa', 'Perempuan', 'Jakarta', '2023-05-01', 'Islam', 'Jakarta Selatan', '087534678132', 'S1 Teknik Informatika', '2023-05-15', 'Tetap', 'admin@email.com', '21213231232', 'Screenshot_124.png'),
('KRY0005', 'JB002', 'Fairuz Syifa Khaerunnisa', 'Perempuan', 'Lampung', '2023-05-02', 'Islam', 'Pamulang', '086534876243', 'S1 Teknik Informatika', '2023-05-08', 'Tetap', 'admin@email.com', '4673542311', 'Screenshot_121.png'),
('KRY0006', 'JB001', 'Ismael Urzaiz Aranda', 'Laki-Laki', 'Jakarta', '2023-05-09', 'Islam', 'Pamulang', '085257126513', 'S1 Teknik Informatika', '2023-05-17', 'Tetap', 'admin@email.com', '21213231232', 'Screenshot_176.png'),
('KRY0007', 'JB001', 'Iqbal Tachtiar Rosadi', 'Perempuan', 'Jakarta', '2023-05-18', 'Islam', 'jalanin aja dulu', '0852571262', 'S1 Teknik Informatika', '2023-05-17', 'Kontrak', 'admin@email.com', '21213231232', 'WhatsApp Image 2023-05-22 at 17.20.01.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `penggajian`
--

CREATE TABLE `penggajian` (
  `id_penggajian` varchar(10) NOT NULL,
  `id_karyawan` varchar(10) NOT NULL,
  `tgl_penggajian` date NOT NULL,
  `lembur` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `total_gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penggajian`
--

INSERT INTO `penggajian` (`id_penggajian`, `id_karyawan`, `tgl_penggajian`, `lembur`, `potongan`, `total_gaji`) VALUES
('', 'KRY0001', '2023-05-09', 60000, 0, 5560000),
('PG00002', 'KRY0002', '2023-05-09', 75000, 25000, 4550000),
('PG00003', 'KRY0004', '2023-05-09', 75000, 0, 5075000),
('PG00004', 'KRY0003', '2023-05-09', 75000, 25000, 5050000),
('PG00005', 'KRY0006', '2023-05-16', 75000, 25000, 5550000);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`) VALUES
('hendra', 'a04cca766a885687e33bc6b114230ee9');

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
-- Indexes for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`id_penggajian`),
  ADD KEY `id_karyawan` (`id_karyawan`);

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

--
-- Constraints for table `penggajian`
--
ALTER TABLE `penggajian`
  ADD CONSTRAINT `penggajian_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
