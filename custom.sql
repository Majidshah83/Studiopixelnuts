-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 06:14 PM
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
(123, 'Lani Gibbs', 'Morrow', 'BankTransfer', 'Schultz Molina Traders', 'Et ipsum excepturi iusto aut architecto cum omnis eu quia ad porro', 'Libero necessitatibus do in consequatur Sit et cum temporibus laudantium quod blanditiis', 'Vel qui consectetur ipsum esse fugiat itaque deserunt fugiat rerum cillum ex quod', 28396, 'qydyl@mailinator.com', 'Ursa Mejia', 'Sint optio alias totam dolorem mollit dolorem et sed laborum Dolor eum officiis ex officia', 'Quae qui tenetur ad repellendus Similique sint dolore animi est voluptates', 'Possimus molestiae sit sunt in', 'Linus Dunlap', '[\"https:\\/\\/www.dropbox.com\\/s\\/6b6yrei8zbh5e1x\\/1646657303265.jpg?dl=1\",\"https:\\/\\/www.dropbox.com\\/s\\/2a6utuzqx1708mf\\/164665730671651424_478824542702790_3504359208030044160_n.jpg?dl=1\"]', 'Ifeoma Lucas', '[\"https:\\/\\/www.dropbox.com\\/s\\/e2pg1yfxocsa7a5\\/1646657309IMG_0952.jpg?dl=1\",\"https:\\/\\/www.dropbox.com\\/s\\/gu06mmkh9zc3jci\\/1646657316IMG_20190113_001206_598.jpg?dl=1\"]', 'Magee Hood', '[\"https:\\/\\/www.dropbox.com\\/s\\/1bpn59gnb5cf5gj\\/1646657319IMG_0953.jpg?dl=1\",\"https:\\/\\/www.dropbox.com\\/s\\/gsrb6owzwno8546\\/1646657326IMG_20190113_165206_341.jpg?dl=1\"]', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, 'Pariatur Est vero ut rem deserunt aut vel omnis voluptas', 'Minus voluptas sit dolor voluptatem voluptatem et possimus dignissimos sint dolores occaecat dicta totam fugit dolorem earum quia tempora', '[\"https:\\/\\/www.dropbox.com\\/s\\/tja35ogg1px3vnv\\/1646657329IMG_20190218_144229_545.jpg?dl=1\",\"https:\\/\\/www.dropbox.com\\/s\\/0mvxq8if6cjbgfl\\/1646657334IMG-20181225-WA0001.jpg?dl=1\"]', 'Aliquam sit laudantium elit ad', 'Cillum dolore qui laborum veritatis quibusdam esse rerum tempor est dignissimos dolor earum voluptas architecto est ea qui in enim', 'Quo animi iure sint excepteur enim modi sunt consequatur harum dolorem aspernatur esse explicabo Quis voluptate exercitationem reprehenderit', 'Aut dolor est quo voluptatem', '2022-03-07 13:08:44', '2022-03-07 07:48:23'),
(124, 'majid', 'shah', 'BankTransfer', 'codify', 'islamambad', 'islambad', 'Pakistan', 4399, 'shah@gmail.com', 'majid shah', 'Magna tenetur incidunt eligendi incidunt enim et veniam lorem molestiae', 'short description of the logo', 'Possimus do occaecat et itaque beatae labore consequuntur omnis non sapiente vitae laboriosam hic', 'Zena Ellis', '[\"https:\\/\\/www.dropbox.com\\/s\\/mx799lcz6y9o0m4\\/1646659895IMG_20190218_144229_545.jpg?dl=1\",\"https:\\/\\/www.dropbox.com\\/s\\/qqkitrcwvbtavi9\\/1646659899IMG-20181225-WA0001.jpg?dl=1\"]', 'Kimberly Dominguez', '[\"https:\\/\\/www.dropbox.com\\/s\\/hpaymlbsjj65rs4\\/164665990271896699_2542690432453872_5089500610416345088_n.jpg?dl=1\",\"https:\\/\\/www.dropbox.com\\/s\\/bar1dxh3vtorh3s\\/1646659905b5c9cf54-8357-412f-b99d-85c25e1eb093%20%282%29.jpg?dl=1\"]', 'Alika Stanley', '[\"https:\\/\\/www.dropbox.com\\/s\\/jr77bkn3q6n9fjq\\/1646659909IMG_0592.jpg?dl=1\",\"https:\\/\\/www.dropbox.com\\/s\\/pl8jwmam47jqa8j\\/1646659913IMG_0958.jpg?dl=1\"]', NULL, 'on', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, 'Dolores dicta nulla sit voluptatibus porro maxime tempor ad est sed laborum Possimus aspernatur', 'gahha', '[\"https:\\/\\/www.dropbox.com\\/s\\/kt8fwxhnlw5szb6\\/1646659918IMG_0577.jpg?dl=1\",\"https:\\/\\/www.dropbox.com\\/s\\/dkdpjai1b9yc7qw\\/1646659923IMG_0599.jpg?dl=1\"]', 'http://127.0.0.1:8000/formpage', 'Qui voluptatum sed aliqua Quo laborum Velit porro consectetur molestiae tempore', 'Necessitatibus sit r', 'Aut voluptatum labor', '2022-03-07 08:32:07', '2022-03-07 08:31:35');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

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
