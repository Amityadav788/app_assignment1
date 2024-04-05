-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2024 at 07:46 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment1`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `first_name`, `last_name`) VALUES
(11, 'ellen', 'writer'),
(12, 'olga', 'savelieva'),
(13, 'jack', 'smart'),
(14, 'donald', 'brain'),
(15, 'yao', 'dou');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `author_id` int DEFAULT NULL,
  `editor_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `translator_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `type`, `author_id`, `editor_id`, `translator_id`) VALUES
(1, 'time to grow', 'original', 11, '21', NULL),
(2, 'your trip', 'translated', 15, '22', '32'),
(3, 'lovely love', 'original', 14, '24', ''),
(4, 'Dream your life', 'original', NULL, '24', ''),
(5, 'oranges', 'translated', 12, '25', '31'),
(6, 'your happy life', 'translated', 15, '22', '33'),
(7, 'applied AI', 'translated', 13, '23', '34'),
(8, 'My last book', 'original', 11, '28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text,
  `author_id` int DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `address`, `author_id`, `created_date`, `updated_date`) VALUES
(3, 'Amit Yadav', 'officialankit1998@gmail.com', '9140088783', 'Chak sethwal, Rani ki sarai', 30, '2024-01-24 16:12:59', '2024-01-24 16:12:59'),
(4, 'Ankit Yadav', 'ankityadavdc@gmail.com', '09140088783', 'Maya nagar colony,Kasabad, Rani ki sarai', 30, '2024-01-24 16:13:46', '2024-01-24 16:13:46'),
(5, 'RRR', 'rm@gmail.com', '09090909', 'HARGOBIND NAGAR', 32, '2024-01-24 16:17:12', '2024-01-24 16:17:12'),
(6, 'Ankit Yadav', 'ankityadavdc@gmail.com', '09140088783', 'Maya nagar colony,Kasabad, Rani ki sarai', 30, '2024-01-25 11:39:55', '2024-01-25 11:39:55'),
(7, 'praveen', 'pk@gmail.com', '0000000', 'salem tabri', 34, '2024-01-25 13:13:54', '2024-01-25 13:13:54'),
(8, 'gurkawal', 'gk@gmail.com', '9999999', 'model town', 34, '2024-01-25 13:15:14', '2024-01-25 13:15:14'),
(9, 'muskan ', 'my@gmail.com', '888888888', 'HARGOBIND NAGAR', 34, '2024-01-25 13:15:42', '2024-01-25 13:15:42'),
(10, 'aman', 'as@gmail.com', '66666666', 'malwa ', 35, '2024-01-25 13:18:35', '2024-01-25 13:18:35'),
(11, 'taran ', 'ts@gmail.com', '55555555', 'New Hargobind Nagar, Backside Hero steel', 35, '2024-01-25 13:19:05', '2024-01-25 13:19:05'),
(12, 'amit', 'ay@gmail.com', '4444444444', 'Maya nagar colony,Kasabad, ', 35, '2024-01-25 13:19:38', '2024-01-25 13:19:38'),
(13, 'jeet', 'jy@gmail.com', '444444444', 'Chak sethwal, Rani ki sarai', 35, '2024-01-25 13:20:10', '2024-01-25 13:20:10'),
(14, 'sandy', 'sk@gmail.com', '2222222', 'Maya nagar colony,Kasabad, Rani ki sarai', 35, '2024-01-25 13:20:38', '2024-01-25 13:20:38'),
(18, 'wwe', 'ww@gmail.com', '6767677667', 'nyc', 35, '2024-01-25 16:36:57', '2024-01-25 16:36:57'),
(19, 'bheem', 'bb@gmail.com', '8998898989', 'old delhi', 36, '2024-01-29 13:46:39', '2024-01-29 13:46:39'),
(23, 'publication', 'kp@gmail.com', '89899889', 'books market', 36, '2024-01-29 14:38:17', '2024-01-29 14:38:17'),
(24, 'gopi chand', 'gs@gmail.com', '98898989', 'model town', 36, '2024-01-29 15:47:53', '2024-01-29 15:47:53'),
(25, 'pritam', 'nbnb@gmail.com', '8989898989', 'pritam nagar', 36, '2024-01-29 22:10:47', '2024-01-29 22:10:47'),
(26, 'jhghgghy', 'py@gmail.com', '89898989', 'sherpur', 36, '2024-01-30 13:54:43', '2024-01-30 13:54:43'),
(27, 'vishal ', 'vy@gmail.com', '8798787', 'model town', 36, '2024-01-30 14:58:09', '2024-01-30 14:58:09'),
(28, 'mandeep', 'ms@gmail.com', '00909889778', 'nkjfh', 36, '2024-01-30 14:58:30', '2024-01-30 14:58:30'),
(29, 'deepak', 'dk@gmail.com', '456777887', 'ksdfhfh', 36, '2024-01-30 14:58:52', '2024-01-30 14:58:52'),
(30, 'tarun', 'ts@gmail.com', '8787897879', 'yuyuyu', 36, '2024-01-30 14:59:15', '2024-01-30 14:59:15'),
(31, 'prem ', 'pc@gmail.com', '878667686', 'tttttt', 36, '2024-01-30 14:59:42', '2024-01-30 14:59:42'),
(32, 'guru', 'gs@gmail.com', '76675667', 'route', 36, '2024-01-30 15:00:16', '2024-01-30 15:00:16'),
(34, 'randeep', 'rh@gmail.com', '87878879', 'roger', 36, '2024-01-30 15:01:40', '2024-01-30 15:01:40'),
(35, 'gopi', 'gc@gmail.com', '8769967', 'tajpur', 36, '2024-01-30 15:02:23', '2024-01-30 15:02:23'),
(36, 'raghu', 'ry@gmail.com', '8796787890', 'sahara', 36, '2024-01-30 15:03:36', '2024-01-30 15:03:36'),
(37, 'prabhu', 'pj@gmail.com', '8989898989', 'mumbai', 36, '2024-02-06 20:15:04', '2024-02-06 20:15:04'),
(38, 'chanchal', 'ch@gmail.com', '898989', 'HARGOBIND NAGAR', 39, '2024-02-06 20:21:24', '2024-02-06 20:21:24'),
(39, 'rohit kasabad', 'rk@gmail.com', '89898989', 'kasabad', 39, '2024-02-06 20:24:01', '2024-02-06 20:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `editors`
--

CREATE TABLE `editors` (
  `id` int NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `editors`
--

INSERT INTO `editors` (`id`, `first_name`, `last_name`) VALUES
(21, 'daniel', 'brown'),
(22, 'mark', 'johnson'),
(24, 'catherine', 'roberts'),
(25, 'sebastian', 'wright'),
(26, 'barbara', 'jones'),
(27, 'matthew', 'smith');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text,
  `phone` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` int NOT NULL DEFAULT '1',
  `image` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `created_date`, `updated_date`, `is_active`, `image`) VALUES
