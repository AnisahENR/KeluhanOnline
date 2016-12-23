-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2016 at 01:26 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keluhan_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` int(11) NOT NULL,
  `username` text NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`id_keluhan`, `username`, `keluhan`) VALUES
(3, 'opal', 'halo'),
(4, 'oo', 'opo'),
(6, 'aa', 'opo'),
(7, 'aa', 'opo'),
(8, 'aa', 'opo'),
(9, 'aa', 'opo'),
(10, 'aa', 'opo'),
(11, 'aa', 'opo'),
(12, 'dell', 'haaaai'),
(13, 'dell', 'haaaai'),
(14, 'dell', 'haaaai'),
(15, 'tuti', 'opo neee'),
(16, 'tata', 'hai rek'),
(17, 'aa', 'kudakuda'),
(18, 'bb', 'tuyuu'),
(19, 'koko', 'kuli'),
(20, 'koa', 'oo'),
(21, 'koa', 'oo'),
(22, 'tt', 'teteggg'),
(23, 'tt', 'teteggg'),
(24, 'tt', 'teteggg'),
(25, 'tt', 'teteggg'),
(26, 'tt', 'teteggg'),
(27, 'tt', 'teteggg'),
(28, 'qwe', 'erg'),
(29, 'qwe', 'erg'),
(30, 'popo', 'popo'),
(31, 'deeee', 'ooo12'),
(32, 'denis', 'oke'),
(33, 'denis', 'oke'),
(34, 'denis', 'hei');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notif` int(10) NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id_notif`, `nama_pengirim`, `nama_penerima`, `pesan`, `tgl`) VALUES
(1, '<div ', '<div ', 'boleh', '2016-12-23 00:22:45'),
(2, 'admin', 'opal', 'denis', '2016-12-23 00:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `name`, `email`, `password`, `level`) VALUES
(2, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1'),
(4, 'aa', 'aa', 'aa@gmail.com', '4124bc0a9335c27f086f24ba207a4912', '0'),
(5, 'bb', 'bb', 'bb@gmail.com', '21ad0bd836b90d08f4cf640b4c298e7c', '0'),
(6, 'cc', 'cc', 'cc@gmail.com', 'e0323a9039add2978bf5b49550572c7c', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notif` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
