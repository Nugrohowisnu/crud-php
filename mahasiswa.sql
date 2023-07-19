-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2023 pada 14.20
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nim` varchar(12) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(22) NOT NULL,
  `alamat` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jurusan`, `jenis_kelamin`, `alamat`) VALUES
(1, 'Nugroho Wisnu Murti ', '2020804160', 'Sistem Informasi', 'Laki-laki', 'kp kadu'),
(2, 'wisnu', '2020804160', 'Teknik Informatika', 'Laki-laki', 'err3r2'),
(3, 'Murti kumoro', '2020804160', 'Manajemen Informatika', 'Laki-laki', 'hjtjkytoko5'),
(13, 'astjhhu', '2020804160', 'Teknik Informatika', 'Laki-laki', 'gfgfghjkhftrgj'),
(14, 'hdhbdhbejnje', '834678364738', 'Manajemen Informatika', 'Perempuan', 'rr4f4afwq3wqddfefee'),
(15, 'Murti kumoro', '834678364738', 'Teknik Informatika', 'Laki-laki', 'efwfergergrg'),
(16, 'astjhhu', '834678364738', 'Sistem Informasi', 'Perempuan', 'efeffgegrge'),
(17, 'ahmad', '64687876646', 'Sistem Informasi', 'Laki-laki', 'gfghgyhkcbgfh'),
(18, 'hdhbdhbejnje', '2020804160', 'Sistem Informasi', 'Perempuan', 'rtryttututututu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
