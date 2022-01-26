-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 10:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbabsensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_absensi`
--

CREATE TABLE `tabel_absensi` (
  `nis` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_absensi`
--

INSERT INTO `tabel_absensi` (`nis`, `nama`, `kelas`, `status`, `id`) VALUES
(18220473, 'Dewi Sinta Saputri', '6', '', 5),
(18220596, 'Intan Agustina', '5', 'alfa', 6),
(18220496, 'Sinta Saputri', '3', 'sakit', 7),
(18220456, 'Umairoh', '1', 'hadir', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_absensi2`
--

CREATE TABLE `tabel_absensi2` (
  `id_absensi` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `id_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `nis` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` int(5) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`nis`, `nama`, `kelas`, `tgl_lahir`, `alamat`, `id`) VALUES
(18220473, 'Dewi Sinta Saputri', 1, '2021-12-29', 'Ujung Padang', 2),
(18220675, 'Intan Agustina', 1, '2021-12-26', 'Rapuan Ilir', 21),
(18220496, 'Sinta Ramayani', 1, '2021-12-26', 'Kisaran', 22),
(18220457, 'Umairoh', 2, '2021-12-29', 'Simpang Empat', 23),
(18228759, 'Ajengkelin', 5, '2021-12-26', 'Kisaran', 24),
(18220488, 'Srinur Ainun Siahaan', 1, '2021-12-26', 'Simpang Empat', 25),
(18220467, 'Khairunnisa', 6, '2021-06-09', 'Tanjung Balai', 29),
(10220423, 'Ayu Rizki', 4, '2021-12-26', 'Lima Puluh', 30),
(18220487, 'Lili Nurlia', 3, '2021-12-29', 'Lima Puluh', 31);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_status`
--

CREATE TABLE `tabel_status` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_status`
--

INSERT INTO `tabel_status` (`id`, `status`) VALUES
(1, 'Alfa'),
(2, 'Izin'),
(3, 'Sakit'),
(4, 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'devk@gmail.com', 'Developer Kampoeng', 1, 'Staff SDN 091641 Bandar Tinggi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_absensi`
--
ALTER TABLE `tabel_absensi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `tabel_absensi2`
--
ALTER TABLE `tabel_absensi2`
  ADD PRIMARY KEY (`id_absensi`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `tabel_status`
--
ALTER TABLE `tabel_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_absensi`
--
ALTER TABLE `tabel_absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tabel_absensi2`
--
ALTER TABLE `tabel_absensi2`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
