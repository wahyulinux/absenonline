-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2019 at 11:48 AM
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
  `kehadiran` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kehadiran`
--

INSERT INTO `tbl_kehadiran` (`id_validasi`, `UID`, `pertemuan`, `kehadiran`) VALUES
(46, '12345678', '1', 4),
(47, '9shdhs', '1', 2),
(48, '12345678', '2', 1),
(49, '9shdhs', '2', 4),
(50, '12345678', '3', 3),
(51, '9shdhs', '3', 1),
(52, '12345678', '4', 3),
(53, '9shdhs', '4', 2),
(54, '12345678', '5', 2),
(55, '9shdhs', '5', 4),
(56, '12345678', '6', 3),
(57, '9shdhs', '6', 4),
(58, '12345678', '5', 1),
(59, '9shdhs', '5', 1),
(60, '12345678', '7', 1),
(61, '9shdhs', '7', 1);

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
-- Table structure for table `tbl_pertemuan`
--

CREATE TABLE `tbl_pertemuan` (
  `id_pertemuan` int(4) NOT NULL,
  `pertemuan` int(2) NOT NULL,
  `judul_pertemuan` text NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jam` varchar(11) NOT NULL,
  `tgl_validasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pertemuan`
--

INSERT INTO `tbl_pertemuan` (`id_pertemuan`, `pertemuan`, `judul_pertemuan`, `kelas`, `jam`, `tgl_validasi`) VALUES
(20, 1, 'Membahas Cinta', '6ska1', '08:00-09:30', '2019-04-30 10:06:12'),
(21, 2, 'Semangat Bekarya', '6ska1', '09:30-11:00', '2019-04-30 10:06:12'),
(22, 3, 'Memahami Cinta', '6ska1', '11:30-12:30', '2019-04-30 10:06:12'),
(23, 4, 'Berkarya Bersama Hati', '6ska1', '09:30-11:00', '2019-04-30 10:06:12'),
(24, 6, 'kimak mulah', '6ska1', '09:30-11:00', '0000-00-00 00:00:00'),
(25, 5, 'ygygyg', '6ska1', '', '0000-00-00 00:00:00'),
(26, 7, 'amang', '6ska1', '08:00-09:30', '0000-00-00 00:00:00');

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
(2, 'dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 'dosen', 'Halfa'),
(5, 'subur', 'ce9689abdeab50b5bee3b56c7aadee27', 'dosen', 'Subur Jaya');

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
  MODIFY `id_validasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

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
-- AUTO_INCREMENT for table `tbl_pertemuan`
--
ALTER TABLE `tbl_pertemuan`
  MODIFY `id_pertemuan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
