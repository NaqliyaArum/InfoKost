-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 07:13 AM
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
-- Database: `my_kost`
--

-- --------------------------------------------------------

--
-- Table structure for table `datakost`
--

CREATE TABLE `datakost` (
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
  `dk_input` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datakost`
--

INSERT INTO `datakost` (`jk_input`, `name_input`, `loc_input`, `fk_input`, `Luas_input`, `mnd_input`, `fp_input`, `al_input`, `dpk_input`, `kbs_input`, `kl_input`, `kb_input`, `dk_input`) VALUES
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', ''),
('Campur', 'sca kost', 'gpa', 'Lemari Pakaian', '15', 'Shower', 'Sepeda', 'Apotek/Klinik', 'Motor', 'mingguan 20k', '-', 'blm termasuk listrik dan air', 'aman');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `First` varchar(20) NOT NULL,
  `Last` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Handphone` int(11) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`First`, `Last`, `gender`, `Alamat`, `Handphone`, `Password`) VALUES
('a', 'b', 'm', 'a', 12, '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
