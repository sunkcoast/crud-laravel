-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2025 at 09:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jeniskelamin` enum('cowo','cewe') NOT NULL,
  `notelepon` bigint(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `nama`, `jeniskelamin`, `notelepon`, `foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test1', 'cewe', 123, 'GeTkzYeXMAAmkeP1.jpg', '2025-01-21 11:00:54', '2025-01-28 05:29:09', '2025-01-28 05:29:09'),
(2, 'test2', 'cowo', 123, 'GeTkzYeXMAAmkeP1.jpg', '2025-01-21 11:01:37', '2025-01-28 05:29:12', '2025-01-28 05:29:12'),
(3, 'ddd', 'cowo', 123, 'GeTkzYeXMAAmkeP1.jpg', '2025-01-21 11:09:41', '2025-01-28 05:29:14', '2025-01-28 05:29:14'),
(4, 'ddd', 'cewe', 123, 'GeTkzYeXMAAmkeP1.jpg', '2025-01-21 11:09:48', '2025-01-28 05:29:17', '2025-01-28 05:29:17'),
(5, 'ddd4', 'cowo', 123123, 'GeTkzYeXMAAmkeP1.jpg', '2025-01-21 11:10:01', '2025-01-28 05:29:20', '2025-01-28 05:29:20'),
(8, 'dadang', 'cowo', 123, 'GeTkzYeXMAAmkeP1.jpg', '2025-01-26 15:19:59', '2025-01-26 08:20:05', '2025-01-26 15:20:05'),
(9, 'dadaw', 'cowo', 123, 'GeTkzYeXMAAmkeP1.jpg', '2025-01-26 08:45:52', '2025-01-28 05:29:23', '2025-01-28 05:29:23'),
(10, '4134', 'cewe', 12323, 'fotopegawai/1737906466_GeTkzYeXMAAmkeP1.jpg', '2025-01-26 08:47:45', '2025-01-28 05:30:33', '2025-01-28 05:30:33'),
(11, 'agus1', 'cowo', 111, 'fotopegawai/1737906778_GeTkzYeXMAAmkeP1.jpg', '2025-01-26 08:52:58', '2025-01-26 08:53:18', '2025-01-26 08:53:18'),
(12, 'ucup123', 'cewe', 123, 'fotopegawai/1738067401_GeTkzYeXMAAmkeP1.jpg', '2025-01-28 05:30:01', '2025-01-29 00:50:51', NULL),
(13, 'udin', 'cewe', 131, 'fotopegawai/1738067416_GeTkzYeXMAAmkeP1.jpg', '2025-01-28 05:30:16', '2025-01-28 05:30:16', NULL),
(14, 'sanusi', 'cowo', 123, 'fotopegawai/1738067426_GeTkzYeXMAAmkeP1.jpg', '2025-01-28 05:30:26', '2025-01-29 00:58:30', '2025-01-29 00:58:30'),
(15, 'meng', 'cowo', 123, 'C:\\Program Files\\Xampp\\tmp\\php4A30.tmp', '2025-01-28 05:30:47', '2025-01-28 05:31:43', '2025-01-28 05:31:43'),
(16, 'sigmeow', 'cowo', 123, 'fotopegawai/1738067474_GeTkzYeXMAAmkeP1.jpg', '2025-01-28 05:31:14', '2025-01-28 05:31:14', NULL),
(17, 'mengg', 'cowo', 123, 'fotopegawai/1738067517_GeTkzYeXMAAmkeP1.jpg', '2025-01-28 05:31:57', '2025-01-28 05:31:57', NULL),
(18, 'dadang', 'cowo', 123, 'fotopegawai/1738136899_GeTkzYeXMAAmkeP1.jpg', '2025-01-29 00:48:19', '2025-01-29 00:48:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2025_01_21_154123_create_users_table', 2),
(20, '2014_10_12_000000_create_users_table', 3),
(21, '2014_10_12_100000_create_password_reset_tokens_table', 3),
(22, '2019_08_19_000000_create_failed_jobs_table', 3),
(23, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(24, '2025_01_16_164333_create_employees_table', 3),
(26, '2025_01_21_165115_create_users_table', 4),
(27, '2025_01_22_144243_add_role_users_table', 5),
(28, '2025_01_26_150351_add_deleted_at_to_users_table', 6),
(29, '2025_01_26_151903_add_deleted_at_to_employees_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'users',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `deleted_at`) VALUES
(1, 'data', 'data@data.com', '$2y$10$6QFm67gl1pT5bCga4ivuZeJlnZI76/HKfJvQs.V1a3s0nBswQt0bi', NULL, '2025-01-21 10:48:05', '2025-01-21 10:48:05', 'users', NULL),
(2, 'admin', 'admin@admin.com', '$2y$10$2LjwpqdtmrWnKMJ/BdCz3ugMEgyk7aW6gRD9J9yeHESgWLYjq2ovm', NULL, '2025-01-22 07:46:34', '2025-01-22 07:46:34', 'admin', NULL),
(4, 'beta', 'beta@beta.com', '$2y$10$gMwEb9VT8lRixOeh8t3pouR3Gj0mhuwlK5RgrJmkQ.JAlZo8eAsGm', NULL, '2025-01-28 05:14:07', '2025-01-28 05:14:07', 'users', NULL),
(5, 'caca', 'caca@gmail.com', '$2y$10$zI0Uopyc3Epsx4wmS2oRp.VmOrVASJbtIRIHlE7mLwSLheVLVi6O2', NULL, '2025-01-28 05:16:39', '2025-01-28 05:16:39', 'users', NULL),
(6, 'agus', 'agus@agus.com', '$2y$10$a9zyfkaojJLFrihg3EgqjOTx5VaFfroSUKQuzjXvADDOVLO4MUzja', NULL, '2025-01-28 05:17:25', '2025-01-28 05:17:25', 'users', NULL),
(7, 'dadang', 'dadang@dadang.com', '$2y$10$55k.U8waMCRLHih6c8GEWeaHPoj3yBcaypw/Duc6FrZxiY3ZX41Ga', NULL, '2025-01-28 05:18:58', '2025-01-28 05:18:58', 'users', NULL),
(8, 'omega', 'omega@omega.com', '$2y$10$QFCWXKLMfoVBlgXoi.RE3OIC5cifMjj2z5pUkMiwCBy77BavAPuOu', NULL, '2025-01-29 00:43:09', '2025-01-29 00:43:09', 'users', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
