-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 12:30 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(100) NOT NULL,
  `images` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` int(30) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `images`, `name`, `description`, `price`, `rating`, `review`) VALUES
(1, 'images/r23.jpg\"', 'SUPER LATIVE CLASS', 'Hotel rooms are second home to famous people.', 2000, 3, 'deep'),
(2, 'images/r26.jpg\"', 'SUPER LATIVE CLASS', 'Sometimes, the best you can do is lock your self i', 3000, 4, 'deep'),
(3, 'images/r28.jpg\"', 'SEA SIDE VIEW', 'Hotel room is not the best place to bring random s', 2500, 1, 'deep'),
(4, 'images/r33.jpg\"', 'DOUBLE BED', 'Lexury is not all that matters in a hotel room a h', 2000, 4, 'good'),
(5, 'images/r40.jpg\"', 'SUPER CLASS', 'The hotel is the best hide out you can evre find.', 3000, 4, 'ddd'),
(6, 'images/r41.jpg\"', 'SUPER LATIVE CLASS', 'Life is allabout waiting for the right movment.', 4000, 0, ''),
(7, 'images/r48.png\"', 'DREAM CLASS', 'Life is allabout waiting for the right movment.', 4000, 0, ''),
(8, 'images/r47.jpg\"', 'DREAM CLASS', 'A touch of class to a hotel room add some flavour ', 2500, 0, ''),
(9, 'images/r46.jpg\"', 'GARDEN SIDE VIEW', 'Good hotels focus on social aspect in their operat', 3000, 0, ''),
(10, 'images/r50.jpg', 'DOUBLE BED', 'East or west, home is best.', 2500, 0, ''),
(11, 'images/h1.jpg', 'LEXURY CLASS', 'Every place can be an art studio.', 2200, 0, ''),
(12, 'images/r53.jpg', 'LEXURY CLASS', 'Every place can be an art studio.', 4000, 0, ''),
(13, 'images/r52.jpg', 'GARDEN SIDE VIEW', 'Good hotels focus on social aspect in their operat', 3000, 0, ''),
(14, 'images/r19.jpg', 'GARDEN SIDE VIEW', 'East or west, home is best.', 2000, 0, ''),
(15, 'images/r50.jpg', 'LEXURY CLASS', 'Every place can be an art studio.', 3000, 0, ''),
(16, 'images/h4.jpg', 'LEXURY CLASS', 'Every place can be an art studio.', 3000, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `our-facilities`
--
ALTER TABLE `our-facilities`
  ADD PRIMARY KEY (`our-facilities_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `our-facilities`
--
ALTER TABLE `our-facilities`
  MODIFY `our-facilities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
