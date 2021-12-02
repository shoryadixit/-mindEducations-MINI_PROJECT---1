-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 10:32 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `phone`, `message`) VALUES
(16, 'aatri', 'aatrirajsaxenaje@gmail.com', '9140415934', 'tell me about python course'),
(17, 'aatri', 'aatrirajsaxenaje@gmail.com', '9140415934', 'tell me about python course');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(255) NOT NULL,
  `stu_email` varchar(255) NOT NULL,
  `stu_pass` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `token`, `status`, `mobile_number`) VALUES
(38, 'Nivedita Mishra', 'nivedita.mishra_cs19@gla.ac.in', '$2y$10$NkpFnyjIH.EqD4MPTQGIquogzrgy40SOJrhdw5pJhSc.MVvnrG4Y.', 'a77d473f3bfca2eaf8ab333a95b623', 'active', '123'),
(44, 'Kushagra Gupta', 'kushagra.gupta_cs20@gla.ac.in', '$2y$10$ZUlxOCEMXGeQsSY9eY0L3OlNxxP1y8IpORFJWR3HN4J2UYalsVM1q', 'c844e7b3021280485c482154214a3d', 'active', '+919582977984'),
(45, 'ompal', 'ompal.singh_cs18@gla.ac.in', '$2y$10$sq.CsLM00YNCB76.bxj2peEwGyL.WVDg7N.58ISCcGc/WPBjm1jEO', 'afb761f5aced7ed76aa66533c57b4c', 'active', '+917088739887'),
(48, 'aatri', 'aatri.saxena_ec20@gla.ac.in', '$2y$10$WjP/R6WZ9ceCQHqTJL8e6.05M62DHyCd4Fpkons/J.jVF5JbsSs0m', '7848ae0ad623e32480759be184cc37', 'active', '0987654321'),
(51, 'Shorya dixit', 'shauryadt123@gmail.com', '$2y$10$8tMKcAhOjZOJ2H8lwzJ5CuIRXIz/FcyWhJT0HG0UpABoBKLTxK.TO', 'c770df85a1874f81ce8eb683c476f6', 'active', '+911234567890');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `username`, `email`, `password`, `token`, `status`) VALUES
(4, 'Shorya dixit', 'shauryadt@gmail.com', '1234567890', '161e9d1f6b82162eb59031893e1921', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
