-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 04:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_food_list`
--

CREATE TABLE `all_food_list` (
  `id` int(11) NOT NULL,
  `food_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_price` int(10) NOT NULL,
  `food_desc` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all_food_list`
--

INSERT INTO `all_food_list` (`id`, `food_name`, `food_price`, `food_desc`, `food_img`) VALUES
(3, 'rothana', 3, 'for test', 'photo_2020-07-06_11-39-53.jpg'),
(4, ' teacher training', 3, 'erete', 'photo_2020-07-05_17-09-43.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food_current_day_list`
--

CREATE TABLE `food_current_day_list` (
  `id` int(11) NOT NULL,
  `food_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_price` int(10) NOT NULL,
  `food_desc` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_current_day_list`
--

INSERT INTO `food_current_day_list` (`id`, `food_name`, `food_price`, `food_desc`, `food_img`) VALUES
(1, 'Sea food Fried rice', 3, 'Fresh seafood form kompong sorm with the expert chief from thailand', '2.jpg'),
(2, 'Basil Fried Rice', 3, 'FODn eodn DJk djoan JOFJ jond dijdnd djand djoa fnakndf ajd', '3.jpg'),
(3, 'salmon ', 5, 'FODn eodn DJk djoan JOFJ jond dijdnd djand djoa fnakndf ajd', '4.jpg'),
(4, 'hamberger', 2, 'for test', 'photo_2020-07-06_11-39-53.jpg'),
(5, 'hello', 3, 'This is the traditional food of cambodia You should try it', 'photo_2020-07-06_11-39-53.jpg'),
(6, 'hello', 3, 'This is the traditional food of cambodia You should try it', 'photo_2020-07-06_11-39-53.jpg'),
(7, 'rothana', 3, 'for test', 'photo_2020-07-06_11-39-53.jpg'),
(8, ' teacher training', 3, 'erete', 'photo_2020-07-05_17-09-43.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` int(11) NOT NULL,
  `food_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_size` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_quantity` int(50) NOT NULL,
  `food_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `food_name`, `food_size`, `food_quantity`, `food_price`) VALUES
(4, 'Sea food Fried rice', 'Big Plate', 2, 3),
(5, 'Basil Fried Rice', 'Big Plate', 2, 3),
(6, 'hello', 'Big Plate', 2, 3),
(7, 'hello', 'Big Plate', 2, 3),
(8, 'Sea food Fried rice', 'Big Plate', 2, 3),
(9, 'hello', 'Big Plate', 2, 3),
(10, 'hamberger', 'Big Plate', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_food_list`
--
ALTER TABLE `all_food_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_current_day_list`
--
ALTER TABLE `food_current_day_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_food_list`
--
ALTER TABLE `all_food_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `food_current_day_list`
--
ALTER TABLE `food_current_day_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
