-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2019 at 01:11 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `procedure` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `fname` text NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `specialisation` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `password` text NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile_pic`, `fname`, `lname`, `mobile`, `email`, `occupation`, `specialisation`, `age`, `password`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, '', 'A', '', 0, 'mcecilia.espiritu@gmail.com', '', '', 0, '$2y$10$ZqGSOCDr6NoUjrpotXS61.PpTN7MkNWz3d3J69N9LQyCiGHMywCHe', 'maxKBM7EhdCTCD4bxYPPX1ulFP2Bwjnpf0BUrnl8EZOeMUC1aXLFK4nrfetW', '2019-08-04 08:47:07', '2019-08-04 08:47:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
