-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 15, 2020 at 04:43 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_book` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_book` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numberphone_book` int(11) NOT NULL,
  `people_book` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_book` date NOT NULL,
  `time_book` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name_book`, `email_book`, `numberphone_book`, `people_book`, `date_book`, `time_book`, `created_at`, `updated_at`) VALUES
(1, 'Menghuy', 'cheamenghuysnsd@gmail.com', 98729080, '5 People', '2020-01-07', '7:00 PM', '2020-01-07 00:36:02', '2020-01-07 00:36:02'),
(2, 'Menghuy', 'cheamenghuysnsd@gmail.com', 98729080, '1 Person', '2020-01-08', '6:00 PM', '2020-01-08 02:46:22', '2020-01-08 02:46:22'),
(3, 'rithiya', 'chhoychanrithiya9848@gmail.com', 967820780, '2 People', '2020-01-10', '10:00 PM', '2020-01-08 21:00:57', '2020-01-08 21:00:57'),
(4, 'Park Haram', 'harampark325@gmail.com', 98765465, '2 People', '2020-01-11', '7:00 PM', '2020-01-08 21:02:28', '2020-01-08 21:02:28'),
(5, 'lin', 'lyly@gmail.com', 98729080, '1 Person', '2020-01-24', '7:00 AM', '2020-01-08 21:29:24', '2020-01-08 21:29:24'),
(6, 'nab', 'nab@gmail.com', 56547954, '4 People', '2020-01-14', '7:00 PM', '2020-01-13 22:08:03', '2020-01-13 22:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `chiefs`
--

DROP TABLE IF EXISTS `chiefs`;
CREATE TABLE IF NOT EXISTS `chiefs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `name_chief` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `hire_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chiefs`
--

