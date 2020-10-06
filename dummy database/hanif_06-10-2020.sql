-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 07:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hanif_06-10-2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `kabupaten_id` int(11) UNSIGNED NOT NULL,
  `kabupaten_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`kabupaten_id`, `kabupaten_name`) VALUES
(1, 'Kota Bandung'),
(2, 'Kota Cimahi'),
(3, 'Kab. Bandung Barat');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kecamatan_id` int(11) UNSIGNED NOT NULL,
  `kecamatan_name` varchar(100) NOT NULL,
  `kecamatan_kabupaten_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kecamatan_id`, `kecamatan_name`, `kecamatan_kabupaten_id`) VALUES
(1, 'Bandung Timur', 1),
(2, 'Cimahi Utara', 2),
(3, 'Padalarang', 3),
(4, 'Cimahi Tengah', 2),
(5, 'Antapani', 1),
(6, 'Lembang', 3),
(7, 'Cimahi Selatan', 2),
(8, 'Batujajar', 3);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(7, '2020-10-06-025013', 'App\\Database\\Migrations\\Kabupaten', 'default', 'App', 1601961610, 1),
(8, '2020-10-06-034231', 'App\\Database\\Migrations\\Kecamatan', 'default', 'App', 1601961610, 1),
(9, '2020-10-06-051523', 'App\\Database\\Migrations\\Siswa', 'default', 'App', 1601961611, 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` int(11) UNSIGNED NOT NULL,
  `siswa_name` varchar(100) NOT NULL,
  `siswa_alamat` text NOT NULL,
  `siswa_kecamatan_id` int(100) NOT NULL,
  `siswa_kabupaten_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`siswa_id`, `siswa_name`, `siswa_alamat`, `siswa_kecamatan_id`, `siswa_kabupaten_id`) VALUES
(1, 'Agus', 'Alamat Siswa', 1, 1),
(2, 'Budi', 'Alamat Siswa', 2, 2),
(3, 'Nana', 'Alamat Siswa', 3, 3),
(4, 'Bambang', 'Alamat Siswa', 3, 3),
(5, 'Fitri', 'Alamat Siswa', 4, 2),
(6, 'Bagus', 'Alamat Siswa', 5, 1),
(7, 'Hartoko', 'Alamat Siswa', 5, 1),
(8, 'Dadan', 'Alamat Siswa', 6, 3),
(9, 'Ceceng', 'Alamat Siswa', 7, 2),
(10, 'Ilham', 'Alamat Siswa', 1, 1),
(11, 'Iqbal', 'Alamat Siswa', 8, 3),
(12, 'Adi', 'Alamat Siswa', 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`kabupaten_id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kecamatan_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `kabupaten_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `kecamatan_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `siswa_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
