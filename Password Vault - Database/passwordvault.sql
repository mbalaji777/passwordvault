-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 11:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passwordvault`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(255) NOT NULL COMMENT 'ID (Auto Increment, Primary Key)',
  `name` varchar(100) NOT NULL COMMENT 'Name of the user',
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL COMMENT 'Email address of the user',
  `phonenumber` int(30) NOT NULL COMMENT 'Phone number of the user',
  `password` varchar(100) NOT NULL COMMENT 'password of the user (must be hashed using the algorithm)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `username`, `email`, `phonenumber`, `password`) VALUES
(2, 'sdasdasd', 'asdasdasdsad', 'asdasdasdsa', 12345678, 'asdasdsadsa'),
(7, 'balaji', 'balaji', 'balaji', 12345678, 'asdasdsadsa'),
(8, 'Balaji Bharatwaj', 'mbalaji', 'mbalaji.manikandan@gmail.com', 123456789, 'thisthat'),
(9, 'balajibharatwaj', 'mbalajiargon2i', 'mbalaji123@gmail.com', 1234561234, '$argon2i$v=19$m=65536,t=4,p=1$Z1J1Z1dTc3MvWUQ2dXNJOA$aaK5NWpczltxJMW9WcmquGt4zLK1eXRLMTOfni9hpqQ'),
(10, 'Selena Gomez', 'sgomez', 'selenagomez@gmail.com', 2147483647, '$argon2i$v=19$m=65536,t=4,p=1$Smc5QkVkdURmRE1uNWMyRA$82STsUgD+O7ydWZpz2AIzAoNfnsDABCBULJbCZz8Rcs');

-- --------------------------------------------------------

--
-- Table structure for table `key_sodium`
--

CREATE TABLE `key_sodium` (
  `key_secret` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `key_sodium`
--

INSERT INTO `key_sodium` (`key_secret`) VALUES
('????X??ֆ夲ZxL?$xe8???\0?I?');

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE `passwords` (
  `passwords_id` int(11) NOT NULL,
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `websitename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`passwords_id`, `id`, `username`, `password`, `email`, `websitename`) VALUES
(9, 9, 'mbalaji111', '6nxVEtiVMUOx6HIC3eJze4r+Rvw5R/1bGk/h1wM2+V2MhsFMbnBlF7MNJ86sKCSimil63s/sLQ==', 'adidas@gmail.com', 'adidas'),
(10, 9, 'homedepot123', 'JEIrudu/OtgoAzQG5VbO8sS2xEB3izsKbVRDSGkfCqU7vM7gSv6S8rfY4IHUch33JiLeOA==', 'homedepot@gmail.com', 'homedepot'),
(11, 10, 'tswiftmerch', 'tXKlg1rh3LbcI3BLJYYZGvIuRWcq6XowiIxvz33Dirgw9fhNl7bHxkvbiHHJMaTW05NjeOezZDg=', 'tswiftmerch@gmail.com', 'taylorswiftmerch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`,`email`);

--
-- Indexes for table `passwords`
--
ALTER TABLE `passwords`
  ADD PRIMARY KEY (`passwords_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'ID (Auto Increment, Primary Key)', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `passwords`
--
ALTER TABLE `passwords`
  MODIFY `passwords_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
