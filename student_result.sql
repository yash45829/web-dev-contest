-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 05:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_result`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `enroll_no` varchar(10) NOT NULL,
  `faculty_no` varchar(10) NOT NULL,
  `paper1` text NOT NULL,
  `paper2` text NOT NULL,
  `paper3` text NOT NULL,
  `paper4` text NOT NULL,
  `paper5` text NOT NULL,
  `sessional1` int(2) NOT NULL,
  `sessional2` int(2) NOT NULL,
  `sessional3` int(2) NOT NULL,
  `sessional4` int(2) NOT NULL,
  `sessional5` int(2) NOT NULL,
  `final1` int(2) NOT NULL,
  `final2` int(2) NOT NULL,
  `final3` int(2) NOT NULL,
  `final4` int(2) NOT NULL,
  `final5` int(2) NOT NULL,
  `dt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`first_name`, `last_name`, `enroll_no`, `faculty_no`, `paper1`, `paper2`, `paper3`, `paper4`, `paper5`, `sessional1`, `sessional2`, `sessional3`, `sessional4`, `sessional5`, `final1`, `final2`, `final3`, `final4`, `final5`, `dt`) VALUES
('yash', 'kumar', 'gk6439', '21elb230', 'hjdhsk', 'hjdhsk', 'hjdhsk', 'hjdhsk', 'hjdhsk', 23, 33, 43, 54, 54, 44, 66, 7, 88, 9, '0000-00-00 00:00:00'),
('yash', 'kumar', 'gk6439', '21elb230', 'hjdhsk', 'hjdhsk', 'hjdhsk', 'hjdhsk', 'hjdhsk', 23, 33, 43, 54, 54, 44, 66, 7, 88, 9, '0000-00-00 00:00:00'),
('yash', 'kumar', 'gk6439', '21elb230', 'gdhdgh', 'gdhdgh', 'gdhdgh', 'gdhdgh', 'gdhdgh', 34, 33, 56, 32, 23, 32, 23, 23, 55, 24, '0000-00-00 00:00:00'),
('yash', 'kumar', '21ELB230', 'gk6439', 'hindi', 'engish', 'urdu', 'math', 'science', 34, 33, 33, 32, 86, 76, 45, 45, 45, 45, '0000-00-00 00:00:00'),
('krishna', 'kumar', '21ELB230', 'gk6439', 'hindi', 'science', 'english', 'math', 'physicaleducation', 23, 45, 23, 76, 76, 65, 34, 34, 44, 34, '0000-00-00 00:00:00'),
('ram', 'siya', 'ab6439', '21ece230', 'hindi', 'engish', 'urdu', 'math', 'science', 23, 34, 43, 45, 45, 45, 21, 34, 23, 23, '0000-00-00 00:00:00'),
('radhe ', 'krishna', 'rk6439', '21rk230', 'electronics', 'maths', 'electromagnetics', 'graphics', 'computer', 32, 32, 23, 23, 23, 44, 23, 23, 23, 23, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE `teacher_login` (
  `sr` int(3) NOT NULL,
  `teacher_name` text NOT NULL,
  `college_id` varchar(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`sr`, `teacher_name`, `college_id`, `date`) VALUES
(1, 'rajesh kumar', '6723647', '2023-03-05 09:10:03'),
(2, 'admin', '123456', '2023-03-05 14:01:03'),
(3, 'mohd shariq', '786786', '2023-03-05 14:01:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
