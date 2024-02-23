-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2024 pada 16.32
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komunitas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acara`
--

CREATE TABLE `acara` (
  `id` int(11) NOT NULL,
  `nama_Acara` varchar(255) NOT NULL,
  `deskripsi_Acara` text NOT NULL,
  `lokasi_Acara` varchar(32) NOT NULL,
  `jenis_Acara` enum('Resmi','Tidak resmi','','') DEFAULT NULL,
  `kontak_Person` varchar(100) DEFAULT NULL,
  `kategori_Acara` varchar(100) DEFAULT NULL,
  `tanggal_Mulai` date DEFAULT NULL,
  `tanggal_Selesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `acara`
--

INSERT INTO `acara` (`id`, `nama_Acara`, `deskripsi_Acara`, `lokasi_Acara`, `jenis_Acara`, `kontak_Person`, `kategori_Acara`, `tanggal_Mulai`, `tanggal_Selesai`) VALUES
(2, 'Nama Acara Contoh', 'Deskripsi Acara Contoh', '', 'Resmi', '082381123722', 'bebas ', '2023-11-27', '2023-11-27'),
(3, 'Seminar Teknologi', 'seminar ini untuk mendalam teknologi', 'Kampus ITB', 'Resmi', '082381123722', 'sminar', '2024-12-12', '2024-12-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `anggota_id` int(5) DEFAULT NULL,
  `nama` varchar(32) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `tempat_lahir` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan''Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(32) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`anggota_id`, `nama`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `email`, `agama`, `status`) VALUES
(1, 'AMI', '0851612228266', 'dumai', '2022-12-12', 'Laki-laki', 'jln jend sudirman\r\nleppin', 'fahmi123.dumai@gmail.com', 'Islam', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` char(128) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp(),
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`user_id`, `username`, `password`, `email`, `token`, `status`, `last_login`, `foto`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin1@local.com', 'c0e024d9200b5705bc4804722636378a', '1', '2024-01-24 21:54:53', 0x323032342d30312d32332d32322d31342d33392e6a7067),
(4, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'fahmi123.dumai@gmail.com', 'c040e68c4d44c8f8c48746bca89c1b21', '1', '2024-01-24 04:24:34', 0x323032342d30312d32332d32322d32382d31372e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `acara`
--
ALTER TABLE `acara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
