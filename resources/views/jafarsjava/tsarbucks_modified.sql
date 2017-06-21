-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2017 at 06:26 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsarbucks`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) NOT NULL,
  `size` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `quantity`, `completed`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 1, '2017-03-14 23:28:49', NULL),
(1, 1, 2, 4, 1, '2017-03-14 23:28:49', NULL),
(1, 1, 3, 1, 1, '2017-03-14 23:28:49', NULL),
(2, 1, 2, 5, 1, '2017-03-14 23:28:49', NULL),
(2, 1, 5, 2, 1, '2017-03-14 23:28:49', NULL),
(3, 1, 4, 1, 1, '2017-03-14 23:28:49', NULL),
(4, 1, 8, 1, 1, '2017-03-14 23:28:49', NULL),
(4, 1, 6, 3, 1, '2017-03-14 23:28:49', NULL),
(5, 1, 7, 2, 1, '2017-03-14 23:28:49', NULL),
(6, 1, 3, 4, 1, '2017-03-14 23:28:49', NULL),
(7, 1, 1, 1, 1, '2017-03-24 03:00:28', NULL),
(7, 1, 4, 1, 1, '2017-03-24 03:00:28', NULL),
(8, 1, 1, 1, 1, '2017-03-24 03:01:10', NULL),
(8, 1, 4, 1, 1, '2017-03-24 03:01:10', NULL),
(9, 1, 1, 1, 0, '2017-03-24 03:15:57', NULL),
(10, 1, 2, 1, 1, '2017-03-24 03:18:48', NULL),
(10, 1, 3, 1, 1, '2017-03-24 03:18:48', NULL),
(10, 1, 5, 1, 1, '2017-03-24 03:18:48', NULL),
(11, 1, 7, 1, 1, '2017-03-24 03:27:01', NULL),
(11, 1, 4, 1, 1, '2017-03-24 03:27:01', NULL),
(11, 1, 6, 1, 1, '2017-03-24 03:27:01', NULL),
(12, 1, 4, 1, 1, '2017-03-24 03:30:34', NULL),
(12, 1, 7, 1, 1, '2017-03-24 03:30:34', NULL),
(12, 1, 6, 1, 1, '2017-03-24 03:30:34', NULL),
(13, 1, 1, 1, 0, '2017-03-28 18:25:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `size` tinyint(2) NOT NULL COMMENT 'size in ounces',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `display_name`, `price`, `size`, `created_at`, `updated_at`) VALUES
(1, 'Arabian Nights', '5.00', 2, '2017-03-14 23:28:49', NULL),
(2, 'Cave of Wonders', '7.50', 4, '2017-03-14 23:28:49', NULL),
(3, 'Diamond in the Rough', '10.00', 8, '2017-03-14 23:28:49', NULL),
(4, 'Aladdin apples', '6.00', 1, '2017-03-14 23:28:49', NULL),
(5, 'Jasmine Tea', '12.00', 2, '2017-03-14 23:28:49', NULL),
(6, 'Genie granola', '10.00', 4, '2017-03-14 23:28:49', NULL),
(7, 'Iago crackers', '20.00', 8, '2017-03-14 23:28:49', NULL),
(8, 'Abu bananas', '15.00', 16, '2017-03-14 23:28:49', NULL),
(9, 'Sultan smoothie', '15.00', 16, '2017-03-14 23:28:49', NULL),
(10, 'Rajah roast', '15.00', 16, '2017-03-14 23:28:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `system_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`system_name`, `display_name`, `created_at`, `updated_at`) VALUES
('customer', 'Customer', '2017-03-14 23:28:49', NULL),
('barista', 'Barista', '2017-03-14 23:28:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'customer', 'password', 'Customer', '2017-03-14 23:28:49', NULL),
(2, 'barista', 'password', 'Barista', '2017-03-14 23:28:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'customer', '2017-03-14 23:28:49', NULL),
(2, 'barista', '2017-03-14 23:28:49', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`created_at`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`,`user_id`,`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`system_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
