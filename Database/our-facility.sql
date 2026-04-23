-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 03:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `our-facilities`
--

CREATE TABLE `our-facilities` (
  `our-facilities_id` int(11) NOT NULL,
  `room_service` text NOT NULL,
  `room_cleaning` text NOT NULL,
  `order_meal` text NOT NULL,
  `any_help` text NOT NULL,
  `emergency` text NOT NULL,
  `any_issues` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `our-facilities`
--

INSERT INTO `our-facilities` (`our-facilities_id`, `room_service`, `room_cleaning`, `order_meal`, `any_help`, `emergency`, `any_issues`) VALUES
(1, 'Service to other is the rent you pay for your room here on earth...', 'cleaning and organizing is a practice, not a project', 'you dont need a silver fork to eat good food', 'Help others without any reason and give without the expectation of receving anything in return.', 'Care shouldn\'t start in the emergency room\r\n', 'Where there is problem there is an oppurtunity to learn something new');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `our-facilities`
--
ALTER TABLE `our-facilities`
  ADD PRIMARY KEY (`our-facilities_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `our-facilities`
--
ALTER TABLE `our-facilities`
  MODIFY `our-facilities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
