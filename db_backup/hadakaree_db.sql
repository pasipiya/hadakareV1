-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 03:29 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hadakaree`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saloon_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catergory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_from` datetime NOT NULL,
  `time_to` datetime NOT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `saloon_id`, `customer_name`, `catergory`, `time_from`, `time_to`, `date`, `description`, `created_at`, `updated_at`, `status`, `contact_number`, `client_email`) VALUES
(4, '35', '35', 'efef', 'efwef', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, '', NULL, '2020-02-04 07:33:37', 1, '0125455', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `pic`, `category_name`, `category_des`, `status`, `created_at`, `updated_at`) VALUES
(3, '1580158074.jpeg', 'sdsf', 'sdsdasdadas', NULL, '2020-01-27 15:17:54', '2020-01-27 15:17:54'),
(4, '1580296791.jpg', 'sdsf', 'sdasd', '1', '2020-01-29 05:49:51', '2020-02-04 01:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saloon_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `pic`, `saloon_id`, `user_id`, `description`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(4, '1580798878.jpg', 'Saloon 1', '35', NULL, '0', 'Nail', '2020-02-04 01:17:58', '2020-02-04 01:21:52'),
(5, '1580800478.jpeg', 'awdwd', '35', NULL, NULL, 'Nail', '2020-02-04 01:44:38', '2020-02-04 01:44:38'),
(6, '1580806141.jpeg', 'awdwd', '35', NULL, NULL, 'sdsf', '2020-02-04 03:19:01', '2020-02-04 03:19:01'),
(7, '1580806244.jpeg', 'awdwd', '35', NULL, NULL, 'sdsf', '2020-02-04 03:20:44', '2020-02-04 03:20:44'),
(8, '1580806325.jpeg', 'awdwd', '35', NULL, NULL, 'sdsf', '2020-02-04 03:22:05', '2020-02-04 03:22:05');

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
(3, '2019_11_12_112841_create_customer_table', 1),
(4, '2019_11_15_110156_create_roles_table', 2),
(5, '2019_11_15_111636_add_roll_id_to_user', 3),
(6, '2019_11_19_172459_create_booking_table', 4),
(7, '2019_11_22_221719_create_saloon_table', 5),
(8, '2020_01_27_173104_create_gallery', 6),
(9, '2020_01_27_174819_create_category', 7),
(10, '2020_01_27_175139_create_package', 8);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saloon_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package_name`, `price`, `saloon_id`, `user_id`, `category_id`, `description`, `pic`, `status`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Pasindu Piyathilaka', '100', 'awdwd', '35', 'sdsf', NULL, '1580806690.jpeg', '0', NULL, '2020-02-04 03:28:10', '2020-02-04 03:33:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('piyathilaka10@gmail.com', '$2y$10$FwCfYOtPFX2zjZrljkTgCOo7ybZja8UeSPhIkxscSatlYPSOi9TLG', '2019-11-12 06:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, '2020-01-26 06:55:00', '2020-01-26 06:55:00'),
(2, 'Saloon Owner', '', NULL, NULL),
(3, 'User', '', NULL, NULL),
(18, 'test', NULL, '2019-11-23 03:29:26', '2019-11-23 03:29:26'),
(21, 'thariu', NULL, '2019-11-23 03:40:04', '2019-11-23 03:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `saloon`
--

CREATE TABLE `saloon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `saloon_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `saloon`
--

INSERT INTO `saloon` (`id`, `saloon_name`, `address`, `logo`, `status`, `created_at`, `updated_at`, `user_id`, `pic`, `city`, `local_area`) VALUES
(31, '26', 'dgffd', 'zxczsc', NULL, NULL, NULL, 0, NULL, '', ''),
(32, 'ssds', 'Green Garden, Konpola Road, Doratiyawa', NULL, NULL, '2020-01-26 14:49:08', '2020-01-26 14:49:08', NULL, NULL, '', ''),
(35, 'awdwd', 'awdwad', NULL, '1', '2020-01-26 14:59:58', '2020-01-27 11:49:16', 35, NULL, '', ''),
(38, 'Pasindu Piyathilaka', 'Green Garden, Konpola Road, Doratiyawa', NULL, '1', '2020-01-29 05:30:07', '2020-01-29 11:02:11', 35, NULL, NULL, NULL),
(39, 'Pasindu Piyathilaka', 'Green Garden, Konpola Road, Doratiyawa', NULL, NULL, '2020-01-29 05:30:29', '2020-01-29 05:30:29', 35, NULL, 'Kurunegala', NULL),
(40, 'Pasindu Piyathilaka', 'Green Garden, Konpola Road, Doratiyawa', '1580295734.jpg', '1', '2020-01-29 05:32:14', '2020-01-29 11:10:13', 35, NULL, 'Kurunegala', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp(6) NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '$2y$10$6n4Fw/anlAn.Y2H4qph0yOlhII7MSVdx8035QmKc6GaPaPODN.Tw2',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '3',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `address`, `contact`, `pic`) VALUES
(35, 'Pasindu Piyathilaka', 'piyathilaka10@gmail.com', NULL, '$2y$10$L/DIt9BQyWafD4pH9knyoOoSv5G6OC69KmIK/QbN/8AWLq1647kse', NULL, NULL, '2020-01-29 16:34:45.000000', '2', 'Green Garden, Konpola Road, Doratiyawa', '0711641942', '1580315685.jpg'),
(37, 'piyathilaka10@gmail.com', 'piyathilakaczx10@gmail.com', NULL, '$2y$10$6n4Fw/anlAn.Y2H4qph0yOlhII7MSVdx8035QmKc6GaPaPODN.Tw2', NULL, '2020-01-26 11:25:38.000000', '2020-01-26 11:25:38.000000', '1', NULL, NULL, NULL),
(38, 'adeerf', 'piyathilakwdawdawdeawa10@gmail.com', NULL, '$2y$10$6n4Fw/anlAn.Y2H4qph0yOlhII7MSVdx8035QmKc6GaPaPODN.Tw2', NULL, '2020-01-26 12:21:45.000000', '2020-01-26 12:21:45.000000', '18', NULL, NULL, NULL),
(39, 'sdfsds', 'piyathidadlaka10@gmail.com', NULL, '$2y$10$7Geon0VNo2NUDLfTXFFBDOnjcmghDMewzk/zAm40olyp1K.inFU4u', NULL, '2020-01-26 19:59:49.000000', '2020-01-26 19:59:49.000000', '2', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saloon`
--
ALTER TABLE `saloon`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `saloon`
--
ALTER TABLE `saloon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
