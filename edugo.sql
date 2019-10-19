-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 06:26 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edugo`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dsc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `syllabus` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `dsc`, `syllabus`, `instructor`, `instructor_img`, `link`, `thumbnail`) VALUES
(1, 'JavaScript', 'Js', 'learn ja,projects,lol,test', 'Hitesh Chodhary', 'hitesh.PNG', 'PLRAV69dS1uWTSu9cVg8jjXW8jndOYYJPP', 'learning.png'),
(2, 'Web Dev', 'webdev', 'html,css,js', 'Devslops', '153939.JPG', 'PLwoh6bBAszPrES-EOajos_E9gvRbL27wz', '1280-avengersendgame-helmet-1544196558582_1280w.jpg'),
(3, 'Networking', 'Networking', 'networking', 'NetworKING', 'dvdlol.png', 'PLh94XVT4dq02frQRRZBHzvj2hwuhzSByN', 'jared_joker_leto-wallpaper-1920x1080.jpg'),
(4, 'Test', 'test', 'test', 'TEST', 'dvdlol.png', 'PLLOxZwkBK52AE9jFVOGZTJxaiAC_xB8Yy', 'Photo from âš¡HtraPâš¡.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `usr_id` int(11) NOT NULL,
  `crs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`usr_id`, `crs_id`) VALUES
(1, 2),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `uname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `uname`, `email`, `phone`, `pwd`) VALUES
(1, 'Admin', 'admin@edugo.com', '1234567890', '$2y$10$UwhWZosDxt1BIBflKiFKZ.dYk4pkp/oEd0E5yqxul8ROzuMpTrgVS'),
(2, 'test', 'test@test.com', '', '$2y$10$bV6TM8Zj3v//W.6C4atu5evGGT/HHtUaX1bxyiDbHqiM6RHwqVIBW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD KEY `subs_fk1` (`usr_id`),
  ADD KEY `subs_fk2` (`crs_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subs_fk1` FOREIGN KEY (`usr_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `subs_fk2` FOREIGN KEY (`crs_id`) REFERENCES `courses` (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
