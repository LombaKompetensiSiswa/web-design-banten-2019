-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2019 pada 11.36
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
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_tambah` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `publish_status` tinyint(1) NOT NULL,
  `flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `deskripsi`, `isi`, `tgl_tambah`, `publish_status`, `flag`) VALUES
(1, 'mengapa aku begini', 'adasdad', 'asdasdasdasd', '2019-04-25 02:47:16', 1, 1),
(2, 'tomohon', 'gsgsgsgsggs', 'asdasdadadad', '2019-04-25 02:57:31', 1, 1),
(3, 'ku sudah lelah pengen tidur ya allah', 'mati gua', 'asdadasda', '2019-04-25 07:00:17', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `partai`
--

CREATE TABLE `partai` (
  `id_partai` int(11) NOT NULL,
  `nama_partai` varchar(255) NOT NULL,
  `alamat_partai` text NOT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `partai`
--

INSERT INTO `partai` (`id_partai`, `nama_partai`, `alamat_partai`, `no_telepon`, `flag`) VALUES
(3, 'a', 'jalan hj kemang', '08182838', 1),
(4, 'b', 'jalan hj surya', '08182838', 1),
(5, 'c', 'jalan hj kencana', '0882828', 1),
(6, 'd', 'jalan hj lala', '0882828', 1),
(7, 'e', 'jalan tomohon', '1234', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelaksanaan`
--

CREATE TABLE `pelaksanaan` (
  `id_pelaksanaan` int(11) NOT NULL,
  `id_tps` int(30) NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelaksanaan`
--

INSERT INTO `pelaksanaan` (`id_pelaksanaan`, `id_tps`, `tgl_pelaksanaan`, `flag`) VALUES
(1, 1, '2019-04-17', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE `pemilih` (
  `id_pemilih` int(11) NOT NULL,
  `nama_pemilih` varchar(255) NOT NULL,
  `alamat_pemilih` text NOT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `id_partai` int(30) DEFAULT NULL,
  `id_pelaksanaan` int(30) DEFAULT NULL,
  `status_suara` tinyint(1) DEFAULT NULL,
  `flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`id_pemilih`, `nama_pemilih`, `alamat_pemilih`, `no_telepon`, `id_partai`, `id_pelaksanaan`, `status_suara`, `flag`) VALUES
(1, 'DADAD', 'DADSAD', '8282', 1, 1, 0, 1),
(2, 'ahmad zubair', 'asdad', 'asdasd', 1, 1, 1, NULL),
(3, 'ahmad zubair', 'asdad', 'asdasd', 3, 1, 1, 1),
(4, 'zczc', 'czxczc', '08182', 4, 1, 1, 1),
(5, 'zczc', 'czxczc', '08182', 4, 1, 1, 1),
(6, 'giran', 'jalan', '4234324', 1, 1, 1, 1),
(7, 'haris', 'jalan satu ', '4234324', 1, 1, 1, 1),
(8, 'firgo', 'sjshsss', '3131', 1, 1, 1, 1),
(9, 'tedi', 'jalan dua', '23242', 2, 1, 1, 1),
(10, 'jaenudin', 'asdasdasd', '23123', 1, 1, 1, 1),
(11, 'rizki', 'dasdasdadasd', '32131231', 1, 1, 1, 1),
(12, 'diki', 'adasdasdad', '23123123', 3, 1, 1, 1),
(13, 'rasmoyo', 'jalan pejompongan', '23132131', 4, 1, 1, 1),
(14, 'dassdada', 'sdfsfsdf', '08182', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `status`, `flag`) VALUES
(1, 'admin', '$2y$10$8jtdgOQvm6JsXzmN3atieuWrRF7kazdKcLKym5EpWvi8a4v6b6FCu', 1, 1),
(2, 'admin', '$2y$10$CB.RBrZNL5Ev36hQT7m3KuPQKWfC.AAWu8NFf9rf8/OTKB.Vre9sa', 1, 1),
(3, 'ahmad', '$2y$10$qgDZH/nFzNrSXBjhyxEyZOHwVnOxfCVFE237zC21ZJEwTwAoKNgAW', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `saksi`
--

CREATE TABLE `saksi` (
  `id_saksi` int(11) NOT NULL,
  `nama_saksi` varchar(255) NOT NULL,
  `alamat_saksi` text NOT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `id_partai` int(30) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saksi`
--

INSERT INTO `saksi` (`id_saksi`, `nama_saksi`, `alamat_saksi`, `no_telepon`, `id_partai`, `flag`) VALUES
(5, 'ahmad faslan', 'dadsad', '213', 6, 1),
(6, 'khoirudin', 'dadsad', '213', 6, 1),
(7, 'tuppel kentut', 'adadsa', '213', 6, 1),
(8, 'halal altintop', 'adadsa', '213', 5, 1),
(9, 'kuliah', 'dadad', '31231', 3, 1),
(10, 'jarwo', 'adadad', '31231', 5, 1),
(11, 'kurniawan', 'adadad', '31231', 5, 1),
(12, 'yahya', 'adadad', '31231', 4, 1),
(13, 'dede', 'adadad', '123', 4, 1),
(14, 'fafa', 'sdfdf', '123', 4, 1),
(15, 'liawan', 'sdfdf', '123', 5, 1),
(16, 'romi', 'sdfdf', '123', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tps`
--

CREATE TABLE `tps` (
  `id_tps` int(11) NOT NULL,
  `nama_tps` varchar(30) NOT NULL,
  `alamat_tps` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `flag` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tps`
--

INSERT INTO `tps` (`id_tps`, `nama_tps`, `alamat_tps`, `status`, `flag`) VALUES
(1, 'tps kebun kopi', 'jalan tps 3 jakarta', 1, 1),
(2, 'tps kebun nanas', 'jalan hj nawi', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `partai`
--
ALTER TABLE `partai`
  ADD PRIMARY KEY (`id_partai`);

--
-- Indeks untuk tabel `pelaksanaan`
--
ALTER TABLE `pelaksanaan`
  ADD PRIMARY KEY (`id_pelaksanaan`);

--
-- Indeks untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id_pemilih`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `saksi`
--
ALTER TABLE `saksi`
  ADD PRIMARY KEY (`id_saksi`);

--
-- Indeks untuk tabel `tps`
--
ALTER TABLE `tps`
  ADD PRIMARY KEY (`id_tps`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `partai`
--
ALTER TABLE `partai`
  MODIFY `id_partai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pelaksanaan`
--
ALTER TABLE `pelaksanaan`
  MODIFY `id_pelaksanaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id_pemilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `saksi`
--
ALTER TABLE `saksi`
  MODIFY `id_saksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tps`
--
ALTER TABLE `tps`
  MODIFY `id_tps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