INSERT INTO `chiefs` (`id`, `image`, `name_chief`, `position`, `salary`, `hire_date`, `created_at`, `updated_at`) VALUES
(1, '1578232254.jpg', 'Nana', 'Knife', 200, '2020-01-05', '2020-01-05 06:50:54', '2020-01-05 06:50:54'),
(2, '1578233052.jpg', 'David', 'Master Chief', 600, '2020-01-01', '2020-01-05 07:04:12', '2020-01-05 07:04:12'),
(7, '1578233472.png', 'Udom', 'Knife', 200, '2020-01-05', '2020-01-05 07:11:12', '2020-01-05 07:11:12'),
(4, '1578233255.jpg', 'KimHong', 'Knife', 200, '2020-01-02', '2020-01-05 07:07:35', '2020-01-05 07:07:35'),
(5, '1578233289.jpg', 'Hanna', 'Knife', 200, '2020-01-04', '2020-01-05 07:08:09', '2020-01-05 07:08:09'),
(6, '1578233370.jpg', 'DenDy', 'Knife', 200, '2020-01-03', '2020-01-05 07:09:30', '2020-01-05 07:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

DROP TABLE IF EXISTS `drinks`;
CREATE TABLE IF NOT EXISTS `drinks` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `drink_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drink_price` int(11) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`id`, `image`, `drink_name`, `drink_price`, `description`, `created_at`, `updated_at`) VALUES
(1, '1578164284.jpg', 'Hot Vanilla Latte', 5, 'Coffee with milk and Vanilla', '2020-01-04 11:58:04', '2020-01-04 11:58:04'),
(2, '1578164623.jpg', 'Coffee', 4, 'Hot Coffee', '2020-01-04 12:03:43', '2020-01-04 12:03:43'),
(3, '1578164693.jpg', 'Beer', 3, 'Cambodian Beer', '2020-01-04 12:04:53', '2020-01-04 12:04:53'),
(4, '1578164785.jpg', 'Cocktail Pink', 7, 'Peach with Vodka', '2020-01-04 12:06:25', '2020-01-04 12:06:25'),
(5, '1578164838.jpeg', 'Orange All Day', 8, 'Orange and Apple Juice Vodka', '2020-01-04 12:07:18', '2020-01-04 12:07:18'),
(6, '1578164889.jpg', 'GatoNeGro', 22, 'Red Wine', '2020-01-04 12:08:09', '2020-01-04 12:08:09'),
(9, '1578173169.png', 'Blue Makarita', 6, 'Classic Blue Makarita', '2020-01-04 14:26:09', '2020-01-04 14:26:09'),
(10, '1578173278.jpg', 'Mint-Cocktail', 4, 'Mint Vodka and wine', '2020-01-04 14:27:58', '2020-01-04 14:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feed_backs`
--

DROP TABLE IF EXISTS `feed_backs`;
CREATE TABLE IF NOT EXISTS `feed_backs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `feedback_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feed_backs`
--

INSERT INTO `feed_backs` (`id`, `feedback_name`, `feedback_email`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Menghuy', 'cheamenghuysnsd@gmail.com', 'The Food and The Service is so nice', '2020-01-07 00:36:49', '2020-01-07 00:36:49'),
(3, 'Rtihiya', 'chhoychanrithiya9848@gmail.com', 'good', '2020-01-08 20:59:12', '2020-01-08 20:59:12'),
(4, 'Menghuy', 'cheamenghuysnsd@gmail.com', 'ffsfsfd', '2020-01-09 00:49:08', '2020-01-09 00:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

DROP TABLE IF EXISTS `foods`;
CREATE TABLE IF NOT EXISTS `foods` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` mediumtext COLLATE utf8mb4_unicode_ci,
  `food_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_price` int(11) NOT NULL,
  `food_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `image`, `food_name`, `food_price`, `food_type`, `description`, `created_at`, `updated_at`) VALUES
(1, '1578298349.jpg', 'Bread with Egg', 7, 'breakfast', 'Bread with Egg', '2020-01-06 01:12:29', '2020-01-06 01:12:29'),
(2, '1578298408.jpg', 'Omelette', 5, 'breakfast', 'Fresh Egg with meat', '2020-01-06 01:13:28', '2020-01-06 01:13:28'),
(3, '1578298426.jpg', 'BaBa Egg', 7, 'breakfast', 'Bread with raw Egg', '2020-01-06 01:13:46', '2020-01-06 01:13:46'),
(4, '1578298447.jpg', 'Classic SaSo', 8, 'breakfast', 'Raw Egg with Bacon', '2020-01-06 01:14:07', '2020-01-06 01:14:07'),
(5, '1578298491.jpg', 'Pan Cake', 5, 'breakfast', 'Pan Cake with berry', '2020-01-06 01:14:51', '2020-01-06 01:14:51'),
(6, '1578298516.jpg', 'Sandwich with fried chip', 8, 'breakfast', 'Double Egg with becon with chip', '2020-01-06 01:15:16', '2020-01-06 01:15:16'),
(7, '1578298545.jpg', 'Pumpkin Pie', 6, 'breakfast', 'Slice of Pumpkin Pie', '2020-01-06 01:15:45', '2020-01-06 01:15:45'),
(8, '1578298568.jpg', 'Rice Break', 5, 'breakfast', 'Rice with double Hot Dog and Egg', '2020-01-06 01:16:08', '2020-01-06 01:16:08'),
(9, '1578298601.jpg', 'Spaghetti Fresh', 5, 'lunch', 'Spaghetti with Samon', '2020-01-06 01:16:41', '2020-01-06 01:16:41'),
(10, '1578298625.jpg', 'Chicken Legs with bean', 10, 'lunch', 'Chicken meat with Soybean', '2020-01-06 01:17:05', '2020-01-06 01:17:05'),
(11, '1578298687.jpg', 'Fried Chicken', 8, 'lunch', 'Fried Chicken with Chips', '2020-01-06 01:18:07', '2020-01-06 01:18:07'),
(12, '1578298722.jpg', 'Spaghetti Becon', 6, 'lunch', 'Spaghetti with Becon and Egg', '2020-01-06 01:18:42', '2020-01-06 01:18:42'),
(13, '1578298753.jpg', 'Indian Curry', 4, 'lunch', 'Curry Soup with Chicken Legs', '2020-01-06 01:19:13', '2020-01-06 01:19:13'),
(14, '1578298803.jpg', 'Round Egg', 4, 'lunch', 'Becon round with Eggs', '2020-01-06 01:20:03', '2020-01-06 01:20:03'),
(15, '1578298820.jpg', 'Burger', 5, 'lunch', 'Steak Burger', '2020-01-06 01:20:20', '2020-01-06 01:20:20'),
(16, '1578298842.jpg', 'Pizza', 10, 'lunch', 'Pepper Roni Pizza', '2020-01-06 01:20:42', '2020-01-06 01:20:42'),
(17, '1578298863.jpg', 'American Steak', 7, 'dinner', 'Steak of Heaven', '2020-01-06 01:21:03', '2020-01-06 01:21:03'),
(18, '1578298902.jpg', 'Chicken Legs Steak', 6, 'dinner', 'Chicken Legs Steak with French Corn', '2020-01-06 01:21:42', '2020-01-06 01:21:42'),
(19, '1578298924.jpg', 'Cooked Chicken Wings', 9, 'dinner', 'A lot of Flavor with 9 Wings', '2020-01-06 01:22:04', '2020-01-06 01:22:04'),
(20, '1578298950.jpg', 'Sea Food Salad', 10, 'dinner', 'Fresh Salad with Sea Food', '2020-01-06 01:22:30', '2020-01-06 01:22:30'),
(21, '1578298974.jpg', 'MI Cha', 5, 'dinner', 'Noodle with Egg and Mea', '2020-01-06 01:22:54', '2020-01-06 01:22:54'),
(22, '1578299016.jpg', 'Japan Sushi', 12, 'dinner', 'Collections of Fresh Samon', '2020-01-06 01:23:36', '2020-01-06 01:23:36'),
(23, '1578299032.jpg', 'Turkey a Big One', 32, 'dinner', 'Baked Turkey', '2020-01-06 01:23:52', '2020-01-06 01:23:52'),
(24, '1578299053.jpg', 'Roast Chicken Meat', 12, 'dinner', 'Chicken Meat with Soy Bean', '2020-01-06 01:24:13', '2020-01-06 01:24:13'),
(25, '1578299108.jpg', 'Ice-Cream Pan Cake', 4, 'snack', 'Pan Cake Round with Ice-Cream', '2020-01-06 01:25:08', '2020-01-06 01:25:08'),
(26, '1578299127.jpg', 'Ice-Cream', 3, 'snack', 'Banana and Strawberry', '2020-01-06 01:25:27', '2020-01-06 01:25:27'),
(27, '1578299143.jpg', 'Jelly with Ice-Cream', 3, 'snack', 'Ice-Cream with Jelly and lemon', '2020-01-06 01:25:43', '2020-01-06 01:25:43'),
(28, '1578299159.jpg', 'Ice-Cream Pie', 4, 'snack', 'Banana with Apple Pie', '2020-01-06 01:25:59', '2020-01-06 01:25:59'),
(29, '1578299184.jpg', 'Chocolate Cake', 6, 'snack', 'Cake with Chocolate Cream inside', '2020-01-06 01:26:24', '2020-01-06 01:26:24'),
(30, '1578299206.jpg', 'Caramel gold', 5, 'snack', 'Classic Lovely Caramel', '2020-01-06 01:26:46', '2020-01-06 01:26:46'),
(31, '1578299231.jpg', 'Strawberry Ice-Cream', 7, 'snack', 'Ice-Cream Strawberry with berry', '2020-01-06 01:27:11', '2020-01-06 01:27:11'),
(32, '1578299253.jpg', 'Chocolate Pie', 5, 'snack', 'Baked Chocolate Pie', '2020-01-06 01:27:33', '2020-01-06 01:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_28_024119_create_foods_table', 1),
(5, '2019_12_28_061503_create_drinks_table', 1),
(6, '2019_12_29_031125_create_books_table', 1),
(7, '2019_12_29_061153_create_chiefs_table', 1),
(8, '2020_01_01_030254_create_feed_backs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Menghuy', 'cheamenghuysnsd@gmail.com', NULL, '$2y$10$Tmam/cmVXpmfNogIz9RYZuzY.wDW51oW5zYLTZnCl.7EB.lYGJemi', NULL, '2020-01-06 01:10:28', '2020-01-06 01:10:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
