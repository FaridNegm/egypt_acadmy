-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2019 at 03:59 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egypt_acadmy`
--

-- --------------------------------------------------------

--
-- Table structure for table `allusers`
--

CREATE TABLE `allusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'df.jpg',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allusers`
--

INSERT INTO `allusers` (`id`, `name`, `email`, `password`, `phone`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'farid negm', 'faridnegm44@gmail.com', '$2y$10$9MH9e7tZGJX2jCrEL/GfDOO3bnbWgzhQDTpijmEvq.yQtBwMWfAqO', 1117903055, '1551972592.png', '1', '2019-03-07 13:29:52', '2019-03-07 13:29:52');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_06_124526_create_allusers_table', 2),
(4, '2019_03_07_142551_create_settings_table', 2),
(5, '2019_03_07_142739_create_services_table', 2),
(6, '2019_03_07_142840_create_teams_table', 2),
(7, '2019_03_07_142919_create_works_table', 2),
(8, '2019_03_07_143121_create_reserves_table', 2);

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
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documentation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`id`, `name`, `time`, `price`, `degree`, `documentation`, `status`, `created_at`, `updated_at`) VALUES
(1, 'دورة التنمية البشرية', 'شهر', '1000', 'شهادة معتمدة', 'موثقة من الخارجية', '1', '2019-03-08 11:36:37', '2019-03-08 11:36:37'),
(2, 'دورة التمريض', 'شهر', '900', 'شهادة معتمدة', 'موثقة من الخارجية', '1', '2019-03-08 11:37:05', '2019-03-08 11:37:05'),
(3, 'دورة الحاسب الاَلي', '2 شهر', '1100', 'شهادة معتمدة', 'موثقة من الخارجية', '1', '2019-03-08 11:37:44', '2019-03-08 11:37:44'),
(4, 'دورة المساحة', '3 شهر', '2000', 'شهادة معتمدة', 'موثقة من الخارجية', '1', '2019-03-08 11:38:15', '2019-03-08 11:38:15'),
(5, 'دورة السياحة', 'شهر', '1000', 'شهادة معتمدة', 'موثقة من الخارجية', '1', '2019-03-08 11:38:42', '2019-03-08 11:38:42'),
(6, 'دورة الصحافة والإعلام', '2 شهر', '900', 'شهادة معتمدة', 'موثقة من الخارجية', '1', '2019-03-08 11:38:59', '2019-03-08 11:38:59'),
(7, 'دورة العلاقات العامة', '3 شهر', '2000', 'شهادة معتمدة', 'موثقة من الخارجية', '1', '2019-03-08 11:39:22', '2019-03-08 11:39:22');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'دورة التنمية البشرية', 'يمكنك الاَن الحصول علي الدورة وشهادات معتمدة من أكاديمية مصر العربية فقط بادر بالحجز الاَن.', 'df.jpg', '1', '2019-03-08 11:17:00', '2019-03-08 11:17:00'),
(2, 'دورة الصحافة والإعلام', 'يمكنك الاَن الحصول علي الدورة وشهادات معتمدة من أكاديمية مصر العربية فقط بادر بالحجز الاَن.', 'df.jpg', '1', '2019-03-08 11:17:33', '2019-03-08 11:17:33'),
(3, 'دورة المساحة', 'يمكنك الاَن الحصول علي الدورة وشهادات معتمدة من أكاديمية مصر العربية فقط بادر بالحجز الاَن.', 'df.jpg', '1', '2019-03-08 11:17:48', '2019-03-08 11:17:48'),
(4, 'دورة التمريض', 'يمكنك الاَن الحصول علي الدورة وشهادات معتمدة من أكاديمية مصر العربية فقط بادر بالحجز الاَن.', 'df.jpg', '1', '2019-03-08 11:19:05', '2019-03-08 11:19:05'),
(5, 'دورة الحاسب الاَلي', 'يمكنك الاَن الحصول علي الدورة وشهادات معتمدة من أكاديمية مصر العربية فقط بادر بالحجز الاَن.', 'df.jpg', '1', '2019-03-08 11:19:26', '2019-03-08 11:19:26'),
(6, 'دورة السياحة', 'يمكنك الاَن الحصول علي الدورة وشهادات معتمدة من أكاديمية مصر العربية فقط بادر بالحجز الاَن.', 'df.jpg', '1', '2019-03-08 11:19:44', '2019-03-08 11:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinterest` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linked_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'farid negm', 'web developer', 'Pellentesque elementum dapibus convallis. Vivamus eget finibus massa.', '1552035583.jpg', '1', '2019-03-08 06:47:53', '2019-03-08 06:47:53'),
(3, 'Asmaa Negm', 'android', 'Pellentesque elementum dapibus convallis. Vivamus eget finibus massa.', '1552035647.jpg', '1', '2019-03-08 07:00:47', '2019-03-08 07:00:47'),
(4, 'Aya El bialy', 'web design', 'web design web design web design web design web design web design', '1552061259.jpg', '1', '2019-03-08 14:07:39', '2019-03-08 14:07:39'),
(5, 'Mahmoud', 'Ios Developer', 'Ios Developer Ios Developer Ios Developer Ios Developer Ios Developer Ios Developer Ios Developer', '1552061294.jpg', '1', '2019-03-08 14:08:14', '2019-03-08 14:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'farid negm', 'farid@gmail.com', 0, NULL, '111111111', NULL, NULL, NULL),
(2, 'farid negm', 'faridnegm44@gmail.com', 1, NULL, '$2y$10$jwqpGYDTx5CQlNru6G2k5e95T3tupsmW/vUn9KECjzpGH6/klppzi', NULL, '2019-03-08 17:23:33', '2019-03-08 17:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `title`, `section`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'فاعليات تدريب التنمية البشرية', 'تنميه_بشريه', 'فاعليات تدريب التنمية البشرية فاعليات تدريب التنمية البشرية', '1551988025.jpg', '1', '2019-03-07 17:47:05', '2019-03-07 17:47:05'),
(2, 'دورة المساحه', 'حاسب_الي', 'فاعليات تدريب التنمية البشريةفاعليات تدريب التنمية البشرية فاعليات تدريب التنمية البشرية', '1551988677.jpg', '1', '2019-03-07 17:50:13', '2019-03-07 17:50:13'),
(3, 'فاعليات تدريب المساحة', 'مساحه', 'فاعليات تدريب المساحة فاعليات تدريب المساحة فاعليات تدريب المساحة', '1552058235.jpg', '1', '2019-03-08 13:17:15', '2019-03-08 13:17:15'),
(4, 'توزيع شهادات دورة الصحافة', 'صحافه', 'توزيع شهادات دورة الصحافة توزيع شهادات دورة الصحافة توزيع شهادات دورة الصحافة', '1552058277.jpg', '1', '2019-03-08 13:17:57', '2019-03-08 13:17:57'),
(5, 'دورات التمريض', 'تمريض', 'دورات التمريض دورات التمريض دورات التمريض دورات التمريض دورات التمريض', '1552058331.jpg', '1', '2019-03-08 13:18:51', '2019-03-08 13:18:51'),
(6, 'دورة الصحافة', 'صحافه', 'دورة الصحافة  دورة الصحافة  دورة الصحافة  دورة الصحافة  دورة الصحافة  دورة الصحافة', '1552058419.jpg', '1', '2019-03-08 13:20:19', '2019-03-08 13:20:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allusers`
--
ALTER TABLE `allusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `allusers_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allusers`
--
ALTER TABLE `allusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reserves`
--
ALTER TABLE `reserves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
