-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2022 pada 09.00
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
-- Database: `skd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `cust_id` int(25) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`cust_id`, `fullname`, `username`, `password`) VALUES
(1, 'sdsa', 'sad', '945'),
(2, 'ewrerw', 'werwe', 'd0dceeae67e2293505f8f0d3fc850d0d'),
(3, '', 'sssd', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, '', 'sssd', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, '', 'sssd', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'Afif Nugroho', 'Apips', '94580b055ccd164bd2530b059e9352d8'),
(7, 'Afif Nugroho', 'Apips', '94580b055ccd164bd2530b059e9352d8'),
(8, 'Afif Nugroho', 'Apips', '94580b055ccd164bd2530b059e9352d8'),
(9, 'pips', 'Nugroho', 'cef468eeda569cc1b16b45fd53200b9c'),
(10, 'Afif Nugroho', 'Apips', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'Afif Nugroho', 'apips12', '81dc9bdb52d04dc20036dbd8313ed055'),
(12, 'Afif Nugroho', 'Apips', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'Afif Nugroho', 'Apips', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'Afif Nugroho', 'Apips', '81dc9bdb52d04dc20036dbd8313ed055'),
(15, 'Afif Nugroho', 'Apips', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`cust_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `cust_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
