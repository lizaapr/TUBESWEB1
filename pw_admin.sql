-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jan 2019 pada 19.05
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_admin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `adminn`
--

CREATE TABLE `adminn` (
  `id_admin` int(3) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `adminn`
--

INSERT INTO `adminn` (`id_admin`, `email`, `password`, `username`) VALUES
(1, 'admin@gmail.com', 'admin', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(5) NOT NULL,
  `nama_event` varchar(30) NOT NULL,
  `jadwal` varchar(30) NOT NULL,
  `kisaran` varchar(30) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `nama_event`, `jadwal`, `kisaran`, `gambar`) VALUES
(3, 'liza', 'liza123', '567', 'kpop.png'),
(4, 'BLACKPINK', 'CONCERT', '20000000', 'blackpink.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `question_user`
--

CREATE TABLE `question_user` (
  `id_question` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `phone` int(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambah_event`
--

CREATE TABLE `tambah_event` (
  `id_event` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tempat` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kisaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(13) NOT NULL,
  `password` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `phone`, `password`, `alamat`) VALUES
(1, 'p', 'p', 9876, '0808', ''),
(2, 'liza', 'liz@gmail.com', 9876, '0808', ''),
(3, 'lalaliza', 'lalaliza@gmail.com', 2147483647, 'zia', ''),
(4, 'lizaanj', 'lizaanj@gmail.com', 2147483647, 'zia', ''),
(5, 'jali', 'jali@gmail.com', 2147483647, 'jali', ''),
(6, 'pricil', 'pri@gmail.com', 556789644, 'pricil', ''),
(7, 'lala', 'lalalalla@gmail.com', 2147483647, 'lala', ''),
(8, 'Liza', 'nisa@gmail.com', 8765564, 'lalisa', ''),
(9, 'liji', 'liji@gmail.com', 87865, 'liji', ''),
(10, 'haha', 'haha@gmail.com', 8876544, 'haha', ''),
(11, 'hhjh', 'ftyfy', 0, '0909', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `question_user`
--
ALTER TABLE `question_user`
  ADD PRIMARY KEY (`id_question`);

--
-- Indeks untuk tabel `tambah_event`
--
ALTER TABLE `tambah_event`
  ADD KEY `id_event` (`id_event`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
