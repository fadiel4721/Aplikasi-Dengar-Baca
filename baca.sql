-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2024 at 11:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baca`
--

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id_media` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id_media`, `image`, `audio`, `category`) VALUES
(1, 'uploads/img/65c89cd7c49513.44647342.jpeg', 'media/Ap.mp3', 'huruf'),
(2, 'img/B.jpg', 'media/Be.mp3', 'huruf'),
(3, 'img/C.jpg', 'media/Cef.mp3', 'huruf'),
(4, 'img/D.jpg', 'media/De.mp3', 'huruf'),
(5, 'img/E.jpg', 'media/Efe.mp3', 'huruf'),
(6, 'img/F.jpg', 'media/Fe.mp3', 'huruf'),
(7, 'img/G.jpg', 'media/Ge.mp3', 'huruf'),
(8, 'img/H.jpg', 'media/Ha.mp3', 'huruf'),
(9, 'img/I.jpg', 'media/Ii.mp3', 'huruf'),
(10, 'img/J.jpg', 'media/Je.mp3', 'huruf'),
(11, 'img/K.jpg', 'media/Ka.mp3', 'huruf'),
(12, 'img/L.jpg', 'media/Le.mp3', 'huruf'),
(13, 'img/M.jpg', 'media/Me.mp3', 'huruf'),
(14, 'img/N.jpg', 'media/Ne.mp3', 'huruf'),
(15, 'img/O.jpg', 'media/Op.mp3', 'huruf'),
(16, 'img/P.jpg', 'media/Pe.mp3', 'huruf'),
(17, 'img/Q.jpg', 'media/Qi.mp3', 'huruf'),
(18, 'img/R.jpg', 'media/Re.mp3', 'huruf'),
(19, 'img/S.jpg', 'media/Ss.mp3', 'huruf'),
(20, 'img/T.jpg', 'media/Te.mp3', 'huruf'),
(21, 'img/U.jpg', 'media/Uu.mp3', 'huruf'),
(22, 'img/V.jpg', 'media/Ve.mp3', 'huruf'),
(23, 'img/W.jpg', 'media/We.mp3', 'huruf'),
(24, 'img/X.jpg', 'media/Xi.mp3', 'huruf'),
(25, 'img/Y.jpg', 'media/Ye.mp3', 'huruf'),
(26, 'img/Z.jpg', 'media/Zet.mp3', 'huruf'),
(27, 'uploads/img/65c7181c0368c3.18497664.jpg', 'media/1.mp3', 'angka'),
(28, 'img/2.jpg', 'media/2.mp3', 'angka'),
(29, 'img/3.jpg', 'media/3.mp3', 'angka'),
(30, 'img/4.jpg', 'media/4.mp3', 'angka'),
(31, 'img/5.jpg', 'media/5.mp3', 'angka'),
(32, 'img/6.jpg', 'media/6.mp3', 'angka'),
(33, 'img/7.jpg', 'media/7.mp3', 'angka'),
(34, 'img/8.jpg', 'media/8.mp3', 'angka'),
(35, 'img/9.jpg', 'media/9.mp3', 'angka'),
(36, 'img/10.jpg', 'media/10.mp3', 'angka'),
(37, 'img/Anjing.jpg', 'media/Anjing.mp3', 'hewan'),
(38, 'img/Ayam.jpg', 'media/Ayam.mp3', 'hewan'),
(39, 'img/Bebek.jpg', 'media/Bebek.mp3', 'hewan'),
(40, 'img/Beruang.jpg', 'media/Beruang.mp3', 'hewan'),
(41, 'img/Buaya.jpg', 'media/Buaya.mp3', 'hewan'),
(42, 'img/Elang.jpg', 'media/Elang.mp3', 'hewan'),
(43, 'img/Gajah.jpg', 'media/Gajah.mp3', 'hewan'),
(44, 'img/Harimau.jpg', 'media/Harimau.mp3', 'hewan'),
(45, 'img/Ikan.jpg', 'media/Ikan.mp3', 'hewan'),
(46, 'img/Jerapah.jpg', 'media/Jerapah.mp3', 'hewan'),
(47, 'img/Kambing.jpg', 'media/Kambing.mp3', 'hewan'),
(48, 'img/Katak.jpg', 'media/Katak.mp3', 'hewan'),
(49, 'img/Kelinci.jpg', 'media/Kelinci.mp3', 'hewan'),
(50, 'img/Koala.jpg', 'media/Koala.mp3', 'hewan'),
(51, 'img/Kucing.jpg', 'media/Kucing.mp3', 'hewan'),
(52, 'img/Kuda.jpg', 'media/Kuda.mp3', 'hewan'),
(53, 'img/Monyet.jpg', 'media/Monyet.mp3', 'hewan'),
(54, 'img/Panda.jpg', 'media/Panda.mp3', 'hewan'),
(55, 'img/Rusa.jpg', 'media/Rusa.mp3', 'hewan'),
(56, 'img/Sapi.jpg', 'media/Sapi.mp3', 'hewan'),
(57, 'img/Serigala.jpg', 'media/Serigala.mp3', 'hewan'),
(58, 'img/Tupai.jpg', 'media/Tupai.mp3', 'hewan'),
(59, 'img/Unta.jpg', 'media/Unta.mp3', 'hewan'),
(60, 'img/Zebra.jpg', 'media/Zebra.mp3', 'hewan'),
(61, 'img/Arsitek.jpg', 'media/Arsitek.mp3', 'profesi'),
(62, 'img/Chef.jpg', 'media/Chef.mp3', 'profesi'),
(63, 'img/Dokter.jpg', 'media/Dokter.mp3', 'profesi'),
(64, 'img/Fotografer.jpg', 'media/Fotografer.mp3', 'profesi'),
(65, 'img/Guru.jpg', 'media/Guru.mp3', 'profesi'),
(66, 'img/Hakim.jpg', 'media/Hakim.mp3', 'profesi'),
(67, 'img/Montir.jpg', 'media/Montir.mp3', 'profesi'),
(68, 'img/Nahkoda.jpg', 'media/Nahkoda.mp3', 'profesi'),
(69, 'img/Pelukis.jpg', 'media/Pelukis.mp3', 'profesi'),
(70, 'img/Pemadam.jpg', 'media/Pemadam.mp3', 'profesi'),
(71, 'img/Penari.jpg', 'media/Penari.mp3', 'profesi'),
(72, 'img/Penyanyi.jpg', 'media/Penyanyi.mp3', 'profesi'),
(73, 'img/Petani.jpg', 'media/Petani.mp3', 'profesi'),
(74, 'img/Pilot.jpg', 'media/Pilot.mp3', 'profesi'),
(75, 'img/Polisi.jpg', 'media/Polisi.mp3', 'profesi'),
(76, 'img/Presiden.jpg', 'media/Presiden.mp3', 'profesi'),
(77, 'img/Tentara.jpg', 'media/Tentara.mp3', 'profesi'),
(78, 'img/Basket.jpg', 'media/Basket.mp3', 'aktivitas'),
(79, 'img/Bersepeda.jpg', 'media/Bersepeda.mp3', 'aktivitas'),
(80, 'img/Bola.jpg', 'media/Bola.mp3', 'aktivitas'),
(81, 'img/MencuciBaju.jpg', 'media/MencuciBaju.mp3', 'aktivitas'),
(82, 'img/Menulis.jpg', 'media/Menulis.mp3', 'aktivitas'),
(83, 'img/Menyapu.jpg', 'media/Menyapu.mp3', 'aktivitas'),
(84, 'img/Musik.jpg', 'media/Musik.mp3', 'aktivitas'),
(85, 'img/Olahraga.jpg', 'media/Olahraga.mp3', 'aktivitas'),
(86, 'img/Memasak.jpg', 'media/Memasak.mp3', 'aktivitas'),
(87, 'img/Memancing.jpg', 'media/Memancing.mp3', 'aktivitas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`) VALUES
(1, 'fadiel', '$2y$10$SFBcMgNnbmBxN5o/XaGC3u/faGV9JxeGizqeca4q0Ns9D.Y8z/GQu', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id_media`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
