-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 08:39 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_erg`
--

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `id` varchar(100) NOT NULL,
  `topic` text NOT NULL,
  `description` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `year` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`id`, `topic`, `description`, `date`, `year`) VALUES
('5d747dbb5329c', 'Juara 3 KOMBAT (Kompetisi Balon Atmosfer) - Lapan & Kemenristek, Dikti', '-', '01/01/2014', '2014'),
('5d747dce2b041', 'Juara 2 EDC(Electronic Desain Contest) - IEEE SSCS', '-', '01/01/2014', '2014'),
('5d747de53e93f', 'Pemenang Telemetri Terbaik KOMBAT(Kompetisi Balon Atmosfer) - Lapan & Kemenristek, Dikti', '-', '05/01/2014', '2014'),
('5d747dfdddaa9', 'Finalis Nasional KOMURINDO(Kompetisi Muatan Roket)', '-', '01/01/2015', '2015'),
('5d747e0f31c62', 'Juara 3 KOMBAT(Kompetisi Balon Atmosfer) - Lapan & Kemenristek, Dikti', '-', '17/02/2015', '2015'),
('5d747e1d2fc16', 'Juara 3 INAICTA kategori Tourism and Hospotal', '-', '23/07/2015', '2015'),
('5d747e2aa3baf', 'Juara 1 EDC(Electronic Desain Contest) - IEEE SSCS', '-', '24/07/2015', '2015'),
('5d747e40c5c55', 'Finalis Nasional KOMBAT(Kompetisi Balon Atmosfer)', '-', '10/02/2016', '2016'),
('5d747e515b9f3', 'Juara 4 Nasional KOMURINDO(Kompetisi Muatan Roket)', '-', '29/07/2016', '2016'),
('5d747e81356fe', 'Juara 3, EDC (Electronic Desain Contest) - IEEE SSCS', '-', '25/08/2016', '2016'),
('5d747e90e962b', 'Finalis Nasional Gemastik', '-', '25/11/2016', '2016'),
('5d747f57c6c94', 'Finalis Nasional Imagine Cup', '-', '16/03/2017', '2017'),
('5d7480b0355fe', 'Juara Harapan 1, KOMURINDO(Kompetisi Muatan Roket)', '-', '25/07/2017', '2017'),
('5d7480bbbb05d', 'Juara Harapan 1, KOMBAT(Kompetisi Balon Atmosfer)', '-', '19/07/2017', '2017'),
('5d7480c80131e', 'Juara Poster Terbaik, KOMBAT(Kompetisi Balon Atmosfer)', '-', '25/07/2017', '2017'),
('5d7480d42d5d0', 'Juara Ide Terbaik, KOMURINDO(Kompetisi Muatan Roket)', '-', '31/08/2017', '2017'),
('5d7480df7a618', 'Juara 1, Kompetisi Internet of Things(IoT) - IMPLUSE IoT HME ITB', '-', '05/09/2017', '2017'),
('5d7480eb61dce', 'Juara 2, EDC(Electronic Desain Contest) - IEEE SSCS', '-', '13/07/2017', '2017'),
('5d7480ff747a2', 'Juara 3, EDC(Electronic Desain Contest) - IEEE SSCS', '-', '23/08/2017', '2017'),
('5d74810b4680f', 'Finalis Nasional Imagine Cup', '-', '22/08/2018', '2018'),
('5d74811848271', 'Finalis Hackton Jasaraharja', '-', '22/08/2018', '2018'),
('5d7481245670f', 'Juara 1 Nasional Poster Terbaik, KOMURINDO(Kompetisi Muatan Roket)', '-', '22/08/2018', '2018'),
('5d7481322a4f7', 'Juara 1 Nasional TBIG CreatiON', '-', '20/03/2018', '2018');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
