-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql312.byetcluster.com
-- Generation Time: Jul 01, 2023 at 03:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_34294279_vanilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(400) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `gm` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `num` int(11) NOT NULL,
  `state` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `img`, `name`, `title`, `gm`, `price`, `num`, `state`) VALUES
(1, '1a.jpg', 'كنافة مهلبية بالوزن', 'لا توجد تفاصيل حاليا للمنتج', '500جرام', '43', 1, 1),
(2, '1b.jpg', 'كنافة بورمه بالمكسرات', 'لا توجد تفاصيل حاليا للمنتج', '250جرام', '189', 5, 1),
(3, '1c.jpg', 'بسبوسة مكسرات سادة', 'لا توجد تفاصيل حاليا للمنتج', '250جرام', '46', 1, 1),
(4, '1d.jpg', 'صنية كنافة مكسرات متنوعة', 'لا توجد تفاصيل حاليا للمنتج', '', '345', 10, 1),
(5, '2a.jpg', 'حلويات شرقية متنوعة بالمكسرات', 'لا توجد تفاصيل حاليا للمنتج', '1كيلو', '45', 7, 2),
(6, '2b.jpg', 'تورتة الفراولة', 'لا توجد تفاصيل حاليا للمنتج', '', '310', 8, 2),
(7, '2c.jpg', 'تورتة الفواكة المتنوعة', 'لا توجد تفاصيل حاليا للمنتج', '', '310', 8, 2),
(8, '1a.jpg', 'منتج تجربة', 'لا توجد تفاصيل حاليا للمنتج', 'كيلو', '15', 5, 2),
(9, '1a.jpg', 'منتج تجربة', 'لا توجد تفاصيل حاليا للمنتج', '200جم', '120', 4, 2),
(10, '1a.jpg', 'منتج تجربة', 'لا توجد تفاصيل حاليا للمنتج', '200جم', '90', 2, 2),
(11, '1a.jpg', 'منتج تجربة', 'لا توجد تفاصيل حاليا للمنتج', '200جم', '30', 1, 3),
(12, '1a.jpg', 'منتج تجربة', 'لا توجد تفاصيل حاليا للمنتج', '200جم', '220', 5, 3),
(13, '1a.jpg', 'منتج تجربة', 'لا توجد تفاصيل حاليا للمنتج', '200جم', '150', 8, 3),
(14, '1a.jpg', 'منتج تجربة', 'لا توجد تفاصيل حاليا للمنتج', '200جم', '215', 3, 3),
(15, '1a.jpg', 'منتج تجربة', 'لا توجد تفاصيل حاليا للمنتج', 'كيلو', '520', 3, 3),
(16, '1a.jpg', 'منتج تجربة', 'لا توجد تفاصيل حاليا للمنتج', '200جم', '100', 2, 3),
(17, '1a.jpg', 'منتج تجربة', 'لا توجد تفاصيل حاليا للمنتج', '200جم', '135', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `code`, `value`) VALUES
(1, 'PROMO10', '10'),
(2, 'PROMO20', '20');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `promo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `road` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
