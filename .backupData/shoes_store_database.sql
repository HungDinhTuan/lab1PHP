-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 12:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoes_store_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_phone` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_phone`, `created_at`, `updated_at`) VALUES
(3, 'hung dinh', 'hungtuandinhbg@gmail.com', '8fee646aae6f8e5bf07243dd9b54d289', '0968559431', '2024-02-04 10:58:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_product_table`
--

CREATE TABLE `category_product_table` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `producer` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_status` int(11) NOT NULL DEFAULT 1,
  `comment` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product_table`
--

INSERT INTO `category_product_table` (`product_id`, `product_name`, `price`, `amount`, `size`, `producer`, `created_by`, `created_at`, `updated_by`, `updated_at`, `product_status`, `comment`) VALUES
(1, 'ps4', 18000000, 50, '350x150x30', 'sony', 'hung dinh', '2024-02-13 17:13:00', 'hung dinh', '2024-02-21 23:30:00', 1, 'currency : VND, size unit : mm, status : available(1).'),
(3, 'ps5', 25000000, 50, '400x100x30', 'sony', 'hung dinh', '2024-02-14 10:24:00', 'le ha', '2024-02-21 23:48:00', 1, NULL),
(6, 'x box', 23000000, 40, '300x200x50', 'microsoft', 'hung dinh', '2024-02-22 06:47:46', NULL, NULL, 1, 'The commment is the same of the ps4.'),
(7, 'x box', 23000000, 40, '300x200x50', 'microsoft', 'hung dinh', '2024-02-22 06:48:16', NULL, NULL, 1, 'The commment is the same of the ps4.'),
(8, 'x box', 23000000, 40, '300x200x50', 'microsoft', 'hung dinh', '2024-02-22 06:48:17', NULL, NULL, 1, 'The commment is the same of the ps4.'),
(9, 'x box', 23000000, 40, '300x200x50', 'microsoft', 'hung dinh', '2024-02-22 06:48:17', NULL, NULL, 1, 'The commment is the same of the ps4.'),
(10, 'x box', 23000000, 40, '300x200x50', 'microsoft', 'hung dinh', '2024-02-22 06:48:17', NULL, NULL, 1, 'The commment is the same of the ps4.'),
(11, 'x box', 23000000, 40, '300x200x50', 'microsoft', 'hung dinh', '2024-02-22 06:48:17', NULL, NULL, 1, 'The commment is the same of the ps4.'),
(12, 'x box', 23000000, 40, '300x200x50', 'microsoft', 'hung dinh', '2024-02-22 06:48:17', NULL, NULL, 1, 'The commment is the same of the ps4.'),
(13, 'x box', 23000000, 40, '300x200x50', 'microsoft', 'hung dinh', '2024-02-22 06:48:17', NULL, NULL, 1, 'The commment is the same of the ps4.'),
(14, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(15, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(16, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(17, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(18, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(19, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(20, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(21, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(22, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(23, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(24, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(25, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(26, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(27, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(28, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(29, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(30, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(31, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(32, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.'),
(33, 'x box 2023', 31000000, 15, '250x250x50', 'microsoft', 'hung dinh', '2024-02-22 06:50:22', NULL, NULL, 1, 'The commment is the same of the x box.');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_02_04_104624_create_tbl_admin_table', 1),
(5, '2024_02_13_143732_create_tbl_category_product', 2),
(6, '2024_02_13_152012_create_tbl_category_product', 3),
(7, '2024_02_13_172231_create_tbl_category_product', 4),
(8, '2024_02_13_172923_create_tbl_category_product', 5);

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
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category_product_table`
--
ALTER TABLE `category_product_table`
  ADD PRIMARY KEY (`product_id`);

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
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_product_table`
--
ALTER TABLE `category_product_table`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
