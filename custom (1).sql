-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 02:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `custom`
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
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zipcode` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nameIncorporatedLogo` varchar(255) NOT NULL,
  `sloganIncorporatedLogo` varchar(255) DEFAULT NULL,
  `descLogo` varchar(255) NOT NULL,
  `listDescOfProducts` varchar(255) NOT NULL,
  `visionFlogoName` varchar(255) NOT NULL,
  `visionFlogo` varchar(1000) DEFAULT NULL,
  `logoColorName` varchar(255) NOT NULL,
  `logoColor` varchar(1000) DEFAULT NULL,
  `logoFontName` varchar(255) DEFAULT NULL,
  `logoFont` varchar(1000) DEFAULT NULL,
  `interests` varchar(255) DEFAULT NULL,
  `modern` varchar(255) DEFAULT NULL,
  `playful` varchar(255) DEFAULT NULL,
  `feminine` varchar(255) DEFAULT NULL,
  `sensible` varchar(255) DEFAULT NULL,
  `modern1` varchar(255) DEFAULT NULL,
  `youthful` varchar(255) DEFAULT NULL,
  `serious` varchar(255) DEFAULT NULL,
  `masculine` varchar(255) DEFAULT NULL,
  `luxurious` varchar(255) DEFAULT NULL,
  `tgAudienece` varchar(255) NOT NULL,
  `brandStoryName` varchar(255) NOT NULL,
  `brandStory` varchar(1000) DEFAULT NULL,
  `webUrl` varchar(255) NOT NULL,
  `avoid` varchar(255) NOT NULL,
  `additionalComment` varchar(255) NOT NULL,
  `hearaboutservices` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `fname`, `surname`, `payment`, `companyname`, `address`, `city`, `country`, `zipcode`, `email`, `nameIncorporatedLogo`, `sloganIncorporatedLogo`, `descLogo`, `listDescOfProducts`, `visionFlogoName`, `visionFlogo`, `logoColorName`, `logoColor`, `logoFontName`, `logoFont`, `interests`, `modern`, `playful`, `feminine`, `sensible`, `modern1`, `youthful`, `serious`, `masculine`, `luxurious`, `tgAudienece`, `brandStoryName`, `brandStory`, `webUrl`, `avoid`, `additionalComment`, `hearaboutservices`, `updated_at`, `created_at`) VALUES
(227, 'Majid', 'shah', 'Paypal', 'codify', 'islamambad', 'islambad', 'Pakistan', 4399, 'shahmajid508@gmail.com', 'majid shah', 'Et reiciendis omnis', 'Et totam veniam tempora neque autem do', 'Quo qui doloremque sunt ut', 'Baxter Pugh', '[\"https:\\/\\/www.dropbox.com\\/s\\/ai60g5wv1cclitt\\/1646811372265.jpg?dl=1\",\"https:\\/\\/www.dropbox.com\\/s\\/jpbienum70xow5e\\/164681137771896699_2542690432453872_5089500610416345088_n.jpg?dl=1\"]', 'Chanda Oneill', '[\"https:\\/\\/www.dropbox.com\\/s\\/8n2sk0hc10yvfs3\\/1646811383Capture.PNG?dl=1\",\"https:\\/\\/www.dropbox.com\\/s\\/ximrn6xb2sx4tck\\/1646811388IMG_0592.jpg?dl=1\"]', 'Alika Stanley', '[\"https:\\/\\/www.dropbox.com\\/s\\/tkuqsypamysfr0y\\/1646811401IMG_0599.jpg?dl=1\",\"https:\\/\\/www.dropbox.com\\/s\\/grfbuf7f41s1rh5\\/1646811406IMG_0958.jpg?dl=1\"]', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, 'Sunt deserunt optio', 'SJJS', '[\"https:\\/\\/www.dropbox.com\\/s\\/ksb11i7ltbij0bz\\/164681141129571174_1719813778109651_1955397522694406670_n.jpg?dl=1\",\"https:\\/\\/www.dropbox.com\\/s\\/9z409lzmwijoyhs\\/1646811415IMG_0952.jpg?dl=1\"]', 'https://www.google.com/', 'Accusantium enim et', 'Et quia sit expedit', 'Aut voluptatum labor', '2022-03-09 02:37:00', '2022-03-09 02:36:03'),
(229, 'majid', 'shah', 'BankTransfer', 'Shepard Black Plc', 'islamambad', 'islambad', 'Pakistan', 4399, 'gahodil@mailinator.com', 'majid shah', 'Et reiciendis omnis', 'Et totam veniam tempora neque autem do', 'Tempor velit ab dele', 'Simone Romero', '[\"https:\\/\\/www.dropbox.com\\/s\\/vgqe8almhvpct2b\\/1646813838IMG_0577.jpg?dl=1\",\"https:\\/\\/www.dropbox.com\\/s\\/2vqsg8qern7soh4\\/1646813843IMG_0578.jpg?dl=1\"]', 'Mariam Sosa', '[\"https:\\/\\/www.dropbox.com\\/s\\/z7j9hnftmk8hxtg\\/1646813847IMG_0578.jpg?dl=1\",\"https:\\/\\/www.dropbox.com\\/s\\/s0vx9winor13ff9\\/1646813851IMG_0591.jpg?dl=1\"]', 'Alika Stanley', '[\"https:\\/\\/www.dropbox.com\\/s\\/zkisldflxdm4ttz\\/164681385671896699_2542690432453872_5089500610416345088_n.jpg?dl=1\",\"https:\\/\\/www.dropbox.com\\/s\\/ek1r8c63zqblx1t\\/1646813859IMG_0592.jpg?dl=1\"]', NULL, 'on', NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, 'Dolores dicta nulla sit voluptatibus porro maxime tempor ad est sed laborum Possimus aspernatur', 'ah', '[\"https:\\/\\/www.dropbox.com\\/s\\/v893ufw2msj82gq\\/1646813863Capture.PNG?dl=1\",\"https:\\/\\/www.dropbox.com\\/s\\/g9ywpaewdtdpmrx\\/1646813868IMG_0577.jpg?dl=1\"]', 'http://127.0.0.1:8000/formpage', 'Porro nisi voluptate', 'Et corporis nihil di', 'Aut voluptatum labor', '2022-03-09 03:17:52', '2022-03-09 03:17:08');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'majid shah', 'shahmajid508@gmail.com', NULL, '$2y$10$De6XxRrfPKlvSr3iQkQBRe0Yg.jYrD4o6mkfglcFb.ONCc8762zIK', NULL, '2022-03-02 02:49:17', '2022-03-02 02:49:17'),
(2, 'zafar', 'ali@gmail.com', NULL, '$2y$10$At9deLxhtGhD/qwEl8ekceqBtShkZn47y7k0Ft8nDGNt59gbejCj2', NULL, '2022-03-02 02:49:53', '2022-03-02 02:49:53'),
(3, 'shahmajid', 'shah@gmail.com', NULL, '$2y$10$.jmD13unM2r5KbyBGVOBYu49grmbl6aM.fMKo4JpvSE8TXCvOriGC', NULL, '2022-03-07 04:07:23', '2022-03-07 04:07:23');

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
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
