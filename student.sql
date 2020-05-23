-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2016 at 03:06 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mname` text,
  `lname` text NOT NULL,
  `contact` text NOT NULL,
  `birthday` date NOT NULL,
  `age` text NOT NULL,
  `gender` varchar(7) NOT NULL,
  `image` varchar(100) NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `dept` text NOT NULL,
  `roll_no` text NOT NULL,
  `sem` text NOT NULL,
  `percent1` varchar(6) NOT NULL,
  `percent2` varchar(6) NOT NULL,
  `cgpa` varchar(6) NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `valid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `mname`, `lname`, `contact`, `birthday`, `age`, `gender`, `image`, `hobbies`, `reg_no`, `dept`, `roll_no`, `sem`, `percent1`, `percent2`, `cgpa`, `email`, `username`, `password`, `valid`) VALUES
(1, 'yash', 'bardhan', 'singh', '9239286956', '1994-11-04', '21 Years ,4 Months and 12 Days ', 'male', '1.jpg', 'Painting', '20130500', 'Mechanical Engineering', '13/ME/25', 'Eight Sem', '77.0', '89.0', '9.0', 'yash@hotmail.com', 'yash', '963963963', 1),
(2, 'abhishek', '', 'sarkar', '9239286956', '1995-01-02', '21 Years ,2 Months and 14 Days ', 'male', '2.jpg', 'Reading', '20130499', 'Computer Science Engineering', '13/CSE/1', 'Sixth Sem', '', '', '', 'abhishek@live.com', 'abhishek', '963963963', 1),
(3, 'lab', 'kumar', 'nonia', '8927507678', '1994-01-04', '22 Years ,2 Months and 12 Days ', 'male', '3.jpg', 'Painting', '20130662', 'Information Technology', '13/IT/60', 'Sixth Sem', '', '', '', 'labkumar74@gmail.com', 'lab123', '963963963', 0),
(5, 'mohit', '', 'shaw', '9239286956', '1994-11-04', '21 Years ,4 Months and 12 Days ', 'male', 'mohitperfect.jpg', 'Reading,Music,Art,Bike Riding', '20130499', 'Information Technology', '13/IT/28', 'Sixth Sem', '', '', '', 'mohitshaw2@gmail.com', 'mohitshaw94', '963963963', 1),
(6, 'mohit', '', 'shaw', '9239286956', '1994-11-04', '21 Years, 4 Months and 18 Days ', 'male', 'mohit_habibpur.jpg', 'Music,,', '20130499', 'Information Technology', '13/IT/28', 'Sixth Sem', '93.1', '77.0', '7.96', 'mohitshaw@gmail.com', 'mohit', '963963963', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
