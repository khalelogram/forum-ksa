-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 08:49 AM
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
  `account_type` int(1) NOT NULL,
  `user_profile_pic` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `full_name`, `username`, `email`, `password`, `account_type`, `user_profile_pic`, `created_at`) VALUES
(1, '', 'username', '', 'password', 0, '', '2019-12-13 07:29:36'),
(2, 'asa', 'username', '', 'password', 0, '', '2019-12-13 07:29:53'),
(3, 'asa', 'username', 'manuelcarr68@gmail.com', 'password', 0, '', '2019-12-13 07:30:03'),
(4, 'asa', 'username', 'manuelcarr68@gmail.com', 'password', 0, '', '2019-12-13 07:30:34'),
(5, 'manuel carr ', 'username', 'manuelcarr68@gmail.com', 'password', 0, '', '2019-12-13 07:30:57'),
(6, '', 'username', '', 'password', 0, '', '2019-12-13 07:42:48'),
(7, '', 'username', '', 'password', 0, '', '2019-12-13 07:43:12'),
(8, '', 'username', '', 'password', 0, '', '2019-12-13 07:43:14'),
(9, '', 'username', '', 'password', 0, '', '2019-12-13 07:43:15'),
(10, '', 'username', '', 'password', 0, '', '2019-12-13 07:45:24'),
(11, '', 'username', '', 'password', 0, '', '2019-12-13 07:45:57'),
(12, 'df', 'username', '', 'password', 0, '', '2019-12-13 07:47:22'),
(13, 'df', 'username', '', 'password', 0, '', '2019-12-13 07:47:48'),
(14, 'df', 'username', '', 'password', 0, '', '2019-12-13 07:47:52'),
(15, '', 'username', '', 'password', 0, '', '2019-12-13 07:50:08'),
(16, '', 'username', '', 'password', 0, '', '2019-12-13 07:53:09'),
(17, '', 'username', '', 'password', 0, '', '2019-12-13 07:53:25'),
(18, '', 'username', '', 'password', 0, '', '2019-12-13 07:54:33'),
(19, '', 'username', '', 'password', 0, '', '2019-12-13 07:54:42'),
(20, 'sadsadsad', 'username', '', 'password', 0, '', '2019-12-13 07:55:29'),
(21, '', 'username', '', 'password', 0, '', '2019-12-13 07:56:08'),
(22, 'sadsadsad', 'username', '', 'password', 0, '', '2019-12-13 07:56:28'),
(23, '', 'username', '', 'password', 0, '', '2019-12-13 07:56:30'),
(24, '', 'username', '', 'password', 0, '', '2019-12-13 07:56:31'),
(25, '', 'username', '', 'password', 0, '', '2019-12-13 07:57:13'),
(26, '', 'username', '', 'password', 0, '', '2019-12-13 08:00:55'),
(27, 'aasdsadsad', 'username', '', 'password', 0, '', '2019-12-13 08:01:43'),
(28, '', 'username', '', 'password', 0, '', '2019-12-13 08:02:20'),
(29, 'asdsad', 'username', '', 'password', 0, '', '2019-12-13 08:02:33'),
(30, 'asdsad', 'username', 'asdsad@yahoo.com', 'password', 0, '', '2019-12-13 08:03:21'),
(31, 'asdsad', 'username', 'asdsad@yahoo.com', 'password', 0, '', '2019-12-13 08:03:57'),
(32, 'asdsad', 'username', 'asdsad@yahoo.com', 'password', 0, '', '2019-12-13 08:03:57'),
(33, 'asdsad', 'username', 'asdsad@yahoo.com', 'password', 0, '', '2019-12-13 08:04:21'),
(34, 'asdsad', 'username', 'asdsad@yahoo.com', 'password', 0, '', '2019-12-13 08:04:54'),
(35, 'asdsad', 'username', 'asdsad@yahoo.com', 'password', 0, '', '2019-12-13 08:06:04'),
(36, 'asdsad', 'username', 'asdsad@yahoo.com', 'password', 0, '', '2019-12-13 08:06:06'),
(37, 'asdsad', 'username', 'asdsad@yahoo.com', 'password', 0, '', '2019-12-13 08:06:07'),
(38, 'asdsad', 'username', 'asdsad@yahoo.com', 'password', 0, '', '2019-12-13 08:06:15'),
(39, 'asdsad', 'username', 'asdsad@yahoo.com', 'password', 0, '', '2019-12-13 08:06:17'),
(40, '', 'username', '', 'password', 0, '', '2019-12-13 08:06:33'),
(41, 'manuel carr ', 'username', 'carr@yahoo.com', 'password', 0, '', '2019-12-13 08:08:16'),
(42, 'manuel carr ', 'username', 'carr@yahoo.com', 'password', 0, '', '2019-12-13 08:09:21'),
(43, 'manuel carr ', 'username', 'carr@yahoo.com', 'password', 0, '', '2019-12-13 08:09:23'),
(44, 'manuel carr ', 'username', 'carr@yahoo.com', 'password', 0, '', '2019-12-13 08:09:27'),
(45, '', 'username', '', 'password', 0, '', '2019-12-13 08:09:45'),
(46, '', 'username', '', 'password', 0, '', '2019-12-13 08:13:15'),
(47, '', 'username', '', 'password', 0, '', '2019-12-13 08:13:15'),
(48, '', 'username', '', 'password', 0, '', '2019-12-13 08:13:24'),
(49, '', 'username', '', 'password', 0, '', '2019-12-13 08:13:24'),
(50, '', 'username', '', 'password', 0, '', '2019-12-13 08:14:20'),
(51, 'asdsadsaasdsadsa', 'username', 'asdasd@yahoo.com', 'password', 0, '', '2019-12-13 08:18:27'),
(52, 'asdsadsaasdsadsa', 'username', 'asdasd@yahoo.com', 'password', 0, '', '2019-12-13 08:18:30'),
(53, 'asdsadsaasdsadsa', 'username', 'asdasd@yahoo.com', 'password', 0, '', '2019-12-13 08:18:31'),
(54, '', 'username', '', 'password', 0, '', '2019-12-13 08:19:39'),
(55, 'asdsad', 'username', 'asdsadklsadmk@yahoo.com', 'password', 0, '', '2019-12-13 08:24:08'),
(56, 'assad', 'username', '', 'password', 0, '', '2019-12-13 08:24:14'),
(57, 'assad', 'sadsad', '', '2132132', 0, '', '2019-12-13 08:24:36'),
(58, 'sadsad', 'asdsadsa', '', '2132132', 0, '', '2019-12-13 08:24:43'),
(59, 'sadsad', 'asdsadsa', '', '2132132', 0, '', '2019-12-13 08:25:19'),
(60, 'ds', 'sdsd', '', '2132132sdsd', 0, '', '2019-12-13 08:35:14'),
(61, 'ds', 'sdsd', '', '2132132sdsd', 0, '', '2019-12-13 08:35:28'),
(62, 'dsdsdd', 'sdsdddd', '', '2132132sdsdd', 0, '', '2019-12-13 08:35:35'),
(63, 'sadsad', 'asdsadsa', '', '2132132', 0, '', '2019-12-13 08:37:13'),
(64, 'sadsad', 'asdsadsa', '', '2132132', 0, '', '2019-12-13 08:37:16'),
(65, 'dsdsdd', 'sdsdddd', '', '2132132sdsdd', 0, '', '2019-12-13 08:37:26'),
(66, 'fdfdfd', 'fdfd', '', '2132132fdf', 0, '', '2019-12-13 08:37:37'),
(67, 'fdfdfd', 'fdfd', 'sajdklajsld@yahoo.com', '2132132fdf', 0, '', '2019-12-13 08:38:24'),
(68, 'fdfdfd', 'fdfd', '', '2132132fdf', 0, '', '2019-12-13 08:40:01'),
(69, '', '', '', '2132132', 0, '', '2019-12-13 08:42:57'),
(70, 'sadsad', 'asdsadsa', '', '2132132', 0, '', '2019-12-13 08:51:56'),
(71, 'sadsad', 'asdsadsa', '', '2132132', 0, '', '2019-12-13 08:51:59'),
(72, 'sadsad', 'asdsadsa', '', '2132132', 0, '', '2019-12-13 08:52:06'),
(73, '', 'asdsadsa', '', '2132132', 0, '', '2019-12-13 08:52:25'),
(74, '', 'asdsadsa', '', '2132132', 0, '', '2019-12-13 08:52:40'),
(75, 'manuel carr', 'carrfletch', 'manuelcarr68@gmail.com', '09192608123', 1, '', '2019-12-16 02:24:09'),
(76, 'test', 'test', 'test@test.com', '9222add1e5555e5881b61b53be94f8ef', 0, '', '2019-12-16 03:28:33'),
(77, 'asd', 'test', '', '560e4f37ff23b11999d7e5a8f04375b5', 0, '', '2019-12-16 03:29:26'),
(78, 'asd', 'test', '', 'ed92ab6d6418bde94a9e41aa79eba3c5', 0, '', '2019-12-16 03:29:29'),
(79, 'manuelcarr21', 'manman', 'manuelcarr68@gmail.com', '6524daaf8bd34aef74adadf9da09d814', 0, '', '2019-12-16 03:49:01'),
(80, 'manman', 'manman1', 'manman@gmail.com', '6524daaf8bd34aef74adadf9da09d814', 0, '', '2019-12-16 03:50:35'),
(81, 'man1', 'man1', 'man1@yahoo.com', 'man1', 0, '', '2019-12-16 03:53:15'),
(82, 'manuel', 'man1', 'carr@yahoo.com', '09192608123', 0, '', '2019-12-16 05:20:37'),
(83, 'man2', 'man2', 'man2@yahoo.com', 'man2', 0, '', '2019-12-16 07:41:05'),
(84, 'ma3', 'ma3', 'ma3@yahoo.com', 'ma3', 0, '', '2019-12-16 07:46:46'),
(85, 'ma3', 'ma3', 'ma3@yahoo.com', 'ma3', 0, '', '2019-12-16 07:47:15');

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
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
