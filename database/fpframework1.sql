-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 09:32 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fpframework1`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `anggota_id` int(11) NOT NULL,
  `ukm_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_anggota` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `npm` varchar(40) NOT NULL,
  `fakultas` varchar(40) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`anggota_id`, `ukm_id`, `username`, `password`, `nama_anggota`, `email`, `npm`, `fakultas`, `image`, `level`) VALUES
(1, 0, 'superadmin@gmail.com', '889a3a791b3875cfae413574b53da4bb8a90d53e', 'superadmin', 'superadmin@gmail.com', '1', 'superadmin', '', 1),
(2, 4, 'rayrahadii', '8cb2237d0679ca88db6464eac60da96345513964', 'Nyoman Rahadi Sasmita', 'rahadisasmita@gmail.com', '17081010086', 'FIK', 'ktm-200228-f48db1f35d.jpg', 2),
(3, 4, 'naufal13', 'c61faacbcfb290c6a0c8615becda4eb973868313', 'Naufal Mumtaz', 'naufal@gmail.com', '17081010105', 'FIK', '', 3),
(10, 4, 'aliev', '909cc24fe69e624f714546ce56269b8c5c44283b', 'aliev wisnu purnomo', 'aliev@gmail.com', '17081010093', 'FIK', '', 3),
(12, 5, 'mifaabiyu', '8ba3600566ae2417a7622b7491f816b722d1d9e2', 'Mifa Abiyu', 'Mifa@gmail.com', '17081010090', 'Teknik Kimia', '', 3),
(13, 5, 'dandos', '6cc751f8ce230e55a452f6a0b0fb0f2df040a4d6', 'Dandy Noor', 'dandos@gmail.com', '17081010102', 'Teknik Kimia', '', 2),
(14, 5, 'rayrahadd', '488d53a74508dfd339004eb64ac50ae80e6248af', 'Ray Rahadii', 'rayrahad@gmail.com', '17081010089', 'Fisip', 'ktm-200228-9639427a3d.jpg', 3),
(21, 4, 'rayrahadi1', '8cb2237d0679ca88db6464eac60da96345513964', 'Rahadi Sasmita ', 'rayrahadi@gmail.com', '170810100866', 'Teknik Kimia', 'ktm-200525-c909b236d9.jpg', 3),
(22, 11, 'rahad', '8cb2237d0679ca88db6464eac60da96345513964', 'rayrahad', 'rahad@gmail.com', '21141414115', 'Teknik', 'ktm-200528-5c6bee3c48.jpg', 3),
(32, 13, 'rahadiketua', '8cb2237d0679ca88db6464eac60da96345513964', 'rahadi ketua', 'rahadi@gmail.com', '17081010087', 'FAD', 'ktm-200601-0f588993b3.jpg', 2),
(33, 13, 'rahadianggota', '8cb2237d0679ca88db6464eac60da96345513964', 'rahadi anggota', 'rahadianggota@gmail.com', '170810129', 'FIK', 'ktm-200601-7bb85fbcf9.jpg', 3),
(35, 13, 'sasmita', '8cb2237d0679ca88db6464eac60da96345513964', 'sasmita s', 'sasmita@gmail.com', '17812903201', 'FISIP', 'ktm-200601-3a134e22a7.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(11) NOT NULL,
  `ukm_id` int(11) NOT NULL,
  `anggota_id` int(11) NOT NULL,
  `judul_artikel` varchar(128) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `penulis_artikel` varchar(40) NOT NULL,
  `isi_artikel` varchar(512) NOT NULL,
  `image_artikel` varchar(100) DEFAULT NULL,
  `tanggal_dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `ukm_id`, `anggota_id`, `judul_artikel`, `keterangan`, `penulis_artikel`, `isi_artikel`, `image_artikel`, `tanggal_dibuat`) VALUES
