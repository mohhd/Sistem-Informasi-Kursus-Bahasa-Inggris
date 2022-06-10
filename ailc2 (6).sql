-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 08:02 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ailc2`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `users` bigint(20) UNSIGNED DEFAULT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `keterangan` enum('H','T','I') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `users`, `kelas_id`, `keterangan`) VALUES
(2, 34, 1, 'H'),
(3, 34, 1, 'H'),
(4, 34, 1, 'T'),
(5, 34, 1, 'I'),
(7, 18, 1, 'H'),
(8, 23, 1, 'H'),
(9, 24, 1, 'T'),
(10, 27, 1, 'I'),
(11, 34, 1, 'H'),
(12, 36, 1, 'H'),
(13, 18, 1, 'H'),
(14, 23, 1, 'H'),
(15, 24, 1, 'H'),
(16, 27, 1, 'H'),
(17, 34, 1, 'H'),
(18, 36, 1, 'H');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `users` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `users`, `created_at`, `updated_at`) VALUES
(2, 39, '2022-03-14 07:27:38', '2022-03-14 07:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `users` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `users`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 30, 'sidoarjo', '09876545678', '2021-04-13 05:22:58', '2021-04-13 05:22:58'),
(2, 31, 'surabaya', '087666655555', '2021-04-14 07:52:00', '2021-04-14 07:52:00'),
(3, 33, 'Surabaya', '098766667777', '2021-10-18 07:13:25', '2021-10-18 07:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kursus_id` int(11) DEFAULT NULL,
  `hari` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kursus_id`, `hari`, `jam`, `harga`, `created_at`, `updated_at`) VALUES
(0, 1, 'SENIN,RABU/JUMAT', '16:00-17:30', '250.000,-/4Bulan', NULL, '2021-01-27 07:08:49'),
(1, 2, 'SENIN,RABU/JUMAT', '16:00-17:30', '400.000,-/4Bulan', NULL, '2021-01-27 07:09:00'),
(2, 3, 'SENIN,RABU', '16:00-17:30', '200.000,-/4Bulan', NULL, '2021-01-27 07:09:09'),
(3, 4, 'SENIN,RABU,KAMIS,JUMAT', '16:00-17:30', '350.000,-/4Bulan', NULL, '2021-01-27 07:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `id` int(11) NOT NULL,
  `nama_kursus` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`id`, `nama_kursus`, `created_at`, `updated_at`) VALUES
(1, 'Semi Intensive 3x90 Menit', '2021-01-14 13:05:09', '2021-01-14 13:05:09'),
(2, 'Reguler 2x90 Menit', '2021-01-14 13:05:09', '2021-01-14 13:05:09'),
(3, 'Conversation 2x90 Menit', '2021-01-14 13:06:09', '2021-01-14 13:06:09'),
(4, 'Intensive 4x90 Menit', '2021-01-14 13:06:09', '2021-01-14 13:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_08_04_081115_add_id_registrasi', 2),
(4, '2014_10_12_100000_create_password_resets_table', 3),
(5, '2020_08_05_075223_create_table_biodata', 3),
(6, '2020_08_05_103214_add_is_verifikasi', 4),
(7, '2020_08_05_144725_add_role_users', 5);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `pelajaran_id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `status` enum('Lulus','Belum Lulus','Lulus TOEFL','Belum Lulus TOEFL','is taking') NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `siswa_id`, `pelajaran_id`, `nilai`, `status`, `created_at`, `updated_at`) VALUES
(1, 21, 12, 100, 'Lulus', '2022-03-15 01:52:10', '2022-03-15 01:52:10'),
(2, 31, 1, 30, 'is taking', '2022-03-15 03:40:51', '2022-03-15 03:40:51'),
(3, 25, 1, 30, 'is taking', '2022-03-21 06:08:42', '2022-03-21 06:08:42'),
(4, 31, 2, 85, 'Lulus', '2022-04-05 05:28:16', '2022-04-05 05:28:16'),
(6, 31, 9, 500, 'Lulus TOEFL', '2022-04-05 06:00:51', '2022-04-05 06:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tingkat` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id`, `nama`, `tingkat`, `created_at`, `updated_at`) VALUES
(1, 'Reguler', 'Basic 0', '2021-02-10 12:26:58', '2021-02-10 12:26:58'),
(2, 'Reguler', 'Basic 1', '2021-02-10 12:26:58', '2021-02-10 12:26:58'),
(3, 'Reguler', 'Basic 2', '2021-02-10 12:28:49', '2021-02-10 12:28:49'),
(4, 'Reguler', 'Basic 3', '2021-02-10 12:28:49', '2021-02-10 12:28:49'),
(9, 'Reguler', 'TOEFL', '2021-02-10 12:28:49', '2021-02-10 12:28:49'),
(10, 'Conversation', 'Conversation', '2021-02-10 12:30:35', '2021-02-10 12:30:35'),
(11, 'Semi-Intensive', 'Semi-Intensive', '2021-02-10 12:30:35', '2021-02-10 12:30:35'),
(12, 'Intensive', 'Intensive', '2021-02-10 12:30:35', '2021-02-10 12:30:35'),
(13, 'Reguler', 'Intermediate 1', '2021-10-29 06:22:22', '2021-10-29 06:22:22'),
(14, 'Reguler', 'Intermediate 2', '2021-10-29 06:22:22', '2021-10-29 06:22:22'),
(15, 'Reguler', 'Intermediate 3', '2021-10-29 06:22:22', '2021-10-29 06:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users` bigint(20) UNSIGNED NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `users`, `no_hp`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `kelas_id`, `foto`, `pembayaran`, `created_at`, `updated_at`) VALUES
(20, 18, '0987654377712', 'Surabaya', 'sidoarjo', '2020-08-11', 1, '886541.jpg', 'Implementasi_Pengujian_Black_Box_menggun.pdf', '2021-01-08 06:04:05', '2021-02-11 13:55:52'),
(21, 20, '0987654377712', 'Bali', 'Surabaya', '2020-11-08', 3, 'foto-profil.jpg', 'Program Pengecekan status true atau false.pdf', '2021-01-13 07:47:50', '2021-01-13 07:47:50'),
(22, 21, '0987654377799', 'Jakarta', 'Malang', '2020-12-01', 3, 'f997df63de0b93da88c2a2c4348f933f.png', 'Bot telegram.pdf', '2021-01-14 14:30:59', '2021-01-14 14:30:59'),
(23, 22, '0987654377788', 'Bandung', 'Bandung', '2020-12-06', 2, 'hiclipart.com.png', 'TugasThread.pdf', '2021-01-15 02:02:07', '2021-01-15 02:02:07'),
(24, 23, '0987654377733', 'Surabaya', 'Surabaya', '2020-12-09', 1, 'hiclipart3.png', 'KickStar2020.pdf', '2021-01-15 02:12:08', '2021-01-15 02:12:08'),
(25, 24, '0987654377710', 'Semarang', 'sidoarjo', '2021-02-27', 1, 'Screenshot_2020-10-25-07-45-43-631_com.example.myapplication.png', 'Bot telegram.pdf', '2021-02-02 05:25:58', '2021-02-12 07:32:51'),
(26, 27, '0987654377744', 'Semarang', 'Surabaya', '2021-02-10', 1, 'cat.PNG', 'tugas_meeting4.pdf', '2021-02-15 15:00:41', '2021-02-15 15:00:41'),
(27, 26, '089887766551', 'Samarinda', 'sidoarjo', '2021-02-15', 2, 'Screenshot_2020-10-25-07-45-32-282_com.example.myapplication.png', 'tugas_meeting2.pdf', '2021-02-15 15:16:40', '2021-02-15 15:16:40'),
(28, 29, '0987654377722', 'Surabaya', 'Malang', '2021-02-22', 2, 'Screenshot_2020-10-25-07-45-12-857_com.example.myapplication.png', 'tugas_meeting1.pdf', '2021-02-15 15:46:09', '2021-02-15 15:46:09'),
(29, 32, '098766667778', 'Bali', 'Bandung', '2021-10-10', 0, 'Jellyfish.jpg', '055314010_Full.pdf', '2021-10-18 07:42:25', '2021-11-05 07:29:59'),
(30, 34, '087886445123', 'Sidoarjo', 'Surabaya', '1999-05-04', 1, '1637650885.Desert.jpg', '055314010_Full.pdf', '2021-11-15 05:48:42', '2021-11-23 07:01:25'),
(31, 36, '085881709432', 'sidoarjo', 'Surabaya', '1998-10-12', 1, 'Jellyfish.jpg', '055314010_Full.pdf', '2021-11-23 07:48:19', '2021-11-23 07:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) DEFAULT NULL,
  `id_registrasi` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_pendaftaran` date DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_verifikasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `id_registrasi`, `tgl_pendaftaran`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_verifikasi`) VALUES
(10, 1, '-', '0000-00-00', 'admin', 'admin@admin.com', NULL, '$2y$10$JFdKJzteneCgK2ElMjq41O2mqGq0RdH02vVEoEg.h1LzaZT5UYbEG', NULL, NULL, NULL, NULL),
(11, 1, NULL, '0000-00-00', 'admin2', 'admin2@gmail.com', NULL, '$2y$10$SHwBURPlnyws6ciE7gt4Je2xcGv/mDEn2tFLHrlEw6AqzV9kFzAAK', NULL, '2020-10-19 11:34:40', '2020-10-19 11:34:40', NULL),
(18, NULL, 'REG-20210108125924', '2021-01-08', 'Assalamualaikum', 'salam1@gmail.com', NULL, '$2y$10$J562UDXxXkLYjnSPbmH7E.ysS/pEdyftJaGnS3OKd5LD34lFptt2i', NULL, NULL, '2021-02-12 07:38:45', 1),
(19, NULL, 'REG-20210108153905', '2021-01-08', 'hadi', 'hadi@gmail.com', NULL, '$2y$10$4xM/4QU2E7SuHz3peYquA.YT.CNofqZlWc8dfpb3D85XzlsJ0JGO2', NULL, NULL, NULL, NULL),
(20, NULL, 'REG-20210113140834', '2021-01-13', 'agung', 'agung@gmail.com', NULL, '$2y$10$tJwK4C5Y4Mhds8OMr7dmVuLmdc61ASH3xZoMROOO5H6/LwRtA/cDi', NULL, NULL, '2021-01-13 07:51:19', 1),
(21, NULL, 'REG-20210114212252', '2021-01-14', 'danu', 'danu@gmail.com', NULL, '$2y$10$F.d6IK0ii/9sBr4o3W17CeLFRj83V7jQ6IX0pPWSHjcfcB/ERbrtu', NULL, NULL, '2021-01-18 07:20:35', 1),
(22, NULL, 'REG-20210115085733', '2021-01-15', 'surya', 'surya@gmail.com', NULL, '$2y$10$k8ZpPg7FPR1k/k/WpqhRLulkAy77SxYR6KGh6w5D2StecaU1wuYJq', NULL, NULL, NULL, NULL),
(23, NULL, 'REG-20210115090851', '2021-01-15', 'qwerty', 'qwerty@gmail.com', NULL, '$2y$10$420f4MjEmYmhfqP6GlMsQO/usqfFyT6Jrcm0kLnMLSl/RW/jwsnl2', NULL, NULL, '2021-02-08 06:38:21', 1),
(24, NULL, 'REG-20210118141823', '2021-01-18', 'ivan afrison 1', 'afrison@gmail.com', NULL, '$2y$10$hMyENLCN869lr6l6KGdfbOy3R/IVYSuCysSOldoMa9cHbvFBY/Vka', NULL, NULL, '2021-02-12 07:32:51', 1),
(25, NULL, 'REG-20210210211107', '2021-02-10', 'vincent', 'vincent@gmail.com', NULL, '$2y$10$mNj86fuqRFx7kO24dJBwPuJldJFgBuUiQiEGMyErGeSaVPDWcDym2', NULL, NULL, NULL, NULL),
(26, NULL, 'REG-20210215213257', '2021-02-15', 'dani', 'dani@gmail.com', NULL, '$2y$10$/1rj9VYF71LuZUp0cd8P/uWmkjNLQ0lCVYttQt9vfnsVQ5cj1tn.6', NULL, NULL, NULL, NULL),
(27, NULL, 'REG-20210215213808', '2021-02-15', 'saiful', 'saiful@gmail.com', NULL, '$2y$10$DzKZ4kUk8FhsCcVvLzfiQePqeRjpqXLViEwtRmbyOfouGgQKjJGjO', NULL, NULL, '2021-02-18 07:07:58', 1),
(28, NULL, 'REG-20210215221826', '2021-02-15', 'sandi', 'sandi@gmail.com', NULL, '$2y$10$qYeXHL3CemXPI8HXfFlgjuFHRvY4A.mZL6u75.qpe31luqlgcG0Z2', NULL, NULL, NULL, NULL),
(29, NULL, 'REG-20210215223710', '2021-02-15', 'halimah', 'halimah@gmail.com', NULL, '$2y$10$bAYxvuIncGhF10YBpGHgRucjgfHL4iQhsP3EHkjP9GcNpe3jM3M0y', NULL, NULL, NULL, NULL),
(30, 2, 'REG-20210413122207', '2021-04-13', 'guru1', 'guru1@gmail.com', NULL, '$2y$10$RdM9czN9iHkB0ea6mi337u/rdcSG3eYO78MMFzEA/2rP/8KgLmvC2', NULL, NULL, NULL, NULL),
(31, 2, NULL, NULL, 'guru2', 'guru2@gmail.com', NULL, '$2y$10$OomAhtOke8r7DcD59RlYK.ASWq3zwzqDCdgTTgxy10mni1yFzRCKS', NULL, '2021-04-14 07:52:00', '2021-04-14 07:52:00', NULL),
(32, NULL, 'REG-20211018140744', '2021-10-18', 'kevin', 'kevin@gmail.com', NULL, '$2y$10$W7O0UQ6Ynqznc3NyTcPkx.d57umkz1LP6iAI4XmebilNGg1oEBYle', NULL, NULL, '2021-10-18 07:53:54', 1),
(33, 2, NULL, NULL, 'suteno', 'suteno@gmail.com', NULL, '$2y$10$inQaFvC6wXPShiHdpx.mceRlpCMvoLLsULepphVhcNYsRV8kz/9py', NULL, '2021-10-18 07:13:25', '2021-10-18 07:13:25', NULL),
(34, NULL, 'REG-20211115124457', '2021-11-15', 'Ahmad', 'ahmad@gmail.com', NULL, '$2y$10$J/9xC1vwAmVKuCWhnemvkepkwW.huaV1LbO.1hpd3FyFOPGpg7QWa', NULL, NULL, '2021-11-15 05:52:28', 1),
(36, NULL, 'REG-20211123144551', '2021-11-23', 'Aksan', 'aksan@gmail.com', NULL, '$2y$10$2CVvS1aA9Z0rbVloTXxbvOoOx.cFTyTfxEhZwEsBpLU7XxMQ2t.6e', NULL, NULL, '2021-11-23 07:49:41', 1),
(39, 1, NULL, NULL, 'Hadi', 'hadi123@gmail.com', NULL, '$2y$10$aYm9PtNQqawJUP3CXsC4kOdixDM2Cro2VFF0Zbjqmp86/FCyXJCHW', NULL, '2022-03-14 07:27:38', '2022-03-14 07:27:38', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_id` (`kelas_id`),
  ADD KEY `users` (`users`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users` (`users`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users` (`users`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `kursus_id` (`kursus_id`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `siswa_id` (`siswa_id`),
  ADD KEY `pelajaran_id` (`pelajaran_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users` (`users`),
  ADD KEY `id` (`id`),
  ADD KEY `kelas_id` (`kelas_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `absensi_ibfk_2` FOREIGN KEY (`users`) REFERENCES `users` (`id`);

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`users`) REFERENCES `users` (`id`);

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`users`) REFERENCES `users` (`id`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`kursus_id`) REFERENCES `kursus` (`id`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`pelajaran_id`) REFERENCES `pelajaran` (`id`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `biodata_users_foreign` FOREIGN KEY (`users`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
