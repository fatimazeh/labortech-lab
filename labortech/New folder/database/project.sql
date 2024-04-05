-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 03:54 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(50) NOT NULL,
  `First_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(50) NOT NULL,
  `message1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `First_name`, `email`, `mobile`, `message1`) VALUES
(1, 'vbngf', 'saad@gmail.com', 122232, 'thgfh'),
(2, 'arman', 'saad@gmail.com', 909, 'iytrtutyrgertge'),
(3, 'vbngf', 'saad@gmail.com', 2147483647, 'kinza'),
(4, 'arman', 'saad@gmail.com', 2322343, 'hahahahahahaha'),
(5, 'huzaifa ', 'nasirqirat1@gmail.com', 2322343, 'kinza'),
(6, 'fatima', 'nasirqirat1@gmail.com', 2322343, 'thank you'),
(7, 'huzaifa ', 'nasirqirat1@gmail.com', 2322343, 'kinza'),
(8, 'Kinza Sheikh', 'kinza@gmail.com', 32323, 'Thank You'),
(9, 'kinza', 'nasirqirat1@gmail.com', 2322343, 'wania'),
(10, 'huzaifa ', 'nasirqirat1@gmail.com', 2322343, 'kinza');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(255) NOT NULL,
  `First_name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` int(255) NOT NULL,
  `message1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `First_name`, `email`, `mobile`, `message1`) VALUES
(1, 'user', 'user@user.com', 111111, 'hello'),
(2, 'huzaifa ', 'nasirqirat1@gmail.com', 2322343, 'hgfhfdd');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(11) NOT NULL,
  `o_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Id`, `o_name`, `email`, `phone`, `adress`, `pmode`, `products`, `amount_paid`) VALUES
(1, 'Admin', 'admin@admin.com', '000000000', 'pakistan', 'netbanking', 'Dealistic Microscope(1)', '120'),
(2, 'user', 'user@user.com', '000000', 'pakistan', 'cod', 'Dealistic Microscope(1), Pressure-96(1)', '619'),
(3, 'usman', 'nasirqirat1@gmail.com', '033647856749', 'thank you', 'netbanking', 'Biotechnology Microscope(1), Blood Test Tubes(1), Stethoscope(1)', '276');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(10) NOT NULL,
  `product_qty` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `product_name`, `product_price`, `product_image`, `product_code`, `product_qty`) VALUES
(1, 'Dealistic Microscope', '120.00', 'images\\product\\01.jpg', '1001', 1),
(2, 'Biotechnology Microscope', '160.00', 'images\\product\\02.jpg', '1002', 1),
(3, 'Blood Test Tubes', '74.00', 'images\\product\\03.jpg', '1003', 1),
(4, 'Stethoscope', '42.00', 'images\\product\\04.jpg', '1004', 1),
(5, 'Test Tube Isolated', '95.00', 'images\\product\\05.jpg', '1005', 1),
(6, 'Optical Microscope', '165.00', 'images\\product\\06.jpg', '1006', 1),
(7, 'Pressure-96', '499', 'images\\product\\07.jpg', '1007', 1),
(8, 'Visual stand', '1500', 'images\\product\\08.jpg', '1008', 1),
(9, 'Perkinelmer', '2000', 'images\\product\\09.jpg', '1009', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(200) NOT NULL,
  `name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` text NOT NULL,
  `user_type` varchar(200) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Admin', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', 'admin'),
(2, 'user', 'user@user.com', '6ad14ba9986e3615423dfca256d04e3f', 'user'),
(3, 'kinza', 'kinza@gmail.com', '90b4efb659479e3f0a7d876ee7209744', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);
ALTER TABLE `contact` ADD FULLTEXT KEY `First_name` (`First_name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);
ALTER TABLE `users` ADD FULLTEXT KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `product` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
