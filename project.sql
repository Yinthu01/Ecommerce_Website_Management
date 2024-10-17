-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 03:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(14, 'Draham', 'Baba', 'e10adc3949ba59abbe56e057f20f883e'),
(15, 'Administrator-', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(4, 'Pillar', 'Food_Category_382.jpg', 'Yes', 'Yes'),
(6, 'Container', 'Food_Category_607.jpg', 'Yes', 'Yes'),
(9, 'Votive', 'Food_Category_650.jpg', 'No', 'Yes'),
(10, 'Floating', 'Food_Category_741.jpg', 'No', 'Yes'),
(11, 'White Tea Candles', 'Food_Category_632.jpg', 'Yes', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `product` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `product`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(7, 'Bali Candles', 5.00, 2, 10.00, '2023-09-06 10:33:48', 'On Delivery', 'Anshath Ahamed', '165655556', 'anshath7@gmail.com', '42, School lane'),
(8, 'Brand Candles', 6.00, 4, 24.00, '2023-09-06 10:34:37', 'Delivered', 'Su Waddy', '54545454545', 'su@gmail.com', '55, Pyay'),
(9, 'Bali Candles', 5.00, 1, 5.00, '2023-09-06 12:25:58', 'Ordered', 'hhh', 'hhhhb', 'su@gmail.com', 'ggnhjdgtdthdgt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(3, 'Bali Candles', 'Brighten up Your Place with Therapy Lab Candle\r\n\r\nBrand - Solimo Wax Tealight Candles/ 2-Hour Burn Time, Smokeless/ NO Residue.', 5.00, 'Food-Name-1887.jpg', 6, 'Yes', 'Yes'),
(4, 'Black Candles', 'Brighten up Your Place with Therapy Lab Candle\r\n\r\nBrand - Solimo Wax Tealight Candles/ 2-Hour Burn Time, Smokeless.', 4.00, 'Food-Name-8492.jpg', 4, 'Yes', 'Yes'),
(6, 'Brand Candles', 'Brighten up Your Place with Therapy Lab Candle\r\n\r\nBrand - Solimo Wax Tealight Candles/ NO Residue (High quality Packing)', 6.00, 'Food-Name-2840.jpg', 9, 'Yes', 'Yes'),
(9, 'Bottoo Candles', 'Brighten up Your Place with Therapy Lab Candle Brand - Solimo Wax Tealight Candles/ NO Residue (High quality Packing)', 3.00, 'Food-Name-979.jpg', 4, 'No', 'Yes'),
(10, 'Dalit Candles', 'Brighten up Your Place with Therapy Lab Candle Brand - Solimo Wax Tealight Candles/ 2-Hour Burn Time, Smokeless/ NO Residue.\r\n\r\n', 4.00, 'Food-Name-2089.jpg', 6, 'Yes', 'Yes'),
(11, 'Bubble Candles', 'Brighten up Your Place with Therapy Lab Candle Brand - Solimo Wax Tealight Candles/ NO Residue (High quality Packing)', 8.00, 'Food-Name-3387.jpg', 4, 'No', 'Yes'),
(12, 'Floating-candle', 'Brighten up Your Place with Therapy Lab Candle Brand - 100% Hand poured. Large round lavender floaters are a must for events such as housewarming and weddings.', 7.00, 'Food-Name-7936.jpg', 10, 'No', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
