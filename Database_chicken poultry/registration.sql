-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 01:36 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `userid` int(100) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `contact_no` int(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `userid`, `firstname`, `middlename`, `lastname`, `contact_no`, `address`) VALUES
(10, 11, 'aa', 'as', 'ss', 12, 'ass'),
(11, 1, 'Devon', 'M', 'Bacle', 9090909, 'lamac oroq city'),
(15, 1, 'John cris', 'L', 'Manabo', 9090909, 'lamac oroq city'),
(16, 1, 'John Michael', 'L', 'Sta clara', 9090909, 'Talic Oroq city'),
(17, 1, '123', '123', '123', 123, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `id` int(100) NOT NULL,
  `userid` int(100) DEFAULT NULL,
  `flocks_id` int(100) DEFAULT NULL,
  `type_of_feeds` varchar(255) DEFAULT NULL,
  `quantity` int(100) DEFAULT NULL,
  `unit` int(100) DEFAULT NULL,
  `timestampt` varchar(100) DEFAULT NULL,
  `amount` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`id`, `userid`, `flocks_id`, `type_of_feeds`, `quantity`, `unit`, `timestampt`, `amount`) VALUES
(8, 11, 13, 'asd', 123, 213, '21', 1233),
(14, 1, 1, 'da', 12, 12, '2019-02-19', 411);

-- --------------------------------------------------------

--
-- Table structure for table `flocks`
--

CREATE TABLE `flocks` (
  `id` int(100) NOT NULL,
  `userid` int(100) DEFAULT NULL,
  `breed` varchar(255) DEFAULT NULL,
  `rooster` int(255) DEFAULT NULL,
  `hen` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flocks`
--

INSERT INTO `flocks` (`id`, `userid`, `breed`, `rooster`, `hen`) VALUES
(1, 1, 'silkie', 55, 60),
(13, 1, 'leghorn chicken', 21, 22),
(21, 11, 'asd', 25, 122),
(23, 1, 'Orpington', 51, 50),
(26, 1, 'asd', 123, 22);

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `id` int(100) NOT NULL,
  `userid` int(100) DEFAULT NULL,
  `flocks_id` int(100) DEFAULT NULL,
  `type_of_vaccine` varchar(255) DEFAULT NULL,
  `timestamp` varchar(255) DEFAULT NULL,
  `amount` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`id`, `userid`, `flocks_id`, `type_of_vaccine`, `timestamp`, `amount`) VALUES
(19, 1, 13, 'bakuna', '5:30am', 120),
(20, 1, 21, 'add', '2019-02-06', 112);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(100) NOT NULL,
  `userid` int(100) DEFAULT NULL,
  `timestamp` varchar(100) DEFAULT NULL,
  `customer_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `userid`, `timestamp`, `customer_id`) VALUES
(3, 1, '2019-02-26', 16),
(4, 1, '2019-02-18', 15),
(5, 1, '2019-02-05', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ia', 'ia@gmail.com', 'c12e01f2a13ff5587e1e9e4aedb8242d'),
(11, 'ian', 'ian@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_ibfk_1` (`userid`);

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `flocks_id` (`flocks_id`);

--
-- Indexes for table `flocks`
--
ALTER TABLE `flocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `flocks_ibfk_1` (`userid`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `flocks_id` (`flocks_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `flocks`
--
ALTER TABLE `flocks`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feeds`
--
ALTER TABLE `feeds`
  ADD CONSTRAINT `feeds_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `feeds_ibfk_2` FOREIGN KEY (`flocks_id`) REFERENCES `flocks` (`id`);

--
-- Constraints for table `flocks`
--
ALTER TABLE `flocks`
  ADD CONSTRAINT `flocks_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medication`
--
ALTER TABLE `medication`
  ADD CONSTRAINT `medication_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `medication_ibfk_2` FOREIGN KEY (`flocks_id`) REFERENCES `flocks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
