-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2019 pada 19.34
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopzazu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cek_ids`
--

CREATE TABLE `cek_ids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_akses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cek_ids`
--

INSERT INTO `cek_ids` (`id`, `kode_member`, `nama`, `status_akses`, `status_anggota`, `created_at`, `updated_at`) VALUES
(12, 'USR20191130-12', 'Moch. Dzati Amar Wibianto', 'Member', 'Aktif', '2019-11-30 09:49:34', '2019-11-30 09:49:34'),
(13, 'USR20191130-13', 'M. Rizky Moneter', 'Member', 'Aktif', '2019-11-30 12:01:50', '2019-11-30 12:01:50'),
(14, 'USR20191205-14', 'Danang Priambodo', 'Member', 'Aktif', '2019-12-05 12:37:53', '2019-12-05 12:37:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_11_09_114921_create_tb_anggotas_table', 1),
(15, '2019_11_09_155931_create_cek_ids_table', 1),
(17, '2019_11_15_170628_create_usr_image_dbs_table', 2),
(18, '2019_11_23_201758_status_akses_cek_ids', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggotas`
--

CREATE TABLE `tb_anggotas` (
  `kode_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabkota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` bigint(20) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_anggotas`
--

INSERT INTO `tb_anggotas` (`kode_member`, `nik`, `nama`, `jk`, `pekerjaan`, `alamat`, `kabkota`, `pos`, `email`, `telp`, `photo`, `created_at`, `updated_at`) VALUES
('USR20191130-12', 1234567890123456, 'Moch. Dzati Amar Wibianto', 'Laki-laki', 'Test', 'Jl. Brigjen Katamso No. 45 Janti Waru', 'Sidoarjo', 61256, 'amarlinkinpark@gmail.com', 883749283473, 'QAYQKsJ', '2019-11-30 09:49:34', '2019-11-30 09:49:34'),
('USR20191130-13', 1234567890, 'M. Rizky Moneter', 'Laki-laki', 'Test', 'test jl test', 'Sidoarjo', 61256, 'test@test.com', 34324234234324, '4aWpM9J', '2019-11-30 12:01:50', '2019-11-30 12:01:50'),
('USR20191205-14', 1234567890, 'Danang Priambodo', 'Laki-laki', 'Test', 'Sioarjo Test', 'Sidoarjo', 61256, 'D_anang@danang.com', 2378234204980, 'Vd5IO5R', '2019-12-05 12:37:53', '2019-12-05 12:37:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_tbls`
--

CREATE TABLE `user_tbls` (
  `kode_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_tbls`
--

INSERT INTO `user_tbls` (`kode_member`, `nama`, `uername`, `pasword`, `created_at`, `updated_at`) VALUES
('USR20191130-12', 'Moch. Dzati Amar Wibianto', 'amarW', 'amar12345', '2019-11-30 18:10:45', '2019-12-05 12:46:31'),
('USR20191130-13', 'M. Rizky Moneter', 'rizky', 'rizky1`234', '2019-11-30 18:14:45', '2019-11-30 18:14:45'),
('USR20191205-14', 'Danang Priambodo', 'MargaD', 'danang1234', '2019-12-06 11:22:05', '2019-12-06 11:22:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usr_image_dbs`
--

CREATE TABLE `usr_image_dbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ekstensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `usr_image_dbs`
--

INSERT INTO `usr_image_dbs` (`id`, `kode_member`, `kode_gambar`, `ekstensi`, `created_at`, `updated_at`) VALUES
(5, 'USR20191130-12', 'QAYQKsJ', 'jpg', '2019-11-30 09:49:34', '2019-11-30 09:49:34'),
(6, 'USR20191130-13', '4aWpM9J', 'jpg', '2019-11-30 12:01:50', '2019-11-30 12:01:50'),
(7, 'USR20191205-14', 'Vd5IO5R', 'jpg', '2019-12-05 12:37:53', '2019-12-05 12:37:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cek_ids`
--
ALTER TABLE `cek_ids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_member` (`kode_member`),
  ADD KEY `nama` (`nama`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `tb_anggotas`
--
ALTER TABLE `tb_anggotas`
  ADD PRIMARY KEY (`kode_member`),
  ADD KEY `photo` (`photo`),
  ADD KEY `nama` (`nama`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_tbls`
--
ALTER TABLE `user_tbls`
  ADD PRIMARY KEY (`kode_member`);

--
-- Indeks untuk tabel `usr_image_dbs`
--
ALTER TABLE `usr_image_dbs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_member` (`kode_member`),
  ADD KEY `kode_gambar` (`kode_gambar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cek_ids`
--
ALTER TABLE `cek_ids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `usr_image_dbs`
--
ALTER TABLE `usr_image_dbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cek_ids`
--
ALTER TABLE `cek_ids`
  ADD CONSTRAINT `cek_ids_ibfk_1` FOREIGN KEY (`kode_member`) REFERENCES `tb_anggotas` (`kode_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cek_ids_ibfk_2` FOREIGN KEY (`nama`) REFERENCES `tb_anggotas` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user_tbls`
--
ALTER TABLE `user_tbls`
  ADD CONSTRAINT `user_tbls_ibfk_1` FOREIGN KEY (`kode_member`) REFERENCES `cek_ids` (`kode_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `usr_image_dbs`
--
ALTER TABLE `usr_image_dbs`
  ADD CONSTRAINT `usr_image_dbs_ibfk_1` FOREIGN KEY (`kode_member`) REFERENCES `tb_anggotas` (`kode_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usr_image_dbs_ibfk_2` FOREIGN KEY (`kode_gambar`) REFERENCES `tb_anggotas` (`photo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
