-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2024 pada 17.00
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbprojek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `nama`, `kecamatan`) VALUES
(1, 'Cikini', 'Menteng'),
(2, 'Gondangdia', 'Menteng'),
(3, 'Cideng', 'Gambir'),
(4, 'Duri Pulo', 'Gambir'),
(5, 'Kebon Kelapa', 'Gambir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paramedik`
--

CREATE TABLE `paramedik` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `gender` char(1) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kategori` enum('Dokter umum','Dokter lanjutan','Dokter spesialis','Dokter EMT') NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `unit_kerja_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kode` varchar(45) DEFAULT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kelurahan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `kode`, `tmp_lahir`, `tgl_lahir`, `gender`, `email`, `alamat`, `kelurahan_id`) VALUES
(52, 'Rani Putri Mahardika', ' ID001', 'Jakarta', '2004-06-15', 'L', 'rani.putri@example.com', 'jl. Merpati No. 10, RT 03/RW 07, Kelurahan Senen, Kecamatan Senen, Jakarta Pusat, DKI Jakarta 10410', 1),
(53, 'Ahmad Kurniawan', 'ID002', 'Surabaya', '0000-00-00', 'L', 'ahmad.k@example.com', 'Jl. Mangga Dua No. 18, RT 02/RW 04, Kelurahan Bubutan, Kecamatan Bubutan, Surabaya, Jawa Timur 60174', 2),
(54, 'Siti Nurhaliza', ' ID003', 'Bandung', '0000-00-00', 'P', 'siti.nur@example.com', 'Jl. Cendana No. 5, RT 05/RW 03, Kelurahan Cibiru, Kecamatan Cileunyi, Bandung, Jawa Barat 40625', 1),
(55, 'Rano alamsyah', ' ID001', 'Jakarta', '2024-05-09', 'L', 'rano.karno@gmail.com', 'asdasdaddddddddddddddddddddd', 2),
(56, 'Rani Putri Mahardika', ' ID001', 'Jakarta', '2004-06-15', 'L', 'rani.putri@example.com', 'jl. Merpati No. 10, RT 03/RW 07, Kelurahan Senen, Kecamatan Senen, Jakarta Pusat, DKI Jakarta 10410', 1),
(57, 'Rani Putri Mahardika', ' ID001', 'Jakarta', '2004-06-15', 'L', 'rani.putri@example.com', 'jl. Merpati No. 10, RT 03/RW 07, Kelurahan Senen, Kecamatan Senen, Jakarta Pusat, DKI Jakarta 10410', 1),
(58, 'Ahmad Kurniawan', 'ID002', 'Surabaya', '0000-00-00', 'L', 'ahmad.k@example.com', 'Jl. Mangga Dua No. 18, RT 02/RW 04, Kelurahan Bubutan, Kecamatan Bubutan, Surabaya, Jawa Timur 60174', 2),
(59, 'Siti Nurhaliza', ' ID003', 'Bandung', '0000-00-00', 'P', 'siti.nur@example.com', 'Jl. Cendana No. 5, RT 05/RW 03, Kelurahan Cibiru, Kecamatan Cileunyi, Bandung, Jawa Barat 40625', 1),
(60, 'Rano alamsyah', ' ID001', 'Jakarta', '2024-05-09', 'L', 'rano.karno@gmail.com', 'asdasdaddddddddddddddddddddd', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `priksa`
--

CREATE TABLE `priksa` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `berat` double NOT NULL,
  `tinggi` double NOT NULL,
  `tensi` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `paramedik_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Rano alamsyah', 'rano.karno@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Rano alamsyah', 'rano.karno@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paramedik`
--
ALTER TABLE `paramedik`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `unit_kerja_id` (`unit_kerja_id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `priksa`
--
ALTER TABLE `priksa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_2` (`pasien_id`) USING BTREE,
  ADD KEY `id` (`paramedik_id`) USING BTREE;

--
-- Indeks untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `paramedik`
--
ALTER TABLE `paramedik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `priksa`
--
ALTER TABLE `priksa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `paramedik`
--
ALTER TABLE `paramedik`
  ADD CONSTRAINT `paramedik_ibfk_1` FOREIGN KEY (`unit_kerja_id`) REFERENCES `unit kerja` (`ivgvvjh`);

--
-- Ketidakleluasaan untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`kelurahan_id`) REFERENCES `kelurahan` (`id`);

--
-- Ketidakleluasaan untuk tabel `priksa`
--
ALTER TABLE `priksa`
  ADD CONSTRAINT `priksa_ibfk_1` FOREIGN KEY (`paramedik_id`) REFERENCES `paramedik` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `priksa_ibfk_2` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
