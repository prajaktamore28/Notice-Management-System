-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2020 at 02:43 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nms`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `sub` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `sub`, `feedback`) VALUES
(1, 'nikita', 'online training', 'Thank you sir'),
(2, 'sejal', 'online training', 'ver helpful & also interesting sessions'),
(3, 'yashashri', 'online training', 'have been amzing days'),
(4, 'ram', 'online Submission ', 'We''ll share report by tommorow'),
(5, 'radhika', 'online submission', 'okay mam'),
(6, 'om', 'submission of project ', 'sure mam...'),
(7, 'sujal', 'webinar', 'sure mam...');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin123', '34567');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sub` text NOT NULL,
  `designation` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `name`, `sub`, `designation`, `description`) VALUES
(134, 'chavan mam ', 'submission of project ', 'Lecturer', 'You have to submit your project till tomorrow.'),
(121, 'Mule sir', 'Admission process', 'HOD', 'pay admission fees upto 25th jully'),
(122, 'Ansari sir', 'Result', 'Lecture', 'MSBTE declared 2nd and 4th sem Result'),
(123, 'Savdekar Mam', 'Online Training', 'Lecture', 'Everyone gives your remarks'),
(124, 'Age Mam', 'Report submission', 'Lecture', 'Submit report with your group ID');
