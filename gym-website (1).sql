-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 06:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym-website`
--

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `member` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `email`, `member`, `start`, `end`) VALUES
(1, 'narendramanipal2@gmail.com', 0, '0000-00-00', '0000-00-00'),
(4, 'narendra.16cs042@sode-edu.in', 0, '0000-00-00', '0000-00-00'),
(5, 'anish.16cs010@sode-edu.in', 0, '0000-00-00', '0000-00-00'),
(11, 'anishsjathan@gmail.com', 0, '0000-00-00', '0000-00-00'),
(14, 'natasharomanoff@gmail.com', 0, '0000-00-00', '0000-00-00'),
(15, 'tonystark@gmail.com', 0, '0000-00-00', '0000-00-00'),
(16, 'chrishemsworth@gmail.com', 0, '0000-00-00', '0000-00-00'),
(17, 'akhileshshastry3@gmail.com', 1, '2019-11-28', '2019-11-28'),
(20, 'hawkeye@gmail.com', 0, '0000-00-00', '0000-00-00'),
(26, 'nisha@gmail.com', 1, '2019-11-29', '2019-12-29'),
(27, 'cse.parallax@gmail.com', 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `discription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `fname`, `lname`, `image`, `designation`, `discription`) VALUES
(5, 'mark', 'brook', 'trainer-1.jpg', 'owner / head coach', 'Current accredited personal training certification with 15 years of experience as a personal trainer and Excellent verbal communication skills.'),
(6, 'sarah', 'henderson', 'trainer-2.jpg', 'head coach', 'Current accredited personal training certification with 3 years of experience as a personal trainer and Excellent verbal communication skills.'),
(7, 'george', 'hump', 'trainer-3.jpg', 'coach', 'Current accredited personal training certification with 3 years of experience as a personal trainer and Excellent verbal communication skills.'),
(8, 'victor', 'hump', 'trainer-4.jpg', 'coach', 'Current accredited personal training certification with 3 years of experience as a personal trainer and Excellent verbal communication skills.'),
(9, 'lea', 'young', 'trainer-5.jpg', 'personal trainer', 'Current accredited personal training certification with 3 years of experience as a personal trainer and Excellent verbal communication skills.'),
(10, 'justin', 'daniel', 'trainer-6.jpg', 'personal trainer', 'Current accredited personal training certification with 3 years of experience as a personal trainer and Excellent verbal communication skills.'),
(11, 'george', 'cooper', 'trainer-7.jpg', 'personal trainer', 'Current accredited personal training certification with 3 years of experience as a personal trainer and Excellent verbal communication skills.'),
(12, 'alysha', 'reed', 'trainer-8.jpg', 'yoga trainer', 'Current accredited personal training certification with 3 years of experience as a personal trainer and Excellent verbal communication skills.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `phoneno` bigint(15) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal_code` int(10) NOT NULL,
  `token` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `phoneno`, `address`, `city`, `postal_code`, `token`) VALUES
(1, 'Narendra', 'V', 'narendramanipal2@gmail.com', '$2y$10$SE5tS8jyzYvwyqSI9o5R6OE4V7.Ls.pqWRIvIYxeA5Toz773ZS5Ne', 7411522246, '168/67 Shri Matha NIlaya,Pragathi Nagar ,Manipal Alevoor Road, Udupi, Karnataka', 'Manipal', 576104, 0),
(4, 'Narendra', 'V', 'narendra.16cs042@sode-edu.in', '$2y$10$2tHPBU1/uk1yHMpw9ibOPOgfV8ALQh.pVCnbsBzIj./y0GdBnZ1r6', 7411522246, '168/67 Shri Matha Nilaya, Pragathi Nagar ,Manipal Alevoor Road, Udupi', 'Manipal', 576104, 2518),
(5, 'Anish S', 'Jathan', 'anish.16cs010@sode-edu.in', '$2y$10$JYnS9Wqw73VPIbVxHhBebueApQVuuWFQZdJGJTVAQA9PpYSAeQORi', 987456321, 'Duggupadi, Mattu', 'Katpadi', 576101, 1),
(11, 'Anish', 'S Jathan', 'anishsjathan@gmail.com', '$2y$10$BwSeggVeO1qXZ1AfX6k.seH9dHD.hjfQbxUJdCu9Y6bRwWBmolw5S', 9874563210, 'Katpady', 'Udupi', 574115, 0),
(14, 'Natasha', 'Romanoff', 'natasharomanoff@gmail.com', '$2y$10$.hDCwtqViQoDVoyWDBabXuhX1B2AobT3Bwc8T.Y.iTbFxfjk/Xh.S', 9874563210, 'USA', 'San diago', 654321, 0),
(15, 'Tony', 'Stark', 'tonystark@gmail.com', '$2y$10$KWPrYYZO8JcBKmKXWvmDqOnMjGVsXL1UDyeOFzV5VFLv9OmBXL3sW', 9876541230, '916 West Burbank Blvd', 'USA', 564123, 0),
(16, 'Chris', 'Hemsworth', 'chrishemsworth@gmail.com', '$2y$10$GSfqiBl9KslyEIfmwpu7wOXBSa..tIBnV66F/qVHy4ncxkQ5GOpEu', 9874562130, 'New York', 'USA', 854123, 778912),
(17, 'Akhilesh', 'Shastry', 'akhileshshastry3@gmail.com', '$2y$10$8psC2MaYguxQ1ApAeeZP3eMw2w3qxVP0UGhb8HWQ6OiLHrU3XiUhK', 7412589632, 'bannanje', 'Udupi', 576101, 0),
(20, 'Hawk', 'Eye', 'hawkeye@gmail.com', '$2y$10$OGcjE216m6HENVXjuZtgYeXk1/ahRwlvdsCkTHd3d9AnMqvh1541e', 8521479630, 'USA', 'USA', 854125, 0),
(25, 'Amod', 'Shetty', 'amodshetty@gmail.com', '$2y$10$3SemYEll7CEZREdCp5tWn.HHBFFx7VIT75D9ImAXtiX2ywvGmEic2', 7411522246, '168/67 Shri Matha NIlaya,Pragathi Nagar ,Manipal Alevoor Road, Udupi, Karnataka', 'Manipal', 576104, 5868),
(26, 'Nisha', 'J', 'nisha@gmail.com', '$2y$10$NI.df60APur1HzL.4346cuTFQep5POXh1SCVvvffTHLb1Qu6ID9Mu', 7022575712, 'Heroor', 'Bantakal', 576115, 2147483647),
(27, 'cse', 'parallax', 'cse.parallax@gmail.com', '$2y$10$LuBdl74qTr/jsGqt.3Akeezi2KOpksi/4e1TfdzDYuFfnRYsfHwe.', 7411522246, '168/67 Shri Matha NIlaya,Pragathi Nagar ,Manipal Alevoor Road, Udupi, Karnataka', 'Manipal', 576104, 8);

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `member_trigger` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO membership VALUES(new.id, new.email, 0, 0, 0)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
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
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `member_id` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
