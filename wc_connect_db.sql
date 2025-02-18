-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 12, 2025 at 06:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wc_connect_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `wc_users`
--

CREATE TABLE `wc_users` (
  `id` int(11) NOT NULL,
  `fullnames` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `userrole` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `createdby` int(20) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wc_users`
--

INSERT INTO `wc_users` (`id`, `fullnames`, `username`, `email`, `contact`, `password`, `userrole`, `status`, `createdby`, `date_created`) VALUES
(5, 'Abdi Moha', 'codeman', 'codeman@gmail.com', '0392141834', '$2y$12$sgi6YLs9R57b3.cK4isodu.nr7xyQEoKy0SV7YJjJQoWbt1vyBJ1y', 'Admin', 'Active', 5, '2025-02-12 16:52:33'),
(6, 'ayan dev', 'ayan', 'ayan@gmail.com', '0753172256', '$2y$12$a0MI2RHZTUizL7Tw69XOhOCOvCKyQ9MhYbYfNxq5JIe7u5iB9gqb6', 'Admin', 'Active', 5, '2025-02-12 17:02:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wc_users`
--
ALTER TABLE `wc_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wc_users`
--
ALTER TABLE `wc_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
