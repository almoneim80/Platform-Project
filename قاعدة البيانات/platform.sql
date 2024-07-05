-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 11:29 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `asker_table`
--

CREATE TABLE `asker_table` (
  `id` int(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `section` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `type` text NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asker_table`
--

INSERT INTO `asker_table` (`id`, `full_name`, `user_name`, `password`, `gender`, `section`, `email`, `year`, `type`) VALUES
(3, 'حنان فلاتة', 't2', 't2', 'انثى', 'ذكاء اصطناعي', 't2@gamil.com', 2023, 'A'),
(4, 'وفاء ', 'wa90', '8613985ec49eb8f757ae6439e879bb2a', 'انثى', 'علوم الحاسب', 'wa90@gamil.com', 2023, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `daam_table`
--

CREATE TABLE `daam_table` (
  `id` int(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` text NOT NULL DEFAULT 'D'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daam_table`
--

INSERT INTO `daam_table` (`id`, `full_name`, `user_name`, `password`, `gender`, `email`, `type`) VALUES
(6, 'حنان فلاتة', 'd1', '9948c645c094247794f4c7acdbeb2bb6', 'm', 'd1@gamil.com', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(100) NOT NULL,
  `p_name` varchar(250) NOT NULL,
  `class` text NOT NULL,
  `gender` text NOT NULL,
  `daam` text NOT NULL,
  `p_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `p_name`, `class`, `gender`, `daam`, `p_image`) VALUES
(4, 'مشروع1', 'أخرى', 'الكل', 'معنوي', 'agreement.png'),
(5, 'مشروع1', 'أخرى', 'الكل', 'معنوي', 'agreement.png'),
(6, 'مشروع1', 'أخرى', 'الكل', 'معنوي', 'agreement.png'),
(7, 'مشروع1', 'انثى', 'غير ذلك', 'مادي', 'Design.png'),
(8, 'مشروع33', 'أطفال', 'ذكور', 'معنوي', 'aqar2.jpg'),
(9, 'مشروع33', 'أطفال', 'ذكور', 'معنوي', 'photo_2022-10-29_16-30-02 (1).jpg'),
(10, 'مشروع33', 'أطفال', 'ذكور', 'معنوي', 'photo_2022-10-29_16-30-02 (1).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asker_table`
--
ALTER TABLE `asker_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daam_table`
--
ALTER TABLE `daam_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asker_table`
--
ALTER TABLE `asker_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `daam_table`
--
ALTER TABLE `daam_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
