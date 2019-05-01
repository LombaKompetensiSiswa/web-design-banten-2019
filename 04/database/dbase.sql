-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2019 pada 11.33
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbase`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(10) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `materi` varchar(1000) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`blog_id`, `judul`, `gambar`, `materi`, `status`) VALUES
(1, 'Pelaksanaan pemilu tps 1', 'Ballot-box.png', 'pemilu tps satu akan dilaksanakan pada tanggan 19 arpil 2019', 'on'),
(2, 'Peningkatan voting pada kandidat no 1', 'images (3).jpg', 'Peningkatan terjadi...', 'on'),
(3, 'peresmian website kpu', '47693287_2010089589074932_8808533741918881750_n.jpg', 'peresmian website kpu diadakan pada hari ini jam...', 'on'),
(4, 'kami menyediakan forum', 'sales-e1537267125885.png', 'forum ini diadakan karena ..', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partai`
--

CREATE TABLE `partai` (
  `partai_id` int(10) NOT NULL,
  `partai` varchar(100) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `status` enum('on','off') NOT NULL,
  `saksi1` varchar(100) NOT NULL,
  `saksi2` varchar(100) NOT NULL,
  `saksi3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `partai`
--

INSERT INTO `partai` (`partai_id`, `partai`, `gambar`, `status`, `saksi1`, `saksi2`, `saksi3`) VALUES
(1, 'PARTAI A', 'avatar.png', 'off', 'hikman', 'nur', 'rohman'),
(2, 'PARTAI B', 'avatar2.png', 'off', 'andi', 'abdul', 'salam'),
(3, 'PARTAI C', 'avatar3.png', 'on', 'caca', 'cici', 'cece'),
(4, 'PARTAI D', 'avatar4.png', 'on', 'dadi', 'dudu', 'dudi'),
(5, 'PARTAI E', 'avatar5.png', 'on', 'Ewan', 'erwin', 'arwan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE `pemilih` (
  `pemilih_id` int(10) NOT NULL,
  `tps_id` varchar(10) NOT NULL,
  `status` enum('on','off') NOT NULL,
  `pemilih` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`pemilih_id`, `tps_id`, `status`, `pemilih`) VALUES
(1, '1', 'on', 'Ajeng'),
(2, '1', 'on', 'Andi'),
(3, '1', 'on', 'AJAT'),
(4, '1', 'on', 'sri'),
(5, '1', 'on', 'angga'),
(6, '1', 'on', 'sanusi'),
(7, '1', 'on', 'uci'),
(8, '1', 'on', 'hikman'),
(9, '1', 'on', 'nur'),
(10, '1', 'on', 'anisa'),
(11, '1', 'on', 'meli'),
(12, '1', 'on', 'nurohman'),
(13, '1', 'on', 'ica'),
(14, '1', 'on', 'faisal'),
(15, '1', 'on', 'caca'),
(16, '1', 'on', 'nuni'),
(17, '1', 'on', 'faroq'),
(18, '1', 'on', 'samuel'),
(19, '1', 'on', 'samuel hadi'),
(20, '1', 'on', 'dapit'),
(21, '1', 'on', 'agus'),
(22, '1', 'on', 'devi'),
(23, '1', 'on', 'refqy'),
(24, '1', 'on', 'adit'),
(25, '1', 'on', 'dinar'),
(26, '2', 'on', 'TK1'),
(27, '2', 'on', 'TK2'),
(28, '2', 'on', 'TK3'),
(29, '2', 'on', 'TK4'),
(30, '2', 'on', 'Tk5'),
(31, '2', 'on', 'TK6'),
(32, '2', 'on', 'TK7'),
(33, '2', 'on', 'TK8'),
(34, '2', 'on', 'tk9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tps`
--

CREATE TABLE `tps` (
  `tps_id` int(10) NOT NULL,
  `tps` varchar(100) NOT NULL,
  `status` enum('on','off') NOT NULL,
  `jadwal` varchar(10) NOT NULL,
  `lokasi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tps`
--

INSERT INTO `tps` (`tps_id`, `tps`, `status`, `jadwal`, `lokasi`) VALUES
(1, 'Tps pertama', 'on', '', 'JL.Tps pertama'),
(2, 'TPS kedua', 'on', '28 April 2', 'JL. Tps kedua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `level` varchar(100) NOT NULL,
  `status` enum('on','off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user`, `phone`, `email`, `password`, `level`, `status`) VALUES
(1, 'hikman', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'on'),
(2, 'petugas1', '', 'petugas1@gmail.com', '696d29e0940a4957748fe3fc9efd22a3', 'petugas', 'on'),
(3, 'pertugas2', '0886698698689', 'petugas2@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'petugas', 'on');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indeks untuk tabel `partai`
--
ALTER TABLE `partai`
  ADD PRIMARY KEY (`partai_id`);

--
-- Indeks untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`pemilih_id`);

--
-- Indeks untuk tabel `tps`
--
ALTER TABLE `tps`
  ADD PRIMARY KEY (`tps_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `partai`
--
ALTER TABLE `partai`
  MODIFY `partai_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `pemilih_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tps`
--
ALTER TABLE `tps`
  MODIFY `tps_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
