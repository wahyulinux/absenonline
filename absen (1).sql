-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2019 at 09:05 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kehadiran`
--

CREATE TABLE `tbl_kehadiran` (
  `id_validasi` int(11) NOT NULL,
  `UID` varchar(40) NOT NULL,
  `pertemuan` varchar(1) NOT NULL,
  `matkul` int(5) NOT NULL,
  `kehadiran` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kehadiran`
--

INSERT INTO `tbl_kehadiran` (`id_validasi`, `UID`, `pertemuan`, `matkul`, `kehadiran`) VALUES
(70, '12345678', '2', 1, 1),
(71, '9shdhs', '2', 1, 1),
(72, '12345678', '1', 1, 4),
(73, '9shdhs', '1', 1, 3),
(74, '12345678', '1', 4, 2),
(75, '9shdhs', '1', 4, 1),
(76, '12345678', '2', 4, 4),
(77, '9shdhs', '2', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log`
--

CREATE TABLE `tbl_log` (
  `id_log` int(4) NOT NULL,
  `UID` varchar(40) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id` int(4) NOT NULL,
  `UID` varchar(40) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id`, `UID`, `nim`, `nama`, `kelas`) VALUES
(1, '12345678', 2016030073, 'Wahyu Abdillah', '6SKA1'),
(16, 'erffffsg221', 2018040075, 'Subur Makmur', '5SKA1'),
(19, '9shdhs', 2017030078, 'Ucok Makmur', '6SKA1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matkul`
--

CREATE TABLE `tbl_matkul` (
  `id_matkul` int(5) NOT NULL,
  `kode_matkul` varchar(10) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `nama_matkul` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_matkul`
--

INSERT INTO `tbl_matkul` (`id_matkul`, `kode_matkul`, `kelas`, `nama_matkul`, `id_user`) VALUES
(1, 'PSD', '6ska1', 'Pengolahan SInyal Digital', 5),
(2, 'PSMS', '6ska1', 'Persatuan Sholat Magrib Saja', 5),
(3, 'NI', '5ska1', 'Network Insfrastructure', 6),
(4, 'ADMSV', '6ska1', 'Administrasi Server', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pertemuan`
--

CREATE TABLE `tbl_pertemuan` (
  `id_pertemuan` int(4) NOT NULL,
  `pertemuan` int(2) NOT NULL,
  `judul_pertemuan` text NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jam` varchar(11) NOT NULL,
  `tgl_validasi` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `matkul` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pertemuan`
--

INSERT INTO `tbl_pertemuan` (`id_pertemuan`, `pertemuan`, `judul_pertemuan`, `kelas`, `jam`, `tgl_validasi`, `matkul`) VALUES
(31, 2, 'Membahas Cinta', '6ska1', '08:00-09:30', '2019-05-12 23:05:49', 1),
(32, 1, 'Semangat Bekarya', '6ska1', '08:00-09:30', '2019-05-12 23:06:16', 1),
(33, 1, 'Pengenalan Open Stack', '6ska1', '08:00-09:30', '2019-05-12 23:39:50', 4),
(34, 2, 'Menginstalasi Open Stack', '6ska1', '08:00-09:30', '2019-05-12 23:41:38', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` enum('admin','dosen','','') NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `level`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Subur Jaya'),
(5, 'subur', 'ce9689abdeab50b5bee3b56c7aadee27', 'dosen', 'Subur Jaya'),
(6, 'dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 'dosen', 'Dosen Killer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kehadiran`
--
ALTER TABLE `tbl_kehadiran`
  ADD PRIMARY KEY (`id_validasi`);

--
-- Indexes for table `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`id_log`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- Indexes for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `tbl_pertemuan`
--
ALTER TABLE `tbl_pertemuan`
  ADD PRIMARY KEY (`id_pertemuan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kehadiran`
--
ALTER TABLE `tbl_kehadiran`
  MODIFY `id_validasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `id_log` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  MODIFY `id_matkul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pertemuan`
--
ALTER TABLE `tbl_pertemuan`
  MODIFY `id_pertemuan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD CONSTRAINT `tbl_log_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `tbl_mahasiswa` (`UID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
