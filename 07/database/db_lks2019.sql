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
-- Database: `db_lks2019`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `IDUser` char(5) NOT NULL,
  `NamaLengkap` varchar(50) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('admin','petugas','saksi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`IDUser`, `NamaLengkap`, `Username`, `password`, `level`) VALUES
('AC001', 'Administrator', 'admin', 'admin', 'admin'),
('AC002', 'Udin', 'udin', '123', 'petugas'),
('AC003', 'Bintang Gustiana', 'bintang123', '123', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_rekap`
--

CREATE TABLE `detail_rekap` (
  `IDRekap` char(10) NOT NULL,
  `IDPartai` char(5) NOT NULL,
  `SuaraSah` int(11) NOT NULL,
  `SuaraTidakSah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_rekap`
--

INSERT INTO `detail_rekap` (`IDRekap`, `IDPartai`, `SuaraSah`, `SuaraTidakSah`) VALUES
('REKAP00001', 'PR006', 300, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_saksi_partai`
--

CREATE TABLE `detail_saksi_partai` (
  `IDSaksiPartai` char(5) NOT NULL,
  `IDSaksi` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_saksi_partai`
--

INSERT INTO `detail_saksi_partai` (`IDSaksiPartai`, `IDSaksi`) VALUES
('SP001', 'SK001'),
('SP001', 'SK002'),
('SP001', 'SK003'),
('SP002', 'SK004'),
('SP002', 'SK005'),
('SP002', 'SK006'),
('SP003', 'SK006'),
('SP003', 'SK007'),
('SP003', 'SK008'),
('SP004', 'SK009'),
('SP004', 'SK010'),
('SP004', 'SK011'),
('SP005', 'SK013'),
('SP005', 'SK014'),
('SP005', 'SK015'),
('SP006', 'SK001'),
('SP006', 'SK001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partai`
--

CREATE TABLE `partai` (
  `IDPartai` char(5) NOT NULL,
  `NamaPartai` varchar(50) NOT NULL,
  `JumlahAnggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `partai`
--

INSERT INTO `partai` (`IDPartai`, `NamaPartai`, `JumlahAnggota`) VALUES
('PR001', 'A', 10),
('PR002', 'B', 20),
('PR003', 'C', 30),
('PR004', 'D', 40),
('PR005', 'E', 40),
('PR006', 'X', 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE `pemilih` (
  `IDPemilih` char(5) NOT NULL,
  `NamaLengkap` varchar(50) NOT NULL,
  `NIP` char(30) NOT NULL,
  `JenisKelamin` enum('Laki - Laki','Perempuan') NOT NULL,
  `IDTps` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`IDPemilih`, `NamaLengkap`, `NIP`, `JenisKelamin`, `IDTps`) VALUES
('PM001', 'Asep', '101610341', 'Laki - Laki', 'TP001'),
('PM002', 'Suparjo', '101610342', 'Laki - Laki', 'TP001'),
('PM003', 'Ilham', '101610343', 'Laki - Laki', 'TP001'),
('PM004', 'indri', '101610344', 'Perempuan', 'TP001'),
('PM005', 'sri', '101610345', 'Perempuan', 'TP001'),
('PM006', 'indah', '101610325', 'Perempuan', 'TP001'),
('PM007', 'panjul', '101610347', 'Laki - Laki', 'TP001'),
('PM008', 'kohar', '101610367', 'Laki - Laki', 'TP001'),
('PM009', 'Maimunah', '1016103425', 'Perempuan', 'TP001'),
('PM010', 'kahar', '1016103411', 'Laki - Laki', 'TP001'),
('PM011', 'diki', '1016103144', 'Laki - Laki', 'TP001'),
('PM012', 'mamang', '1016102331', 'Laki - Laki', 'TP001'),
('PM013', 'selfi', '1016102882', 'Perempuan', 'TP001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap`
--

CREATE TABLE `rekap` (
  `IDRekap` char(10) NOT NULL,
  `IDUser` char(5) NOT NULL,
  `TanggalRekap` date NOT NULL,
  `IDPartai` char(5) NOT NULL,
  `JumlahSuara` int(11) NOT NULL,
  `Status` enum('Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekap`
--

INSERT INTO `rekap` (`IDRekap`, `IDUser`, `TanggalRekap`, `IDPartai`, `JumlahSuara`, `Status`) VALUES
('REKAP00001', 'AC002', '2019-04-25', 'PR006', 302, 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saksi`
--

CREATE TABLE `saksi` (
  `IDSaksi` char(5) NOT NULL,
  `NamaLengkap` varchar(50) NOT NULL,
  `JenisKelamin` enum('Laki - Laki','Perempuan') NOT NULL,
  `NoTelepon` char(12) NOT NULL,
  `Alamat` text NOT NULL,
  `IDTps` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saksi`
--

INSERT INTO `saksi` (`IDSaksi`, `NamaLengkap`, `JenisKelamin`, `NoTelepon`, `Alamat`, `IDTps`) VALUES
('SK001', 'Wisnu Legowo', 'Laki - Laki', '089661861144', 'Sempur', 'TP001'),
('SK002', 'Danu Wijaya', 'Laki - Laki', '089661861144', 'Cukanggalih', 'TP001'),
('SK003', 'Indra Faozi', 'Laki - Laki', '089661861144', 'Dukuh', 'TP001'),
('SK004', 'Fazri', 'Laki - Laki', '089661861144', 'Cukanggalih', 'TP001'),
('SK005', 'Udin', 'Laki - Laki', '089661861144', 'Parung', 'TP001'),
('SK006', 'Musahi', 'Laki - Laki', '089661861144', 'Kadu', 'TP001'),
('SK007', 'Maura', 'Perempuan', '08966186144', 'Sempur', 'TP001'),
('SK008', 'Adi Kandil', 'Laki - Laki', '089661861144', 'Pesar', 'TP001'),
('SK009', 'Dinda', 'Perempuan', '089661861144', 'Sukabakti', 'TP001'),
('SK010', 'Dini', 'Perempuan', '089661861144', 'Citra ', 'TP001'),
('SK011', 'Dina', 'Perempuan', '089661861144', 'Citra', 'TP001'),
('SK012', 'Nabila', 'Perempuan', '089661861144', 'Citra', 'TP001'),
('SK013', 'Munji', 'Laki - Laki', '089661861144', 'Citra', 'TP001'),
('SK014', 'Soleh', 'Laki - Laki', '089661861144', 'Kadu', 'TP001'),
('SK015', 'Ikbal', 'Laki - Laki', '089661861144', 'Kadu', 'TP001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saksi_partai`
--

CREATE TABLE `saksi_partai` (
  `IDSaksiPartai` char(5) NOT NULL,
  `IDPartai` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `saksi_partai`
--

INSERT INTO `saksi_partai` (`IDSaksiPartai`, `IDPartai`) VALUES
('SP001', 'PR001'),
('SP002', 'PR002'),
('SP003', 'PR003'),
('SP004', 'PR004'),
('SP005', 'PR005');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tps`
--

CREATE TABLE `tps` (
  `IDTps` char(5) NOT NULL,
  `KategoriTPS` varchar(20) NOT NULL,
  `JadwalPelaksanaan` date NOT NULL,
  `JumlahPemilih` int(11) NOT NULL,
  `JumlahSaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tps`
--

INSERT INTO `tps` (`IDTps`, `KategoriTPS`, `JadwalPelaksanaan`, `JumlahPemilih`, `JumlahSaksi`) VALUES
('TP001', 'TPS 01', '2019-04-25', 12, 0),
('TP002', 'TPS 02', '2019-04-26', 25, 15),
('TP003', 'TPS 03', '2019-04-27', 25, 15),
('TP004', 'TPS 04', '2019-04-26', 25, 15);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`IDUser`);

--
-- Indeks untuk tabel `partai`
--
ALTER TABLE `partai`
  ADD PRIMARY KEY (`IDPartai`);

--
-- Indeks untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`IDPemilih`);

--
-- Indeks untuk tabel `rekap`
--
ALTER TABLE `rekap`
  ADD PRIMARY KEY (`IDRekap`);

--
-- Indeks untuk tabel `saksi`
--
ALTER TABLE `saksi`
  ADD PRIMARY KEY (`IDSaksi`);

--
-- Indeks untuk tabel `saksi_partai`
--
ALTER TABLE `saksi_partai`
  ADD PRIMARY KEY (`IDSaksiPartai`);

--
-- Indeks untuk tabel `tps`
--
ALTER TABLE `tps`
  ADD PRIMARY KEY (`IDTps`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
