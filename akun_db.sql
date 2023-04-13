-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2023 pada 04.47
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akun_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_user`
--

CREATE TABLE `akun_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun_user`
--

INSERT INTO `akun_user` (`id`, `user_name`, `email`, `password`, `nama`) VALUES
(3, 'aaa', 'aaa@gmail.com', 'aaa', 'aaa'),
(4, 'ccc', 'ccc@gmail.com', 'ccc', 'ccc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart_user`
--

CREATE TABLE `cart_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `nama_rempah` varchar(255) NOT NULL,
  `kuantitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rempah`
--

CREATE TABLE `rempah` (
  `id` int(11) NOT NULL,
  `nama_rempah` varchar(255) NOT NULL,
  `jenis_rempah` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rempah`
--

INSERT INTO `rempah` (`id`, `nama_rempah`, `jenis_rempah`, `stok`, `harga`, `image`) VALUES
(1, 'kapulaga', 'kering', 0, 50000, 'kapulaga.jpg'),
(2, 'cengkeh', 'kering', 0, 80000, 'cengkeh.jpg'),
(3, 'merica putih', 'kering', 0, 80000, 'merica_putih.jpg'),
(4, 'merica hitam', 'kering', 0, 80000, 'merica_hitam.jpg'),
(5, 'pala', 'kering', 0, 80000, 'pala.jpg'),
(6, 'kembang lawang(pk)', 'kering', 0, 80000, 'kembang_lawang(pk).jpg'),
(7, 'kaskas', 'kering', 0, 80000, 'kaskas.jpeg'),
(8, 'kapulaga india', 'kering', 0, 80000, 'kapulaga_india.jpeg'),
(9, 'cabai kering', 'kering', 0, 80000, 'cabai_kering.jpg'),
(10, 'kayu manis', 'kering', 0, 80000, 'kayu_manis.jpeg'),
(11, 'jahe kering', 'kering', 0, 80000, 'jahe_kering.jpg'),
(12, 'kunyit kering', 'kering', 0, 80000, 'kunyit_kering.jpeg'),
(13, 'cabai jawa', 'kering', 0, 80000, 'cabai_jawa.jpeg'),
(14, 'cabai hijau', 'basah', 0, 80000, 'cabai_hijau.jpg'),
(15, 'cabai keriting', 'basah', 0, 80000, 'cabai_keriting.jpg'),
(16, 'cabai rawit hijau', 'basah', 0, 80000, 'cabai_rawit_hijau.jpg'),
(17, 'cabai rawit merah', 'basah', 0, 80000, 'cabai_rawit_merah.jpg'),
(18, 'cabai rawit putih', 'basah', 0, 80000, 'cabai_rawit_putih.jpeg'),
(19, 'bawang putih', 'basah', 0, 80000, 'bawang_putih.jpg'),
(20, 'bawang merah', 'basah', 0, 80000, 'bawang_merah.jpg'),
(21, 'bawang bombai', 'basah', 0, 80000, 'bawang_bombai.jpg'),
(22, 'jahe', 'basah', 0, 80000, 'jahe.jpeg'),
(23, 'kunyit', 'basah', 0, 80000, 'kunyit.jpg'),
(24, 'lengkuas', 'basah', 0, 80000, 'lengkuas.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun_user`
--
ALTER TABLE `akun_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indeks untuk tabel `cart_user`
--
ALTER TABLE `cart_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indeks untuk tabel `rempah`
--
ALTER TABLE `rempah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama_rempah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun_user`
--
ALTER TABLE `akun_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `cart_user`
--
ALTER TABLE `cart_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rempah`
--
ALTER TABLE `rempah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
