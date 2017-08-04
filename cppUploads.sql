-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 04, 2017 at 10:06 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `MCA`
--

-- --------------------------------------------------------

--
-- Table structure for table `cppUploads`
--

CREATE TABLE `cppUploads` (
  `id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `checkbox` varchar(20) NOT NULL DEFAULT 'not-checked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cppUploads`
--

INSERT INTO `cppUploads` (`id`, `file`, `size`, `checkbox`) VALUES
(10, '1.jpg', 56058, 'not-checked'),
(11, '2.jpg', 56192, 'checked'),
(12, '3.jpg', 53830, 'checked'),
(15, '4.jpg', 60086, 'checked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cppUploads`
--
ALTER TABLE `cppUploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cppUploads`
--
ALTER TABLE `cppUploads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;