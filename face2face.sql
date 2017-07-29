-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2017 at 03:35 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `face2face`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_info`
--

CREATE TABLE `event_info` (
  `e_id` int(10) NOT NULL,
  `e_name` varchar(20) NOT NULL,
  `e_description` varchar(20) NOT NULL,
  `e_place` varchar(20) NOT NULL,
  `participant_limit` int(20) NOT NULL,
  `age_group` varchar(20) NOT NULL,
  `start_time` int(20) NOT NULL,
  `duration` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_info`
--

INSERT INTO `event_info` (`e_id`, `e_name`, `e_description`, `e_place`, `participant_limit`, `age_group`, `start_time`, `duration`) VALUES
(3, 'Kabaddi', 'Playing kabaddi', 'Kandivali', 11, '10-30', 500, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `u_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `addr_building` varchar(20) NOT NULL,
  `addr_street` varchar(20) NOT NULL,
  `addr_city` varchar(20) NOT NULL,
  `addr_state` varchar(20) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `hobby` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`u_id`, `fname`, `lname`, `gender`, `contact`, `addr_building`, `addr_street`, `addr_city`, `addr_state`, `occupation`, `hobby`, `username`, `password`) VALUES
(1, 'Rahul', 'Dravid', 'male', 0, '2', 'bangalore city', 'bangalore', '', 'cricketer', 'cricket', 'dravid', '123123123'),
(2, '', '', '', 0, '', '', '', '', '', '', '', ''),
(3, 'Mihir', 'Parikh', 'male', 2147483647, '23', 'asha nagar', 'mumbai', 'maharashtra', 'student', 'cricket', 'parikhmihir', '12313123'),
(4, 'mihir', 'as', 'asd', 1, '', 'asda', 'asd', 'asd', 'asda', 'asd', 'adsa', 'd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_info`
--
ALTER TABLE `event_info`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_info`
--
ALTER TABLE `event_info`
  MODIFY `e_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
