-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2025 at 05:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `user` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `pass` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `user`, `email`, `pass`) VALUES
(1, '0', '0', '0'),
(2, 'a', 'a', '$2y$10$qOS2WwRn.iXoduOX/DoZl.YRpuTzTKaxACxpaAjxcqmlQUlUAOr2y'),
(3, 'as', 'asd@asd.bvn', '$2y$10$XxQ.O3gWpC6JnYJOo4vHM./2Py6rAahOpJ8J7vutX.vp7lBALz5Ye'),
(4, 'q', 'asd@asd.bvn', '$2y$10$kQfrgD46O5ix.KWFUVe8mOmVYGrnsiOkH8kzHq3qYM6feb0CWoN1a'),
(5, 'asdasd', 'asd@asd.bvn', '$2y$10$3/MKUEoGYAIaaIt7e6XjMOKT6FCQjwFjnJOKZMsJdQj1t0PU55Rze'),
(6, '', '', '$2y$10$Aw3dNhheykRx2JWOWW6ItOP02LAygfGFhKsgKK2lkLCSbwOUq1Ibe'),
(7, 'asd', 'asd@asd.bvn', '$2y$10$FMcL43r2Ow5nBIQT4bvQRudSIqSbAM.fdbvVbTDJkNj8h7jlOl/em'),
(8, 'jadi', 'asd@asd.bvn', '$2y$10$sEyOa2gO3HLPkO3CXhXqzO2xqKmDJ0DcWmU5gtnK/wSTIH32/NG4i'),
(9, 's', 'd@yahooasdnk.da', '$2y$10$NhlUq9raEeV3t51ysuo.6eP1k2KPkwGkMNLv0WGLwfwcL2uQbgIES'),
(10, 'duke', 'abcd@gmail.com', '$2y$10$kCa4xZBFvFZvvoOyt8UqpOjf.yXCxcMtlsJOr1ajaKa4JxDMrdcwW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
