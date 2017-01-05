-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2017 at 03:02 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webakademis_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID_DOSEN` varchar(4) NOT NULL,
  `USERNAME` varchar(10) NOT NULL,
  `PASSWORD_ADMIN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_DOSEN`, `USERNAME`, `PASSWORD_ADMIN`) VALUES
('D001', 'admin', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `ID_JADWAL` bigint(20) NOT NULL,
  `ID_MATKUL` char(6) DEFAULT NULL,
  `ID_RUANGAN` char(4) DEFAULT NULL,
  `HARI` varchar(7) NOT NULL,
  `JAM` varchar(20) NOT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`ID_JADWAL`, `ID_MATKUL`, `ID_RUANGAN`, `HARI`, `JAM`, `STATUS`) VALUES
(1, 'MK4005', 'R001', 'senin', '09:50-11:30', 'Teori'),
(2, 'MK4001', 'R001', 'senin', '07:50-09:30', 'Praktek'),
(3, 'MK4009', 'R002', 'selasa', '09:50-11:30', 'Teori'),
(4, 'MK4006', 'R003', 'rabu', '09:50-11:30', 'Teori'),
(5, 'MK4001', 'R004', 'Selasa', '07:50-09:30', 'Praktek'),
(6, 'MK4004', 'R003', 'Rabu', '09:50-11:30', 'Praktek'),
(7, 'MK4008', 'R003', 'Rabu', '09:50-11:30', 'Praktek'),
(8, 'MK4011', 'R007', 'Kamis', '14:50-16:30', 'Praktek');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah` (
  `ID_MATKUL` char(6) NOT NULL,
  `NAMA_MATKUL` varchar(30) NOT NULL,
  `SKS_MATKUL` int(11) NOT NULL,
  `SEMESTER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`ID_MATKUL`, `NAMA_MATKUL`, `SKS_MATKUL`, `SEMESTER`) VALUES
('MK4001', 'Dasar Pemograman', 4, 1),
('MK4002', 'B.Indonesia', 3, 1),
('MK4003', 'B.Inggris I', 2, 1),
('MK4004', 'Ilmu Komputer', 3, 1),
('MK4005', 'Kognitif Komputasi', 2, 1),
('MK4006', 'Konsep Teknologi', 2, 1),
('MK4007', 'Matematika Diskrit I', 3, 1),
('MK4008', 'Kalkulus', 3, 2),
('MK4009', 'Aljabar Linear', 3, 2),
('MK4010', 'B.Inggris 2', 2, 2),
('MK4011', 'Komunikasi Teknik', 2, 2),
('MK4013', 'Pemrograman Lanjut', 3, 2),
('MK4014', 'Struktur Data Algoritma', 4, 2),
('MK4015', 'Database', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
  `ID_RUANGAN` char(4) NOT NULL,
  `NAMA_RUANGAN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`ID_RUANGAN`, `NAMA_RUANGAN`) VALUES
('R001', 'A101'),
('R002', 'A102'),
('R003', 'A103'),
('R004', 'A104'),
('R005', 'A105'),
('R006', 'L101'),
('R007', 'L102'),
('R008', 'L103'),
('R009', 'A201'),
('R010', 'A202'),
('R011', 'A206');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_DOSEN`,`USERNAME`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`ID_JADWAL`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_MATKUL`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_RUANGAN`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`ID_MATKUL`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`ID_RUANGAN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `ID_JADWAL` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
