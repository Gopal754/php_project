-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 02:54 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `img` varchar(200) NOT NULL DEFAULT '0',
  `status` varchar(10) NOT NULL DEFAULT '1',
  `action` varchar(10) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pagetype` varchar(150) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `title`, `description`, `img`, `status`, `action`, `created`, `pagetype`) VALUES
(1, 'Home ITPL', 'Home ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPLHome ITPL', '0', '1', '1', '2021-11-21 08:44:55', 'Home'),
(2, '0', '', '0', '1', '1', '2021-11-21 08:45:20', 'About Us'),
(3, 'IT Services ', 'Automate your incident management process based on service conditions. Ensure the quality of your products launched and in production. Create Consistency. Mitigate Incidents Faster. Automate Workflow. Export & Share Info. Start Your Free Trial.\r\n <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6087.115870077105!2d78.1035142348877!3d20.386023600000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd3e78493e24d8d%3A0x27c822bb28425873!2sInsistence%20Technologies%20Private%20Limited!5e1!3m2!1sen!2sin!4v1636870886533!5m2!1sen!2sin\" width=\"100%\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\r\n\r\n71% of ITDMs Agree Help from IT Services Providers Reduces Risk in Technology Deployment. See How Leveraging Outside Expertise Helps to Ensure Business Continuity. Download Now.\r\nQuality Results. Find what you are Looking for in 1 Minute or Less! Unlimited Access. 100% Secure. Always Facts. Privacy Friendly. The Best Resources. Results & Answers. Services: Best Results, Explore Now, New Sources, Best in Search.\r\n', '0', '1', '1', '2021-11-21 08:45:20', 'Services'),
(4, 'Contact Us Page', ' <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6087.115870077105!2d78.1035142348877!3d20.386023600000016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd3e78493e24d8d%3A0x27c822bb28425873!2sInsistence%20Technologies%20Private%20Limited!5e1!3m2!1sen!2sin!4v1636870886533!5m2!1sen!2sin\" width=\"100%\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '0', '1', '1', '2021-11-21 08:45:30', 'Contact Us');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '1',
  `action` varchar(10) NOT NULL DEFAULT '1',
  `fullname` varchar(100) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0',
  `mobile` varchar(15) NOT NULL DEFAULT '0',
  `usertype` varchar(50) NOT NULL DEFAULT 'user',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`id`, `status`, `action`, `fullname`, `email`, `password`, `mobile`, `usertype`, `created`) VALUES
(1, '1', '1', 'Insistence Technology', 'insistencetechnology@gmail.com', 'abcdef55', '9403477555', 'user', '2021-11-14 07:12:55'),
(2, '0', '1', 'Xyz Pqr', 'insistencetechnology@gmail.com', 'abcdefg4', '9403477777', 'user', '2021-11-14 07:14:51'),
(3, '1', '1', 'Xyz Pqr', 'xyz@gmail.com', 'pass1234', '9403477888', 'user', '2021-11-14 07:14:51'),
(5, '1', '1', 'shyam', 'shyam@gmail.com', 'abcdefg4', '9403477111', 'user', '2021-11-14 07:14:51'),
(6, '1', '1', 'Krishna', 'Krishna@gmail.com', 'abcdefg4', '9403477444', 'user', '2021-11-14 07:14:51'),
(7, '1', '1', 'Insistence Technology', 'insistencetechnology1@gmail.com', '34fdgdfg', '9403477555', 'user', '2021-11-14 07:27:04'),
(8, '1', '1', 'Insistence Technology', 'insistencetechnology2@gmail.com', 'abcdefg4', '9403477555', 'user', '2021-11-14 07:27:23'),
(9, '0', '1', 'Insistence Technology', 'insistencetechnology5@gmail.com', '4w543534', '9403477555', 'user', '2021-11-14 07:29:41'),
(10, '0', '1', '2021-12-03', 'rajeshdahiwade@gmail.com', 'abcdefg4', '9403477555', 'user', '2021-11-14 07:32:32'),
(11, '1', '1', 'admin admin admin', 'admin@admin.com', 'admin', '8767654324', 'admin', '2021-11-20 14:01:06'),
(114, '1', '1', 'vaibhav', 'vaibhav@gmail.com', 'vaibhav', '9403477999', 'user', '2021-11-14 07:14:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
