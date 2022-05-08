-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 10:53 PM
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
-- Database: `painting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `admin_account_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`admin_account_id`, `username`, `pass_hash`) VALUES
(1, 'Andrei', '123456789'),
(3, 'Theo', '123456789'),
(4, 'Jiahui', '123456789'),
(5, 'George', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `client_account`
--

CREATE TABLE `client_account` (
  `email` varchar(255) NOT NULL,
  `pass_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_account`
--

INSERT INTO `client_account` (`email`, `pass_hash`) VALUES
('111@gmail.com', '$2y$10$83ER62LLd4.3EL3KAxQfrO6dpBTDKgzlGUlpll1MLSZ9YNziXYzMi'),
('a@gmail.com', '$2y$10$pATRPiiavqzlTiE9oxJWWe6J.ZEDCiED5wUQn12i1XzyODbrABClu'),
('aa@gmail.com', '$2y$10$C5fCIUeNkTFrWxLDRM0pwec.lHUEeLTph4Ag0PByOmfvKH35/zBSa'),
('b@gmail.com', '$2y$10$ZDhhIgQGoNzUNMvMm9hQQu/PllJbMY4l1Zodu2xYdpo/urrKUU2v.'),
('harry@gmail.com', '$2y$10$DnaEEO0BdZogsy0r4/TgpOxAgwp1Z8vhn0Oh52ZgsmNwtLEJ7BVzK');

-- --------------------------------------------------------

--
-- Table structure for table `client_profile`
--

CREATE TABLE `client_profile` (
  `client_profile_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `question` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `first_name`, `last_name`, `phone`, `email`, `question`) VALUES
(5, 'Jiahui', 'Xia', '(111)111-1111', '111@gmail.com', 'HI, i would like to know more information about painting for bedroom. Thank you'),
(6, 'Jiahuiiiiii', 'Xiaaaaaa', '(111)111-1111', '111111@gmail.com', 'I have a question');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_description` varchar(500) NOT NULL,
  `service_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_description`, `service_image`) VALUES
(3, 'Sealing', 'Stone surfaces need to be sealed properly to keep them clean and preserved. Whether it is your travertine floor, or granite counter,  Stone surfaces need to be sealed properly to keep them clean and preserved. Whether it is your travertine floor, or granite counter, Services Éconet can seal them to preserve them. To ensure best results it’s best to ensure a good cleaning takes place first. A sealed floor will look cleaner longer, will be harder to stain, and will eventually last a lot longer.   ', '62780bffcf0e1.jpg'),
(4, 'Painting', 'Whether indoors or out, for your home or your business, Service Éconet revamp the look of your walls, creating beautiful and fresh spaces. Our painters work efficiently to deliver a quality paint job in any room you need.   Our professional painting services are:  Interior painting services Exterior painting services', '62780c170f5b5.jpg'),
(5, 'Concrete Polishing & Repair', 'A concrete floor can rival any natural stone in beauty when polished to perfection. Our team combines expertise and technique to deliver a beautifully polished floor that will give the final touch to any space.  We can offer the following services and finishes  Mat finish Glossy finish Satin finish Broken concrete floor repairs', '62780c34b2831.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`admin_account_id`);

--
-- Indexes for table `client_account`
--
ALTER TABLE `client_account`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `client_profile`
--
ALTER TABLE `client_profile`
  ADD PRIMARY KEY (`client_profile_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `admin_account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client_profile`
--
ALTER TABLE `client_profile`
  MODIFY `client_profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client_profile`
--
ALTER TABLE `client_profile`
  ADD CONSTRAINT `email` FOREIGN KEY (`email`) REFERENCES `client_account` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
