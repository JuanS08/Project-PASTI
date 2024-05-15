-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 15 Bulan Mei 2024 pada 16.15
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
-- Database: `service_detail_tiket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_tikets`
--

CREATE TABLE `detail_tikets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` datetime(3) DEFAULT NULL,
  `updated_at` datetime(3) DEFAULT NULL,
  `deleted_at` datetime(3) DEFAULT NULL,
  `asal_keberangkatan` longtext DEFAULT NULL,
  `tujuan_keberangkatan` longtext DEFAULT NULL,
  `kelas` longtext DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `metode_pembayaran` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_tikets`
--

INSERT INTO `detail_tikets` (`id`, `created_at`, `updated_at`, `deleted_at`, `asal_keberangkatan`, `tujuan_keberangkatan`, `kelas`, `harga`, `metode_pembayaran`) VALUES
(1, '2024-05-14 21:01:05.326', '2024-05-15 20:46:57.671', '2024-05-15 20:47:44.641', 'Medan', 'Laguboti', 'Reguler', 850000, 'Transfer'),
(2, '2024-05-14 21:03:40.271', '2024-05-14 21:03:40.271', '2024-05-15 20:48:27.586', 'Medan', 'Pematang Siantar', 'Reguler', 60000, 'Transfer'),
(3, '2024-05-15 20:46:39.883', '2024-05-15 20:46:39.883', NULL, 'Medan', 'Pematang Siantar', 'Reguler', 60000, 'Transfer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_tikets`
--
ALTER TABLE `detail_tikets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_detail_tikets_deleted_at` (`deleted_at`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_tikets`
--
ALTER TABLE `detail_tikets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
