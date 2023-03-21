-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 12:22 AM
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
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `total_product` int(11) NOT NULL,
  `total` double NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`order_id`, `customer_id`, `first_name`, `last_name`, `phone`, `email`, `total_product`, `total`, `shipping_address`, `order_status`, `order_date`) VALUES
(63, 1, '11', '11', 11, '123@gmail.com', 1, 82000, '11', 2, '2023-03-21 07:00:00'),
(65, 1, '22', '22', 22, '123@gmail.com', 1, 2700, '22', 2, '2023-03-21 07:00:00'),
(66, 9, '333', '333', 333, 'gsfjhf@gmail.com', 2, 10700, '333', 2, '2023-03-21 07:00:00'),
(67, 1, '111', 'relience mall', 1111, '123@gmail.com', 2, 164000, '1', 1, '2023-03-21 07:00:00'),
(68, 1, '11', '11', 11, '123@gmail.com', 2, 12700, '11', 1, '2023-03-21 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `ordprod_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`ordprod_id`, `order_id`, `customer_id`, `product_id`, `product_name`, `product_qty`, `product_price`) VALUES
(91, 63, 1, 31, 'apple', 1, 82000),
(93, 65, 1, 32, 'series', 1, 2700),
(94, 66, 9, 33, 'cannon', 1, 10000),
(95, 66, 9, 34, 'bag', 1, 700),
(96, 67, 1, 31, 'apple', 2, 82000),
(97, 68, 1, 32, 'series', 1, 2700),
(98, 68, 1, 33, 'cannon', 1, 10000);

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
(31, 3, 'apple', 82000, '1675934601iphone14mobile.jpg', 'black colour,1 year warranty', 1),
(32, 14, 'series', 2700, '1675934637watch.jpeg', 'new disign shape belt', 1),
(33, 12, 'cannon', 10000, '1675934705camera.png', 'new', 1),
(34, 6, 'bag', 700, '1675332988bag laptop.jpeg', 'new shape', 1),
(38, 12, 'new brand', 48000, '1675919107cemera5.jpeg', 'all available', 1),
(39, 12, 'sony', 52000, '1675919165cemera1.jpeg', 'all brand available', 1),
(40, 4, 'lenovo', 25000, '1675919265tv.jpg', 'wifi connection available', 1),
(41, 3, 'samsung', 18000, '1675919377samsungnotemobile.jpg', '8gb ram 512 ssd', 1);

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
(22, 37, '16753356581cover3 tv.jpeg'),
(23, 37, '16753356582cover2 tv.jpeg'),
(26, 32, '16759346370beltwatch.jpg'),
(28, 31, '16760144570covermobile2.jpeg'),
(29, 38, '16760144890lencescemera.jpeg'),
(30, 40, '16760145330cover2tv.jpeg'),
(31, 40, '16760145331cover3tv.jpeg');

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
  `usr_block` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`usr_id`, `usr_name`, `usr_email`, `usr_password`, `usr_role`, `usr_block`, `status`) VALUES
(1, 'croma', 'croma@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'unblock', 1),
(3, 'big', 'big@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, 'unblock', 1),
(9, 'shiv', 'shiv@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, 'unblock', 1),
(20, 'crystalmall', 'crystalmall@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, 'unblock', 1),
(21, 'prince', 'prince@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, 'block', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_master`
--
ALTER TABLE `category_master`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`ordprod_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_master`
--
ALTER TABLE `category_master`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `ordprod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product_meta`
--
ALTER TABLE `product_meta`
  MODIFY `prodmt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
