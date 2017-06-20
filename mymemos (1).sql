-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2017 at 05:45 AM
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
  `title` varchar(255) DEFAULT NULL,
  `body` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `color` text NOT NULL,
  `share` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memos`
--

INSERT INTO `memos` (`id`, `created_date`, `title`, `body`, `user_id`, `color`, `share`) VALUES
(38, '2017-05-09 21:22:15', '', 'day la memo 22222', 10, '', 0),
(42, '2017-05-09 22:58:05', '', 'phuc ak', 10, 'warning-color', 0),
(71, '2017-05-25 22:23:14', 'KhÃ´ngg biáº¿t lÃ  memo gÃ¬', 'ThÃ´i mÃ¬nh cá»© sá»­a láº¡i váº­y =)))', 9, 'primary-color', 0),
(73, '2017-05-26 21:36:33', 'Rom', 'chá»©a cÃ¡c thÃ´ng tin Ä‘Æ°á»£c láº¡p sáºµn do nhÃ  sáº£n xuáº¥t vÃ  khÃ´ng bao giá» thay Ä‘á»•i', 9, 'success-color', 0),
(75, '2017-05-28 10:26:09', 'interrup', 'táº¥t cáº£ cÃ¡c tÃ¬nh huá»‘n xáº£y ra Ä‘á»™t ngá»™t gá»i lÃ  xá»­ lÃ½ ngáº¯t\r\nkhi cÃ³ 1 ngáº¯t \r\n- ghi nhá»› nhÅ©ng gÃ¬ Ä‘Ã£ lÃ m (com curent instruction)\r\nxá»­ lÃ½ ngáº¯t\r\nrestore láº¡i nhá»¯ng gÃ¬ Ä‘ang thá»±c hiá»‡n', 9, 'info-color', 1),
(77, '2017-05-31 10:17:17', 'this is title', 'this is a demo note', 10, 'danger-color', 0),
(78, '2017-06-02 23:42:37', 'Chuyá»‡n nÃ y tháº­t khÃ³ hiá»ƒu', 'TÃ´i khÃ´ng hiá»ƒu táº¡i sao sáº»rver cá»§a mÃ¬nh khÃ´ng cháº¡y\r\nTháº­t Ä‘Ã¡ng buá»“n :( !', 9, '', 1),
(82, '2017-06-16 13:32:34', 'phucnv', 'abcxyz', 9, 'warning-color', 1);

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
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `avatar`, `dob`, `gender`) VALUES
(9, 'Trang', 'Äá»—', 'phucnv84ccer@gmail.com', 'phucnv', 'phuc2345', 'avt9.php', '1995-07-12', 0),
(10, 'phuc', 'nguyen', 'phuc@gmail.com', 'phucoi', 'phucp', '', '0000-00-00', 0),
(11, 'Phuc', 'Nguyen', 'phuckubi@gmail.com', 'phucnv84ccer', 'phuc2345', '', '0000-00-00', 0),
(12, 'asdf', 'safd', 'adf@gmail.com', 'asfd', 'asdf', '', '0000-00-00', 0),
(13, 'Nghia', 'Nguyen', 'abc@abc.com', 'phuc', 'phuc', '', '1995-12-07', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
