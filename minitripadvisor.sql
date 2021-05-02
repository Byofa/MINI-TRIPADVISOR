-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2021 at 08:32 PM
-- Server version: 8.0.23-0ubuntu0.20.10.1
-- PHP Version: 7.2.34-18+ubuntu20.10.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minitripadvisor`
--

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` bigint UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade` tinyint NOT NULL,
  `place_id` bigint UNSIGNED NOT NULL,
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `comment`, `grade`, `place_id`, `users_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Miaou', 5, 1, 5, '2021-05-02 16:23:34', '2021-05-02 16:23:34', NULL),
(2, 'Miaou', 4, 2, 5, '2021-05-02 16:24:34', '2021-05-02 16:24:34', NULL),
(3, 'Miaou', 3, 3, 5, '2021-05-02 16:24:55', '2021-05-02 16:24:55', NULL),
(4, 'Miaou', 4, 4, 5, '2021-05-02 16:25:05', '2021-05-02 16:25:05', NULL),
(5, 'A lot of things to see I recomand!', 5, 2, 3, '2021-05-02 16:25:46', '2021-05-02 16:25:46', NULL),
(6, 'Queue too long we gave up.', 3, 3, 3, '2021-05-02 16:26:07', '2021-05-02 16:26:07', NULL),
(7, 'A lot of Interesting Exposition and events.', 4, 4, 2, '2021-05-02 16:26:49', '2021-05-02 16:26:49', NULL),
(8, 'I would love too work here.', 5, 1, 2, '2021-05-02 16:27:30', '2021-05-02 16:27:30', NULL),
(9, 'Impossible too see all in one day.', 1, 2, 4, '2021-05-02 16:28:17', '2021-05-02 16:28:17', NULL),
(10, 'What a beauty!!!', 5, 3, 4, '2021-05-02 16:28:32', '2021-05-02 16:28:32', NULL),
(11, 'Too expensive.', 2, 4, 4, '2021-05-02 16:28:48', '2021-05-02 16:28:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2021_04_29_215754_create_place_table', 1),
(3, '2021_04_29_215805_create_grade_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` int NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `name`, `address`, `city`, `zipcode`, `country`, `users_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Maison Futari', 'Station F', 'Paris', 75013, 'France', 5, '2021-05-02 16:21:39', '2021-05-02 16:21:39', NULL),
(2, 'Louvre', 'Tuileries', 'Paris', 75002, 'France', 5, '2021-05-02 16:22:17', '2021-05-02 16:22:17', NULL),
(3, 'Tour Eiffel', 'Champs de Mars', 'Paris', 75001, 'France', 5, '2021-05-02 16:23:00', '2021-05-02 16:23:00', NULL),
(4, 'Palais Tokyo', 'Trocadero', 'Paris', 75008, 'France', 5, '2021-05-02 16:23:23', '2021-05-02 16:23:23', NULL),
(5, 'Added with MaisonFutari User', 'Staion F', 'Paris', 75013, 'France', 1, '2021-05-02 16:29:47', '2021-05-02 16:29:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'MaisonFutari', '$2y$10$0/s2/CMsXHXn/.GEuqzKZOIdyi4ijsXcVU4XlPmWfglAY3aL2D3uu', 'bonjour@maisonfutari.com', '2021-05-02 16:17:59', '2021-05-02 16:17:59'),
(2, 'fabio', '$2y$10$dfjWHIVU1XHMhRxdfHYbvucjc.pk3eRuzlvHcwKGQz7oR/tZCX1re', 'fbiomach@gmail.com', '2021-05-02 16:18:22', '2021-05-02 16:18:22'),
(3, 'Eleazar', '$2y$10$lxLJOfPi8E7Liqp9JgfrwepWR4or.pec/HbYZpvcUfXiWMKt0KkIS', 'eleazar@kadoche.com', '2021-05-02 16:18:57', '2021-05-02 16:18:57'),
(4, 'julia', '$2y$10$lPvfTX9dNsYORrfpw7vkAuSkcVJ0d.yTOZ8.1zLPVt0iHpNemg65u', 'julia@ejma.com', '2021-05-02 16:20:27', '2021-05-02 16:20:27'),
(5, 'marceline', '$2y$10$Di6DLf.ODpjZGXUh68EP2e2DCPeITZnpaiFh3qIKKvydhRvHsrt.G', 'marceline@le-chat.com', '2021-05-02 16:20:59', '2021-05-02 16:20:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grade_place_id_foreign` (`place_id`),
  ADD KEY `grade_users_id_foreign` (`users_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place_users_id_foreign` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `grade_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`),
  ADD CONSTRAINT `grade_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `place_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
