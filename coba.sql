-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 31 Agu 2020 pada 21.43
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_peg`
--

CREATE TABLE `user_peg` (
  `id` int(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tgl_add` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `unit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_peg`
--

INSERT INTO `user_peg` (`id`, `username`, `password`, `status`, `tgl_add`, `unit`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '2019-03-23 20:53:41', 1),
(2, 'siswa', 'e00cf25ad42683b3df678c61f42c6bda', '2', '2020-08-31 19:09:23', 1),
(3, 'pustakawan', 'c84258e9c39059a89ab77d846ddab909', '3', '2020-08-31 19:09:29', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user_peg`
--
ALTER TABLE `user_peg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user_peg`
--
ALTER TABLE `user_peg`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
