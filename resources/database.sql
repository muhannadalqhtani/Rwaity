-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2022 at 07:40 PM
-- Server version: 5.7.39-0ubuntu0.18.04.2
-- PHP Version: 7.2.24-0ubuntu0.18.04.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rewity`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `country` varchar(120) NOT NULL,
  `city` varchar(120) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `id_user`, `country`, `city`, `description`) VALUES
(2, 9, 'KSA', 'Jeddah', 'rode king abdullah');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `id_buyer` int(10) NOT NULL,
  `id_product` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'drama'),
(2, 'action'),
(3, 'horror');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `communication` varchar(120) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `communication`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'abdullah alshehri', '0550550556', 'Hello Please help me , im forget pass', 1, '2022-09-17', '2022-09-17'),
(2, 'sami mohmmed', '', '123456', 1, '2022-09-17', '2022-09-17'),
(3, 'sami mohmmed', '', '124455', 1, '2022-09-17', '2022-09-17'),
(4, 'sami mohmmed', '', '147', 1, '2022-09-17', '2022-09-17'),
(5, 'awad', '', 'as', 1, '2022-09-17', '2022-09-17'),
(6, 'awad', '', 'as', 1, '2022-09-17', '2022-09-17'),
(7, 'awwww', '055555555555', 'asas', 1, '2022-09-17', '2022-09-17'),
(8, 'abeer', '088854542222', 'abeer\r\nasa', 1, '2022-09-17', '2022-09-17'),
(9, 'sami mohmmed', '1122', 'ad', 1, '2022-09-19', '2022-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--



CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_buyer` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `payment` varchar(120) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_buyer`, `id_product`, `payment`, `status`, `created_at`) VALUES
(26, 9, 12, 'Cash on Delivery', 1, '2022-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `subject` varchar(120) NOT NULL,
  `author` varchar(120) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(120) NOT NULL,
  `id_category` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `sold` tinyint(1) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_user`, `subject`, `author`, `description`, `image`, `id_category`, `price`, `status`, `sold`, `created_at`) VALUES
