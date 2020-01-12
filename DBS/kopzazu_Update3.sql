-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2020 pada 19.19
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

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
-- Struktur dari tabel `admin_infos`
--

CREATE TABLE `admin_infos` (
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabkota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_admin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_akses` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin_infos`
--

INSERT INTO `admin_infos` (`kode`, `nik`, `nama`, `jk`, `pendidikan`, `alamat`, `kabkota`, `pos`, `email`, `telp`, `photo`, `status_admin`, `status_akses`, `created_at`, `updated_at`) VALUES
('ADM20200111-0', 1234567890, 'AdminDefault', 'Peempuan', 'Tessatuduatiga', 'Tesoi', 'Teslagi', '12345', 'amarlinkinpark@gmail.com', '0895604255946', 'Ajr3z13.jpg', 'Aktif', 'Admin', '2020-01-11 08:35:47', '2020-01-11 09:17:54'),
('ADM20200111-1', 43279482472938023, 'Ouka Miyuki', 'Laki-laki', 'SMK', 'Jl. Brigjen Katamso No. 45 Janti Waru Sidoarjo', 'Sidoarjo', '61256', 'asukaloid.blog@gmail.com', '0895604255942', 'iXrQJ3G.jpg', 'Aktif', 'Admin', '2020-01-11 10:41:09', '2020-01-11 10:41:09'),
('ADM20200111-2', 43279482472938023, 'Ouka', 'Laki-laki', 'SMK', 'Jl. Brigjen Katamso No. 45 Janti Waru Sidoarjo', 'Sidoarjo', '61256', 'asukaloid.blog@gmail.com', '0895604255942', 'UlO21iF.jpg', 'Aktif', 'Admin', '2020-01-11 12:03:15', '2020-01-11 12:03:15'),
('ADM20200111-3', 3847646864237463294, 'Udin', 'Laki-laki', 'SMK', 'Jl. Brigjen Katamso No. 45 Janti Waru Sidoarjo', 'Sidoarjo', '61256', 'asukaloid.blog@gmail.com', '0895604255942', 'QbprOZk.jpg', 'Non-Aktif', 'Admin', '2020-01-11 13:49:05', '2020-01-12 06:39:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_tbls`
--

CREATE TABLE `admin_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_akses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin_tbls`
--

INSERT INTO `admin_tbls` (`id`, `kode`, `uername`, `password`, `status_akses`, `status_admin`, `created_at`, `updated_at`) VALUES
(2, 'ADM20200111-0', 'admin', 'admin1234', 'Admin', 'Aktif', NULL, NULL),
(5, 'ADM20200111-1', 'ouka', 'ouka1234', 'Admin', 'Aktif', '2020-01-12 05:56:37', '2020-01-12 05:56:46');

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
(18, 'USR20200111-18', 'Moch. Dzati Amar  Wibianto', 'Member', 'Aktif', '2020-01-11 10:26:49', '2020-01-11 10:26:49'),
(19, 'USR20200111-19', 'M. Rizky Moneter', 'Member', 'Aktif', '2020-01-11 10:28:27', '2020-01-11 10:28:27');

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
-- Struktur dari tabel `manager_infos`
--

CREATE TABLE `manager_infos` (
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabkota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_akses` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_manager` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `manager_infos`
--

INSERT INTO `manager_infos` (`kode`, `nik`, `nama`, `jk`, `pendidikan`, `alamat`, `kabkota`, `pos`, `email`, `telp`, `photo`, `status_akses`, `status_manager`, `created_at`, `updated_at`) VALUES
('mgr-001', 21038912311, 'manager', 'Laki-laki', 'S1', 'Jl. Brigjen Katamso No. 45 Janti Waru', 'Sidoarjo', '61256', 'amar@m.com', '0877182918623', 'QbprOZk.jpg', 'Manager', 'Aktif', '2020-01-03 17:00:00', '2020-01-03 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manager_tbls`
--

CREATE TABLE `manager_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_akses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_manager` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `manager_tbls`
--

INSERT INTO `manager_tbls` (`id`, `kode`, `uername`, `password`, `status_akses`, `status_manager`, `created_at`, `updated_at`) VALUES
(1, 'mgr-001', 'manager', 'manager1234', 'Manager', 'Aktif', '2020-01-03 17:00:00', '2020-01-03 17:00:00');

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
(18, '2019_11_23_201758_status_akses_cek_ids', 3),
(20, '2019_11_30_170411_add_paid_to_user_table', 4),
(24, '2020_01_03_154145_create_manager_tbls_table', 5),
(25, '2020_01_03_160710_add_access_and_status_to_admin_tbls', 5),
(28, '2019_11_23_202831_create_user_tbls_table', 6),
(30, '2020_01_03_154121_create_manager_infos_table', 7),
(31, '2020_01_03_150411_create_admin_infos_table', 8),
(34, '2020_01_03_202220_create_admin_tbls_table', 9),
(35, '2020_01_03_202228_create_admin_infos_table', 10),
(36, '2020_01_03_202243_create_manager_infos_table', 11),
(38, '2020_01_03_202348_add_access_and_status_to_admin_tbls', 12),
(39, '2020_01_03_202254_create_manager_tbls_table', 13);

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
('USR20200111-18', 43279482472938023, 'Moch. Dzati Amar  Wibianto', 'Laki-laki', 'tes', 'Jl. Brigjen Katamso No. 45 Janti Waru Sidoarjo', 'Sidoarjo', 61256, 'mialy.mialy@hotmail.com', 895604255942, 'rlIaWsO', '2020-01-11 10:26:49', '2020-01-11 10:26:49'),
('USR20200111-19', 4521376538, 'M. Rizky Moneter', 'Laki-laki', 'tes', 'Jl. Brigjen Katamso No. 45 Janti Waru Sidoarjo', 'Sidoarjo', 61256, 'asukaloid.blog@gmail.com', 895604255942, '1vN62iG', '2020-01-11 10:28:27', '2020-01-11 10:28:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_tbls`
--

CREATE TABLE `user_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_akses` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_tbls`
--

INSERT INTO `user_tbls` (`id`, `kode_member`, `nama`, `uername`, `password`, `status_akses`, `created_at`, `updated_at`) VALUES
(7, 'USR20200111-18', 'Moch. Dzati Amar  Wibianto', 'amar', 'amar12345', 'Member', '2020-01-12 08:04:38', '2020-01-12 11:13:54'),
(8, 'USR20200111-19', 'M. Rizky Moneter', 'rizky', '1234567890', 'Member', '2020-01-12 11:14:09', '2020-01-12 11:14:09');

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
(11, 'USR20200111-18', 'rlIaWsO', 'jpg', '2020-01-11 10:26:49', '2020-01-11 10:26:49'),
(12, 'USR20200111-19', '1vN62iG', 'jpg', '2020-01-11 10:28:27', '2020-01-11 10:28:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_infos`
--
ALTER TABLE `admin_infos`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `status_admin` (`status_admin`);

--
-- Indeks untuk tabel `admin_tbls`
--
ALTER TABLE `admin_tbls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_admin` (`kode`),
  ADD KEY `status_admin` (`status_admin`);

--
-- Indeks untuk tabel `cek_ids`
--
ALTER TABLE `cek_ids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_member` (`kode_member`),
  ADD KEY `nama` (`nama`),
  ADD KEY `status_akses` (`status_akses`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `manager_infos`
--
ALTER TABLE `manager_infos`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `manager_tbls`
--
ALTER TABLE `manager_tbls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_manager` (`kode`);

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
-- Indeks untuk tabel `user_tbls`
--
ALTER TABLE `user_tbls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_member` (`kode_member`);

--
-- Indeks untuk tabel `usr_image_dbs`
--
ALTER TABLE `usr_image_dbs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_member` (`kode_member`),
  ADD KEY `kode_gambar` (`kode_gambar`),
  ADD KEY `kode_gambar_2` (`kode_gambar`),
  ADD KEY `kode_member_2` (`kode_member`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_tbls`
--
ALTER TABLE `admin_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `cek_ids`
--
ALTER TABLE `cek_ids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `manager_tbls`
--
ALTER TABLE `manager_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `user_tbls`
--
ALTER TABLE `user_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `usr_image_dbs`
--
ALTER TABLE `usr_image_dbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin_tbls`
--
ALTER TABLE `admin_tbls`
  ADD CONSTRAINT `admin_tbls_ibfk_1` FOREIGN KEY (`kode`) REFERENCES `admin_infos` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_tbls_ibfk_2` FOREIGN KEY (`status_admin`) REFERENCES `admin_infos` (`status_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `cek_ids`
--
ALTER TABLE `cek_ids`
  ADD CONSTRAINT `cek_ids_ibfk_1` FOREIGN KEY (`kode_member`) REFERENCES `tb_anggotas` (`kode_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cek_ids_ibfk_2` FOREIGN KEY (`nama`) REFERENCES `tb_anggotas` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `manager_tbls`
--
ALTER TABLE `manager_tbls`
  ADD CONSTRAINT `manager_tbls_ibfk_1` FOREIGN KEY (`kode`) REFERENCES `manager_infos` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user_tbls`
--
ALTER TABLE `user_tbls`
  ADD CONSTRAINT `user_tbls_ibfk_1` FOREIGN KEY (`kode_member`) REFERENCES `tb_anggotas` (`kode_member`) ON DELETE CASCADE ON UPDATE CASCADE;

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
