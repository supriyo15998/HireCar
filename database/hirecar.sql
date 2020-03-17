-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 02:36 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hirecar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pwd`) VALUES
(1, 'admin1', 'example@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `street` text NOT NULL,
  `location` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `pin` text NOT NULL,
  `mobile` text NOT NULL,
  `license` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `name`, `street`, `location`, `city`, `state`, `pin`, `mobile`, `license`, `status`) VALUES
(1, 'driver1', 'jnkfsa', 'dksaj', 'nkjfds', 'jkwane', '878987', '987676', '6sa7', 0),
(2, 'driver 2', 'jbj', 'hbj', 'jhb', 'jbhh', '7682', '8762', 'bvv', 0),
(3, 'drive3', 'bjadbs', 'buybj', 'yiub', '212b', '212', '2222', '21ubg', 0),
(4, 'driver4', 'hgvhhj', 'vvj', 'bhbjjb', 'jbhjbj', '78878', '75657', '676778bdfs', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `source` text NOT NULL,
  `destination` text NOT NULL,
  `car` text NOT NULL,
  `pickdate` text NOT NULL,
  `distance` text NOT NULL,
  `fare` text NOT NULL,
  `driver` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `source` text NOT NULL,
  `destination` text NOT NULL,
  `distance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `source`, `destination`, `distance`) VALUES
(1, 'Kolkata', 'Durgapur', 117),
(2, 'Durgapur', 'Kolkata', 117),
(3, 'Kolkata', 'Odisha', 537),
(4, 'Odisha', 'Kolkata', 537),
(5, 'Kolkata', 'Siliguri', 558),
(6, 'Siliguri', 'Kolkata', 558),
(7, 'kolkata', 'chennai', 721);

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `Userid` int(11) NOT NULL,
  `fn` text NOT NULL,
  `ln` text NOT NULL,
  `dob` date NOT NULL,
  `gen` text NOT NULL,
  `Strt` text NOT NULL,
  `Loc` text NOT NULL,
  `Ct` text NOT NULL,
  `St` text NOT NULL,
  `Pin` text NOT NULL,
  `Mob` text NOT NULL,
  `mail` text NOT NULL,
  `Pass` text NOT NULL,
  `ls` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`Userid`, `fn`, `ln`, `dob`, `gen`, `Strt`, `Loc`, `Ct`, `St`, `Pin`, `Mob`, `mail`, `Pass`, `ls`) VALUES
(1, 'Sumit Kumar', 'Das', '1991-01-10', 'male', 'Unified,', 'Biratis', 'BIDHAN NAGAR', 'Beside P.S.Srijan TechPark', '700090', '9748973928', 'dasbabi9@gmail.com', 'sumit1102', '0000-00-00'),
(2, 'Sumit', 'Das', '2019-01-09', 'male', 'Unified Infotech,  STP 2, 1st Floor, Block - DN, Plot - 53, Sector V,Salt Lake City, Kolkata,', 'dwdaw', 'BIDHAN NAGAR', 'Beside P.S.Srijan TechPark', '700091', '9748973928', 'dasbaxsbi9@gmail.com', 'dasda', '0000-00-00'),
(3, 'firstname', 'lastname', '3665-02-15', 'male', 'Shaktigarh', 'Birati', 'Kolkata', 'West Bengal', '700051', '8013206937', 'supriyo159ewqe98@gmail.com', '1111', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `reg` text NOT NULL,
  `s_cap` text NOT NULL,
  `farepkm` text NOT NULL,
  `Img` text NOT NULL,
  `drivername` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `name`, `type`, `reg`, `s_cap`, `farepkm`, `Img`, `drivername`) VALUES
(1, 'hyundai i10', 'normal', '1231', '4', '12', 'images/7209_hyundai0.jpg', ''),
(2, 'hola', 'ads', '312', '5', '12', 'images/8458_hyundai0.jpg', '<br />\r\n<b>Notice</b>:  Undefined index: id in <b>C:\\xampp\\htdocs\\project\\addcar.php</b> on line <b>43</b><br />\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`Userid`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `Userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
