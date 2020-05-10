-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2020 pada 05.15
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugaslogin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactus`
--

CREATE TABLE `contactus` (
  `id` int(4) NOT NULL,
  `fullname` varchar(1000) NOT NULL,
  `email` longtext NOT NULL,
  `phone` longtext NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contactus`
--

INSERT INTO `contactus` (`id`, `fullname`, `email`, `phone`, `message`) VALUES
(1, '', '', '', ''),
(2, '1234', 'email@gmail.com', '03030201943121', 'apakah anda berhasil??'),
(3, '1234', 'email@gmail.com', '03030201943121', 'apakah anda berhasil??'),
(4, '1234', 'email@gmail.com', '03030201943121', 'apakah anda berhasil??'),
(5, '1234', 'email@gmail.com', '03030201943121', 'apakah anda berhasil??'),
(22, '', '', '', ''),
(23, '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `record`
--

INSERT INTO `record` (`id`, `username`, `password`) VALUES
(1, 'ww', 'ww'),
(2, 'ww', 'ww'),
(3, 'ww', 'ww'),
(4, 'admin', '123'),
(5, 'admin', '123'),
(6, 'testes', '12345'),
(7, 'admin', '123'),
(8, 'testes', '12345'),
(9, 'admin', '123'),
(10, 'admin', '123'),
(11, 'testes', '12345'),
(12, 'admin', '123'),
(13, 'admin', '123'),
(14, 'admin', '123'),
(15, 'admin', '123'),
(16, 'admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkerja`
--

CREATE TABLE `tbkerja` (
  `no` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `harga` varchar(1000) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `kategori01` varchar(100) NOT NULL,
  `kategori02` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbkerja`
--

INSERT INTO `tbkerja` (`no`, `judul`, `harga`, `tanggal`, `deskripsi`, `kategori01`, `kategori02`) VALUES
(2, 'cari designer logo', '299', '19 april 2020', 'mencari jago photoshop', 'designer logo', 'photoshop'),
(3, 'mencari editor video', '380', '20 april 2020', 'mencari seorang jago editor video di utamakan jago visual effect', 'video editor', ''),
(4, 'butuh seorang progammer handal', '269', '21 april 2020', 'programmer yang handal membuat aplikasi mobile', 'android development', 'programmer'),
(5, 'mencari seorang sales', '199', '18 april 2020', 'sales dalam hal online marketing dapat mempromosikan produk kami', 'online marketing', ''),
(7, 'mencari translator film ', '199', '20 april 2020', 'mencari orang yang mentranslate bahasa indonesia ke inggris', 'translator', ''),
(8, 'cari designer logo', '299', '19 april 2020', 'mencari jago photoshop', 'designer logo', 'photoshop'),
(9, 'mencari seorang endorsment', '239', '18 april 2020', 'sales dalam hal online marketing dapat mempromosikan produk kami', 'online marketing', ''),
(10, 'butuh seorang progammer handal', '269', '21 april 2020', 'programmer yang handal membuat aplikasi mobile', 'android development', 'programmer'),
(11, 'mencari seorang endorsment', '239', '18 april 2020', 'sales dalam hal online marketing dapat mempromosikan produk kami', 'online marketing', ''),
(12, 'mencari translator film ', '199', '20 april 2020', 'mencari orang yang mentranslate bahasa indonesia ke inggris', 'translator', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `user`, `password`) VALUES
(48, 'admin', 'admin@gmail.com', 'admin', '123'),
(49, 'ngetes', 'ngetes@gmail.net', 'testes', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `username_2` (`username`),
  ADD KEY `username_3` (`username`);

--
-- Indeks untuk tabel `tbkerja`
--
ALTER TABLE `tbkerja`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbkerja`
--
ALTER TABLE `tbkerja`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
