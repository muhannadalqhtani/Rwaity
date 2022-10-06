-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 01, 2022 at 04:16 PM
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
(1, 'ali', '0550550553', 'k@k.com', 0, 0, '$2y$10$j.tyfMHpR9HZ0zmBBBEoW.Dx4K2AqBKbFbc4pG03GnxVSj9L8lX0G', '2022-10-1'),
(2, 'awad', '0505618181', 'w@w.com', 1, 1, '$2y$10$DgniHT2MeST/uK3xqP2N5OwVf1Llt9Y7TxgI.yb2F2j8wWh8O3Oya', '2022-10-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
