-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2020 pada 15.08
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemrograman web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `nomor` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `website` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`nomor`, `email`, `alamat`, `website`) VALUES
('1234 1234 4567', 'blablabla@gmail.com', 'Jl.Angker', 'www.blablabla.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `id` int(100) NOT NULL,
  `sd` varchar(150) NOT NULL,
  `smp` varchar(150) NOT NULL,
  `sma` varchar(150) NOT NULL,
  `kuliah` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`id`, `sd`, `smp`, `sma`, `kuliah`) VALUES
(15, 'SDN JEPARA 1 SURABAYA (2006-2012)', 'SMPN 37 SURABAYA (2012-2015)', 'SMA GIKI 3 SURABAYA (2015-2018)', 'UNIVERSITAS PEMBANGUNAN NASIONAL VETERAN JAWA TIMUR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `experience`
--

CREATE TABLE `experience` (
  `exp1` varchar(50) NOT NULL,
  `exp2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `experience`
--

INSERT INTO `experience` (`exp1`, `exp2`) VALUES
('Freelancer on Fiverr (2016-2018)', 'Seller smartphone accessories online(2018-2019)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `expertise`
--

CREATE TABLE `expertise` (
  `ex1` text NOT NULL,
  `ex2` text NOT NULL,
  `ex3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `expertise`
--

INSERT INTO `expertise` (`ex1`, `ex2`, `ex3`) VALUES
('Adobe Premiere', 'Microsoft Office\r\n', 'Unity');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `profile_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`profile_text`) VALUES
('A programmer who is quite good at games and android. Trying to study the website.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `education`
--
ALTER TABLE `education`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
