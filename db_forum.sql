-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 07:25 PM
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
-- Database: `db_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `comment` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `post_id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_description` varchar(225) NOT NULL,
  `num_most_comment` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`post_id`, `user_id`, `post_title`, `post_description`, `num_most_comment`, `created_at`) VALUES
(1, '1', 'How to use Foreach Loop To Print Out A Json Data 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo con', 0, '2019-12-13 22:21:19'),
(2, '1', 'How to use Foreach Loop To Print Out A Json Data 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo con', 0, '2019-12-13 22:34:02'),
(3, '1', 'How to use Foreach Loop To Print Out A Json Data 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo con', 0, '2019-12-13 22:39:02'),
(4, '1', 'asd', 'asd', 0, '2019-12-16 18:34:43'),
(5, '1', 'asdsa', 'asdasd', 0, '2019-12-16 18:36:22'),
(6, '1', 'asdsa', 'asdasd', 0, '2019-12-16 18:36:52'),
(7, '1', 'Mama', 'Mama', 0, '2019-12-16 18:39:15'),
(8, '1', 'Manuel', 'asdsad', 0, '2019-12-16 20:06:24'),
(9, '1', 'asdjakdj', 'asdsadasdasld', 0, '2019-12-16 20:06:54'),
(10, '1', 'health', 'adsamdklsajdlasjdla', 0, '2019-12-16 20:17:14'),
(11, '1', 'dsadsadad', '', 0, '2019-12-16 20:17:28'),
(12, '1', 'ffffff', 'ddddsd', 0, '2019-12-16 20:17:39'),
(15, '1', 'asdas', 'asdasd', 0, '2019-12-16 21:13:21'),
(16, '1', 'asdasd', 'asdsad', 0, '2019-12-16 21:21:43'),
(17, '1', 'Moi', 'Moiasdasd', 0, '2019-12-16 21:33:42'),
(20, '3', 'Manuel', 'Mama', 0, '2019-12-17 02:51:09'),
(21, '3', '123', '123123123', 0, '2019-12-17 02:56:41'),
(22, '3', 'MaMa', 'asdasdsa', 0, '2019-12-17 02:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(225) NOT NULL,
  `user_profile_pic` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `full_name`, `username`, `email`, `password`, `user_profile_pic`, `created_at`) VALUES
(1, 'Michael Macinas', 'KelKelXD', 'macinasmichael05@gmail.com', 'kelkel', 'C:/Users/Student/Desktop.IU1.jpg', '2019-12-13 22:09:33'),
(2, 'Manuel', 'manman', 'manaman@gmail.com', 'asd', '', '2019-12-16 20:54:02'),
(3, 'Michael Macinas', 'kelkel', 'macinasmichael05@gmail.com', '123456', '', '2019-12-16 22:56:39'),
(4, 'man', 'man', 'man@yahoo.com', '123456', '', '2019-12-17 01:36:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
