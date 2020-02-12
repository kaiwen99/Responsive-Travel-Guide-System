-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 09:59 PM
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
-- Database: `travel_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `order_name` varchar(255) NOT NULL,
  `order_email` varchar(255) NOT NULL,
  `order_address` varchar(255) NOT NULL,
  `order_contact` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders_items`
--

CREATE TABLE `orders_items` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_description` text DEFAULT NULL,
  `product_price` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `product_description`, `product_price`) VALUES
(1, 'Batik', 'Batik.jpg', 'It is using wax-resist dyeing and it applied to whole cloth.(Calculated 1 meter each)', '13.00'),
(2, 'CNY minipack', 'CNY minipack.jpg', 'A package contain Coco Granola(40g), Pepper Cashews(33g), Bamboo Salt Pecadamia, Raisins and Berries(30g)', '25.00'),
(3, 'coffee', 'coffee.jpg', 'A well known brand of coffee in Malaysia', '10.00'),
(4, 'curry paste', 'curry paste.jpg', 'A well known brand most Malaysian will love it', '15.00'),
(5, 'dodol', 'dodol.jpg', 'A sweet toffee that tourism will purchase on Melaka', '5.00'),
(6, 'nutmeg oil', 'nutmeg oil.jpg', 'An oil that able to relieve stress, pain,indestion,etc.', '15.00'),
(7, 'Tambun Biscuit', 'Tambun Biscuit.jpg', 'Can be called Tau Sar Pneah that most tourist like it', '10.00'),
(8, 'Wau', 'Wau.jpg', 'Wau bulan is an intricately designed Malaysian moon-kite that is traditionally flown in the Malaysian state of Kelantan.', '30.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `name` (`order_name`),
  ADD KEY `email` (`order_email`),
  ADD KEY `order_date` (`order_date`),
  ADD KEY `address` (`order_address`),
  ADD KEY `contact` (`order_contact`);

--
-- Indexes for table `orders_items`
--
ALTER TABLE `orders_items`
  ADD PRIMARY KEY (`order_id`,`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `name` (`product_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
