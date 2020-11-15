-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 11:16 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul3_nida`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_tabel`
--

CREATE TABLE `event_tabel` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `mulai` time NOT NULL,
  `berakhir` time NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `benefit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_tabel`
--

INSERT INTO `event_tabel` (`id`, `name`, `deskripsi`, `gambar`, `kategori`, `tanggal`, `mulai`, `berakhir`, `tempat`, `harga`, `benefit`) VALUES
(21, 'Nobar', 'Nonton Bareng', '1127196758_Netflix-main.png', 'Online', '2020-11-11', '17:05:00', '19:04:00', 'Rumah', 0, 'sertifikat'),
(22, 'Rewarding', 'Memilih anggota yang memiliki kinerja baik', '1085246185_1024px-Approve_icon.svg.png', 'Offline', '2020-11-12', '18:15:00', '21:15:00', 'Telkom University', 0, 'snack,sertifikat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_tabel`
--
ALTER TABLE `event_tabel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_tabel`
--
ALTER TABLE `event_tabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
