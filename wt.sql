-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 05:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_password`) VALUES
(1, 'ansh', 'admin1'),
(2, 'sushant', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catalogues`
--

CREATE TABLE `catalogues` (
  `cat_id` int(11) NOT NULL,
  `catalog` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalogues`
--

INSERT INTO `catalogues` (`cat_id`, `catalog`) VALUES
(1, 'Round Neck Tee'),
(4, 'Stickers'),
(5, 'Laptop Skins');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_ip` varchar(100) NOT NULL,
  `c_country` varchar(100) NOT NULL,
  `c_first_name` varchar(100) NOT NULL,
  `c_last_name` varchar(100) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `c_state` varchar(100) NOT NULL,
  `c_zip` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_phone` varchar(10) NOT NULL,
  `c_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_ip`, `c_country`, `c_first_name`, `c_last_name`, `c_address`, `c_state`, `c_zip`, `c_email`, `c_phone`, `c_pass`) VALUES
('::1', 'India', 'John', 'Doe', '221B Baker Street', 'MAHARASHTRA', '424242', 'john@doe.com', '9869696969', '123');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(20) NOT NULL,
  `movie_cat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`movie_id`, `movie_name`, `movie_cat`) VALUES
(1, 'Marvel', 'movie'),
(2, 'Harry Potter', 'movie'),
(3, 'DC', 'movie'),
(4, 'Dragon Ball Z', 'tv show'),
(5, 'GOT', 'tv show'),
(6, 'The Flash', 'tv show');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(100) NOT NULL,
  `pro_genre` varchar(50) NOT NULL,
  `pro_catalog` varchar(50) NOT NULL,
  `pro_title` varchar(50) NOT NULL,
  `pro_price` double NOT NULL,
  `pro_image` text NOT NULL,
  `pro_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_genre`, `pro_catalog`, `pro_title`, `pro_price`, `pro_image`, `pro_desc`) VALUES
(27, 'DC', 'Round Neck Tee', 'Batman Tee', 52, '1546673676_DC_ClassicLogo_Tshirt_FontMockup.jpg', 'This is a perfect brand for Batman fans.'),
(28, 'Dragon Ball Z', 'Round Neck Tee', 'DBZ Tee', 45, 'dragon-ball-z-goku-t-shirt-india-700x700.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dapibus posuere aliquam. Nullam ornare augue et justo posuere, id volutpat diam lobortis. Pellentesque varius lacinia'),
(29, 'The Flash', 'Round Neck Tee', 'Flash Tee', 33, '1546674879_DC_JL_TheFlashLogo_Tshirt_FrontMockup.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dapibus posuere aliquam. Nullam ornare augue et justo posuere, id volutpat diam lobortis. Pellentesque varius lacinia'),
(30, 'The Flash', 'Round Neck Tee', 'Flash Tee', 33, '1546674879_DC_JL_TheFlashLogo_Tshirt_FrontMockup.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dapibus posuere aliquam. Nullam ornare augue et justo posuere, id volutpat diam lobortis. Pellentesque varius lacinia'),
(31, 'GOT', 'Round Neck Tee', 'GOT Tee', 46, '20190225165324-1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dapibus posuere aliquam. Nullam ornare augue et justo posuere, id volutpat diam lobortis. Pellentesque varius lacinia'),
(32, 'Harry Potter', 'Round Neck Tee', 'Harry Potter Hogwards Tee', 56, '20190125155647-2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dapibus posuere aliquam. Nullam ornare augue et justo posuere, id volutpat diam lobortis. Pellentesque varius lacinia'),
(33, 'Marvel', 'Round Neck Tee', 'Marvel Tee', 66, '20191010161919-1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dapibus posuere aliquam. Nullam ornare augue et justo posuere, id volutpat diam lobortis. Pellentesque varius lacinia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `catalogues`
--
ALTER TABLE `catalogues`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_email`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `catalogues`
--
ALTER TABLE `catalogues`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
