-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 11:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlin`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcard`
--

CREATE TABLE `addcard` (
  `id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `cname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prace` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `caunt` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `total` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `addcard`
--

INSERT INTO `addcard` (`id`, `user_id`, `cname`, `prace`, `caunt`, `total`) VALUES
(42, 28, 'تشيرتات شبابيه كامله كل المقاسات', '6500', 'images/IMG-20220921-WA0055.jpg', '5'),
(43, 28, 'أحذيه رجاليه كل المقاسات', '4500', 'images/IMG-20221004-WA0075.jpg', '5');

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prace` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `amge` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`id`, `name`, `prace`, `amge`) VALUES
(14, 'أقمصه رجاليه كل المقاسات', '2700', 'images/IMG-20221007-WA0058.jpg'),
(15, 'أقمصه رجاليه كل المقاسات', '2700', 'images/IMG-20221007-WA0057.jpg'),
(16, 'أقمصه رجاليه كل المقاسات', '2700', 'images/IMG-20221007-WA0061.jpg'),
(17, 'ساعات رجاليه', '2000', 'images/IMG-20221002-WA0028.jpg'),
(18, 'ساعات رجاليه', '2000', 'images/IMG-20221002-WA0027.jpg'),
(19, 'ساعات رجاليه', '2000', 'images/IMG-20221002-WA0026.jpg'),
(20, 'ساعات رجاليه', '2550', 'images/IMG-20221002-WA0018.jpg'),
(21, 'ساعات رجاليه', '2600', 'images/IMG-20221002-WA0015.jpg'),
(22, 'ساعات رجاليه', '2600', 'images/IMG-20221002-WA0013.jpg'),
(23, 'تشيرتات شبابيه كامله كل المقاسات', '6500', 'images/IMG-20220921-WA0055.jpg'),
(24, 'تشيرتات شبابيه كامله كل المقاسات', '6500', 'images/IMG-20220921-WA0054.jpg'),
(25, 'تشيرتات شبابيه كامله كل المقاسات', '6500', 'images/IMG-20220921-WA0053.jpg'),
(26, 'تشيرتات شبابيه كامله كل المقاسات', '6500', 'images/IMG-20221008-WA0060.jpg'),
(27, 'تشيرتات شبابيه كامله كل المقاسات', '6500', 'images/IMG-20221008-WA0059.jpg'),
(28, 'تشيرتات شبابيه كامله كل المقاسات', '6500', 'images/IMG-20221008-WA0057.jpg'),
(29, 'تشيرتات شبابيه كامله كل المقاسات', '6500', 'images/IMG-20221008-WA0019.jpg'),
(30, 'تشيرتات شبابيه كامله كل المقاسات', '6500', 'images/IMG-20221008-WA0018.jpg'),
(31, 'تشيرتات شبابيه كامله كل المقاسات', '6500', 'images/IMG-20221008-WA0020.jpg'),
(32, 'جكت قطني كل المقاسات', '7500', 'images/IMG-20220927-WA0037.jpg'),
(34, 'جكت قطني كل المقاسات', '7500', 'images/IMG-20220927-WA0036.jpg'),
(35, 'جكت قطني كل المقاسات', '7500', 'images/IMG-20220927-WA0034.jpg'),
(36, 'أحذيه رجاليه كل المقاسات', '4500', 'images/IMG-20221004-WA0077.jpg'),
(37, 'أحذيه رجاليه كل المقاسات', '4500', 'images/IMG-20221004-WA0075.jpg'),
(38, 'أحذيه رجاليه كل المقاسات', '4500', 'images/IMG-20221004-WA0078.jpg'),
(39, 'أحذيه رجاليه كل المقاسات', '4500', 'images/IMG-20221004-WA0088.jpg'),
(40, 'أحذيه رجاليه كل المقاسات', '4500', 'images/IMG-20221004-WA0086.jpg'),
(41, 'أحذيه رجاليه كل المقاسات', '4500', 'images/IMG-20221004-WA0083.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(20) NOT NULL,
  `role_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`) VALUES
(26, 'hajo', 'hajo@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 1),
(27, 'ali', 'ali@gmail.com', 'd0970714757783e6cf17b26fb8e2298f', 2),
(28, 'ميمو', 'memo@gmail.com', '1753c2d342c9c3cb28077f36287c7988', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcard`
--
ALTER TABLE `addcard`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uesr_id` (`user_id`);

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcard`
--
ALTER TABLE `addcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addcard`
--
ALTER TABLE `addcard`
  ADD CONSTRAINT `addcard_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
