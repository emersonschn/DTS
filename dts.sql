-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2025 at 01:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dts`
--

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE `officers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `bio` text DEFAULT NULL,
  `image` varchar(512) DEFAULT NULL,
  `grade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`id`, `name`, `position`, `bio`, `image`, `grade`) VALUES
(1, 'Joseph Reynolds', 'President', 'Joseph is from townville and currently studies construction systems management.', 'images/john_doe.jpg', 'Junior'),
(2, 'Evan Miller', 'Vice President', 'Evan is from Erie county and currently studies Ag Business', 'images/john_doe.jpg', 'Sophomre'),
(3, 'Jed Adams', 'Secretary', 'Jed is from Maro county and currently studies Ag Business', 'images/john_doe.jpg', 'Sophomore'),
(4, 'Caleb Deming', 'Treasurer', 'Caleb is from Defiance county and currently studies ???', 'images/john_doe.jpg', 'Junior'),
(5, 'Aaron Muckerji', 'Social Chair', 'Aaron is from Nashville and currently studies Economics.', 'images/john_doe.jpg', 'Freshman'),
(6, 'Matthew Mazzaro', 'Director of Recruitment', 'Matthew is from ??? and currently studies Animal Science.', 'images/john_doe.jpg', 'Sophomore'),
(7, 'Hayden Johnson', 'House Manager', 'Hayden is from ??? and currently studies Animal Science', 'images/john_doe.jpg', 'Senior'),
(8, 'Emerson Schnipke', 'Director of Communications', 'Emerson is from Putnam county and currently studies Computer Science and Engineering', 'images/john_doe.jpg', 'Freshman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
