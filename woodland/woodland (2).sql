-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 12:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `woodland`
--

-- --------------------------------------------------------

--
-- Table structure for table `wuc_users`
--

CREATE TABLE `wuc_users` (
  `id` int(11) NOT NULL,
  `userID` varchar(15) NOT NULL,
  `user_first_name` varchar(20) NOT NULL,
  `user_last_name` varchar(20) NOT NULL,
  `user_birthdate` date NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_mobile` varchar(10) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_status` varchar(20) NOT NULL DEFAULT 'inactive',
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `user_created_at` date NOT NULL DEFAULT current_timestamp(),
  `role` varchar(25) NOT NULL DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wuc_users`
--

INSERT INTO `wuc_users` (`id`, `userID`, `user_first_name`, `user_last_name`, `user_birthdate`, `user_gender`, `user_email`, `user_mobile`, `user_password`, `user_status`, `is_admin`, `user_created_at`, `role`) VALUES
(2, '78910', 'Dorje', 'Lama', '2022-05-02', 'Male', 'dorje12@gmail.com', '9812203151', '$2y$10$it7ZpV5L3ZjaQPLbaEzhcu5KAFjzgFEG2SGdeEpqjXo4FxUXnqDU6', 'active', 1, '2022-05-28', 'Admin'),
(24, '666666', 'Renish', 'Shrestha', '2022-06-01', 'Male', 'renish@gmail.com', '9811111111', '$2y$10$it7ZpV5L3ZjaQPLbaEzhcu5KAFjzgFEG2SGdeEpqjXo4FxUXnqDU6', 'active', 0, '2022-06-01', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wuc_users`
--
ALTER TABLE `wuc_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wuc_users`
--
ALTER TABLE `wuc_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
