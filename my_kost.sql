-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 08:06 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newkost`
--

-- --------------------------------------------------------

--
-- Table structure for table `datakost`
--

CREATE TABLE `datakost` (
  `id_kost` int(5) NOT NULL,
  `jk_input` char(20) NOT NULL,
  `name_input` varchar(40) NOT NULL,
  `loc_input` varchar(40) NOT NULL,
  `fk_input` char(20) NOT NULL,
  `Luas_input` varchar(20) NOT NULL,
  `mnd_input` char(20) NOT NULL,
  `fp_input` char(20) NOT NULL,
  `al_input` char(20) NOT NULL,
  `dpk_input` char(20) NOT NULL,
  `kbs_input` varchar(200) NOT NULL,
  `kl_input` varchar(200) NOT NULL,
  `kb_input` varchar(200) NOT NULL,
  `dk_input` varchar(200) NOT NULL,
  `nohp_input` varchar(17) NOT NULL,
  `image_kost` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `First` varchar(20) NOT NULL,
  `Last` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Handphone` varchar(15) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `First`, `Last`, `gender`, `Alamat`, `Handphone`, `Password`) VALUES
(1, 'first', 'last', 'm', 'alamat', '0', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datakost`
--
ALTER TABLE `datakost`
  ADD PRIMARY KEY (`id_kost`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);
  
ALTER TABLE `user` 
  ADD UNIQUE(`Handphone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datakost`
--
ALTER TABLE `datakost`
  MODIFY `id_kost` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
