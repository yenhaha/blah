-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2015 at 09:04 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientid`, `lname`, `fname`, `mname`, `gender`, `contactno`, `birthdate`, `address`, `occupation`, `civilstat`, `spousename`, `spousecontact`, `status`) VALUES
(3, 'Racuya', 'Julienne Camille', 'J', 'female', '09325735774', '1996-07-07', 'Guadalupe', 'Student', 'single', '', '', 0),
(4, 'Tan', 'Mary Rose', 'L', 'Female', '12345678', '1995-07-07', 'Guadalupe', 'Student', 'Single', '', '', 0),
(5, 'Dilao', 'Jermaine', 'L', 'Male', '1234567', '1995-12-28', 'Jakosalem', 'Student', 'Single', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
 ADD PRIMARY KEY (`patientid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
MODIFY `patientid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
