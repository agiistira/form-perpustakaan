-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2020 pada 17.46
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_buku`
--

CREATE TABLE `tabel_buku` (
  `ID` int(40) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `Id_Perpustakaan` varchar(40) NOT NULL,
  `Judul_Buku` varchar(30) NOT NULL,
  `Nama_Penerbit` varchar(40) NOT NULL,
  `Tahun_Terbit` varchar(40) NOT NULL,
  `No_Hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_buku`
--

INSERT INTO `tabel_buku` (`ID`, `Nama`, `Id_Perpustakaan`, `Judul_Buku`, `Nama_Penerbit`, `Tahun_Terbit`, `No_Hp`) VALUES
(6, 'Agistira', '180115201031', 'Marmut Merah Jambu', 'Raditya Dika', '2014', '081374032203'),
(7, 'Cindy Febriani', '180115201013', 'Mariposa', 'Andika', '2018', '081374032204'),
(9, 'Udin', '180115201033', 'Milea', 'Pidi Baiq', '2016', '081374032206'),
(10, 'Mas Sidiq', '180115201034', 'Bale-Bale', 'Iri Bilang Bos', '2020', '081374032207'),
(11, 'Kang Tato', '180115201035', 'Ganteng Doang Jemput Cewe Depa', 'Kang Tato', '2020', '081374032208');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_buku`
--
ALTER TABLE `tabel_buku`
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
