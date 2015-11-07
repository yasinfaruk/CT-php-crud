-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2015 at 03:54 PM
-- Server version: 5.6.25-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ct`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `salary` int(3) NOT NULL,
  `status` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `age`, `salary`, `status`, `email`, `password`) VALUES
(1, 'Sujan', 44, 4343, 's', 'sujan@mail.com', '1234'),
(6, 'Rahim', 22, 231312, 'student', 'rahim@mail.com', '1234'),
(7, 'Karim', 22, 231312, 'student', 'karim@mail.com', '1234'),
(8, 'Mamun', 22, 231312, 'student', 'karim@mail.com', ''),
(9, 'Suman', 22, 231312, 'student', 'karim@mail.com', ''),
(11, 'Sujan', 22, 231312, 'student', 'sujan@mail.com', '1234'),
(12, 'xyz', 0, 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
