-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 08, 2019 at 07:50 PM
-- Server version: 5.7.23
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `description`) VALUES
(1, 'Domestic workers are the economic backbone of HK but some of its worst-treated women', 'Hong Kong (CNN)On February 17, Baby Jane Teodoro Allas, 38, was fired from her job as a domestic worker in Hong Kong while on sick leave.\r\n\r\nThe reason her employer gave for her dismissal was simple: \"Diagnosed with cervical cancer.\"\r\n\"Given your medical condition, I am no longer able to continue your employment,\" read the letter. \"Wish you good health.\"\r\nAllas, who is from Palawan in the Philippines, says the firing was akin to a death sentence.\r\nJust weeks before, Allas had been diagnosed with aggressive Stage 3 cancer and needed immediate, life-saving treatment.\r\nThe termination of her contract would end Allas\' employment visa, meaning she would no longer be able to access heavily subsidized public healthcare.\r\nWithout that, Allas estimates that her treatment in Hong Kong -- which includes three months of chemotherapy and radiotherapy to shrink her tumor, then an operation -- will now cost at least 1 million Hong Kong dollars ($127,400).\r\n'),
(2, 'MIBR вышла в полуфинал IEM Katowice Major 2019', 'MIBR обыграла Renegades со счетом 2:0 в 1/4 IEM Katowice Major 2019 по CS:GO и прошла в полуфинал турнира. Австралийский коллектив покинул чемпионат и заработал $35 тыс.  Следующим противником MIBR станет победитель пары Astralis — Ninjas in Pyjamas. Матч между этими командами начнется 1 марта в 21:50 мск.'),
(3, 'MIBR вышла в полуфинал IEM Katowice Major 2019', 'MIBR вышла в полуфинал IEM Katowice Major 2019\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `text`, `article_id`) VALUES
(1, '123', 1),
(2, '321', 1),
(3, '654', 1),
(4, '321', 1),
(5, '321', 1),
(6, '6546546', 1),
(7, '4554656565', 1),
(8, '4554656565', 1),
(9, '4554656565', 1),
(10, '4554656565', 1),
(11, '4554656565', 1),
(12, '4554656565', 1),
(13, '4554656565', 1),
(14, '4554656565', 1),
(15, '312313213', 2),
(16, 'I am comment.', 2),
(17, '<script>alert(1);</script>', 2),
(18, '<h1>COMMENT</h1>', 2),
(19, '\"DROP table articles; --', 2),
(20, '\"drop table articles; --', 2),
(21, '\'123\"); DROP table articles; -- ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(3, 'root', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
