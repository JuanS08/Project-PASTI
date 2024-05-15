-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 15 Bulan Mei 2024 pada 15.57
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
-- Database: `service_auth`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin02@gmail.com', '$2y$12$ZNYta8AiE2pzofLaCBz30O2dCiGyfxJF0ECEaMbiGVza9Ud/6Urs6', NULL, NULL, '2024-04-21 13:18:30', '2024-04-21 13:18:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `identity_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `gender`, `identity_number`, `birthdate`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Juan Saut Pandapotan Sitorus', 'saut8017@gmail.com', '087777389967', 'laki-laki', '1212020804030001', '2003-04-08', NULL, '$2y$12$TwFQKuX5gQem3/4/klazAOb0bqNgZC3F0gQDwW6VEaCbfohmqNR5C', '2024-05-12 17:07:06', '2024-05-12 17:07:06'),
(2, 'Josua Sandi Putra Sitorus', 'joju8017@gmail.com', '082244378899', 'laki-laki', '1212021311010001', '2001-11-13', NULL, '$2y$12$1Gm1CUa6F9bge3QlJFO.HezCj0Jnj6osBRCoby4Y36QO5JMyxhtcu', '2024-05-12 17:39:58', '2024-05-12 17:39:58'),
(3, 'Kevin Hutajulu', 'kevin20@gmail.com', '081232564720', 'laki-laki', '1212022008040001', '2003-08-20', NULL, '$2a$04$oSqVQeKq9rLjBjSqFGzt8ul3Ctic7dEeutvJLk351KaTt1HEjIBC.', '2024-05-13 03:10:11', '2024-05-13 03:10:11'),
(4, 'Kenan Bukit', 'kenan98@gmail.com', '087777389950', 'laki-laki', '1212020605040003', '2004-05-06', NULL, '$2y$12$ZMwP9vrk5Qsm95jOcw6vjOuqfDyJF7AyX9GqDKG2hA.o/EblMZtwW', '2024-05-13 12:33:43', '2024-05-13 12:33:43'),
(5, 'Resa Manurung', 'resa45@gmail.com', '082355679988', 'perempuan', '1212060908030010', '2003-08-09', NULL, '$2y$12$.oXsvQXsjzcUc5V6AonBLO/p0ajNm26ypz56lnH1dt6r4upmQwVpy', '2024-05-13 12:36:46', '2024-05-13 12:36:46'),
(6, 'Clara Sitorus', 'clara20@gmail.com', '085572564712', 'laki-laki', '1212100203040067', '2004-06-20', NULL, '$2a$04$RvvBHSCsvf.rKmQHWLJhV.Nm/ogGhSmc.ERDJsxRJjNMeW3n08az.', '2024-05-14 15:32:32', '2024-05-14 15:32:32'),
(7, 'Indah Sitorus', 'indah08@gmail.com', '083112345678', 'perempuan', '1212200806040067', '2004-06-08', NULL, '$2a$04$s4a9iBr8gVioxB54AZ88XOFvmRz2okVIGQPDIF5Copp8Y7TX8Pj06', '2024-05-15 08:08:09', '2024-05-15 08:08:09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
