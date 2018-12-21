-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 05:01 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(11) NOT NULL,
  `intern_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `intern_id`, `name`, `level`, `position`) VALUES
(4, 66, 'first prize in electronic robotic', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` text,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `poscode` int(10) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `address`, `lat`, `lng`, `poscode`, `state`) VALUES
(48, 'NO 2 , JALAN MELATI , PUAKA RAKYAT\r\nTANAH BERSEPADU', 2.214276, 102.4468, 42000, 'Rawang'),
(50, NULL, NULL, NULL, NULL, NULL),
(52, NULL, NULL, NULL, NULL, NULL),
(53, NULL, NULL, NULL, NULL, NULL),
(58, NULL, NULL, NULL, NULL, NULL),
(62, NULL, NULL, NULL, NULL, NULL),
(63, NULL, NULL, NULL, NULL, NULL),
(64, NULL, NULL, NULL, NULL, NULL),
(65, NULL, NULL, NULL, NULL, NULL),
(66, 'no 1, jalan cendana 1, taman muhibbah, 42700, banting, selangor', NULL, NULL, 42700, 'selangor'),
(67, NULL, NULL, NULL, NULL, NULL),
(68, NULL, NULL, NULL, NULL, NULL),
(69, NULL, NULL, NULL, NULL, NULL),
(70, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `advisors`
--

CREATE TABLE `advisors` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `room` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advisors`
--

INSERT INTO `advisors` (`id`, `fname`, `lname`, `room`) VALUES
(50, 'Rosmah', 'Mat Aris', '32B'),
(63, '', '', ''),
(65, '', '', ''),
(67, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `intern_id` int(10) UNSIGNED NOT NULL,
  `offer_id` int(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `intern_id`, `offer_id`, `status`) VALUES
(6, 62, 18, 'Denied'),
(7, 62, 17, 'Pending'),
(8, 66, 18, 'Pending'),
(9, 68, 22, 'Pending'),
(10, 68, 17, 'Pending'),
(11, 68, 18, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `intern_id` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`) VALUES
(48, 'Busana\'s Tradings SDN BHD '),
(52, ''),
(58, ''),
(64, ''),
(69, '');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(10) NOT NULL,
  `intern_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `intern_id`, `type`, `institute`, `result`, `status`) VALUES
(9, 66, 'Diploma', 'uitm', '4.0', 'finish');

-- --------------------------------------------------------

--
-- Table structure for table `interns`
--

CREATE TABLE `interns` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `advisor_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interns`
--

INSERT INTO `interns` (`id`, `fname`, `lname`, `phone`, `advisor_id`) VALUES
(53, 'aiman', 'aa', '32323', 50),
(62, 'sam', 'sam', '22', 50),
(66, 'syamsol', 'azim', '0139125850', NULL),
(68, 'fir', 'fir', '11', 50),
(70, 'ai', 'ai', '66', 50);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(10) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `requirement` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `enddate`, `startdate`, `requirement`, `description`, `company_id`, `status`) VALUES
(17, 'Looking For Intenational programmer [Intern]', '2019-01-26', '2018-12-20', 'Master In Computer Science', 'Can code in html,java,C++,C#\r\n\r\n*can play dota2, mlbb is extra requirement*\r\nXD', 52, NULL),
(18, 'Engineer Required [Intern]', '2018-12-20', '2018-12-19', 'Phd in Civil Engineering', 'Can work from day to night\r\nMust have equipment', 64, NULL),
(19, 'Accounter For Internship', '2019-02-14', '2018-12-19', 'Degree in Accounting ', 'Good in maths\r\nCan make two job in one time\r\n', 48, NULL),
(20, 'Programmer Ready for Internship', '2019-06-19', '2018-12-20', 'Diploma in Computer Science', 'Understand in C#,C++,java\r\nCan make coffee', 64, NULL),
(21, 'Administrator Needed [Internship]', NULL, NULL, 'Phd in Administration', 'Can communicate in Three language\r\n- English\r\n- Malay\r\n- Tamil', 58, NULL),
(22, 'It Management[InternShip]', '2019-04-24', '2018-12-13', 'Degree in Networking', 'can sleep two hours only', 69, NULL),
(23, 'ada map', '2018-12-22', '2018-12-18', 'ada map', 'ada map\r\n', 48, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `id` int(11) NOT NULL,
  `offer_id` int(10) NOT NULL,
  `requirements` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `alias` varchar(25) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `alias`, `created`, `modified`) VALUES
(1, 'Advisors', 'Advisorrr', 'advisor', '2018-11-30 02:02:30', '0000-00-00 00:00:00'),
(2, 'Interns', 'intern', 'intern', '2018-11-30 02:02:56', '0000-00-00 00:00:00'),
(3, 'Companies', 'Company', 'company', '2018-12-04 07:49:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role_id`, `created`, `modified`) VALUES
(48, 'StreetCode@rocketmail.com', '$2y$10$PERFFV.bkCvrJaLKE7rPdeI4q1pwip3n841VP.M8P1fg64BRdczIi', 3, NULL, NULL),
(50, 'Rosmah@gmail.com', '$2y$10$TAEKPOcD4SPWQntISAODtezUeOsvUJ4ChrKyPqJxAyrfD//KEOXbu', 1, NULL, NULL),
(52, 'Pintar@gmail.com', '$2y$10$BWD/ReY7pihTbARdgwSl9u4QHpwtgT74LCQHcWbLJiIM96MxcW/LK', 3, NULL, NULL),
(53, 'stud@study', '$2y$10$Y7mK0Q8x1jwxAxjC2n5gcer5ldI5GnrSV2ir94z1WZL5tBnKZ9NR.', 2, NULL, NULL),
(58, 'etani@yahoo.com', '$2y$10$5pCfXhK5KWXFXl1RtmTY5.gHlFXeA2XzxqeIVEGVu/01tPPbkGvIS', 3, NULL, NULL),
(62, 'samsoul@ssam', '$2y$10$mR.AxpGdwYAImHHEZR0SiuP18w/jXDlHB4F.XwLq5HYhYD7Nek8rC', 2, NULL, NULL),
(63, 'test@test', '$2y$10$S3sjJa7Hl.KPPA8ixkITHe.wUKcjTPdWSGEKViyVVj8UQdMWb6uQW', 1, NULL, NULL),
(64, 'computerLeech@gmail.com', '$2y$10$5am6TzvYhKlznf8uGywCUu62zsV5p2Nxd4iBVtVzbm5TMAXCJSLge', 3, NULL, NULL),
(65, 'nasi@nasi', '$2y$10$OdTkhLYrrygeHg1.krlz9ubRNxBLz3SQDQLd6RM.5mlCaoY2wfQR6', 1, NULL, NULL),
(66, 'syamsol.zaharudin@yahoo.com', '$2y$10$IhC3Pgtl0Txyej5iTPGyceAyZn8LLTahaaBEKiv.NiQgSYdPd4e62', 2, NULL, NULL),
(67, 'RajaHanif@gmail.com', '$2y$10$j.dIFPxVKlWm0psAgVxOR.fRYiKlmMcmdtuXVvBHPmEpJprFIS1su', 1, NULL, NULL),
(68, 'FirmanFardi@yahoo.com', '$2y$10$IPW8zuDY.W2DO6UFXzn3s.snK0DjAwsty.gqAmRwhPqWk6RTmBTUu', 2, NULL, NULL),
(69, 'qwertyuiop@rocketmail.com', '$2y$10$OtSluT.YrWyB0klZv9WmvuQDHoYxEI/2SsYAESnyCm3WlebrpC/Ua', 3, NULL, NULL),
(70, 'Aiman@yahoo.com', '$2y$10$8ZYcXUq6TyHURklVF0ZEAOKKSD7r8j9clr/AC8ysGbqVl5PRXqOK.', 2, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intern_id` (`intern_id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advisors`
--
ALTER TABLE `advisors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intern_id` (`intern_id`),
  ADD KEY `offer_id` (`offer_id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intern_id` (`intern_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intern_id` (`intern_id`);

--
-- Indexes for table `interns`
--
ALTER TABLE `interns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advisor_id` (`advisor_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offer_id` (`offer_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achievements`
--
ALTER TABLE `achievements`
  ADD CONSTRAINT `achievements_ibfk_1` FOREIGN KEY (`intern_id`) REFERENCES `interns` (`id`);

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `advisors`
--
ALTER TABLE `advisors`
  ADD CONSTRAINT `advisors_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`intern_id`) REFERENCES `interns` (`id`),
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`);

--
-- Constraints for table `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `certificates_ibfk_1` FOREIGN KEY (`intern_id`) REFERENCES `interns` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id`) REFERENCES `applications` (`id`);

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `educations`
--
ALTER TABLE `educations`
  ADD CONSTRAINT `educations_ibfk_1` FOREIGN KEY (`intern_id`) REFERENCES `interns` (`id`);

--
-- Constraints for table `interns`
--
ALTER TABLE `interns`
  ADD CONSTRAINT `interns_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `interns_ibfk_2` FOREIGN KEY (`advisor_id`) REFERENCES `advisors` (`id`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Constraints for table `requirements`
--
ALTER TABLE `requirements`
  ADD CONSTRAINT `requirements_ibfk_1` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
