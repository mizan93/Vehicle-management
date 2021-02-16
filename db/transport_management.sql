-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 06:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `salary` int(255) NOT NULL,
  `equipment` int(255) NOT NULL,
  `oil` int(255) NOT NULL,
  `tcost` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `id`, `username`, `salary`, `equipment`, `oil`, `tcost`) VALUES
(10, '25', '', 10000, 500, 4000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `type` varchar(8) NOT NULL,
  `req_date` varchar(100) NOT NULL,
  `req_time` varchar(100) NOT NULL,
  `ret_date` varchar(100) NOT NULL,
  `ret_time` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `pickup_point` varchar(100) NOT NULL,
  `resons` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(14) NOT NULL,
  `confirmation` int(11) NOT NULL,
  `veh_reg` varchar(255) NOT NULL,
  `driverid` int(11) NOT NULL,
  `finished` int(11) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `username`, `department`, `type`, `req_date`, `req_time`, `ret_date`, `ret_time`, `destination`, `pickup_point`, `resons`, `email`, `mobile`, `confirmation`, `veh_reg`, `driverid`, `finished`, `paid`) VALUES
(54, 'md mizanur', 'mizan96', 'fdfd', 'car', '02/03/2021', '10 : 09 PM', '02/02/2021', '10 : 09 PM', 'fdfdfd', 'dfdfdfd', 'fdfdfdf', 'mizan@gmail.com', 0, 1, 'fdfdf', 21, 0, 1),
(56, 'Mr. user', 'username', 'cse', 'car', '02/10/2021', '7 : 41 PM', '02/09/2021', '7 : 41 PM', 'Mirpur 12', 'Dhanmondi', 'toure', 'user@gmail.com', 1795221226, 0, '', 0, 0, 1),
(57, 'Mr. user', 'username', 'fdfdf', 'car', '02/17/2021', '7 : 46 PM', '02/11/2021', '7 : 46 PM', 'Mirpur 12', 'Dhanmondi', 'fdfdf', 'user@gmail.com', 1795221226, 0, '', 0, 0, 1),
(58, 'Mr. user', 'username', 'fdfdf', 'car', '02/17/2021', '7 : 46 PM', '02/11/2021', '7 : 46 PM', 'Mirpur 12', 'Dhanmondi', 'fdfdf', 'user@gmail.com', 1795221226, 0, '', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driverid` int(11) NOT NULL,
  `drname` varchar(255) NOT NULL,
  `drjoin` varchar(255) NOT NULL,
  `drmobile` varchar(20) NOT NULL,
  `drnid` varchar(30) NOT NULL,
  `drlicense` varchar(30) NOT NULL,
  `drlicensevalid` varchar(100) NOT NULL,
  `draddress` varchar(255) NOT NULL,
  `drphoto` varchar(30) NOT NULL,
  `dr_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driverid`, `drname`, `drjoin`, `drmobile`, `drnid`, `drlicense`, `drlicensevalid`, `draddress`, `drphoto`, `dr_available`) VALUES
(20, 'Talha', '03/04/2018', '01717172398712', '202121212122', '1093q098091839', '03/26/2018', ' creasent road, dhaka, bangladesh.  ', '', 0),
(21, 'Arman', '03/04/2018', '0123084982', 'kls3893809839082', '1093q098091839', '03/04/2018', ' Oktroy Mor, Rajshahi.', 'rkb.jpg', 1),
(29, 'Fahim', '02/09/2021', '121205', '291112121212', '121212121212', '02/08/2021', 'Mirpur-1,Dhaka.', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `period` varchar(255) NOT NULL,
  `first` varchar(55) NOT NULL,
  `second` varchar(55) NOT NULL,
  `third` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `period`, `first`, `second`, `third`) VALUES
(1, '1st JANUARY to 31st JANUARY	', '3-45	', '4-45	', '6-15'),
(2, '1st FEBRUARY to 28/29th FEBRUARY	', '4-00	', '5-00	', '6-30'),
(3, '1st APRIL to 30th APRIL	', '3-45	', '4-45	', '6-15'),
(4, '1st MAY to 31st MAY	', '4-00	', '5-00	', '6-30'),
(5, '1st JUNE to 31st JULY	', '3-45 ', '4-45 ', '6-15'),
(6, '1st AUGUST to 15th AUGUST	', '4-00 ', '5-00 ', '6-30');

-- --------------------------------------------------------

--
-- Table structure for table `tripcost`
--

CREATE TABLE `tripcost` (
  `id` int(11) NOT NULL,
  `booking_id` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `total_km` varchar(11) NOT NULL,
  `oil_cost` varchar(11) NOT NULL,
  `extra_cost` varchar(11) NOT NULL,
  `total_cost` varchar(11) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tripcost`
--

INSERT INTO `tripcost` (`id`, `booking_id`, `username`, `total_km`, `oil_cost`, `extra_cost`, `total_cost`, `paid`) VALUES
(19, '51', 'fahad', '100', '100`', '10', '10', 1),
(20, '52', 'fahad', '10', '1000', '10', '1010', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `username`, `password`, `admin`) VALUES
(10, 'ibtihaj', 'ahmed', 'fahad@gmail.com', 'fahad', 'asdasd', 0),
(13, 'dad', 'ahmed', 'fahaha@gmail.com', 'asdasd', 'asdasdad', 0),
(14, 'Mr.', 'user', 'user@gmail.com', 'username', 'password', 0),
(15, 'md', 'mizanur', 'mizan@gmail.com', 'mizan96', '000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `veh_id` int(11) NOT NULL,
  `veh_reg` varchar(100) NOT NULL,
  `veh_type` varchar(20) NOT NULL,
  `chesisno` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `veh_color` varchar(100) NOT NULL,
  `veh_regdate` varchar(100) NOT NULL,
  `veh_description` varchar(255) NOT NULL,
  `veh_photo` varchar(255) NOT NULL,
  `veh_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`veh_id`, `veh_reg`, `veh_type`, `chesisno`, `brand`, `veh_color`, `veh_regdate`, `veh_description`, `veh_photo`, `veh_available`) VALUES
(36, 'fdfdf', 'bus', 'fdfdf', 'fdfdf', 'fdfdf', '02/03/2021', ' fdfdfdf', 'icon-carbonated-drinks.png', 1),
(68, '121220202', 'car', '21212121', 'TATA', 'yealo', '02/12/2021', 'dfdfdfd kdjkdf', 'a4bd6cb5b598b71126877ed334557190.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driverid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tripcost`
--
ALTER TABLE `tripcost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`veh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driverid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tripcost`
--
ALTER TABLE `tripcost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `veh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
