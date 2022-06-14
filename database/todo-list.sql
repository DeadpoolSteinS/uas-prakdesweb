-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2022 at 07:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo-list`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `GRUP`
--

CREATE TABLE `GRUP` (
  `ID_GRUP` decimal(10,0) NOT NULL,
  `NAMA_GRUP` varchar(250) NOT NULL,
  `CREATEDAT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATEDAT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `KATEGORI`
--

CREATE TABLE `KATEGORI` (
  `ID_KATEGORI` decimal(10,0) NOT NULL,
  `NAMA_KATEGORI` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `KATEGORI`
--

INSERT INTO `KATEGORI` (`ID_KATEGORI`, `NAMA_KATEGORI`, `created_at`, `updated_at`) VALUES
('1', 'Very Urgent ', '2022-06-03 02:13:50', '0000-00-00 00:00:00'),
('2', 'Urgent', '2022-06-03 02:13:50', '0000-00-00 00:00:00'),
('3', 'Normal', '2022-06-03 02:13:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `LIST`
--

CREATE TABLE `LIST` (
  `ID_LIST` decimal(10,0) NOT NULL,
  `NAMA_LIST` varchar(250) NOT NULL,
  `CREATEDAT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATEDAT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `NOTE`
--

CREATE TABLE `NOTE` (
  `ID_NOTE` decimal(10,0) NOT NULL,
  `ID_TASK` decimal(10,0) DEFAULT NULL,
  `CATATAN` varchar(250) NOT NULL,
  `CREATEDAT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATEDAT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `STATUS`
--

CREATE TABLE `STATUS` (
  `ID_STATUS` decimal(10,0) NOT NULL,
  `NAMA_STATUS` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `STATUS`
--

INSERT INTO `STATUS` (`ID_STATUS`, `NAMA_STATUS`, `created_at`, `updated_at`) VALUES
('1', 'SEDANG DIKERJAKAN', '2022-06-01 23:19:02', '0000-00-00 00:00:00'),
('2', 'SELESAI', '2022-06-01 23:19:05', '0000-00-00 00:00:00'),
('3', 'BELUM DIKERJAKAN', '2022-06-01 23:19:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `STEP`
--

CREATE TABLE `STEP` (
  `ID_STEP` decimal(10,0) NOT NULL,
  `ID_TASK` decimal(10,0) DEFAULT NULL,
  `NAMA_STEP` varchar(250) NOT NULL,
  `CREATEDAT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UPDATEDAT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `TASK`
--

CREATE TABLE `TASK` (
  `ID_TASK` int(10) NOT NULL,
  `ID_NOTE` decimal(10,0) DEFAULT NULL,
  `ID_STATUS` decimal(10,0) DEFAULT 3,
  `ID_REPEAT` decimal(10,0) DEFAULT NULL,
  `ID_GRUP` decimal(10,0) DEFAULT NULL,
  `ID_LIST` decimal(10,0) DEFAULT NULL,
  `ID_KATEGORI` decimal(10,0) DEFAULT NULL,
  `NAMA_TASK` varchar(250) NOT NULL,
  `IMPORTANT` smallint(6) DEFAULT NULL,
  `CREATEDAT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT NULL,
  `DEADLINE` datetime DEFAULT NULL,
  `MY_DAY` tinyint(1) DEFAULT 0,
  `ID_USER` int(11) NOT NULL,
  `TEMPAT_PENGUMPULAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `TASK`
--

INSERT INTO `TASK` (`ID_TASK`, `ID_NOTE`, `ID_STATUS`, `ID_REPEAT`, `ID_GRUP`, `ID_LIST`, `ID_KATEGORI`, `NAMA_TASK`, `IMPORTANT`, `CREATEDAT`, `created_at`, `updated_at`, `DEADLINE`, `MY_DAY`, `ID_USER`, `TEMPAT_PENGUMPULAN`) VALUES
(1, NULL, '3', NULL, NULL, NULL, NULL, 'Task - 1 Membuat template', NULL, '2022-06-03 03:35:10', '2022-05-29 02:36:57', '2022-06-01 23:02:32', '2022-05-01 00:00:00', 0, 0, NULL),
(2, NULL, '3', NULL, NULL, NULL, NULL, 'Task 2 - Kerjakan task 1', NULL, '2022-06-03 05:47:49', '2022-06-02 00:23:09', '2022-06-02 22:47:49', NULL, 1, 0, NULL),
(3, NULL, '3', NULL, NULL, NULL, NULL, 'Task 3 - Selesaikan task 2', NULL, '2022-06-03 03:35:17', '2022-06-02 00:29:47', '2022-06-02 00:33:54', NULL, 0, 0, NULL),
(4, NULL, '3', NULL, NULL, NULL, NULL, 'Task 6 - Aji Muhammad Zapar', NULL, '2022-06-03 03:35:19', '2022-06-02 00:30:52', '2022-06-02 00:33:50', NULL, 0, 0, NULL),
(5, NULL, '1', NULL, NULL, NULL, NULL, 'Task 5 - Kerjakan semua task', NULL, '2022-06-03 01:40:54', '2022-06-02 00:40:47', '2022-06-02 18:40:54', NULL, 0, 0, NULL),
(6, NULL, '2', NULL, NULL, NULL, NULL, 'Task 5 - Kerjakan semua task', 1, '2022-06-03 02:12:56', '2022-06-02 00:41:14', '2022-06-02 19:12:56', NULL, 0, 0, NULL),
(7, NULL, '1', NULL, NULL, NULL, NULL, 'Task - 9 Add task', NULL, '2022-06-03 01:45:42', '2022-06-02 00:42:07', '2022-06-02 18:45:42', NULL, 0, 0, NULL),
(8, NULL, '1', NULL, NULL, NULL, NULL, 'Task 100 - Update task', NULL, '2022-06-03 01:45:47', '2022-06-02 00:43:14', '2022-06-02 18:45:47', NULL, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `USER`
--

CREATE TABLE `USER` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `USER`
--

INSERT INTO `USER` (`user_id`, `nama`, `tanggal_lahir`, `username`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, 'aji muhammad zapar', '2000-08-05', 'amzar', 'aji@gmail.com', 'ajizapar123', '2022-05-25 15:38:24', '2022-05-25 08:06:21'),
(2, 'Aji Muhammad Zapar`', '2001-08-05', 'amzar', 'aji.muhammad@upi.edu', '$2y$10$BfVOYftEKUF6sba.aAplAueRRMGRreZCAs7HdevXD.Rm5/su311.y', '2022-05-25 09:19:43', '2022-05-25 09:19:43'),
(3, 'Asep', '2002-08-05', 'asep', 'asep@gmail.com', '$2y$10$bmo3DDskYlsT5LpXfA15oex1NHI5jKKTEEqRzaAJ91xkAEekoJxLi', '2022-05-25 09:41:39', '2022-05-25 09:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_picture` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `profile_picture`) VALUES
(1, 'Aji Muhammad', 'ajizapar@gmail.com', NULL, '$2y$10$noUOGqrB8Elz2jQAllC1Y.DCFURXyZIReRFfdZUiaxnOWQaDCBC.e', NULL, '2022-05-25 09:49:46', '2022-05-25 09:49:46', NULL),
(2, 'Aji Muhammad Zapar', 'aji.muhammad@upi.edu', NULL, '$2y$10$3UsCgAAKksyV0l/GLDWbFewIfGBfud7N1OmI/4UJag6.lzGKnt8uW', NULL, '2022-06-01 15:41:55', '2022-06-01 15:41:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `GRUP`
--
ALTER TABLE `GRUP`
  ADD PRIMARY KEY (`ID_GRUP`);

--
-- Indexes for table `KATEGORI`
--
ALTER TABLE `KATEGORI`
  ADD PRIMARY KEY (`ID_KATEGORI`);

--
-- Indexes for table `LIST`
--
ALTER TABLE `LIST`
  ADD PRIMARY KEY (`ID_LIST`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `NOTE`
--
ALTER TABLE `NOTE`
  ADD PRIMARY KEY (`ID_NOTE`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `STATUS`
--
ALTER TABLE `STATUS`
  ADD PRIMARY KEY (`ID_STATUS`);

--
-- Indexes for table `STEP`
--
ALTER TABLE `STEP`
  ADD PRIMARY KEY (`ID_STEP`),
  ADD KEY `RELATIONSHIP_2_FK` (`ID_TASK`);

--
-- Indexes for table `TASK`
--
ALTER TABLE `TASK`
  ADD PRIMARY KEY (`ID_TASK`);

--
-- Indexes for table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`user_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `TASK`
--
ALTER TABLE `TASK`
  MODIFY `ID_TASK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `USER`
--
ALTER TABLE `USER`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
