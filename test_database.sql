-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2017 at 06:19 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eg`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `mobileno` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `subject` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `mobileno` bigint(10) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `Balance` int(11) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `notificationtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`firstname`, `lastname`, `mobileno`, `password`, `Balance`, `lastlogin`, `notificationtime`) VALUES
('chaitanya', 'e', 9876543211, '123', 1611, '2017-04-13 07:06:36', '2017-04-05 08:41:55'),
('ram', 'p', 8500785007, '123', 2889, '2017-04-12 12:54:19', '2017-04-05 09:25:03'),
('dsf', 'kjf', 1111111111, '11111', 539, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('ws', 'hghg', 1234567896, '123', 1123, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
--('$vfirstname', '$vlastname', 2147483647, '$vpassword', 4567, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Sender` bigint(11) NOT NULL,
  `Receiver` bigint(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `purpose` varchar(30) NOT NULL,
  `time` datetime NOT NULL,
  `notificationtype` varchar(2) NOT NULL DEFAULT 'r',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Sender`, `Receiver`, `amount`, `purpose`, `time`, `notificationtype`, `id`) VALUES
(9876543211, 8500785007, 44, 'jjjj', '2017-03-03 00:00:00', 'r', 1),
(9876543211, 8500785007, 456, '2017-03-25 09:43:23', '0000-00-00 00:00:00', 'r', 2),
(8500785007, 1111111111, 457, 'aaaa', '2017-03-25 10:35:55', 'r', 3),
(9876543211, 1234567896, 489, 'rjrkrkr', '2017-03-26 10:35:50', 'r', 4),
(9876543211, 8500785007, 123, '222', '2017-04-03 10:19:18', 'r', 5),
(8500785007, 9876543211, 152, 'ksd', '2017-04-03 11:39:05', 'r', 6),
(9876543211, 8500785007, 452, 'ldfk', '2017-04-05 07:23:45', 'r', 7),
(9876543211, 8500785007, 444, '12', '2017-04-05 08:41:50', 'r', 8);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Sender` bigint(10) NOT NULL,
  `Receiver` bigint(10) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  `purpose` varchar(50) NOT NULL,
  `time` datetime NOT NULL,
  `notificationtype` varchar(2) NOT NULL DEFAULT 't',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Sender`, `Receiver`, `amount`, `purpose`, `time`, `notificationtype`, `id`) VALUES
(9876543211, 8500785007, 200, 'jggj', '2000-03-02 00:00:00', 't', 1),
(8500785007, 8500785007, 100, 'asdf', '2017-03-23 00:00:00', 't', 2),
(9876543211, 8500785007, 123, '45', '2017-03-23 00:00:00', 't', 3),
(9876543211, 1111111111, 758, '123', '2017-03-23 00:00:00', 't', 4),
(9876543211, 9876543211, 532, '1234567896', '2017-03-23 00:00:00', 't', 5),
(8500785007, 1111111111, 231, 'fine', '2017-03-23 00:00:00', 't', 6),
(8500785007, 1234567896, 123, 'love', '2017-03-23 00:00:00', 't', 7),
(9876543211, 8500785007, 120, 'showing to guna', '2017-03-23 12:28:32', 't', 8),
(9876543211, 8500785007, 140, 'gh', '2017-03-25 09:40:14', 't', 9),
(9876543211, 1111111111, 1524, 'ddj', '2017-03-25 09:40:31', 't', 10),
(9876543211, 8500785007, 485, 'jkkg', '2017-03-25 09:42:01', 't', 11),
(1111111111, 9876543211, 450, 'lllllll', '2017-03-26 10:38:27', 't', 12),
(9876543211, 8500785007, 451, '455', '2017-04-03 10:20:02', 't', 13),
(9876543211, 8500785007, 250, '4568', '2017-04-03 11:35:27', 't', 14),
(9876543211, 8500785007, 123, 'kdfsk', '2017-04-05 06:54:10', 't', 15),
(8500785007, 9876543211, 123, '123', '2017-04-05 08:39:43', 't', 16),
(9876543211, 8500785007, 122, 'showing to sanjay', '2017-04-05 09:27:01', 't', 17),
(9876543211, 8500785007, 142, 'hulk', '2017-04-12 12:50:37', 't', 18),
(9876543211, 8500785007, 200, 'hh', '2017-04-13 11:53:53', 't', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (mobileno);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Sender` (`Sender`),
  ADD KEY `Receiver` (`Receiver`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1`
    FOREIGN KEY (`Sender`) REFERENCES `persons`(`mobileno`),
  ADD CONSTRAINT `transactions_ibfk_2`
    FOREIGN KEY (`Receiver`) REFERENCES `persons`(`mobileno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;