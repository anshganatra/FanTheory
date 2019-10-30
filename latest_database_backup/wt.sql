-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 12:34 AM
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

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(3, '::1', 1);

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
(1, 't_shirts'),
(2, 'caps'),
(3, 'shoes'),
(4, 'keychains_pendants');

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
(1, 'marvel', 'movie'),
(2, 'harry potter', 'movie'),
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
(1, 'marvel', 't_shirts', 'marvtee', 20, 'prod_2.png', 'This is very good T-Shirt.'),
(2, 'harry potter', 'caps', 'Blue Shoe High Heels', 28, 'prod_3.png', 'This is a magical Cap.'),
(3, 'harry potter', 't_shirts', 'Denim Jacket', 28, 'model_5.png', 'This suits well to everyone.'),
(4, 'DC', 'keychains_pendants', 'Leather Green Bag', 28, 'prod_1.png', 'This is an awesome product.'),
(5, 'GOT', 't_shirts', 'Smooth Cloth', 28, 'model_1.png', 'This is a must have merch for a GOT fan. #ValarMorghulis.'),
(6, 'The Flash', 'caps', 'Yellow Jacket', 58, 'model_7.png', 'This is just epic.'),
(7, 'DC', 't_shirts', 'arkham tee', 58.66, 'prod_2.png', 'Most cool DC Merch one can have.');

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
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
