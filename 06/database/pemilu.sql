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
-- Database: `pemilu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `content_about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `content_about`) VALUES
(1, '					Informasi Aplikasi Pemilu Tempat Pemungutan Suara adalah Aplikasi yang bertujuan untuk sarana penyampaian informasi seputar pemilu dengan mudah dan cepat				');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `context_berita` text NOT NULL,
  `foto_berita` varchar(255) NOT NULL,
  `tanggal_berita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `context_berita`, `foto_berita`, `tanggal_berita`) VALUES
(1, 'Cek NIK Anda !', 'Telah banyak peristiwa tidak kesesuain NIK menjelang pemilu tahun 2019	', 'ktp.jpg', '2019-04-25'),
(2, 'Test', 'Test Berita		', 'Contact-us-1600x602.jpg.imgix.banner.jpg', '2019-04-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `foto_galeri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto_galeri`) VALUES
(1, '028823700_1555469171-IMG20190417083940.jpg'),
(2, '31-315715_social-media-icons-set-icons-social-whatsapp.png'),
(3, '47693287_2010089589074932_8808533741918881750_n.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partai`
--

CREATE TABLE `partai` (
  `id_partai` int(11) NOT NULL,
  `nama_partai` varchar(255) NOT NULL,
  `foto_partai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `partai`
--

INSERT INTO `partai` (`id_partai`, `nama_partai`, `foto_partai`) VALUES
(1, 'Partai A', 'partaia.png'),
(2, 'Partai B', 'lks.png'),
(5, 'Partai C', 'partaic.png'),
(6, 'Partai D', 'partaid.png'),
(7, 'Partai E', 'partai e.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE `pemilih` (
  `id_pemilih` int(11) NOT NULL,
  `nama_pemilih` varchar(255) NOT NULL,
  `nik_pemilih` bigint(20) NOT NULL,
  `id_tps` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`id_pemilih`, `nama_pemilih`, `nik_pemilih`, `id_tps`) VALUES
(5, 'AlbanEinstein', 123456789, 2),
(6, 'dsad', 2, 0),
(8, 'Albantani', 123, 3),
(9, 'hasan', 2333, 3),
(10, 'Meiditya', 2344, 3),
(11, 'Albert', 2222, 3),
(12, 'einstein', 233, 3),
(13, 'thomas', 1212, 3),
(14, 'alfa', 122121, 3),
(15, 'Amran', 12334, 4),
(16, 'Sunestri', 233323, 4),
(17, 'Depi', 4455, 4),
(18, 'Dara', 4452, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `saksi`
--

CREATE TABLE `saksi` (
  `id_saksi` int(11) NOT NULL,
  `nama_saksi` varchar(255) NOT NULL,
  `id_partai` int(11) NOT NULL,
  `id_tps` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saksi`
--

INSERT INTO `saksi` (`id_saksi`, `nama_saksi`, `id_partai`, `id_tps`) VALUES
(1, 'Alban', 1, 3),
(2, 'Hasan', 2, 3),
(3, 'Tani', 5, 3),
(4, 'Mei', 6, 3),
(5, 'Ditya', 7, 3),
(6, 'Siapa', 1, 2),
(8, 'Albert', 2, 4),
(9, 'Bambang', 5, 4),
(10, 'Pamungkas', 6, 4),
(11, 'Lilyana', 7, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `suara`
--

CREATE TABLE `suara` (
  `id_suara` int(11) NOT NULL,
  `total_suara` bigint(20) NOT NULL,
  `id_partai` int(11) NOT NULL,
  `id_tps` int(11) NOT NULL,
  `jmlh_suarasah` bigint(20) NOT NULL,
  `jmlh_suaratisah` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suara`
--

INSERT INTO `suara` (`id_suara`, `total_suara`, `id_partai`, `id_tps`, `jmlh_suarasah`, `jmlh_suaratisah`) VALUES
(1, 25, 1, 3, 11, 14),
(2, 25, 2, 3, 23, 2),
(3, 25, 5, 3, 20, 5),
(4, 25, 6, 3, 25, 0),
(5, 25, 7, 3, 23, 2),
(6, 12, 1, 4, 5, 7),
(7, 25, 1, 5, 12, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tps`
--

CREATE TABLE `tps` (
  `id_tps` int(11) NOT NULL,
  `nama_tps` varchar(255) NOT NULL,
  `lokasi_tps` varchar(255) NOT NULL,
  `jadwalhari_tps` date NOT NULL,
  `jadwalwaktu_tps` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tps`
--

INSERT INTO `tps` (`id_tps`, `nama_tps`, `lokasi_tps`, `jadwalhari_tps`, `jadwalwaktu_tps`) VALUES
(3, 'TPS 001 CILEGON', 'JL. KH Agus Salim Kel.Kebonsari', '2019-04-25', '08:00:00'),
(4, 'TPS 002 CILEGON', 'Warnasari RT 03/04', '2019-04-25', '08:00:00'),
(5, 'TPS 003 SERANG', 'KOTA serang', '2019-04-25', '08:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status_user` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `status_user`) VALUES
(2, 'administrator', 'admin', 'admin', '1'),
(3, 'petugas', 'petugas', 'petugas', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `partai`
--
ALTER TABLE `partai`
  ADD PRIMARY KEY (`id_partai`);

--
-- Indeks untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id_pemilih`);

--
-- Indeks untuk tabel `saksi`
--
ALTER TABLE `saksi`
  ADD PRIMARY KEY (`id_saksi`);

--
-- Indeks untuk tabel `suara`
--
ALTER TABLE `suara`
  ADD PRIMARY KEY (`id_suara`);

--
-- Indeks untuk tabel `tps`
--
ALTER TABLE `tps`
  ADD PRIMARY KEY (`id_tps`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `partai`
--
ALTER TABLE `partai`
  MODIFY `id_partai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id_pemilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `saksi`
--
ALTER TABLE `saksi`
  MODIFY `id_saksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `suara`
--
ALTER TABLE `suara`
  MODIFY `id_suara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tps`
--
ALTER TABLE `tps`
  MODIFY `id_tps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