(5, 9, 'PHP', 'Sami Alshehri', 'Lorem ipsum dolor sit amet consectetur adipiscing elit scelerisque, est augue lectus fames rutrum et eleifend, placerat aliquet netus cum semper tristique venenatis. A cras varius sagittis mi nascetur potenti erat tellus, tempus felis arcu dignissim morbi pulvinar tristique pretium quisque, volutpat ridiculus parturient dictum dapibus sociis curabitur. Rhoncus cras sociosqu torq', 'c++.jpg', 2, 100, 1, 0, '2022-09-21'),
(6, 9, 'HTML', 'Ahmed', 'Lorem ipsum dolor sit amet consectetur adipiscing elit scelerisque, est augue lectus fames rutrum et eleifend, placerat aliquet netus cum semper tristique venenatis. A cras varius sagittis mi nascetur potenti erat tellus, tempus felis arcu dignissim morbi pulvinar tristique pretium quisque, volutpat ridiculus parturient dictum dapibus sociis curabitur. Rhoncus cras sociosqu torq', 'c++.jpg', 2, 100, 1, 0, '2022-09-21'),
(7, 9, 'css', 'fahed', 'Lorem ipsum dolor sit amet consectetur adipiscing elit scelerisque, est augue lectus fames rutrum et eleifend, placerat aliquet netus cum semper tristique venenatis. A cras varius sagittis mi nascetur potenti erat tellus, tempus felis arcu dignissim morbi pulvinar tristique pretium quisque, volutpat ridiculus parturient dictum dapibus sociis curabitur. Rhoncus cras sociosqu torq', 'c++.jpg', 2, 100, 1, 0, '2022-09-21'),
(8, 10, 'JS', 'Fahed', 'Lorem ipsum dolor sit amet consectetur adipiscing elit scelerisque, est augue lectus fames rutrum et eleifend, placerat aliquet netus cum semper tristique venenatis. A cras varius sagittis mi nascetur potenti erat tellus, tempus felis arcu dignissim morbi pulvinar tristique pretium quisque, volutpat ridiculus parturient dictum dapibus sociis curabitur. Rhoncus cras sociosqu torq', 'c++.jpg', 2, 100, 1, 0, '2022-09-21'),
(9, 10, 'JAVE', 'Abeer', 'Lorem ipsum dolor sit amet consectetur adipiscing elit scelerisque, est augue lectus fames rutrum et eleifend, placerat aliquet netus cum semper tristique venenatis. A cras varius sagittis mi nascetur potenti erat tellus, tempus felis arcu dignissim morbi pulvinar tristique pretium quisque, volutpat ridiculus parturient dictum dapibus sociis curabitur. Rhoncus cras sociosqu torq', 'c++.jpg', 2, 100, 1, 0, '2022-09-21'),
(10, 10, 'C++', 'Ali', 'Lorem ipsum dolor sit amet consectetur adipiscing elit scelerisque, est augue lectus fames rutrum et eleifend, placerat aliquet netus cum semper tristique venenatis. A cras varius sagittis mi nascetur potenti erat tellus, tempus felis arcu dignissim morbi pulvinar tristique pretium quisque, volutpat ridiculus parturient dictum dapibus sociis curabitur. Rhoncus cras sociosqu torq', 'c++.jpg', 1, 100, 1, 0, '2022-09-21'),
(11, 10, 'C#', 'mohmmed', 'Lorem ipsum dolor sit amet consectetur adipiscing elit scelerisque, est augue lectus fames rutrum et eleifend, placerat aliquet netus cum semper tristique venenatis. A cras varius sagittis mi nascetur potenti erat tellus, tempus felis arcu dignissim morbi pulvinar tristique pretium quisque, volutpat ridiculus parturient dictum dapibus sociis curabitur. Rhoncus cras sociosqu torq', 'c++.jpg', 2, 100, 1, 0, '2022-09-21'),
(12, 10, 'CCNA', 'Ahmed', 'Lorem ipsum dolor sit amet consectetur adipiscing elit scelerisque, est augue lectus fames rutrum et eleifend, placerat aliquet netus cum semper tristique venenatis. A cras varius sagittis mi nascetur potenti erat tellus, tempus felis arcu dignissim morbi pulvinar tristique pretium quisque, volutpat ridiculus parturient dictum dapibus sociis curabitur. Rhoncus cras sociosqu torq', 'c++.jpg', 3, 100, 1, 1, '2022-09-22'),
(13, 9, 'C#', 'salman', 'this is book good C# languag', 'c++.jpg', 2, 100, 1, 0, '2022-10-05'),
(14, 9, '12', '5', '5212', 'c++.jpg', 1, 200, 1, 0, '2022-10-05'),
(15, 9, '12', '5', '5212', 'c++.jpg', 1, 200, 1, 0, '2022-10-05'),
(16, 9, 'as', 'as', 'as', 'c++.jpg', 1, 20, 1, 0, '2022-10-05'),
(17, 9, 'as', 'as', 'as', 'c++.jpg', 1, 20, 1, 1, '2022-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(120) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `role_admin` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(120) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `status`, `role_admin`, `password`, `created`) VALUES
(1, 'abdullah', '0593499178', 'a@a.com', 0, 0, '$2y$10$j.tyfMHpR9HZ0zmBBBEoW.Dx4K2AqBKbFbc4pG03GnxVSj9L8lX0G', '2022-10-1'),
(2, 'osamah', '0580583503', 'o@o.com', 1, 1, '$2y$10$DgniHT2MeST/uK3xqP2N5OwVf1Llt9Y7TxgI.yb2F2j8wWh8O3Oya', '2022-10-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`id_user`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buyer` (`id_buyer`),
  ADD KEY `product` (`id_product`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `buyer` FOREIGN KEY (`id_buyer`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `id_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
