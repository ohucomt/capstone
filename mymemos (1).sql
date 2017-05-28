-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2017 at 11:33 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mymemos`
--

-- --------------------------------------------------------

--
-- Table structure for table `memos`
--

CREATE TABLE `memos` (
  `id` int(11) NOT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `body` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memos`
--

INSERT INTO `memos` (`id`, `created_date`, `body`, `user_id`) VALUES
(34, '2017-05-09 11:17:37', 'phuc\r\n', 9),
(35, '2017-05-09 15:32:16', 'phucnv la ai. la ai ta', 9),
(36, '2017-05-09 15:33:38', 'them. the af', 9),
(37, '2017-05-09 21:21:16', 'phuc', 9),
(38, '2017-05-09 21:22:15', 'day la memo 22222', 10),
(42, '2017-05-09 22:58:05', 'phuc', 10),
(43, '2017-05-09 23:02:22', 'aleart(&#34;xss&#34;)', 10),
(44, '2017-05-09 23:03:22', 'console.log(&#34;xss&#34;)', 10),
(45, '2017-05-09 23:04:26', 'console.log(&#34;xss&#34;)', 10),
(46, '2017-05-09 23:10:40', '&lt;script&gt;&lt;/script&gt;', 10),
(47, '2017-05-09 23:10:49', '&lt;script&gt;&lt;/script&gt;', 10),
(48, '2017-05-09 23:12:00', '&lt;script&gt;alert(&quot;xss&quot;)&lt;/script&gt;', 10),
(49, '2017-05-10 15:49:08', '<script>console.log("a")</script>', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`) VALUES
(9, 'Phuc', 'Nguyen', 'phuckubi@gmail.com', 'phucnv', 'phuc2345'),
(10, 'phuc', 'nguyen', 'phuc@gmail.com', 'phucoi', 'phucp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memos`
--
ALTER TABLE `memos`
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
-- AUTO_INCREMENT for table `memos`
--
ALTER TABLE `memos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
