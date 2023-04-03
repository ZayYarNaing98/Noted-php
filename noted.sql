-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2023 at 06:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noted`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `body`, `created_at`) VALUES
(5, 'Vision', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC.aa', '2023-03-24 03:46:38'),
(6, 'ironmanaaa', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC.aa', '2023-03-30 05:27:32');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `todo_id` int(11) NOT NULL,
  `todo_list` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`todo_id`, `todo_list`, `user_id`) VALUES
(1, 'Take Relexxxxxx', 1),
(2, 'Drink Water', 1),
(3, 'Lesson', 2),
(4, 'someing', 2),
(5, 'swimming', 3),
(6, 'dsaf', 3),
(18, 'asdfhbjh', 1),
(19, 'sadness', 2),
(21, 'time to play game game', 8),
(22, 'something', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`, `created_at`) VALUES
(1, 'Bob', 'bob@gmail.com', '$2y$10$4XbwU1oS2erjZ0NzfLO45u.5a4iRwZ3.PKl5IihjFqcJtSnAS81gu', '2023-03-23 22:32:23'),
(2, 'Alice', 'alice@gmail.com', '$2y$10$4XbwU1oS2erjZ0NzfLO45u.5a4iRwZ3.PKl5IihjFqcJtSnAS81gu', '2023-03-23 22:32:57'),
(3, 'John', 'john@gmail.com', '$2y$10$4XbwU1oS2erjZ0NzfLO45u.5a4iRwZ3.PKl5IihjFqcJtSnAS81gu', '2023-03-28 19:37:46'),
(6, 'sir', 'zyn@gmail.com', '$2y$10$4XbwU1oS2erjZ0NzfLO45u.5a4iRwZ3.PKl5IihjFqcJtSnAS81gu', '2023-03-30 12:00:27'),
(7, 'baba', 'b@gmail.com', '$2y$10$cAjR1O.Yqs1ZTf1otcciv.GtSywrW63RtQqjv9w5my9CvdH0FiGqm', '2023-03-30 12:02:07'),
(8, 'ZayYarNaing', 'zayarnaing@gmail.com', '$2y$10$v7oiuMHUa.IlM0OULPHeje74XktcI2rekwaDG9EsXY58RP3Kv1/KC', '2023-03-30 14:57:34'),
(9, 'zwe', 'zwe@gmail.com', '$2y$10$jIjxJ1eiy/os9noYttLYmeMa0uS/QrqaEU91t.dwsgFOn3w1ufz7S', '2023-04-02 15:13:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`todo_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `todo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
