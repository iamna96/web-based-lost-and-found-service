-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 05:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lostfound`
--

-- --------------------------------------------------------

--
-- Table structure for table `fitems_info`
--

CREATE TABLE `fitems_info` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `found_location` varchar(30) NOT NULL,
  `specific_location_description` varchar(50) NOT NULL,
  `contact` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fitems_info`
--

INSERT INTO `fitems_info` (`id`, `name`, `product_category`, `product_name`, `found_location`, `specific_location_description`, `contact`) VALUES
(1, 'Amna', 'Mobile Phone', 'SAMSUNG', 'Rose Garden', 'Opposite Girls Hostel', 'amna123@gmail.com'),
(2, 'Alina', 'Laptop', 'DELL', 'Islamic Center', 'Near Examination Center', '03456234660'),
(3, 'Hina', 'Mobile Phone', 'OPPO', 'Academic Blocks', 'IT Department', '03155763448'),
(4, 'Aliha', 'Student Card', 'Student Card', 'Academic Blocks', 'Management Sciences Department', '03225587344'),
(5, 'Uswa', 'ID Card', 'ID Card', 'Cafeteria', 'Girls Cafeteria', '03144985780'),
(6, 'Marrium', 'Sporting Goods', 'Bats', 'Others', 'Cricket Ground', '03485623880'),
(7, 'Ansa', 'Bag', 'Gucci', 'Cafeteria', 'Girls Cafeteria', 'ansa321@yahoo.com'),
(8, 'Aimen', 'Student Card', 'Student Card', 'Others', 'Academic Parking', 'aimen123@gmail.com'),
(9, 'Huma', 'Laptop', 'HP', 'Others', 'Multipurpose Hall', '03376284550'),
(10, 'Amna', 'Wallet', 'Gucci', 'Others', 'Football Ground', 'amnatanoli@gmail.com'),
(11, 'Maira', 'Documents', 'Transcript', 'Bus Stand', 'Mansehra City Bus', '03488481770'),
(12, 'Fiza', 'Documents', 'Provisional certificate', 'Others', 'Examination center', '03007625505'),
(13, 'Aneesa', 'Wallet', 'Gucci', 'Cafeteria', 'Boys Cafeteria', '03005347705'),
(14, 'Haleema', 'Others', 'ATM Card', 'Others', 'Khyber Bank', '03399239550'),
(15, 'Samia', 'Mobile Phone', 'LG', 'Others', 'Gym', '03266751880'),
(16, 'Uswa', 'Others', 'Jewellery', 'Academic Blocks', 'Art & Designing Department', '03354237550'),
(17, 'Alina Khan', 'Documents', 'Scholorship Form', 'Others', 'Vc Loan', 'alina123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `litems_info`
--

CREATE TABLE `litems_info` (
  `id` int(10) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `product_category` varchar(50) CHARACTER SET latin1 NOT NULL,
  `product_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `lost_location` varchar(30) CHARACTER SET latin1 NOT NULL,
  `specific_location_description` varchar(50) CHARACTER SET latin1 NOT NULL,
  `contact` char(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `litems_info`
--

INSERT INTO `litems_info` (`id`, `name`, `product_category`, `product_name`, `lost_location`, `specific_location_description`, `contact`) VALUES
(1, 'Ansa', 'Bag', 'Gucci', 'Cafeteria', 'Girls Cafeteria', 'ansa123@gmail.com'),
(2, 'Aimen', 'Student Card', 'Student Card', 'Others', 'Academic Parking', '03375435660'),
(3, 'Huma', 'Laptop', 'HP', 'Others', 'Multipurpose Hall', '03376284550'),
(4, 'Amna', 'Wallet', 'Gucci', 'Others', 'Football Ground', 'amnatanoli33@gmail.com'),
(5, 'Maira', 'Documents', 'Transcript', 'Bus Stand', 'Mansehra City Bus', 'maira00@gmail.com'),
(6, 'Fiza', 'Documents', 'Provisional certificate', 'Others', 'Examination center', '03007625505'),
(7, 'Aneesa', 'Wallet', 'Gucci', 'Cafeteria', 'Boys Cafeteria', '03005347705'),
(8, 'Haleema', 'Others', 'ATM Card', 'Others', 'Khyber Bank', '03399239550'),
(9, 'Samia', 'Mobile Phone', 'LG', 'Others', 'Gym', '03266751880'),
(10, 'Uswa', 'Others', 'Jewellery', 'Academic Blocks', 'Art & Designing Department', '03354237550');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_name`, `user_email`, `message`) VALUES
(13, 'Amna Tanoli', 'amna098@gmail.com', 'Hello, I am facing a problem while changing my password.'),
(14, 'Maira Khan', 'maira234@gmail.com', 'Hello there, I am facing a Problem while searching for the lost item'),
(15, 'Marrium Khan', 'marrium732@gmail.com', 'I am facing a Problem while updating my Password'),
(16, 'Aneesa Khan', 'aneesa672@gmail.com', 'Hi, I\'m facing problem while signing out');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `contactno`, `password`, `gender`, `user_type`) VALUES
(40, 'Zainab', 'zainab55@gmail.com', '03477123975', '78584fff2587ae0d947f3cf5fc35af73', 'Female', 'user'),
(41, 'Saira ', 'sairakhan@gmail.com', '03006514498', '78584fff2587ae0d947f3cf5fc35af73', 'Female', 'user'),
(42, 'Marrium Khan', 'marrium732@gmail.com', '03277531990', '9618a0a2e02e134e8e35ae4633b4ae07', 'Female', 'user'),
(44, 'Aneesa Khan', 'aneesa672@gmail.com', '03478326607', '9717d34706b71bba50ef20c173f527b7', 'Female', 'user'),
(46, 'Maira Khan', 'maira234@gmail.com', '03398456880', 'a0595699017a5afa99c374d89a7c186d', 'Female', 'user'),
(48, 'Amna Tanoli', 'amna098@gmail.com', '03455762330', '2b4951ca66693164e23a6e693b0848c6', 'Female', 'user'),
(49, 'Admin', 'admin098@gmail.com', '03452761330', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Female', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fitems_info`
--
ALTER TABLE `fitems_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `litems_info`
--
ALTER TABLE `litems_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fitems_info`
--
ALTER TABLE `fitems_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `litems_info`
--
ALTER TABLE `litems_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
