-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 10:48 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tail_oring`
--

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `mat_name` text NOT NULL,
  `mat_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `price_br`
--

CREATE TABLE `price_br` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `material_price` int(11) NOT NULL,
  `workmanship` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `incre` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `mat_type` text NOT NULL,
  `material` text NOT NULL,
  `style` text NOT NULL,
  `dates` varchar(200) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`incre`, `id`, `mat_type`, `material`, `style`, `dates`, `price`) VALUES
(1, 2, 'Lace', 'upload/material2.JPG', 'upload/design2.JPG', '2019-06-29', 0),
(2, 1, 'Jeans Material', 'upload/material3.JPG', 'upload/design3.JPG', '2019-06-29 16:03:53', 0),
(3, 2, 'Guinea', 'upload/material1.JPG', 'upload/design1.JPG', '2019-06-29 16:13:12', 0),
(4, 2, 'Guinea', 'upload/material1.JPG', 'upload/design1.JPG', '2019-06-29 16:13:35', 0),
(7, 2, 'Ankara', 'upload/53522422_791291174588518_8200258956627542016_n.jpg', 'upload/image-900.jpg', '2019-07-14 09:14:46', 0),
(8, 2, 'Jeans Material', 'upload/53522422_791291174588518_8200258956627542016_n.jpg', 'upload/image-900.jpg', '2019-07-21 11:50:01', 0),
(9, 2, 'Guinea', 'upload/food-1568578848.jpg', 'upload/food-1568540766.jpg', '2019-09-17 19:17:01', 0),
(10, 2, 'Jeans Material', 'upload/food-1567268514.jpg', 'upload/food-1567862725.jpg', '2019-09-17 19:32:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `yname` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `ad_ress` text NOT NULL,
  `username` text NOT NULL,
  `pword` text NOT NULL,
  `leng` text NOT NULL,
  `brea` text NOT NULL,
  `wid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `yname`, `email`, `phone`, `ad_ress`, `username`, `pword`, `leng`, `brea`, `wid`) VALUES
(1, 'Oladiti Sodiq ala', 'oladitisodiq@gmail.com', '08102458866', 'ADDRESS', 'ADE', '9d25ead382a72903ee94c7dd9f5a711b', '', '', ''),
(2, 'Oladiti Sodiq Oladimeji', 'Oladitisodiq@gmail.com', '08102458866', 'ADDRESS', 'Olasodiq', 'e807f1fcf82d132f9bb018ca6738a19f', '98', '76', '56'),
(3, 'Oaditi Ssheriff', 'sheri@gmail.com', '081882288822', 'ddddddd', 'Kidac', 'e807f1fcf82d132f9bb018ca6738a19f', '34', '45', '64'),
(4, 'ADEMOLA', 'ADE@GMAIL.COM', '08930000000000', 'KJSJJSJSJS', 'ade', 'e807f1fcf82d132f9bb018ca6738a19f', '45', '45', '45'),
(5, 'ADEMOLA', 'ADE@GMAIL.COM', '08930000000000', 'KJSJJSJSJS', 'ade', 'e807f1fcf82d132f9bb018ca6738a19f', '45', '45', '45'),
(6, 'ADEMOLA', 'ADE@GMAIL.COM', '08930000000000', 'KJSJJSJSJS', 'ade', 'e807f1fcf82d132f9bb018ca6738a19f', '45', '45', '45'),
(7, 'ADEMOLA', 'ADE@GMAIL.COM', '08930000000000', 'KJSJJSJSJS', 'ade', 'e807f1fcf82d132f9bb018ca6738a19f', '45', '45', '45'),
(8, 'ADEMOLA', 'ADE@GMAIL.COM', '08930000000000', 'KJSJJSJSJS', 'ade', 'e807f1fcf82d132f9bb018ca6738a19f', '45', '45', '45'),
(9, 'Oladiti Sodiq Oladimeji', 'Oladitisodiq@gmail.com', '08102458866', 'ADDRESS', 'Olasodiq', 'e807f1fcf82d132f9bb018ca6738a19f', '34', '43', '334');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`incre`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `incre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
