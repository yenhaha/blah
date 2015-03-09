-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2015 at 11:04 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
`patientid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `civilstat` varchar(10) NOT NULL,
  `spousename` varchar(50) NOT NULL,
  `spousecontact` varchar(15) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientid`, `username`, `password`, `lname`, `fname`, `mname`, `gender`, `contactno`, `birthdate`, `address`, `occupation`, `civilstat`, `spousename`, `spousecontact`, `status`) VALUES
(3, '', '', 'Racuya', 'Julienne Camille', 'J', 'female', '09325735774', '1996-07-07', 'Guadalupe', 'Student', 'single', '', '', 0),
(4, '', '', 'Tan', 'Mary Rose', 'L', 'Female', '12345678', '1995-07-07', 'Guadalupe', 'Student', 'Single', '', '', 0),
(5, '', '', 'Dilao', 'Jermaine', 'L', 'Male', '1234567', '1995-12-28', 'Guadalupe', 'Student', 'Single', '', '', 0),
(6, '', '', 'Dilao', 'Jerrah Marie', 'P', 'Male', '12345678', '1996-01-01', 'Medellin', 'Student', 'Single', '', '', 0),
(7, '', '', 'Racuya', 'Julienne Camille', 'J', 'Male', '123456789', '1996-07-07', 'USA', 'Employee', 'Single', 'None', 'None', 0),
(8, '', '', 'Tan', 'Mary Rose', 'L', 'Male', '2345345', '1995-07-15', 'Capitol Site', 'Student', 'Single', 'None', 'None', 1),
(10, 'patient1', 'patient1', 'Dilao', 'Jermaine', 'L', 'Male', '1233435', '2015-03-27', 'Jakosalem', 'Student', 'Single', 'None', 'None', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ustatus` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `ustatus`) VALUES
(1, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
 ADD PRIMARY KEY (`patientid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
MODIFY `patientid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
