-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2026 at 08:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twist`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_email` varchar(70) NOT NULL,
  `a_pwd` varchar(50) NOT NULL,
  `a_create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_pwd`, `a_create_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'Admin@1234', '2026-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_des` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`, `c_des`) VALUES
(1, 'Chinese', ''),
(2, 'Punjabi', ''),
(3, 'Italian', ''),
(4, 'Mexican', ''),
(5, 'South Indian', ''),
(6, 'Gujrati', '');

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `i_id` int(11) NOT NULL,
  `i_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `r_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `r_des` varchar(500) NOT NULL,
  `r_time` int(11) NOT NULL,
  `r_level` varchar(50) NOT NULL,
  `r_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rec_ingredient`
--

CREATE TABLE `rec_ingredient` (
  `r_i_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `i_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_email` varchar(70) NOT NULL,
  `u_pwd` varchar(50) NOT NULL,
  `u_mob` int(11) NOT NULL,
  `u_create_at` date NOT NULL,
  `u_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_pwd`, `u_mob`, `u_create_at`, `u_status`) VALUES
(4, 'Aadhya', 'aadhya@gmail.com', 'user@123', 1234567890, '2026-06-29', 'Active'),
(8, 'niyati', 'niya@gmail.com', 'Niyati@123', 1234567890, '2026-06-30', 'Active'),
(9, 'Heer', '24020201116@darshan.ac.in', 'Heer@1122', 1111111111, '2026-07-01', 'Active'),
(10, 'niyati', '24020201130@darshan.ac.in', '123412', 1234567890, '2026-07-01', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `a_email` (`a_email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `rec_ingredient`
--
ALTER TABLE `rec_ingredient`
  ADD PRIMARY KEY (`r_i_id`),
  ADD KEY `r_id` (`r_id`),
  ADD KEY `i_id` (`i_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_email` (`u_email`),
  ADD UNIQUE KEY `u_pwd` (`u_pwd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_ingredient`
--
ALTER TABLE `rec_ingredient`
  MODIFY `r_i_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `c_id` FOREIGN KEY (`c_id`) REFERENCES `category` (`c_id`);

--
-- Constraints for table `rec_ingredient`
--
ALTER TABLE `rec_ingredient`
  ADD CONSTRAINT `rec_ingredient_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `recipe` (`r_id`),
  ADD CONSTRAINT `rec_ingredient_ibfk_2` FOREIGN KEY (`i_id`) REFERENCES `ingredient` (`i_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
