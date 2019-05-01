-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2019 pada 11.31
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
-- Database: `db_kpu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_partai`
--

CREATE TABLE `tb_partai` (
  `idpartai` int(11) NOT NULL,
  `namapartai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_partai`
--

INSERT INTO `tb_partai` (`idpartai`, `namapartai`) VALUES
(1, 'Partai A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suara`
--

CREATE TABLE `tb_suara` (
  `idsuara` int(11) NOT NULL,
  `idtps` varchar(11) NOT NULL,
  `idpartai` int(11) NOT NULL,
  `suarasah` int(12) NOT NULL,
  `suaratidaksah` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tps`
--

CREATE TABLE `tb_tps` (
  `idtps` int(11) NOT NULL,
  `namatps` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `namasaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tps`
--

INSERT INTO `tb_tps` (`idtps`, `namatps`, `kecamatan`, `namasaksi`) VALUES
(1, 'TPS  1', 'BOJONG', 'RENDI'),
(2, 'TPS  X', 'BOJONG', 'RENDI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `iduser` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL,
  `level` varchar(11) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`iduser`, `namalengkap`, `username`, `password`, `level`, `status`) VALUES
(1, 'administrator', 'admin', 'admin', 'admin', 'Y'),
(2, 'petugas', 'petugas', 'petugas', 'petugas', 'Y'),
(4, 'miko', 'admin', 'admin', 'admin', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_partai`
--
ALTER TABLE `tb_partai`
  ADD PRIMARY KEY (`idpartai`);

--
-- Indeks untuk tabel `tb_suara`
--
ALTER TABLE `tb_suara`
  ADD PRIMARY KEY (`idsuara`);

--
-- Indeks untuk tabel `tb_tps`
--
ALTER TABLE `tb_tps`
  ADD PRIMARY KEY (`idtps`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_partai`
--
ALTER TABLE `tb_partai`
  MODIFY `idpartai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_suara`
--
ALTER TABLE `tb_suara`
  MODIFY `idsuara` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_tps`
--
ALTER TABLE `tb_tps`
  MODIFY `idtps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
