-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2022 at 10:59 AM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chaurasiya_ji`
--

-- --------------------------------------------------------

--
-- Table structure for table `Form`
--

CREATE TABLE `Form` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contact` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Form`
--

INSERT INTO `Form` (`id`, `name`, `contact`, `email`, `gender`, `dob`, `comment`) VALUES
(63, 'Akshat_Chaurasiya', '9451490811', 'akshat@gmail.com', 'male', '2022-03-25', 'hiiii akku'),
(64, 'Narendra', '8525357512', 'thfjdk@kjkkj.efef', 'male', '2022-03-25', 'comment'),
(69, 'Sumit', '9415744993', 'sumit@gmail.com', 'male', '2022-03-25', 'hiii sunnu ji'),
(71, 'Akshat_Chaurasiya', '9451490811', 'akshat@gmail.com', 'male', '2022-03-25', 'hiiii'),
(76, 'Aman Kumar', '9918968633', 'aman@sgmial.com', 'male', '2022-03-28', 'hiii aman'),
(77, 'demo', '9000000000', 'demo@domain.com', 'other', '2022-03-29', 'comment'),
(79, 'Deepu ji', '7007601635', 'deepu@gmail.com', 'male', '1995-06-15', 'hii deepu ji'),
(80, 'pooja', '9000000000', 'pooja@gmail.com', 'female', '2022-03-29', 'hiii pooja'),
(81, 'Akshat', '9415744993', 'akshat@gmail.com', 'male', '2022-03-29', 'comment'),
(83, 'check', '9000000000', 'check@gmail.com', 'other', '2022-03-29', 'check'),
(84, 'demo', '9000000000', 'demo@demo.com', 'other', '2022-03-29', 'comment'),
(85, 'Ku. kajal', '9000000000', 'kajal@gmail.com', 'female', '2000-07-26', 'hiii kalllo'),
(86, 'abc', '9999999999', 'xyz@abc.com', 'other', '2022-03-29', 'comment'),
(87, 'test', '9999999999', 'test@test.com', 'other', '2022-03-29', 'test comment'),
(88, 'check', '9999999999', 'check@user.com', 'other', '2022-03-29', 'for check');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Form`
--
ALTER TABLE `Form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Form`
--
ALTER TABLE `Form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