(31, 'Ankit Yadav', 'amityadav10409@gmail.com', '0000000000', '88888888', '2024-01-24 13:38:15', '2024-01-24 13:38:15', 0, ''),
(32, 'Ankit Yadav', 'officialankit1998@gmail.com', '000000', '4444444444', '2024-01-24 13:38:47', '2024-01-24 13:38:47', 1, ''),
(33, 'kjfhuifhg', 'officialankit1998@gmail.com', 'hjhjjhjhj', '4444444444', '2024-01-24 13:39:47', '2024-01-24 13:39:47', 1, ''),
(34, 'gurpreet singh', 'GS@gmail.com', 'gurpreet', '0000000', '2024-01-25 13:10:26', '2024-01-25 13:10:26', 1, ''),
(36, 'kapur saab', 'ks@gmail.com', 'saab', '09090909', '2024-01-29 13:44:43', '2024-01-29 13:44:43', 0, ''),
(37, 'gurkawal kaur', 'gk@gmail.com', 'lnww', '878787887', '2024-01-31 23:44:10', '2024-01-31 23:44:10', 1, ''),
(38, 'aman singh', 'as@gmail.com', 'aman1234', '6767898968', '2024-02-01 00:00:18', '2024-02-01 00:00:18', 1, ''),
(39, 'abhishek', 'ay@gmail.com', 'abhi', '7878788787', '2024-02-06 20:14:04', '2024-02-06 20:14:04', 0, ''),
(40, 'pintu ', 'jee@gmail.com', 'hajkhs', '454161465464', '2024-02-24 23:21:15', '2024-02-24 23:21:15', 1, ''),
(41, 'Ankit Yadav', 'ty@gmail.com', 'yfgvhv', '000122121', '2024-02-24 23:22:46', '2024-02-24 23:22:46', 1, ''),
(43, 'preety', 'pry@gmail.com', 'yuyuyuyu', '4646464646', '2024-02-24 23:36:51', '2024-02-24 23:36:51', 0, ''),
(44, 'Ankit Yadav', 'officialankit1998@gmail.com', 'kjijij', '6565', '2024-02-25 20:23:07', '2024-02-25 20:23:07', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
