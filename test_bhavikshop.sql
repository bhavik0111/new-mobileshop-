-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 05:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_bhavikshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE `category_master` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `cat_desc` varchar(255) NOT NULL,
  `cat_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`cat_id`, `cat_name`, `cat_image`, `cat_desc`, `cat_status`) VALUES
(3, 'Mobile', '1675055086samsungnote.jpg', 'Samsung note4 , black piss', 1),
(4, 'TV', '1675055176sonytv.jpg', 'Sony tv all available', 1),
(6, 'Laptop', '1675077013lenovolaptop.jpg', 'all piss available', 1),
(12, 'Cemera', '1675226607camera.png', 'black piss', 1),
(14, 'Watch', '1675322624watch.jpeg', 'all available', 1),
(16, 'Pc', '1675684399pc.jpeg', 'all available', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `prod_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` double NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `prod_desc` text NOT NULL,
  `prod_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`prod_id`, `cat_id`, `prod_name`, `prod_price`, `prod_image`, `prod_desc`, `prod_status`) VALUES
(30, 0, 'cover', 150, '1675322497cover mobile2.jpeg', 'ledher cover', 1),
(31, 0, 'handsfree', 1700, '1675322939handsfree.jpg', 'black colour,1 year warranty', 1),
(32, 0, 'belt', 400, '1675323327belt watch.jpg', 'new disign shape belt', 1),
(33, 0, 'lence', 10000, '1675323644lences cemera.jpeg', 'new', 1),
(34, 0, 'bag', 700, '1675332988bag laptop.jpeg', 'new shape', 1),
(35, 0, 'stand', 1600, '1675335086stand tv.jpg', 'hard stand', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_meta`
--

CREATE TABLE `product_meta` (
  `prodmt_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prodmt_glrimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_meta`
--

INSERT INTO `product_meta` (`prodmt_id`, `prod_id`, `prodmt_glrimg`) VALUES
(14, 33, '16753236440lence cemera.jpeg'),
(15, 34, '16753332220bag4 laptop.jpg'),
(17, 34, '16753332222bag2 laptop817-P3TInuL._SX679_.jpg'),
(18, 34, '16753332223bag1 laptop.jpg'),
(19, 34, '16753337330bag3 laptop.jpg'),
(20, 35, '16753350860stand4 tv.jpeg'),
(21, 35, '16753350861stand1 tv.png'),
(22, 37, '16753356581cover3 tv.jpeg'),
(23, 37, '16753356582cover2 tv.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `usr_id` int(11) NOT NULL,
  `usr_name` varchar(255) NOT NULL,
  `usr_email` varchar(255) NOT NULL,
  `usr_password` varchar(255) NOT NULL,
  `usr_role` int(11) NOT NULL,
  `usr_block` varchar(255) NOT NULL DEFAULT '1',
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`usr_id`, `usr_name`, `usr_email`, `usr_password`, `usr_role`, `usr_block`, `status`) VALUES
(1, 'croma', 'croma@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'Unblock', 'Active'),
(3, 'bigbajar', 'big@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'Unblock', 'Active'),
(9, 'atul', 'atul@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, 'Unblock', 'Active'),
(20, 'crystalmall', 'crystalmall@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'Unblock', 'Active'),
(21, 'aaaaaa', 'aaaaaa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, 'Unblock', 'Active'),
(22, 'abcd', 'abcd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'Unblock', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

CREATE TABLE `user_meta` (
  `usrmt_id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_master`
--
ALTER TABLE `category_master`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `product_meta`
--
ALTER TABLE `product_meta`
  ADD PRIMARY KEY (`prodmt_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`usr_id`);

--
-- Indexes for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`usrmt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_master`
--
ALTER TABLE `category_master`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `product_meta`
--
ALTER TABLE `product_meta`
  MODIFY `prodmt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `usrmt_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