(5, 4, 2, 'Judul Artikel 1', 'Keterangan Artikel 1', 'Penulis Artikel 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ullamcorper arcu, ac vehicula felis. Sed maximus sem quam, ac posuere tortor consequat quis. Curabitur ac metus ultrices mi mollis egestas. Mauris et orci in felis aliquam gravida a sit amet ante. Fusce hendrerit ligula ac neque finibus luctus. Mauris vel sagittis ex. Suspendisse dictum vehicula condimentum. Nulla convallis, mauris congue pulvinar sodales, neque arcu interdum eros, ut vulputate justo turpis vitae erat. Suspendisse vestibulum', 'artikel-200229-9da9411088.jpg', '2020-02-29 18:42:44'),
(6, 4, 2, 'Judul Artikel 2', 'Keterangan Artikel 2', 'Penulis Artikel 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ullamcorper arcu, ac vehicula felis. Sed maximus sem quam, ac posuere tortor consequat quis. Curabitur ac metus ultrices mi mollis egestas. Mauris et orci in felis aliquam gravida a sit amet ante. Fusce hendrerit ligula ac neque finibus luctus. Mauris vel sagittis ex. Suspendisse dictum vehicula condimentum. Nulla convallis, mauris congue pulvinar sodales, neque arcu interdum eros, ut vulputate justo turpis vitae erat. Suspendisse vestibulum', 'artikel-200229-d7658c2a63.jpg', '2020-02-29 18:43:17'),
(7, 4, 2, 'Judul Disini 3', 'Keterangan Artikel 3', 'Penulis Artikel 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ullamcorper arcu, ac vehicula felis. Sed maximus sem quam, ac posuere tortor consequat quis. Curabitur ac metus ultrices mi mollis egestas. Mauris et orci in felis aliquam gravida a sit amet ante. Fusce hendrerit ligula ac neque finibus luctus. Mauris vel sagittis ex. Suspendisse dictum vehicula condimentum. Nulla convallis, mauris congue pulvinar sodales, neque arcu interdum eros, ut vulputate justo turpis vitae erat.3', 'artikel-200229-27de01b880.jpg', '2020-02-29 18:43:47'),
(8, 0, 0, 'Judul Disini 4', 'Keterangan Artikel 4', 'Penulis Artikel 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a ullamcorper arcu, ac vehicula felis. Sed maximus sem quam, ac posuere tortor consequat quis. Curabitur ac metus ultrices mi mollis egestas. Mauris et orci in felis aliquam gravida a sit amet ante. Fusce hendrerit ligula ac neque finibus luctus. Mauris vel sagittis ex. Suspendisse dictum vehicula condimentum. Nulla convallis, mauris congue pulvinar sodales, neque arcu interdum eros, ut vulputate justo turpis vitae erat.', 'artikel-200229-4d289a1c2f.jpg', '2020-02-29 18:44:09'),
(10, 0, 0, 'Contoh Judul Kegiatan 1', 'Contoh Keterangan 1', 'Test Penulis 1', 'Isi Conton Judul Kegiatan 1', 'artikel-200505-c53fbd0be5.jpg', '2020-05-05 10:02:35'),
(13, 4, 2, 'basket', 'basket', 'admin basket', 'jwaijiowaijoawiojaw', 'artikel-200525-53ccd8f857.jpg', '2020-05-25 14:55:09'),
(14, 5, 0, 'musik', 'musik', 'admin musik', 'okwaokawokwaokaw', 'artikel-200525-2844753719.png', '2020-05-25 14:57:39'),
(15, 4, 2, 'latihan rutin', 'ukm basket', 'rayrahadii', 'awokwaoawkoawok', 'artikel-200525-497777ffa1.jpg', '2020-05-25 15:19:37'),
(17, 5, 13, 'UKM Musik', 'Ukm Musik', 'Dandy Noor', 'jkjijihuigyuf', 'artikel-200525-215b9e8928.jpg', '2020-05-25 17:49:26'),
(18, 4, 21, 'Rayrahadi1', 'test artikel 1', 'Rahadi Sasmita ', 'isi artikel', 'artikel-200528-3a5a4ba69b.jpg', '2020-05-28 21:30:37'),
(19, 0, 1, 'artikel superadmin', 'keterangan artikel superadmin', 'superadmin', 'isi artikel superadmin', 'artikel-200531-56fa4ae642.png', '2020-05-31 23:33:27'),
(20, 0, 1, 'Superadmin 1', 'keterangan artikel superadmin 1', 'superadmin', 'isi artikel keterangan superadmin 1', 'artikel-200531-b880bccef2.png', '2020-05-31 23:58:04'),
(22, 13, 32, 'judul rahadi ketua 1', 'keterangan rahadi ketua', 'rahadi ketua', 'isi artikel rahadi ketua', 'artikel-200601-e51c6b9b68.png', '2020-06-01 00:25:43'),
(23, 13, 33, 'judul rahadi anggota', 'keterangan rahadi anggota', 'rahadi anggota', 'isi artikel rahadi anggota', 'artikel-200601-694f55d064.png', '2020-06-01 00:27:32');

-- --------------------------------------------------------

--
-- Table structure for table `ukm`
--

CREATE TABLE `ukm` (
  `ukm_id` int(11) NOT NULL,
  `nama_ukm` varchar(40) NOT NULL,
  `ketua_ukm` varchar(40) NOT NULL,
  `status_ukm` varchar(40) NOT NULL,
  `keterangan_ukm` varchar(512) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `image_ukm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukm`
--

INSERT INTO `ukm` (`ukm_id`, `nama_ukm`, `ketua_ukm`, `status_ukm`, `keterangan_ukm`, `jenis`, `image_ukm`) VALUES
(4, 'Basket', 'Ketua UKM Basket', 'Aktif', 'Keterangan UKM basket', 'UKM', 'ukm-200229-d1006745bd.jpg'),
(5, 'Musik', 'Ketua UKM Musik', 'Aktif', 'Keterangan UKM Musik', 'UKM', 'ukm-200229-7c37574622.png'),
(8, 'Informatic Learning Community', 'Afrizal Yasin', 'Aktif', 'Keterangan Komunitas ILC', 'Komunitas', 'ukm-200229-f1922a56cd.jpg'),
(9, 'Futsal', 'Ketua UKM Futsal', 'Aktif', 'UKM FUTSAL UPNVJT', 'UKM', 'ukm-200525-5bd9973df0.jpeg'),
(10, 'Komunitas Linux UPN ', 'Fathur Rohman', 'Aktif', 'Komunitas dari Fakultas Ilmu Komputer', 'Komunitas', 'ukm-200525-9596340523.jpg'),
(11, 'Pramuka', 'ketua ukm pramuka', 'Aktif', 'ukm pramuka upn veteran jatim', 'UKM', 'ukm-200528-265355a83e.png'),
(13, 'Football', 'naufal', 'Aktif', 'keterangan ukm football', 'UKM', 'ukm-200531-18f9c78d1f.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`anggota_id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `ukm`
--
ALTER TABLE `ukm`
  ADD PRIMARY KEY (`ukm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `anggota_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ukm`
--
ALTER TABLE `ukm`
  MODIFY `ukm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
