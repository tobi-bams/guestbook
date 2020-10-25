-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 02:22 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `date_of_event` varchar(50) NOT NULL,
  `date_of_event_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `event_name`, `date_of_event`, `date_of_event_creation`) VALUES
(1, 2, 'Cowbell Competition', '2020-03-28', '2020-01-25 22:45:03'),
(2, 2, 'Spak', '2020-07-17', '2020-01-25 23:31:47'),
(3, 1, 'PHP Meet Up', '2020-02-14', '2020-01-25 23:39:10'),
(4, 1, 'Java Script Meet Up', '2020-03-20', '2020-01-26 21:49:53'),
(5, 4, 'Jamb Lesson', '2020-03-19', '2020-01-27 19:08:35'),
(6, 5, 'Anything', '2020-01-28', '2020-01-28 11:29:29'),
(7, 6, 'Yahoo Training', '2020-02-14', '2020-01-28 19:36:33'),
(8, 8, 'Jamb Registration', '2020-02-14', '2020-01-29 23:36:31'),
(9, 8, 'Concert', '2020-09-02', '2020-01-29 23:46:24'),
(10, 10, 'Thesis Presentation', '2020-02-21', '2020-01-31 12:46:47'),
(11, 10, 'Thesis Presentation 2', '2020-02-21', '2020-01-31 12:53:05'),
(12, 10, 'Thesis Presentation 3', '2020-02-03', '2020-01-31 12:54:16'),
(13, 10, 'Thesis Presentation 4', '2020-02-21', '2020-01-31 12:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `event_register_one`
--

CREATE TABLE `event_register_one` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_of_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_register_one`
--

INSERT INTO `event_register_one` (`id`, `event_id`, `user_id`, `date_of_register`) VALUES
(99, 4, 10, '2020-01-31 13:54:22'),
(100, 13, 2, '2020-01-31 13:59:57'),
(101, 1, 10, '2020-01-31 14:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`id`, `fname`, `lname`, `oname`, `gender`, `state`, `email`, `username`, `password`) VALUES
(1, 'Oluwatobi', 'Bamidele', 'Pius', 'Male', 'Osun', 'teebams49@gmail.com', 'teebams', 'tobi'),
(2, 'Tama', 'Nuhu', '', 'Female', 'Lagos', 'tama@gmail.com', 'tama', 'tama'),
(3, '', '', '', '', '', '', '', ''),
(4, 'Maryam', 'Oyebode', '', 'Female', 'Oyo', 'maryam@gmail.com', 'ronke', 'maryam'),
(5, 'Shammy', 'Nuhu', '', 'Male', 'Lagos', 'shammy@gmail.com', 'shammy', 'funmi'),
(6, 'Demola', 'Oyebode', '', 'Male', 'Lagos', 'samad@gmail.com', 'samad', 'demola'),
(7, 'Timi', 'Bamidele', '', 'Male', 'Lagos', 'timzy@gmail.com', 'timzy', 'timi'),
(8, 'Tele', 'Bamidele', '', 'Female', 'Imo', 'tele@gmail.com', 'lizzy', 'lizzy'),
(9, '', '', '', '', 'Lagos', '', '', ''),
(10, 'Kaka', 'Nuhu', '', 'Female', 'Lagos', 'kaka@gmail.com', 'kaka', 'kaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `event_register_one`
--
ALTER TABLE `event_register_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `event_register_one`
--
ALTER TABLE `event_register_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
