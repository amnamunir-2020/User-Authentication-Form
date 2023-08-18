-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 02:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `gender`, `dob`, `created_at`, `updated_at`) VALUES
(1, 'amna', 'munir', 'amnamunir', 'amnamunir612@gmail.com', '123', 'female', '2023-08-12', '2023-08-12 16:35:28', '2023-08-12 16:35:28'),
(2, 'amna', 'munir', 'amnamunir', 'amnamunir612@gmail.com', '', 'female', '2023-08-12', '2023-08-12 16:37:56', '2023-08-12 16:37:56'),
(3, 'maher', 'zain', 'maherzain', 'maher@gmail.com', '11', 'male', '2023-08-12', '2023-08-12 16:44:42', '2023-08-12 16:44:42'),
(48, 'ilma', 'a', 'root', 'amnamunir@gmail.com', '000', 'female', '2023-09-05', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'ali', 'akbar', 'aliakbar', 'aliakbar@gmail.com', '1077', 'male', '2023-08-16', '2023-08-16 16:48:33', '2023-08-16 16:48:33'),
(50, 'josh', 'h', 'joshh', 'josh@gmail.com', '1077', 'male', '2023-08-29', '2023-08-16 17:26:13', '2023-08-16 17:26:13'),
(51, 'sami', 'y', 'samiy', 'sami@gmail.com', '1099', 'male', '2023-08-23', '2023-08-16 17:27:40', '2023-08-16 17:27:40'),
(52, 'Anum', 'ahmed', 'anumahmed', 'anum@gmail.com', '123', 'female', '2023-08-09', '2023-08-16 18:30:06', '2023-08-16 18:30:06'),
(53, 'Falak', 'kamran', 'falak', 'falak@gmail.com', '111', 'female', '2023-08-23', '2023-08-17 12:20:18', '2023-08-17 12:20:18'),
(54, 'ahmer', 'bilal', 'ahmer1077', 'ahmer@gmail.com', '1077', 'male', '2023-12-18', '2023-08-17 13:56:03', '2023-08-17 13:56:03'),
(55, 'Maher', 'Zain', 'maherzain', 'maherzain@gmail.com', '111', 'male', '2023-08-16', '2023-08-17 15:07:14', '2023-08-17 15:07:14'),
(56, 'farah', 'mehtab', 'farahmehtab', 'farah@gmail.com', '1997', 'female', '2023-09-07', '2023-08-17 15:26:24', '2023-08-17 15:26:24'),
(57, 'ammar', 'haryani', 'ammarharyani', 'ammar2gmail.com', '1010', 'male', '2023-09-04', '2023-08-17 15:29:48', '2023-08-17 15:29:48'),
(58, 'ammar', 'haryani', 'ammarharyani', 'ammar@gmail.com', '1010', 'male', '2023-09-04', '2023-08-17 15:30:46', '2023-08-17 15:30:46'),
(59, 'marium', 'munir', 'marium1077', 'marium@gmail.com', '1077', 'female', '2023-06-29', '2023-08-17 16:26:17', '2023-08-17 16:26:17'),
(60, 'Asad', 'Iqbal', 'asadiqbal', 'asad.iqbal@gmail.com', '1212', 'male', '2001-01-01', '2023-08-17 16:47:34', '2023-08-17 16:47:34'),
(61, 'Leena', 'John', 'leenajohn', 'leena.josh@gmail.com', '4040', 'female', '2023-03-10', '2023-08-17 16:59:34', '2023-08-17 16:59:34'),
(62, 'abde', 'viller', 'abdeviller', 'abdeviller@gmail.com', '000', 'male', '2023-08-28', '2023-08-17 17:48:45', '2023-08-17 17:48:45'),
(63, 'bilal', 'bhai', 'bilal', 'bilal@gmail.com', '1212', 'male', '2023-08-29', '2023-08-17 17:55:14', '2023-08-17 17:55:14');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
