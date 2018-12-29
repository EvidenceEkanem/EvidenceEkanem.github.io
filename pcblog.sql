-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2018 at 10:05 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `user_id`, `post_date`) VALUES
(1, 'Just a test post', 'My name is freedom', '', '2018-12-20 03:13:26'),
(2, 'another test post', 'I realy realy need you to work please', '', '2018-12-20 04:16:25'),
(3, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', '2018-12-20 05:21:10'),
(4, 'evidence post', 'another one by evidence', 'evidoski', '2018-12-20 06:38:20'),
(5, 'again', 'jk;df;kajhndfkjansk;jdnjkfadf', 'freedyray', '2018-12-20 06:46:31'),
(6, 'gksdj;gl', ';gakjd;lfkajsk;ldgjakdjg', 'freedyray', '2018-12-20 09:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `confirmpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `phonenumber`, `password`, `confirmpassword`) VALUES
(1, 'Freedom', 'Eyimenarolu', '', 'freedomeyimenarolu@yahoo.com', '12345678', '12345678', '12345678'),
(2, 'Evidence', 'Ekanem', 'evidoski', 'evidenceekanem@gmail.com', '7076543', 'evidoski1', 'evidoski1'),
(3, 'Freedom', 'Eyimenarolu', 'freedyray', 'freedomeyimenarolu@yahoo.com', '07034545678', '12345678', '12345678'),
(4, 'James', 'Jay', 'jamesjay125', 'jamesjay@yahoo.com', '08076565346', 'mynameisjames', 'mynameisjames'),
(5, 'Freedom', 'Eyimenarolu', 'freedyray', 'freedomeyimenarolu@yahoo.com', '07034545678', '12345678', '12345678'),
(6, 'Freedom', 'Eyimenarolu', 'freedyray1', 'freedomeyimenarolu@yahoo.com', '07034545678', 'mynameisjames', 'mynameisjames');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
