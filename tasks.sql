-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2017 at 04:46 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasks`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `Description` varchar(2000) CHARACTER SET utf8 NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `image` varchar(500) CHARACTER SET utf8 NOT NULL,
  `Frange` int(11) NOT NULL,
  `state` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `idUser`, `Description`, `title`, `date`, `image`, `Frange`, `state`) VALUES
(3, 33, 'وصف المهمه الاولي ', 'المهمه الاولي ', '2017-06-08', 'uploads/Attachment_Images/Capture.PNG', 0, 'must'),
(6, 33, 'تدريب وصف', 'تجريب', '2017-01-01', 'uploads/Attachment_Images/Capture.PNG', 0, 'must'),
(7, 33, 'test desc', 'test', '2017-01-01', 'uploads/Attachment_Images/Capture.PNG', 0, 'must'),
(8, 33, 'sdf', 'sdf', '2017-01-01', 'uploads/Attachment_Images/goal-2.jpg', 0, 'done'),
(10, 33, 'sdf', 'sdf', '2017-12-31', '', 0, 'done'),
(12, 33, 'sdf', 'sdf', '2017-12-31', 'uploads/Attachment_Images/avatar-1.png', 0, 'trash'),
(13, 33, 'sdf', 'sdf', '2017-01-01', '', 0, 'trash');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `birth` date NOT NULL,
  `country` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(20) NOT NULL,
  `profilePicture` varchar(5000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `birth`, `country`, `phone`, `profilePicture`) VALUES
(33, 'ahmed salah', 'admin@admin.com', '123456789', '2017-01-01', 'sokrzzzzzz', '12345678913', 'uploads/profileImge/defult1.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
