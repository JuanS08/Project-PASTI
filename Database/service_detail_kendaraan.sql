-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 15 Bulan Mei 2024 pada 16.13
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service_detail_kendaraan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_kendaraans`
--

CREATE TABLE `detail_kendaraans` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `nomor_kendaraan` varchar(255) NOT NULL,
  `nomor_kursi` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `total_kursi` int(11) NOT NULL,
  `kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_kendaraans`
--

INSERT INTO `detail_kendaraans` (`id`, `created_at`, `updated_at`, `deleted_at`, `user_id`, `nomor_kendaraan`, `nomor_kursi`, `status`, `total_kursi`, `kelas`) VALUES
(1, '2024-05-14 14:27:11', '2024-05-15 20:26:52', '2024-05-15 20:27:48', 4, 'ABC123', '9', 'available', 7, 'Executive'),
(2, '2024-05-15 20:18:18', '2024-05-15 20:18:18', NULL, 2, 'B13', '9', 'booking', 1, 'Executive');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seats`
--

CREATE TABLE `seats` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `nomor_kendaraan` varchar(255) NOT NULL,
  `nomor_kursi` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_kendaraans`
--
ALTER TABLE `detail_kendaraans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor_kendaraan` (`nomor_kendaraan`),
  ADD KEY `idx_detail_kendaraans_deleted_at` (`deleted_at`);

--
-- Indeks untuk tabel `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_seats_deleted_at` (`deleted_at`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_kendaraans`
--
ALTER TABLE `detail_kendaraans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
